<?php
class Pizza extends CI_Controller
{
function index()
 {
 $this->load->view('pizzeria/index');
 }
 
function events()
 
 {
  $this->load->view('pizzeria/events');
 }
 
 function about()
 
 {
  $this->load->view('pizzeria/about');
 }
 
  function panel()

 {
  $this->load->view('pizzeria/panel');
 }
 
 }
