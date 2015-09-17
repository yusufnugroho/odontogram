<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_pdf extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function cetakpdf($id_rekam){
      $judul = 'Rekam Medis';
      $kolom = array(
                    "nama" => "Nama",
                    "id_rekam" => "Rekam",
                    "g11" => "Gigi 11",
                    "g12" => "Gigi 12",
                    "g13" => "Gigi 13",
                    "g14" => "Gigi 14",
                    "g15" => "Gigi 15",
                    "g16" => "Gigi 16",
                    "g17" => "Gigi 17",
                    "g18" => "Gigi 18",
                    "g21" => "Gigi 21",
                    "g22" => "Gigi 22",
                    "g23" => "Gigi 23",
                    "g24" => "Gigi 24",
                    "g25" => "Gigi 25",
                    "g26" => "Gigi 26",
                    "g27" => "Gigi 27",
                    "g28" => "Gigi 28",
                    "g31" => "Gigi 31",
                    "g32" => "Gigi 32",
                    "g33" => "Gigi 33",
                    "g34" => "Gigi 34",
                    "g35" => "Gigi 35",
                    "g36" => "Gigi 36",
                    "g37" => "Gigi 37",
                    "g38" => "Gigi 38",
                    "g41" => "Gigi 41",
                    "g42" => "Gigi 42",
                    "g43" => "Gigi 43",
                    "g44" => "Gigi 44",
                    "g45" => "Gigi 45",
                    "g46" => "Gigi 46",
                    "g47" => "Gigi 47",
                    "g48" => "Gigi 48",
                    "g51" => "Gigi 51",
                    "g52" => "Gigi 52",
                    "g53" => "Gigi 53",
                    "g54" => "Gigi 54",
                    "g55" => "Gigi 55",
                    "g61" => "Gigi 61",
                    "g62" => "Gigi 62",
                    "g63" => "Gigi 63",
                    "g64" => "Gigi 64",
                    "g65" => "Gigi 65",
                    "g71" => "Gigi 71",
                    "g72" => "Gigi 72",
                    "g73" => "Gigi 73",
                    "g74" => "Gigi 74",
                    "g75" => "Gigi 75",
                    "g81" => "Gigi 81",
                    "g82" => "Gigi 82",
                    "g83" => "Gigi 83",
                    "g84" => "Gigi 84",
                    "g85" => "Gigi 85",
                    "occlusi" => "Occlusi",
                    "torus_palatinus" => "Torus Palatinus",
                    "torus_mandibularis" => "Torus Mandibularis",
                    "palatum" => "Palatum",
                    "diastema" => "Diastema",
                    "gigi_anomali" => "Gigi Anomali",
                    "lain_lain" => "Lain-lain"
                );
      //query
      $query = $this->db->query("select * from gigi, rekam_pasien, pasien where gigi.id_rekam = rekam_pasien.id_rekam and rekam_pasien.id_pasien = pasien.id_pasien and rekam_pasien.id_rekam = $id_rekam");          
      $data = $query->result_array();
      return $data;
  }
}