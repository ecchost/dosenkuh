
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h4> Form Tambah Data Dosen</h4>
                </div>
                <div class="card-body">
                <?php if (validation_errors()): ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
                <?php endif ?>
                <form action="<?php echo base_url().'dosenkuh/tambah'; ?>" method="post">

                    <div class="form-group">
                        <label for="NIDN">NIDN</label>
                        <input type="text" class="form-control" id="NIDN" name="NIDN" placeholder="example : 10986782">
                    </div>
                    <div class="form-group">
                        <label for="NIP">NIP</label>
                        <input type="text" class="form-control" id="NIP" name="NIP" placeholder="example : 2412748756">
                    </div>
                    <div class="form-group">
                        <label for="CODE_DOSEN">CODE DOSEN</label>
                        <input type="text" class="form-control" id="CODE_DOSEN" name="CODE_DOSEN" placeholder="example : RBA/TBA/WQL">
					</div>
					<div class="form-group">
                        <label for="NAMA_DOSEN">NAMA DOSEN</label>
                        <input type="text" class="form-control" id="NAMA_DOSEN" name="NAMA_DOSEN" placeholder="example : Rabiatul Dawaliyah, S.Pd M.KOM">
					</div>
					<div class="form-group">
					<label for="STATUS_DOSEN">STATUS DOSEN</label>
                    <select class="form-control" id="STATUS_DOSEN" name="STATUS_DOSEN">                    
                        <?php foreach ($STATUS_DOSEN as $key ) : ?>
                            <option value="<?= $key ?>" selected><?= $key ?> </option>
                        <?php endforeach; ?>
                    </select>
                    </div>
					<div class="form-group">
					<label for="BIDANG_DOSEN">BIDANG DOSEN</label>
                    <select class="form-control" id="BIDANG_DOSEN" name="BIDANG_DOSEN">                    
                        <?php foreach ($BIDANG_DOSEN as $key ) : ?>
                            <option value="<?= $key ?>" selected><?= $key ?> </option>
                        <?php endforeach; ?>
                    </select>
                    </div>
					<div class="form-group">
                        <label for="KUOTA_NGAJAR">KUOTA NGAJAR</label>
                        <input type="text" class="form-control" id="KUOTA_NGAJAR" name="KUOTA_NGAJAR" placeholder="example : 10">
					</div>
					<div class="form-group">
                        <label for="JAM_NGAJAR">JAM NGAJAR</label>
                        <input type="text" class="form-control" id="JAM_NGAJAR" name="JAM_NGAJAR" placeholder="example : 10">
					</div>
					<div class="form-group">
                        <label for="SKS_DOSEN">SKS</label>
                        <input type="text" class="form-control" id="SKS_DOSEN" name="SKS_DOSEN" placeholder="example : 18">
					</div>
					<div class="form-group">
                        <label for="DISTRIBUSI">DISTRIBUSI</label>
                        <input type="text" class="form-control" id="DISTRIBUSI" name="DISTRIBUSI" placeholder="example : 0">
					</div>
        
                    <button type="submit" name="submit" class="btn btn-primary float-right" > Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
