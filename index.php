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
				<h2>About House MD</h2>
				<ul class="more_info">
					<li>House is an American television medical drama that ran for eight seasons, from 2004 to 2012.</li>
					<li>The show brought in people from around the globe, bringing intrigue and mystery in the form of unusual medical cases.</li>
					<li>Many cases were the catalyst for the discussion of philosophical and ethical issues and decisions.</li>
					<li>I am currently on the 4th season and have lost control of my life.</li>
					<li>Pulling together information for this website has also spoiled a fair amount of the rest of the show for me.</li>
				</ul>
				</section>

				<button onclick="location.href='house.php'" type="button">Read More!</button>
		</main>

	</div>



	<?php include "inc/scripts.inc"; ?>

</body>
</html>