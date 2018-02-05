<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Babysitter's Club Newsletter</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
  <?php
    include 'inc/header.php';
    ?>

    <main>
    <?php
    if (isset($_GET['section'])) {
      $section = $_GET['section'];
      if (file_exists("inc/sections/" . $section . "/section-template.php")) {
        if (isset($_GET['article'])) {
          $article = $_GET['article'];
          if (file_exists("inc/articles/" . $article . "/article-template.php")) {
            include 'inc/articles/' . $article . '/article-template.php';
          } else {
            echo "<p>Whoops! Not Here Anymore!</p>";
          }
        } else {
          include 'inc/sections/' . $section . '/section-template.php';
        }
      } else {
        echo "<p>Whoops! Not Here Anymore!</p>";
      }
    } 
    ?>










  </body>
</html>
