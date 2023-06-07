<?php 
spl_autoload_register(function($class){
    require 'classes/'.$class.'.php';
  }); ?>
<html>
<head>
	<link rel="stylesheet" href="style/login&register.css">
</head>
<body>
		
	<form method="post">
			<h2>sign up</h2>
			<input type="text" name="userName" placeholder="userName" required="">
			<input type="email" name="email" placeholder="email" required="">
			<input type="password" name="password" placeholder="password" required="">
			<input type="password" name="confirm_password" placeholder="confirm password" required="">
			<input placeholder="birth-date" onfocus="(this.type = 'date')" onblur="(this.type='text')"  name="birthdate" required="">
			<input type="submit" name="signUp" value="sign up">
			<hr>
			<a href="login.php">i have acount !</a> 
	</form>
</body>
</html>

<?php 
if(isset($_POST['signUp'])){
	$userName         = $_POST['userName'];
	$email    		  = $_POST['email'];
	$password         = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$date             = $_POST['birthdate'];
	$user = new user();
	
	$user->register($userName, $email, $password, $confirm_password, $date);

}