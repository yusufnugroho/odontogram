<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	
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
        $data['nama'] = $this->session->userdata('nama');
		$data['title'] = "Pasien";
		$this->load->model('m_main');
		$data['pasien'] = $this->m_main->getall('pasien');
		$this->load->view('dashboard/header', $data);
		$this->load->view('pasien/test', $data);
		$this->load->view('dashboard/footer');
	}
	public function pasien_dokter()
	{
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session == "") redirect('welcome/logout');
        $data['akses'] = $session[0];
        $data['nama'] = $this->session->userdata('nama');
        $nik_dokter = $this->session->userdata('nik_dokter');
		$data['title'] = "Pasien";
		$this->load->model('m_main');
		
		//Select Table Pasien Where nik_dokter = $nik_dokter
		$where = array('nik_dokter' => $nik_dokter, );
		$data['pasien'] = $this->m_main->select_where2('pasien',$where);
		$this->load->view('dashboard/header', $data);
		$this->load->view('pasien/test', $data);
		$this->load->view('dashboard/footer');
	}
	public function tambah()
	{

        $session[] = $this->session->userdata('akses');
		//print_r($this->session->userdata());die();
		if (!empty($session) && $session == "") redirect('welcome/logout');
        $data['akses'] = $session[0];
        $data['nama'] = $this->session->userdata('nama');;
		$data['title'] = "Pasien - New";
		$this->load->view('dashboard/header', $data);
		$this->load->view('pasien/add');
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
			'id_dokter' => $id
		);
		$data['dokter'] = $this->m_main->select_where('dokter',$where);
		$data['title'] = "Dokter - Update";
		$this->load->view('dashboard/header', $data);
		$this->load->view('dokter/update', $data);
		$this->load->view('dashboard/footer');
	}
	public function add()
	{
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session == "") redirect('welcome/logout');
        $data['akses'] = $session[0];
        $data['nama'] = $this->session->userdata('nama');;

		$target_Path = NULL;
		if ($_FILES['userFile']['name'] != NULL)
		{
			$target_Path = "assets/uploads/";
			$string = basename( $_FILES['userFile']['name'] );
			$string = str_replace(" ","-", $string);
			$target_Path = $target_Path.$string;
		}

		$this->load->model('m_main');
		$nik_dokter = $this->session->userdata('nik_dokter');
		$table = 'pasien';
		$data = array(
			'nama_pasien' => $this->input->post('nama_pasien'),
			'ktp_pasien' => $this->input->post('ktp_pasien'),
			'tempat_lahir_pasien' => $this->input->post('tempat_lahir_pasien'),
			'tanggal_lahir_pasien' => $this->input->post('tanggal_lahir_pasien'),
			'jk_pasien' => $this->input->post('jenis_kelamin_pasien'),
			'suku_pasien' => $this->input->post('suku_pasien'),
			'pekerjaan_pasien' => $this->input->post('pekerjaan_pasien'),
			'alamat_rumah_pasien' => $this->input->post('alamat_rumah_pasien'),
			'telepon_rumah_pasien' => $this->input->post('telepon_rumah_pasien'),
			'alamat_kantor_pasien' => $this->input->post('alamat_kantor_pasien'),
			'ponsel_pasien' => $this->input->post('ponsel_pasien'),
			'GD' =>$this->input->post('GD'),
			'PJ' =>$this->input->post('PJ'),
			'DS' =>$this->input->post('DS'),
			'HA' =>$this->input->post('HA'),
			'HS' =>$this->input->post('HS'),
			'GG' =>$this->input->post('GG'),
			'AO' =>$this->input->post('inputAO'),
			'AOtext' =>$this->input->post('AOtext'),
			'AM' =>$this->input->post('inputAM'),
			'AMtext' =>$this->input->post('AMtext'),

			'nik_dokter' => $nik_dokter,
		
			'foto_pasien' => $target_Path
		);
		$this->load->helper('url');

		$this->m_main->insert($table, $data);

		
	

		$this->m_main->insert($table, $data);
		move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path);
		if(!empty($nik_dokter)){
			redirect('pasien/pasien_dokter', 'refresh');
		}
		else{
			$this->index();	
		}		
		//$this->index();
