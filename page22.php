
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

// the credentials to connect to the database - the database name is very important as I found out the hardway
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "musicfestivalapplicationform";
?>


<!-- need to remeber that if I want to add somem html within my php then I need to end off ?> the php and you can embed php like  -->
<hr>
fname = <?= $_POST['fname'] ?>
<br>
email = <?= $_POST['email']?>
<br>
address = <?= $_POST['address']?>
<br>
city = <?= $_POST['city']?>
<br>
age = <?= $_POST['age']?>
<br>
phonenumber = <?= $_POST['phonenumber']?>
<br>
gender = <?= $_POST['gender']?>
<br>
checkbox = <?= $_POST['checkbox']?>
<!-- this is just outputting the data of the php variables lname and fname -->

fname = <?php print( $_POST['fname'] ); ?>
email = <?php print( $_POST['email'] ); ?>
address = <?php print( $_POST['address'] ); ?>
city = <?php print( $_POST['city'] ); ?>
age = <?php print( $_POST['age'] ); ?>
phonenumber = <?php print( $_POST['phonenumber'] ); ?>
gender = <?php print( $_POST['gender'] ); ?>
checkbox = <?php print( $_POST['checkbox'] ); ?>


<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$fullnamee = $conn->real_escape_string($_POST ['fname']);
$emaill = $conn->real_escape_string($_POST ['email']);
$addresss = $conn->real_escape_string($_POST ['address']);
$cityy = $conn->real_escape_string($_POST ['city']);
$agee = $conn->real_escape_string($_POST ['age']);
$phonenumberr = $conn->real_escape_string($_POST ['phonenumber']);
$genderr = $conn->real_escape_string($_POST ['gender']);

if ($_POST['checkbox']=="on") {
    $checkboxx = "TRUE";
} else {
    $checkboxx = "FALSE";
}



$sql = "
    INSERT INTO
    userinformation (
        fullname, email, address, city, age,
        phonenumber, gender, checkbox
    ) VALUES  (
        '$fullnamee', '$emaill', '$addresss', '$cityy', '$agee',
        '$phonenumberr', '$genderr', $checkboxx
    )
    ";

echo $sql;
echo "<br>";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<br>";
    echo "USER ID IS:". $conn->insert_id;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>

</body>
</html>
