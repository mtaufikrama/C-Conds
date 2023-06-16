<!DOCTYPE html>
<html>
<head>
    <title>Login C-Conds</title>
    <style>
		body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 150px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
            font-size: 16px;
        }

        .form-group input {
            width: 95%;
            padding: 10px;
            font-size: 16px;
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        .form-group-signup a {
            padding-left: 10px;
            font-size: 16px;
            color: red;
            border: none;
            border-radius: 10px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button {
            padding: 10px 20px;
            width: 100%;
            margin-top: 25px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s all;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .form-group button:focus {
            outline: none;
        }

        .form-group button:active {
            transform: translateY(2px);
        }

        .form-group .error-message {
            color: #f44336;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>  
    <div class="container">
        <h2>Login C-Conds</h2>
        <form action="/user/login" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <div class="form-group-signup">
                <span>Don't have an account?</span>
                <a href="/register">Sign up ➤</a>
            </div>
        </form>
    </div>
</body>
</html>
