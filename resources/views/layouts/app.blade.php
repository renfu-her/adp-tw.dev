<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Language" content="zh-tw">
    <meta name="keywords"
        content="生技、奈米科技、乾式破壁研磨、破壁專利、保健食品、ADP(All day pass)、糖尿、血糖、減肥、新冠、covid-19、流行性感冒、呼吸道感染、紫蘇噴霧/噴粉、地瓜葉粉、木瓜鳳梨酵素、丁香魚粉腸胃道保健" />
    <meta name="description" content="專精研發乾式破壁技術團隊，整合生技有機研發,提供大眾高效高CP值保健食品，提升健康與免疫力，致力於大健康做貢獻。" />
    <meta name="company" content="昶安奈米應用科技有限公司" />
    <meta name="robots" content="all">
    <meta name="robots" content="index,follow">
    <meta name="distribution" content="Taiwan" />
    <meta name="revisit-after" content="7 days" />
    <meta name="rating" content="general" />
    <meta property="og:title" content="昶安奈米應用科技有限公司" />
    <meta property="og:description" content="專精研發乾式破壁技術團隊，整合生技有機研發,提供大眾高效高CP值保健食品，提升健康與免疫力，致力於大健康做貢獻。" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="昶安奈米應用科技有限公司" />
    <meta property="og:image" content="https://adp-tw.com/admin/goods_pic/1130310105452.jpg" />
    <link rel="image_src" href="https://adp-tw.com/admin/goods_pic/1130310105452.jpg" />
    <title>昶安奈米應用科技有限公司</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.svg') }}" />

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Fontawesome core CSS -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" />

    <!-- Animate CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />

    <!-- AOS core CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />



</head>

<body class="main">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <!-- <img src="./img/logo.png" class="brand-logo img-fluid"> -->
                <img src="{{ asset('images/logo-black.png') }}" class="dark-logo img-fluid">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about" onclick="scrollToAbout()">關於昶安</a>
                        <script>
                            function scrollToAbout() {
                                // 如果手機選單處於展開狀態，則關閉它
                                var navbarCollapse = document.querySelector('.navbar-collapse');
                                if (navbarCollapse.classList.contains('show')) {
                                    navbarCollapse.classList.remove('show');
                                }
                            }
                        </script>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products">產品資訊</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/skills">專業技術</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/videos">影音專區</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">聯絡我們</a>
                    </li>
                    <!-- 20230304 新增 -->
                    <li class="nav-item d-none"> <!-- 若不想顯示此按鈕，只要在class加上 "d-none" 即可 -->
                        <a class="nav-link navlink-border" href="#" target="_blank">網路購物</a>
                    </li>
                    <!-- 20230304 新增 -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    @yield('content')

    <!-- Footer -->
    <footer class="sec-footer py-5 bg-main-gradient">
        <div class="container">
            <div
                class="d-flex flex-md-row flex-column justify-content-md-between justify-content-start align-items-md-center w-100">
                <div class="d-flex flex-md-row flex-column align-items-md-center">
                    <ul class="link-group">
                        <li><a href="tel:+886-6-2791367" class="text-white"><img src="./img/ic-phone.svg"
                                    class="footer-listicon">(06)279-1367</a></li>
                        <li><a href="https://maps.app.goo.gl/RoF5fMJEQRY5JgFm6" class="text-white" target="_blank"><img
                                    src="./img/ic-marker.svg" class="footer-listicon">臺南市仁德區一甲里19鄰太乙三街21號</a></li>
                    </ul>
                </div>
                <span class="m-0 text-md-right text-left text-nowrap text-white">Copyright &copy; 2024 <br>
                    昶安奈米應用科技有限公司</span>
            </div>
        </div>
    </footer>

    <!-- Jquery JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Fontawesome core JavaScript -->
    <script src="{{ asset('js/all.min.js') }}"></script>

    <!-- AOS core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Iconify core JavaScript -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <!-- Core theme JS-->
    @yield('js')

</body>

</html>
