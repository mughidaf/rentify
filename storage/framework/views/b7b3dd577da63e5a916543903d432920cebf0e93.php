<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentify</title>
    <link rel="stylesheet" href="Bantuan.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

</head>
<body>
    <!--Header-->
    <nav>
        <div class="layar-dalam">
            <div class="logo">
                <a href=""><img src="asset/traveloka.png" class="putih" /></a>
                <a href=""><img src="asset/traveloka-black.png" class="hitam" /></a>
            </div>
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <h7 class="garis"></h7>
                    <h7 class="garis"></h7>
                    <h7 class="garis"></h7>
                </a>
                <ul id="navbar">
                    <?php if(auth()->guard()->check()): ?>
                        <li><a href="/dashboard">Beranda</a></li>
                    <?php endif; ?>
                    <?php if(auth()->guard()->guest()): ?>
                        <li><a href="/">Beranda</a></li>
                    <?php endif; ?>
                    <?php if(auth()->guard()->check()): ?>
                        <li><a href="/Pemesanan">Pemesanan</a></li>
                    <?php endif; ?>

                    <?php if(auth()->guard()->guest()): ?>
                        <li><a href="/login">Pemesanan</a></li>
                    <?php endif; ?>
                    <li><a href="/bantuan">Bantuan</a></li>
                    <li><a class="active" href="Tentang.html">Tentang</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Body-->
    <div class="layar-penuh">
        
        <main>
            <!--Popup-->
            <div class="popup" id="popup">
                <div class="popupcontent">
                    <div class="popupimg">
                        <a href="#" class="popupclose">&times;</a>
                    </div>
                    <div class="popupheader">
                        <h4>pilih tempat olahraga</h4>
                    </div>
                    <div class="popuptext">
                        <div class="sebelahan">
                            <a href="Badminton.html" class="booknow"><button class="normal">Badminton</button></a>
                            <a href="Basket.html" class="booknow"><button class="normal">Basket</button></a>
                            <a href="Futsal.html" class="booknow"><button class="normal">Futsal</button></a>
                        </div>
                        <div class="sebelahan">
                            <a href="Golf.html" class="booknow"><button class="normal">Golf</button></a>
                            <a href="Tenis.html" class="booknow"><button class="normal">Tenis</button></a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <section id="Bantuan">
                <div class="layar-dalam">
                    <section id="page-header">
                    <h3>#Tentang</h3>
                    <p class="ringkasan">
                        Informasi mengenai Rentify
                    </p>
                    </section>
                    <div class="apa">
                        <h2>Apa itu Rentify ?</h2>
                    </div>
                    <section id="gambar">
                        <img src="asset/GBK-Banner.jpg" alt="">
                        <div class="apa">
                            <p>Rentify adalah Proyek Tugas Besar Mata Kuliah Rekayasa Perangkat Lunak pada Semester 5 kami yang saat ini(Desember 2022) berkuliah di Telkom University Jurusan S1 Informatika</p>
                        </div>
                    </section>
                    <div class="map">
                        <h2>Alamat Kampus</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.229817161331!2d107.6316854!3d-6.973007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x437398556f9fa03!2sTelkom%20University!5e0!3m2!1sen!2sid!4v1670838387075!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </section>
        </main>
        <footer id = "contact">
            <div class = "layar-dalam">
                <div class="footerproduk">
                    <h5>Produk</h5>
                    <a href="ArenaKonser.html"><h4>Area Konser</h4></a>
                    <a href="Ballroom.html"><h4>Ballroom</h4></a>
                    <a href="#popup"><h4>Olahraga</h4></a>
                    <a href="StudioMusik.html"><h4>Studio Musik</h4></a>
                </div>
                <div class="footerpembayaran">
                    <h5>Pembayaran</h5>
                    <div class="pembayaranluar"><img src="Asset/card_img.png" alt=""></div>
                    <div class="pembayaranbank"><img src="Asset/bank-01.png" alt=""></div>
                    <div class="sebelahan">
                        <div class="digitalpaymentgopay"><img src="Asset/gopay.png" alt=""></div>
                        <div class="digitalpaymentovo"><img src="Asset/ovo.png" alt=""></div>
                    </div>
                </div>
                <div class="footertentang">
                    <h5>Tentang Rentify</h5>
                    <a href="/bantuan"><h4>Bantuan</h4></a>
                    <a href="/tentang"><h4>Tentang</h4></a>
                </div>
            </div>
            <div class="layar-dalam">
                <div class="copyright">
                    &copy; 2022 Rentify
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="Rentify.js"></script>
    <script src="asset/daterangepicker/moment.min.js"></script>
    <script src="asset/daterangepicker/daterangepicker.js"></script>
</body>
</html><?php /**PATH C:\Ghiyats\Kuliah\Semester 5\RPL Impal\Tugas\Rentify\resources\views/tentang.blade.php ENDPATH**/ ?>