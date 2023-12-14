<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KejuTan</title>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Keju<span>Tan</span></a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search-icon"><i data-feather="search"></i></a>
            <a href="laman_login.php" id="shopping-cart"><i data-feather="user"></i></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <form action="" id="search-form" method="POST">
        <input type="search" placeholder="Search Here . . ." name="keywoard" id="search-box" />
        <label type="submit" name="cari" for="search-box" class="search"><i data-feather="search"></i></label>
        <i data-feather="x" id="close"></i>
    </form>

    <!-- Navbar End -->

    <!-- Hero Section Start-->
    <section class="hero" id="home">
        <main class="content">
            <h1><span>KejuTan</span> Crespy diluar Lumer di Dalam</h1>
            <a href="#menu" class="cta">Beli Sekarang</a>
        </main>
    </section>
    <!-- Hero Section End-->

    <!-- About Section Start -->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>

        <div class="row">
            <div class="gallery">
                <img src="Img/Menu-Coklat.jpg" alt="" />
                <img src="Img/Menu-Original.jpg" alt="" />
                <img src="Img/Milo.jpg" alt="" />
                <img src="Img/Menu-Coklat.jpg" alt="" />
            </div>

            <div class="content">
                <h3>KejuTan yang Takan Habis</h3>
                <p>
                    KejuTan sebuah inovasi makanan yang bermula dari makanan tradisional yaitu pisang aroma
                </p>
                <p>
                    KejuTan yaitu makanan yang terbuat dari kulit lumpia dan di dalamnya ada keju, KejuTan juga dapat
                    ditaburi topping lain selain rasa originalnya.
                </p>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Section Menu Start -->
    <section id="menu" class="menu">
        <h2><span>Menu</span> Kami</h2>
        <p>Kami menyediakan dalam banyak varian</p>

        <div class="row">
            <?php
include "dbconn.php";
$sql = "SELECT * FROM `menu`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <div class="card">
                <div class="card-img">
                    <img src="foto/<?php echo $row['foto']; ?>" alt="" />
                </div>
                <div class="card-info">
                    <h2 class="text-title"><?php echo $row['nama'] ?></h2>
                    <p class="text-body"><?php echo $row['harga'] ?></p>
                </div>
            </div>
            <?php
}
?>
        </div>
    </section>
    <!-- Section Menu End -->

    <!-- Contact Section Start -->
    <section id="contact" class="contact">
        <h2><span>Kontak</span> Kami</h2>
        <p>
            Untuk Pemesanan dapat datang langsung ke tempat kami dan memesan secara online di bawah!
        </p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4481.50317672317!2d107.44333161958072!3d-6.5416760987149125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1675048890086!5m2!1sen!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <form action="send.php" method="POST" target="_blank">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" name="nama" placeholder="Nama" />
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="email" name="email" placeholder="Email" />
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" name="nohp" placeholder="No Hp" />
                </div>
                <div class="input-group">
                    <i data-feather="message-circle"></i>
                    <input type="text" name="message" placeholder="Pesan" />
                </div>
                <input type="hidden" name="nowa" value="6281224062458">
                <button type="submit" name="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Feather Icons -->
    <script>
    feather.replace();
    </script>

    <!-- My Java Script -->
    <script src="script.js"></script>
</body>

</html>