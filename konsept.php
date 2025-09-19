<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konseptler - O'LALA Catering</title>
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
        width: 80px;
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
        margin: 0;
    }

    h2 {
        text-align: center;
        font-size: 35px;
        color: #3f30cb;
    }

    p {
        text-align: center;
        font-size: 25px;
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

    .menu>li {
        position: relative;
    }

    .menu>li>a {
        text-decoration: none;
        font-size: 18px;
        color: #17089f;
        padding: 8px 12px;
        transition: color 0.3s, background-color 0.3s;
    }

    .menu>li>a:hover {
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
        font-size: 16px;
        color: #333;
        padding: 10px 20px;
        display: block;
        transition: background-color 0.3s;
    }

    .menu1 a:hover {
        background-color: #db6090;
    }

    /* Alt Menü Göster */
    .menu>li:hover .menu1 {
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

    main.konseptler {
        padding: 20px;
        text-align: center;
    }

    .konsept {
        background-color: #fff;
        margin: 15px auto;
        padding: 20px;
        width: 80%;
        max-width: 600px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .konsept img {
        width: 60%;
        border: 3px solid #202020;
        margin: 5px;
        transition: transform 0.3s ease;
    }

    .image-container {
        position: relative;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .image-container img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
    }

    .image-container:hover img {
        transform: scale(1.1);
    }

    .image-container .select-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        color: #333;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        opacity: 0;
        transition: opacity 0.3s ease;
        border-radius: 20px;
    }

    .image-container:hover .select-btn {
        opacity: 1;
    }

    .konsept:hover {
        transform: translateY(-5px);
        transform: scale(1.2);
    }

    .konsept h3 {
        color: #3050e0;
        font-size: 24px;
        margin-bottom: 10px;
        color: #3f30cb;
    }

    .konsept p {
        font-size: 16px;
        line-height: 1.5;
    }
</style>

<body>
    <header>
        <h1>O'LALA Catering Konseptler</h1>
        <nav>
            <ul class="menu">
                <li><a href="cateringBaslangıc.php">Anasayfa</a></li>
                <li><a href="menüslerim.php">Menülerim</a></li>
                <li><a href="giris.php">Giriş</a></li>
            </ul>
        </nav>
    </header>

    <main class="konseptler">
        <h2>Konseptlerimiz</h2>

        <!-- Şirket Kokteyli -->
        <div class="konsept">
            <h3>Şirket Kokteyli</h3>
            <div class="image-container">
                <img src="kokteyl2.jpeg" alt="kokteyl">
                <form method="POST" action="menülerim.php">
                    <input type="hidden" name="menu_image" value="kokteyl2.jpeg">
                    <button class="select-btn" type="submit">Seç</button>
                </form>
            </div>

            <div class="image-container">
                <img src="kokteyl menü5.jpeg" alt="">
                <form method="POST" action="menülerim.php">
                    <input type="hidden" name="menu_image" value="kokteyl menü5.jpeg">
                    <button class="select-btn" type="submit">Seç</button>
                </form>
            </div>

            <div class="image-container">
                <img src="kokteyl7.jpeg" alt="">
                <form method="POST" action="menülerim.php">
                    <input type="hidden" name="menu_image" value="kokteyl7.jpeg">
                    <button class="select-btn" type="submit">Seç</button>
                </form>
            </div>

            <div class="image-container">
                <img src="kokteyl (1).jpg" alt="">
                <form method="POST" action="menülerim.php">
                    <input type="hidden" name="menu_image" value="kokteyl (1).jpg">
                    <button class="select-btn" type="submit">Seç</button>
                </form>
            </div>

            <div class="image-container">
                <img src="kokteyl menüsü6.jpeg" alt="">
                <form method="POST" action="menülerim.php">
                    <input type="hidden" name="menu_image" value="kokteyl menüsü6.jpeg">
                    <button class="select-btn" type="submit">Seç</button>
                </form>
            </div>

            <p>Şirket etkinlikleriniz için profesyonel kokteyl hizmetleri sunuyoruz.</p>
        </div>  
    

<div class="konsept">
    <h3>Baby shower</h3>
    <p>Baby showerınız  için şık ve lezzetli menüler hazırlıyoruz.</p>
    
    <div class="image-container">
        <form action="menülerim.php" method="POST">
            <img src="babysshower1.webp" alt="">
            <button type="submit" name="menu_image" value="babysshower1.webp" class="select-btn">Seç</button>
        </form>
    </div>

    <div class="image-container">
        <form action="menülerim.php" method="POST">
            <img src="babysshower2.webp" alt="">
            <button type="submit" name="menu_image" value="babysshower2.webp" class="select-btn">Seç</button>
        </form>
    </div>

    <div class="image-container">
        <form action="menülerim.php" method="POST">
            <img src="babysshower3.webp" alt="">
            <button type="submit" name="menu_image" value="babysshower3.webp" class="select-btn">Seç</button>
        </form>
    </div>

    <div class="image-container">
        <form action="menülerim.php" method="POST">
            <img src="babysshower4.webp" alt="">
            <button type="submit" name="menu_image" value="babysshower4.webp" class="select-btn">Seç</button>
        </form>
    </div>

    <div class="image-container">
        <form action="menülerim.php" method="POST">
            <img src="babysshower5.webp" alt="">
            <button type="submit" name="menu_image" value="babysshower5.webp" class="select-btn">Seç</button>
        </form>
    </div>
</div>
<div class="konsept">
    <h3>Doğum Günü</h3>
    <p>Çocuk ve yetişkin doğum günü partileri için eğlenceli menüler ve servisler.</p>
    <div class="image-container">
        <form action="menülerim.php" method="POST">
            <img src="indir3.jpeg" alt="doğum günü">
            <button type="submit" name="menu_image" value="indir3.jpeg" class="select-btn">Seç</button>  
        </form>
    </div> 
    <div class="image-container">
        <form action="menülerim.php" method="POST">
            <img src="hpy.webp" >
            <button type="submit" name="menu_image" value="hpy.webp" class="select-btn">Seç</button>  
        </form>
    </div>
    <div class="image-container">
        <form action="menülerim.php" method="POST">
            <img src="hpy1.webp">
            <button type="submit" name="menu_image" value="hpy1.webp" class="select-btn">Seç</button>  
        </form>
    </div>
    <div class="image-container">
        <form action="menülerim.php" method="POST">
            <img src="hpy2.webp" >
            <button type="submit" name="menu_image" value="hpy2.webp" class="select-btn">Seç</button>  
        </form>
    </div>
    <div class="image-container">
        <form action="menülerim.php" method="POST">
            <img src="hpy4.webp">
            <button type="submit" name="menu_image" value="hpy4.webp" class="select-btn">Seç</button>  
        </form>
    </div>
</div>

<div class="konsept">
    <h3>Düğün Organizasyonu</h3>
    <p>Hayalinizdeki düğün için muhteşem menüler ve profesyonel servis.</p>
    <div class="image-container">
        <form action="menülerim.php" method="POST">
            <img src="düğün1.jpeg">
            <button type="submit" name="menu_image" value="" class="select-btn">Seç</button>  
        </form>
    </div>
    <div class="image-container">
        <form action="menülerim.php" method="POST">
            <img src="düğün2.jpeg">
            <button type="submit" name="menu_image" value="" class="select-btn">Seç</button>  
        </form>
    </div>
    <div class="image-container">
        <form action="menülerim.php" method="POST">
            <img src="düğün3.jpeg">
            <button type="submit" name="menu_image" value="" class="select-btn">Seç</button>  
        </form>
    </div>
    <div class="image-container">
        <form action="menülerim.php" method="POST">
            <img src="düğün4.jpeg" >
            <button type="submit" name="menu_image" value="" class="select-btn">Seç</button>  
        </form>
    </div>
    <div class="image-container">
        <form action="menülerim.php" method="POST">
            <img src="düğün5.jpeg">
            <button type="submit" name="menu_image" value="" class="select-btn">Seç</button>  
        </form>
    </div>
</div>
</div>
    </main>
</body>
</html>