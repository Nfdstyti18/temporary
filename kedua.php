 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman 2 ya</title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body> 
    <div class="kolom">
        <h1 style="color:white";>Sekolah POS</h1>
        <h2 style="color:white";>- --- -- --- -</h2>
        <h3 style="color:white";>Kumpulan catatan menarik anak sekolah</h3>
        <p><a href="tambah.php"class="tbl-pink">Tambahkan catatan</a></p>
    </div>
    <style>
    body {
        background-image: url('0.jpg'); 
        background-size: cover;
        background-position: center; 
        background-color: white;
        height: 100vh;
    }

    a.tbl-pink {
    background: #fc5185;
    border-radius: 30px;
    margin: 40px;
    padding: 15px 30px 15px 30px;
    color: white;
    cursor: pointer;
    font-weight: bold;
    text-decoration: none;
    }

    a.tbl-pink:hover {
    background: #3f72af;
    text-decoration: none;
    }

    a.tbl-biru {
    background:#3f72af ;
    border-radius: 30px;
    margin: 40px;
    padding: 15px 70px 15px 70px;
    color: white;
    cursor: pointer;
    font-weight: bold;
    text-decoration: none;
    }

    a.tbl-biru:hover {
    background: #fc5185;
    text-decoration: none;
    }

    a.tbl-2-pink {
    background: #fc5185;
    border-radius: 30px;
    margin: 40px;
    padding: 15px 70px 15px 70px;
    color: white;
    cursor: pointer;
    font-weight: bold;
    text-decoration: none;
    }

    a.tbl-2-pink:hover {
    background: #3f72af;
    text-decoration: none;
    }

    .row {
    display: flex;
    margin-top:2px
    }


    </style>
    <?php 
        $sql="select * from kolaborasi";
        include "koneksi.php";
        $query=mysqli_query($koneksi,$sql);
        $kolaborasi=mysqli_fetch_all($query,MYSQLI_ASSOC); 
    ?>
    <?php 
    foreach ($kolaborasi as $sc) { 
    ?>
    <div class="sidebar">
        <h4><?= $sc['judul']?></h4>
        <p><?= $sc['deskripsi']?></p> 
        <p><?= $sc['tanggal_penulisan']?></p> 
        <p><?= $sc['penulis']?></p> 
    </div> 
    <br>
    <div class="row">
        <p><a href="edit.php?id=<?=$sc['id']?>"class="tbl-biru">Edit</a></p>
        <p><a href="delete.php?id=<?=$sc['id']?>" onclick="return confirm('Apakah anda yakin akan menghapus catatan')"class="tbl-2-pink">Hapus</a></p>
    </div>

    <?php
    } 
    ?>
 </body>
 </html> 
 