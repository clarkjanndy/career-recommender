<?php
require('fpdf/fpdf.php');

class PDF extends FPDF {

	function __construct() {
		parent::__construct('L','mm', 'Letter');
	}

    // Page header
	function Header() {


        // Add logo to page
		$this->Image('images/reasic.png', 10, 5, 20);

        // Set font family to Arial bold 
		$this->SetFont('Arial','B',20);

        //Move to the Right
		$this->Cell(60);

        // Header
		$this->Cell(10, 10,'R.I.A.S.E.C Test Result',0 ,0,'C');

        // Line break
		$this->Ln(30);
	}

    // Page footer
	function Footer() {

        // Position at 1.5 cm from bottom
		$this->SetY(-20);

		$this->Image('images/logo.png', 90, 198,5);

        // Arial italic 8
		$this->SetFont('Arial','I',12);


		$this->Cell(0,10,'Web Based Career Recommender System',0,0,'C');
	}
}



?>