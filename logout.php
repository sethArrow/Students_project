<?php

session_start();

// Finally, destroy the session.
session_destroy();
header('location:oridcms_panellogin.php');
unset($_SESSION['admin']);

?> 