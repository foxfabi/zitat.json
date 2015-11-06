<?php
session_start();
$_SESSION['time'] = time();
$_SESSION['quote'] = '';
// $id = filter_input(INPUT_GET, 'id');
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
if ($id) {
  $_SESSION['index'] = sprintf('%d', $id);
}
if (!isset($_SESSION['index'])) {
  $_SESSION['index'] = 0; // store last quote id in the session 
}
?>