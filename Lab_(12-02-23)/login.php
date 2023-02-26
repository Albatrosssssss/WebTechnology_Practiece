<?php
// Start the session
session_start();
?>
<?php 
if(isset($_POST['button'])){
    $username= $_POST['username'];
    $password= $_POST['password'];

    $error = [];
    if(empty($_POST['username'])){
        $error['username']='Insert your username';
    }
    if(empty($_POST['password'])){
        $error['password']='Insert your password';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
	<title> Login Manager </title>
</head>
<body>
    <div class = "container">
        <table align="center">
            <td>
                <fieldset>
                    <legend>Login</legend>
                        <form action="" method="post" novalidate>
                            <div class="login_container">   
                                <label for="username"><b>Username</b></label> <br>
                                <input type="text" placeholder="Enter username" name="username" value="<?php if(isset($username)) echo $username ?>"|><br>
                                <span>
                                    <?php
                                        if(isset($error['username'])){
                                            echo $error['username'];
                                        }
                                    ?>
                                </span><br>

                                <label for="password"><b> Password </b></label><br>
                                <input type="password" placeholder="Type Password " name="password" value="<?php if(isset($password)) echo $password ?>"><br>
                                <span>
                                    <?php
                                        if(isset($error['password'])){
                                            echo $error['password'];
                                        }
                                    ?>
                                </span><br>
                                <input type="submit" value ="Log in" name="button"><br><br>
                            </div>
                        </form>
                </fieldset>
            </td>
        </table>
    </div>
</body>     
</html>