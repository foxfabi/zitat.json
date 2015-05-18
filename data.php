<?php
require_once("includes/database.inc.php");
// Let the browser know that we send a specific content type.
header('Content-Type: application/json; charset=utf-8');
print json_encode($_SESSION['quote']);
session_write_close(); //now close the session again! 
?>
