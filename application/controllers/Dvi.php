<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dvi extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->helper('url');
	}
	public function index()
	{
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session == "") redirect('welcome/logout');
        $data['akses'] = $session[0];
        $data['nama'] = $this->session->userdata('nama');;
		$data['title'] = "Dokter";
		$this->load->model('m_main');
		$data['dvi'] = $this->m_main->getall('dvi');
		$this->load->view('dashboard/header', $data);
		$this->load->view('dvi/index', $data);
		$this->load->view('dashboard/footer');
	}
	////////////////////////////////////////
	public function test()
	{
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session == "") redirect('welcome/logout');
        $data['akses'] = $session[0];
        $data['nama'] = $this->session->userdata('nama');;
		$data['title'] = "Dokter";
		$this->load->model('m_main');
		$data['dokter'] = $this->m_main->getall('dokter');
		$this->load->view('dashboard/header', $data);
		$this->load->view('dokter/test', $data);
		$this->load->view('dashboard/footer');
	}
	public function tambah()
	{
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session == "") redirect('welcome/logout');
        $data['akses'] = $session[0];
        $data['nama'] = $this->session->userdata('nama');;
		$data['title'] = "Dokter - New";
		$this->load->view('dashboard/header', $data);
		$this->load->view('dokter/add');
		$this->load->view('dashboard/footer');
	}
	public function ubah($id)
	{
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session == "") redirect('welcome/logout');
        $data['akses'] = $session[0];
        $data['nama'] = $this->session->userdata('nama');;
        $this->load->model('m_main');
		$where = array(
			'id_dvi' => $id
		);
		$data['dvi'] = $this->m_main->select_where('dvi',$where);
		$data['title'] = "DVI - Update";
		$this->load->view('dashboard/header', $data);
		$this->load->view('dvi/update', $data);
		$this->load->view('dashboard/footer');
	}
	public function add()
	{
		# code...
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session == "") redirect('welcome/logout');
        $data['akses'] = $session[0];
        $data['nama'] = $this->session->userdata('nama');;
		$this->load->model('m_main');
		$table = 'dokter';
		$data = array(
			'id_dokter' => $this->input->post('id_dokter'),
			'nama_dokter' => $this->input->post('nama_dokter'),
			'alamat_dokter' => $this->input->post('alamat_dokter'),
			'alamat_praktik_dokter' => $this->input->post('alamat_praktik_dokter'),
			'telepon_dokter' => $this->input->post('telepon_dokter'),
			'password_dokter' => md5($this->input->post('password_dokter'))
		);

		$this->m_main->insert($table, $data);
		$this->index();
	}
	public function update()
	{
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session == "") redirect('welcome/logout');
        $data['akses'] = $session[0];
        $data['nama'] = $this->session->userdata('nama');;
		$data = array(
			'id_dvi' => $this->input->post('id_dvi'),
			'password_dvi' => md5($this->input->post('password_dvi')),
			'nama_dvi' => $this->input->post('nama_dvi'),
			'date_dvi' => $this->input->post('date_dvi'),
			'date2_dvi' => $this->input->post('date2_dvi'),
		);
		$where = array(
			'id_dvi' => $this->input->post('id_dvi')
		);
		$this->load->model('m_main');
		$this->m_main->update('dvi',$data, $where);
		$this->index();
	}

	public function hapus($id_dokter){
		$this->load->model('m_main');
		$this->m_main->delete('dokter', array('id_dokter' => $id_dokter));
		redirect(base_url()."dokter");
	}
}
