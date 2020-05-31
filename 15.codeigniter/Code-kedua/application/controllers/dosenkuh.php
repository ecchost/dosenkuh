<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dosenkuh extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('dosenkuh_model');
		$this->load->library('form_validation');

        if($this->session->userdata('level')!="admin"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $this->load->model('dosenkuh_model');

        // $this->load->database();
        $data['title']='List Dosen';
        $data['tb_dosen']=$this->dosenkuh_model->getAllDosen();
        if ($this->input->post('keyword')){
            $data['tb_dosen']=$this->dosenkuh_model->cariDataDosen();
        }
        $this->load->view('template/header', $data);
        $this->load->view('dosen/index', $data);
        $this->load->view('template/footer');
	}
	public function dpa(){
		$this->load->model('dosenkuh_model');

		$data['title']='List DPA';
		$data['tb_dpa']=$this->dosenkuh_model->getAllDPA();

		$this->load->view('template/header', $data);
        $this->load->view('dosen/dpa', $data);
        $this->load->view('template/footer');
	}
	public function homebase(){
		$this->load->model('dosenkuh_model');

		$data['title']='List Homebase';
		$data['tb_homebase']=$this->dosenkuh_model->getAllHomebase();

		$this->load->view('template/header', $data);
        $this->load->view('dosen/homebase', $data);
        $this->load->view('template/footer');
	}
	public function jabatan(){
		$this->load->model('dosenkuh_model');

		$data['title']='List Jabatan';
		$data['tb_jabatan']=$this->dosenkuh_model->getAllJabatan();

		$this->load->view('template/header', $data);
        $this->load->view('dosen/jabatan', $data);
        $this->load->view('template/footer');
	}
	public function jadwalkuliah(){
		$this->load->model('dosenkuh_model');

		$data['title']='Jadwal Kuliah';
		$data['tb_jadwal_kuliah']=$this->dosenkuh_model->getAllJadwal();

		$this->load->view('template/header', $data);
        $this->load->view('dosen/jadwal', $data);
        $this->load->view('template/footer');
	}
	public function matakuliah(){
		$this->load->model('dosenkuh_model');

		$data['title']='Mata Kuliah';
		$data['tb_matakuliah']=$this->dosenkuh_model->getMataKuliah();
		if ($this->input->post('keyword')){
            $data['tb_matakuliah']=$this->dosenkuh_model->carimatakuliah();
        }
		$this->load->view('template/header', $data);
        $this->load->view('dosen/matakuliah', $data);
        $this->load->view('template/footer');
	}
	public function research(){
		$this->load->model('dosenkuh_model');

		$data['title']='Research';
		$data['tb_research']=$this->dosenkuh_model->getResearch();

		$this->load->view('template/header', $data);
        $this->load->view('dosen/research', $data);
        $this->load->view('template/footer');
	}
	public function research_name(){
		$this->load->model('dosenkuh_model');

		$data['title']='Research Name';
		$data['tb_research_name']=$this->dosenkuh_model->getResearchName();

		$this->load->view('template/header', $data);
        $this->load->view('dosen/research_name', $data);
        $this->load->view('template/footer');
	}
	public function research_group(){
		$this->load->model('dosenkuh_model');

		$data['title']='Research Group';
		$data['tb_resgroup']=$this->dosenkuh_model->getResearchGroup();

		$this->load->view('template/header', $data);
        $this->load->view('dosen/research_group', $data);
        $this->load->view('template/footer');
	}
	public function saprps(){
		$this->load->model('dosenkuh_model');
	
		$data['title']='SAP RPS';
		$data['tb_saprps']=$this->dosenkuh_model->getsaprps();
		if ($this->input->post('keyword')){
            $data['tb_saprps']=$this->dosenkuh_model->cariDataSAPRPS();
        }

		$this->load->view('template/header', $data);
        $this->load->view('dosen/saprps', $data);
        $this->load->view('template/footer');
	}
	public function download($code_saprps){
		
		$this->load->helper(array('url','download'));
		
		$fileInfo = $this->dosenkuh_model->downloadnya($code_saprps);

		$file = 'uploads/files/'.$fileInfo['matakuliah_saprps'].'.doc';

		force_download($file, NULL); 
		
	}
	public function downloadkontrak($id){
		
		$this->load->helper(array('url','download'));
		
		$fileInfo = $this->dosenkuh_model->downloadnyakontrak($id);

		$file = 'uploads/kontrak/'.$fileInfo['matakuliah'];

		force_download($file, NULL); 
		
	}
	public function kontrak(){
		$this->load->model('dosenkuh_model');
	
		$data['title']='Kontrak Perkuliahan';
		$data['tb_kontrak']=$this->dosenkuh_model->getkontrak();
		if ($this->input->post('keyword')){
            $data['tb_kontrak']=$this->dosenkuh_model->caridatakontrak();
        }

		$this->load->view('template/header', $data);
        $this->load->view('dosen/kontrak', $data);
        $this->load->view('template/footer');
	}
	public function detail_dosen($id){
        $data['title']='Detail Data Dosen';
		$data['tb_dosen']=$this->dosenkuh_model->getdosenByID($id);
		
        $this->load->view('template/header', $data);
        $this->load->view('dosen/detail_dosen', $data);
        $this->load->view('template/footer');
	}
	public function exportfile(){
        $data['title']='Export Media File';
		
        $this->load->view('template/header',$data);
        $this->load->view('dosen/exportfile',$data);
        $this->load->view('template/footer');
	}
	public function importfile(){
        $data['title']='Import Media File';
		
        $this->load->view('template/header',$data);
        $this->load->view('dosen/importfile',$data);
        $this->load->view('template/footer');
	}
	public function exportnyaexcel(){
		$this->load->helper('download');

		$file = 'uploads/dosenkuh.xls';
		force_download($file, NULL);
	}
	public function exportnyacsv(){
		$this->load->helper('download');

		$file = 'uploads/dosenkuh.csv';
		force_download($file, NULL);
	}
	public function exportnyadosenexcel(){
		$this->load->helper('download');

		$file = 'uploads/tb_dosen.xls';
		force_download($file, NULL);
	}
	public function exportnyadosencsv(){
		$this->load->helper('download');

		$file = 'uploads/tb_dosen.csv';
		force_download($file, NULL);
	}
	public function exportnyadpaexcel(){
		$this->load->helper('download');

		$file = 'uploads/tb_dpa.xls';
		force_download($file, NULL);
	}
	public function exportnyadpacsv(){
		$this->load->helper('download');

		$file = 'uploads/tb_dpa.csv';
		force_download($file, NULL);
	}
	public function exportnyahomebaseexcel(){
		$this->load->helper('download');

		$file = 'uploads/tb_homebase.xls';
		force_download($file, NULL);
	}
	public function exportnyahomebasecsv(){
		$this->load->helper('download');

		$file = 'uploads/tb_homebase.csv';
		force_download($file, NULL);
	}
	public function exportnyajabatanexcel(){
		$this->load->helper('download');

		$file = 'uploads/tb_jabatan.xls';
		force_download($file, NULL);
	}
	public function exportnyajabatancsv(){
		$this->load->helper('download');

		$file = 'uploads/tb_jabatan.csv';
		force_download($file, NULL);
	}
	public function exportnyajadwalexcel(){
		$this->load->helper('download');

		$file = 'uploads/tb_jadwal_kuliah.xls';
		force_download($file, NULL);
	}
	public function exportnyajadwalcsv(){
		$this->load->helper('download');

		$file = 'uploads/tb_jadwal_kuliah.csv';
		force_download($file, NULL);
	}
	public function exportnyamatakuliahexcel(){
		$this->load->helper('download');

		$file = 'uploads/tb_matakuliah.xls';
		force_download($file, NULL);
	}
	public function exportnyamatakuliahcsv(){
		$this->load->helper('download');

		$file = 'uploads/tb_matakuliah.csv';
		force_download($file, NULL);
	}
	public function exportnyaresearchexcel(){
		$this->load->helper('download');

		$file = 'uploads/tb_research.xls';
		force_download($file, NULL);
	}
	public function exportnyaresearchcsv(){
		$this->load->helper('download');

		$file = 'uploads/tb_research.csv';
		force_download($file, NULL);
	}
	public function tambah(){

        $data['title']='Form Menambahkan Data Dosen';
		$data['STATUS_DOSEN']=['CPNS/Kontrak','PNS','Kontrak','MKU','Magang'];
		$data['BIDANG_DOSEN']=['TI','MKU','BING','MP'];

        $this->form_validation->set_rules('NIDN','NIDN','required');	
        $this->form_validation->set_rules('NIP','NIP','required');
		$this->form_validation->set_rules('CODE_DOSEN','CODE_DOSEN','required');
		$this->form_validation->set_rules('NAMA_DOSEN','NAMA_DOSEN','required');
		$this->form_validation->set_rules('STATUS_DOSEN','STATUS_DOSEN','required');
		$this->form_validation->set_rules('BIDANG_DOSEN','BIDANG_DOSEN','required');
		$this->form_validation->set_rules('KUOTA_NGAJAR','KUOTA_NGAJAR','required');
		$this->form_validation->set_rules('JAM_NGAJAR','JAM_NGAJAR','required');
		$this->form_validation->set_rules('SKS_DOSEN','SKS_DOSEN','required');
		$this->form_validation->set_rules('DISTRIBUSI','DISTRIBUSI','required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('template/header', $data);
            $this->load->view('dosen/tambah_dosen', $data);
            $this->load->view('template/footer');
        } else {
            echo "data berhasil ditambah";
            $this->dosenkuh_model->tambahdatadosen();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('dosenkuh','refresh');
        }  
	}
	public function edit($id){
        $data['title']='Form Edit Data Dosen';
		$data['tb_dosen']=$this->dosenkuh_model->getdosenByID($id);
		$data['STATUS_DOSEN']=['CPNS/Kontrak','PNS','Kontrak','MKU'];
		$data['BIDANG_DOSEN']=['TI','MKU','BING','MP'];

        $this->form_validation->set_rules('NIDN','NIDN','required');	
        $this->form_validation->set_rules('NIP','NIP','required');
		$this->form_validation->set_rules('CODE_DOSEN','CODE_DOSEN','required');
		$this->form_validation->set_rules('NAMA_DOSEN','NAMA_DOSEN','required');
		$this->form_validation->set_rules('STATUS_DOSEN','STATUS_DOSEN','required');
		$this->form_validation->set_rules('BIDANG_DOSEN','BIDANG_DOSEN','required');
		$this->form_validation->set_rules('KUOTA_NGAJAR','KUOTA_NGAJAR','required');
		$this->form_validation->set_rules('JAM_NGAJAR','JAM_NGAJAR','required');
		$this->form_validation->set_rules('SKS_DOSEN','SKS_DOSEN','required');
		$this->form_validation->set_rules('DISTRIBUSI','DISTRIBUSI','required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('template/header', $data);
            $this->load->view('dosen/edit_dosen', $data);
            $this->load->view('template/footer');
        } else {
            $this->dosenkuh_model->ubahdatadosen();
            $this->session->set_flashdata('flash-data','diedit');
            redirect('dosenkuh','refresh');
        }
	}
	public function hapus($id){
        $this->dosenkuh_model->hapusdatadosen($id);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('dosenkuh','refresh');
	}
	public function tambahkontrak(){

        $data['title']='Form Menambahkan Data Kontrak Perkuliahan';
		$data['tingkat']=['1','2','3','4'];
		$data['prodi']=['TI','MI'];


		$this->load->view('template/header', $data);
		$this->load->view('dosen/tambahkontrak', $data);
		$this->load->view('template/footer');
	}
	public function tambahsaprps(){

        $data['title']='Form Menambahkan Data SAPRPS';
		$data['semester_saprps']=['1','2','3','4','5','6','7','8'];
		$data['year_saprps']=['2016','2017','2018','2019','2020'];

        $this->form_validation->set_rules('code_saprps','code_saprps','required');	
		$this->form_validation->set_rules('semester_saprps','semester_saprps','required');
		$this->form_validation->set_rules('year_saprps','year_saprps','required');
		$this->form_validation->set_rules('tgl_penyusunan','tgl_penyusunan','required');


        if ($this->form_validation->run() == FALSE){
            $this->load->view('template/header', $data);
            $this->load->view('dosen/tambah_saprps', $data);
            $this->load->view('template/footer');
        } else {
            echo "data berhasil ditambah";
            $this->dosenkuh_model->tambahdatasaprps();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('dosenkuh/saprps','refresh');
        }  
	}
	public function tambahnyakontrak(){
		$data['title']='Form Menambahkan Data Kontrak Perkuliahan';
		$data['tingkat']=['1','2','3','4'];
		$data['prodi']=['TI','MI'];

		$tingkat	= $this->input->post('tingkat');
		$prodi		= $this->input->post('prodi');
		$matakuliah 	= $_FILES['matakuliah'];
		if($matakuliah=''){}else{
			$config['upload_path']		= './uploads/kontrak/';
			$config['allowed_types']	= 'doc|docx|pdf|xls|xlsx';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('matakuliah')){
				echo "Upload Gagal"; die();
			} else{
				$matakuliah=$this->upload->data('file_name');
			}
		}

		$datanya = array(
			'tingkat'		=> $tingkat,
			'prodi'			=> $prodi,
			'matakuliah'	=> $matakuliah
		);

		$this->dosenkuh_model->input_data_kontrak($datanya, 'tb_kontrak');
		$this->session->set_flashdata('flash-data','ditambahkan');
		redirect('dosenkuh/kontrak');
	}
	public function tambahnyasaprps(){
		$data['title']='Form Menambahkan Data SAPRPS';
		$data['semester_saprps']=['1','2','3','4','5','6','7','8'];
		$data['year_saprps']=['2016','2017','2018','2019','2020'];

		$code_saprps		= $this->input->post('code_saprps');
		$semester_saprps	= $this->input->post('semester_saprps');
		$year_saprps		= $this->input->post('year_saprps');
		$tgl_penyusunan		= $this->input->post('tgl_penyusunan');
		$matakuliah_saprps 	= $_FILES['matakuliah_saprps'];
		if($matakuliah_saprps=''){}else{
			$config['upload_path']		= './uploads/';
			$config['allowed_types']	= 'doc|docx|pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('matakuliah_saprps')){
				echo "Upload Gagal"; die();
			} else{
				$matakuliah_saprps=$this->upload->data('file_name');
			}
		}

		$datanya = array(
			'code_saprps'		=> $code_saprps,
			'semester_saprps'	=> $semester_saprps,
			'year_saprps'		=> $year_saprps,
			'tgl_penyusunan' 	=> $tgl_penyusunan,
			'matakuliah_saprps'	=> $matakuliah_saprps
		);

		$this->dosenkuh_model->input_data_saprps($datanya, 'tb_saprps');
		$this->session->set_flashdata('flash-data','ditambahkan');
		redirect('dosenkuh/saprps');
	}

}

/* End of file mahasiswa.php */ 
?>
