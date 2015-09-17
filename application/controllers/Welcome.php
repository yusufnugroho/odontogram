	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		# code...
        parent::__construct();
        $this->load->helper('url');
	}
	public function index()
	{
		$data['title'] = 'REKAM MEDIS GIGI';
		$this->load->view('index', $data);
	}
	public function login()
	{
		# code...
		$id = $this->input->post('id');
		$password = md5($this->input->post('password'));
		$akses = 'dokter';
		$data = array(
			'nik_'.$akses => $id,
			'password_'.$akses => $password
			);
		$this->load->model('m_main');
		$result = $this->m_main->select_where($akses, $data);
		if(!empty($result)){
			$session = array(
				'akses' => $akses,
				'nama' => $result[0]['nama_dokter'],
				'nik_dokter' => $result[0]['nik_dokter'],
			);
			$this->session->set_userdata($session);
			$this->load->view('dashboard/header', $session);
			$this->load->view('dashboard', $session);
			$this->load->view('dashboard/footer');
		}
		else redirect('welcome');
	}
	public function loginadmin()
	{
		# code...
		$id = $this->input->post('id');
		$password = md5($this->input->post('password'));
		$akses = 'admin';
		$data = array(
			'id_'.$akses => $id,
			'password_'.$akses => $password
			);
		$this->load->model('m_main');
		$result = $this->m_main->select_where($akses, $data);
		if(!empty($result)){
			$session = array(
				'akses' => $akses,
				'nama' => $result[0]['nama_admin']
			);
			$this->session->set_userdata($session);
			$this->load->view('dashboard/header', $session);
			$this->load->view('dashboard', $session);
			$this->load->view('dashboard/footer');
		}
		else redirect('welcome/admin');
	}

	public function dashboard()
	{
		# code...
		$data['title'] = "Dashboard";
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard');
		$this->load->view('dashboard/footer');
	}
	public function admin()
	{
		$data['title'] = 'REKAM MEDIS GIGI';
		$this->load->view('indexadmin', $data);
	}
	public function dvi()
	{
		$data['title'] = 'REKAM MEDIS GIGI';
		$this->load->view('indexdvi', $data);
	}
	public function logindvi()
	{
		# code...
		$id = $this->input->post('id');
		$password = md5($this->input->post('password'));
		$akses = 'dvi';
		$data = array(
			'id_'.$akses => $id,
			'password_'.$akses => $password
			);
		$this->load->model('m_main');
		$result = $this->m_main->select_where($akses, $data);
		$date_now = date("Y-m-d");
		$date_start = date('Y-m-d', strtotime($result[0]['date_dvi']));
		$date_stop = date('Y-m-d', strtotime($result[0]['date2_dvi']));
		echo $date_start." : ".$date_now." : ".$date_stop;
		if ($date_start <= $date_now && $date_now<= $date_stop){
			if(!empty($result)){
				$session = array(
					'akses' => $akses,
					'nama' => $result[0]['nama_dvi']
				);
				$this->session->set_userdata($session);
				$this->load->view('dashboard/header', $session);
				$this->load->view('dashboard', $session);
				$this->load->view('dashboard/footer');
			}
			else redirect('welcome/dvi');	
		}
		else redirect('welcome/dvi');
	}
	public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('keterangan', 'telah logout');
        redirect('welcome');
    }
}
