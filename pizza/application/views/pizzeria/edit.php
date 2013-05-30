<div id="avmenu">
<h2 class="hide">Menu:</h2>
<ul>
<?php $this->load->view('pizzeria/leftmenu')?>
</ul>
</div>

<div id="extras">

<?php $this->load->view('pizzeria/extras'); ?>

</div>    
<div id="content">

	<div class="panel">
&nbsp; <h2>Panel admina</h2>




<ul>

<li><a href="<?php echo site_url('get/ready');?>">Gotowe pizze</a></li>
<li><a href="<?php echo site_url('get/ready_ingr');?>">Składniki</a></li>

</ul>

	</div>

</div>


		
