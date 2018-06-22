<?php
if(!empty($_REQUEST['sub']))
{
    $exptime=time()+3600;
    $value=$_REQUEST['num1'];
    setcookie('valueOne',$value,$exptime);
    setcookie('valueTwo',$_REQUEST['num2'],time()+3600);
    header('location:display.php');
    
}
?>
<html>
    <head>
        <title>day8 Assignment</title>
    </head>
    <body>
        <form action="" method="POST">
        <table>
            <tr>
                <td>First Number :</td><td><input type="number" name="num1"/></td>
            </tr>
            <tr>
                <td>Second Number :</td><td><input type="number" name="num2"/></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" name="sub"/></td>
            </tr>

        </table>
        </form>
        </body>
</html>