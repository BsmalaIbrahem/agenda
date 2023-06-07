<?php include "nav.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="publicDesign.css">
		<link rel="stylesheet" href="style/home.css">
	</head>
	<body>
		<header>
			<div>
				<h1>agenda</h1>
				<button class="btn btn-lg btn-light">read more</button>
			</div>
		</header>
		<h2>Sections</h2>
		<div class="sections" id="sections">
			<div class="options">
				<div>
					<button><i class="fas fa-calendar-plus h3"></i></button>
					<h3>Event</h3>
					<button class="my-3 btn btn-light">see more</button>
					
				</div>

				<div>
					<button><i class="fas fa-calendar-plus h3"></i></button>
					<h3> Agenda</h3>
					<button class="my-3 btn btn-light">see more</button>
					
				</div>

				<div>
					<button><i class="fas fa-calendar-plus h3"></i></button>
					<h3>Achievement</h3>
					<button class="my-3 btn btn-light" onclick="location = 'achievement.php'">see more</button>
				</div>
			</div>

		</div>
		<button onclick="location='signOut.php'">sign_out</button>
	</body>
</html>
