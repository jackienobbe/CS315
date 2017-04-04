<?php
// logout.inc.php

session_start();
session_unset();
session_destroy();

$_POST[''] = array();

header("Location: ../index.php");
