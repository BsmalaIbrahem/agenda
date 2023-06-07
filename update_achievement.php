<?php
  $id = $_GET['id'];
  include 'nav.php';
  include 'achievement_navbar.php';
  $achievement = new achievement();
  $item        = $achievement->get_one_achievement($id,$user_id);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style/form.css">
	</style>
</head>
<body>
	<form class="update bg-light" method="post">
		<h2>update</h2>
		<div>
			<input type="text" name="achievement" value="<?=$item['achievement']?>" required="">
			<input name="date" value="<?=$item['date']?>" onfocus="this.type='date'" onblur="this.type='text'" required="">
		</div>
		<textarea name="description"><?=$item['description']?></textarea>
		<input type="submit" name="update" value="update">
	</form>
</body>
</html>

<?php
if(isset($_POST['update'])){
	$name = $_POST['achievement'];
	$date = $_POST['date'];
	$description = $_POST['description'];

	$achievement->update_achievement($id ,$name,$description, $date);
}