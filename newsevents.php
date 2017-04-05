<?php 
  require_once('admin/phpscripts/init.php');


    $tbl = "tbl_news";
    $getNews = getAll($tbl);

    $tbl2 = "tbl_events";
    $getEvents = getAll2($tbl2);

    $tbl3 = "tbl_volunteers";
    $getVolunteers = getAll3($tbl3);


?>


<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chantry Island - News & Events</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="row">
      <div class="small-12 columns">
        <h1 class="hide">Chantry Island - News & Events</h1>
      </div>
    </div>

    <?php include('includes/header.php') ?>

    <section class="row newseventsSec">
    <div class="small-12 column">
    <h2>News & Events</h2>
    <p>Welcome to our News and Events page. Here we'll cover new projects, and give information about ongoing projects. We will let you know about upcoming events and ongoing events that involve the Marine Heritage Society. More frequent updates will be posted during our operating season at end of May to mid-September. View schedules for exact dates.
    </p>
    </div>

    </section>

    <section class="row eventsSec">
    <div class="small-12 column">
    <h2 class="greenH">Events</h2>

        <?php while($row = mysqli_fetch_array($getEvents)): ?>
           
        <?php echo "<h4>{$row['events_title']}</h4>"; ?>
        <?php echo "<p>{$row['events_text']}</p>"; ?>
        <?php echo "<p>{$row['events_date']}</p>"; ?>

    <?php endwhile; ?>
    </div>

    </section>


    <section class="row newsSec">
    <div class="small-12 column">
    <h2 class="blueH">News</h2>
    

    <?php while($row2 = mysqli_fetch_array($getNews)): ?>
           
        <?php echo "<h4>{$row2['news_title']}</h4>"; ?>
        <?php echo "<img src=\"images/{$row2['news_image']}\" alt=\"{$row2['news_title']}\">"; ?>
        <?php echo "<p>{$row2['news_text']}</p>"; ?>
        <?php echo "<p>{$row2['news_date']}</p>"; ?>

    <?php endwhile; ?>

    </div>

 </section>

    <section class="row volunteers">
    <div class="small-12 column">
    <h2>Volunteers</h2>
    </div>
  
    
    <?php while($row3 = mysqli_fetch_array($getVolunteers)): ?>

        <div class="small-12 medium-4 column">
           
        <?php echo "<h6>{$row3['volunteers_name']}</h6>"; ?>
        <?php echo "<img src=\"images/{$row3['volunteers_img']}\" alt=\"{$row3['volunteers_name']}\">"; ?>
        <?php echo "<p>{$row3['volunteers_position']}</p>"; ?>

        </div>

    <?php endwhile; ?>

    

    

    </section>

    <?php include('includes/footer.php') ?>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
