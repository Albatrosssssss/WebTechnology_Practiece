
<?php
  if(isset($_POST['btn'])){
     $dob = $_POST['dob'];

    $error = [];
    if(empty($_POST['dob'])){
        $error['dob'] = 'Insert Your email';
    }
    else{
        echo "Date of birth is : ". $dob;
    }

  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <table align = "center">
      <td>
    <form action="" method="post" novalidate>
      <fieldset>
        <legend>Date of Birth</legend>
        <hr>
        <input type="date"  name="dob"  value="<?php if(isset($dob)) echo $dob ?>" >
        <span>
          <?php
          if(isset($error['dob'])){
            echo $error['dob'];
          }
            ?>
        <br>
        </span>
      <button type="submit" class="registerbtn" name ="btn">Register</button>
      </fieldset>
  </form>
  </div>
  </td>
  </table>
</body>
</html>