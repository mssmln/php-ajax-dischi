<!-- Prima Milestone:
Stampare a schermo i dischi musicali solo con l’utilizzo di PHP.
Al caricamento della pagina si dovranno visualizzare tutti i dischi.
Utilizzare:
Html, Sass, PHP nella milestone 1
Html, Sass, PHP, JS, Vue nella milestone 2 (che sarà data domani) -->

<?php
include 'db.php'; // includiamo un file separato sempre php

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <?php
  foreach($dischi as $disco){
    // var_dump($disco);
    $img = $disco['img'];
    $name = $disco['name'];
    $author = $disco['author'];
    $date = $disco['date'];
  ?>
  <div class="">
    <img src="<?php echo $img ?>" alt="<?php echo $name ?>">

  </div>

<?php } ?>


  <script src="js/script.js" charset="utf-8"></script>
</body>
</html>
