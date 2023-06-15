<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
    body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
    .navbar {
  background-color: #333;
  color: #fff;
  padding: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
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
    

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-group textarea {
            height: 80px;
        }

        .form-group input[type="file"] {
            padding: 5px 0;
        }

        .form-group button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <span class="navbar-brand">C-Conds</span>
        <a class="navbar-button" href="/">Home</a>
        <a class="navbar-button" href="/tambah">Tambah</a>
    </nav>
    <br>
    <div class="container">
        <form action="/barang/store" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama Produk :</label>
                <input type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga Produk :</label>
                <input type="number" min="0" name="harga" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok Produk:</label>
                <textarea type="number" min="0" size="10" name="stok" required></textarea>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Produk:</label>
                <textarea type="text" name="deskripsi"></textarea>
            </div>
            <div class="form-group">
                <label for="foto">Foto Produk :</label>
                <input class="form-control" type="file" name="gambar" required>
            </div>
            <div class="form-group">
                <button type="submit">SIMPAN</button>
            </div>
        </form>
    </div>
    
</body>

</html>
                    