
<div class="container">
<?php if($this->session->flashdata('flash-data')):?>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data SAP RPS <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif; ?>
    <div class="row mt-2">
        <div class="col-md-10">
            <a href="<?= base_url();?>dosenkuh/tambahsaprps"class="btn btn-primary"> Tambah Data</a>
            </div>
        </div>
<br>
<div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
             <input type="text" class="form-control" placeholder="Cari RPS SAP" name="keyword">
                <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
    </div>
        </form>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-100">
        <h2>Daftar SAP RPS</h2><br>

        <?php if(empty($tb_saprps)):?>
        <div class="alert alert-danger" role="alert">
            SAP RPS tidak ditemukan
        </div>
        <?php endif; ?>
        <table class="table table-striped">
        <thead>
            <tr>
                <th>CODE</th>				
				<th>MATAKULIAH SAP RPS</th>
				<th>SEMESTER</th>
				<th>YEAR</th>
				<th>TGL PENYUSUNAN</th>
				<th>Action</th>
            </tr>
        </thead>
            <tbody>

        <?php foreach($tb_saprps as $dosen):?>
            <tr>
				<td><?=$dosen['code_saprps'];?></td>
				<td><?=$dosen['matakuliah_saprps'];?></td>
				<td><?=$dosen['semester_saprps'];?></td>
				<td><?=$dosen['year_saprps'];?></td>
				<td><?=$dosen['tgl_penyusunan'];?></td>
                <td> <a href="<?= base_url();?>mahasiswa/hapus/<?= $dosen['code_saprps'];?>" 
                class="badge badge-danger float-right" 
                onclick="return confirm ('Yakin Data ini akan dihapus');"> Hapus</a>
                <a href="<?= base_url();?>mahasiswa/edit/<?= $dosen['code_saprps'];?>" 
                class="badge badge-success float-right"> Edit</a>
                <a href="<?= base_url();?>mahasiswa/detail/<?= $dosen['code_saprps'];?>" 
                class="badge badge-primary float-right"> Detail</a>

                <a href="<?= base_url();?>dosenkuh/download/<?= $dosen['code_saprps'];?>" 
                class="badge badge-warning float-right"> Download</a>
                </td>

            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</div>
</div>
        