<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>

<meta http-equiv="content-type" content="text/html" charset="iso-8859-2" />

<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>application/views/pizzeria/pom.css" />



<script type="text/javascript" src="<?PHP echo base_url(); ?>application/galeria/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?PHP echo base_url(); ?>application/galeria/js/lightbox.js"></script>
<link rel="stylesheet" href="<?PHP echo base_url(); ?>application/galeria/css/lightbox.css" type="text/css" media="screen" />




<div id="avmenu">
<h2 class="hide">Menu:</h2>
<ul>
<li><a href="<?php echo site_url('pizza/index');?>">Strona G³ówna</a></li>

<?php $this->load->view('pizzeria/leftmenu'); ?>


</ul>
</div>

<div id="extras">
<h3>&nbsp;<br />
  Adres:</h3>
<p>Olsztyn
ul. Jana Paw³a II Hala G³ówna 3/4 tel.798666999</p>

</div>

<div id="content">




<div class="section" id="example">

<h3>Image set</h3>

<div class="imageRow">
  	<div class="set">
  	  <div class="single first"> 
<?PHP echo $galeria; ?>








  	</div>
  </div>

</div>  	

</div>  	








<p>&nbsp;</p>

		
		

</div>
