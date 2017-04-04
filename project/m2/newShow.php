<!DOCTYPE html>
  <head>

    <title>aqua-archive // add a show</title>
    <link type="text/css" rel="stylesheet" href="css/aqua.css" />
    <meta charset="UTF-8">

  </head>

  <body>

    <div id="wrapper">
      <?php include('includes/header.php'); ?>
      <?php include('includes/newShow.inc.php');
        if (isset($_SESSION['currentUser']))
        {
          print_form();
        }
        else
        {
          print_form();
        }
      ?>
    </div>

  </body>

</html>
