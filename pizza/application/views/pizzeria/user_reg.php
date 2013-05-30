<div id="avmenu">
<h2 class="hide">Menu:</h2>
<ul>


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



<?php $this->load->helper('form'); ?>
<?php echo form_open('rejestracja'); ?>
    
        

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
         
        
  
<?php echo form_close(); ?>


		 <h3 class="submit">
                
                <button type="submit" name="submit" class="button">Rejestracja</button>
                
            </h3>
		

</div>
