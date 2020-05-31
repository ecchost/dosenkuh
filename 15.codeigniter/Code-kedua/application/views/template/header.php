<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		

	


    <!-- <title>Hello, world!</title> -->
  <style>
  .badge{
    margin-left: 3px;
  }
  </style>

    <title><?= $title ?></title>

  </head>
  <body>


	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
	<div class="container">
  <a class="navbar-brand" href="<?= base_url(); ?>dosenkuh">DOSENKU   </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= base_url(); ?>Home">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>dosenkuh">Daftar Dosen</a>
			<a class="nav-item nav-link" href="<?= base_url(); ?>dosenkuh/dpa">DPA</a>
			<a class="nav-item nav-link" href="<?= base_url(); ?>dosenkuh/homebase">Homebase</a>
			<a class="nav-item nav-link" href="<?= base_url(); ?>dosenkuh/jabatan">Jabatan</a>
			<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Mata Kuliah
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="<?= base_url(); ?>dosenkuh/matakuliah">Mata Kuliah</a>
					<a class="dropdown-item" href="<?= base_url(); ?>dosenkuh/jadwalkuliah">Jadwal Kuliah</a>
					<a class="dropdown-item" href="<?= base_url(); ?>dosenkuh/kontrak">Kontrak Perkuliahan</a>
      </li>

			<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Research
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="<?= base_url(); ?>dosenkuh/research">Research</a>
					<a class="dropdown-item" href="<?= base_url(); ?>dosenkuh/research_name">Research Name</a>
					<a class="dropdown-item" href="<?= base_url(); ?>dosenkuh/research_group">Research Group</a>
      </li>

			<a class="nav-item nav-link" href="<?= base_url(); ?>dosenkuh/saprps">SAP & RPS</a>

			<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Media File
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="<?= base_url(); ?>dosenkuh/exportfile">Export File</a>
					<a class="dropdown-item" href="<?= base_url(); ?>dosenkuh/importfile">Import File</a>
      </li>

			<a class="nav-item nav-link" href="<?= base_url(); ?>login/logout">Logout</a>
			
			
      <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
    </div>
  </div>
	</nav>
	<br>

