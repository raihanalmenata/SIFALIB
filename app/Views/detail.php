<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../css/user/utility.css">
    <link rel="stylesheet" href="../css/user/detail.css">
    <title>SIFA-DIGILIB</title>
</head>

<body class="col justify-between align-center">
    <nav class="row justify-center">
        <div id="nav-elements" class="row justify-between">
            <h1>
                <b>SIFA</b>
                <br>
                <p>Digital Library</p>
            </h1>
            <img src="../img/logo.png" alt="" id="logo">
            <div class="group row align-center">
                <div class="group row align-center">
                    <span class="material-icons-outlined" id="language">
                        language
                    </span>
                    <p id="language-options">
                        <span id="ID"> ID </span>
                        |
                        <span id="EN"> EN </span>
                    </p>
                </div>
                <div id="login"> LOGIN </div>
            </div>
        </div>
    </nav>

    <main class="col align-center">
        <table>
                <caption id="table-title">
                    <h2>
                        Detail Karya Tulis Ilmiah
                    </h2>
                    <h3>
                        <?= $publication['title']?>
                    </h3>
                </caption>
            <tbody>
                <tr id="title">
                    <th class="row justify-between">
                        <p class="value">Judul</p>
                        <p>:</p>
                    </th>
                    <td>
                        
                        <?= $publication['title']?>
                        
                    </td>
                </tr>
                <tr id="author">
                    <th class="row justify-between">
                        <p class="value">Penulis</p>
                        <p>:</p>
                    </th>
                    <td>
                        
                        <?= $publication['author']?>
                        
                    </td>
                </tr>
                <tr id="year">
                    <th class="row justify-between">
                        <p class="value">Tahun <br> Terbit</p>
                        <p>:</p>
                    </th>
                    <td>
                        
                        <?= $publication['year']?>
                        
                    </td>
                </tr>
                <tr id="subject">
                    <th class="row justify-between">
                        <p class="value">Subjek</p>
                        <p>:</p>
                    </th>
                    <td>
                        
                        <?php foreach($subjects as $sub) :?>
                            <?= $sub['subject_name']?> /
                        <?php endforeach;?>   
                        
                    </td>
                </tr>
                <tr id="type">
                    <th class="row justify-between">
                        <p class="value">Jenis KTI</p>
                        <p>:</p>
                    </th>
                    <td>
                        
                        <?= $publication['type']?>
                        
                    </td>
                </tr>
                <tr id="file">
                    <th class="row justify-between">
                        <p class="value">Berkas</p>
                        <p>:</p>
                    </th>
                    <td>
                        
                            <a href="/my-pdf/<?= $publication['file']?> " target="blank">
                            <?= $publication['file']?>
                            </a>
                        
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="container row ">
            <a href="/" id="back-button" class="row align-center">
                <span class="material-icons-round" style="margin-right: 5px;">
                    arrow_back
                    </span>
                <p>Kembali ke Hasil Pencarian</p>
            </a>
        </div>
    </main>

    <footer class="row center">
            <a href="http://wa.me/08117117929" id="whatsapp" target="_blank">
                <span class="material-icons-outlined">
                    whatsapp
                </span>
            </a>
        <div class="group row">
            <div id="about">
                <h1>Apa itu SIFALIB?</h1>
                <p>
                    <b>SIFALIB</b> merupakan laman yang menyediakan dokumen penelitian secara digital baik yang dilakukan oleh RSUD Siti Fatimah maupun penelitian yang dilakukan oleh pihak eksternal di RSUD Siti Fatimah.
                </p>
            </div>
            <div id="navigation">
                <h1>Navigasi</h1>
                <ul>
                    <a href="">
                        <li>Pencarian</li>
                    </a>
                    <a href="">
                        <li>Tentang Kami</li>
                    </a>
                    <a href="/faq">
                        <li>FAQ</li>
                    </a>
                </ul>
            </div>
            <div id="contacts">
                <h1>Narahubung</h1>
                <ul>
                    <a href="">
                        <li class="row">
                            <span class="material-icons-round">
                                call
                            </span> 
                            <p>
                                0811 7117 929
                            </p>
                        </li>
                    </a>
                    <a href="">
                        <li class="row">
                            <span class="material-icons-round">
                                mail
                            </span>
                            <p>
                                diklatrsudsitifatimah@gmail.com
                            </p>
                        </li>
                    </a>
                    <a href="">
                        <li class="row">
                            <span class="material-icons-round">
                                location_on
                                </span>
                                <p>
                                Jl. Kolonel H. Burlian, Suka Bangun, Sukarami, Kota Palembang, Sumatera Selatan 30151
                                </p>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>