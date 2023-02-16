
<?php
  if(isset($_POST['btn'])){
     $name = $_POST['name'];

    $error = [];
    if(empty($_POST['name'])){
        $error['name'] = 'Insert Your Name';
    }
    else{
        echo "Name is : ". $name;
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
        <legend>Name</legend>
        <hr>
        <input type="text"  name="name" value="<?php if(isset($name)) echo $name ?>" >
        <span>
          <?php
          if(isset($error['name'])){
            echo $error['name'];
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