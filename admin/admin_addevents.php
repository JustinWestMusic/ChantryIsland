<?php
	require_once('phpscripts/init.php');
	//ini_set('display_errors',1);
    //error_reporting(E_ALL);

    confirm_logged_in();
	
	$tbl = "tbl_events";
	$newsQuery = getAll($tbl);


	if(isset($_POST['submit'])) 
	{
		//echo "submit clicked...";


		$eventsTitle = $_POST['events_title'];
		$eventsText = $_POST['events_text'];
		$eventsDate = $_POST['events_date'];
		
		$uploadNews = addEvents($eventsTitle, $eventsText, $eventsDate);
		$message = $uploadevents;

	}

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
    <title>Add Event</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
</head>
<body>
<h1 class="hide">Add Event</h1>

	<?php include('includes/header.php'); ?>


	<section class="row-expanded">

	<?php include('includes/sidepanel.php'); ?>

	<div class="small-12 medium-9 large-10 column addVideo">

		<h2>Add Event</h2>

		<?php if(!empty($message)){echo $message;} ?>
		<form action="admin_addevents.php" method="post" enctype="multipart/form-data">
		<label>Event Title:</label><br>
		<input type="text" name="events_title" value="" size="32"><br><br>
		<label>Event Text:</label><br>
		<input type="text" name="events_text" value="" size="32"><br><br>
		<label>Event Date:</label><br>
		<input type="text" name="events_date" value="" size="32"><br><br>

		<input type="submit" name="submit" value="Add">
		</form>

	</div>

	</section>


	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>

</body>
</html>