<html>
<head><title>PhP File Upload</title></head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">
        <table>
        <tr>
        <td> Upload a File</td>    
            <td><input type="file" name="upload"/></td>
            </tr>
            <tr>
            <td></td>
                <td>
                    
                <input type="submit" name="uploadBtn" value="upload"/>
                </td>
            </tr>
        </table>
    
    </form>
    
    <?php
      
   
    if(!empty($_REQUEST['uploadBtn'])){ 
         if($_FILES['upload']['type']=='image/jpeg' || $_FILES['upload']['type']=='image/png'){         
        echo $_FILES['upload']['name']."<br/>";
        echo $_FILES['upload']['tmp_name']."<br/>";
        echo $_FILES['upload']['size']."<br/>";
        echo $_FILES['upload']['type']."<br/>";
        $path="uploads/".$_FILES['upload']['name'];?>
        <img src="uploads/<?php echo $_FILES['upload']['name']; ?>" height="200" width="200" />
        <?php
        move_uploaded_file($_FILES['upload']['tmp_name'],$path);
    }
     else{echo "invalid";}
    }
    ?>
</body>
</html>