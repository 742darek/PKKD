<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>application/views/pizzeria/pom.css" />
<link rel="shortcut icon" href="<?PHP echo base_url(); ?>application/views/pizzeria/images/favicon.ico" />
<title>Pizzeria</title>
<!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    
    <!-- <link href="assets/css/bootstrap-responsive.css" rel="stylesheet"> -->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body><div id="wrap">

<div id="header"><!-- <br /> -->

<p>PIZZERIA PKKD</p>



<!-- // <?php if ($this->session->userdata('user_id')): ?> -->
<ul><li><a href="<?php echo site_url('users/logout'); ?>">Wyloguj</a></li></ul>


<!-- // <?php endif; ?> -->
<?php if ($this->session->userdata('user_id')): ?>
<h3>Witamy ponownie <?php echo $this->session->userdata('user_name'); ?>!</h3>
<?php endif; ?> 

</div>




<div id="obraz"><img src="<?PHP echo base_url(); ?>application/views/pizzeria/images/obraz.png"width="790" height="228" alt=""  />
</div>

