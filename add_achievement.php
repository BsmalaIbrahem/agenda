<!DOCTYPE html>
<?php include 'nav.php';
      include 'achievement_navbar.php';
      
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style/form.css">
</head>
<body>
	<form method="post" action="" class="bg-light" id="add">
			<h2><span>a</span>dd <span>a</span>cheivement</h2>
			<input type="text" name="acheivement" placeholder="enter acheivement" required="">
			<textarea name="description" placeholder="enter description" required=""></textarea>
			<input type="text" name="date" placeholder="enter date"  onfocus="this.type='date'" onblur="this.type='text'">
			<input type="submit" name="add" value="add">
		</form>
</body>
</html>

<?php
if(isset($_POST['add'])){
	$achievement = $_POST['acheivement'];
	$description = $_POST['description'];
	$date        = $_POST['date'];

	$acheivement = new achievement();
	$acheivement->add_achievement($achievement,$description, $date, $user_id);
}