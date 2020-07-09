<?php

require ABSPATH.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

if (isset($_GET['download'])){

	$html2pdf = new Html2Pdf();
	$html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
	$html2pdf->output();
}

