<?php
  $count=0;
  if(isset($_POST['button_sign'])){
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $dob = $_POST['dob'];
    $blood = $_POST['blood'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $reason = $_POST['reason'];
    setcookie("First_Name",$firstname,time()+10);
    $_SESSION['status']="pending";
    $status = "pending";
    $error = [];
    $error['count_1'] = 'Sign Up Successfully';
    $error['count_2'] = 'Failed to Sign Up';
    if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['father_name']) || empty($_POST['mother_name']) || empty($_POST['dob']) || empty($_POST['blood']) || empty($_POST['number']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['username']) ||empty($_POST['reason']) ){
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
    
        if(empty($_POST['blood'])){
            $error['blood'] = 'Insert Your blood';
        }
    
        if(empty($_POST['number'])){
            $error['number'] = 'Insert Your Number';
        }
        if(empty($_POST['email'])){
            $error['email'] = 'Insert Your Email';
        }
    
        if(empty($_POST['password'])){
            $error['password'] = 'Insert Your password';
        }
        if(empty($_POST['username'])){
            $error['username'] = 'Insert Your User name';
        }
        if(empty($_POST['reason'])){
            $error['reason'] = 'Insert Your leave Reason';
        }
    }
    else{
            $servername = "localhost";
            $dusername = "root";
            $dpassword = "";
            $dbname = "user";

            // Create connection
            $conn = new mysqli($servername, $dusername, $dpassword, $dbname);

            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            $sql = "INSERT INTO application (firstname, lastname, father_name, mother_name, dob, blood , number, email, password, username, reason,status)
            VALUES ('$firstname', '$lastname', '$father_name', '$mother_name','$dob', '$blood', '$number','$email','$password','$username','$reason','$status')";
            
            if ($conn->query($sql) === TRUE) {
            //echo "New record created successfully";
            $count=1;
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $count=2;
            }
            
            $conn->close();
           // echo "Connected successfully";
    }
    

  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
	<title> Login Manager </title>
</head>
<body>
    
<?php include('header.php'); ?>

    <div class="img">
	<form action="" method="post" novalidate>
        <div class="sign_up">
        <fieldset>
        <legend>Sign Up</legend>
        <label for="psw"><b>Leave Reason</b></label>
        <input type="textarea" placeholder="Leave Reason" name="reason" id="psw" value="<?php if(isset($reason)) echo $reason ?>" ><br>
        <span>
          <?php
          if(isset($error['reason'])){
            echo $error['reason'];
          }
        ?><br>
        </span>

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
          if($count==1){
            echo $error['count_1'];
          }
          if($count==2){
            echo $error['count_2'];
          }
          ?><br>
        </span>

        <input type="submit" value ="Submit" name="button_sign"><br><br>
        <a href="student_home.php">Back </a>
      </fieldset>
        </div>
    </form>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>