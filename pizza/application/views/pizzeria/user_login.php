<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>application/views/pizzeria/pom.css" />
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
&nbsp;<h2>Witamy na naszej stronie ! </h2>
<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut </p>

<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>

<p>&nbsp;</p>




	
		
			<legend>Logowanie</legend>     
			<!-- Otwieramy formularz za pomocą funkcji z helpera Form. -->    	
			<?php echo form_open(); ?>
				<!-- 
					Również do definicji pól formularza możemy użyć funkcji z helpera Form, 
					ale w tym przypadku nie widać specjalnych korzyści dla których musielibyśmy to robić, 
					dlatego zostaniemy przy "normalnym" zapisie.
				-->
				<input type="email" id="email" class="span4" name="email" placeholder="Email">
				<input type="password" id="password" class="span4" name="password" placeholder="Hasło">
				<button type="submit" name="submit" class="btn btn-info btn-block">Zaloguj</button>
			<!-- Zamykamu formularz. -->
			<?php echo form_close(); ?>
			
			
			<?php if ($this->session->userdata('user_id')): ?>
                <li><a href="<?php echo site_url('users/logout'); ?>">Wyloguj</a></li>
             
              <?php endif; ?>

</div>






