<?php
  if(isset($_POST['btn'])){
    echo $firstname = $_POST['fname'];
    echo $lastname = $_POST['lname'];
    echo $number = $_POST['number'];
    echo $email = $_POST['email'];
    echo $password = $_POST['psw'];
    echo $password_repeat = $_POST['psw-repeat'];

    $error = [];
    if(empty($_POST['fname'])){
      $error['firstname'] = 'Insert Your First Name';
    }
    if(empty($_POST['lname'])){
      $error['lastname'] = 'Insert Your last name';
    }
    if(empty($_POST['number'])){
      $error['number'] = 'Insert Your Number';
    }
    if(empty($_POST['email'])){
      $error['email'] = 'Insert Your Email';
    }
    if(empty($_POST['psw'])){
      $error['password'] = 'Insert Your Password';
    }
    if(empty($_POST['psw-repeat'])){
      $error['password_repeat'] = 'Insert Your Password';
    }
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
          <input type="text" placeholder="First name" name="fname" id="first_name" value="<?php if(isset($firstname)) echo $firstname ?>"><br>
            <span>
            <?php
              if(isset($error['firstname'])){
                echo $error['firstname'];
              }
            ?><br>
            </span>

          <label for="Lastname"><b>Last name </b></label>
          <input type="text" placeholder="First name" name="lname" id="last_name" value="<?php if(isset($lastname)) echo $lastname ?>" ><br>
            <span>
            <?php
              if(isset($error['lastname'])){
                echo $error['lastname'];
              }
            ?><br>
            </span>

          <label for="Number"><b>Phone Number</b></label>
          <input type="number" placeholder="Enter Phone Number" name="number" id="number" value="<?php if(isset($number)) echo $number ?>" ><br>
            <span>
            <?php
              if(isset($error['number'])){
                echo $error['number'];
              }
            ?><br>
            </span>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" value="<?php if(isset($email)) echo $email ?>"><br>
            <span>
            <?php
              if(isset($error['email'])){
                echo $error['email'];
              }
            ?><br>
            </span>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw" value="<?php if(isset($password)) echo $password ?>"><br>
            <span>
            <?php
              if(isset($error['password'])){
                echo $error['password'];
              }
            ?><br>
            </span>

          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" value="
          <?php 
            if($password != $password_repeat) {
              echo "Password not matched";
            }
            else if(isset($password_repeat)) {
              echo $password_repeat;
            }
            else{

            }
          ?>" >
            <span>
            <?php
              if(isset($error['password_repeat'])){
                echo $error['password_repeat'];
              }
            ?><br>
            </span>
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