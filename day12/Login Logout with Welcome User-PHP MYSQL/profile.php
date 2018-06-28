<?php
    include('dbconn.php');
    if(empty($_SESSION['login']))
   header('location:index.php');
else if($_SESSION['value']=1)
?>
<html>
	<head>
		<title>Profile Page</title>
	</head>
	<body>
        <?php
       $tmp=array();
        $tmp=$_SESSION['first'];
        echo "<h1>Welcome to your Profile Mr. ".$tmp[0]." ".$tmp[1]."</h1>";
        
        ?>
		
        <br/>
        <h2><a href="logout.php">LOG OUT</a></h2>
	</body>

</html>