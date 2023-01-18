<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="css/daftar.css">

    <body>
        <nav>
            <div class = navi>
                <ul>
                    <li style="color:white">
                        <a href="/">
                            <img src="images/footer-logo_white-xs 1.png" alt="">
                        </a>
                    </li>
                <li style="color:white;margin-left: 10px;margin-top: 8px;font-size: 18px"><a href="/">Rentify</a></li>
                <li style="color:white;margin-left: 450px;margin-top: 8px;font-size: 18px" ><a href="/">Beranda</a></li>
                <li style="color:white;margin-left: 50px;margin-top: 8px;font-size: 18px"><a href="/login">Pemesanan</a></li>
                <li style="color:white;margin-left: 50px;margin-top: 8px;font-size: 18px"><a href="/bantuan">Bantuan</a></li>
                <li style="color:white;margin-left: 50px;margin-top: 8px;font-size: 18px"><a href="/tentang">Tentang</a></li>
                    <li>
                        <a href="/login"><button class="btn-masuk">Masuk</button></a>
                    </li>
                    <li>
                        <a href="/daftar"><button class="btn-daftar">Daftar</button></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="kotak-daftar">
            <form class="form-daftar" action = "/daftar" method = "post">
                <?php echo csrf_field(); ?>
                <h1 class="title-box">Daftar</h1>
                <p>Sudah punya akun?</p>
                <div class="belum-daftar">
                    <a href="/login">Masuk</a>
                </div>
                <input type="text" name = "name" id="name" class="label-box" placeholder="Nama Lengkap" required>
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input type="email" name = "email" id="email" class="label-box" placeholder="Email" required>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input type="password" name = "password" id="password" class="label-box" placeholder="Password" required>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input type="text" name = "telp" id="telp" class="label-box" placeholder="No. Handphone" required>
                <?php $__errorArgs = ['telp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input type="hidden" name = "tipe" value="pembeli">
                <button>Daftar</button>
            </form>
        </div>
            
            
        
          
    </body>

</head>
<body>
    
</body>
</html><?php /**PATH C:\Ghiyats\Kuliah\Semester 5\RPL Impal\Tugas\Rentify\resources\views/daftar.blade.php ENDPATH**/ ?>