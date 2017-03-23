<!DOCTYPE html>
  <head>

    <title>aqua-archive // login</title>
    <link type="text/css" rel="stylesheet" href="css/aqua.css" />
    <meta charset="UTF-8">

  </head>

  <body>

    <div id="wrapper">
      <?php include('includes/header.php'); ?>
      <div id="content">
        <form class="login" action="includes/login.inc.php" method="post">
          <p><? if(isset($_POST['error']))
                {
                  echo $_POST['error'];
                }
              ?></p>
          <div class="form-group"><label>username</label><input type="text" name="username" /></div>
          <div class="form-group"><label>password</label><input type="password" name="password" /></div>

          <input type="submit" name="submit" value="Let's Go"/>
        </form>
      </div>
    </div>

  </body>

</html>
