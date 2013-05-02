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
&nbsp;<h2>Rejestracja nowego użytkownika </h2>
<p>Rejestracja w naszym serwisie jest niezbędna aby móc wybrać lub skomponować pizze oraz złożyć zamówienie</p>




<p>&nbsp;</p>




	<div id="rejestracja"> <?php $this->load->helper('form'); ?>
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
            <li>
                <label for="adres">Podaj nazwę ulicy</label><br>
                <input type="adres" name="adres" />
                <?php echo form_error('adres'); ?>
            </li>
        <ul>
            <h3 class="submit">
                <div class="submit"><input type="submit" value="Rejestracja" /></div>
                
            </h3>
        </ul>
    </ul>
<?php echo form_close(); ?></div>
		
		

</div>
