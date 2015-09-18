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
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
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
 
    // set text shadow effect
    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
 
    // Set some content to print
    $html = <<<EOD
    <h1 style='text-alignmenet:center'>Rekam Medis</h1>
EOD;
 	$pdf->Image(base_url().'assets/images/odontogram.jpg', 15, 38, 180, 90, 'JPG', '#', '', true, 150, '', false, false, 1, false, false, false);
    // Print text using writeHTMLCell()
    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);  
 	//print_r($data); 
	// create some HTML content
$htmla = '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table>
	<tr> <th> Nama </th> <td> '.$data[0]['nama_pasien'].'</td><td></td><td></td></tr>
	<tr> <th> ID Rekam </th> <td> '.$data[0]['id_rekam'].'</td><td></td><td></td></tr>
	<tr> <td colspan=4></td> </tr>
	<tr> <td colspan=4>Gigi 1 dan 2</td> </tr>
	<tr> <th> G11 </th> <td> '.$data[0]['G11'].'</td> <th> G21 </th> <td> '.$data[0]['G21'].'</td></tr>
	<tr> <th> G12 </th> <td> '.$data[0]['G12'].'</td> <th> G22 </th> <td> '.$data[0]['G22'].'</td></tr>
	<tr> <th> G13 </th> <td> '.$data[0]['G13'].'</td> <th> G23 </th> <td> '.$data[0]['G23'].'</td></tr>
	<tr> <th> G14 </th> <td> '.$data[0]['G14'].'</td> <th> G24 </th> <td> '.$data[0]['G24'].'</td></tr>
	<tr> <th> G15 </th> <td> '.$data[0]['G15'].'</td> <th> G25 </th> <td> '.$data[0]['G25'].'</td></tr>
	<tr> <th> G16 </th> <td> '.$data[0]['G16'].'</td> <th> G26 </th> <td> '.$data[0]['G26'].'</td></tr>
	<tr> <th> G17 </th> <td> '.$data[0]['G17'].'</td> <th> G27 </th> <td> '.$data[0]['G27'].'</td></tr>
	<tr> <th> G18 </th> <td> '.$data[0]['G18'].'</td> <th> G28 </th> <td> '.$data[0]['G28'].'</td></tr>
	<tr> <td colspan=4></td> </tr>
	<tr> <td colspan=4>Gigi 3 dan 4</td> </tr>
	<tr> <th> G31 </th> <td> '.$data[0]['G31'].'</td> <th> G41 </th> <td> '.$data[0]['G41'].'</td></tr>
	<tr> <th> G32 </th> <td> '.$data[0]['G32'].'</td> <th> G42 </th> <td> '.$data[0]['G42'].'</td></tr>
	<tr> <th> G33 </th> <td> '.$data[0]['G33'].'</td> <th> G43 </th> <td> '.$data[0]['G43'].'</td></tr>
	<tr> <th> G34 </th> <td> '.$data[0]['G34'].'</td> <th> G44 </th> <td> '.$data[0]['G44'].'</td></tr>
	<tr> <th> G35 </th> <td> '.$data[0]['G35'].'</td> <th> G45 </th> <td> '.$data[0]['G45'].'</td></tr>
	<tr> <th> G36 </th> <td> '.$data[0]['G36'].'</td> <th> G46 </th> <td> '.$data[0]['G46'].'</td></tr>
	<tr> <th> G37 </th> <td> '.$data[0]['G37'].'</td> <th> G47 </th> <td> '.$data[0]['G47'].'</td></tr>
	<tr> <th> G38 </th> <td> '.$data[0]['G38'].'</td> <th> G48 </th> <td> '.$data[0]['G48'].'</td></tr>
	<tr> <td colspan=4></td> </tr>
	<tr> <td colspan=4>Gigi 5 dan 6</td> </tr>
	<tr> <th> G51 </th> <td> '.$data[0]['G51'].'</td> <th> G61 </th> <td> '.$data[0]['G61'].'</td></tr>
	<tr> <th> G52 </th> <td> '.$data[0]['G52'].'</td> <th> G62 </th> <td> '.$data[0]['G62'].'</td></tr>
	<tr> <th> G53 </th> <td> '.$data[0]['G53'].'</td> <th> G63 </th> <td> '.$data[0]['G63'].'</td></tr>
	<tr> <th> G54 </th> <td> '.$data[0]['G54'].'</td> <th> G64 </th> <td> '.$data[0]['G64'].'</td></tr>
	<tr> <th> G55 </th> <td> '.$data[0]['G55'].'</td> <th> G65 </th> <td> '.$data[0]['G65'].'</td></tr>
	<tr> <td colspan=4></td> </tr>
	<tr> <td colspan=4>Gigi 6 dan 7</td> </tr>
	<tr> <th> G71 </th> <td> '.$data[0]['G71'].'</td> <th> G81 </th> <td> '.$data[0]['G81'].'</td></tr>
	<tr> <th> G72 </th> <td> '.$data[0]['G72'].'</td> <th> G82 </th> <td> '.$data[0]['G82'].'</td></tr>
	<tr> <th> G73 </th> <td> '.$data[0]['G73'].'</td> <th> G83 </th> <td> '.$data[0]['G83'].'</td></tr>
	<tr> <th> G74 </th> <td> '.$data[0]['G74'].'</td> <th> G84 </th> <td> '.$data[0]['G84'].'</td></tr>
	<tr> <th> G75 </th> <td> '.$data[0]['G75'].'</td> <th> G85 </th> <td> '.$data[0]['G85'].'</td></tr>
</table>';

// output the HTML content
$pdf->writeHTML($htmla, true, false, true, false, '');

    // ---------------------------------------------------------    
 
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output('Odontogram-'.$data[0]['id_rekam'].'.pdf', 'I');    
 
    //============================================================+
    // END OF FILE
    //============================================================+
    }
}
