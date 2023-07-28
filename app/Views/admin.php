<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>C-Conds</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<style>
		
		body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
		.navbar {
			background-color: #333;
			height: 50px;
			display: flex;
			justify-content: flex-start;
			align-items: center;
			padding: 0 20px;
		}

		.navbar-brand {
			color: #fff;
			font-size: 18px;
			font-weight: bold;
			margin-right: auto;
		}

		.navbar-button {
			background-color: #555;
			color: #fff;
			border: none;
			padding: 10px 20px;
			font-size: 16px;
			font-weight: bold;
			margin-right: 10px;
			border-radius: 5px;
			cursor: pointer;
			text-decoration: none;
		}

		.navbar-button:hover {
			background-color: #777;
		}

		.navbar-button:last-child {
			margin-right: 0;
		}

		.grid-container {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			grid-gap: 20px;
		}

		.grid-item {
			border: 1px solid #ddd;
			border-radius: 15px;
			padding: 10px;
			text-decoration: none;
			background-color: #fff;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
			text-align: center;
			transition: all 0.3s ease;
		}

		.grid-item:hover {
			transform: translateY(-5px);
			box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
		}

		.product-image {
			width: 100%;
			height: 200px;
			object-fit: cover;
			border-radius: 5px;
			margin-bottom: 10px;
		}

		.product-title {
			font-weight: bold;
			margin-bottom: 5px;
		}

		.product-price {
			color: #888;
		}
	</style>
</head>

<header>
	<nav class="navbar">
		<span class="navbar-brand">C-Conds</span>
		<a class="navbar-button" href="/">Home</a>
		<a class="navbar-button" href="/tambah">Tambah</a>
		<a class="navbar-button" href="/user/logout">Logout</a>
	</nav>
</header>

<body>
	</br>
	</br>
	<div class="container">
		<?php if (session()->getFlashData('success')) : ?>
			<div class="alert alert-success mt-3" role="alert">
				<?= session()->getFlashData('success') ?>
			</div>
		<?php endif; ?>
		<div class="grid-container">
			<?php foreach ($barang as $b) : ?>
				<a class="grid-item" href="/edit/<?= $b['id']; ?>">
					<img class="product-image" src="/<?= $b['gambar']; ?>" class="img-thumbnail" alt="..." width="100">
					<div class="product-title"><?= $b['nama']; ?></div>
					<div class="product-price">Rp <?= number_format($b['harga'], 0, ",", "."); ?></div>
				</a>
			<?php endforeach; ?>
		</div>
</body>

</html>