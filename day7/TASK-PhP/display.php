<?php
$val1= $_POST['first'];
$val2= $_POST['last'];
$val4= $_POST['pass'];
$val3= $_POST['email'];
$val5= $_POST['gender'];
$val6= $_POST['date'];
$val7= $_POST['month'];
$val8= $_POST['year'];
$val9=$_REQUEST['check'];
$val10=$_POST['add'];

echo "your first name is $val1<br/>";
echo "your last name is $val2<br/>";
echo "your email is $val3<br/>";
echo "your password is $val4<br/>";
if($val5=="m")
    echo "your gender is Male<br/>";
    else
        echo "your gender is female<br/>";
echo "your birth date is $val6<br/>";
echo "your birth month is $val7<br/>";
echo "your birth year is $val8<br/>";
echo "You have: <br/>";
foreach($val9 as $val)
echo $val."&nbsp;";

echo "You address is: $val10";
?>


<html>
<head>
    <title>Registration form</title>
    </head>
<body>
    
    
    
    </body>

</html>