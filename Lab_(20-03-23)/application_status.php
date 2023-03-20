<!-- <?php 
    session_start();
    if($_SESSION['authenticated']!= "true" ){
        header("Location: login.php");
        exit;
    }
?> -->
<?php
    $count=0;
  if(isset($_POST['button_submit'])){
        $username = $_POST['username'];
        $error = [];
        $error['wrong']='Wrong Username';

        if(empty($_POST['username'])){
            $error['username'] = 'Insert Your User Name';
        }
        else{
            $count=1;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
	<title> application status </title>
</head>
<body>
    
<?php include('header.php'); ?>

    <div class="img">
	<form action="" method="post" novalidate>
        <div class="login_container">
            <div class= "forget">&nbsp&nbsp
                <label for="username"><b>Username</b></label> <br>
                <input type="text" placeholder="Enter username" name="username" value="<?php if(isset($username)) echo $username ?>"><br><br>
                <span>
                    <div class="sadi">
                    <?php
                    if(isset($error['username'])){
                        echo $error['username'];
                    }
                    ?><br>
                    <?php
                        if($count==1){
                            $servername = "localhost";
                            $dusername = "root";
                            $dpassword = "";
                            $dbname = "user";
                
                            // Create connection
                            $conn = new mysqli($servername, $dusername, $dpassword, $dbname);
                
                            // Check connection
                            $sql = "SELECT * FROM application where username='$username'";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {

                                // Echo the data in a table
                                echo '<table align="center" border=2 color=black style="background-color: rgb(143,188,143);"  >';
                                echo '<tr style="background-color: rgb(8,157,73);">
                                        <th >First Name </th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                    </tr>';
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                    echo '<td>' . $row['firstname'] . '</td>';
                                    echo '<td>' . $row['lastname'] . '</td>';
                                    echo '<td>' . $row['username'] . '</td>';
                                    echo '<td>' . $row['status'] . '</td>';
                                    echo '</tr>';
                                }
                                echo '</table>';
                        }
                        else{
                            echo $error['wrong'];
                        }
                    }
                    ?>
                </span>
                </div>
                <input type="submit" value ="Show Profile" name="button_submit"><br><br>
                <a href="student_home.php"> Back </a>
            </div>
        </div>
    </form>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>