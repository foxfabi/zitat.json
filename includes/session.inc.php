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

// Languages we support
$available_languages = array("de");
$language = "de";
if (isset($_GET['lang'])) {
  $lang = sprintf('%2s', $_GET['lang']);
  if (in_array($lang, $available_languages)) {
    $language = $lang;
  }
} else if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
  $user_langs = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
  foreach($user_langs as $key => $lang) {
    $lang = substr($lang, 0, 2);
    if (in_array($lang, $available_languages)) {
      $language = $lang;
      break;
    }
  }
}
$_SESSION['language'] = $language; // store language in the session
?>