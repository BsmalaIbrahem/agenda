<!DOCTYPE html>
<?php include 'nav.php';
      include 'achievement_navbar.php'; 
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style/achievement.css">
</head>
<body>
	<?php
		if(isset($_POST['search_go'])){
	      	$search_content = $_POST['search_content'];
	 ?>
	<div class="content"  class="bg-light" >
		<?php
		 	include 'search.html';
		   $achievements  = new achievement();
		   $achievement_rows   = $achievements->search_for_achievement($search_content, $user_id);
		   if($achievement_rows->num_rows> 0){?>
		   	<div class="achievements">
   			<?php
		 	  foreach ($achievement_rows as $acheivement) { 
		 	?>
			 	<div>
			 		<a href="show_achievement.php?id=<?=$acheivement['id']?>" class="h3"><i class="fas fa-check-square"></i> <?= $acheivement['achievement'] ?></a>
			 		<div>
			 			<span><?= $acheivement['date'] ?> </span>
			 			<button class=""><i class="fas fa-ellipsis-v"></i></button>
			 		</div>
			 	</div>
			 </div>

			    <?php } 
			}
			else
				echo '<h2>no found</h2>';
			}?>

	</div>
</body>
</html>