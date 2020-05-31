
<div class="container">
<?php if($this->session->flashdata('flash-data')):?>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Dosen <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif; ?>
    <div class="row mt-2">
        <div class="col-md-10">
            <a href="<?= base_url();?>dosenkuh/tambah"class="btn btn-primary"> Tambah Data</a>
            </div>
        </div>
<br>
<div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
             <input type="text" class="form-control" placeholder="Cari Data Dosen" name="keyword">
                <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
    </div>
        </form>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-30">
        <h2>Daftar Dosen</h2>

        <?php if(empty($tb_dosen)):?>
        <div class="alert alert-danger" role="alert">
            Data Dosen tidak ditemukan
        </div>
        <?php endif; ?>
        <table class="table table-striped">
        <thead>
            <tr>
                <th>NIDN</th>
                <th>NIP</th>
                <th>CODE</th>
				<th>NAMA DOSEN</th>
				<th>STATUS</th>
				<th>BIDANG</th>				
				<th>KUOTA</th>
				<th>JAM</th>
				<th>Action</th>
            </tr>
        </thead>
            <tbody>

        <?php foreach($tb_dosen as $dosen):?>
            <tr>
                <td><?=$dosen['NIDN'];?></td>
                <td><?=$dosen['NIP'];?></td>
                <td><?=$dosen['CODE_DOSEN'];?></td>
				<td><?=$dosen['NAMA_DOSEN'];?></td>
				<td><?=$dosen['STATUS_DOSEN'];?></td>
				<td><?=$dosen['BIDANG_DOSEN'];?></td>
				<td><?=$dosen['KUOTA_NGAJAR'];?></td>
                <td><?=$dosen['JAM_NGAJAR'];?></td>
                <td> <a href="<?= base_url();?>dosenkuh/hapus/<?= $dosen['CODE_DOSEN'];?>" 
                class="badge badge-danger float-right" 
                onclick="return confirm ('Yakin Data ini akan dihapus');"> Hapus</a>
                <a href="<?= base_url();?>dosenkuh/edit/<?= $dosen['CODE_DOSEN'];?>" 
                class="badge badge-success float-right"> Edit</a>
                <a href="<?= base_url();?>dosenkuh/detail_dosen/<?= $dosen['CODE_DOSEN'];?>" 
                class="badge badge-primary float-right"> Detail</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</div>
</div>
        