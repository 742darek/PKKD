<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>

<meta http-equiv="content-type" content="text/html" charset="iso-8859-2" />
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>application/views/pizzeria/pom.css" />
<div id="avmenu">
<h2 class="hide">Menu:</h2>
<ul>
<li><a href="<?php echo site_url('pizza/index');?>">Strona G��wna</a></li>

<?php $this->load->view('pizzeria/leftmenu'); ?>

</ul>
</div>

<div id="extras">
<h3>&nbsp;<br />
  Adres:</h3>
<p>Olsztyn
ul. Jana Paw�a II Hala G��wna 3/4 tel.798666999</p>




</div>

<div id="content">
&nbsp;<h2>Panel admina (tutaj sie b�dzie dodawa�o sk�adniki do pizzy, edytowa�o to itd) </h2>





<p>&nbsp;</p>




	
		
			<?php $this->load->helper('form'); ?>
<?php echo form_open('dodawanie'); ?>
    <ul id="dodawanie">
        <ul>

            <li>
                <label for="nazwa">Podaj nazw�</label><br>
                <input type="text" name="nazwa" value="<?php echo set_value('nazwa'); ?>" />
                <?php echo form_error('nazwa'); ?>
           </li>
           <li>
                <label for="typ">Podaj typ</label><br>
                <input type="text" name="typ" value="<?php echo set_value('typ'); ?>" />
                <?php echo form_error('typ'); ?>
            </li>
			
			<li>
                <label for="cena">Wpisz cen�</label><br>
                <input type="cena" name="cena" />
                <?php echo form_error('cena'); ?>
            </li>
        <ul>
            <h3 class="submit">
                <input type="submit" value="Dodaj" />
            </h3>
        </ul>
    </ul>
<?php echo form_close(); ?>

</div>