
<!DOCTYPE html>
<html>
<head>
<title>multiplication</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="class">
    <form action="" method="post" novalidate>
        <div class="container">
          <h1>Multiplication</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
 
          <label for="Value"><b>Value </b></label>
          <input type="number" placeholder="Enter value" name="value" id="value" value="<?php if(isset($firstname)) echo $firstname ?>"><br>
            <span>
            <?php
              if(isset($error['value'])){
                echo $error['value'];
              }
            ?><br>
            </span>
            <button type="submit" class="multiply" name ="btn">Multiply</button>
        </div>
      </form>
</body>
</html>
<?php
  if(isset($_POST['btn'])){
    for( $i=1; $i<=10; $i++){
        $val = ($_POST['value']);
        $temp=$val * $i; 
        echo "<table border=1 >";
        echo ("<tr> <td>" . $i . "</td> <td>*" . $val . "</td><td>=" . $temp . "</td></tr>") ; 
        echo "</table>";
    }
    //echo $value = $_POST['value'];
 
    $error = [];
    if(empty($_POST['value'])){
      $error['value'] = 'Insert Your Value ';
    }
  }
 
?>
