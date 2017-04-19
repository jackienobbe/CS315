<!DOCTYPE html>
  <head>
    <title>aqua-archive // add a show</title>
    <script src="js/newShow.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href="css/aqua.css" />
    <meta charset="UTF-8">
  </head>

      <?php include('includes/header.php'); ?>
      <div id="content">
          <h2>Gotta New Show? </h2>
          <form id="new" action="viewShow.php" method="post" >
            <div class="form-group"><label>Name <span class="required">*</span></label><input type="text" name="showName" id="showName" class="" required /></div>
            <div class="form-group"><label>Date <span class="required">*</span></label><input type="text" name="showDate" id="showDate" class="" required /></div>
            <div class="form-group"><label>Location <span class="required">*</span></label><input type="text" name="location" id="location" class="" required /></div>
            <div class="form-group"><label>Door Price <span class="required">*</span></label><input type="text" name="doorPrice" id="doorPrice" class="" required /></div>
            <div class="form-group"><label>Crowd Size</label><input type="text" name="crowdSize" id="crowdSize" class="" /></div>
            <div class="form-group"><label>$ Made</label><input type="text" name="profit" id="profit" class="" /></div>
            <div class="form-group"><label>Facebook Event <span class="required">*</span></label><input type="text" name="fbevent" id="fbevent" class="" required /></div>
            <div class="form-group"><label>Potluck? </label><input type="checkbox" name="potluck" value="yes" id="potluck" class="" /></div>
            <div class="form-group"><label>Planned By <span class="required">*</span></label><input type="text" name="plannedBy" id="plannedBy" class="" required /></div>

            <div class="form-group">
              <label>Cohesiveness <span class="required">*</span></label><br/>
                the feel didn&#39;t flow
                <input type="range" min="1" max="5" value="3" step="1" name="cohesivness" id="cohesivness" class="" required />
                it all just fit<br/>
            </div>
            <div class="form-group">
              <label>Well Advirtised? <span class="required">*</span></label><br/>
                oops
                <input type="range" min="1" max="5" value="3" step="1" name="advertisment" id="advertisment" class="" required />
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
            <!-- <input type="hidden" name="addedBy" value="<?php echo $_POST['currentUser']; ?>" /> -->
            <input type="submit" name="submit" value="Let's Go"/>
          </form>
      </div>
    </div>

  </body>

</html>
