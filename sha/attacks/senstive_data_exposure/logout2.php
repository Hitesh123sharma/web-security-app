<?php
session_start();

session_destroy();


header('Location:plaintext_db.php');
?>