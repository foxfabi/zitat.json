<?php
session_start();
$_SESSION['time'] = time();
$_SESSION['quote'] = '';
if (!isset($_SESSION['index'])) {
  $_SESSION['index'] = 0; // store last quote id in the session 
}
?>