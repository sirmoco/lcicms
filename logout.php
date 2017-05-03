<?php

session_start();
unset($_SESSION['accountid']);
session_destroy();
header("Location:index.php");
exit;


?>