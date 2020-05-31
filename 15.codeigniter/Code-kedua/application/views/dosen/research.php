
<div class="container">
<?php if($this->session->flashdata('flash-data')):?>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Research <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
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
             <input type="text" class="form-control" placeholder="Cari Research" name="keyword">
                <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
    </div>
        </form>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-100">
        <h2>Daftar Research</h2><br>

        <?php if(empty($tb_research)):?>
        <div class="alert alert-danger" role="alert">
            Research tidak ditemukan
        </div>
        <?php endif; ?>
        <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>				
				<th>CODE_DOSEN</th>
				<th>LEVEL RESEARCH</th>
				<th>Action</th>
            </tr>
        </thead>
            <tbody>

        <?php foreach($tb_research as $dosen):?>
            <tr>
				<td><?=$dosen['ID_RES'];?></td>
                <td><?=$dosen['CODE_DOSEN'];?></td>
				<td><?=$dosen['LEVEL_RESEARCH'];?></td>
                <td> <a href="<?= base_url();?>mahasiswa/hapus/<?= $dosen['ID_RES'];?>" 
                class="badge badge-danger float-right" 
                onclick="return confirm ('Yakin Data ini akan dihapus');"> Hapus</a>
                <a href="<?= base_url();?>mahasiswa/edit/<?= $dosen['ID_RES'];?>" 
                class="badge badge-success float-right"> Edit</a>
                <a href="<?= base_url();?>mahasiswa/detail/<?= $dosen['ID_RES'];?>" 
                class="badge badge-primary float-right"> Detail</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</div>
</div>
        