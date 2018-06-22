<?php
function ass($val1,$val2){
    if($_REQUEST['op']=='1')
    {
        $total = array();
        $total[0]=$val1+$val2;
        return $total;
    }
    if($_REQUEST['op']=='2')
    {
        $total = array();
        $total[0]=$val1*$val2;
        return $total;
    }
    if($_REQUEST['op']=='3')
    {
        $total1=$val1+$val2;
        $total2=$val1*$val2;
        $total = array();
        $total[0]=$total1;
        $total[1]=$total2;
        return $total;
    }
}
?>
<html>
    <head>
        <title>Seventh Assignment</title>
    </head>
    <body>
        <form action="" method="POST">
        <table>
            <tr>
                <td>First Number :</td><td><input type="text" name="num1"></td>
            </tr>
            <tr>
                <td>Second Number :</td><td><input type="text" name="num2"></td>
            </tr>
            <tr>
                <td>Operation :</td><td>Addition<input type="radio" name="op" value="1">Product<input type="radio" name="op" value="2">Both<input type="radio" name="op" value="3"></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" name="sub"></td>
            </tr>

        </table>
        </form>
        <?php
        if(!empty($_REQUEST['sub'])){
            $val1=$_REQUEST['num1'];
            $val2=$_REQUEST['num2'];
            $ans = array();
            $ans = ass($val1,$val2);
            
            if($_REQUEST['op']== 1)
                echo "The sum is: $ans[0]"."<br/>";
            elseif($_REQUEST['op']== 2)
                echo "The product is: $ans[0]"."<br/>";
            else{
                echo "The sum is: $ans[0]"."<br/>";
                echo "The product is: $ans[1]"."<br/>";

            }
        }
            ?>
        </body>
</html>