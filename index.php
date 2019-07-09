<!doctype html>
<html lang="en">
<?php error_reporting(E_ALL);
ini_set('display_errors', 1); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Campbell Vertesi</title>

    <base href="http://<?php echo $_SERVER['HTTP_HOST'] ?><?php echo $_SERVER['REQUEST_URI'] ?>">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <?php

    function humanReadable($fileName)
    {
      return str_replace('-', ' ', $fileName);
    }

    function buildTree($start, $base = '')
    {
      if (!$base) {
        $base = $start;
      }

      $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($start));

      foreach ($it as $item) {
        $basename = basename($item);
        if ($basename === '.' || $basename === '..') {
          continue;
        }

        $href = trim(str_replace($start, '', $item), '/');
        $sanitized = basename($href);
        $query = http_build_query(['p' => 'texts/' . $href]);
        printf(
          '<li><a href="?%s">%s</a></li>',
          $query,
          humanReadable($sanitized)
        );
      }
    }

    ?>
</head>
<body>


<?php if (!isset($_GET['p']) || !$_GET['p'] || !file_exists($_GET['p'])) : ?>
    <h1>Choose a presentation</h1>
    <ul>
        <?php buildTree(__DIR__ . '/texts') ?>
    </ul>
<?php else :
  require 'index.html';
endif; ?>

</body>
</html>
