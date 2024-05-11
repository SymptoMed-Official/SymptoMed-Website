<?php
//STATIS DATA
$ref_kategori = [];
$ref_author = [];
?>
<div class="card">
	<div class="card-header">
		<h5 class="card-title"><?= $title ?></h5>
	</div>
	<div class="card-body">
		<?php
		helper('html');
		if (!empty($message)) {
			show_message($message);
		} ?>

		<form method="post" action="" class="form-container" enctype="multipart/form-data">
			<div class="row mb-3">
				<div class="col-md-9">
					<div class="mb-3">
						<label class="control-label mb-2">Nama Penyakit</label>
						<input class="form-control" type="text" name="title" value="<?= set_value('penyakit', @$penyakit) ?>" placeholder="Nama Penyakit" required />
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Definisi</label>
						<textarea class="form-control tinymce" rows="2" type="text" name="definisi" required><?= set_value('definisi', @$definisi) ?></textarea>
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Gejala</label>
						<textarea class="form-control tinymce" rows="2" type="text" name="gejala"><?= set_value('gejala', @$gejala) ?></textarea>
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Penyebab</label>
						<textarea class="form-control tinymce" rows="2" type="text" name="reference"><?= set_value('penyebab', @$penyebab) ?></textarea>
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Faktor Resiko</label>
						<textarea class="form-control tinymce" rows="2" type="text" name="reference"><?= set_value('resiko', @$resiko) ?></textarea>
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Komplikasi</label>
						<textarea class="form-control tinymce" rows="2" type="text" name="reference"><?= set_value('komplikasi', @$komplikasi) ?></textarea>
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Tata Laksana</label>
						<textarea class="form-control tinymce" rows="2" type="text" name="reference"><?= set_value('laksana', @$laksana) ?></textarea>
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Pencegahan</label>
						<textarea class="form-control tinymce" rows="2" type="text" name="reference"><?= set_value('pencegahan', @$pencegahan) ?></textarea>
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Kapan Harus ke Dokter?</label>
						<textarea class="form-control tinymce" rows="2" type="text" name="reference"><?= set_value('keDokter', @$keDokter) ?></textarea>
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Referensi</label>
						<textarea class="form-control tinymce" rows="2" type="text" name="reference"><?= set_value('referensi', @$refer) ?></textarea>
					</div>
				</div>
				<div class="col-md-3">
					<div class="mb-3">
						<label class="control-label mb-2">Writer</label>
						<div>
							<?php

							if (!$ref_author) {
								echo '<div class="alert alert-danger">Data author masih kosong, silakan diisi terlebih dahulu</div>';
							} else {
								echo options(
									[
										'class' => 'form-control select2', 'name' => 'id_author[]', 'multiple' => 'multiple', 'required' => 'required'
									],
									$ref_author,
									set_value('id_author', @$id_author)
								);
							} ?>
						</div>
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Reviewer</label>
						<div>
							<?php

							if (!$ref_author) {
								echo '<div class="alert alert-danger">Data author masih kosong, silakan diisi terlebih dahulu</div>';
							} else {
								echo options(
									[
										'class' => 'form-control select2', 'name' => 'id_author[]', 'multiple' => 'multiple', 'required' => 'required'
									],
									$ref_author,
									set_value('id_author', @$id_author)
								);
							} ?>
						</div>
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Type</label>
						<!-- pastikan value untuk API -->
						<?php
						if (!empty($type)) {
							if ($type) { //true => artikel
								$type = 'artikel';
							} else {
								$type = 'symptomedia';
							}
						}
						?>
						<div>
							<select class="form-control form-select" name="type" required>
								<option class="form-control" name="type" value="artikel">Artikel</option>
								<option class="form-control" name="type" value="symptomedia">SymptomPedia</option>
							</select>
						</div>
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Tgl. Terbit</label>
						<?php
						if (!empty($date)) {
							if ($date == '0000-00-00 00:00:00') {
								$date = date('Y-m-d H:i');
							} else {
								$date = date('Y-m-d H:i', strtotime($date));
							}
						}
						?>
						<input class="form-control flatpickr" type="text" name="tgl_terbit" value="<?= set_value('date', @$date) ?>" placeholder="Tgl. Terbit" required />
					</div>
					
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-12">
					<button type="submit" name="submit" id="btn-submit" value="" class="btn btn-primary">Simpan</button>
				
					<input type="hidden" name="tab" value="" />
				</div>
			</div>
		</form>
	</div>
</div>