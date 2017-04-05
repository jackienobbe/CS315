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
      <h2 class="title"><? echo $_POST['bandName']; ?></h2>
      <h3> Band Details</h3>
      <ul class="details">
        <li><label>Hometown </label> <? echo $_POST['homeTown']; ?></li>
        <li><label>Website/FB </label><a href="<? echo $_POST['website']; ?>" target="_blank"><? echo $_POST['website']; ?></a></li>
        <li><label>Description </label>"<? echo $_POST['description']; ?>"</li>
        <li><label>Contact Person </label> <? echo $_POST['contact']; ?></li>
        <li><label>Professionalism </label><? echo $_POST['professionalism']; ?>/5</li>
        <li><label>Music Quality </label> <? echo $_POST['quality']; ?>/5</li>
        <li><label>Energy </label> <? echo $_POST['energy']; ?></li>
        <li><label>Genre </label> <? echo $_POST['genre1'] . " " . $_POST['genre2'] . " " + $_POST['genre3']; ?> </li>

        <li><label>Last Visit </label> <? echo $_POST['dateAdded']; ?></li>
        <li><label>Added By </label> <? echo $_POST['addedBy']; ?></li>
      </ul>
    <h3>Past Shows</h3>
    <ul>
      <li><a href="viewShowGigantic.php">The GIGANTIC Aquadome Show</a></li>
    </ul>
  </div>
</div>

</body>

</html>
