<?php

    require_once("admin/phpscripts/init.php");

    $tbl = "tbl_contact";
    $getContent = getAll($tbl);

    if(isset($_POST['name']))
    {
        //echo "Thanks, I will get back to you shortly, {$_POST['name']}.";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];
        $direct = "thankyou.php";
        sendMessage($name, $email, $phone, $subject, $msg, $direct);
    }
    else
    {
        //echo "Please fill out the form."; 
    }

?>


<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chantry Island - Contact</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATMAndxCt7G4JvWOZXxjrWr4TTVPTxo50"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="row">
      <div class="small-12 columns">
        <h1 class="hide">Chantry Island - Contact</h1>
      </div>
    </div>

    <?php include('includes/header.php') ?>

    <section class="row contactTopSec">
    <div class="small-12 column">
    <h2 class="blueH">Contact</h2>
    <p>Call: <a href="tel:519-797-5862">519-797-5862</a></p>
    <p>Toll: Free <a href="tel:+1-866-797-5862">1-866-797-5862</a></p>

    
    <?php while($row = mysqli_fetch_array($getContent)): ?>

    <h4><?php echo $row['contact_text1']; ?></h4>
    <p><?php echo $row['contact_text2']; ?></p>
    <p><?php echo $row['contact_text3']; ?></p>
    <p><?php echo $row['contact_text4']; ?></p>
    <p><?php echo $row['contact_text5']; ?></p>

    <h4><?php echo $row['contact_directionsTitle']; ?></h4>
    <p><?php echo $row['contact_directionsText']; ?></p>

    <div id="mapRel">
    <div class="preload-wrapper">
        <i class="fa fa-spinner fa-spin"></i>
        <span>Loading map, please wait...</span>
    </div>

    <div class="map-wrapper">
    </div>
    <input type="text" class="address" placeholder="Enter your location">
    <button class="geocode">Find Route</button>

    </div>
    </div>
    </section>


    <section class="row">
    <div class="small-12 column"> 
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form">
    <h2 class="blueH">Contact Form</h2> 
    <p><?php echo $row['contact_formText1']; ?></p>
    <p><?php echo $row['contact_formText2']; ?></p>
    <p><?php echo $row['contact_formText3']; ?></p>

    <?php endwhile; ?>
    
        <label>Your Name*</label>
        <input required name="name" id="name" type="text">
        <label>Your E-Mail*</label>
        <input required name="email" id="email" type="email">
        <label>Your Phone Number*</label>
        <input required name="phone" id="phone" type="tel">
        <label>Subject*</label>
        <input required name="subject" id="subject" type="text">
        <label>Your Message*</label>
        <textarea required id="msg" name="msg"></textarea>
        <input type="submit" id="send" value="Send">  
        
    </form>
    </div>
    </section>

    <?php include('includes/footer.php') ?>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/map.js"></script>
  </body>
</html>
