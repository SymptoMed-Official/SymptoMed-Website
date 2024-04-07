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
						<label class="control-label mb-2">Title</label>
						<input class="form-control" type="text" name="title" value="<?= set_value('title', @$title) ?>" placeholder="Judul Media Edukasi" required />
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Slug</label>
						<input class="form-control" type="text" name="slug" value="<?= set_value('slug', @$slug) ?>" placeholder="Permalink untuk media edukasi" required />
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Content</label>
						<textarea class="form-control tinymce" rows="30" type="text" name="konten"><?= set_value('content', @$content) ?></textarea>
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Reference</label>
						<textarea class="form-control tinymce" rows="10" type="text" name="reference"><?= set_value('refer', @$refer) ?></textarea>
					</div>
				</div>
				<div class="col-md-3">
					<div class="mb-3">
						<label class="control-label mb-2">Summary</label>
						<textarea class="form-control overlayscollbar" rows="5" type="text" name="meta_description"><?= set_value('summary', @$summary) ?></textarea>
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Preview</label>
						<textarea class="form-control overlayscollbar" rows="5" type="text" name="excerp"><?= set_value('preview', @$preview) ?></textarea>
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Topic</label>
						<div>
							<?php
							if (!$ref_kategori) {
								echo '<div class="alert alert-danger">Data kategori masih kosong</div>';
							} else {
								echo options(
									[
										'class' => 'form-control select2', 'name' => 'id_kategori[]', 'multiple' => 'multiple', 'required' => 'required'
									],
									$ref_kategori,
									set_value('id_kategori', @$id_kategori)
								);
							} ?>
						</div>
					</div>
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
					<div class="mb-3">
						<label class="control-label mb-2">Image</label>
						<div class="feature-image">

							<input type="hidden" name="feature_image" value="<?= set_value('feature_image', @$feature_image['id_file_picker']) ?>" required />
							<?php
							$display_btn = ' style="display:none"';
							$display_text = '';
							if (!empty($feature_image)) {
								$display_btn = '';
								$display_text = ' style="display:none"';
								$filepicker = new \Config\Filepicker();
								echo '<img class="jwd-img-thumbnail" src="' . $filepicker->uploadURL . $feature_image['nama_file'] . '"/>';
							}
							?>

							<a href="javascript:void(0)" class="btn btn-danger btn-square-xs btn-remove btn-top-right" <?= $display_btn ?>><i class="fas fa-times"></i></a>
							<span class="text" <?= $display_text ?>>Choose Image</span>
						</div>
					</div>
					<div class="mb-3">
						<label class="control-label mb-2">Banner</label>
						<div class="feature-image">

							<input type="hidden" name="feature_image" value="<?= set_value('feature_image', @$feature_image['id_file_picker']) ?>" required />
							<?php
							$display_btn = ' style="display:none"';
							$display_text = '';
							if (!empty($feature_image)) {
								$display_btn = '';
								$display_text = ' style="display:none"';
								$filepicker = new \Config\Filepicker();
								echo '<img class="jwd-img-thumbnail" src="' . $filepicker->uploadURL . $feature_image['nama_file'] . '"/>';
							}
							?>

							<a href="javascript:void(0)" class="btn btn-danger btn-square-xs btn-remove btn-top-right" <?= $display_btn ?>><i class="fas fa-times"></i></a>
							<span class="text" <?= $display_text ?>>Choose Image</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-12">
					<button type="submit" name="submit" id="btn-submit" value="" class="btn btn-primary">Simpan</button>
					<input type="hidden" name="id" value="<?= $id ?>" />
					<input type="hidden" name="tab" value="" />
				</div>
			</div>
		</form>
	</div>
</div>