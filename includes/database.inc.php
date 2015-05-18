<?php
require_once("session.inc.php");
// Open a connection to the database.
$link = mysqli_connect("localhost", "username", "password", "database");
// Check if the connection was successfull.
if (mysqli_connect_errno()) {
  print -1;
} else {
  // Change character set to utf8.
  if (!mysqli_set_charset($link, "utf8")) {
      print -1;
  }
  
  // If there is a result set, send it to the browser.
  $sql = sprintf('SELECT ID, quote, author FROM citation WHERE ID != %d ORDER BY RAND() LIMIT 1;', $_SESSION['index']);
  if ($result = mysqli_query($link, $sql)) {
    $object = $result->fetch_object();
    // Save object into session, for later use.
    $_SESSION['quote'] = $object;
    // Free result set.
    mysqli_free_result($result);
    // Update views stats.
    mysqli_query($link, "UPDATE citation SET views=views+1 WHERE ID=" . $object->ID);
    // Update last viewed item.
    $_SESSION['index'] =  $object->ID;
  }
  // Close connection.
  mysqli_close($link);
}
?>
