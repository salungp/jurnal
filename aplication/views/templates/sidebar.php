<?php checked(); ?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $data['title']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>
	<div class="wrapper">
		<div class="sidebar">
			<div class="top">
				<h1>Admin</h1>
			</div>
			<div class="body">
				<div class="body-top">
					<h1 style="margin-bottom: 10px;"><?= $this->name(); ?></h1><a>User Login</a>
					<p style="color: #fff;"><?= ucfirst($_SESSION['logged_in'][4]); ?></p>
				</div>
				<div class="title">
					<p>Main Menu</p>
				</div>
				<div class="main">
					<a href="<?= base_url('home/main'); ?>" class="a active">Beranda</a>
					<a href="<?= base_url('home/jurnal'); ?>" class="a">Jurnal</a>
					<a href="<?= base_url('home/users'); ?>" class="a">Users</a>
				</div>
			</div>
			<div class="footer">
				
			</div>
		</div>
		<div class="content">
			<header>
				<div class="right">
					<a href="<?= base_url('home/logout'); ?>" class="btn">Logout</a>
				</div>
			</header>
			<div class="content-wrapper">
	