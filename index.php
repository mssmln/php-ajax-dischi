<!-- Prima Milestone:
Stampare a schermo i dischi musicali solo con l’utilizzo di PHP.
Al caricamento della pagina si dovranno visualizzare tutti i dischi.
Utilizzare:
Html, Sass, PHP nella milestone 1
Html, Sass, PHP, JS, Vue nella milestone 2 (che sarà data domani) -->

<?php
include __DIR__ .'/includes/db.php'; // includiamo un file separato sempre php
// var_dump(__DIR__);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>dischi musicali con php</title>
</head>
<body>
  <header>

  </header>


  <main>
    <div class="container">
      <div class="dischi">
        <?php
        foreach($dischi as $disco){
          // var_dump($disco);
          $img = $disco['img'];
          $name = $disco['name'];
          $author = $disco['author'];
          $date = $disco['date'];
        ?>
        <div class="disco margin-top-20">
          <img src="<?php echo $img ?>" alt="<?php $name ?>">
          <div class="info">
            <h2><?php echo $name ?></h2>
            <h3><?php echo $author ?></h3>
            <h4><?php echo $date ?></h4>
          </div>
        </div>
        <?php } ?>
    </div>
    </div>
  </main>


  <script src="js/script.js" charset="utf-8"></script>
</body>
</html>
