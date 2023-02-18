<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page 1</title>
</head>
<body>

	<h1>Cookies Example</h1>
    <p1>Time zone: Asia </p1>
    <hr>
    <h3>Set Cookies</h3>
    <hr>
	<form action="" method="POST">
        <label for="colour">Select a color: </label>
		<input type="color" name="color" value="#ff0000"><br><br>
        <label for="" > Expire on </label>
        <input type="date" name="time"> <br><br>
		<input type="submit" name = "brn" value="Set Cookies"|>
	</form>
    <hr>
    <h3>Set Cookies</h3>
    <hr>
    <form action="" method="POST">
        <label for="colour">Select a color: </label>
	</form>

	<?php 
		if (isset($_GET['msg'])) {
			echo $_GET['msg'];
		}
	?>

</body>
</html>