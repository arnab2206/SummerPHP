<html>
<head>
<title> Array in PHP</title>    
</head>
<body>
    <form action="" method="post">
    First Number: <input type="text" name="num1" style="background-color:black; font-weight:bold; color: white;"/><BR/>
    Second number: <input type="text" name="num2" style="background-color:black; font-weight:bold; color: white;"/><BR/>
    <input type="submit" name="sub" value="ADD"/>
    </form>
<?php
    $val=array();
    if(!empty($_REQUEST['sub']))
    {
    $val[0]=$_REQUEST['num1'];
    $val[1]=$_REQUEST['num2'];
    $val[3]=$val[0]+$val[1];
    echo "The total is $val[3]";
    $val[4]=6;
    $val[5]=10;
    print_r($val);
    foreach($val as $values)
        echo $values."<br/>";
    }
?>
    
</body>
</html>