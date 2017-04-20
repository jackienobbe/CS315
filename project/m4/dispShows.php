<?php
    function dispShows() {

        $conn = new PDO("mysql:host=mysql.truman.edu;dbname=jen1141CS315", "jen1141", "aeveuthu");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT showID, showDate, showName, fbLink, crowdSize, theme, location, moneyMade, doorPrice, plannedBy, cohesiveness, advertisement, wentWell, wentBad FROM event");

        $stmt->execute();

        while ( $row = $stmt->Fetch(PDO::FETCH_ASSOC)) {
            print "
                <div class='row' ><h3>{$row['showName']}</h3>
                  <div class='rowDetails'>
                    <ul>
                      <li><label>Date </label> {$row['showDate']}</li>
                      <li><label>Theme </label> {$row['theme']}</li>
                      <li><label>FB Event </label> {$row['fbLink']}</li>
                      <li><label>Door Price </label> \${$row['doorPrice']}</li>
                      <li><label>Crowd size </label> {$row['crowdSize']}</li>
                      <li><label>$ Made </label> \${$row['moneyMade']}</li>
                      <li><label>Planned by </label> {$row['plannedBy']}</li>
                      <li><label>Location </label> {$row['location']}</li>
                      <li><label>Coheseivness </label> {$row['cohesiveness']}/5 </li>
                      <li><label>Well advirtised? </label> {$row['advertisement']}/5</li>
                      <li><label>What went well? </label> {$row['wentWell']}</li>
                      <li><label>What could have been better? </label> {$row['wentBad']}</li>
                    </ul>
                    <form action='$_SERVER[PHP_SELF]' method='post'>
                        <input type='hidden' value={$row['showID']} />
                        <button class='edit'>Edit Show</button>
                        <button class='delete'>Delete Show</button>
                    </form>
                  </div>
                </div>";
        }
    }
?>
<!DOCTYPE html>
    <head>
        <title>aqua-archive // shows</title>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/dispRows.js" type="text/javascript"></script>
        <script src="js/search.js" type="text/javascript"></script>
        <link type="text/css" rel="stylesheet" href="css/aqua.css" />
        <meta charset="UTF-8">
    </head>
    <body>
        <?php include('includes/header.php'); ?>
        <div id="content">
            <h2>Show Archive</h2>
            <div class="dispContainer">
                <input type="text" id="search" value="" placeholder="filter shows"/>
                <?php dispShows(); ?>
            </div>
        </div>
    </body>
</html>
