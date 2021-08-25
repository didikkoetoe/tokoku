<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $data['title']; ?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/admin.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Admin</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link" aria-current="page" href="#"><i class="bi bi-speedometer2"></i> Dashboard</a>
					<a class="nav-link" href="#"><i class="bi bi-bag-fill"></i> Pesanan</a>
					<a class="nav-link" href="#"><i class="bi bi-chat-fill"></i> Chat</a>
				</div>
			</div>
			<form class="d-flex">
				<input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search" id="keyword">
				<a href="<?= BASEURL; ?>/Admin/logout" class="btn btn-danger">LogOut</a>
			</form>
		</div>
	</nav>