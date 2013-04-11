<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>

<meta http-equiv="content-type" content="text/html" charset="iso-8859-2" />

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
&nbsp;<h2>Witamy na naszej stronie ! </h2>
<p>Pizza to potrawa kuchni włoskiej, obecnie szeroko rozpowszechniona na całym świecie. W wersji podstawowej jest to płaski placek z wytrawnego ciasta drożdżowego (focaccia), posmarowany sosem pomidorowym, posypany tartym serem mozzarella i ziołami, pieczony w bardzo mocno nagrzanym piecu.</p>

<p>Pizzę podaje się na gorąco, lecz rozpowszechnione jest jedzenie jej również na zimno. Tradycyjnym miejscem spożywania pizzy są pizzerie, lokale gastronomiczne specjalizujące się w przyrządzaniu i serwowaniu pizzy. </p>

<p>Bazując na oryginalnych recepturach, używając naturalnych składników najwyższej jakości, komponujemy dania wyjątkowe, pełne ciekawych pomysłów i nowych smaków w atrakcyjnych cenach.</p>

<p>Przede wszystkim sam Klient może utworzyć swoją własną kompozycję pizzy wedle swojego uznania. Oferujemy wiele składników do tej czynności, wszystko po to aby się dobrze bawić w naszym serwisie tworząc coraz to bardziej wyszukane i egzotyczne kompozycje ! </p>

<p>&nbsp;</p>






	<legend>Logowanie</legend>     
			<!-- Otwieramy formularz za pomocÄ funkcji z helpera Form. -->    	
			<?php echo form_open(); ?>
				<!-- 
					RĂłwnieĹź do definicji pĂłl formularza moĹźemy uĹźyÄ funkcji z helpera Form, 
					ale w tym przypadku nie widaÄ specjalnych korzyĹci dla ktĂłrych musielibyĹmy to robiÄ, 
					dlatego zostaniemy przy "normalnym" zapisie.
				-->
				
				<input type="text" id="usernaname" class="span4" name="username" placeholder="Login">
				<input type="password" id="password" class="span4" name="password" placeholder="Hasło">
				<button type="submit" name="submit" class="btn btn-info btn-block">Zaloguj</button>
			<!-- Zamykamu formularz. -->
			<?php echo form_close(); ?>
		
		

</div>
