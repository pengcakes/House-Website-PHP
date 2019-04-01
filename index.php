<!DOCTYPE html>
<html lang="en">
<head>
	<title>House MD</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="sss/sss.css">
	<link rel="stylesheet" href="css/home_page.css">	
	<link href="https://fonts.googleapis.com/css?family=Muli|Nunito" rel="stylesheet">
</head>


<body>
<?php include "inc/navbar.inc"; ?>

	<div class="container">
		
		<section class="slider">
					<img class="flexible" src="images/house.jpg" alt="Image 1">
					<img class="flexible" src="images/cuddy.jpg" alt="Image 2">
					<img class="flexible" src="images/wilson.jpg" alt="Image 3">
		</section>

		<main>
			<section>
				<a href="http://csc174.org/midterm/apeng/"> Click here for a link to the original website</a> 
			</section>

			<section>
				<button onclick="location.href='sign-up.php'" type="button">Sign up for our newsletters!</button>
			</section>
		</main>

	</div>



	<?php include "inc/scripts.inc"; ?>

</body>
</html>