<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();

	$tbl = "tbl_volunteers";
	$volunteers = getAll($tbl);

?>

<?php
	function beautifyDate($date)
	{
		return date('l F j, Y, g:i a', strtotime($date));
		//Parses about any English textual datetime description into a Unix timestamp. To put it simply it converts numbers into letters and makes dates look more pretty.
		//http://php.net/manual/en/function.date.php
	}
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Volunteers</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
  </head>
<body>
	<h1 class="hide">Delete Volunteers</h1>

	<?php include('includes/header.php'); ?>


	<section class="row-expanded">


	<?php include('includes/sidepanel.php'); ?>

	<div class="small-12 medium-9 large-10 column deleteContent">
	<h2>Delete Volunteers</h2>
	<?php
		while($row = mysqli_fetch_array($volunteers))
		{
			echo "{$row['volunteers_name']}<a href=\"phpscripts/caller.php?caller_id=deleteVolunteers&id={$row['volunteers_id']}\">Delete Volunteer</a><br>";
		}

	?>

	</div>
	</section>

	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>

</body>
</html>

