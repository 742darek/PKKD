<?php
class Pizza extends CI_Controller
{

function index(){

$this->load->view('pizzeria/header');
$this->load->view('pizzeria/start');
$this->load->view('pizzeria/footer');

}



function about()
	{
$this->load->view('pizzeria/header');
$this->load->view('pizzeria/about');
$this->load->view('pizzeria/footer');
	}




function Galeria()
	{
$this->load->view('pizzeria/header');
$this->load->view('pizzeria/galeria');
$this->load->view('pizzeria/footer');
	}



}