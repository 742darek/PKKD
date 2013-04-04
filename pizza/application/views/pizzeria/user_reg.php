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




	
		
			<?php $this->load->helper('form'); ?>
<?php echo form_open('rejestracja'); ?>
    <ul id="rejestracja">
        <ul>
            <h3>Rejestracja</h3>
            <li>
                <label for="username">Podaj nazwę użytkownika</label><br>
                <input type="text" name="username" value="<?php echo set_value('username'); ?>" />
                <?php echo form_error('username'); ?>
           </li>
           <li>
                <label for="email">Wpisz swój adres e-mail</label><br>
                <input type="text" name="email" value="<?php echo set_value('email'); ?>" />
                <?php echo form_error('email'); ?>
            </li>
			
			<li>
                <label for="password">Wpisz hasło (min. 6 znaków!)</label><br>
                <input type="password" name="password" />
                <?php echo form_error('password'); ?>
            </li>
        <ul>
            <h3 class="submit">
                <input type="submit" value="Rejestracja" />
            </h3>
        </ul>
    </ul>
<?php echo form_close(); ?>

</div>






