<?php
  //ini_set('display_errors', 1);
  //error_reporting(E_ALL);
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
    <title>Edit Contact</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
</head>
<body>
  <h1 class="hide">Edit Contact</h1>

  <?php include('includes/header.php'); ?>


  <section class="row-expanded">

  <?php include('includes/sidepanel.php'); ?>

  <div class="small-12 medium-9 large-10 column editContent">
  <h2>Edit Contact</h2>
  <a class="viewPage" href="../contact.php" target="_blank">View Contact Page</a>
  <?php
  
      $tbl="tbl_contact"; /*only have to change*/
      $col="contact_id";
      $id=1;
      single_edit($tbl, $col, $id);

      //echo "<input type=\"submit\" value=\"Edit Content\">";

  ?>

  </div>

  </section>

    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>