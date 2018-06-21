<html>
<head>
    <title>PhP Starting</title>
    </head>
<body>
<?php

    //echo "Hello World!";
    $val="Hello Mars";
    echo $val;
    $val=6;
    $val++;
    echo $val;
    echo "<h1>Hello World!</h1><br/>";
    echo "the value is $val <br/>";
    echo 'the value is $val <br/>';
    
    echo "<select>";
        for($i=1990; $i<=2018;$i++)
            echo "<option>$i</option>";
    echo "</select>";
    
?>  

    
    <select>
    <?php
        for($i=1900;$i<=2018;$i++){
            
        ?>
        <option><?php echo $i ?></option>
        <?php
        }
            ?>
    </select>
    
    <select>
    <?php
        for($i=1900;$i<=2018;$i++)
            echo"<option>$i</option>";
        ?>
    </select>
    
    <select>
    <?php
        $i=1900;
        while($i<=2018){
            echo"<option>$i</option>";
        $i++;
        }
        ?>
    
    </select>
    <select>
    <?php
        $i=1990;
        do{
            
            echo "<option>$i</option>";
            $i++;
        }while($i<=2018); 
        
        ?>
    
    </select>
    <input type="date"/>

  <form action="display.php" method="post">  
<table>
    <tr>
    <td>First name:</td>
        <td><input type="text" name="num1"/></td>
        </tr>
    <tr>
    <td>Last name:</td>
        <td><input type="text" name="num2"/></td>
    </tr>
    <tr>
    <td><input type="submit" value="Display data"/></td>
    </tr>
    </table>    
    
    
    
    
    
    </form>
    
    </body>
</html>

<?php
    /*echo "<html>";
echo "<head>";
echo "<title>Hello World</title>";
echo "</head>";
echo "<body>";
echo "hello";
echo "</body>";
echo "</html>";

*/

?>