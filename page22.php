
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
username = <?= $_POST['usernamee'] ?>
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

username = <?php print( $_POST['usernamee'] ); ?>
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


$usernamee = $conn->real_escape_string($_POST ['usernamee']);
$emaill = $conn->real_escape_string($_POST ['email']);
$addresss = $conn->real_escape_string($_POST ['address']);
$cityy = $conn->real_escape_string($_POST ['city']);
$agee = $conn->real_escape_string($_POST ['age']);
$phonenumberr = $conn->real_escape_string($_POST ['phonenumber']);
$genderr = $conn->real_escape_string($_POST ['gender']);
$checkboxx = $conn->real_escape_string($_POST ['checkbox']);

if ($_POST['gender'] == 1) {
    $genderr = 'Male';
} 

elseif ($_POST['gender'] == 2) {
    $genderr = 'Female';
} 

elseif ($_POST['gender'] == 3) {
    $genderr = 'Other';
} 
else {
    $genderr = 'Dont want to say';
}


$sql = "
    INSERT INTO
    userinformation (
        usernamee, email, address, city, age,
        phonenumber, gender, checkbox
    ) VALUES  (
        '$usernamee', '$emaill', '$addresss', '$cityy', '$agee',
        '$phonenumberr', '$genderr',  '$checkboxx'
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
