<?php
include('dbconn.php');
if(!empty($_REQUEST['submitBtn'])){
    $firstName = $_REQUEST['fname'];
    $lastName =  $_REQUEST['lname'];
    $emailId = $_REQUEST['email'];
    $password =  md5($_REQUEST['pwd']);
    $sql = "INSERT INTO empdetails
    VALUES('','  $firstName ',' $lastName',' $emailId',' $password')";
    mysqli_query($conn,$sql);
}

?>
<html>
<head> 
    <title>Mysql with php</title>
    </head>
    <body>
    <h1 align="center">REGISTRATION Form</h1>
          <form method="post">
              <table align="center">
        <tr>
            <td>first name</td>
            <td><input type="text" name="fname"/></td>
            </tr>
             <tr>
            <td>last name</td>
            <td><input type="text" name="lname"/></td>
            </tr>
             <tr>
            <td>email</td>
            <td><input type="text" name="email"/></td>
            </tr>
             <tr>
            <td>password</td>
            <td><input type="password" name="pwd"/></td>
            </tr>
                  <tr>
                  <td></td>
                  <td><input type="submit" name="submitBtn" value="registration"/>
                      </td>
                  </tr>
        </table>
        </form>
        
        <hr/>
        
        <?php
        $sql="SELECT * FROM empdetails";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            while($rws=mysqli_fetch_array($result))
                echo $rws[0]." ".$rws[1]." ".$rws[3]."<br/>";
        }
        else
        {
            echo "ERROR:".mysqli_error($conn);
        }
        ?>
        
    </body>
</html>