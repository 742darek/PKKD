<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>application/views/pizzeria/pom.css" />

<title>Pizzeria</title>

</head>

<body><div id="wrap">

<div id="header"><br />

<h3>PIZZERIA PKKD</h3>

<p><strong>"Pizza najlepsza w mieście"</strong><br />
<?php if ($this->session->userdata('user_id')): ?>
<li><a href="<?php echo site_url('users/logout'); ?>">Wyloguj</a></li>
<?php endif; ?>

<h2>Witamy ponownie <?php echo $this->session->userdata('user_name'); ?>!</h2>

</p>
</div>

<img src="<?PHP echo base_url(); ?>application/views/pizzeria/images/obraz.png"width="790" height="228" alt=""  />
