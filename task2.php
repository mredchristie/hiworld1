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
# Variable names must start with a $ sign.
    $firstName = 'Ed';
    #you end lines off with a semi colon in php.
    $lastName = 'Christie';
    $fullName = $firstName . ' ' . $lastName;
  
    echo 'Hello, ' . $fullName . ' welcome back.';


    #this is another example of embeded html - I have put an italic tag around the fullname.
    echo '<p>Hello, <i>' . $fullName . '</i> welcome 
	    back.<br /> <strong> Welcome Back!  </strong> </p>';


  ?>

    
</body>
</html>