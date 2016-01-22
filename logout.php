<?php

// Include database connection
require_once('include/global.inc.php');
// Include functions
require_once('include/functions.inc.php');

session_destroy();
header('location: index.php');

?>