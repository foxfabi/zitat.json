<?php
require_once("includes/database.inc.php");
$quote = $_SESSION['quote'];
?>
<!doctype html>
<html lang="<?php print $_SESSION['language']; ?>">
<head>
  <meta charset="UTF-8">
  <title>zitat.json</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="shortcut icon" href="favicon.ico"> -->
  <meta name="description" content="zitat.json">
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
  <script src="js/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
