<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../custom.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="sidenav">
  <h1>Volunteers</h1>
  <a class="tab" href="view_volunteers.php">View Volunteers</a>
  <a class="tab" href="#">Edit Volunteers</a>
  <a class="tab" href="add_volunteers.html.php">Add Volunteers</a>
  <h1>Schedules</h1>
  <a class="tab" href="view_schedules.php">View Schedules</a>
  <a class="tab" href="add_schedules.php">Add Schedules</a>
</div>

<div class="main">
	<h1>Add Volunteers</h1>

  <small>Please enter the new volunteer details in the bellow form and click “Submit”.</small>
  <h1>Adding a Volunteer</h1>
  <div class ="form-group">
  <p><span class="error">* required field</span></p>
  <form action="add_volunteers.php" method="get">
  First name: <input type="text" name="firstname">
  <span class="error"> * <?php echo $firstNameErr ?></span>
  <br><br>
  Last name:  <input type="text" name="lastname">
  <span class="error"> * <?php echo $lastNameErr ?></span>
  <br><br>
  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
  <span class="error"> <?php echo $result;?></span>
  </div>
</form>
</div>

</body>
</html>
