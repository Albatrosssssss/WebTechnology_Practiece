<?php
  if(isset($_POST['btn'])){
    echo $firstname = $_POST['fname'];
    $lastnmae = $_POST['lname'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $password_repeat = $_POST['psw-repeat'];

    $error = 
  }

?>
<!DOCTYPE html>
<html>
<head>
<title>Counter_Representative_Registration</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="class">
    <form action="" method="post" novalidate>
        <div class="container">
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="Firstname"><b>First name </b></label>
          <input type="text" placeholder="First name" name="fname" id="first_name" required><br><br>

          <label for="Lastname"><b>Last name </b></label>
          <input type="text" placeholder="First name" name="lname" id="last_name" required><br><br>

          <label for="Number"><b>Phone Number</b></label>
          <input type="number" placeholder="Enter Phone Number" name="number" id="number" required><br><br>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required><br><br>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br><br>
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
          <hr>
      
          <p>By creating an account you agree to our <a href="Terms_Privacy.html">Terms & Privacy</a>.</p>
          <button type="submit" class="registerbtn" name ="btn">Register</button>
        </div>
      
        <div class="container signin">
          <p>Already have an account? <a href="Manager_Sign_In.html">Sign in</a>.</p>
        </div>
      </div>
      </form>
</body>
</html>