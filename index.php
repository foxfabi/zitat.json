<?php
require_once("includes/database.inc.php");
$quote = $_SESSION['quote'];
?>
<!doctype html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>fabfol.io - Fokus auf Lernen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="shortcut icon" href="favicon.ico"> -->
  <meta name="description" content="fabfol.io - Fokus auf Lernen">
  <meta name="author" content="Fabian Dennler">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="wrapper">
    <article id="placeholder"><p>
      <?php printf("<strong>%s</strong><br/><small>%s</small>", $quote->quote, $quote->author); ?>
    </p></article>
  </div>
  <footer>
    <a href="https://fabforge.ch/" target="_blank">fabforge</a> &copy; <?php print date("Y"); ?>
  </footer>
</body>
</html>
