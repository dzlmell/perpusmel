<?php
session_start();
session_destroy();
header('loacation:login.php');
?>