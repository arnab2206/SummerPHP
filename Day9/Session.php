<?php
session_start();
if(isset($_REQUEST['sub'])){
    $_SESSION['value1']=$_REQUEST['num1'];
    $_SESSION['value2']=$_REQUEST['num2'];
    header('location:display.php');
}
?>

<html>
<head>
    
    <title>SESSION START EXAMPLE</title>
    
</head>
    <body>
    <form method="post">
    <table>
    <tr>
    <td>First Number:</td>    
        <td> <input type="text" name="num1"/></td>
    </tr>    
    <tr>
    <td>Second Number:</td>    
        <td> <input type="text" name="num2"/></td>
    </tr>
         <tr>
    <td>Submit Data:</td>    
        <td> <input type="submit" name="sub"/></td>
    </tr>
        
    </table>    
        
    </form>
    </body>
</html>