//>>>>>>> cf39e365018e4a3c5b1ed9a8605cfd8ad7d16d04:application/controllers/pasien.php
	}

	public function update()
	{
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session == "") redirect('welcome/logout');
        $data['akses'] = $session[0];
        $data['nama'] = $this->session->userdata('nama');;
		$data = array(
			'nama_dokter' => $this->input->post('nama_dokter'),
			'alamat_dokter' => $this->input->post('alamat_dokter'),
			'alamat_praktik_dokter' => $this->input->post('alamat_praktik_dokter'),
			'telepon_dokter' => $this->input->post('telepon_dokter'),
			'password_dokter' => md5($this->input->post('password_dokter'))
		);
		$where = array(
			'id_dokter' => $this->input->post('id_dokter')
		);
		$this->load->model('m_main');
		$this->m_main->update('dokter',$data, $where);
		$nik_dokter = $this->session->userdata('nik_dokter');
		if(!empty($nik_dokter)){
			redirect('/pasien/pasien_dokter', 'refresh');
		}
		else{
			$this->index();	
		}
	}
	public function record($id_pasien)
	{
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session == "") redirect('welcome/logout');
        $data['akses'] = $session[0];
        $data['nama'] = $this->session->userdata('nama');;
		$this->load->model('m_main');
		$rekam_pasien = $this->m_main->select_where('rekam_pasien', array('id_pasien' => $id_pasien));
		if(!empty($rekam_pasien)){

		}
		else{
			redirect(base_url()."rekam/record/".$id_pasien);
		}
	}
	public function hapus($id_pasien){
		$this->load->model('m_main');
		
		$rekam_gigi = $this->m_main->select_where('rekam_pasien', array('id_pasien' => $id_pasien));
		foreach ($rekam_gigi as $key) {
			$this->m_main->delete('gigi', array('id_rekam' => $key['id_rekam']));
		}
		$this->m_main->delete('pasien', array('id_pasien'=>$id_pasien));
		
		$nik_dokter = $this->session->userdata('nik_dokter');
		if(!empty($nik_dokter)){
			redirect('/pasien/pasien_dokter', 'refresh');
		}
		else{
			$this->index();	
		}		
	}

	public function detail($id_pasien){
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session == "") redirect('welcome/logout');
        $data['akses'] = $session[0];
        $data['nama'] = $this->session->userdata('nama');;
		$data['title'] = "Detail Pasien";
		$this->load->model('m_main');
		$data['detail_pasien'] = $this->m_main->select_where('pasien', array('id_pasien' => $id_pasien));
		$data['id_pasien'] = $id_pasien;
		$this->load->view('dashboard/header', $data);
		$this->load->view('pasien/detail', $data);
		$this->load->view('dashboard/footer');
	}
	public function perawatan($id_pasien){
		$session[] = $this->session->userdata('akses');
		if (!empty($session) && $session == "") redirect('welcome/logout');
        $data['akses'] = $session[0];

        $data['nama'] = $this->session->userdata('nama');
		$data['title'] = "Perawatan Pasien";
		$this->load->model('m_main');
		$data['perawatan'] = $this->m_main->select_where('perawatan', array('id_pasien' => $id_pasien));
		$data['id_pasien'] = $id_pasien;
		$this->load->view('dashboard/header', $data);
		$this->load->view('pasien/perawatan_index', $data);
		$this->load->view('dashboard/footer');
	}
	public function perawatan_tambah($id_pasien)
	{
		# code...
		$session[] = $this->session->userdata('akses');
		if (!empty($session) && $session == "") redirect('welcome/logout');
        $data['akses'] = $session[0];
        $data['nama'] = $this->session->userdata('nama');;
		$data['title'] = "Perawatan - New";
		$data['id_pasien'] = $id_pasien;

		$this->load->view('dashboard/header', $data);
		$this->load->view('pasien/perawatan_add');
		$this->load->view('dashboard/footer');
	}
	public function perawatan_add($value='')
	{
		$session[] = $this->session->userdata('akses');
		if (!empty($session) && $session == "") redirect('welcome/logout');
        $data['akses'] = $session[0];
		$this->load->model('m_main');
		$table = 'perawatan';
		$nama_dokter = '-';
		$nama_dokter = $this->session->userdata('nama_dokter');
		$data = array(
			'id_pasien' =>$this->input->post('id_pasien'),
			'tanggal_perawatan' => date('Y-m-d'),
			'gigi_perawatan' =>$this->input->post('inputGigi'),
			'diagnosa_perawatan' =>$this->input->post('inputDiagnosa'),
			'icd_10_perawatan' =>$this->input->post('inputICD'),
			'perawatan_perawatan' =>$this->input->post('inputPerawatan'),
			'nama_dokter' =>$nama_dokter,
			'ket_perawatan' =>$this->input->post('inputKeterangan'),
		);
		$this->m_main->insert($table, $data);
		$nik_dokter = $this->session->userdata('nik_dokter');
		if(!empty($nik_dokter)){
			redirect('/pasien/pasien_dokter', 'refresh');
		}
		else{
			$this->index();	
		}
	}
	public function perawatan_hapus($id_perawatan){
		$this->load->model('m_main');
		$this->m_main->delete('perawatan', array('id_perawatan'=>$id_perawatan));
		$nik_dokter = $this->session->userdata('nik_dokter');
		if(!empty($nik_dokter)){
			redirect('/pasien/pasien_dokter', 'refresh');
		}
		else{
			$this->index();	
		}
	}
}
