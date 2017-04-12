<!DOCTYPE html>
  <head>
    <title>aqua-archive // add a show</title>
    <link type="text/css" rel="stylesheet" href="css/aqua.css" />
    <meta charset="UTF-8">
  </head>

      <?php include('includes/header.php'); ?>
      <div id="content">
          <h2>Gotta New Show? </h2>
          <form id="new" action="viewShow.php" method="post">
            <div class="form-group"><label>Name</label><input type="text" name="showName" id="showName"/><p</div>
            <div class="form-group"><label>Date</label><input type="text" name="showDate" id="showDate"/></div>
            <div class="form-group"><label>Location</label><input type="text" name="location" id="location"/></div>
            <div class="form-group"><label>Door Price</label><input type="text" name="doorPrice" id="doorPrice" /></div>
            <div class="form-group"><label>Crowd Size</label><input type="text" name="crowdSize" id="crowdSize" /></div>
            <div class="form-group"><label>$ Made</label><input type="text" name="profit" id="profit" /></div>
            <div class="form-group"><label>Facebook Event</label><input type="text" name="fbevent" id="fbevent" /></div>
            <div class="form-group"><label>Potluck?</label><input type="checkbox" name="potluck" value="yes" id="potluck" /></div>
            <div class="form-group"><label>Planned By</label><input type="text" name="plannedBy" id="plannedBy"></div>

            <div class="form-group">
              <label>Cohesiveness</label><br/>
                the feel didn&#39;t flow
                <input type="range" min="1" max="5" value="3" step="1" name="cohesivness" id="cohesivness" />
                it all just fit<br/>
            </div>
            <div class="form-group">
              <label>Well Advirtised?</label><br/>
                oops
                <input type="range" min="1" max="5" value="3" step="1" name="advertisment" id="advertisment" />
                heckas adverts<br/>
            </div>
            <div class="form-group">
              <label>What went well?</label><br/>
                <textarea name="wentWell" id="wentWell" ></textarea><br/>
            </div>
            <div class="form-group">
              <label>What could have been better?</label><br/>
                <textarea name="wentBadly" id="wentBadly"></textarea><br/>
            </div>
            <!-- <input type="hidden" name="addedBy" value="<?php echo $_POST['currentUser']; ?>" /> -->
            <input type="submit" name="submit" value="Let's Go"/>
          </form>
      </div>
    </div>

  </body>

</html>
