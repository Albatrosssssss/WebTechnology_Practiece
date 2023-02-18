
<?php
    // if($cookie_name)
    if(isset($_POST['btn'])){
        $cookie_name = "user";
        $cookie_value = "Alex Porter";
        setcookie($cookie_name, $cookie_value, time() + (8), "/");
        $color= $_POST['color'];
        $date= $_POST['date'];
    
        $error = [];
        if(empty($_POST['color'])){
            $error['color']='Select Color';
        }
        if(empty($_POST['date'])){
            $error['date']='Select Date';
        }
        if(!empty($_POST['color'] && !empty($_POST['date'])))
        header("Location: cookie_set.php");

    }
    if(isset($_POST['bttn'])){
        header("Location: delete_cookies.php");
        // if(empty($_POST['date'])){
        //     $error['date']='Select Date';
        // }
        
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookies</title>
</head>
<body>

	<h1>Cookies Example</h1>
    <p1>Time zone: Asia </p1>
    <hr>
    <h3>Set Cookies</h3>
    <hr>
	<form action="" method="POST">
        <label for="colour">Select a color: </label>
		<input type="color" name="color" value="#000000"><br>
        <span>
        <?php
          if(isset($error['color'])){
            echo $error['color'];
          }
        ?><br>
        </span>


        <label for="" > Expire on </label>
        <input type="datetime-local" name="date" value="<?php if(isset($date)) echo $date ?>"> <br>
        <span>
        <?php
          if(isset($error['date'])){
            echo $error['date'];
          }
        ?><br><br>
        </span>


		<input type="submit" name = "btn" value="Set Cookies"|>
	</form>
    <hr>
    <h3>Set Cookies</h3>
    <hr>
    <form action="" method="POST">
    <input type="submit" name = "bttn" value="Destroy Cookies"|>
	</form>

</body>
</html>