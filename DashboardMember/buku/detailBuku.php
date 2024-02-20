<?php 
require "../../config/config.php";
$idBuku = $_GET["id"];
$query = queryReadData("SELECT * FROM buku WHERE id_buku = '$idBuku'");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../style.css">
     <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
     <title>Detail Buku || Member</title>
     <link rel="icon" href="../../assets/logoh.png" type="image/png">
  </head>
  <body style="background: url(../../assets/bg.jpg) fixed; ">
    <nav class="navbar fixed-top shadow-sm">
      <div class="container-fluid" style="background: black;">
        <a class="navbar-brand" href="#">
          <img src="../../assets/logoNav.png" alt="logo" width="220px">
        </a>
        
        <a class="btn " href="../dashboardMember.php" style="color: white;">Dashboard</a>
      </div>
    </nav>
    
  <div class="p-4 mt-5">
    <h2 class="mt-5" style="color: white;">Detail Buku</h2>
    <div class="d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
      <?php foreach ($query as $item) : ?>
  <img src="../../imgDB/<?= $item["cover"]; ?>" class="card-img-top" alt="coverBuku" height="250px">
  <div class="card-body">
    <h5 class="card-title"><?= $item["judul"]; ?></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Id Buku : <?= $item["id_buku"]; ?></li>
    <li class="list-group-item">Kategori : <?= $item["kategori"]; ?></li>
    <li class="list-group-item">Pengarang : <?= $item["pengarang"]; ?></li>
    <li class="list-group-item">Penerbit : <?= $item["penerbit"]; ?></li>
    <li class="list-group-item">Tahun terbit : <?= $item["tahun_terbit"]; ?></li>
    <li class="list-group-item">Jumlah halaman : <?= $item["jumlah_halaman"]; ?></li>
    <li class="list-group-item">Deskripsi buku : <?= $item["buku_deskripsi"]; ?></li>
  </ul>
  <?php endforeach; ?>
  <div class="card-body">
    <a href="daftarBuku.php" class="btn btn-danger">Batal</a>
     <a href="../formPeminjaman/pinjamBuku.php?id=<?= $item["id_buku"]; ?>" class="btn btn-success">Pinjam</a>
     </div>
    </div>
   </div>
  </div>
  

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>