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
    <!-- Kode untuk ada button diatas garis/ tag HR -->
    <a href="<?= $config->baseURL ?>artikel/add" class="btn btn-success btn-xs"><i class="fas fa-plus pe-1"></i> Tambah Data</a>
    <hr />
    <!-- Tambahkan kode Disini -->
    
    <script>
      // Script disini
    </script>
  </div>
</div>