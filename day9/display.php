<?php
session_start();

$_SESSION['value1']=$_SESSION['value1']+1;
$val=$_SESSION['value2']+1;
?>
<html>
<head>
<title>DISPLAY SESSION RESULT</title>    
</head>
<body>
    
The data in the first variable is: <?php echo $_SESSION['value1']; ?>  
The data in the second variable is: <?php echo $_SESSION['value2']; ?>
    
</body>
</html>

