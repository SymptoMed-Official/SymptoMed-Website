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
    <a href="<?= $config->baseURL ?>validasi/add" class="btn btn-success btn-xs"><i class="fas fa-plus pe-1"></i> Tambah Data</a>
		<hr />
		<table class="table table-striped table-bordered table-hover" id="artikel-table">
			<thead>
				<tr>
          <th>Nama Penyakit</th>
          <th>Definisi</th>
					<th>Gejala</th>
					<th>Penyebab</th>
					<th>Faktor Resiko</th>
					<th>Komplikasi</th>
					<th>Tata Laksana</th>
					<th>Pencegahan</th>
					<th>Kapan Harus ke Dokter</th>
					<th>Referensi</th>
				</tr>
			</thead>
			<tbody>
    <!-- Tambahkan kode Disini -->
    <script>
    </script>
  </div>
</div>