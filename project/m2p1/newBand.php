<? if(isset($_SESSION['currentUser'])):

    $here = "../newBand.php";
    $_POST['ref'] = $here;
    header("Location: login.php");

else: ?>

<!DOCTYPE html>
  <head>

    <title>aqua-archive // add a band</title>
    <link type="text/css" rel="stylesheet" href="css/aqua.css" />
    <meta charset="UTF-8">

  </head>

  <body>
    <div id="wrapper">
      <?php include('includes/header.php'); ?>
       <div id="content">
            <h2>Gotta New Band? </h2>
            <form class="new" action="php/newBand.php">
              <div class="form-group"><label>Name</label><input type="text" name="bandName" /></div>
              <div class="form-group"><label>Hometown</label><input type="text" name="homeTown" /></div>
              <div class="form-group"><label>Website/Facebook</label><input type="text" name="website" /></div>
              <div class="form-group"><label>Description</label><input type="text" name="description" /></div>
              <div class="form-group"><label># of Members</label><input type="text" name="numOfMembers" /></div>

              <div class="form-group">
                <label>Professionalism</label><br/>
                  pain in the ass
                  <input type="range" min="1" max="5" value="3" step="1" />
                  business in the front
              </div>
              <div class="form-group">
                <label>Music Quality</label><br/>
                  painful 4 all parties
                  <input type="range" min="1" max="5" value="3" step="1" />
                  WOWMOM
              </div>
              <div class="form-group">
                <label>Energy</label><br/>
                  we checked 4 a pulse but...
                  <input type="range" min="1" max="5" value="3" step="1" />
                  just stuck a fork in an outlet
              </div>

              <div class="form-group">
                <label>Genre (pick 3)</label><br/>
                  <select>
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
                  <select>
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
                  <select>
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
                </div>
                <input type="submit" name="submit" value="Let's Go"/>
            </form >
        </div>
    </div>
  </body>
</html>
<?endif; ?>
