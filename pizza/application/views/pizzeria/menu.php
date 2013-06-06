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

 <p>Minimalne zamówienie internetowe wynosi 10,00 zł. Przy zamówieniu powyżej 40,00 zł dostawa gratis.
Wszelkie uwagi dotyczące jakości naszych usług prosimy kierować pod numer 798-666-999</p>



<ul>

<li><a href="<?php echo site_url('products');?>">Zamów gotową pizzę!</a></li>
<li><a href="<?php echo site_url('products/ingredients');?>">Skomponuj własną pizzę!</a></li>


</ul>

	</div>

</div>


		
