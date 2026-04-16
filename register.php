<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>KOUKE | 特務註冊中心</title>
    <style>
        body { background-color: #000; color: #0f0; font-family: 'Courier New', monospace; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-box { border: 2px solid #0f0; padding: 30px; box-shadow: 0 0 15px #0f0; }
        h2 { text-align: center; text-transform: uppercase; letter-spacing: 5px; }
        input { background: #000; border: 1px solid #0f0; color: #0f0; padding: 10px; margin: 10px 0; width: 250px; display: block; }
        button { background: #0f0; color: #000; border: none; padding: 10px; width: 100%; cursor: pointer; font-weight: bold; }
        button:hover { background: #008000; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Agent Register</h2>
        <form action="register_action.php" method="POST">
            <input type="text" name="username" placeholder="SECRET_CODENAME" required>
            <input type="password" name="password" placeholder="ACCESS_PASSWORD" required>
            <button type="submit">執行註冊</button>
        </form>
    </div>
</body>
</html>
