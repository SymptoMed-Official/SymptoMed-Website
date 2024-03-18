<?php helper('html') ?>
<div class="card-body dashboard">
	<?php
	if ($message['status'] == 'error') {
		show_message($message);
	}
	?>
	<div class="row">
		<!-- Total Media Edukasi -->
		<div class="col-lg-3 col-sm-6 col-xs-12 mb-4">
			<div class="card text-bg-primary shadow">
				<div class="card-body card-stats">
					<div class="description">
						<h5 class="card-title h4">
							<?php
							$curl = curl_init();
							curl_setopt_array($curl, [
								CURLOPT_URL => 'https://symptomed-401211.et.r.appspot.com/article?type=all',
								CURLOPT_RETURNTRANSFER => true,
								CURLOPT_ENCODING => '',
								CURLOPT_MAXREDIRS => 10,
								CURLOPT_TIMEOUT => 0,
								CURLOPT_FOLLOWLOCATION => true,
								CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
								CURLOPT_CUSTOMREQUEST => 'GET',
							]);
							$response = curl_exec($curl);
							curl_close($curl);
							$data = json_decode($response, true);
							$data = $data['message'];
							$data = explode(' ', $data);
							echo $data[0];
							?>


						</h5>
						<p class="card-text">Total Media Edukasi</p>

					</div>
					<div class="icon bg-warning-light">
						<i class="fas fa-clipboard-list"></i>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-sm-6 col-xs-12 mb-4">
			<div class="card text-bg-primary shadow">
				<div class="card-body card-stats">
					<div class="description">
						<h5 class="card-title h4"><?= !empty($total_item_terjual['jml']) ? format_number($total_item_terjual['jml']) : 0 ?></h5>
						<p class="card-text">Total Item Terjual</p>

					</div>
					<div class="icon bg-warning-light">
						<!-- <i class="fas fa-clipboard-list"></i> -->
						<i class="material-icons">local_shipping</i>
					</div>
				</div>
				<div class="card-footer">
					<div class="card-footer-left">
						<div class="icon me-2">
							<?php
							if (!empty($total_item_terjual['growth'])) {
								$class = $total_item_terjual['growth'] > 0 ? 'fa-arrow-trend-up' : 'fa-arrow-trend-down';
								echo '<i class="fas ' . $class . '"></i>';
							} else {
								$total_item_terjual = [];
								$total_item_terjual['growth'] = 0;
							}
							?>
						</div>
						<p><?= $total_item_terjual['growth'] ? round($total_item_terjual['growth']) . '%' : '-' ?></p>
					</div>
					<div class="card-footer-right">
						<p><?= !empty($list_tahun) ? max($list_tahun) : '' ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12 mb-4">
			<div class="card text-white bg-success shadow">
				<div class="card-body card-stats">
					<div class="description">
						<h5 class="card-title"><?= !empty($total_jumlah_transaksi['jml']) ? format_number($total_jumlah_transaksi['jml']) : 0 ?></h5>
						<p class="card-text">Total Transaksi</p>
					</div>
					<div class="icon">
						<!-- <i class="fas fa-shopping-cart"></i>-->
						<i class="material-icons">local_mall</i>
					</div>
				</div>
				<div class="card-footer">
					<div class="card-footer-left">
						<div class="icon me-2">
							<?php

							if (!empty($total_jumlah_transaksi['growth'])) {
								$class = $total_jumlah_transaksi['growth'] > 0 ? 'fa-arrow-trend-up' : 'fa-arrow-trend-down';
								echo '<i class="fas ' . $class . '"></i>';
							} else {
								$total_jumlah_transaksi = [];
								$total_jumlah_transaksi['growth'] = 0;
							}
							?>
						</div>
						<p><?= $total_jumlah_transaksi['growth'] ? round($total_jumlah_transaksi['growth']) . '%' : '-' ?></p>
					</div>
					<div class="card-footer-right">
						<p><?= !empty($list_tahun) ? max($list_tahun) : '' ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12 mb-4">
			<div class="card text-white bg-warning shadow">
				<div class="card-body card-stats">
					<div class="description">
						<h5 class="card-title"><?= !empty($total_nilai_penjualan['jml']) ? format_number($total_nilai_penjualan['jml']) : 0 ?></h5>
						<p class="card-text">Total Income</p>
					</div>
					<div class="icon">
						<!-- <i class="fas fa-money-bill-wave"></i> -->
						<i class="material-icons">payments</i>
					</div>
				</div>
				<div class="card-footer">
					<div class="card-footer-left">
						<div class="icon me-2">
							<?php
							if (!empty($total_nilai_penjualan['growth'])) {
								$class = $total_nilai_penjualan['growth'] > 0 ? 'fa-arrow-trend-up' : 'fa-arrow-trend-down';
								echo '<i class="fas ' . $class . '"></i>';
							} else {
								$total_nilai_penjualan = [];
								$total_nilai_penjualan['growth'] = 0;
							}
							?>
						</div>
						<p><?= $total_nilai_penjualan['growth'] ? round($total_nilai_penjualan['growth']) . '%' : '-' ?></p>
					</div>
					<div class="card-footer-right">
						<p><?= !empty($list_tahun) ? max($list_tahun) : '' ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12 mb-4">
			<div class="card text-white bg-danger shadow">
				<div class="card-body card-stats">
					<div class="description">
						<h5 class="card-title"><?= !empty($total_pelanggan_aktif['jml']) ? format_number($total_pelanggan_aktif['jml']) : 0 ?></h5>
						<p class="card-text">Total Pelanggan Aktif</p>
					</div>
					<div class="icon">
						<!-- <i class="fas fa-money-bill-wave"></i> -->
						<i class="material-icons">person</i>
					</div>
				</div>
				<div class="card-footer">
					<div class="card-footer-left">
						<div class="icon me-2">
							<?php
							if (!empty($total_pelanggan_aktif['growth'])) {
								$class = $total_pelanggan_aktif['growth'] > 0 ? 'fa-arrow-trend-up' : 'fa-arrow-trend-down';
								echo '<i class="fas ' . $class . '"></i>';
							} else {
								$total_pelanggan_aktif = [];
								$total_pelanggan_aktif['growth'] = 0;
							}
							?>
						</div>
						<p><?= $total_pelanggan_aktif['growth'] ? round($total_pelanggan_aktif['growth']) . '%' : '-' ?></p>
					</div>
					<div class="card-footer-right">
						<p><?= !empty($list_tahun) ? max($list_tahun) : '' ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-12 col-lg-12 col-xl-8 mb-4">
			<div class="card">
				<div class="card-header">
					<div class="card-header-start">
						<h6 class="card-title">Penjualan Perbulan</h6>
					</div>
				</div>
				<div class="card-body">
					<div style="overflow: auto">
						<canvas id="bar-container" style="min-width:500px;margin:auto;width:100%"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-12 col-lg-12 col-xl-4 mb-4">
			<div class="card" style="height:100%">
				<div class="card-header">
					<div class="card-header-start">
						<h5 class="card-title">Penjualan Petahun</h5>
					</div>
				</div>
				<div class="card-body" style="display:flex">
					<canvas id="chart-total-penjualan" style="margin:auto;max-width:350px;width:100%"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
