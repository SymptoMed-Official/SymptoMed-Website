<?php

    $text = $api;
    $image = $text['url'];
    $image = base64_encode(file_get_contents($image));
    ?>

<div class="card">
  <div class="card-header">
    <h5 class="card-title"><?= $current_module['judul_module'] ?></h5>
  </div>
  <div class="card-body">
    <?php
    // Default untuk alert
    if (!empty($message)) {
      show_alert($message);
    } ?>

    <p><?php echo "version: " . $text['version'] ?></p>
    <?php echo '<img src="data:image/png;base64,'.$image.'" width="auto" height="200">';?><br>

    
    <!-- Kode untuk ada button diatas garis/ tag HR -->
    <form action="cover" method="post">
      <input type="file" id="cover" name="cover" accept="image/png, image/jpeg">
      <input type="submit" class="btn btn-primary">
    </form>
    
    <hr />
    <!-- Tambahkan kode Disini -->
    
    <script>
      // Script disini
    </script>
  </div>
</div>