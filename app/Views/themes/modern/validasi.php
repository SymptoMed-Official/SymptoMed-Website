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
        <?php
        helper('html');
        $no = 1;

        foreach ($penyakit as $val) {
          echo '<tr>
          <td>' .$val['Nama_Penyakit'] . '</td>
          <td>' .$val['Definisi'] . '</td>
          <td>' .$val['Gejala'] . '</td>
          <td>' .$val['Penyebab'] . '</td>
          <td>' .$val['Faktor_Resiko'] . '</td>
          <td>' .$val['Komplikasi'] . '</td>
          <td>' .$val['Tata_Laksana'] . '</td>
          <td>' .$val['Pencegahan'] . '</td>
          <td>' .$val['Kapan_Harus_ke_Dokter'] . '</td>
          <td>' .$val['Referensi'] . '</td>
          <td>' . btn_action([
            'edit' => ['url' => $config->baseURL . 'validasi/edit?id=' . $val['id_penyakit']], 'delete' =>[
              'url' => '', 'id' => $val['id_penyakit'], 'delete-title' => 'Hapus data penyakit: <strong>' .$val['Nama_Penyakit'] . '</strong> ?'
            ]
          ]) .
              '</td>';
          
        }

        ?>
    <!-- Tambahkan kode Disini -->
    <script>
    </script>
  </div>
</div>