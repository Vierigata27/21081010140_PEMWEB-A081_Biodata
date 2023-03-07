<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENDIDIKAN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    $sekolahSMA = "SMAN 2 SIDOARJO";
    $kuliah = "UPN Veteran Jawa Timur";

    ?>
    <div class="latar">
        <div class="biodata" data-tilt>
            <div class="mainmenu">
                <ul>
                    <li class="dropdown"><img src="Button.png"><a href="#"></a>
                        <ul class="isi-dropdown">
                            <li><a href="Biodata.php">HOME</a></li>
                            <li><a href="Biodata1.php">PROFILE</a></li>
                            <li><a href="Biodata3.php">SKILL</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <img src="Profil.png">
            <h2>PENDIDIKAN</h2>
            <p><?php echo $sekolahSMA;?> : 2018 - 2021<br>
            <?php echo $kuliah;?> : <br> 2021 - Sekarang
        </p>
        </div>
    </div>
</body>
</html>