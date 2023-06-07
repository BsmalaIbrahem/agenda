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
	<style type="text/css">
		.show_achievement{
			width:40%;margin:auto; margin-top:200px;
			border-radius:5px;
				/*box-shadow:5px 5px  #ffc371d6;*/
				padding:10px;


		}
		.show_achievement h2, .show_achievement h5{
			text-align:center;
		}
		.show_achievement h2{
			font-size:40px;
			font-family:monospace;
		}
		.show_achievement h5{
			color:#8080808c;
			font-size:15px
		}
		.show_achievement p, .show_achievement pre{
			font-size:20px;
			font-family:cursive;
		}
		.show_achievement p{
			padding:5px 15px;
		}
		.show_achievement pre{
			text-align:center;
		}
		.show_achievement div{
			text-align:center;
		}
	</style>
</head>
<body>
	<div class="show_achievement bg-light">
		<h2><q><?= $item['achievement']?></q> </h2>
		<h5><?= $item['date'] ?></h5>
		<p><?=$item['description']? $item['description'] : "<pre>no description</pre>"?></p>
		<hr>
		<div class="buttons">
			<button class="btn btn-dark" onclick="location='update_achievement.php?id=<?=$item['id']?>'">update</button>

			<button class="btn btn-dark" onclick='location ="delete_achievement.php?id=<?=$item['id']?>"'>delete</button>
			
		</div>
	</div>

</body>
</html>

