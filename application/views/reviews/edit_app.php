<html>
<head>
	<title>Edit app</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
</head>
<body>
	<?php
// var_dump($task_id);
// die();
	?>
<h4>Edit Appointment</h4>
<form action ="/appointments/edit_this_app" method = "post">
	<input type = "hidden" name = "task_id" value = "<?= $task_id?>">
	<!--  Date: <input type="text" id="datepicker"><br> -->
	 Time: <input type="time" name = "time"><br>
	 date: <input type="date" name = "date"><br>
	 status: 
		<select name = "status">
			<option value = "pending">pending</option>
			<option value = "done">done</option>
			<option value = "missed">missed</option>		
		</select><br>
	 tasks: <input type = "text" name = "tasks"><br>
	 <input type = "submit" value = "submit">
</form>

</body>
</html>