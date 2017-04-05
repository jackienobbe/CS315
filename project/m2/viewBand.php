<!DOCTYPE html>
<head>
  <title>aqua-archive // bands</title>
  <link type="text/css" rel="stylesheet" href="css/aqua.css" />
  <meta charset="UTF-8">
</head>

<!-- <body>
  <div id="wrapper"> -->
    <?php include('includes/header.php'); ?>
    <div id="content">
      <h2 class="title"><?php echo $_POST['bandName']; ?></h2>
      <h3> Band Details</h3>
      <ul class="details">
        <li><label>Hometown </label> <?php echo $_POST['homeTown']; ?></li>
        <li><label>Website/FB </label><a href="<?php echo $_POST['website']; ?>" target="_blank"><?php echo $_POST['website']; ?></a></li>
        <li><label>Description </label>"<? echo $_POST['description']; ?>"</li>
        <li><label>Contact Person </label> <?php echo $_POST['contact']; ?></li>
        <li><label>Professionalism </label><?php echo $_POST['professionalism']; ?>/5</li>
        <li><label>Music Quality </label> <?php echo $_POST['quality']; ?>/5</li>
        <li><label>Energy </label> <?php echo $_POST['energy']; ?></li>
        <li><label>Genre </label> <?php echo $_POST['genre1'] . " " . $_POST['genre2'] . " " + $_POST['genre3']; ?> </li>

        <li><label>Last Visit </label> <?php echo $_POST['dateAdded']; ?></li>
        <li><label>Added By </label> <?php echo $_POST['addedBy']; ?></li>
      </ul>
    <h3>Past Shows</h3>
    <ul>
      <li><a href="viewShowGigantic.php">The GIGANTIC Aquadome Show</a></li>
    </ul>
  </div>
</div>

</body>

</html>
