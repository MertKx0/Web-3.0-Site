<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../Style-Css/820Pixel.css">
    <link rel="stylesheet" href="../Style-Css/375Pixel.css">
    <link rel="stylesheet" href="../Style-Css/412Pixel.css">
    <title>Haylaz-Game</title>
</head>

<body>

<div class="sidebar">

       <div class="logo">
        <i class='bx bx-menu' style="cursor: pointer;"></i>

           <a href="../index.php">
        <div class="logo-name"><span>Haylaz</span>Game</div>
           </a>

       </div>
    <ul class="side-menu">
        <li><a href="../index.php"><i class='bx bx-home'></i>Ana Sayfa</a></li>
        <li class="active"><a href="Android.php"><i class='bx bxl-android'></i>Android-APK</a></li>
        <li><a href="../Windows/Uygulamalar.php"><i class='bx bx-analyse'></i>Uygulamalar</a></li>
        <li><a href="../Windows/Windows.php"><i class='bx bxl-windows'></i>Windows-İSO</a></li>
        <li><a href="../Mac-OS/Mac-OS.php"><i class='bx bxl-apple'></i>Mac-OS</a></li>
        <li><a href="WebPanelLogin.php"><i class='bx bx-support'></i>WebPanel</a></li>
    </ul>

</div>


<!-- End of Sidebar -->

