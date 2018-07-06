<?php
try
{
	$pdo = new PDO('mysql:host=localhost;dbname=catdb', 'root', 'rolorolo22');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
}

catch (PDOException $e)
{
	$error = 'Unable to connect to the database server.';
	include 'error.html.php';
	exit();
}
try
{
	$sql = 'SELECT id, first_name, last_name FROM volunteers ORDER BY first_name';
	$result = $pdo->query($sql);
}
catch (PDOException $e)
{
	$error = 'Error fetching volunteers: ' . $e->getMessage();
	include 'error.html.php';
	exit();
}

$list = "<form action=\"edit_volunteers_details.php\" class=\"form-inline\" method=\"POST\"><select name = \"name\" class=\"form-control\"><option value= \"0\">Please select a volunteer...</option>";
$list .= "<div class=\"form-group\">";
while ($row = $result->fetch())
{
  $list .= "<option value=" . $row['id'] . ">" . "$row[first_name]" . " " . "$row[last_name]" . "</option>";
}
$list .= "<\div>";
$list .= "<input type=\"submit\"class=\"btn btn-primary\"></form>";

include 'edit_volunteers_selection.html.php';
