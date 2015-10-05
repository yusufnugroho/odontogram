<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->helper('url');
	}

	public function download($id_rekam)
	{
		$this->load->library('Pdf');
        $this->load->model('m_pdf');
   		$this->m_pdf->cetakpdf($id_rekam);
	}

	public function create_pdf($id_rekam) {
	$this->load->library('pdf');
    $this->load->model('m_pdf');
	$data = $this->m_pdf->cetakpdf($id_rekam);
    //============================================================+
    // File name   : example_001.php
    // Begin       : 2008-03-04
    // Last Update : 2013-05-14
    //
    // Description : Example 001 for TCPDF class
    //               Default Header and Footer
    //
    // Author: Nicola Asuni
    //
    // (c) Copyright:
    //               Nicola Asuni
    //               Tecnick.com LTD
    //               www.tecnick.com
    //               info@tecnick.com
    //============================================================+
 
    /**
    * Creates an example PDF TEST document using TCPDF
    * @package com.tecnick.tcpdf
    * @abstract TCPDF - Example: Default Header and Footer
    * @author Nicola Asuni
    * @since 2008-03-04
    */
 
    // create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    
 
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Dokter');
    $pdf->SetTitle('Rekam Medis');
    $pdf->SetSubject('Rekam Medis Gigi');
    $pdf->SetKeywords('Rekam, Medis, Gigi, Pasien, Dokter');   
 
    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
    $pdf->setFooterData(array(0,64,0), array(0,64,128)); 
 
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
 
    // ---------------------------------------------------------    
 
    // set default font subsetting mode
    $pdf->setFontSubsetting(true);   
 
    // Set font
    // dejavusans is a UTF-8 Unicode font, if you only need to
    // print standard ASCII chars, you can use core fonts like
    // helvetica or times to reduce file size.
    $pdf->SetFont('dejavusans', '', 14, '', true);   
 
    // Add a page
    // This method has several options, check the source code documentation for more information.
    $pdf->AddPage(); 
 
    $identitas =
    '<table>
    <tr> <th> Nama: </th> <td> '.$data[0]['nama_pasien'].'</td><th>Tanggal lahir:</th><td>'.$data[0]['tanggal_lahir_pasien'].'</td></tr>
    <tr> <th> Jenis Kelamin: </th> <td> '.$data[0]['jk_pasien'].'</td><th>Tempat lahir:</th><td>'.$data[0]['tempat_lahir_pasien'].'</td></tr>
    <tr> <th> KTP/ SIM: </th> <td> '.$data[0]['ktp_pasien'].'</td><th>Telepon Rumah:</th><td>'.$data[0]['telepon_rumah_pasien'].'</td></tr>
    </table>
    <br>
    ';
    $pdf->writeHTML($identitas, true, false, true, false, '');
    // set text shadow effect
    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
 
    // Set some content to print
    $html = <<<EOD
    <h1 style='text-alignmenet:center'>Rekam Medis</h1>
EOD;
 	$pdf->Image(base_url().'assets/images/odontogram.jpg', 15, 63, 180, 90, 'JPG', '#', '', true, 150, '', false, false, 1, false, false, false);
    // Print text using writeHTMLCell()
    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);  
 	//print_r($data); 
	// create some HTML content
$htmla = '<style>
    td {
        border: 2px solid black;
        background-color: #ffffee;
    }
    th {
        border: 2px solid black;
        background-color: #ffffee;
    }
    </style>
<table>
    ';
    $count = 1;
