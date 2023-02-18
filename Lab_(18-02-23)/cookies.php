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
    <h2>Set Cookie</h2>
	<form action="" method="POST">
        <label for="colour">Select a color: </label>
		<input type="color" name="color" value="#ff0000">
		<input type="submit">
	</form>

	<?php 
		if (isset($_GET['msg'])) {
			echo $_GET['msg'];
		}
	?>

</body>
</html>