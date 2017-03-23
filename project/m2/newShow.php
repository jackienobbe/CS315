<!DOCTYPE html>
  <head>

    <title>aqua-archive // add a show</title>
    <link type="text/css" rel="stylesheet" href="css/aqua.css" />
    <meta charset="UTF-8">

  </head>

  <body>

    <div id="wrapper">
      <?php include('includes/header.php'); ?>
      <div id="content">
          <h2>Gotta New Show? </h2>
          <form class="new">
            <div class="form-group"><label>Name</label><input type="text" name="showName" /></div>
            <div class="form-group"><label>Date</label><input type="text" name="showDate" /></div>
            <div class="form-group"><label>Location</label><input type="text" name="location" /></div>
            <div class="form-group"><label>$ Made</label><input type="text" name="profit" /></div>
            <div class="form-group"><label>Facebook Event</label><input type="text" name="fbevent"/></div>
            <div class="form-group"><label>Potluck?</label><input type="checkbox" name="putluck" value="yes" /></div>
            <div class="form-group"><label>Planned By</label><input type="text" name="bandName"></div>

            <div class="form-group">
              <label>Cohesiveness</label><br/>
                the feel didn't flow
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
    </div>

  </body>

</html>
