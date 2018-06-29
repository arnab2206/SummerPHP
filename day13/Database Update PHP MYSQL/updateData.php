<?php
include('dbconn.php');
$userID=$_REQUEST['id'];
if(!empty($_REQUEST['updateBtn'])){
    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $sql="UPDATE empdetails SET emp_fname='$fname', emp_lname='$lname' WHERE emp_id=$userID";
    mysqli_query($conn,$sql);
    header('location:index.php');
}
$sql="SELECT * FROM empdetails WHERE emp_id='$userID'";
$result=mysqli_query($conn,$sql);
$rws=mysqli_fetch_array($result);

?>
<html>
<head> <title>Update Data</title></head>
    <body>
        <form>
        <table>
        <tr>
        <td>First Name:</td>
            <td><input type="text" name="fname" value="<?php echo $rws[1]; ?>"/></td>
        </tr> 
            <tr>
        <td>Last Name:</td>
            <td><input type="text" name="lname" value="<?php echo $rws[2]; ?>"/></td>
        </tr>
            <tr>
        <td>Email Id:</td>
            <td><input type="text" name="email" value="<?php echo $rws[3]; ?>" disabled/></td>
        </tr>
            
            <tr>
            <td>
                <input type="hidden" name="id" value="<?php echo $userID ?>"/>
                <input type="submit" name="updateBtn" value="Update Data"/></td>
            </tr>
        </table> 
        </form>
    
    </body>
</html>