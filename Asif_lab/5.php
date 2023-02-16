
<?php
  if(isset($_POST['btn'])){
     $degree = $_POST['degree'];

    $error = [];
    if(empty($_POST['degree'])){
        $error['degree'] = 'Insert Your degree';
    }
    else{
        echo "degree is : ". $degree;
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
        <legend>degree</legend>
        <hr>
        <input type="checkbox"  name="degree"  id="SSc" value="SSc">SSC
        <input type="checkbox"  name="degree" id="HSc" value="HSc">HSC
        <input type="checkbox"  name="degree" id="BSc" value="BSc">BSC
        <input type="checkbox"  name="degree" id="MSc" value="MSc">MSC
        
        <span>
          <?php
          if(isset($error['degree'])){
            echo $error['degree'];
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