
<?php
  if(isset($_POST['btn'])){
     $blood = $_POST['blood'];

    $error = [];
    if(empty($_POST['blood'])){
        $error['blood'] = 'Insert Your blood group';
    }
    else{
        echo "Blood Group is : ". $blood;
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
        <legend>Blood Group</legend>
        <hr>
        <select name="blood">
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="O+">O+</option>
        </select>
        <span>
          <?php
          if(isset($error['blood'])){
            echo $error['blood'];
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