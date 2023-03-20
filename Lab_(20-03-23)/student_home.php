<!-- <?php 
    session_start();
    if($_SESSION['authenticated']!= "true" ){
        header("Location: login.php");
        exit;
    }
?> -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
	<title> Login Manager </title>
</head>
<body>
    s
<?php include('header.php'); ?>

    <div class="img">
	<form action="" method="post" novalidate>
        <div class="login_container">
            <div class= "home">&nbsp&nbsp
                <a href="application.php"> Leave Application </a>&nbsp&nbsp
                <a href="application_status.php">Check Application status</a>&nbsp&nbsp
                <a href="login.php"> Logout  </a> &nbsp&nbsp
            </div>
        </div>
    </form>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>