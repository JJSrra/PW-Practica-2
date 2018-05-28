<?php

session_start();

$_SESSION['nickname'] = null;

header("Location: index.php");
exit;


?>