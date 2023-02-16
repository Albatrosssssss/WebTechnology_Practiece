
<?php
  if(isset($_POST['btn'])){
     $email = $_POST['email'];

    $error = [];
    if(empty($_POST['email'])){
        $error['email'] = 'Insert Your email';
    }
    else{
        echo "Email is : ". $email;
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
        <legend>Email</legend>
        <hr>
        <input type="text"  name="email" value="<?php if(isset($email)) echo $email ?> ">
        <span>
          <?php
          if(isset($error['email'])){
            echo $error['email'];
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