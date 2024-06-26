<div class="card">
	<div class="card-header">
		<h5 class="card-title"><?= $current_module['judul_module'] ?></h5>
	</div>
	<div class="card-body">
		<?php
		if (!empty($message)) {
			show_alert($message);
		} ?>
		<a href="<?= $config->baseURL ?>artikel/add" class="btn btn-success btn-xs"><i class="fas fa-plus pe-1"></i> Tambah Data</a>
		<hr />
		<table class="table table-striped table-bordered table-hover nowrap" id="artikel-table">
			<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Topik</th>
					<th>Penulis</th>
					<th>Tanggal</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				helper('html');
				$no = 1;

				if (!$artikel_kategori)
					$artikel_kategori = [];

				if (!$artikel_author)
					$artikel_author = [];

				foreach ($artikel as $val) {
					$kategori = key_exists($val['id_artikel'], $artikel_kategori) ? join(', ', $artikel_kategori[$val['id_artikel']]) : '';
					$author = key_exists($val['id_artikel'], $artikel_author) ? join(', ', $artikel_author[$val['id_artikel']]) : '';
					echo '<tr>
					<td>' . $no++ . '</td>
					<td>' . $val['judul_artikel'] . '</td>
					<td>' . $kategori . '</td>
					<td>' . $author . '</td>
					<td>' . $val['tgl_terbit'] . '</td>
					<td>' . btn_action([
						'edit' => ['url' => $config->baseURL . 'artikel/edit?id=' . $val['id_artikel']], 'delete' => [
							'url' => '', 'id' =>  $val['id_artikel'], 'delete-title' => 'Hapus data artikel: <strong>' . $val['judul_artikel'] . '</strong> ?'
						]
					]) .
						'</td>
			</tr>';
				}
				?>
			</tbody>
		</table>
		<script>
			$(document).ready(function() {
				$('#artikel-table').DataTable({
					"columnDefs": [{
						"searchable": false,
						"orderable": false,
						"targets": 0
					}],
					"order": [
						[4, 'desc']
					]
				}).on('order.dt search.dt', function() {
					let i = 1;
					$('#artikel-table').DataTable().rows({
						search: 'applied'
					}).nodes().each(function(cell, index) {
						cell.getElementsByTagName('td')[0].innerHTML = i++;
					});
				}).draw();
			});
		</script>


	</div>
</div>