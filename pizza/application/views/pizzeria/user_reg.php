<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
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
&nbsp;<h2>Rejestracja nowego użytkownika </h2>
<p>Rejestracja w naszym serwisie jest niezbędna aby móc wybrać lub skomponować pizze oraz złożyć zamówienie</p>




<p>&nbsp;</p>




	
		
			<?php $this->load->helper('form'); ?>
<?php echo form_open('rejestracja'); ?>
    <ul id="rejestracja">
        <ul>

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
