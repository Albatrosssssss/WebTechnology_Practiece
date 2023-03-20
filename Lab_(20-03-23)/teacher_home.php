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
    
<?php include('header.php'); ?>

    <div class="img">
	<form action="" method="post" novalidate>
        <div class="login_container">
            <div class= "home">&nbsp&nbsp
                <h1> View Application </h1>
                <a href="view.php"> Views Application </a> &nbsp&nbsp
                <a href="status_edit.php"> Approve Application </a> &nbsp&nbsp
                <a href="login.php"> Logout  </a> &nbsp&nbsp
            </div>
        </div>
    </form>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>