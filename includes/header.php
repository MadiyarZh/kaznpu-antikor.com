<!DOCTYPE html>
	<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Главная</title>
		<link href="//fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/fonts.css">
		<link rel="stylesheet" href="../admin/css/style.css">
		<link rel="stylesheet" href="../assets/css/style.css">
	</head>
	<body>
		<header>
			<div class="header">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 logo">
							<a href="/">
								<img src="../assets/img/logo.png" alt="logo" class="logo__img">
							</a>
						</div>
						<div class="col-lg-3 navbar">
							<a href="#" class="navbar__item">Концепция антикоррупционной политики</a>
							<a href="#" class="navbar__item">Национальный доклад о противодействии коррупции за 2021 год</a>
						</div>
					</div>
				</div>
			</div>
			<div class="menu">
				<div class="container">
					<div class="navbar-menu">
						<?php
						if ($_SERVER['REQUEST_URI'] == "/documents.php" || $_SERVER['REQUEST_URI'] == "/document_detail.php") {
						?> 
						<div class="navbar-menu__item active">
						<?php
						} else {
						?>
						<div class="navbar-menu__item">
						<?
						}
						?>
							<a href="#" class="navbar-menu__item__link disabled">О противодействии коррупции</a>
							<div class="navbar-menu__item-content">
								<a href="/documents.php">Документы</a>
							</div>
						</div>
						<?php
						if ($_SERVER['REQUEST_URI'] == "/about.php") {
						?> 
						<div class="navbar-menu__item active">
						<?php
						} else {
						?>
						<div class="navbar-menu__item">
						<?
						}
						?>
							<a href="#" class="navbar-menu__item__link disabled">Центр «Парасат»</a>
							<div class="navbar-menu__item-content">
								<a href="/about.php">О центре</a>
							</div>
						</div>
						<?php
						if ($_SERVER['REQUEST_URI'] == "/news.php" || $_SERVER['REQUEST_URI'] == "/events.php") {
						?> 
						<div class="navbar-menu__item active">
						<?php
						} else {
						?>
						<div class="navbar-menu__item">
						<?
						}
						?>
							<a href="#" class="navbar-menu__item__link disabled">Проведенные мероприятия</a>
							<div class="navbar-menu__item-content">
								<a href="/news.php">Новости</a>
								<a href="/events.php">Мероприятия</a>
							</div>
						</div>
						<?php
						if ($_SERVER['REQUEST_URI'] == "/sanaly-urpaq.php") {
						?> 
						<div class="navbar-menu__item active">
						<?php
						} else {
						?>
						<div class="navbar-menu__item">
						<?
						}
						?>
							<a href="/sanaly-urpaq.php" class="navbar-menu__item__link">Sanaly Urpaq</a>
						</div>	
					</div>
					<form class="search-form">
						<input type="text" name="search" placeholder="Поиск...">
						<button type="submit">
							<i class="icon-search"></i>
						</button>
						<div class="search-form-btns">
							<i class="icon-search"></i>
							<i class="icon-cross"></i>
						</div>
					</form>
				</div>
			</div>
		</header>

		<div class="main">
			<div class="container">
				<div class="row">
					

					
	
	