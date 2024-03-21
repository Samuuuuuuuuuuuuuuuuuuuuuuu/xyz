<?php 
require_once "config.php";
?>
<!doctype html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Code</title>
  </head>
  <body><center>
  <a href="index.php">Home</a>
    
    <h1>User Registration</h1>
    <form action="" method="POST">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br></br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br>
  <label for="gender">Gender:</label>
  <input type="radio" id="Male" name="gender" value="Male" Checked>
  <input type="radio" id="Fimale" name="gender" value="Female"><br>
  <label for="emalil">email:</label>
  <input type="email" id="email" name="email"><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br>
  <button name="btn">Registerr</button>
</form>
  </body>
</html>
<?php
if(isset($_POST['btn'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql = "INSERT INTO tbl_users(user_firstname, user_lastname,user_gender, user_email,user_password)
VALUES('$fname','$lname', '$gender', '$email','$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
