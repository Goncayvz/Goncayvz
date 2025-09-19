<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Girişi</title>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to right, #4facfe, #00f2fe);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: #333;
    }

    .container {
        background-color: #fff;
        padding: 30px;
        width: 100%;
        max-width: 400px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .container h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #007bff;
    }

    .form-group {
        margin-bottom: 20px;
        text-align: left;
    }

    .form-group input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 14px;
        transition: border-color 0.3s;
        margin-top: 5px;
    }

    .form-group input:focus {
        border-color: #007bff;
        outline: none;
    }

    .btn {
        width: 100%;
        padding: 12px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .message {
        margin-top: 15px;
        font-size: 14px;
    }

    .message a {
        color: #007bff;
        text-decoration: none;
    }

    .message a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Admin Girişi</h2>
        <form action="Admin_panel.php" method="POST">
            <div class="form-group">
                <label for="username">Kullanıcı Adı</label>
                <input type="text" id="username" name="username" placeholder="Kullanıcı Adınızı Girin" required>
            </div>
            <div class="form-group">
                <label for="password">Şifre</label>
                <input type="password" id="password" name="password" placeholder="Şifrenizi Girin" required>
            </div>
            <button type="submit" class="btn">Giriş Yap</button>
        </form>
        <div class="message">
            <p>Yetkiniz yoksa kullanıcı giriş sayfasından giriş yapın lütfen😊 <a href="giris.php">Giriş yap</a></p>
        </div>
    </div>
</body>

</html>