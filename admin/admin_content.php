<?php
	require_once('phpscripts/connect.php');
	require_once('phpscripts/init.php');
	confirm_logged_in();

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
    <title>Content Settings - Life is Worth Sharing</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
  </head>
<body>

	<h1 class="hide">Content Settings - Life is Worth Sharing</h1>
	

	<?php include('includes/header.php'); ?>


	<section class="row-expanded" id="adminSection">

	<?php include('includes/sidepanel.php'); ?>

	<div class="small-12 medium-9 large-10 column contentSettings">

	<h2>Content Settings</h2>
	
	<div class="row float-center">

		<div class="small-12 medium-4 column float-center cmsIconDiv">
		<object data="images/editcontent.svg" class="cmsIcon"></object>
		<a  href="admin_editindex.php">Edit Index</a>
		</div>

		<div class="small-12 medium-4 column float-center cmsIconDiv">
		<object data="images/editcontent.svg" class="cmsIcon"></object>
		<a href="admin_editabout.php">Edit About</a>
		</div>

		<div class="small-12 medium-4 column float-center cmsIconDiv">
		<object data="images/editcontent.svg" class="cmsIcon"></object>
		<a href="admin_addnews.php">Add News</a>
		</div>

		<div class="small-12 medium-4 column float-center cmsIconDiv">
		<object data="images/editcontent.svg" class="cmsIcon"></object>
		<a href="admin_editnews.php">Edit News</a>
		</div>

		<div class="small-12 medium-4 column float-center cmsIconDiv">
		<object data="images/deletecontent.svg" class="cmsIcon"></object>
		<a href="admin_deletenews.php">Delete News</a>
		</div>

		<div class="small-12 medium-4 column float-center cmsIconDiv">
		<object data="images/editcontent.svg" class="cmsIcon"></object>
		<a href="admin_addevents.php">Add Event</a>
		</div>

		<div class="small-12 medium-4 column float-center cmsIconDiv">
		<object data="images/editcontent.svg" class="cmsIcon"></object>
		<a href="admin_editevents.php">Edit Event</a>
		</div>

		<div class="small-12 medium-4 column float-center cmsIconDiv">
		<object data="images/deletecontent.svg" class="cmsIcon"></object>
		<a href="admin_deleteevents.php">Delete Event</a>
		</div>

		<div class="small-12 medium-4 column float-center cmsIconDiv">
		<object data="images/editcontent.svg" class="cmsIcon"></object>
		<a href="admin_addvolunteers.php">Add Volunteer</a>
		</div>

		<div class="small-12 medium-4 column float-center cmsIconDiv">
		<object data="images/deletecontent.svg" class="cmsIcon"></object>
		<a href="admin_deletevolunteers.php">Delete Volunteers</a>
		</div>

		<div class="small-12 medium-4 column float-center cmsIconDiv">
		<object data="images/editcontent.svg" class="cmsIcon"></object>
		<a href="admin_editbooking.php">Edit Booking</a>
		</div>

		<div class="small-12 medium-4 column float-center cmsIconDiv">
		<object data="images/editcontent.svg" class="cmsIcon"></object>
		<a href="admin_editcontact.php">Edit Contact</a>
		</div>

	</div>
	
	</section>

	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>
	
</body>
</html>