<html>
<head>
	<title>Survey</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
</head>
<body>
	<div class = "container">
		<h2>Please fill out the survey below:</h2>
		<form method = "post" action = "/users/add">

			1.<?= $all_questions[0]["question"]?><br>
				<input type ="radio" name = "gender" value = "<?= $all_questions[0]['option1']?>"><?= $all_questions[0]['option1']?><br>
				<input type ="radio" name = "gender" value = "<?= $all_questions[0]['option2']?>"><?= $all_questions[0]['option2']?><br>
			2.<?= $all_questions[1]["question"]?><br>
				<input type ="radio" name = "relationship" value = "<?= $all_questions[1]['option1']?>"><?= $all_questions[1]['option1']?><br>
				<input type ="radio" name = "relationship" value = "<?= $all_questions[1]['option2']?>"><?= $all_questions[1]['option2']?><br>
				<input type ="radio" name = "relationship" value = "<?= $all_questions[1]['option3']?>"><?= $all_questions[1]['option3']?><br>
				<input type ="radio" name = "relationship" value = "<?= $all_questions[1]['option4']?>"><?= $all_questions[1]['option4']?><br>
				<input type ="radio" name = "relationship" value = "<?= $all_questions[1]['option5']?>"><?= $all_questions[1]['option5']?><br>
				<input type ="radio" name = "relationship" value = "<?= $all_questions[1]['option6']?>"><?= $all_questions[1]['option6']?><br>
			3.<?= $all_questions[2]["question"]?><br>
				<input type ="checkbox" name = "country[]" value = "<?= $all_questions[2]['option1']?>"><?= $all_questions[2]['option1']?><br>
				<input type ="checkbox" name = "country[]" value = "<?= $all_questions[2]['option2']?>"><?= $all_questions[2]['option2']?><br>
				<input type ="checkbox" name = "country[]" value = "<?= $all_questions[2]['option3']?>"><?= $all_questions[2]['option3']?><br>
				<input type ="checkbox" name = "country[]" value = "<?= $all_questions[2]['option4']?>"><?= $all_questions[2]['option4']?><br>
				<input type ="checkbox" name = "country[]" value = "<?= $all_questions[2]['option5']?>"><?= $all_questions[2]['option5']?><br>
				<input type ="checkbox" name = "country[]" value = "<?= $all_questions[2]['option6']?>"><?= $all_questions[2]['option6']?><br>
			4.<?= $all_questions[3]["question"]?><br>
				<input type ="radio" name = "sport" value = "<?= $all_questions[3]['option1']?>"><?= $all_questions[3]['option1']?><br>
				<input type ="radio" name = "sport" value = "<?= $all_questions[3]['option2']?>"><?= $all_questions[3]['option2']?><br>
				<input type ="radio" name = "sport" value = "<?= $all_questions[3]['option3']?>"><?= $all_questions[3]['option3']?><br>
				<input type ="radio" name = "sport" value = "<?= $all_questions[3]['option4']?>"><?= $all_questions[3]['option4']?><br>
				<input type ="radio" name = "sport" value = "<?= $all_questions[3]['option5']?>"><?= $all_questions[3]['option5']?><br>
			5.<?= $all_questions[4]["question"]?><br>

				<input type ="checkbox" name = "language" value = "<?= $all_questions[4]['option1']?>"><?= $all_questions[4]['option1']?><br>
				<input type ="checkbox" name = "language" value = "<?= $all_questions[4]['option2']?>"><?= $all_questions[4]['option2']?><br>
				<input type ="checkbox" name = "language" value = "<?= $all_questions[4]['option3']?>"><?= $all_questions[4]['option3']?><br>
				<input type ="checkbox" name = "language" value = "<?= $all_questions[4]['option4']?>"><?= $all_questions[4]['option4']?><br>
				<!-- 6.<?= $all_questions[5]["question"]?><br> -->
			<button type = "submit">Submit</button>

		</form>
</div>

</body>
</html>