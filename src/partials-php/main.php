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
        <img src="<?php echo $img ?>" title="<?php echo $name ?>">
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
