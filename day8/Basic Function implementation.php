<?php
function display()
{ echo "HELLO WORLD!"; }

function add($val1,$val2)
{
    $total=$val1+$val2;
    echo "The total is $total";
}

function maths($val1,$val2)
{
    $total=$val1+$val2;
    return $total;
}
?>
<html>
<head>

    <title>PHP Functions</title>
    
</head>
    <body>
    <?php
    
        display();
        echo "&nbsp;";
        add(5,10);
        $ans=maths(10,20);
        echo "&nbsp; the total is $ans";
    ?>
    </body>

</html>