<?php
if (!isset($_POST["submit"])) {
    header("Location: index.php");
}  


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
     
     //var_dump($_POST);
    if (isset($_POST["submit"])) {
    $nama =trim($_POST ['nama']);
    $email =trim($_POST ['email']);
    $hargamobil = $_POST ['hargamobil'];
    $tenor =trim($_POST ['tenor']);
    $dp =trim($_POST ['dp']);
    $hargadpmobil = 0;
    $bunga = 20;
    $jumlahangsuran = 0;


//Repopulate
// siapkan nilai untuk dikirim kembali
 $query_nama = "nama=".urlencode($nama);
 $query_email = "email=".urlencode($email);
 $query_hargamobil = "hargamobil=".urlencode($hargamobil);
 $query_tenor = "tenor=".urlencode($tenor);
 $query_dp = "dp=".urlencode($dp);
 $isi_form = "&$query_nama&$query_email&$query_hargamobil&$query_tenor&$query_dp";

 // cek apakah "nama" sudah diisi atau tidak
 if (empty($nama)) {
 $pesan = urlencode("Nama harus diisi yaaa cantikk !!");
 header("Location: index.php?pesan={$pesan}{$isi_form}");
 die();
 }

// cek apakah "email" sudah diisi atau tidak
 if (empty($email)) {
 $pesan = urlencode("Email harus diisi yaa cantikk !!");
 header("Location: index.php?pesan={$pesan}{$isi_form}");
 die();
 }

 // cek apakah "hargamobil" sudah diisi atau tidak
 if (empty($hargamobil)) {
 $pesan = urlencode("harga mobil harus diisi ya cantik!!");
 header("Location: index.php?pesan={$pesan}{$isi_form}");
 die();
 }

// cek apakah "tenor" sudah diisi atau tidak
 if (empty($tenor)) {
 $pesan = urlencode("tenor harus diisi ya cantik!!");
 header("Location: index.php?pesan={$pesan}{$isi_form}");
 die();
 }



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

}


    ?>
</body>
</html>