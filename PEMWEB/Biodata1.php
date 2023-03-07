<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
    $namadepan = "Vieri";
    $namatengah = "Arief";
    $namabelakang = "Maulana";
    $NPM = 21081010140;
    $tempat_lahir = "Sidoarjo";
    $jenis_kelamin = "Laki-Laki";
    $alamat = "P. Wahyu Taman Sarirogo AE-19";
    $Agama = "Islam";
    $tanggal_lahir = new DateTime("2003-06-29");
    $sekarang = new DateTime("today");
    if ($tanggal_lahir > $sekarang) 
    { 
    $tahun = "eror";
    }
    $tahun = $sekarang->diff($tanggal_lahir)->y;

    ?>
    <div class="latar">
        <div class="biodata" data-tilt>
            <div class="mainmenu">
                <ul>
                    <li class="dropdown"><img src="Button.png"><a href="#"></a>
                        <ul class="isi-dropdown">
                            <li><a href="Biodata.php">HOME</a></li>
                            <li><a href="Biodata2.php">PENDIDIKAN</a></li>
                            <li><a href="Biodata3.php">SKILL</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <img src="Profil.png">
            <h2>PROFILE</h2>
            <p><?php Nama : echo $namadepan. ' ' .$namatengah. ' ' .$namabelakang; ?><br>
            NPM : <?php echo $NPM; ?> <br>
            T.T.L : <?php echo $tempat_lahir. ', Umur Anda ' .$tahun; ?> tahun<br>
            Jenis Kelamin : <?php echo $jenis_kelamin; ?> <br>
            Alamat : <?php echo $alamat; ?> <br>
            Agama : <?php echo $Agama; ?> <br>
        </p>
        </div>
    </div>
</body>
</html>