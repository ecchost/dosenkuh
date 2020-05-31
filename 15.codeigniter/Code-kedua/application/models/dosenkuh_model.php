<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class dosenkuh_model extends CI_Model {

    public function getAllDosen()
    {
		$query=$this->db->get('tb_dosen');
        return $query->result_array();
	}
	public function getAllDPA()
    {
		$query=$this->db->get('tb_dpa');
        return $query->result_array();
	}
	public function getAllHomebase()
    {
		$query=$this->db->get('tb_homebase');
        return $query->result_array();
	}
	public function getAllJabatan()
    {
		$query=$this->db->get('tb_jabatan');
        return $query->result_array();
	}
	public function getAllJadwal()
	{
		$query=$this->db->get('tb_jadwal_kuliah');
		return $query->result_array();
	}
	public function getMataKuliah()
	{
		$query=$this->db->get('tb_matakuliah');
		return $query->result_array();
	}
	public function getResearch()
	{
		$query=$this->db->get('tb_research');
		return $query->result_array();
	}
	public function getResearchName()
	{
		$query=$this->db->get('tb_research_name');
		return $query->result_array();
	}
	public function getResearchGroup()
	{
		$query=$this->db->get('tb_resgroup');
		return $query->result_array();
	}
	public function getsaprps()
	{
		$query=$this->db->get('tb_saprps');
		return $query->result_array();
	}
	public function downloadnya($code_saprps)
	{
		return $this->db->get_where('tb_saprps',['code_saprps'=>$code_saprps])->row_array();
	}
	public function getkontrak()
	{
		$query=$this->db->get('tb_kontrak');
		return $query->result_array();
	}
	public function downloadnyakontrak($id)
	{
		return $this->db->get_where('tb_kontrak',['id'=>$id])->row_array();
	}
    public function tambahdatadosen(){
        $data=[
            "NIDN" => $this->input->post('NIDN',true),
            "NIP" => $this->input->post('NIP',true),
            "CODE_DOSEN" => $this->input->post('CODE_DOSEN',true),
			"NAMA_DOSEN" => $this->input->post('NAMA_DOSEN',true),
			"STATUS_DOSEN" => $this->input->post('STATUS_DOSEN',true),
			"BIDANG_DOSEN" => $this->input->post('BIDANG_DOSEN',true),
			"KUOTA_NGAJAR" => $this->input->post('JAM_NGAJAR',true),
			"JAM_NGAJAR" => $this->input->post('JAM_NGAJAR',true),
			"SKS_DOSEN" => $this->input->post('SKS_DOSEN',true),
			"DISTRIBUSI" => $this->input->post('DISTRIBUSI',true),
        ];
        $this->db->insert('tb_dosen',$data);
	}
	public function tambahdatasaprps(){
        $data=[
            "code_saprps" => $this->input->post('code_saprps',true),
            "matakuliah_saprps" => $this->input->post('matakuliah_saprps',true),
            "semester_saprps" => $this->input->post('semester_saprps',true),
			"year_saprps" => $this->input->post('year_saprps',true),
			"tgl_penyusunan" => $this->input->post('tgl_penyusunan',true)
        ];
        $this->db->insert('tb_saprps',$data);
	}

	public function input_data_saprps($datanya)
    {
        $this->db->insert('tb_saprps', $datanya);
    }
	public function input_data_kontrak($datanya)
    {
        $this->db->insert('tb_kontrak', $datanya);
    }
	public function getdosenByID($id){
        return $this->db->get_where('tb_dosen',['CODE_DOSEN'=>$id])->row_array();
    }
	

    public function hapusdatadosen($id){
        $this->db->where('CODE_DOSEN',$id);
        $this->db->delete('tb_dosen');
    }
    public function ubahdatadosen(){
        $data=[
            "NIDN" => $this->input->post('NIDN',true),
            "NIP" => $this->input->post('NIP',true),
			"CODE_DOSEN" => $this->input->post('CODE_DOSEN',true),
			"NAMA_DOSEN" => $this->input->post('NAMA_DOSEN', true),
			"STATUS_DOSEN" => $this->input->post('STATUS_DOSEN', true),
			"BIDANG_DOSEN" => $this->input->post('BIDANG_DOSEN', true),
			"KUOTA_NGAJAR" => $this->input->post('KUOTA_NGAJAR', true),
			"SKS_DOSEN" => $this->input->post('SKS_DOSEN', true),
			"DISTRIBUSI" => $this->input->post('DISTRIBUSI', true)
			
        ];
        $this->db->where('CODE_DOSEN', $this->input->post('CODE_DOSEN'));
        $this->db->update('tb_dosen',$data);
    }
    public function cariDataDosen(){
        $keyword=$this->input->post('keyword');
		$this->db->like('NAMA_DOSEN',$keyword);
		$this->db->or_like('CODE_DOSEN',$keyword);
        $this->db->or_like('NIP',$keyword);
		$this->db->or_like('NIDN',$keyword);
		$this->db->or_like('STATUS_DOSEN',$keyword);
		$this->db->or_like('BIDANG_DOSEN',$keyword);
        return $this->db->get('tb_dosen')->result_array();
	}
	public function cariDataSAPRPS(){
        $keyword=$this->input->post('keyword');
		$this->db->like('code_saprps',$keyword);
		$this->db->or_like('matakuliah_saprps',$keyword);
        $this->db->or_like('semester_saprps',$keyword);
		$this->db->or_like('year_saprps',$keyword);
		$this->db->or_like('tgl_penyusunan',$keyword);
        return $this->db->get('tb_saprps')->result_array();
	}
	public function caridatakontrak(){
        $keyword=$this->input->post('keyword');
		$this->db->like('matakuliah',$keyword);
		$this->db->or_like('prodi',$keyword);
        $this->db->or_like('tingkat',$keyword);
        return $this->db->get('tb_kontrak')->result_array();
    }
    public function datatabels(){
        $query= $this->db->order_by('id','DESC')->get('mahasiswa');
        return $query->result();
    }
}

?>
