<?php 
  require_once('admin/phpscripts/init.php');

    $tbl = "tbl_about";
    $getContent = getAll($tbl);
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chantry Island - About</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="row">
      <div class="small-12 columns">
        <h1 class="hide">Chantry Island - About</h1>
      </div>
    </div>

    <?php include('includes/header.php') ?>

    <section class="row aboutCISec">
    <div class="small-12 large-6 column">

    <?php while($row = mysqli_fetch_array($getContent)): ?>
    
        <h2 class="greenH"><?php echo $row['about_sec1Title']; ?></h2>

        <p><?php echo $row['about_sec1Text1']; ?></p>

        <p><?php echo $row['about_sec1Text2']; ?></p>

        <p><?php echo $row['about_sec1Text3']; ?></p>  

    </div>
    <div class="small-12 large-6 column aboutCIImg">
    <img src="images/chantryisland-skyview.jpg" alt="Chantry Island sky view">
    </div>
    </section>

    <section class="row lhSec">
    <div class="small-12 column">
    <h2><?php echo $row['about_sec2Title']; ?></h2>
    <p><?php echo $row['about_sec2Text']; ?></p>
    </div>
    </section>

    <section class="row lhSec">
    <div class="small-12 column">
    <h2 class="greenH"><?php echo $row['about_sec3Title']; ?></h2>
    <p><?php echo $row['about_sec3Text']; ?></p>
    </div>
    </section>

    <section class="row ciBASec">
    <div class="small-12 large-6 column">
    <img src="images/lighthouse-before.jpg" alt="Chantry Island Lighthouse Before">
    <div class="textOverlay">
    <h2 class="greenH">Before</h2>
    <p ><?php echo $row['about_beforeText']; ?></p>
    </div>
    </div>

    <div class="small-12 large-6 column">
    <img src="images/lighthouse-after.jpg" alt="Chantry Island Lighthouse After">
    <div class="textOverlay2">
    <h2 class="blueH">After</h2>
    <p><?php echo $row['about_afterText']; ?></p>
    </div>
    </div>
    </section>

    <section class="row fdiSec">
    <div class="small-12 large-6 column">
    <img src="images/chantryisland-birds.jpg" alt="Chantry Island Birds">
    </div>

    <div class="small-12 large-6 column">
    <h2 class="blueH"><?php echo $row['about_sec4Title']; ?></h2>
    <p><?php echo $row['about_sec4Text']; ?></p>

    <?php endwhile; ?>

    </div>
    </section>

    <?php include('includes/footer.php') ?>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
