<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <style media="screen">
  body{
    background-image: url("p.png");
  }
  .card{
      margin-top: 175px ;
      margin-left: 350px ;
      width: 25%;

    }
  </style>
  <body>
    <div class="container">
      <div class="row">
        <div class="card col-sm-4">
          <div class="card-header ">
            <h1 align = "center">Data yang anda masukkan</h1>
          </div>
          <div class="card-body">
            <?php
            $nis = $_POST['nis'];
            $nama = $_POST['nama'];
            $nama = $_POST['nama'];
            $templahir = $_POST['templahir'];
            $tgllahir = $_POST['tgllahir'];
            $agama = $_POST['agama'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $notelp = $_POST['notelp'];
            $fb = $_POST['fb'];
            $ig = $_POST['ig'];
            $web = $_POST['web'];
            $alamat = $_POST['alamat'];
            $jurusan = $_POST['jurusan'];
            $kelas = $_POST['kelas'];
            $pesan = $_POST['pesan'];

            echo "nis anda = $nis<br>";
            echo "nama depan anda = $nama<br>";
            echo "nama belakang anda = $nama<br>";
            echo "tempat lahir  anda = $templahir<br>";
            echo "tanggal lahir anda = $tgllahir<br>";
            echo "agama anda = $agama<br>";
            echo "gender anda = $gender<br>";
            echo "email anda = $email<br>";
            echo "notelp anda = $notelp<br>";
            echo "facebook anda = $fb<br>";
            echo "instagram anda = $ig<br>";
            echo "web anda = $web<br>";
            echo "alamat anda = $alamat<br>";
            echo "jurusan anda = $jurusan<br>";
            echo "kelas anda = $kelas<br>";
            echo "pesan anda = $pesan<br>";
             ?>
            <h2 align = "center">Data Telah Berhasil diisi</h2>
             <h3 align = "right"><a href="daftar.siswa.php" >kembali</a></h3>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>