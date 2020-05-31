
<div class="container">
<?php if($this->session->flashdata('flash-data')):?>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Export data <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif; ?>
<br>
<center><h4>Export Media File</h4></center><br><br>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-home" aria-selected="true">All table</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profdosen" role="tab" aria-controls="nav-profile" aria-selected="false">Daftar Dosen</a>
		<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-dpa" role="tab" aria-controls="nav-contact" aria-selected="false">DPA</a>
		<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-homebase" role="tab" aria-controls="nav-contact" aria-selected="false">Homebase</a>
		<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-jabatan" role="tab" aria-controls="nav-contact" aria-selected="false">Jabatan</a>
		<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-jadwal" role="tab" aria-controls="nav-contact" aria-selected="false">Jadwal Kuliah</a>
		<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-matakuliah" role="tab" aria-controls="nav-contact" aria-selected="false">Mata Kuliah</a>
		<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-research" role="tab" aria-controls="nav-contact" aria-selected="false">Research</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-home-tab">
				<!-- deck two table inside card carousel -->
				<br>
				<div class="card-deck">
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/excel-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a Excel File (.xls) - tb_dosenkuh</h5></center>
						<center><p class="card-text">Database dosenkuh will lead some table and divide into page as a table of sheet excel file.</p></center>
					</div>
					<div class="card-footer">
				<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyaexcel" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/csv-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a CSV File (.csv) - tb_dosenkuh</h5></center>
					<center><p class="card-text">Database dosenkuh will lead some table and divide into page as a table of csv file.</p></center>
					
					</div>
					<div class="card-footer">
					<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyacsv" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
			</div>
			<!-- batas isi import -->
	</div>
  <div class="tab-pane fade" id="nav-profdosen" role="tabpanel" aria-labelledby="nav-profile-tab">
		<!-- deck two table inside card carousel -->
		<br>
				<div class="card-deck">
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/excel-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a Excel File (.xls) - tb_dosen</h5></center>
						<center><p class="card-text">Database table daftar dosen will lead into page as a table of sheet excel file.</p></center>
					</div>
					<div class="card-footer">
				<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyadosenexcel" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/csv-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a CSV File (.csv) - tb_dosen</h5></center>
					<center><p class="card-text">Database table daftar dosen will lead into page as a table of csv file.</p></center>
					
					</div>
					<div class="card-footer">
					<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyadosencsv" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
			</div>
			<!-- batas isi import -->
	</div>
	<div class="tab-pane fade" id="nav-dpa" role="tabpanel" aria-labelledby="nav-contact-tab">
			<!-- deck two table inside card carousel -->
			<br>
				<div class="card-deck">
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/excel-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a Excel File (.xls) - tb_dpa</h5></center>
						<center><p class="card-text">Database table dpa into page as a table of sheet excel file.</p></center>
					</div>
					<div class="card-footer">
				<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyadpaexcel" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/csv-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a CSV File (.csv) - tb_dpa</h5></center>
					<center><p class="card-text">Database table dpa into page as a table of csv file.</p></center>
					
					</div>
					<div class="card-footer">
					<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyadpacsv" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
			</div>
			<!-- batas isi import -->
	</div>
	<div class="tab-pane fade" id="nav-homebase" role="tabpanel" aria-labelledby="nav-contact-tab">
					<!-- deck two table inside card carousel -->
					<br>
				<div class="card-deck">
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/excel-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a Excel File (.xls) - tb_homebase</h5></center>
						<center><p class="card-text">Database table homebase into page as a table of sheet excel file.</p></center>
					</div>
					<div class="card-footer">
				<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyahomebaseexcel" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/csv-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a CSV File (.csv) - tb_homebase</h5></center>
					<center><p class="card-text">Database table homebase into page as a table of csv file.</p></center>
					
					</div>
					<div class="card-footer">
					<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyahomebasecsv" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
			</div>
			<!-- batas isi import -->
	</div>
	<div class="tab-pane fade" id="nav-jabatan" role="tabpanel" aria-labelledby="nav-contact-tab">
					<!-- deck two table inside card carousel -->
					<br>
				<div class="card-deck">
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/excel-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a Excel File (.xls) - tb_jabatan</h5></center>
						<center><p class="card-text">Database table jabatan into page as a table of sheet excel file.</p></center>
					</div>
					<div class="card-footer">
				<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyajabatanexcel" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/csv-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a CSV File (.csv) - tb_jabatan</h5></center>
					<center><p class="card-text">Database table jabatan into page as a table of csv file.</p></center>
					
					</div>
					<div class="card-footer">
					<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyajabatancsv" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
			</div>
			<!-- batas isi import -->
	</div>
	<div class="tab-pane fade" id="nav-jadwal" role="tabpanel" aria-labelledby="nav-contact-tab">
					<!-- deck two table inside card carousel -->
					<br>
				<div class="card-deck">
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/excel-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a Excel File (.xls) - tb_jadwal_kuliah</h5></center>
						<center><p class="card-text">Database table jadwal kuliah into page as a table of sheet excel file.</p></center>
					</div>
					<div class="card-footer">
				<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyajadwalexcel" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/csv-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a CSV File (.csv) - tb_jadwal_kuliah</h5></center>
					<center><p class="card-text">Database table jadwal kuliah into page as a table of csv file.</p></center>
					
					</div>
					<div class="card-footer">
					<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyajadwalcsv" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
			</div>
			<!-- batas isi import -->
	</div>
	<div class="tab-pane fade" id="nav-matakuliah" role="tabpanel" aria-labelledby="nav-contact-tab">
					<!-- deck two table inside card carousel -->
					<br>
				<div class="card-deck">
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/excel-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a Excel File (.xls) - tb_matakuliah</h5></center>
						<center><p class="card-text">Database table matakuliah into page as a table of sheet excel file.</p></center>
					</div>
					<div class="card-footer">
				<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyamatakuliahexcel" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/csv-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a CSV File (.csv) - tb_matakuliah</h5></center>
					<center><p class="card-text">Database table matakuliah into page as a table of csv file.</p></center>
					
					</div>
					<div class="card-footer">
					<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyamatakuliahcsv" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
			</div>
			<!-- batas isi import -->
	</div>
	<div class="tab-pane fade" id="nav-research" role="tabpanel" aria-labelledby="nav-contact-tab">
					<!-- deck two table inside card carousel -->
					<br>
				<div class="card-deck">
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/excel-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a Excel File (.xls) - tb_research</h5></center>
						<center><p class="card-text">Database table research into page as a table of sheet excel file.</p></center>
					</div>
					<div class="card-footer">
				<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyaresearchexcel" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
				<div class="card"><br>
				<center><img src="<?= base_url(); ?>/assets/image/csv-logo.png" alt="Card image cap" width="100" height="100"><br><br></center>
					<div class="card-body">
						<center><h5 class="card-title">Export as a CSV File (.csv) - tb_research</h5></center>
					<center><p class="card-text">Database table research into page as a table of csv file.</p></center>
					
					</div>
					<div class="card-footer">
					<form>
						<div class="form-group">
						<br>
							<center><a href="<?= base_url() ?>/dosenkuh/exportnyaresearchcsv" class="btn btn-success">Export</a></center>
						</div>
					</form>
					</div>
				</div>
			</div>
			<!-- batas isi import -->
	</div>
</div>

</div>
        