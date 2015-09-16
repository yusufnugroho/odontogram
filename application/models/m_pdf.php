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
      $query = $this->db->query("select * from gigi, rekam_pasien where gigi.id_rekam = rekam_pasien.id_rekam and rekam_pasien.id_rekam = $id_rekam");          
      $data = $query->result_array();
      $this->generatePdf2($kolom, $data,"Laporan Rekam Medis");
  }
  
  private function generatepdf2($header,$data,$judul){
    //load library tcpdf
    $this->load->library('tcpdf/CustomHeader');
    // create new PDF document
    $pdf = new CustomHeader(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Febrian Reza');
    $pdf->SetTitle('LATIHAN PDF');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
        
    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 011', 
       PDF_HEADER_STRING);
        
    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
     
    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
      
    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        
    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        
    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
         require_once(dirname(__FILE__).'/lang/eng.php');
         $pdf->setLanguageArray($l);
    }
    // set font
    $pdf->SetFont('helvetica', '', 12);
    // add a page
    $pdf->AddPage();
    //judul
    $pdf->Cell(0,20, $judul, 0, 1, 'C', 0, '',0,FALSE);
    // print colored table
    $pdf->ColoredTable($header, $data);        
    // close and output PDF document
    $pdf->Output('Lap.pdf', 'I');
  }
}