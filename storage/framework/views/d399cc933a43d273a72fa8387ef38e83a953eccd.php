<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentify</title>
    <link rel="stylesheet" href="Pemesanan.css">
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
                    <li><a href="/dashboard">Beranda</a></li>
                    <li><a class="active" href="/Pemesanan">Pemesanan</a></li>
                    <li><a href="/bantuan">Bantuan</a></li>
                    <li><a href="/tentang">Tentang</a></li>
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
                            <a href="/Badminton" class="booknow"><button class="normal">Badminton</button></a>
                            <a href="/Basket" class="booknow"><button class="normal">Basket</button></a>
                            <a href="/Futsal" class="booknow"><button class="normal">Futsal</button></a>
                        </div>
                        <div class="sebelahan">
                            <a href="/Golf" class="booknow"><button class="normal">Golf</button></a>
                            <a href="/Tenis" class="booknow"><button class="normal">Tenis</button></a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <section id="cart">
                <div class="layar-dalam">
                    <h3>Pemesanan</h3>
                    <p class="ringkasan">
                        Berikut adalah tempat yang anda pesan
                    </p>
                    <div class ="Pemesanan">
                            <table width="100%">
                                <?php if(session()->has('success')): ?>
                                    <?php echo e(session('success')); ?>

                                <?php endif; ?>
                                <!--td=TableData,tr=TableRow,tbody=TableBody-->
                                <thead>
                                    <tr>
                                        <td>Hapus</td>
                                        <td>Gambar</td>
                                        <td>Kategori</td>
                                        <td>Tempat</td>
                                        <td>Harga</td>
                                        <td>Jadwal</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Tempat 1-->
                                    <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item['user'] == (int)auth()->user()->id): ?>
                                        <tr>
                                            <td><a href="/Pemesanan/<?php echo e($item['id']); ?>"><button onclick="return confirm('Apakah Anda yakin membatalkan pesanan ini?')">Batal</button></a></td>
                                            <td><img src="Asset/<?php echo e($item['img']); ?>" alt=""></td>
                                            <?php if($item['kategori'] == 1): ?>
                                                <td> <?php echo e('Arena Konser'); ?> </td>
                                            <?php elseif($item['kategori'] == 2): ?>
                                                <td> <?php echo e('Ballroom'); ?> </td>
                                            <?php elseif($item['kategori'] == 3): ?>
                                                <td> <?php echo e('Musik'); ?> </td>
                                            <?php elseif($item['kategori'] == 4): ?>
                                                <td> <?php echo e('Futsal'); ?> </td>
                                            <?php elseif($item['kategori'] == 5): ?>
                                                <td> <?php echo e('Badminton'); ?> </td>
                                            <?php elseif($item['kategori'] == 6): ?>
                                                <td> <?php echo e('Basket'); ?> </td>
                                            <?php elseif($item['kategori'] == 7): ?>
                                                <td> <?php echo e('Golf'); ?> </td>
                                            <?php else: ?>
                                                <td> <?php echo e('Tennis'); ?> </td>
                                            <?php endif; ?>
                                            <td><?php echo e($item['name']); ?></td>
                                            <td><?php if($item['harga'] >= 1000000): ?>
                                                <h1>Rp.<?php echo e($item['harga']/1000000); ?>.<?php echo e("000.000"); ?>,-</h1>
                                                <?php elseif($item['harga'] >= 1000 and $item['harga'] <1000000): ?>
                                                <h1>Rp.<?php echo e($item['harga']/1000); ?>.<?php echo e("000"); ?>,-</h1>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($item['jadwal']); ?></td>
                                        </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!--Tempat 2-->
                                </tbody>
                            </table>
                    </div>
                </div>
            </section>
        </main>
        <footer id = "contact">
            <div class = "layar-dalam">
                <div class="footerproduk">
                    <h5>Produk</h5>
                    <a href="/Konser"><h4>Area Konser</h4></a>
                    <a href="/Ballroom"><h4>Ballroom</h4></a>
                    <a href="#popup"><h4>Olahraga</h4></a>
                    <a href="/Musik"><h4>Studio Musik</h4></a>
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
</html><?php /**PATH C:\Ghiyats\Kuliah\Semester 5\RPL Impal\Tugas\Rentify\resources\views/Pemesanan.blade.php ENDPATH**/ ?>