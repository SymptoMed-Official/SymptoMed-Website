<div class="card">
	<div class="card-header">
		<h5 class="card-title"><?= $current_module['judul_module'] ?></h5>
	</div>
	<div class="card-body">
		<?php
		if (!empty($messageDelete)) {
			show_alert($messageDelete);
		}
		if (!empty($message)) {
			show_message($message);
		}  ?>
		<a href="<?= $config->baseURL ?>edukasi/add" class="btn btn-success btn-xs"><i class="fas fa-plus pe-1"></i> Tambah Data</a>
		<hr />
		<table class="table table-striped table-bordered table-hover" id="artikel-table">
			<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Topik</th>
					<th>Tipe</th>
					<th>Penulis</th>
					<th>Tanggal</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				helper('html');
				$no = 1;
				foreach ($artikel as $val) {
					if (!$val['type']) {
						$type = 'Artikel';
					} else {
						$type = 'SymptomPedia';
					}
					echo '<tr>
					<td>' . $no++ . '</td>
					<td>' . $val['title'] . '</td>
					<td>' . $val['topic'] . '</td>
					<td>' . $type . '</td>
					<td>' . $val['writer'] . '</td>
					<td>' . format_date($val['date']) . '</td>
					<td>' . btn_action([
						'edit' => ['url' => $config->baseURL . 'edukasi/edit?id=' . $val['id']], 'delete' => [
							'url' => '', 'id' =>  $val['id'], 'delete-title' => 'Hapus data artikel: <strong>' . $val['title'] . '</strong> ?'
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
						[5, 'desc']
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