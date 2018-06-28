<?php
include('dbconn.php');
if(!empty($_REQUEST['submitBtn'])){
    $firstName = $_REQUEST['fname'];
    $lastName =  $_REQUEST['lname'];
    $emailId = $_REQUEST['email'];
    $password =  md5($_REQUEST['pwd']);
    $sql = "INSERT INTO empdetails
    VALUES('' , '$firstName' , '$lastName' , '$emailId' , ' $password')";
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
        <?php
        $sql="SELECT * FROM empdetails";
        $result=mysqli_query($conn,$sql);?>
        <table border="1">
                        <tr>                                 
                      <th>Employee ID</th>
                      <th>First Name</th>
                      <th>Last name</th>
                      <th>Email</th>
                    </tr>
    <?php
        if($result)
        {
          while($rws=mysqli_fetch_array($result))
          {
          
                echo "<tr><td>".$rws[0]."</td><td>".$rws[1]."</td><td>".$rws[2]."</td><td>".$rws[3]."</td></tr>";
            
          }                                  //echo $rws[0]." ".$rws[1]." ".$rws[3]."<br/>";
          }
        else
        {
            echo "ERROR:".mysqli_error($conn);
        }
        ?>
        </table>
    </body>
</html>