<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Dosen
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $tb_dosen['NAMA_DOSEN'];?></h5><br>
                <p class="card-text">
                    <label for=""><b> NIDN  : </b></label><br>
                    <?= $tb_dosen['NIDN']; ?></p>
                <p class="card-text">
                    <label for=""><b> NIP  : </b></label><br>
                    <?= $tb_dosen['NIP']; ?></p>
                <p class="card-text">
                    <label for=""><b> CODE DOSEN  : </b></label><br>
					<?= $tb_dosen['CODE_DOSEN']; ?></p>
				<p class="card-text">
					<label for=""><b> Status  : </b></label><br>
					<?= $tb_dosen['STATUS_DOSEN']; ?></p>
					<p class="card-text">
                    <label for=""><b> BIDANG  : </b></label><br>
					<?= $tb_dosen['BIDANG_DOSEN']; ?></p>
					<p class="card-text">
                    <label for=""><b> KUOTA NGAJAR  : </b></label><br>
					<?= $tb_dosen['KUOTA_NGAJAR']; ?></p>
					<p class="card-text">
                    <label for=""><b> JAM NGAJAR  : </b></label><br>
					<?= $tb_dosen['JAM_NGAJAR']; ?></p>
					<p class="card-text">
                    <label for=""><b> SKS DOSEN  : </b></label><br>
					<?= $tb_dosen['SKS_DOSEN']; ?></p>
					<p class="card-text">
                    <label for=""><b> DISTRIBUSI  : </b></label><br>
                    <?= $tb_dosen['DISTRIBUSI']; ?></p>
                <a href="<?= base_url();?>dosenkuh/" class="btn btn-primary">kembali</a>
            </div>
            </div>
        </div>
    </div>
</div>

