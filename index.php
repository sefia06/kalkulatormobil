<?php 
if (isset($_GET["pesan"])) {
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
    <title>Carlight</title>

     <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      
     <!-- CSS -->
      <link rel="stylesheet" href="style.css">

     <!--Bootstrap Icon-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
    

</head>
<body>

<!--HEADER-->
<header class="header">

    <div class="header-left">
        <div class="logo1"><i class="bi bi-car-front-fill"></i></div>
        <div class="nama-perusahaan">
            <h1>Carlight</h1>
            <p>Kredit Mobil Impian Bersama Carlight</p>
        </div>
    </div>

    <div class="header-right">
        <span><i class="bi bi-telephone-fill me-2"></i>0881-0240-12695</span>
        <span><i class="bi bi-envelope-fill me-2"></i>carlight@mobil.com</span>
    </div>

</header>



<!--NAVBAR-->
<nav class="navbar navbar-expand-lg nav-custom">
     <div class="container-fluid"> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span> 
        </button> 
        <div class="collapse navbar-collapse justify-content-center" id="navbarMenu">
            <ul class="navbar-nav"> 
                <li class="nav-item"> 
                    <a class="nav-link active" href="#beranda">Beranda</a>
                </li> 
                <li class="nav-item"> 
                   <a class="nav-link" href="#tentang">Tentang Perusahaan</a> 
                </li> 
                <li class="nav-item"> 
                   <a class="nav-link" href="#kontak">Kontak</a> 
                </li> 
            </ul>
        </div>
    </div>
</nav>



<!--SLIDER-->
<section id="beranda">
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="mobil4.jpg"  class="d-block w-100" alt="mobil">
      <div class="carousel-caption d-none d-md-block">
        <h2>Kredit Mobil Impian Anda</h2>
        <p>Kredit mobil impian anda bersama carlight pasti mudah</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="mobil2.jpg" class="d-block w-100" alt="mobil">
      <div class="carousel-caption d-none d-md-block">
        <h2>Mobil Impian Anda</h2>
        <p>Dapatkan mobil impian anda dengan pembiayaan ringan mudah dan cepat</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="mobil3.jpg" class="d-block w-100" alt="mobil">
      <div class="carousel-caption d-none d-md-block">
        <h2>Berkendara dengan nyaman </h2>
        <p>Bersama carlight anda bisa berkendara dengan nyaman dan aman</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>


<!--TENTANG DAN GAMBAR-->


  <div class="card-body">
    <section class="content-section" id="tentang">
    <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CARLIGHT</h5>
        <p class="card-text" > Carlight merupakan perusahaan yang bergerak dalam bidang pembiayaan kendaraan.</p>
            <p class="card-text"  >Kami membantu pelanggan mendapatkan kendaraan impian engan proses yang mudah dan cepat.</p>
            <p class="card-text">Mari bersinar bersama Carlight.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="">
      <div class="card-body">
        <img src="mobil1.jpg"  class="d-block w-100" alt="mobil">
      </div>
    </div>
  </div>
</div>
</section>
</div>



<!--KALKULATOR DAN PERHITUNGSN-->


<div class="">
<section class="kalkulator ">
 <h2>Perhitungan</h2>
 <br>

 <?php echo $pesan?>
    <form action="proses2.php" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama" id="" value="<?php echo $nilai_nama ?>" >

        <br><br>
        <label for="">Email</label>
        <input type="email" name="email" id="" class="form-contol" value="<?php echo $nilai_email ?>" >

        

        <br> <br>
        <label for="">Harga Mobil</label>
        <input type="number" name="hargamobil" id="" value="<?php echo $nilai_hargamobil ?>">

        <p>Tenor</p>
        <input type="radio" name="tenor" value="1"
        <?php if ($nilai_tenor == "1") echo "checked"; ?>>
        <label>1 Tahun</label>
        <input type="radio" name="tenor" value="2"
        <?php if ($nilai_tenor == "2") echo "checked"; ?>>
        <label>2 Tahun</label>
        <input type="radio" name="tenor" value="3"
        <?php if ($nilai_tenor == "3") echo "checked"; ?>>
        <label>3 Tahun</label>
        <input type="radio" name="tenor" value="4"
        <?php if ($nilai_tenor == "4") echo "checked"; ?>>
        <label>4 Tahun</label>
        <input type="radio" name="tenor" value="5"
        <?php if ($nilai_tenor == "5") echo "checked"; ?>>
        <label>5 Tahun</label>

        <br> <br>
      <select name="dp" id="DP">
        <option value="10" <?php if ($nilai_dp == "10") echo "selected"; ?>> 10% </option>
        <option value="20" <?php if ($nilai_dp == "20") echo "selected"; ?>> 20% </option>
        <option value="30" <?php if ($nilai_dp == "30") echo "selected"; ?>> 30% </option>
        <option value="40" <?php if ($nilai_dp == "40") echo "selected"; ?>> 40% </option>
        <option value="50" <?php if ($nilai_dp == "50") echo "selected"; ?>> 50% </option>
      </select>

        <br> <br>
        <input name="submit" type="submit" value="hitung" name="hitung">
    </form>
</section>
</div>

<div class="hasil">
  <h2>Hasil</h2>
  <br>
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
    

    //mencari dp harga mobil
    if ($dp == 10) {
        $hargadpmobil = ($dp/100) * $hargamobil;
    } elseif($dp == 20){
         $hargadpmobil = ($dp/100) * $hargamobil;

    }elseif($dp == 30){
         $hargadpmobil = ($dp/100) * $hargamobil;
    }elseif($dp == 40){
         $hargadpmobil = ($dp/100) * $hargamobil;
    }elseif($dp == 50){
         $hargadpmobil = ($dp/100) * $hargamobil;
    }




    //mencari lama angsuran
    $lamaangsuran = 0;
    if ($tenor == 1) {
        $lamaangsuran = $tenor * 12;
    }elseif($tenor == 2){
        $lamaangsuran = $tenor * 12;

    }elseif($tenor == 3){
        $lamaangsuran = $tenor * 12;
    }elseif($tenor == 4){
        $lamaangsuran = $tenor * 12;
    }elseif($tenor == 5){
        $lamaangsuran = $tenor * 12;
    }



    //mencari bunga
    if ($bunga == 20){
        $bunga = 20/100 * $hargamobil;
    }


    //menghitung jumlah angsuran
    if ($jumlahangsuran == 0) {
        $jumlahangsuran = (($hargamobil + $bunga) - $hargadpmobil )/ $lamaangsuran;

    }
    
    



    echo "nama = " . $nama . "<br> <br>";
    echo "email = " . $email . "<br> <br>";
    echo "hargamobil = " . $hargamobil . "<br> <br>";
    echo "tenor = " . $tenor . " tahun <br> <br>";
    echo "dp = " . $dp . "% <br> <br>";
    echo "Lama Angsuran = " . $lamaangsuran ."bulan <br> <br>";
    echo "DP Mobil = Rp" . $hargadpmobil . "rupiah <br> <br>";
    echo "Bunga = Rp" . $bunga . " rupiah <br> <br>";
    echo "Angsuran = Rp" . $jumlahangsuran . "rupiah <br> <br>";

}else{
    echo "silahkan isi datanya";
}
    
    

    ?>
</div>

<br>


<footer class="footer" id="kontak">
  <p>
    <b>CARLIGHT</b>
  </p>
  <p>Website tentang kredit mobil impian</p>
  
        <span><i class="bi bi-telephone-fill me-2"></i>0881-0240-12695</span>
        <span><i class="bi bi-envelope-fill me-2"></i>carlight@mobil.com</span>
    

</footer>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>