
<!DOCTYPE html>
<html>
<head>
    <title>KOUKE | 特務登入</title>
    <style>
        body { background-color: #000; color: #0f0; font-family: 'Courier New', monospace; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .login-box { border: 2px solid #0f0; padding: 30px; box-shadow: 0 0 15px #0f0; text-align: center; }
        input { background: #000; border: 1px solid #0f0; color: #0f0; padding: 10px; margin: 10px; width: 200px; }
        button { background: #0f0; color: #000; border: none; padding: 10px 20px; cursor: pointer; font-weight: bold; width: 222px; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>AGENT LOGIN</h2>
        <form action="login_action.php" method="POST" autocomplete="off" >
            <input type="text" name="username" autocomplete="off" placeholder="SECRET_CODENAME" required><br>
            <input type="password" name="password" autocomplete="off" placeholder="ACCESS_PASSWORD" required><br>
            <button type="submit">驗證身份</button>
        </form>
<p style="margin-top: 20px;">
    還不是特務？<a href="register.php" style="color: blue;">[ 點我建立新編號 ]</a>
</p>
    </div>
</body>
</html>
