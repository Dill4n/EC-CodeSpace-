<?php

# add logout button functionality
session_start();
session_unset();
session_destroy();

header('Location: login.php');
exit;
?>