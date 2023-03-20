<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "second";
$port = 3306;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//insert
// $sql = "INSERT INTO user (id,username,password)
// VALUES ('','safi','123')";
// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } 
// else {
// echo "Error: " . $sql . "<br>" . $conn->error;
// }

//update
$sql = "SELECT id, password  FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}


mysqli_close($conn);
?>