
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4> Form Tambah Data SAP & RPS</h4>
                </div>
                <div class="card-body">
                <?php if (validation_errors()): ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
                <?php endif ?>
				
				<?php echo form_open_multipart('dosenkuh/tambahnyasaprps'); ?>

                    <div class="form-group">
                        <label for="code_saprps">CODE</label>
                        <input type="text" class="form-control" id="code_saprps" name="code_saprps" placeholder="example : RIF170925435">
					</div>
					<div class="form-group">
                        <label for="tgl_penyusunan">Tanggal Penyusunan</label>
                        <input type="text" class="form-control" id="tgl_penyusunan" name="tgl_penyusunan" placeholder="example : 27/11/2019">
                    </div>
					<div class="form-group">
					<label for="semester_saprps">Semester</label>
                    <select class="form-control" id="semester_saprps" name="semester_saprps">                    
                        <?php foreach ($semester_saprps as $key ) : ?>
                            <option value="<?= $key ?>" selected><?= $key ?> </option>
                        <?php endforeach; ?>
                    </select>
					</div>
					<div class="form-group">
					<label for="year_saprps">Year SAP RPS</label>
                    <select class="form-control" id="year_saprps" name="year_saprps">                    
                        <?php foreach ($year_saprps as $key ) : ?>
                            <option value="<?= $key ?>" selected><?= $key ?> </option>
                        <?php endforeach; ?>
                    </select>
                    </div>
					<div class="form-group">
                        <label for="matakuliah_saprps">File with name : Matakuliah SAPRPS</label>
                        <input type="file" class="form-control-file" id="matakuliah_saprps" name="matakuliah_saprps" placeholder="example : 11/06/2019">
					</div><br>
					<a href="<?= base_url();?>dosenkuh/saprps" class="btn btn-primary">kembali</a>
                    <button type="submit" name="submit" class="btn btn-primary float-right" > Submit </button>
					
					<?php form_close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>    
