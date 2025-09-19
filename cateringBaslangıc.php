<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'LALA Yemek Hizmetleri</title>


</head>
<style type="text/css">
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    color: #333;
    line-height: 1.6;
}

/* Logo ve Başlık */
.logo-container {
    display: flex;
    align-items: center;
    gap: 10px;
}

.logo {
    width: 80px; /* Genişlik ayarı */
    height: auto;
}

/* Header ve Menü */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 50px;
    background: linear-gradient(to right, #54b9c9, #95e4c6, #76d5b7);
    color: #890587;
    border-bottom: 5px solid #a67b5b;
}

header h1 {
    font-size: 40px;
    font-family: 'Courier New', Courier, monospace;
    color: #9208a4;
    margin: 0; /* Fazladan boşlukları kaldır */
}
h2{
    text-align: center;
    font-size: 35px;
}
p{
    text-align: center;
    font-size: 35px;
}

/* Navbar */
nav {
    flex-grow: 1;
    display: flex;
    justify-content: flex-end;
}

.menu {
    list-style: none;
    display: flex;
    gap: 20px;
}

.menu > li {
    position: relative;
}

.menu > li > a {
    text-decoration: none;
    font-size: 35px;
    color: #17089f;
    padding: 8px 12px;
    transition: color 0.3s, background-color 0.3s;
}

.menu > li > a:hover {
    background-color: #b2284c;
    color: #fff;
    border-radius: 4px;
}

/* Alt Menü */
.menu1 {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    list-style: none;
    padding: 10px 0;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.menu1 li {
    padding: 0;
}

.menu1 a {
    text-decoration: none;
    font-size: 25px;
    color: #333;
    padding: 10px 20px;
    display: block;
    transition: background-color 0.3s;
}

.menu1 a:hover {
    background-color: #db6090;
}

/* Alt Menü Göster */
.menu > li:hover .menu1 {
    display: block;
}

/* Responsive Tasarım */
@media (max-width: 768px) {
    header {
        flex-direction: column;
        text-align: center;
    }

    .menu {
        flex-direction: column;
        padding: 10px;
    }

    .menu1 {
        position: static;
        box-shadow: none;
    }

    .menu1 a {
        padding: 10px;
    }
}

/* Görseller */
.image-gallery {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 10px;
    margin: 20px 0;
}

.image-gallery img {
    width: 23%;
    border: 2px solid #090909;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
    margin:7px;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
</style>

<body>
    <header>
        <div class="logo-container">
            <img src="updated_blue_background.png" alt="logo" class="logo">
            <h1>O'LALA Catering</h1>
        </div>
        <nav>
            <ul class="menu">
                <li><a href="konsept.php">Konseptler</a>
                    <ul class="menu1">
                        <li><a href="konsept.php">Şirket Kokteyli</a></li>
                        <li><a href="konsept.php">Baby Shower</a></li>
                        <li><a href="konsept.php">Doğum Günü</a></li>
                        <li><a href="konsept.php">Düğün Organizasyonu</a></li>
                    </ul>
                </li>
                <li><a href="menülerim.php">Menülerim</a></li>
                <li><a href="giris1.php">Giriş</a>
                <ul class="menu1">
                <li><a href="adminlogin.php">Admin</a></li>
                <li><a href="giris1.php">kullanıcı</a></li>
                </ul>
            </li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>💕Hoş Geldiniz!💕</h2>
        <p>En iyi yemek hizmetleri için doğru yerdesiniz.❤️🫠</p>
        <div class="image-gallery">
            <img src="header.jpg" alt="Catering Resmi 1">
            <img src="organizasyon (1).jpeg">
            <img src="organizasyon (2).jpeg">
            <img src="organizasyon (3).jpeg">
            <img src="indir (1).jpeg">
            <img src="indir (2).jpeg">
            <img src="indir (4).jpeg">
            <img src="indir (5).jpeg">
            <img src="bs2.jpeg" >
            <img src="bs3.jpeg">
            <img src="bs4.jpeg">
            <img src="bs5.jpeg">
            
        </div>
    </main>
</body>

</html>