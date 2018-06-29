<?php
include('dbconn.php');
session_destroy();
setcookie('PHPSESSID','',time()-3600);
setcookie('userName','',time()-3600);
setcookie('userPwd','',time()-3600);
header('location:index.php');
?>