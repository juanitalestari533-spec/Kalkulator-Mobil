<?php
if (isset($_GET["pesan"])){
    $pesan = "<p> {$_GET["pesan"]} <p>";
}
else {
    $pesan = "";
}

// ambil nilai nama jika ada
 if (isset($_GET["nama"])){
 $nilai_nama = $_GET["nama"];
 }
 else {
 $nilai_nama = "";
 }

 // ambil nilai email jika ada
 if (isset($_GET["email"])){
 $nilai_email = $_GET["email"];
 } else {
 $nilai_email = "";
 }

 // ambil nilai harga mobil jika ada
 if (isset($_GET["hargamobil"])){
 $nilai_hargamobil = $_GET["hargamobil"];
 } else {
 $nilai_hargamobil = "";
 }

 // ambil nilai harga mobil jika ada
 if (isset($_GET["tenor"])){
 $nilai_tenor = $_GET["tenor"];
 } else {
 $nilai_tenor = "";
 }

 // ambil nilai harga mobil jika ada
 if (isset($_GET["dp"])){
 $nilai_dp = $_GET["dp"];
 } else {
 $nilai_dp = "";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tugas1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- nav -->
     <nav>
        <div class="logo">
            <img src="aset/logof.png" alt="logo">
        </div>
        <div class="menu">
            <a href="#beranda">Beranda</a>
            <a href="#tentang">Tentang Perusahaan</a>
            <a href="#kontak">Kontak</a>
        </div>
     </nav>
    <!-- header -->
     <header id="beranda"> 
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="aset/mobil2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 style="color: white"><b>Ferrari- The Art of Performance</b></h2>
                        <p style="color: white">Temukan keindahan,kecepatan,dan inovasi dalam setiap mobil Ferrari.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="aset/mobil3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 style="color: white"><b>Ferrari- The Art of Performance</b></h2>
                        <p style="color: white">Temukan keindahan,kecepatan,dan inovasi dalam setiap mobil Ferrari.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="aset/mobil5.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 style="color: white"><b>Ferrari- The Art of Performance</b></h2>
                        <p style="color: white">Temukan keindahan,kecepatan,dan inovasi dalam setiap mobil Ferrari.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
     </header>

     <div class="container my-5" id="tentang">
        <div class="row g-4">
            
            <!-- card 1 -->
             <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Tentang Perusahaan</h5>
                        <br>
                        <p class="card-text">PT Eurokars Prima Utama merupakan perusahaan otomotif yang berperan sebagai <b>importir dan distributor eksklusif mobil Ferrari di Indonesia</b>.
                             Perusahaan ini merupakan bagian dari Eurokars Group dan menyediakan berbagai layanan untuk pelanggan Ferrari, mulai dari penjualan mobil baru, Ferrari Approved (mobil bekas resmi), hingga layanan servis dan purnajual.
                             PT Eurokars Prima Utama juga memiliki showroom dan fasilitas layanan Ferrari di kawasan Menteng, Jakarta Pusat, yang dirancang untuk memberikan pengalaman pelanggan sesuai standar Ferrari.
                             Dengan perannya tersebut, perusahaan menjadi salah satu bagian penting dalam menghadirkan dan melayani kendaraan Ferrari di pasar Indonesia.</p>
                    </div>
                </div>
             </div>

             <!-- card 2 -->
             <div class="col-md-6">
                <div class="card h-100">
                    <img src="aset/mobil4.jpg" class="card-img-top" alt="gambar">
                    <div class="card-body">
                        <h5 class="card-title"><b>Terpopuler</b></h5>
                        <p class="card-text">Ferrari ini merupakan salah satu mobil Ferrari yang <b>populer</b> berkat desainnya yang sporty, agresif, dan performanya yang tinggi.
                             Mobil ini juga memiliki tampilan khas yang menarik perhatian para penggemar otomotif.</p>
                    </div>
                </div>
             </div>
        </div>
    </div>

    <section class="kalkulator">
    <h2>Kalkulator Perhitungan</h2>

    <?php echo $pesan ?>

    <form action="proses1.php" method="POST">
        <label for="">Nama</label>
        <input type="text" name="nama" id="" value="<?php echo $nilai_nama ?>">

        <br> <br>

        <label for="">Email</label>
        <input type="text" name="email" id=""  value="<?php echo $nilai_email ?>">

        <br> <br>
        <label for="">Harga Mobil</label>
        <input type="number" name="hargamobil" id=""  value="<?php echo $nilai_hargamobil ?>">

        <br> <br>

        <p>tenor</p>
        <input type="radio" name="tenor" id="" value="1"
        <?php if ($nilai_tenor == "1") echo "checked"; ?>>
        <label for="">1 Tahun</label>
        <input type="radio" name="tenor" id="" value="2"
        <?php if ($nilai_tenor == "2") echo "checked"; ?>>
        <label for="">2 Tahun</label>
        <input type="radio" name="tenor" id="" value="3"
        <?php if ($nilai_tenor == "3") echo "checked"; ?>>
        <label for="">3 Tahun</label>
        <input type="radio" name="tenor" id="" value="4"
        <?php if ($nilai_tenor == "4") echo "checked"; ?>>
        <label for="">4 Tahun</label>
        <input type="radio" name="tenor" id="" value="5"
        <?php if ($nilai_tenor == "5") echo "checked"; ?>>
        <label for="">5 Tahun</label>

        <br> <br>
        <label for="DP">DP</label>
        <select name="dp" id="">
            <option value="10" <?php if ($nilai_dp == "10") echo "selected"; ?>>10%</option>
            <option value="20" <?php if ($nilai_dp == "20") echo "selected"; ?>>20%</option>
            <option value="30" <?php if ($nilai_dp == "30") echo "selected"; ?>>30%</option>
            <option value="40" <?php if ($nilai_dp == "40") echo "selected"; ?>>40%</option>
            <option value="50" <?php if ($nilai_dp == "50") echo "selected"; ?>>50%</option>
        </select>

        <br> <br>
        <input type="submit" name="submit" value="hitung">
    </form>
    </section>

    <div class="hasil">
    <h2>Hasil</h2>
    <?php
if (isset($_POST["submit"])) {
    //var_dump($_POST);
    $nama = $_POST ['nama'];
    $email = $_POST ['email'];
    $hargamobil = $_POST ['hargamobil'];
    $tenor = $_POST ['tenor'];
    $dp = $_POST ['dp'];
    $hargadpmobil = 0;
    $bunga = 20;
    $jumlahangsuran = 0;

    // mencari harga dp mobil
    if ($dp == 10) {
        $hargadpmobil = ($dp/100) * $hargamobil;
    }elseif ($dp == 20){
        $hargadpmobil = ($dp/100) * $hargamobil;
    }elseif ($dp == 30){
        $hargadpmobil = ($dp/100) * $hargamobil;
    }elseif ($dp == 40){
        $hargadpmobil = ($dp/100) * $hargamobil;
    }elseif ($dp == 50){
        $hargadpmobil = ($dp/100) * $hargamobil;
    }

    // mencari lama angsuran
    $lamaangsuran = 0;
    if ($tenor == 1) {
        $lamaangsuran = $tenor * 12;
    }elseif ($tenor == 2){
        $lamaangsuran = $tenor * 12;

    }elseif ($tenor == 3){
        $lamaangsuran = $tenor * 12;
    }elseif ($tenor == 4){
        $lamaangsuran = $tenor * 12;
    }elseif ($tenor == 5){
        $lamaangsuran = $tenor * 12;
    }

    // mencari bunga
    ($bunga == 20);
        $bunga = 20/100 * $hargamobil;
    

    //mencari jumlah angsuran 
    ($jumlahangsuran == 0);
        $jumlahangsuran = (($hargamobil + $bunga) - $hargadpmobil)/ $lamaangsuran;
    

    echo "Nama =" . $nama . "<br>";
    echo "Email =" . $email . "<br>";
    echo "Harga Mobil =" . $hargamobil . "<br>";
    echo "Tenor =" . $tenor . "Tahun <br>";
    echo "DP =" . $dp . "% <br>";
    echo "Lama Angsuran =" . $lamaangsuran .  "Bulan <br>";
    echo "DP Mobil =Rp." . $hargadpmobil . "rupiah<br>";
    echo "Bunga =Rp." . $bunga . "rupiah <br>";
    echo "Nominal Angsuran =Rp" . $jumlahangsuran . "rupiah per bulan <br>";
}else {
    echo "Silahkan isi datanya";
}
    ?>
    </div>

    <footer class="footer" id="kontak">
        <p>
            <b>FERRARI</b>
        </p>
        <p>Website pembelian mobil</p>
           <span><i class="bi bi-telephone-fill me-2">0858-7876-5566</i></span>
           <span><i class="bi bi-envelope-fill me-2">ferari@mobil.com</i></span>
    </footer>

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>