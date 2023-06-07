<!DOCTYPE html>
<?php include 'nav.php';
      include 'achievement_navbar.php';
      
?>
<html>
	<head>
		<title>achievements</title>
		<link rel="stylesheet" type="text/css" href="style/achievement.css">
	</head>
	<body>
		<div class="content" id="all" class="bg-light">
			 <?php
			 	include 'search.html';
			   $achievements  = new achievement();
			   $achievement_rows   = $achievements->display_achievements($user_id);
			 ?>

			 <div class="achievements" >
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

			    <?php }?>
			 </div>
		</div>

		
		
	</body>
</html>
