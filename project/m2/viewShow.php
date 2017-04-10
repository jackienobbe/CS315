<!DOCTYPE html>
<head>
  <title>aqua-archive // shows</title>
  <link type="text/css" rel="stylesheet" href="css/aqua.css" />
  <meta charset="UTF-8">
</head>

<!-- <body>
  <div id="wrapper"> -->
    <?php include('includes/header.php'); ?>
    <div id="content">
      <h2 class="showName"><?php echo $_POST['showName']; ?></h2>
      <h3>Show Details</h3>
      <ul class="details">
          <li><label>Date </label> <?php echo $_POST['showDate']; ?></li>
          <li><label>FB Event Link </label><a href="<?php echo $_POST['fbevent']; ?>" target="_blank"><?php echo $_POST['fbevent']; ?></a></li>
          <li><label>Door Price </label> $<?php echo $_POST['doorPrice']; ?></li>
          <li><label>Crowd size </label> <?php echo $_POST['crowdSize']; ?></li>
          <li><label>Location </label> <?php echo $_POST['location']; ?></li>
          <li><label>$ Made </label> $<?php echo $_POST['profit']; ?></li>
          <li><label>Potluck </label> <?php echo $_POST['potluck']; ?></li>
          <li><label>Planned by </label> <?php echo $_POST['plannedBy']; ?></li>
          <li><label>Coheseivness </label><?php echo $_POST['cohesivness']; ?>/5</li>
          <li><label>Well Advirtised? </label> <?php echo $_POST['advertisment']; ?>/5</li>
          <li><label>What went well? </label> <?php echo $_POST['wentWell']; ?></li>
          <li><label>What could have been better? </label> <?php echo $_POST['wentBadly']; ?></li>
          <li><label>Added by </label> <?php echo $_POST['addedBy']; ?></li>
      </ul>
      </div>
    </div>
</body>

</html>
