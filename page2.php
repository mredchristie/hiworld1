

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php 

print_r($_POST);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testfestival";
?>

<hr>
fname = <?= $_POST['fname'] ?>
<br>
lname = <?= $_POST['lname']?>
<br>

lname = <?php print( $_POST['lname'] ); ?>


<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$first = $conn->real_escape_string($_POST ['fname']);

$last = $conn->real_escape_string($_POST ['lname']);

$sql = "INSERT INTO users (Firstname, Lastname) VALUES  ('$first', '$last')";

echo $sql;
echo "<br>";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>

</body>
</html>
