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
&nbsp;<h2>Witamy na naszej stronie ! </h2>
<p>Pizza to potrawa kuchni w�oskiej, obecnie szeroko rozpowszechniona na ca�ym �wiecie. W wersji podstawowej jest to p�aski placek z wytrawnego ciasta dro�d�owego (focaccia), posmarowany sosem pomidorowym, posypany tartym serem mozzarella i zio�ami, pieczony w bardzo mocno nagrzanym piecu.</p>

<p>Pizz� podaje si� na gor�co, lecz rozpowszechnione jest jedzenie jej r�wnie� na zimno. Tradycyjnym miejscem spo�ywania pizzy s� pizzerie, lokale gastronomiczne specjalizuj�ce si� w przyrz�dzaniu i serwowaniu pizzy. </p>

<p>Bazuj�c na oryginalnych recepturach, u�ywaj�c naturalnych sk�adnik�w najwy�szej jako�ci, komponujemy dania wyj�tkowe, pe�ne ciekawych pomys��w i nowych smak�w w atrakcyjnych cenach.</p>

<p>Przede wszystkim sam Klient mo�e utworzy� swoj� w�asn� kompozycj� pizzy wedle swojego uznania. Oferujemy wiele sk�adnik�w do tej czynno�ci, wszystko po to aby si� dobrze bawi� w naszym serwisie tworz�c coraz to bardziej wyszukane i egzotyczne kompozycje ! </p>

<p>&nbsp;</p>






	<legend>Logowanie</legend>     
			<!-- Otwieramy formularz za pomocą funkcji z helpera Form. -->    	
			<?php echo form_open(); ?>
				<!-- 
					Również do definicji pól formularza możemy użyć funkcji z helpera Form, 
					ale w tym przypadku nie widać specjalnych korzyści dla których musielibyśmy to robić, 
					dlatego zostaniemy przy "normalnym" zapisie.
				-->
				
				<input type="text" id="usernaname" class="span4" name="username" placeholder="Login">
				<input type="password" id="password" class="span4" name="password" placeholder="Has�o">
				<button type="submit" name="submit" class="btn btn-info btn-block">Zaloguj</button>
			<!-- Zamykamu formularz. -->
			<?php echo form_close(); ?>
		
		

</div>
