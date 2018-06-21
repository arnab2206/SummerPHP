<?php


?>


<html>
<head><title>TRY</title></head>
<body>
    
    <form action="display.php" method="post">
        <table align="center" border="1">
    <tr><td>First Name : </td><td><input type="text" name="first"/><br/></td></tr>
<tr><td>Last Name : </td><td><input type="text" name="last"/><br/></td></tr>
<tr><td>Email : </td><td><input type="text" name="email"/><br/></td></tr>
<tr><td>Password : </td><td><input type="password" maxlength="8" name="pass"/><br/></td></tr>
<tr><td>D.O.B. :</td><td> <select name="month">
<option>Jan</option>
<option>Feb</option>
<option>Mar</option>
</select>
<select name="date">
<option>1</option>
<option>2</option>
<option>3</option>
</select>
<select name="year">
<option>1996</option>
<option>1997</option>
<option>1998</option>
</select><br/></td></tr>
<tr><td>Gender : </td><td>Male <input type="radio" name="gender" value="m"/>Female <input type="radio" name="gender" value="f"/><br/></td></tr>
<tr><td>I Have : </td><td>Desktop<input type="checkbox" name="check[]" value="desktop"/> Laptop<input type="checkbox" name="check[]" value="laptop"/> Mobile<input type="checkbox" name="check[]" value="mobile"/><br/></td></tr>
<tr><td>Address : </td><td><textarea name="add"></textarea><br/></td></tr>
</table>
    <table align="center" border="1">
    <tr><td><input type="submit" name="sub"/><br/></td></tr>
    </table>
    </form>
</body>
</html>