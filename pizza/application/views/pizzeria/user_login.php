<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>application/views/pizzeria/pom.css" />
<div id="avmenu">
<h2 class="hide">Menu:</h2>
<ul>
<li><a href="<?php echo site_url('pizza/index');?>">Strona Główna</a></li>

<?php $this->load->view('pizzeria/leftmenu'); ?>

</ul>
</div>

<div id="extras">
<h3>&nbsp;<br />
  Adres:</h3>
<p>Olsztyn
ul. Jana Pawła II Hala Główna 3/4 tel.798666999</p>





</div>

<div id="content">
&nbsp;<h2>Witamy na naszej stronie ! </h2>
<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut </p>

<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>

<p>&nbsp;</p>




	
		
			<legend>Logowanie</legend>     
			<!-- Otwieramy formularz za pomocÄ… funkcji z helpera Form. -->    	
			<?php echo form_open(); ?>
				<!-- 
					RÃłwnieÅ¼ do definicji pÃłl formularza moÅ¼emy uÅ¼yÄ‡ funkcji z helpera Form, 
					ale w tym przypadku nie widaÄ‡ specjalnych korzyÅ›ci dla ktÃłrych musielibyÅ›my to robiÄ‡, 
					dlatego zostaniemy przy "normalnym" zapisie.
				-->
				
				<input type="text" id="usernaname" class="span4" name="username" placeholder="Login">
				<input type="password" id="password" class="span4" name="password" placeholder="Hasło">
				<button type="submit" name="submit" class="btn btn-info btn-block">Zaloguj</button>
			<!-- Zamykamu formularz. -->
			<?php echo form_close(); ?>
			
			


</div>
