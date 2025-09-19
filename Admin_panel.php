<?php
session_start();

// Basit admin doğrulama
$valid_username = 'admin';
$valid_password = '123456';

if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password) {
    $_SESSION['admin_logged_in'] = true;
} elseif (!isset($_SESSION['admin_logged_in'])) {
    header('Location: adminlogin.php');
    exit;
}

// Veritabanı bağlantısı
$conn = new mysqli('localhost', 'root', '', 'catering_db');

if ($conn->connect_error) {
    die('Bağlantı hatası: ' . $conn->connect_error);
}

// Kullanıcı bilgilerini çekme
$result = $conn->query("SELECT username, email, telefon FROM users");

// Gelen mesajları çekme
$messages = $conn->query("SELECT message FROM messages");
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
</head>
<style type="text/css">
    body{
        background: linear-gradient(to right, #4facfe, #00f2fe);
    }
    h2{
        text-align: center;
    }
</style>
<body>
    <h2>Admin Paneli</h2>

    <h3>Kullanıcı Bilgileri</h3>
    <table>
        <tr>
            <th>Ad Soyad</th>
            <th>E-posta</th>
            <th>Telefon</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['username']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['telefon']) ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <h3>Gelen Mesajlar</h3>
    <table>
        <tr>
            <th>Mesaj</th>
        </tr>
        <?php while ($msg = $messages->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($msg['message']) ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
