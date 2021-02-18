<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?=$this->insert('seo')?>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha512-tDXPcamuZsWWd6OsKFyH6nAqh/MjZ/5Yk88T5o+aMfygqNFPan1pLyPFAndRzmOWHKT+jSDzWpJv8krj6x1LMA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css?v<?=date('i:s')?>" />

</head>

<body class="hebo">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section  -->
    <div class="">
        <div id="tophead">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tophead-contact">
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:(0274) 562292">(0274)
                                        562292</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i><a
                                        href="mailto:info@smamuh5yk.sch.id">info@smamuh5yk.sch.id</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tophead-right">
                            <ul class="tophead-social">
                                <li><a target="_blank" href="https://www.facebook.com/smamuh5yk"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/smamuh5yk"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="http://www.youtube.com/c/smamuh5yk"><i
                                            class="fa fa-youtube"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/smamuh5yk"><i
                                            class="fa fa-instagram"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-rss"></i></a></li>

                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-hitam  fixed-top piki"
            style="border-bottom: 1px solid #00000052;">
            <div class="container " style="display:block">
                <div class="row">
                    <div class="col-md-2 align-self-center">
                        <a class="navbar-brand" href="#">
                            <img style="align-self: center;" class="w-100" src="images/<?=$deskrip[1]?>" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>

                    <div class="col-md-10 align-self-center">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto d-flex justify-content-around w-100">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?=$base_url?>">HOME <span
                                            class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        PROFILE
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="profile-sekolah">Profile Sekolah</a>
                                        <a class="dropdown-item" href="guru-staf">Guru & Staf</a>
                                        <a class="dropdown-item" href="visi-misi">Visi Misi</a>
                                        <a class="dropdown-item" href="sarana-prasarana">Sarana Prasaran</a>
                                        <a class="dropdown-item" href="prestasi">Prestasi</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="artikel">BERITA / INFO SEKOLAH</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        GALERI
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="foto">Foto</a>
                                        <a class="dropdown-item" href="video">Video</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="kontak">KONTAK</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="clearfix"></div>
    <!-- Header section end  -->
    <div>
        <?= $this->section('content')?>
    </div>


    <!-- Footer section   -->
    <div class="footer-container-top" style="color: black;">
        <div class="container">
            <div class="row " style="padding: 15px;">
                <div class="col-md-3  ">
                    <h5 class="mb-4" style="color: white;">LABEL KLAMBI</h5>
                    <div class="pachi-pachi">
                        <?=$deskrip[80]?>
                        <br>
                        <!-- <a href="https://www.instagram.com/satuoblong"> <i class="fa fa-instagram"></i> </a>
                        <a href="https://www.facebook.com/satuoblongindonesia/"> <i class="fa fa-facebook"></i> </a>
                        <a href="https://twitter.com/satuoblong"> <i class="fa fa-twitter"></i> </a> -->
                    </div>
                </div>
                <div class="col-md-3  ">
                    <h5 class="mb-4" style="color: white;">PRODUK KAMI</h5>
                    <div>
                        <?php foreach($menu as $r) : ?>
                        <div style="line-height:0.5;">

                            <a href="kategori-<?=$r['judul_seo']."-".$r['id_produk_kategori']  ?>"
                                role="button"><?=$r['judul']?>
                                (<?=$r['jml']?>)
                            </a>

                        </div>
                        <br>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <h5 class="mb-4" style="color: white;">PEMBAYARAN</h5>
                    <div>
                        <?=$deskrip[18]?>
                    </div>
                    <h5 style="color: white;">PENGIRIMAN</h5>
                    <div>
                        <p><?=$deskrip[19]?></p>
                    </div>
                </div>
                <div class="col-md-3 nav-col">

                    <h5 class="mb-4" style="color: white;">NAVIGASI</h5>
                    <p><a href="produk">Produk</a></p>
                    <p><a href="cara-pemesanan-pembayaran-label">Cara Order</a></p>
                    <p><a href="testimoni">Testimoni</a></p>
                    <p><a href="artikel">Artikel</a></p>
                    <!--
                    <div>
                        <a href="https://www.instagram.com/satuoblong">
                            <img src="images/igs.png" target="blank" style="height: 80px;">
                        </a>
                    </div>
                    -->
                </div>
            </div>
            <div class="row text-center">
                <span class="copyright col-xs-12 col-md-12">© 2021 All Right Reserved <a href="labelklambi.com"
                        style="margin-right: 0px;">Label Klambi</a>, Powered by <a href="https://jogjamediaweb.com"
                        title="Jogja Media Web | Jasa Pembuatan Website Jogja">JMW</a></span>
                <span class=" col-md-12  col-xs-12 ">
                    <small style="font-size:10px">
                        Today Visitors: 8 |
                        Total Visitors: 1804 |
                        Online Visitors: <b>1 </b> </small>
                </span>

            </div>
        </div>
    </div>
    <!-- Footer section end  -->



    <!-- Button model end -->

    <!--====== Javascripts & Jquery ======-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
        integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha512-Ah5hWYPzDsVHf9i2EejFBFrG2ZAPmpu4ZJtW4MfSgpZacn+M9QHDt+Hd/wL1tEkk1UgbzqepJr6KnhZjFKB+0A=="
        crossorigin="anonymous"></script>
    <script src="assets/js/yonder.js?<?=date('i:s')?>"></script>


</body>

</html>