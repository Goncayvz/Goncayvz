<?php
session_start();

// Veritabanı bağlantı ayarları
$host = "127.0.0.1"; // MySQL sunucu adresi
$dbname = "catering_db"; // Veritabanı ismi
$username_db = "root"; // MySQL kullanıcı adı
$password_db = ""; // MySQL şifresi

$conn = new mysqli($host, $username_db, $password_db, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

// Login kontrolü
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kullanıcı adı ile veritabanı sorgusu
    $sql = "SELECT sifre FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['sifre'];

        // Şifre doğrulama
        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;
            header("Location: cateringBaslangıc.php");
            exit();
        } else {
            $error = "Hatalı şifre. Lütfen tekrar deneyin.";
        }
    } else {
        $error = "Kullanıcı adı bulunamadı.";
    }
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Ekranı</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .login-container label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        .login-container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-container button {
            background-color: #5cb85c;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-container button:hover {
            background-color: #4cae4c;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Giriş Yap</h2>
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="giris1.php" method="POST">
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" required>
            <a href="kayitol.php">Kayıt ol</a>
            <button type="submit">Giriş Yap</button>
        </form>
    </div>
</body>
</html>
