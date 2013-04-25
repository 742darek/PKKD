<?php
class Pizza extends CI_Controller
{

function index(){

$this->load->view('pizzeria/header');
$this->load->view('pizzeria/start');
$this->load->view('pizzeria/footer');




}




function Galeria()
	{
$this->load->view('pizzeria/header');

	$galeria = '';
	$katalog = @dir('application/galeria/foto/') or die ("Nie można listować");
	while ($plik_kat = $katalog->read())
		{
		IF(strpos($plik_kat, '.jpg') or strpos($plik_kat, '.png') or strpos($plik_kat, '.gif'))
			{
			$galeria .= $this->load->view('pizzeria/element', array('plik' => $plik_kat), True);
			}
		}
	$katalog->close();
	$this->load->view('pizzeria/galeria', array('galeria' =>$galeria));
	$this->load->view('pizzeria/footer');
	}



}