<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../Style-Css/Dark-820Pixel.css">
    <link rel="stylesheet" href="../Style-Css/Dark-375Pixel.css">
    <link rel="stylesheet" href="../Style-Css/Dark-412Pixel.css">
    <title>Haylaz-Game</title>
</head>

<body class="dark">

<div class="sidebar">
    <div class="logo">
        <i class='bx bx-menu' style="cursor: pointer;"></i>

        <a href="../Dark-index.php">
            <div class="logo-name"><span>Haylaz</span>Game</div>
        </a>

    </div>
    <ul class="side-menu">
        <li><a href="../Dark-index.php"><i class='bx bx-home'></i>Ana Sayfa</a></li>
        <li><a href="../Dark-Android/Dark-Android.php"><i class='bx bxl-android'></i>Android-APK</a></li>
        <li class="active"><a href="Dark-Uygulamalar.php"><i class='bx bx-analyse'></i>Uygulamalar</a></li>
        <li><a href="Dark-Windows.php"><i class='bx bxl-windows'></i>Windows-İSO</a></li>
        <li><a href="../Mac-OS/Dark-Mac-OS.php"><i class='bx bxl-apple'></i>Mac-OS</a></li>
        <li><a href="WebPanelLogin.php"><i class='bx bx-support'></i>WebPanel</a></li>
    </ul>

</div>
<!-- End of Sidebar -->

<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <nav>

        <form method="post">
            <div class="form-input">
                <input type="search" name="aranan_class" placeholder="Search...">
                <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
            </div>
        </form>
        <button onclick="yonlendir()" style="border-radius: 5px; background: white; text-align: center; font-size: medium;"><i class='bx bxs-sun' ></i></button>

        <script>
            function yonlendir() {
                window.location.href = "../../Windows/Uygulamalar.php";
            }
        </script>


    </nav>

    <!-- End of Navbar -->

    <main>
        <div class="header">
            <div class="left">
                <h1>Hoşgeldiniz</h1>
            </div>
        </div>

        <div class="bottom-data">
            <div class="orders">

                Merhaba

            </div>
        </div>

        <div class="bottom-data">
            <div class="orders">

                Merhaba

            </div>
        </div>

        <div class="bottom-data">
            <div class="orders">

                Merhaba

            </div>
        </div>

        <div class="bottom-data">
            <div class="orders">

                Merhaba

            </div>
        </div>

        <div class="bottom-data">
            <div class="orders">

                Merhaba

            </div>
        </div>

    </main>

</div>

<script src="../Js/Dark-index.js"></script>
</body>

</html>