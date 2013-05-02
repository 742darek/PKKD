<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>

<meta http-equiv="content-type" content="text/html" charset="utf-8" />

<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>application/views/pizzeria/pom.css" />








<div id="avmenu">
<h2 class="hide">Menu:</h2>
<ul>
<li><a href="<?php echo site_url('pizza/index');?>">Strona Główna</a></li>

<?php $this->load->view('pizzeria/leftmenu'); ?>



</ul>
</div>

<div id="extras">

<?php $this->load->view('pizzeria/extras'); ?>

</div>

<div id="content">
&nbsp;<h2>Jesteś już zalogowany ! </h2>


<p>Nie musisz logować się ponownie</p>







<p>&nbsp;</p>





		
		

</div>
