<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Super amazing php form thingy :)</h2>
  <form action="page2.php" method="POST">
    <div class="form-group">
      <label for="email">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter firstname" name="fname">
    </div>
    <div class="form-group">
      <label for="pwd">Last Name:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter lastname" name="lname">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>




</body>
</html>

