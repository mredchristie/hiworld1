<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>Thank you for submitting the following information:</p>
	
   <?php

	$name = $_POST['name'];
	$age = $_POST['age'];
		
	echo 'Name = ' . $name . ' and Age = ' . $age . '.';
	echo '<br />Have a good day.<hr />';
   
   ?>

</body>
</html>