
<div class="container">
<?php if($this->session->flashdata('flash-data')):?>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data HomeBase <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
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
             <input type="text" class="form-control" placeholder="Cari Data Homebase" name="keyword">
                <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
    </div>
        </form>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-30">
        <h2>Daftar Homebase</h2>

        <?php if(empty($tb_homebase)):?>
        <div class="alert alert-danger" role="alert">
            Data Dosen tidak ditemukan
        </div>
        <?php endif; ?>
        <table class="table table-striped">
        <thead>
            <tr>
                <th>CODE DOSEN</th>
                <th>HOMEBASE</th>
				<th>HOMEBASE AKREDITASI D3</th>
				<th>Action</th>
            </tr>
        </thead>
            <tbody>

        <?php foreach($tb_homebase as $dosen):?>
            <tr>
                <td><?=$dosen['CODE_DOSEN'];?></td>
				<td><?=$dosen['HOMEBASE'];?></td>
                <td><?=$dosen['HOMEBASE_AKREDD3'];?></td>
                <td> <a href="<?= base_url();?>mahasiswa/hapus/<?= $dosen['CODE_DOSEN'];?>" 
                class="badge badge-danger float-right" 
                onclick="return confirm ('Yakin Data ini akan dihapus');"> Hapus</a>
                <a href="<?= base_url();?>mahasiswa/edit/<?= $dosen['CODE_DOSEN'];?>" 
                class="badge badge-success float-right"> Edit</a>
                <a href="<?= base_url();?>mahasiswa/detail/<?= $dosen['CODE_DOSEN'];?>" 
                class="badge badge-primary float-right"> Detail</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</div>
</div>
        