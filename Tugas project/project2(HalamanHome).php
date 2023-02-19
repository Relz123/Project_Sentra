<?php
    require 'project1(koneksi).php';
    $datas = query("select * from daftar_hp");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
      body{
            min-height: 100vh;
        }
        table,tr,th,td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<body class="container">
    <header>
    <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Gadget Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="project6(Halaman_Home).php">Kembali ke halaman awal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logoutt>></a>
        </li>
        
      </ul>
    </div>
  </div>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </header>

    
    <table class="table table-striped-columns">
    <tr>
            <th>ID</th>
            <th>merek</th>
            <th>Jenis gadget</th>
            <th>spesifikasi</th>
            <th>Action</th>

        </tr>

        <?php foreach ($datas as $data) : ?>
            <tr>
                <td><?=$data["id"]; ?></td>
                <td><?=$data["merek"]; ?></td>
                <td><?=$data["jenis_gadget"]; ?></td>
                <td><?=$data["spesifikasi"]; ?></td>
                <td><a href="project4(Hapus_data).php?id=<?= $data["id"]; ?>"
                onclick="return confirm('?');">Hapus</a></td>
            </tr>
            <?php endforeach;?>
            <tr>
                <td colspan="2"><a href="project3(Tambah_data).php">Tambah Data</a></td>
            </tr>
    </table>
</body>
</html>