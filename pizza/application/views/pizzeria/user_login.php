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

&nbsp;<h2>Logowanie </h2>


<p>Zaloguj się aby móc skorzystać z koszyka</p>


<div class="logowanie">
			     	
			<?php echo form_open(); ?>
				
				
				<input type="text" id="usernaname" class="span4" name="username" placeholder="Login">
				<input type="password" id="password" class="span4" name="password" placeholder="Hasło">
				<button type="submit" name="submit" class="button">Zaloguj</button>
			
			<?php echo form_close(); ?>

</div>



	
		
			
			


</div>
