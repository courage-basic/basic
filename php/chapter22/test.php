<?php

// var_dump($_SERVER['REQUEST_METHOD']);
// var_dump($_GET);

$last_name = "";
$first_name = "";

if ($_SERVER['REQUEST_METHOD'] === "GET") {
  $last_name = $_GET["last_name"];
  $first_name = $_GET["first_name"];
}

 ?>

 <!DOCTYPE html>
 <html lang="utf-8">
 <head>
     <meta charset="utf-8">
     <title>Send username</title>
 </head>

 <body>
  <?php echo "苗字 : ".htmlspecialchars($last_name).PHP_EOL; ?>
  <?php echo "名前 : ".htmlspecialchars($first_name).PHP_EOL; ?>
 </body>
 </html>
