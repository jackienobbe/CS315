<?php
  ob_start();
  session_start();
?>

<div id='header-wrapper'>
  <div id='header'>
    <a href='index.php'><img src='img/logo.jpg' alt='aquadome-logo' id='logo'>
    <h1>Aqua-Archive</h1></a>
  </div>
  <div id='nav'>
    <ul>
      <li><a href='newShow.php'>New Show</a></li>
      <li><a href='newBand.php'>New Band</a></li>
      <li><a href='dispBands.php'>Bands</a></li>
      <li><a href='dispShows.php'>Shows</a></li>
    </ul>
  </div>
  <div id='hello'>
    <?php if(isset($_SESSION['currentUser'])): ?>
      <ul>
        <li> hey there, <? echo $_SESSION['currentUser']; ?></li>
        <li>
          <form action='includes/logout.inc.php'>
            <button type='submit' name='logout'>logout</button>
          </form>
        </li>
      </ul>
    <? else: ?>
      <ul>
        <li><a href='login.php'>Login</a></li>
      </ul>
    <? endif; ?>
  </div>
</div>
