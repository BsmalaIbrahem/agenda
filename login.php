<?php 
spl_autoload_register(function($class){
    require 'classes/'.$class.'.php';
  });
?>
<html>
<head>
	<link rel="stylesheet" href="style/login&register.css">
</head>
<body>
		
	<form method="post">
			<h2>login</h2>
			<input type="email" name="email" placeholder="email">
			<input type="password" name="password" placeholder="password">
			<div class="rememberMe">
				<input type="checkbox">
				<label>Remember Me</label>
			</div>
			<input type="submit" name="login" value="login">
			<hr>
			<a href="register.php">i don't have acount !</a>
	</form>
</body>
</html>

<?php 
if(isset($_POST['login'])){
	$user = new user();
	$login = $user->login($_POST['email'], $_POST['password']);
}