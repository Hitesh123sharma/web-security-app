<?php
session_start();
session_destroy();


header('Location:authenticated.php');
?>