<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css" media="screen and (orientation:landscape)">
  @import url("../assets/css/style.css");
	  
  body {
    background-image: url(./assets/img/Umiam_Lake,_Shillong,_Meghalaya.jpg);
}
h1,h2,h3,h4,h5,h6 {
    font-family: Roboto, sans-serif;
}
  </style>
	
</div>
<meta charset="utf-8">
</head>
<body tracingsrc="../assets/img/Umiam_Lake,_Shillong,_Meghalaya.jpg" tracingopacity="58">
	<div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
          
  <div class="header">
  	<h3>Register</h3>
  </div>
<form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>

      <div class="input-group">
  	  <label>Upload imgage</label>
  	<input type="file" id="img" name="img" accept="image/*">
  	</div>

  <div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  </div>
  <p>
	  Already a member? <a href="login.php">Sign in</a>
  <a href="index-2.html">Home</a></p>
</form>
	

</body>
</html>