foreach ($data as $row) {
        # code...
    $htmla.= '<br pagebreak="true">Rekam Ke-'.$count.'<br>Tanggal Rekam: '.$row['tanggal_rekam'].'<br>
    <br> Gigi 1 dan 2<br>
    <tr> <th> 11 </th> <td> '.$row['G11'].'</td> <th> 21 </th> <td> '.$row['G21'].'</td></tr>
    <tr> <th> 12 </th> <td> '.$row['G12'].'</td> <th> 22 </th> <td> '.$row['G22'].'</td></tr>
    <tr> <th> 13 </th> <td> '.$row['G13'].'</td> <th> 23 </th> <td> '.$row['G23'].'</td></tr>
    <tr> <th> 14 </th> <td> '.$row['G14'].'</td> <th> 24 </th> <td> '.$row['G24'].'</td></tr>
    <tr> <th> 15 </th> <td> '.$row['G15'].'</td> <th> 25 </th> <td> '.$row['G25'].'</td></tr>
    <tr> <th> 16 </th> <td> '.$row['G16'].'</td> <th> 26 </th> <td> '.$row['G26'].'</td></tr>
    <tr> <th> 17 </th> <td> '.$row['G17'].'</td> <th> 27 </th> <td> '.$row['G27'].'</td></tr>
    <tr> <th> 18 </th> <td> '.$row['G18'].'</td> <th> 28 </th> <td> '.$row['G28'].'</td></tr>
    <br>Gigi 4 dan 3<br>
    <tr> <th> 41 </th> <td> '.$row['G41'].'</td> <th> 31 </th> <td> '.$row['G31'].'</td></tr>
    <tr> <th> 42 </th> <td> '.$row['G42'].'</td> <th> 32 </th> <td> '.$row['G32'].'</td></tr>
    <tr> <th> 43 </th> <td> '.$row['G43'].'</td> <th> 33 </th> <td> '.$row['G33'].'</td></tr>
    <tr> <th> 44 </th> <td> '.$row['G44'].'</td> <th> 34 </th> <td> '.$row['G34'].'</td></tr>
    <tr> <th> 45 </th> <td> '.$row['G45'].'</td> <th> 35 </th> <td> '.$row['G35'].'</td></tr>
    <tr> <th> 46 </th> <td> '.$row['G46'].'</td> <th> 36 </th> <td> '.$row['G36'].'</td></tr>
    <tr> <th> 47 </th> <td> '.$row['G47'].'</td> <th> 37 </th> <td> '.$row['G37'].'</td></tr>
    <tr> <th> 48 </th> <td> '.$row['G48'].'</td> <th> 38 </th> <td> '.$row['G38'].'</td></tr>
    <br> Gigi 5 dan 6 <br>
    <tr> <th> 51 </th> <td> '.$row['G51'].'</td> <th> 61 </th> <td> '.$row['G61'].'</td></tr>
    <tr> <th> 52 </th> <td> '.$row['G52'].'</td> <th> 62 </th> <td> '.$row['G62'].'</td></tr>
    <tr> <th> 53 </th> <td> '.$row['G53'].'</td> <th> 63 </th> <td> '.$row['G63'].'</td></tr>
    <tr> <th> 54 </th> <td> '.$row['G54'].'</td> <th> 64 </th> <td> '.$row['G64'].'</td></tr>
    <tr> <th> 55 </th> <td> '.$row['G55'].'</td> <th> 65 </th> <td> '.$row['G65'].'</td></tr>
    <br> Gigi 8 dan 7 <br>
    <tr> <th> 81 </th> <td> '.$row['G81'].'</td> <th> 71 </th> <td> '.$row['G71'].'</td></tr>
    <tr> <th> 82 </th> <td> '.$row['G82'].'</td> <th> 72 </th> <td> '.$row['G72'].'</td></tr>
    <tr> <th> 83 </th> <td> '.$row['G83'].'</td> <th> 73 </th> <td> '.$row['G73'].'</td></tr>
    <tr> <th> 84 </th> <td> '.$row['G84'].'</td> <th> 74 </th> <td> '.$row['G74'].'</td></tr>
    <tr> <th> 85 </th> <td> '.$row['G85'].'</td> <th> 75 </th> <td> '.$row['G75'].'</td></tr>'.
$pdf->lastPage();$count++;;

    }
$htmlafooter = '</table>';
// output the HTML content
$pdf->writeHTML($htmla . $htmlafooter, true, false, true, false, '');

    // ---------------------------------------------------------    
 
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output('Odontogram-'.$data[0]['id_rekam'].'.pdf', 'I');    
 
    //============================================================+
    // END OF FILE
    //============================================================+
    }
}
