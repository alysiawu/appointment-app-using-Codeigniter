<html>
  <?php 
  ?>
  <head>
    <title>What's Up</title>
 	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
  </head>
  <body>
    <h1>Hello, <?= $this->session->userdata('name'); ?></h1>
    <a href="/users/logout">Log Out</a>
    <?php
 $today = date("F j, Y ");
    ?>
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
  
// var_dump($all_current_apps);
// die();
// $this->session->set_userdata('task_id', $all_current_app['id']);
// $task_id =$this->session->userdata('task_id'); 
// var_dump($task_id);
// die();
foreach($all_current_apps as $all_current_app)
{?>

	<tr>
	<td><?= $all_current_app['tasks']?></td>
	<td><?= $all_current_app['time']?></td>
	<td><?= $all_current_app['status']?></td>
	<td><a href="/appointments/edit_app/<?= $all_current_app['id']?>">Edit</a>
		<a href="/appointments/delete_app/<?= $all_current_app['id']?>">Delete</a>
	</td>
</tr>
<?}?>	
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
// var_dump($all_other_apps);
// die();
	foreach ($all_other_apps as $all_other_app){?>
<tr>
	 <?php 
	$dateformat = date("F j, Y", strtotime($all_other_app['date']));
	 // $date =$all_other_app['date'];

	// var_dump($dateformat);
	// die();
	?>

<td><?=$all_other_app['tasks']?></td>
<!-- <td><?=$all_other_app['date']?></td> -->
<td><?=$dateformat?></td>
<td><?=$all_other_app['time'] ?></td>
</tr>
	<?}?>

</tbody>
</table>

<h4>Add Appointment</h4>
<form action ="/appointments/add" method = "post">
	 Time: <input type="time" name = "time"><br>
	 date: <input type="date" name = "date"><br>
	 tasks: <input type = "text" name = "tasks"><br>
	 <input type = "submit" value = "submit">
</form>   
  </body>
</html>