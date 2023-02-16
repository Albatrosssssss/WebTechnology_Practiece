
<?php
  if(isset($_POST['btn'])){
     $gender = $_POST['gender'];

    $error = [];
    if(empty($_POST['gender'])){
        $error['gender'] = 'Insert Your gender';
    }
    else{
        echo "gender is : ". $gender;
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
        <legend>Gender</legend>
        <hr>
        <input type="radio" id="Male" name="gender" value="Male">Male
        <input type="radio"  id = "Female" name="gender" value = "Female">Female
        <input type="radio"  id = "Other" name="gender" value = "Other">Other
        <span>
          <?php
          if(isset($error['gender'])){
            echo $error['gender'];
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