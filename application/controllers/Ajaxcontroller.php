<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends CI_Controller {
	public function get_odontogram(){
		echo "haha";
		$this->load->view("rekam/odontogram");
	}
	public function get_rekam(){
		$this->load->view('pasien/rekam');
	}
	public function get_detail_odon(){
		$this->load->model('m_main');
		$data['post'] = $_POST;
		$data['permukaan_gigi'] = $this->m_main->getall('lib_permukaan_gigi');
		$data['keadaan_gigi'] = $this->m_main->getall('lib_keadaan_gigi');
		$data['bahan_restorasi'] = $this->m_main->getall('lib_bahan_restorasi');
		$data['restorasi'] = $this->m_main->getall('lib_restorasi');
		$data['protesa'] = $this->m_main->getall('lib_protesa');
		
		$data['permukaan_gigi'] = $data['permukaan_gigi'];
		$data['keadaan_gigi'] = $data['keadaan_gigi'];
		$data['bahan_restorasi'] = $data['bahan_restorasi'];
		$data['restorasi'] = $data['restorasi'];
		$data['protesa'] = $data['protesa'];
		
		$this->load->view("rekam/detail_odon", $data);
	}

	public function detail_odon_steady(){
		?>
		<div class="form-body pal">
            <div class="alert alert-warning">
                Pilih salah satu gigi di samping!
            </div>
        </div>
        <div class="form-actions text-right pal">
            <button type="submit" class="btn btn-primary" id="detail_submit" style="display: none">
                Tambah Detail</button>
        </div>
		<?php
	}
	public function get_notif_success(){
		?>
		<div class="form-body pal">
            <div class="alert alert-success">
                Berhasil Menambahkan Record
            </div>
        </div>
		<?php
	}
	public function get_notif_fail(){
		?>
		<div class="form-body pal">
            <div class="alert alert-danger">
                Gagal Menambahkan Record
            </div>
        </div>
		<?php
	}
	public function get_detail_rekam(){
		$this->load->model('m_main');
		$select_gigi = array(
			'id_rekam' => substr($_POST['id_rekam'], 7),
			);
		$data['res_gigi'] = $this->m_main->select_where('gigi', $select_gigi);
		$this->load->view("pasien/detail_rekam", $data);
	}
	public function get_detail_perawatan()
	{
		$this->load->model('m_main');
		$select_rawat = array(
			'id_perawatan' => substr($_POST['id_perawatan'], 7),
			);
		$data['res_perawatan'] = $this->m_main->select_where('perawatan', $select_rawat);
		$this->load->view("pasien/detail_perawatan", $data);

	}
}