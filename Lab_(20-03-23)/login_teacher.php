<?php 
    session_start();?>
<?php
 $count = 0;
    if(isset($_POST['button'])){
        $password = $_POST['password'];
        $username = $_POST['username'];

        $error = [];
        $error['wrongpassword']='Wrong password';
        if( empty($_POST['username']) or empty($_POST['password'])){
            if(empty($_POST['password'])){
                $error['password'] = 'Insert Your password';
            }
            if(empty($_POST['username'])){
                $error['username'] = 'Insert Your User name';
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

            $sql = "SELECT * FROM teacher WHERE username='$username' ";
            $result = $conn->query($sql);
            //$result = $result->fetch_assoc();
            // $row = mysql_fetch_array($result);
           //echo "$result";
            if($result->num_rows > 0)
            {
                $row = $result->fetch_assoc();
                //var_dump($row['password']);
                if (($password==$row['password'])) {
                    // Password matches, so create a session for the user
                    setcookie("Username",$username,time()+10);
                    $_SESSION['authenticated'] = "true";
                    header("Location: teacher_home.php");
                    $_SESSION['role']="teacher";
                } else {
                    // Password is incorrect
                    $count=1;
                }
            }
            else{
                header("Location: login.php");
                $count=1;
            }
           
            $conn->close();
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
	<title> Login as a teacher </title>
</head>
<body>
    
<?php include('header.php'); ?>

    <div class="img">
	<form action="" method="post" novalidate>
        <div class="login_container">
        <h1>Login as a teacher</h1>
            <div class= "color">
                <label for="username"><b>Username</b></label> <br>
                <input type="text" placeholder="Enter username" name="username" value="<?php if(isset($username)) echo $username ?>"><br><br>
                <span>
                    <?php
                    if(isset($error['username'])){
                        echo $error['username'];
                    }
                    ?><br>
                </span>


                <label for="password"><b> Password </b></label><br>
                <input type="text" placeholder="Type Password " name="password" value="<?php if(isset($password)) echo $password ?>"><br><br>
                <span>
                    <?php
                    if(isset($error['password'])){
                        echo $error['password'];
                    }
                    if($count==1){
                        echo $error['wrongpassword'];
                    }
                    ?><br>
                </span>

                <input type="submit" value ="Log in" name="button"><br><br>
                <a href= "login.php"> Back </a>
            </div>
        </div>
    </form>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>