$data_penjualan = [];
$data_total_penjualan = [];
$label_kategori = [];
$jumlah_item_kategori = [];
$jumlah = [];
$nama = [];

if (!empty($penjualan)) {
	foreach ($penjualan as $tahun => $arr) {
		foreach ($arr as $val) {
			$data_penjualan[$tahun][] = $val['total'];
		}
	}

	foreach ($total_penjualan as $tahun => $arr) {
		foreach ($arr as $val) {
			$data_total_penjualan[$tahun] = $val['total'];
		}
	}

	foreach ($item_terjual as $val) {
		$jumlah[] = $val['jml'];
		$nama[] = $val['nama_barang'];
	}

	foreach ($kategori_terjual as $val) {
		$label_kategori[] = $val['nama_kategori'];
		$jumlah_item_kategori[] = $val['jml'];
	}
}
?>

<script type="text/javascript">
	let data_penjualan = <?= json_encode($data_penjualan) ?>;
	let total_penjualan = <?= json_encode($data_total_penjualan) ?>;
	let item_terjual = <?= json_encode($jumlah) ?>;
	let item_terjual_label = <?= json_encode($nama) ?>;


	function dynamicColors() {
		var r = Math.floor(Math.random() * 255);
		var g = Math.floor(Math.random() * 255);
		var b = Math.floor(Math.random() * 255);
		return "rgba(" + r + "," + g + "," + b + ", 0.8)";
	}

	let label_kategori = '<?= json_encode($label_kategori) ?>';
	let jumlah_item_kategori = '<?= json_encode($jumlah_item_kategori) ?>';
</script>