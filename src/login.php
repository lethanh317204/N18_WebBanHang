<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background: #c5c3c3ff; 
            background-image: url('../images/nenden.jpg');
            background-size: cover; 
            background-repeat: no-repeat;
            background-position: center center;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            width: 300px; 
            padding: 20px;
            background: #ddddddff; 
            border-radius: 8px; 
            box-shadow: 0 0 10px #ccc;
        }
        h2 {
            text-align: center;
            color: #222;
            margin-bottom: 18px;
            font-family: Arial, sans-serif;
        }
        label {
            color: #333;
            font-weight: bold;
            font-family: Arial, sans-serif;
        }
        input[type="text"], input[type="password"] {
            width: 100%; padding: 8px; margin: 8px 0; box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
            background: #fafafa;
            font-family: Arial, sans-serif;
        }
        input[type="submit"] {
            width: 100%; padding: 8px; background: #007bff; color: #fff; border: none; border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.2s;
            font-family: Arial, sans-serif;
        }
        input[type="submit"]:hover { background: #0056b3; }
        .register-link {
            margin-top: 20px; 
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .register-link a {
            color: #e74c3c; 
            font-weight: bold; 
            text-decoration: underline; 
            font-size: 16px;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Đăng nhập</h2>
        <form method="post" action="">
            <label for="username">Tên đăng nhập:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Đăng nhập">
        </form>
        <div class="register-link">
            Nếu chưa có tài khoản, hãy 
            <a href="register.php">Đăng kí ngay</a>
        </div>
    </div>