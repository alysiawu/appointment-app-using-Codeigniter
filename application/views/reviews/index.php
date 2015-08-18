<!DOCTYPE html>
<html>
	<head>
  		<meta charset="utf-8">
		<title>MINI TASK MANAGERs</title>
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
		<!-- original  -->
 		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
 	 </head>
  	<body class = "red lighten-4">
  		<div class="container">
    			<h1>Hello, <?= $this->session->userdata('name') ?></h1>
    			<a href="/users/logout">Log Out</a>
			<?php $today = date("F j, Y ") ?>
			<p>Here are your appointments for today, <?= $today?></p>
			<table>
				<thead>
					<tr>
						<td>Tasks</td>
						<td>Time</td>
						<td>Status</td>
						<td>Actions</td>
					</tr>
				</thead>
				<tbody>
<?php

      				if($this->session->flashdata('app_errors')){
        					echo($this->session->flashdata('app_errors')[0]);
        					echo($this->session->flashdata('app_errors')[1]);
     				 }


				foreach($all_current_apps as $all_current_app)
				{  ?>
					<tr>
						<td><?= $all_current_app['tasks']?></td>
						<td><?= $all_current_app['time']?></td>
						<td><?= $all_current_app['status']?></td>
						<td>
							<a href="/appointments/edit_app/<?= $all_current_app['id']?>">Edit</a>
							<a href="/appointments/delete_app/<?= $all_current_app['id']?>">Delete</a>
						</td>
					</tr>
<?php
				}  ?>
				</tbody>
			</table>
			<p>Your Other appointments </p>
			<table>
				<thead>
					<tr>
						<td>Tasks</td>
						<td>Date</td>
						<td>Time</td>
					</tr>
				</thead>
				<tbody>
<?php
				foreach ($all_other_apps as $all_other_app)
				{  ?>
					<tr>
					<?php $dateformat = date("F j, Y", strtotime($all_other_app['date'])); ?>
						<td><?=$all_other_app['tasks']?></td>
						<td><?=$dateformat?></td>
						<td><?=$all_other_app['time'] ?></td>
					</tr>
<?php
				}  ?>

				</tbody>
			</table>

			<h4>Add Appointment</h4>
			<form action ="/appointments/add" method = "post">
				 Time: <input type="time" name = "time"><br>
				 date: <input type="date" name = "date"><br>
				 tasks: <input type = "text" name = "tasks"><br>
	 			<input class = "blue accent-4" type = "submit" value = "submit">
			</form>
		</div>
  	</body>
</html>