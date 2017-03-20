<?php

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
    header("Location: ../index.php");  //redirect to index.php

  }
  else
  {
    header("Location: login.html"); //try again
  }

?>
