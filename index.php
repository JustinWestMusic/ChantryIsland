<?php 
  require_once('admin/phpscripts/init.php');

    $tbl = "tbl_index";
    $getContent = getAll($tbl);
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chantry Island - Home</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="row">
      <div class="small-12 columns">
        <h1 class="hide">Chantry Island - Home</h1>
      </div>
    </div>

    <header>
    <section class="row">
    <h2 class="hide">Book or Call Now!</h2>
    <div class="small-2  medium-2 medium-push-5 column">
    <object data="images/logo2.svg" id="logo"></object>
    </div>
    <div class="small-10 medium-5 column" id="bookCallNav">
    <a href="booking.php" role="button" class="tourBtnSmall">BOOK A TOUR</a>
    <a href="donations.php" role="button" class="donateBtnSmall">DONATE</a>
    <p>Call: <a href="tel:519-797-5862">519-797-5862</a></p>
    <p>Toll: Free <a href="tel:+1-866-797-5862">1-866-797-5862</a></p>
    </div>
    </section>

    <div class="row">
    <nav id="mainNav" class="small-12 columns">
    <h2 class="hide">Main Navigation</h2>
        
    <div class="title-bar" data-responsive-toggle="top-menu" data-hide-for="large">
    <button class="menu-icon" type="button" data-toggle></button>
                </div>
    <div id="top-menu">
    <ul>
    <li><a class="textShadow1" href="index.php">Home</a></li>
    <li><a class="textShadow1" href="about.php">About</a></li>
    <li><a class="textShadow1" href="booking.php">Booking</a></li>
    <li><a class="textShadow1" href="gallery.php">Gallery</a></li>
    <li><a class="textShadow1" href="newsevents.php">News & Events</a></li>
    <li><a class="textShadow1" href="donations.php">Donations</a></li>
    <li><a class="textShadow1" href="contact.php">Contact</a></li>
    </ul>
    </div>
    </nav>

    </div>

    <section class="row">
    <div class="small-12 column" id="headline">
    <h2 class="textShadow1">The Marine Heritage Society Presents</h2>
    <h3 class="textShadow1">CHANTRY ISLAND</h3>
    <!--<h4 class="textShadow1">COME EXPERIENCE ONE OF THE TRUE WONDERS ON LAKE HURON!</h4>-->

    <a href="booking.php" role="button" class="tourBtnBig">BOOK A TOUR</a>
    </div>
    </section>
    </header>

    <section class="row videoSec">
    <div class="small-12 column">

    <?php while($row = mysqli_fetch_array($getContent)): ?>

          
    <h2><?php echo $row['index_videoTitle']; ?></h2>

    <video controls class="video">
        <source src="video/chantryislandpromo.mp4" type="video/mp4">
        <source src="video/chantryislandpromo.webm" type="video/webm">
        <source src="video/chantryislandpromo.ogv" type="video/ogg">
    </video>

    </div>
    </section>

    <section class="row mhsSec">
    <div class="small-12 large-6 column">
    <h2 class="greenH" ><?php echo $row['index_sec1Title']; ?></h2>
    <p><?php echo $row['index_sec1Text']; ?></p>
    </div>

    
    <div class="small-12 large-6 column">
    <img src="images/peerless2.jpg" alt="Peerless 2">
    </div>
    </section>

    <section class="row tciSec">
    <div class="small-12 large-6 column">
    <img src="images/chantryisland1.jpg" alt="Peerless 2">
    </div>

    <div class="small-12 large-6 column">
    <h2 class="blueH"><?php echo $row['index_sec2Title']; ?></h2>
    <p><?php echo $row['index_sec2Text']; ?></p>

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
