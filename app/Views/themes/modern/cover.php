<div class="card">
  <div class="card-header">
    <h5 class="card-title"><?= $current_module['judul_module'] ?></h5>
  </div>
  <div class="card-body">
    <?php
    // Default untuk alert
    if (!empty($message)) {
      show_message($message);
    } ?>
    <!-- Kode untuk ada button diatas garis/ tag HR -->

    <!-- Tambahkan kode Disini -->
    <p><?php echo "version: " . $api['version'] ?></p>
    <?php echo '<img src="' . $api['url'] . '" width="auto" height="200">'; ?><br><br>

    <form action="post" method="post" enctype="multipart/form-data">
      <input type="file" id="cover" name="cover" accept="image/png, image/jpeg">
      <button type="submit" class="btn btn-primary"></button>
    </form>

    <script>
      // Script disini
    </script>
  </div>
</div>