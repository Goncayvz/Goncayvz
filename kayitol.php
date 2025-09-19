<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <style type="text/css">
        

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #4facfe, #00f2fe);
        }
        .container {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .message {
            margin-top: 20px;
            text-align: center;
        }
        </style>
</head>
<body>
    <div class="container">
        <h2>Kayıt Ol</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Kullanıcı Adı:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">E-posta:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefon">Telefon:</label>
                <input type="text" id="telefon" name="telefon" required>
            </div>
            <div class="form-group">
                <label for="sifre">Şifre:</label>
                <input type="password" id="sifre" name="sifre" required>
            </div>
            <button type="submit" class="btn">Kayıt Ol</button>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Veritabanı bağlantısı
            $servername = "localhost";
            $username = "root"; // Veritabanı kullanıcı adı
            $password = "";     // Veritabanı şifresi
            $dbname = "catering_db";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Bağlantı kontrolü
            if ($conn->connect_error) {
                die("Veritabanına bağlanılamadı: " .$conn->connect_error);
            }

            // Form verilerini al
            $kullaniciAdi = $_POST["username"];
            $eposta = $_POST["email"];
            $telefon = $_POST["telefon"];
            $sifre = password_hash($_POST["sifre"], PASSWORD_DEFAULT); // Şifreyi hashle

            // Veritabanına ekleme
            $sql = "INSERT INTO users (username, email, telefon, sifre) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $kullaniciAdi, $eposta, $telefon, $sifre);

            if ($stmt->execute()) {
                echo "<p class='message'>Kayıt başarılı!</p>";
            } else {
                echo "<p class='message'>Hata: " . $conn->error . "</p>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>
    </div>
</body>
</html>