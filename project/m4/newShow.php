<?php
    function populate_bands_available() {
        $conn = new PDO("mysql:host=mysql.truman.edu;dbname=jen1141CS315", "jen1141", "aeveuthu");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT bandID, bandName FROM band");

        $stmt->execute();

        print "<select name='band'>\n";
        while ( $row = $stmt->Fetch(PDO::FETCH_ASSOC)) {
            print "
                <option value='{$row['bandID']}'>{$row['bandName']}</option>\n";
        }
        print "</select>\n";
    }
    function print_form() {
    echo <<<END
        <h2>Gotta New Show? </h2>
        <form id="new" action="$_SERVER[PHP_SELF]" method="post" >
          <div class="form-group"><label>Name <span class="required">*</span></label><input type="text" name="showName" id="showName" class="" required /></div>
          <div class="form-group"><label>Theme <span class="required">*</span></label><input type="text" name="theme" id="theme" class="" required /></div>
          <div class="form-group"><label>FB Event Link <span class="required">*</span></label><input type="url" name="fbLink" id="fbLink" class="" required /></div>
          <div class="form-group"><label>Date <span class="required">*</span></label><input type="text" name="showDate" id="showDate" class="" required /></div>
          <div class="form-group"><label>Location <span class="required">*</span></label><input type="text" name="location" id="location" class="" required /></div>
          <div class="form-group"><label>Door Price <span class="required">*</span></label><input type="text" name="doorPrice" id="doorPrice" class="" required /></div>
          <div class="form-group"><label>Crowd Size</label><input type="text" name="crowdSize" id="crowdSize" class="" /></div>
          <div class="form-group"><label>$ Made</label><input type="text" name="profit" id="profit" class="" /></div>
          <div class="form-group"><label>Potluck? </label><input type="checkbox" name="potluck" value="yes" id="potluck" class="" /></div>
          <div class="form-group"><label>Planned By <span class="required">*</span></label><input type="text" name="plannedBy" id="plannedBy" class="" required /></div>

          <div class="form-group">
            <label>Cohesiveness <span class="required">*</span></label><br/>
              the feel didn&#39;t flow
              <input type="range" min="1" max="5" value="3" step="1" name="cohesiveness" id="cohesiveness" class="" required />
              it all just fit<br/>
          </div>
          <div class="form-group">
            <label>Well Advirtised? <span class="required">*</span></label><br/>
              oops
              <input type="range" min="1" max="5" value="3" step="1" name="advertisement" id="advertisement" class="" required />
              heckas adverts<br/>
          </div>
          <div class="form-group">
            <label>What went well? <span class="required">*</span></label><br/>
              <textarea name="wentWell" id="wentWell" class="" required ></textarea><br/>
          </div>
          <div class="form-group">
            <label>What could have been better? <span class="required">*</span></label><br/>
              <textarea name="wentBadly" id="wentBadly" class="" required ></textarea><br/>
          </div>
          <div class="form-group">
            <label>Who played at the show? </label>
END;
            populate_bands_available();
echo <<<END

          </div>
          <span class="addAnother">+ another band</span>
          <input type="hidden" name="go" value="process">
          <input type="submit" name="submit" value="Let's Go"/>
        </form>
       </div>
END;
    }

    function process_form() {
        $showName = $_POST['showName'];
        $showDate = $_POST['showDate'];
        $fbLink = $_POST['fbLink'];
        $location = $_POST['location'];
        $crowdSize = $_POST['crowdSize'];
        $theme = $_POST['theme'];
        $moneyMade = $_POST['profit'];
        $doorPrice = $_POST['doorPrice'];
        $potluck = true;
        $plannedBy = $_POST['plannedBy'];
        $cohesiveness = $_POST['cohesiveness'];
        $advertisement = $_POST['advertisement'];
        $wentWell = $_POST['wentWell'];
        $wentBad = $_POST['wentBad'];
        $bandID = $_POST['band'];

        try {
            $conn = new PDO("mysql:host=mysql.truman.edu;dbname=jen1141CS315", "jen1141", "aeveuthu");

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO event (showDate, showName, fbLink, crowdSize, theme, location, moneyMade, doorPrice, potluck, plannedBy, cohesiveness, advertisement, wentWell, wentBad)
            VALUES (:showDate, :showName, :fbLink, :crowdSize, :theme, :location, :moneyMade, :doorPrice, :potluck, :plannedBy, :cohesiveness, :advertisement, :wentWell, :wentBad);
            INSERT INTO show_band (showID, bandID) VALUES (LAST_INSERT_ID(), :bandID)");
            $stmt->bindParam(':showName', $showName);
            $stmt->bindParam(':showDate', $showDate);
            $stmt->bindParam(':fbLink', $fbLink);
            $stmt->bindParam(':location', $location);
            $stmt->bindParam(':crowdSize', $crowdSize);
            $stmt->bindParam(':theme', $theme);
            $stmt->bindParam(':moneyMade', $moneyMade);
            $stmt->bindParam(':doorPrice', $doorPrice);
            $stmt->bindParam(':potluck', $potluck);
            $stmt->bindParam(':plannedBy', $plannedBy);
            $stmt->bindParam(':cohesiveness', $cohesiveness);
            $stmt->bindParam(':advertisement', $advertisement);
            $stmt->bindParam(':wentWell', $wentWell);
            $stmt->bindParam(':wentBad', $wentBad);

            $stmt->bindParam(':bandID', $bandID);

            $stmt->execute();

        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        // end the DB connection.
        $conn = null;

        echo "<p>Success!!!</p>";
    }
?>

<!DOCTYPE html>
  <head>
    <title>aqua-archive // add a show</title>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/newShow.js" type="text/javascript"></script>

    <link type="text/css" rel="stylesheet" href="css/aqua.css" />
    <meta charset="UTF-8">
  </head>

      <?php include('includes/header.php'); ?>
      <div id="content">
          <?php
               if (isset($_POST['go']) && ('process' == $_POST['go'])) {
                   process_form();
               }
               else {
                   print_form();
               }
           ?>
      </div>
  </body>
</html>
