<?php 
  require_once('admin/phpscripts/init.php');

    $tbl = "tbl_booking";
    $getContent = getAll($tbl);
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chantry Island - Booking</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="row">
      <div class="small-12 columns">
        <h1 class="hide">Chantry Island - Booking</h1>
      </div>
    </div>

    <?php include('includes/header.php') ?>

    <div id="bookTSec">
    <section class="row">
    <div class="small-12 column">

    <?php while($row = mysqli_fetch_array($getContent)): ?>

    <h2><?php echo $row['booking_bookTitle']; ?></h2>
        <p><?php echo $row['booking_bookSubTitle']; ?></p>
        <p>Call: <a href="tel:519-797-5862">519-797-5862</a></p>
        <p>Toll: Free <a href="tel:+1-866-797-5862">1-866-797-5862</a></p>

        <p><span id="cpp"><?php echo $row['booking_bookPrice']; ?></span> (inc. HST)</p>
        <p><?php echo $row['booking_bookInfo1']; ?></p>
        <p><?php echo $row['booking_bookInfo2']; ?></p>
        <p><?php echo $row['booking_bookInfo3']; ?></p>
        <p><?php echo $row['booking_bookInfo4']; ?></p>
        <p><?php echo $row['booking_bookInfo5']; ?></p>
        <p><?php echo $row['booking_bookInfo6']; ?></p>
        <p><?php echo $row['booking_bookInfo7']; ?></p>

        <p><?php echo $row['booking_bookInfo8']; ?></p>
        <p>See the Schedule below for available dates</p>

    </div>
    </section>
    </div>

    <section class="row scheduleSec">
    <div class="small-12 column">
    <h2>Schedule</h2>

    <table>
        <tr>
            <th id="datesth">Dates (2017)</th>
            <th>Hours</th>
        </tr>
        <tr>
            <th>May 27, 28</th>   
            <td>1PM-3PM, 3PM-5PM</td>
        </tr>
        <tr>
            <th>June 3, 4, 10, 11, 17, 18, 24, 25</th>    
            <td>1PM-3PM, 3PM-5PM</td>
        </tr>
        <tr>
            <th>July 1 - Sept. 4 (7 days a week)</th> 
            <td>1PM-3PM, 3PM-5PM</td>
        </tr>
        <tr>
            <th>July weekends Sat & Sun (Additional morning tour)</th> 
            <td>9:30AM-11:30AM</td>
        </tr>
        <tr>
            <th>Aug 1 - Aug 31 (Additional morning tour)</th> 
            <td>9:30AM-11:30AM</td>
        </tr>
    </table>
    </div>
    </section>

    <section class="row tbhSec">
    <div class="small-12 column">
    <h2>Tour Base Hours</h2>
    <p>May & June weekend 12:00PM-5:30PM</p>
    <p>July 1 - September 4 everyday 9:00AM-5:30PM</p>
    <img src="images/chantryisland-tourbase.jpg" alt="Chantry Island Tour Base">
    </div>
    </section>


    <section class="row tiSec">
        <div class="small-12 large-6 column">
        <h2 class="blueH"><?php echo $row['booking_tourInfoTitle']; ?></h2>
            <p><?php echo $row['booking_tourInfoText']; ?></p>

            <h4 class="blueH"><?php echo $row['booking_tourInfoTitle2']; ?></h4>
            <p><?php echo $row['booking_tourInfoText2']; ?></p>

            <?php endwhile; ?>

        </div>

        <div class="small-12 large-6 column">
        <img src="images/peerless2-ondock.jpg" alt="Peerless 2 on dock">
        </div>

    </section>

    <?php include('includes/footer.php') ?>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
