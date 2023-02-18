<?php 

	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		if (empty($_POST['fullname'])) {
			header("Location: Page1.php?msg=" . "Please fill up the form properly.");
		}
		else {
			header("Location: Page3.php");
		}
	}

?>