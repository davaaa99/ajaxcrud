<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_pegawai extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('m_pegawai');
    }

	function index()
	{
        $this->load->view('index');
    }

    function tampilPegawai()
    {
        $data['hasil']=$this->m_pegawai->TampilPegawai();
        $this->load->view('data-pegawai',$data);
    }

    function tambah()
    {
        $aksi=$this->input->post('aksi');
        $this->load->view('tambah',$aksi);
    }

    function edit()
    {
        $nip=$this->input->post('nip');
        $data['hasil']=$this->m_pegawai->getnip($nip);
        $this->load->view('edit',$data);
    }
    function hapus()
    {
        $nip=$this->input->post('nip');
        $data['hasil']=$this->m_pegawai->getnip($nip);
        $this->load->view('hapus',$data);
    }

    function simpanPegawai()
    {
        $data = array(
            'nip'=>$this->input->post('nip'),
            'nama'=>$this->input->post('nama'),
            'jurusan'=>$this->input->post('jurusan'),
            'alamat'=>$this->input->post('alamat')
            );
            $this->db->insert('pegawai',$data);
            redirect($_SERVER['index'], 'refresh');  
    }

    function editPegawai()
    {
        $data = array(
            'nip'=>$this->input->post('nip_baru'),
            'nama'=>$this->input->post('nama'),
            'jurusan'=>$this->input->post('jurusan'),
            'alamat'=>$this->input->post('alamat')
		);
        $nip = $this->input->post('nip_lama');
        $this->db->where('nip', $nip);
        $this->db->update('pegawai',$data);
        redirect($_SERVER['index'], 'refresh');
    }
    function hapusPegawai()
    {
        $nip=$this->input->post('nip');
        $this->db->delete('pegawai',array('nip' => $nip));
    }
}
?>