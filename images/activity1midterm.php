<!DOCTYPE HTML>
<html>
<title> PHP Validation </title> <!--my title -->
<body>
<center>
      <?php echo "Validation Form" ?> <br><br> <!-- this is the header of the form -->
  <table>
      <tr>
        <td> Name: <?php echo ($_POST ["fullname"]) ?> </td> <!--  to display the user's inputted name -->
      <tr>
        <td> <?php $username = $_POST ["username"]; ?> <!-- this is to call the user's username from the other file -->
          <?php if (strlen($username) >= 8){ // to validate if the user inputted 8 characters and above for his/her username
            echo "Username: " . $username; // to display the user's username if his/her characters are 8 and above
          }else{
            echo "Username: " . "Please enter a minimum of 8 characters"; // this will be displayed when the user's username is 8 characters and below
          }
        ?> </td>
      <tr>
        <td> Address: <?php echo ($_POST ["address"]) ?> </td> <!--  to display the user's inputted address-->
      <tr>
        <td>
         <?php $birthyear = $_POST ["birthyear"]; //  to call the value of the user's birth year
         $currentyr = 2022 ?> <!-- this is the current year -->
         <?php echo "Age: " . ($currentyr - $birthyear) ?> <!-- this will display the age of the user by subtracting his/her current year and the birth year -->
        </td>
      <tr>
        <td> <?php $password = $_POST ["password"]; ?> <!--  to call the user's password from the next file -->
    <?php if (strlen($password) >= 5){ // to validate if the user inputted 5 characters and above for the password.
              echo "Password: " . $password; // this will display the user's password if his/her characters are 5 and above
          }else{
              echo "Password: " . "Please enter a minimum of 5 characters."; // this  will be displayed when the user's username is 8 characters and below
    }
      ?></td>
    </tr>
  </table>
</center>
</body>
</html>