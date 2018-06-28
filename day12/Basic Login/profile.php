<?php
    include('dbconn.php');
    if(empty($_SESSION['login']))
   header('location:index.php');

?>
<html>
	<head>
		<title>Profile Page</title>
	</head>
	<body>
		<h1>Welcome To Your Profile Page</h1>
        <br/>
        <h2><a href="logout.php">LOG OUT</a></h2>
	</body>

</html>