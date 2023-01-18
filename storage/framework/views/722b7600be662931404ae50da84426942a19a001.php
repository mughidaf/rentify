<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentify</title>
    <link rel="stylesheet" href="css/index2.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    
</head>
<body>
    <!--Header-->
    <nav>
        <?php if(session()->has('Success')): ?>
            <script>alert("<?php echo e(session('Success')); ?>")</script>
        <?php endif; ?>
        <div class="layar-dalam">
            <div class="logo">
                <a href=""><img src="asset/traveloka-black.png" class="putih" /></a>
                <a href=""><img src="asset/traveloka.png" class="hitam" /></a>
            </div>
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <h7 class="garis"></h7>
                    <h7 class="garis"></h7>
                    <h7 class="garis"></h7>
                </a>
                <ul id="navbar">
                    <li ><a class="active" href="/dashboard">Beranda</a></li>
                    <li ><a href="/Pemesanan">Pemesanan</a></li>
                    <li ><a href="/bantuan">Bantuan</a></li>
                    <li ><a href="/tentang">Tentang</a></li>
                    <?php if(auth()->guard()->check()): ?>
                        <li>
                            <div class="user">
                                Hello,&nbsp;<?php echo e(auth()->user()->name); ?>

                            </div>
                        <li>
                            <form action="logout" method="post">
                                <?php echo csrf_field(); ?>
                                <a href="#"><button class="btn-keluar" type="submit">Logout</button></a>
                            </form>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="layar-penuh">
        <main>
            <br>
            <br>
            <br>
            <div class="bantuan" style="text-align: center;">
                <p style="font-weight: bold;font-size:20px;letter-spacing: 0.27em;margin-left:7px;">PESAN DARI PELANGGAN</p>
                <p>Sopan Santun, Cepat Tanggap, Pemberi Solusi</p>
                <?php $__currentLoopData = $bantuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <br>
                <div class="tampilan" style="background-color: #fff;padding-top:10px;padding-bottom:3px;">
                    <p style="color: black;margin:0;"><span style="font-weight:bold">Subject : </span><?php echo e($item->subject); ?></p>
                    <br>
                    <p style="color: black;margin:0;"><span style="font-weight:bold">Nama Pelanggan : </span><?php echo e($item->name); ?></p>
                    <br>
                    <p style="color: black;margin:0;"><span style="font-weight:bold">Email Pelanggan : </span><?php echo e($item->email); ?></p>
                    <br>
                    <p style="color: black;margin:0;"><span style="font-weight:bold">Isi Pesan : </span><?php echo e($item->msg); ?> </p>
                    <p></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <br>
            </div>
        </main>

        <!--Footer-->
        <footer id = "contact">
                <div class = "layar-dalam">
                    <div class="footerproduk">
                        <h5>Produk</h5>
                        <a href="/Konser"><h4>Area Konser</h4></a>
                        <a href="/Ballroom"><h4>Ballroom</h4></a>
                        <a href="#popup-olahraga"><h4>Olahraga</h4></a>
                        <a href="/Musik"><h4>Studio Musik</h4></a>
                    </div>
                    <div class="footerpembayaran">
                        <h5>Pembayaran</h5>
                        <div class="pembayaranluar"><img src="../Asset/card_img.png" alt=""></div>
                        <div class="pembayaranbank"><img src="../Asset/bank-01.png" alt=""></div>
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
    <script src="Rentify.js"></script>
</body>
</html><?php /**PATH C:\Ghiyats\Kuliah\Semester 5\RPL Impal\Tugas\Rentify\resources\views/showBantuan.blade.php ENDPATH**/ ?>