<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>application/views/pizzeria/pom.css" />

<title>Pizzeria</title>

</head>

<body><div id="wrap">

<div id="header"><br />

<h3>PKKD</h3>
<p><strong>"Pizza najlepsza w mieście "</strong><br />
 </p>
</div>





<img src="<?PHP echo base_url(); ?>application/views/pizzeria/images/obraz.png"width="790" height="228" alt=""  />



<div id="avmenu">
<h2 class="hide">Menu:</h2>
<ul>
<li><a href="<?php echo site_url('pizza/index');?>">Witamy</a></li>




<?php $this->load->view('pizzeria/leftmenu'); ?>

</ul>



</div>

<div id="extras">
<h3>&nbsp;<br />
  More Info:</h3>
<p> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</p>




</div>

<div id="content">
&nbsp;<h2><img src="images/ill_title.jpg" alt="ill title" width="63" height="20" />Zdarzenia</h2>
<p>Dnia 18 marca 2013r otworzyliśmy Pizzerię przy ulicy Bogdana Miłoczyńskiego 22 w Olsztynie! Serdecznie zapraszamy!</p>

<p><img src="images/ill1.jpg" height="100" width="125" class="left" alt="ill_1" />"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>

<p>&nbsp;</p>

<?php $this->load->view('pizzeria/news'); ?>
</div>

<div id="footer">
Copyright &copy; 2013 (PKKD)</div>

</div>
</body>
</html>
