
<?php
  if(isset($_POST['btn'])){
    setcookie("user","sadi",time()+10);
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $blood = $_POST['blood'];

    $number = $_POST['number'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $address = $_POST['address'];

    $password = $_POST['password'];
    $username = $_POST['username'];

    $error = [];
    if(empty($_POST['fname'])){
        $error['firstname'] = 'Insert Your First Name';
    }
    if(empty($_POST['lname'])){
        $error['lastname'] = 'Insert Your last name';
    }
    if(empty($_POST['father_name'])){
        $error['father_name'] = 'Insert Your Fathers name';
    }
    if(empty($_POST['mother_name'])){
        $error['mother_name'] = 'Insert Your mothers name';
    }
    if(empty($_POST['dob'])){
        $error['dob'] = 'Insert Your Date of birth name';
    }
    if(empty($_POST['gender'])){
        $error['gender'] = 'Insert Your gender';
    }
    if(empty($_POST['blood'])){
        $error['blood'] = 'Insert Your blood';
    }


    if(empty($_POST['number'])){
        $error['number'] = 'Insert Your Number';
    }
    if(empty($_POST['email'])){
        $error['email'] = 'Insert Your Email';
    }
    if(empty($_POST['website'])){
        $error['website'] = 'Insert Your website';
    }
    if(empty($_POST['address'])){
        $error['address'] = 'Insert Your address';
    }


    if(empty($_POST['password'])){
        $error['password'] = 'Insert Your password';
    }
    if(empty($_POST['username'])){
        $error['username'] = 'Insert Your User name';
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <table align = "center">
      <td>
    <form action="" method="post" novalidate>
      <h1>Registration</h1>
      <p>Please fill in this form to create an account</p>
      <hr>
      <fieldset>
        <legend>General information</legend>

        <label for="Firstname"><b>First name </b></label>
        <input type="text" placeholder="First name" name="fname" id="first_name" value="<?php if(isset($firstname)) echo $firstname ?>" ><br>
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

        <label for="Lastname"><b>Father's name </b></label>
        <input type="text" placeholder="First name" name="father_name" id="last_name" value="<?php if(isset($father_name)) echo $father_name ?>" ><br>
        <span>
        <?php
          if(isset($error['father_name'])){
            echo $error['father_name'];
          }
        ?><br>
        </span>

        <label for="Lastname"><b>Mother's name </b></label>
        <input type="text" placeholder="First name" name="mother_name" id="last_name" value="<?php if(isset($mother_name)) echo $mother_name ?>" ><br>
        <span>
          <?php
          if(isset($error['mother_name'])){
            echo $error['mother_name'];
          }
          ?><br>
        </span>

        <label for="dob"><b>Date of Birth:</b></label>
        <input type="date" name="dob" id="dob" value="<?php if(isset($dob)) echo $dob ?>"><br><br>
        <?php
          if(isset($error['dob'])){
            echo $error['dob'];
          }
        ?><br>


        <label for="gender"><b>Gender </b></label>
        <input type="radio" name="gender" id="m" value="Male">Male
        <input type="radio" name="gender" id="m" value= "Female">Female
        <input type="radio" name="gender" id="m" value= "Others">Others <br><br>
        <span>
          <?php
          if(isset($error['gender'])){
            echo $error['gender'];
          }
          ?><br>
        </span>

        <label for="Blood"><b>Blood Group:</b></label>
        <select name="blood">
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="O+">O+</option>
        </select>
        <span>
          <?php
          if(isset($error['blood'])){
            echo $error['blood'];
          }
          ?><br>
        </span>
      </fieldset>

      <fieldset>
        <legend>Contact Information</legend>
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
        <input type="text" placeholder="Enter Email" name="email" id="email" value="<?php if(isset($email)) echo $email ?>" ><br>
        <span>
          <?php
          if(isset($error['email'])){
            echo $error['email'];
          }
          ?><br>
        </span>

        <label for="email"><b>Website</b></label>
        <input type="text" placeholder="Enter Website" name="website" id="email" value="<?php if(isset($website)) echo $website ?>" ><br>
        <span>
        <?php
          if(isset($error['website'])){
            echo $error['website'];
          }
        ?><br>
        </span>

        <label for="email"><b>Address</b></label>
        <input type="textarea" placeholder="Enter Address" name="address" id="email" value="<?php if(isset($address)) echo $address ?>"><br>
        <span>
          <?php
          if(isset($error['address'])){
            echo $error['address'];
          }
          ?><br>
        </span>
      </fieldset>

      <fieldset>
        <legend>Account Information</legend>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="psw" value="<?php if(isset($password)) echo $password ?>" ><br>
        <span>
          <?php
          if(isset($error['password'])){
            echo $error['password'];
          }
        ?><br>
        </span>

        <label for="psw"><b>Username</b></label>
        <input type="tsswordpa" placeholder="Enter Username" name="username" id="psw" value="<?php if(isset($username)) echo $username ?>" ><br>
        <span>
          <?php
          if(isset($error['username'])){
            echo $error['username'];
          }
          ?><br>
        </span>
      </fieldset>
      <button type="submit" class="registerbtn" name ="btn">Register</button>
  </form>
  </div>
  </td>
  </table>
</body>
</html>