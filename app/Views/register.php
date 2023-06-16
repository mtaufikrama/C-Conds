<!DOCTYPE html>
<html>
<head>
    <title>Register C-Conds</title>
    <style>

        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
        }
        
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }
        
        form {
            width: 600px;
            background-color: #fff;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        form div {
            margin-bottom: 20px;
        }
        
        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
            font-size: 16px;
        }
        
        form input[type="file"],
        form input[type="text"],
        form input[type="email"],
        form input[type="tel"],
        form input[type="password"],
        form textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease;
        }
        
        form button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        form button[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .error-message {
            color: #f44336;
            font-size: 14px;
            margin-top: 10px;
            text-align: center;
        }
        
    </style>
</head>
<body>
    <form method="POST" action="/user/register" enctype="multipart/form-data">
    <br>
        <div>
            <label for="foto">Upload Foto:</label>
            <input type="file" id="foto" name="foto" required>
        </div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat"></textarea>
        </div>
        <div>
            <label for="no_hp">Nomor Handphone:</label>
            <input type="tel" id="no_hp" name="no_hp">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="confirm_password">Konfirmasi Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>
