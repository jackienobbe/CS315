<?php
  ob_start();
  session_start();

  // if (isset($_SESSION["username"]) != "")
  // {
  //   header("Location: logout.inc.php");
  //   //header("Location: ../view_student.php");
  //   exit;
  // }

  $username = $_POST['username'];
  $password = $_POST['password'];

  // Verify password (will reference db in future)
  if(!strcmp($username, "aquadome") && !strcmp($password, "password"))
  {
    $_SESSION['currentUser'] = $username;
    if(isset($_POST['ref']))
    {
      $ref = "/newBand.php"; //$_POST['ref'];
      header("Location: ../$ref");  //redirect to index.php
    }
    else
    {
      header("Location: ../index.php");
    }
  }
  else
  {
    $_POST['error'] = 1; //"Try that again...";
    header("Location: ../login.php"); //try again
  }

?>
