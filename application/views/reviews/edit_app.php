<html>
<head>
	<title>Edit app</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate css -->
		<link rel="stylesheet" href="/assets/css/animate.min.css">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>

		<!-- custom css -->
		<link rel="stylesheet" href="/assets/css/templatemo-style.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<!-- Compiled and minified CSS -->
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">

		  <!-- Compiled and minified JavaScript -->
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>

</head>
<body class = "teal lighten-4">
	<?php
// var_dump($task_id);
// die();
	?>
	<div class="container">
<h4>Edit Appointment</h4>
<form action ="/appointments/edit_this_app" method = "post">
	<input type = "hidden" name = "task_id" value = "<?= $task_id?>">
	<!--  Date: <input type="text" id="datepicker"><br> -->
	 Time: <input type="time" name = "time"><br><br>
	 date: <input type="date" name = "date"><br><br>
	 status:
		<select name = "status">
			<option value = "pending">pending</option>
			<option value = "done">done</option>
			<option value = "missed">missed</option>
		</select><br><br>
	 tasks: <input type = "text" name = "tasks"><br><br>
	 <input class = "pink lighten-1" type = "submit" value = "submit">
<!-- 	<a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a> -->
</form>
</div>
</body>
</html>