<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
</head>
<body><div class = "container">
	<p>successfully submitted!</p>

	<h2>The statistics</h2>
	<h4>the most populated answer for Female  </h4>
	relationship: <?=$female_relationship[0]["relationship"]?>:
		<?=$female_relationship[0]["count_of_relationship"]?><br>
	country: <?=$female_country[0]["country"]?>:
		<?=$female_country[0]["count_of_country"]?><br>
	sport: <?=$female_sport[0]["sport"]?>:
		<?=$female_sport[0]["count_of_sport"]?><br>
	language: <?=$female_language[0]["language"]?>:
		<?=$female_language[0]["count_of_language"]?><br>
	<h4>the most populated answer for Male Stat:</h4>
	relationship: <?=$male_relationship[0]["relationship"]?>:
		<?=$male_relationship[0]["count_of_relationship"]?><br>
	country: <?=$male_country[0]["country"]?>:
		<?=$male_country[0]["count_of_country"]?><br>
	sport: <?=$male_sport[0]["sport"]?>:
		<?=$male_sport[0]["count_of_sport"]?><br>
	language: <?=$male_language[0]["language"]?>:
		<?=$male_language[0]["count_of_language"]?><br>
</div>
</body>
</html>
