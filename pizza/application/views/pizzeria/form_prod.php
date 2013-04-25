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
<h3>&nbsp;<br />
  Adres:</h3>
<p>Olsztyn
ul. Jana Pawła II Hala Główna 3/4 tel.798666999</p>




</div>

<div id="content">
&nbsp;     <center><h2>Panel admina  </h2></center>





<p>&nbsp;</p>




	
		
<?php $this->load->helper('form'); ?>
<?php echo form_open('dodawanie'); ?>
    <div id="dodawanie"><ul>

            <li>
                <label for="description">Podaj nazwę</label><br>
                <input type="text" name="description" value="<?php echo set_value('description'); ?>" />
                <?php echo form_error('description'); ?>
           </li>

           <li>
                <label for="qty">Podaj ilość</label><br>
                <input type="text" name="qty" value="<?php echo set_value('qty'); ?>" />
                <?php echo form_error('qty'); ?>
            </li>
           <li>
                <label for="price">Podaj cenę</label><br>
                <input type="price" name="price" value="<?php echo set_value('price'); ?>" />
                <?php echo form_error('price'); ?>
            </li>
            
            <li>
                <label for="status">Podaj status</label><br>
                  <input type="text" name="status" value="<?php echo set_value('status'); ?>" />
                <?php echo form_error('status'); ?>
            </li>
        <ul>
            <h3 class="submit">
                <input type="submit" value="Dodaj" />
            </h3>
        </ul>
    </ul>
<?php echo form_close(); ?></div>
        

</div>
