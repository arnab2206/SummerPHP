<html>
<head>
    <title>PhP Starting</title>
    <link rel="stylesheet" type="text/css" href="pro.css"/>
    </head>
<body>
<form action="" method="POST">  
<table>
    <tr>
    <td>First Number:</td>
        <td><input type="text" name="num1" <?php if(!empty($_REQUEST['sub']) && empty($_REQUEST['num1'])) echo "class='box'"; if(!empty($_REQUEST['sub']) && !empty($_REQUEST['num1'])){ ?> value="<?php echo $_REQUEST['num1'];?>" <?php } ?> /></td>
        </tr>
    <tr>
    <td>Last Number:</td>
        <td><input type="text" name="num2" <?php if(!empty($_REQUEST['sub']) && empty($_REQUEST['num2'])) echo "class='box'"; if(!empty($_REQUEST['sub']) && !empty($_REQUEST['num2'])){ ?> value="<?php echo $_REQUEST['num2'];?>" <?php } ?> /></td>
    </tr>
    <tr>
    <td><input type="submit" value="Display data" name="sub"/></td>
    </tr>
    </table>    
    </form>
    
    <?php
    
if(!empty($_REQUEST['sub']) && !empty($_REQUEST['num1']) && !empty($_REQUEST['num2'])){
$val1=$_REQUEST['num1'];
$val2=$_REQUEST['num2'];
$total=$val1+$val2;
    echo "The total is $total";}
?>
    </body>
</html>