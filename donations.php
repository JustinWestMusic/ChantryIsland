<?php 
  require_once('admin/phpscripts/init.php');

    $tbl = "tbl_donations";
    $getContent = getAll($tbl);
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chantry Island - Donations</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="row">
      <div class="small-12 columns">
        <h1 class="hide">Chantry Island - Donations</h1>
      </div>
    </div>

    <?php include('includes/header.php') ?>

    <div id="donationsCon">
    <section class="row donations">
    <div class="small-12 column">
    <h2 class="yellowH">Donations</h2>


    <?php while($row = mysqli_fetch_array($getContent)): ?>

        <p><?php echo $row['donations_text1']; ?></p>
<p><?php echo $row['donations_text2']; ?></p>


    <h4><?php echo $row['donations_text3']; ?></h4>
    <p><?php echo $row['donations_text4']; ?></p>
    <p><?php echo $row['donations_text5']; ?></p>
    <p><?php echo $row['donations_text6']; ?></p>
    <p><?php echo $row['donations_text7']; ?></p>

    <p><?php echo $row['donations_text8']; ?></p>
    <p><?php echo $row['donations_text9']; ?></p>

    <p><?php echo $row['donations_text10']; ?></p>

    <?php endwhile; ?>
    
    </div>
    </section>

   
    <section class="row donorCatSec">
    <div class="small-12 column">
    <h2 class="blueH">Donor Category List</h2>

    <table>
        <tr>
            <th class="levelsth">Level</th>
            <th>Amount</th>
        </tr>
        <tr>
            <th>Shipmate</th>   
            <td>$1.00 - 199.00</td>
        </tr>
        <tr>
            <th>Lifesaving Crew</th>    
            <td>$200.00 - 999.00</td>
        </tr>
        <tr>
            <th>Assistant Lighthouse Crew</th> 
            <td>$1,000.00 - 4,999.00</td>
        </tr>
        <tr>
            <th>Lighthouse Keepers</th> 
            <td>$5,000.00 - 9,999.00</td>
        </tr>
        <tr>
            <th>Captain Lambert's Crew</th> 
            <td>$10,000.00 - 24,999.99</td>
        </tr>
        <tr>
            <th>Queen Victoria's Crew</th> 
            <td>$25,000.00 +</td>
        </tr>
    </table>
    </div>
    </section>
      </div>

      <?php include('includes/footer.php') ?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
