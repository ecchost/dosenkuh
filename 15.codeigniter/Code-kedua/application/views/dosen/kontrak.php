

<div class="container">
<?php if($this->session->flashdata('flash-data')):?>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Kontrak Perkuliahan <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif; ?>
    <div class="row mt-2">
        <div class="col-md-10">
            <a href="<?= base_url();?>dosenkuh/tambahkontrak"class="btn btn-primary"> Tambah Data</a>
            </div>
        </div>
<br>
<div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
             <input type="text" class="form-control" placeholder="Cari Kontrak" name="keyword">
                <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
    </div>
        </form>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-100">
        <h2>Daftar Kontrak Perkuliahan</h2><br>

        <?php if(empty($tb_kontrak)):?>
        <div class="alert alert-danger" role="alert">
            Kontrak Perkuliahan tidak ditemukan
        </div>
        <?php endif; ?>
        <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>				
				<th>MATAKULIAH</th>
				<th>PRODI</th>
				<th>TINGKAT</th>
				<th>Action</t h>
            </tr>
        </thead>
            <tbody>

        <?php foreach($tb_kontrak as $dosen):?>
            <tr>
				<td><?=$dosen['id'];?></td>
				<td><?=$dosen['matakuliah'];?></td>
				<td><?=$dosen['prodi'];?></td>
				<td><?=$dosen['tingkat'];?></td>
                <td> <a href="<?= base_url();?>dosenkuh/hapus/<?= $dosen['id'];?>" 
                class="badge badge-danger float-right" 
                onclick="return confirm ('Yakin Data ini akan dihapus');"> Hapus</a>
                <a href="<?= base_url();?>mahasiswa/edit/<?= $dosen['id'];?>" 
                class="badge badge-success float-right"> Edit</a>

                <a href="<?= base_url();?>dosenkuh/downloadkontrak/<?= $dosen['id'];?>" 
                class="badge badge-warning float-right"> Download</a>
                </td>

            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</div>
</div>
        