<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tempat</title>

    <body>
        <form action="/PerTempat/<?php echo e($tempat->id); ?>" method="post" enctype="multipart/form-data">
            <?php echo method_field('put'); ?>
            <?php echo csrf_field(); ?>   
            <label for="kategori_id">ID Kategori:</label><br>
            <input type="number" id="kategori_id" name="kategori_id" value="<?php echo e(old('kategori_id',$tempat->kategori_id)); ?>"><br>
            <br>
            <label for="name">Nama Tempat:</label><br>
            <input type="text" id="name" name="name" value="<?php echo e(old('name',$tempat->name)); ?>"><br>
            <br>
            <label for="desc">Deskripsi Tempat:</label><br>
            <textarea id="desc" name="desc" value="<?php echo e(old('desc',$tempat->desc)); ?>"></textarea><br>
            <br>
            <label for="alamat">Alamat:</label><br>
            <input type="text" id="alamat" name="alamat" value="<?php echo e(old('alamat',$tempat->alamat)); ?>"><br>
            <br>
            <label for="harga">Harga:</label><br>
            <input type="number" id="harga" name="harga" value="<?php echo e(old('harga',$tempat->harga)); ?>"><br>
            <br>
            <label for="rating">Rating:</label><br>
            <input type="number" id="rating" name="rating" min="0" max="5" value="<?php echo e(old('rating',$tempat->rating)); ?>"><br>
            <br>
            <label for="img">Image:</label><br>
            <input type="file" id="img" name="img"><br>
            <br>
            <label for="telp">Telp:</label><br>
            <input type="text" id="telp" name="telp" value="<?php echo e(old('telp',$tempat->telp)); ?>"><br>
            <br>
            <label for="gmaps">Link Gmaps:</label><br>
            <input type="text" id="gmaps" name="gmaps" value="<?php echo e(old('gmaps',$tempat->gmaps)); ?>"><br>
            <br>
            <input type="submit" value="submit">
          </form>
    </body>

</head>
<body>
    
</body>
</html><?php /**PATH C:\Ghiyats\Kuliah\Semester 5\RPL Impal\Tugas\Rentify\resources\views//Edit.blade.php ENDPATH**/ ?>