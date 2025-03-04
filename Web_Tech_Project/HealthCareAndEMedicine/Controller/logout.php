<?php
require_once('../Model/userModel.php');
session_start();
setcookie('flag', 'true', time()-10, '/');
header('location: ../view/login.html');
?>