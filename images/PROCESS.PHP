<html>
<body>
  <style>
  body {
  }
   table,tr,td {
    border: 2.4px solid blue;
    color:black;
  }
  center {
    font-size: 20px;
  }
  </style>
<table align="center">
  <div class="bg-image"></div>
  <center><h1><?php echo "Registration Form" ?></h1></center>
 <form action="file.php" method="post"> <!-- the action contains the specific file of the validation form and the method used is post -->
    <td>Name:</td>
<td><input type="text" name="fullname"
placeholder="please enter your name"></td>
</tr>
    <tr>
<td>User name:</td>
<td><input type="text" name="username"
placeholder="please enter your username"></td>
<tr>

<tr>
<td>Address:</td>
<td><input type="text" name="address"
placeholder="please enter your address"></td>
</tr>
     <td>Birth Year:</td>
<td><input type="number" name="birthyear"
placeholder="please enter your birthyear"></td>
</tr>
   <td>Password:</td>
<td><input type="text" name="password"
placeholder="please enter your password"></td>
</tr>
 <tr>
<td><center><input type="submit" name="submit" value="register"></center></td>
</tr>
    </form>
</table>
</body>
</html>