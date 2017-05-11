<!-- <?php if(isset($_SESSION['currentUser'])):
    // $here = "../newBand.php";
    // $_POST['ref'] = $here;
    // header("Location: login.php");
else: ?> -->
<?php
    function print_form() {
    echo <<<END
        <h2>Gotta New Band? </h2>
        <form id="new" action="$_SERVER[PHP_SELF]" method="post">
          <div class="form-group"><label>Name <span class="required">*</span></label><input type="text" name="bandName" required /></div>
          <div class="form-group"><label>Hometown <span class="required">*</span></label><input type="text" name="homeTown" required /></div>
          <div class="form-group"><label>Website/Facebook <span class="required">*</span></label><input type="url" name="website" required /></div>
          <div class="form-group"><label>Description <span class="required">*</span></label><input type="text" name="description" required /></div>
          <div class="form-group"><label>Contact Person <span class="required">*</span></label><input type="text" name="contact" required /></div>
          <div class="form-group"><label>Email </label><input type="email" name="contact" /></div>
          <div class="form-group"><label># of Members</label><input type="text" name="numOfMembers" /></div>

          <div class="form-group">
            <label>Professionalism <span class="required">*</span></label><br/>
              pain in the butt
              <input type="range" min="1" max="5" value="3" step="1" name="professionalism" required />
              business in the front
          </div>
          <div class="form-group">
            <label>Music Quality <span class="required">*</span></label><br/>
              painful 4 all parties
              <input type="range" min="1" max="5" value="3" step="1" name="quality" required />
              WOWMOM
          </div>
          <div class="form-group">
            <label>Energy <span class="required">*</span></label><br/>
              we checked 4 a pulse but...
              <input type="range" min="1" max="5" value="3" step="1" name="energy" required />
              just stuck a fork in an outlet
          </div>

          <div class="form-group">
            <label>Genre</label><br/>
              <select name="genre1">
                <option value=""></option>
                <option value="acoustic">acoustic</option>
                <option value="alternative">alternative</option>
                <option value="ambient">ambient</option>
                <option value="bluegrass">bluegrass</option>
                <option value="blues">blues</option>
                <option value="chill">chill</option>
                <option value="contemporary">contemporary</option>
                <option value="country">country</option>
                <option value="dance">dance</option>
                <option value="downtempo">downtempo</option>
                <option value="dub">dub</option>
                <option value="electronic">electronic</option>
                <option value="emo">emo</option>
                <option value="folk">folk</option>
                <option value="freeform">freeform</option>
                <option value="funk">funk</option>
                <option value="fusion">fusion</option>
                <option value="grunge">grunge</option>
                <option value="hard rock">hard rock</option>
                <option value="heavy metal">heavy metal</option>
                <option value="hip-hop">hip-hop</option>
                <option value="house">house</option>
                <option value="IDM">IDM</option>
                <option value="indie rock">indie rock</option>
                <option value="jam band">jam band</option>
                <option value="jazz">jazz</option>
                <option value="krautrock">krautrock</option>
                <option value="lo-fi">lo-fi</option>
                <option value="lounge">lounge</option>
                <option value="metal">metal</option>
                <option value="new age">new age</option>
                <option value="pop">pop</option>
                <option value="psychadelic">psychadelic</option>
                <option value="punk">punk</option>
                <option value="rap">rap</option>
                <option value="reggae">reggae</option>
                <option value="rock and roll">rock and roll</option>
                <option value="singer songwriter">singer songwriter</option>
                <option value="soft rock">soft rock</option>
                <option value="soul">soul</option>
                <option value="surf">surf</option>
                <option value="techno">techno</option>
              </select><br/>
              <!--<div class="blocking" name="genres" placeholder="genres">
                <div class="insertedBlocks">
                    <div class="blockingInput" contenteditable="true">

                    </div>
                </div>

              </div> -->
            </div>
          <input type="hidden" name="dateAdded"  value="<?php Date() ?>" />
          <input type="hidden" name="go" value="process">
          <input type="submit" name="submit" value="Let's Go"/>
        </form >
        </div>
END;
    }

    function process_form() {
        $bandName = $_POST['bandName'];
        $homeTown = $_POST['homeTown'];
        $website = $_POST['website'];
        $description = $_POST['description'];
        $contactPerson = $_POST['contact'];
        $email = $_POST['email'];
        $professionalism = $_POST['professionalism'];
        $quality = $_POST['quality'];
        $energy = $_POST['energy'];
        $genre1 = $_POST['genre1'];

        try {
            $conn = new PDO("mysql:host=mysql.truman.edu;dbname=jen1141CS315", "jen1141", "aeveuthu");

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO band (bandName, homeTown, website, description, contact, email, professionalism, quality, energy)
            VALUES (:bandName, :homeTown, :website, :description, :contact, :email, :professionalism, :quality, :energy)");
            $stmt->bindParam(':bandName', $bandName);
            $stmt->bindParam(':homeTown', $homeTown);
            $stmt->bindParam(':website', $website);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':contact', $contactPerson);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':professionalism', $professionalism);
            $stmt->bindParam(':quality', $quality);
            $stmt->bindParam(':energy', $energy);

            $stmt->execute();
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        // end the DB connection.
        $conn = null;

        echo "<p>Success!!! See all of the bands <a href='dispBands.php'>here</a>. <3</p>";
    }
?>

<!DOCTYPE html>
  <head>
    <title>aqua-archive // add a band</title>
    <link type="text/css" rel="stylesheet" href="css/aqua.css" />
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/wordBlocking.js" type="text/javascript"></script>
    <meta charset="UTF-8">
  </head>

  <!-- <body>
    <div id="wrapper"> -->
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
<!-- <?php endif; ?> -->
