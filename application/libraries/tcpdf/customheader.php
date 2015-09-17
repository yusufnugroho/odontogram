<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Include the main TCPDF library (search for installation path).
require_once('tcpdf.php');

class CustomHeader extends TCPDF {
    /* custom table */
    // Load table data from file
    public function LoadData($file) {
        // Read file lines
        $lines = file($file);
        $data = array();
        foreach($lines as $line) {
            $data[] = explode(';', chop($line));
        }
        return $data;
    }

    // Colored table
    public function ColoredTable($header,$data) {
        // Colors, line width and bold font
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(0.3);
        $this->SetFont('', 'B');
        // Header
        $w = array(40, 35, 40, 45);
        
        $num_headers = count($header);
        switch($num_headers){
            case 1:{$w = array(180);break;}
            case 2:{$w = array(90,90);break;}
            case 3:{$w = array(60,60,60);break;}    
        }
        $i = 0;
        foreach($header as $row=>$value) {
            $this->Cell($w[$i], 7, $value, 1, 0, 'C', 1);
            $i++;
        }
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = 0;
        $i = 0;
        $kolom = count($header);
        
        for($i = 0; $i < count($data); $i++) {
            $c = 0;
            foreach($data[$i] as $row=>$key){
                
                //format tanggal ditengah
                if($row == "tanggal"){
                    $this->Cell($w[$c], 6,$key, 'LR', 0,'C',$fill);
                } else {
                    //format jumlah uang dikanan
                    if($row == "jumlah"){
                        $this->Cell($w[$c], 6,$key, 'LR', 0, 'R',$fill);    
                    } else {
                        $this->Cell($w[$c], 6,$key, 'LR', 0, 'L',$fill);
                    }    
                } 
                $c++;
            }
            $this->Ln();
               $fill=!$fill;         
        }
        $this->Cell(array_sum($w), 0, '', 'T');
    }
}
