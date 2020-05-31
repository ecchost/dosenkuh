<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h4> Edit Data Dosen</h4>
                </div>
                <div class="card-body">
                <?php if (validation_errors()): ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
                <?php endif ?>
                <form action="<?php base_url().'dosenkuh/edit'; ?>" method="post">
                    <input type="hidden" name="id" value="<?= $tb_dosen['CODE_DOSEN'];?>">

                    <div class="form-group">
                        <label for="NIDN">NIDN</label>
                        <input type="text" class="form-control" id="NIDN" name="NIDN" 
                        value="<?= $tb_dosen['NIDN'];?>">
                    </div>
                    <div class="form-group">
                        <label for="NIP">NIP</label>
                        <input type="text" class="form-control" id="NIP" name="NIP"
                        value="<?= $tb_dosen['NIP'];?>">
                    </div>
                    <div class="form-group">
                        <label for="CODE_DOSEN">CODE DOSEN</label>
                        <input type="CODE_DOSEN" class="form-control" id="CODE_DOSEN" name="CODE_DOSEN"
                        value="<?= $tb_dosen['CODE_DOSEN'];?>">
					</div>
					<div class="form-group">
                        <label for="NAMA_DOSEN">NAMA DOSEN</label>
                        <input type="NAMA_DOSEN" class="form-control" id="NAMA_DOSEN" name="NAMA_DOSEN"
                        value="<?= $tb_dosen['NAMA_DOSEN'];?>">
                    </div>
                    <div class="form-group">
                    <label for="STATUS_DOSEN">STATUS DOSEN</label>
                    <select class="form-control" id="STATUS_DOSEN" name="STATUS_DOSEN">
                        <?php foreach ($STATUS_DOSEN as $key ): ?>
                            <?php if($key == $tb_dosen['STATUS_DOSEN']) : ?>
                                <option value="<?= $key ?>"selected><?= $key ?></option>
                            <?php else :?>
                                <option value="<?= $key ?>"><?= $key ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
					</div>
					<div class="form-group">
                    <label for="BIDANG_DOSEN">BIDANG DOSEN</label>
                    <select class="form-control" id="BIDANG_DOSEN" name="BIDANG_DOSEN">
                        <?php foreach ($BIDANG_DOSEN as $key ): ?>
                            <?php if($key == $tb_dosen['BIDANG_DOSEN']) : ?>
                                <option value="<?= $key ?>"selected><?= $key ?></option>
                            <?php else :?>
                                <option value="<?= $key ?>"><?= $key ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
					</div>
					<div class="form-group">
                        <label for="KUOTA_NGAJAR">KUOTA NGAJAR</label>
                        <input type="KUOTA_NGAJAR" class="form-control" id="KUOTA_NGAJAR" name="KUOTA_NGAJAR"
                        value="<?= $tb_dosen['KUOTA_NGAJAR'];?>">
					</div>
					<div class="form-group">
                        <label for="JAM_NGAJAR">JAM NGAJAR</label>
                        <input type="JAM_NGAJAR" class="form-control" id="JAM_NGAJAR" name="JAM_NGAJAR"
                        value="<?= $tb_dosen['JAM_NGAJAR'];?>">
					</div>
					<div class="form-group">
                        <label for="SKS_DOSEN">SKS DOSEN</label>
                        <input type="SKS_DOSEN" class="form-control" id="SKS_DOSEN" name="SKS_DOSEN"
                        value="<?= $tb_dosen['SKS_DOSEN'];?>">
					</div>
					<div class="form-group">
                        <label for="DISTRIBUSI">DISTRIBUSI</label>
                        <input type="DISTRIBUSI" class="form-control" id="DISTRIBUSI" name="DISTRIBUSI"
                        value="<?= $tb_dosen['DISTRIBUSI'];?>">
					</div>
                    <button type="submit" name="edit" class="btn btn-primary float-right" > Edit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
