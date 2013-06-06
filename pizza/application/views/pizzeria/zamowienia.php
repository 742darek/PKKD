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
&nbsp; <h2>Menu</h2>




<ul>

<li><a href="<?php echo site_url('orders/gotowe');?>">Zamówienia (gotowe pizze)</a></li>
<li><a href="<?php echo site_url('orders/kreator');?>">Zamówienia (pizze z kreatora)</a></li>


</ul>

	</div>

</div>
