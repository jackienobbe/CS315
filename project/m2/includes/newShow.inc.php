<?php

  function print_form(){
    echo <<<END
      <div id="content">
          <h2>Gotta New Show? </h2>
          <form class="new" action="$_SERVER[PHP_SELF]" method="post">
            <div class="form-group"><label>Name</label><input type="text" name="showName" /></div>
            <div class="form-group"><label>Date</label><input type="text" name="showDate" /></div>
            <div class="form-group"><label>Location</label><input type="text" name="location" /></div>
            <div class="form-group"><label>$ Made</label><input type="text" name="profit" /></div>
            <div class="form-group"><label>Facebook Event</label><input type="text" name="fbevent"/></div>
            <div class="form-group"><label>Potluck?</label><input type="checkbox" name="putluck" value="yes" /></div>
            <div class="form-group"><label>Planned By</label><input type="text" name="planner"></div>

            <div class="form-group">
              <label>Cohesiveness</label><br/>
                the feel didn&#39;t flow
                <input type="range" min="1" max="5" value="3" step="1" />
                it all just fit<br/>
            </div>
            <div class="form-group">
              <label>Well Advirtised?</label><br/>
                oops
                <input type="range" min="1" max="5" value="3" step="1" />
                heckas adverts<br/>
            </div>
            <div class="form-group">
              <label>What went well?</label><br/>
                <textarea></textarea><br/>
            </div>
            <div class="form-group">
              <label>What could have been better?</label><br/>
                <textarea></textarea><br/>
            </div>

            <input type="submit" name="submit" value="Let's Go"/>
          </form>
      </div>
END;
  }


  // RETRIEVE VARIABLES FROM FORM POST ACTION
  $showName = $_POST['showName'];
  $showDate = $_POST['showDate'];
  $location = $_POST['location'];
  $profit = $_POST['profit'];
  $fbEvent = $_POST['fbevent'];
  $potluck = $_POST['potluck'];
  $planner = $_POST['planner'];
  $cohesivness = $_POST['cohesivness'];
  $advert = $_POST['advertisment'];
  $wentWell = $_POST['wentWell'];
  $wentBadly = $_POST['wentBadly'];

  $addedBy = $_SESSION['currentUser'];




?>
