<!-- <?php 
    session_start();
    if($_SESSION['authenticated']!= "true" ){
        header("Location: login.php");
        exit;
    }
?> -->
<?php
$count=0;
$temp=0;
  if(isset($_POST['sign'])){
    $username = $_POST['username'];

   // setcookie("First_Name",$firstname,time()+10);

    $error = [];
    if(empty($_POST['username'])){
        $error['username'] = 'Insert Your User name';
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
            $sql = "SELECT * FROM signup where username='$username'";
            
            $result = $conn->query($sql);
            if($result->num_rows > 0)
            {
                $row = $result->fetch_assoc();
                $count=1;
            }
            else{
                
            }
    }
    
    
}

    if(isset($_POST['button_sign'])){

        $username = $_POST['username'];
        $status = $_POST['status'];
        setcookie("First_Name",$firstname,time()+10);
    
        $error = [];
        $error['Successfully Updated']= 'Successfully Updated';
        $error['Updated Failed'] = 'Updated Failed';

        if(empty($_POST['username'])  ){
            
            if(empty($_POST['username'])){
                $error['username'] = 'Insert Your username';
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
                $sql = "UPDATE application SET status='$status'  WHERE username='$username'";
                $result = $conn->query($sql);
                if($result){
                    $count=5;
                }
                else{
                    $count=7;
                }
                // if($result->num_rows>0 )
                // {
                //     echo "Updated";
                // }
                // else{
                //     echo "error occured";
                // }
                
    

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
    <label for="psw"><b>Username</b></label>
        <input type="tsswordpa" placeholder="Enter Username" name="username" id="psw" value="<?php if(isset($username)) echo $username ?>" ><br>
        <span>
          <?php
          if(isset($error['username'])){
            echo $error['username'];
          }
          ?><br><br><br>
        </span>
        <input type="submit" value ="update" name="sign"><br><br>
    </form>

    <form action="" method="post" novalidate>
        <label for="Number"><b>Application Status</b></label>
        <input type="number"  name="status" id="number" value="<?php if($count==1) echo $row['status'] ?>" ><br>
        <a href="student_home.php">Back </a>
        <input type="submit" value ="update" name="button_sign"><br><br>
      </fieldset>
        </div>
    </form>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>