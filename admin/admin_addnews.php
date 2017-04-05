<?php
	require_once('phpscripts/init.php');
	//ini_set('display_errors',1);
    //error_reporting(E_ALL);

    confirm_logged_in();
	
	$tbl = "tbl_news";
	$newsQuery = getAll($tbl);


	if(isset($_POST['submit'])) 
	{
		//echo "submit clicked...";


		$newsTitle = $_POST['news_title'];
		$newsImage = $_FILES['news_image']['name'];
		$newsText = $_POST['news_text'];
		$newsDate = $_POST['news_date'];
		
		$uploadNews = addNews($newsTitle, $newsImage, $newsText, $newsDate);
		$message = $uploadNews;

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
    <title>Add News</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
</head>
<body>
<h1 class="hide">Add News</h1>

	<?php include('includes/header.php'); ?>


	<section class="row-expanded">

	<?php include('includes/sidepanel.php'); ?>

	<div class="small-12 medium-9 large-10 column addVideo">

		<h2>Add News</h2>

		<?php if(!empty($message)){echo $message;} ?>
		<form action="admin_addnews.php" method="post" enctype="multipart/form-data">
		<label>News Title:</label><br>
		<input type="text" name="news_title" value="" size="32"><br><br>
		<label>News Image:</label><br>
		<input type="file" name="news_image" value="" size="32"><br><br>
		<label>News Text:</label><br>
		<input type="text" name="news_text" value="" size="32"><br><br>
		<label>News Date:</label><br>
		<input type="text" name="news_date" value="" size="32"><br><br>

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