<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail <?= $barang['nama']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        
    body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 0 auto;
            padding: 20px;
            display: flex;
            align-items: center;
        }

        .product-image {
            flex: 1;
            margin-right: 20px;
        }

        .product-details {
            flex: 1;
            display: block;
        }

        .product-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 18px;
            margin-bottom: 10px;
            color: red;
        }

        .product-description {
            font-size: 16px;
            line-height: 1.5;
        }
    </style>

</head>

<body>
    <div class="container">
        <img class="product-image" src="/<?= $barang['gambar']; ?>" alt="Gambar Produk">
        <div class="product-details">
            <h2 class="product-title"><?= $barang['nama']; ?></h2>
            <p class="product-price">Rp <?= number_format($barang['harga'], 0, ",", "."); ?></p>
            <p class="product-description"><?= $barang['deskripsi']; ?></p>
        </div>
    </div>
</body>

</html>