<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <nav>

        <form method="post">
            <div class="form-input" style="">
                <input type="search" name="aranan_class" placeholder="Search...">
                <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
            </div>
        </form>

        <input type="checkbox" id="theme-toggle" hidden style="">
        <label for="theme-toggle" class="theme-toggle" style=""></label>


    </nav>

    <!-- End of Navbar -->

    <main>
        <div class="header">
            <div class="left">
                <h1>Android-APK</h1>
            </div>
        </div>

        <?php
        // Sınıf ve içeriklerin bir eşleştirme dizisi
        $siniflar_ve_icerikler = array(
            'Roblox' => '<div class="bottom-data" style="float: left;">
            <div class="orders">

                <div class="resim" style="float: left;">
                    <img src="../images/android/Roblox.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>ROBLOX</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.roblox.client?version=latest"><i class="bx bxs-download"></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>',
            'BrawlStars' => '<div class="bottom-data" style="float: left;">
            <div class="orders" style="margin-left: 5px;">

                <div class="resim" style="float: left;">
                    <img src="../images/android/BrawlStars.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>Brawl</b><br>
                    <b>Stars</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.supercell.brawlstars?version=latest"><i class="bx bxs-download"></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>',
            'sinif3' => 'Bu sınıfın içeriği burada.',

        );


        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['aranan_class'])) {
            $aranan_class = $_POST['aranan_class'];


            if (array_key_exists($aranan_class, $siniflar_ve_icerikler)) {
                echo "<h2>$aranan_class İçeriği:</h2>";
                echo '<div class="icerik" id="' . $aranan_class . '">' . $siniflar_ve_icerikler[$aranan_class] . '</div>';
            } else {
                echo "<h2>$aranan_class Bulunamadı</h2>";
            }
        }
        ?>

        <script>
            window.onload = function () {
                <?php
                $sinif_isimleri = array_keys($siniflar_ve_icerikler);
                foreach ($sinif_isimleri as $sinif) {
                    echo "document.getElementById('$sinif').style.display = 'block';";
                }
                ?>
            }
        </script>




        <div class="bottom-data" style="float: left;">
            <div class="orders">

                <div class="resim" style="float: left;">
                    <img src="../images/android/Roblox.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>ROBLOX</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.roblox.client?version=latest"><i class='bx bxs-download'></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>

        <div class="bottom-data" style="float: left;">
            <div class="orders" style="margin-left: 5px;">

                <div class="resim" style="float: left;">
                    <img src="../images/android/BrawlStars.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>Brawl</b><br>
                    <b>Stars</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.supercell.brawlstars?version=latest"><i class='bx bxs-download'></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>

        <div class="bottom-data" style="float: left;">
            <div class="orders" style="margin-left: 5px;">

                <div class="resim" style="float: left;">
                    <img src="../images/android/ApexRacing.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>Apex</b><br>
                    <b>Racing</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/XAPK/com.PURE.Puredrifting?version=latest"><i class='bx bxs-download'></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>

        <div class="bottom-data" style="float: left;">
            <div class="orders" style="margin-left: 5px;">

                <div class="resim" style="float: left;">
                    <img src="../images/android/AmongUs.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>Among</b><br>
                    <b>Us</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.innersloth.spacemafia?version=latest"><i class='bx bxs-download'></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>

        <div class="bottom-data">
            <div class="orders" style="margin-left: 5px;">

                <div class="resim" style="float: left;">
                    <img src="../images/android/SahinDrift.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>Şahin</b><br>
                    <b>Drift</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.clapgames.sahinarabadriftoyunu?version=latest"><i class='bx bxs-download'></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>

        <div class="bottom-data">
            <div class="orders" style="margin-left: 5px;">

                <div class="resim" style="float: left;">
                    <img src="../images/android/Roblox.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>ROBLOX</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.roblox.client?version=latest"><i class='bx bxs-download'></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>

        <div class="bottom-data">
            <div class="orders" style="margin-left: 5px;">

                <div class="resim" style="float: left;">
                    <img src="../images/android/Roblox.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>ROBLOX</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.roblox.client?version=latest"><i class='bx bxs-download'></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>

        <div class="bottom-data">
            <div class="orders" style="margin-left: 5px;">

                <div class="resim" style="float: left;">
                    <img src="../images/android/Roblox.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>ROBLOX</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.roblox.client?version=latest"><i class='bx bxs-download'></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>

        <div class="bottom-data">
            <div class="orders" style="margin-left: 5px;">

                <div class="resim" style="float: left;">
                    <img src="../images/android/Roblox.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>ROBLOX</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.roblox.client?version=latest"><i class='bx bxs-download'></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>

        <div class="bottom-data">
            <div class="orders" style="margin-left: 5px;">

                <div class="resim" style="float: left;">
                    <img src="../images/android/Roblox.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>ROBLOX</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.roblox.client?version=latest"><i class='bx bxs-download'></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>

        <div class="bottom-data">
            <div class="orders" style="margin-left: 5px;">

                <div class="resim" style="float: left;">
                    <img src="../images/android/Roblox.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>ROBLOX</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.roblox.client?version=latest"><i class='bx bxs-download'></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>

        <div class="bottom-data">
            <div class="orders" style="margin-left: 5px;">

                <div class="resim" style="float: left;">
                    <img src="../images/android/Roblox.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>ROBLOX</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.roblox.client?version=latest"><i class='bx bxs-download'></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>

        <div class="bottom-data">
            <div class="orders" style="margin-left: 5px;">

                <div class="resim" style="float: left;">
                    <img src="../images/android/Roblox.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>ROBLOX</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.roblox.client?version=latest"><i class='bx bxs-download'></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>

        <div class="bottom-data">
            <div class="orders" style="margin-left: 5px;">

                <div class="resim" style="float: left;">
                    <img src="../images/android/Roblox.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>ROBLOX</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.roblox.client?version=latest"><i class='bx bxs-download'></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>

        <div class="bottom-data">
            <div class="orders" style="margin-left: 5px;">

                <div class="resim" style="float: left;">
                    <img src="../images/android/Roblox.webp">
                </div>
                <div class="yazi" style="float: left;">
                    <b>ROBLOX</b>
                </div><br>
                <div class="link" style="float: left; margin-top: 1rem; font-size: 1.2rem;">
                    <button>
                        <a href="https://d.apkpure.com/b/APK/com.roblox.client?version=latest"><i class='bx bxs-download'></i><b>İ N D İ R</b></a>
                    </button>
                </div>

            </div>
        </div>

    </main>

</div>

<script src="../Js/index.js"></script>
</body>

</html>