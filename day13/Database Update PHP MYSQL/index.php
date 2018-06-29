<?php
include('dbconn.php');
if(!empty($_COOKIE['value1']) && !empty($_COOKIE['value2']))
{
    header('location:profile.php');
}

if(!empty($_REQUEST['submitBtn'])){
	$firstName = $_REQUEST['fname'];
	$lastName = $_REQUEST['lname'];
	$emailId = $_REQUEST['email'];
	$password = md5($_REQUEST['pwd']);
	$sql = "INSERT INTO empdetails VALUES('','$firstName','$lastName','$emailId','$password')";
	mysqli_query($conn,$sql);
}
if(!empty($_REQUEST['loginBtn']) || (!empty($_COOKIE['userName'])) && (!empty($_COOKIE['userPwd']))){
	if(!empty($_COOKIE['userName']) && (!empty($_COOKIE['userPwd']))){
    $userName=$_COOKIE['userName'];
    $userPwd=$_COOKIE['userPwd'];
    }
    else{
    $userName = $_REQUEST['uName'];
	$userPwd = md5($_REQUEST['uPassword']);
    }
    if($_REQUEST['rem']==1){
        setcookie('userName',$userName,time()+3600);
        setcookie('userPwd',$userPwd,time()+3600);
    }
        
	$sql = "SELECT emp_email, emp_pwd FROM empdetails WHERE emp_email='$userName' AND emp_pwd='$userPwd'";
    $sql2="SELECT emp_fname, emp_lname FROM empdetails WHERE emp_email='$userName' AND emp_pwd='$userPwd'";
    $temp=mysqli_query($conn,$sql2);
    $_SESSION['first']=mysqli_fetch_array($temp);
	$result = mysqli_query($conn,$sql);
	if($result)
    {
         $rws = mysqli_num_rows($result);
		if($rws==1)
        {
            header('Location:profile.php');
            $_SESSION['login']=1;
        }        
		else
			$error = 1;

    }
	else
    echo mysqli_error($conn);
}

?>
<html>
	<head>
		<title>MySQL With PHP</title>
	</head>
	<body>
		<h1 align="center">Registration Form</h1>
		<form method="post">
			<table align="center">
				<tr>
					<td>First Name</td>
					<td><input type="text" name="fname"/></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text" name="lname"/></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"/></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pwd"/></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submitBtn" value="Registration"/></td>
				</tr>
			</table>
		</form>
		<hr/>
		<h1 align="center">Login Section</h1>
		<form method="post">
		<table align="center" border="1">
			<tr>
				<td>User Name</td>
				<td><input type="text" name="uName" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="uPassword" /></td>
			</tr>
             <tr>
            <td></td>
                <td>Remember Me:<input type="checkbox" name="rem" value="1"/></td>
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" name="loginBtn" value="Login" /></td>
			</tr>
           
			<?php
				if(!empty($_REQUEST['loginBtn']) && $error ==1){
			?>
			<tr>
				<td></td>
				<td style="color:red;font-weight:bold;">Check Your Login Details</td>
			</tr>
			<?php
				}
			?>
		</table>
		</form>		
		<hr/>
		<h1 align="center">Display Data</h1>
			<table align="center" border="1">
				<th>EMP ID</th>
				<th>EMP First Name</th>
				<th>EMP Email ID</th>
                <th>Update Data</th>
		<?php
		$sql = "SELECT * FROM empdetails";
		$result = mysqli_query($conn,$sql);
		if($result){
				while($rws = mysqli_fetch_array($result))
					echo "<tr><td>".$rws[0]."</td><td> ".$rws[1]."</td><td>".$rws[3]."</td></tr>";
		}else
			echo "Error :".mysqli_error($conn);
		?>
		</table>
		<hr/>
		<table align="center" border="1">
			<tr>
				<td align="center"><strong>EMP ID</strong></td>
				<td align="center"><strong>EMP First Name</strong></td>
				<td align="center"><strong>EMP Email ID</strong></td>
			</tr>
		<?php
		$sql = "SELECT * FROM empdetails";
		$result = mysqli_query($conn,$sql);
		if($result){
				while($rws = mysqli_fetch_array($result))
					echo "<tr><td>".$rws[0]."</td><td> ".$rws[1]."</td><td>".$rws[3]."</td><td>"."<a href=updateData.php?id=".$rws[0].">Update</a>"."</td></tr>";
		}else
			echo "Error :".mysqli_error($conn);
		?>
		</table>
	</body>
</html>
