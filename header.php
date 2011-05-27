<!DOCTYPE HTML>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
<meta charset="utf-8">
<title><?php if(isset($title)) {print "$title | ";} ?>Imelda Guzman, Web Developer &amp; Designer, Portfolio</title>
<link rel="stylesheet" type="text/css" href="/css/main.css" />
<script type="text/javascript" src="/js/jquery.js"></script>
<?php if(isset($title) && $title === "Portfolio") { ?>
<link rel="stylesheet" href="/css/colorbox.css" />
<script type="text/javascript" src="/js/colorbox.js"></script>
<script type="text/javascript">
$(function() {
	$('#gallery .center a').colorbox();
});
</script>
<?php } ?>
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="/css/ie.css" />
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<header>
  <div class="container">
    <h1>Three Piece Design</h1>
    <h5>Building websites that grow with your business</h5>
    <img class="upper-right" src="/images/florals_11_03_03.png" /> <a href="/"><img src="/images/logo/tpd_gold.png" /></a>
    <div id="header-box1">
      <div id="header-box2"> </div>
    </div>
  </div>
</header>
<section>
<div id="nav-box">
  <nav>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/html/about.php">About</a></li>
      <li><a href="/html/resume.php">Resume</a></li>
      <li><a href="/html/portfolio.php">Portfolio</a></li>
      <li><a href="/html/contact.php">Contact</a></li>
    </ul>
  </nav>
  </div>
  <div id="content-box1">
    <div id="content-box2">
      <article id="content">