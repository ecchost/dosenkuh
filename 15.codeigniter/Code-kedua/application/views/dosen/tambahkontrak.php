
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4> Form Tambah Data Kontrak Perkuliahan</h4>
                </div>
                <div class="card-body">
                <?php if (validation_errors()): ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
                <?php endif ?>
				
				<?php echo form_open_multipart('dosenkuh/tambahnyakontrak'); ?>

					<div class="form-group">
					<label for="tingkat">Tingkat</label>
                    <select class="form-control" id="tingkat" name="tingkat">                    
                        <?php foreach ($tingkat as $key ) : ?>
                            <option value="<?= $key ?>" selected><?= $key ?> </option>
                        <?php endforeach; ?>
                    </select>
					</div>
					<div class="form-group">
					<label for="prodi">Prodi</label>
                    <select class="form-control" id="prodi" name="prodi">                    
                        <?php foreach ($prodi as $key ) : ?>
                            <option value="<?= $key ?>" selected><?= $key ?> </option>
                        <?php endforeach; ?>
                    </select>
                    </div>
					<div class="form-group">
                        <label for="matakuliah">File with name : Matakuliah Kontrak</label>
                        <input type="file" class="form-control-file" id="matakuliah" name="matakuliah">
					</div><br>
					<a href="<?= base_url();?>dosenkuh/kontrak" class="btn btn-primary">Kembali</a>
                    <button type="submit" name="submit" class="btn btn-primary float-right" > Submit </button>
					
					<?php form_close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>    
