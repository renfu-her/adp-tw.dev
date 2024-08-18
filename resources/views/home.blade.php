@extends('layouts.app')

@section('content')
    <!-- Carousel KV -->
    <header class="kv-header">
        <div id="carouselKV" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselKV" data-slide-to="0" class="active"></li>
                <li data-target="#carouselKV" data-slide-to="1"></li>
                <li data-target="#carouselKV" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item item1 active">
                    <div class="container h-100">
                        <div class="row justify-content-end align-items-center h-100">
                            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                <div class="caption caption-left">
                                    <h3>全台唯一</h3>
                                    <h2>專利乾式破壁技術</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item item2">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                <div class="caption caption-right">
                                    <h3>秉持著</h3>
                                    <h2>取之於大地、循環不息</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item item3">
                    <div class="container h-100">
                        <div class="row justify-content-end align-items-center h-100">
                            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                <div class="caption caption-left">
                                    <h3 style="color: #6B8E29;">嚴選天然有機農作物</h3>
                                    <h2 style="color: #299182;">天然、健康有機無毒</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselKV" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselKV" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Carousel KV -->

    <!-- Sec02 Content -->
    <div id="about" style="position: relative; top:-150px;"></div>
    <section class="sec02" data-aos="fade-up">
        <div class="container">
            <div class="d-flex flex-md-row flex-column justify-content-center align-items-center bg-sec02">
                <div class="sec02-block" data-aos="fade-down" data-aos-delay="200">
                    <h2 class="sec-title">關於昶安<span>About US</span></h2>
                    <h5 class="sec-infos">
                        專精於奈米乾式研磨技術，秉持著取之於大地,循環不息，讓自然能量幫助人體健康，並嚴選天然有機食材，天然，健康為主要標的自許，結合台灣優質研發能力，更用以增強自身免疫力，提供用於抗衰老及延長生命的系列產品。
                    </h5>
                </div>
                <div class="about-img" data-aos="zoom-in-down" data-aos-delay="500">
                    <img src="{{ asset('images/img-about.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Sec02 Content -->

    <!-- Sec03 Content -->
    <section class="sec03 bg-sec03">
        <div class="sec03-block" data-aos="zoom-in-left">
            <h2 class="sec-title">精神理念</h2>
            <h5 class="sec-infos text-white">
                公司創辦人黃瓊城博士，於學術領域在植物化學深植多年，並深植奈米機械之奈米乾式研磨技術研究多年，秉持著取之於大地，循環不息的精神理念，以西醫的研究機裡，佐以中醫和自然醫學為本體，堅持於卓越研發和精準品質管理，提供給客戶最天然、有機無毒健康的保健食品。
            </h5>
        </div>
    </section>
    <!-- Sec03 Content -->

    <!-- Sec04 Content -->
    <section class="sec04">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 mb-md-3 mb-4">
                    <a href="https://www.youtube.com/watch?v=bpQAVeS_JRk" target="_blank">
                        <div class="bg-white p-3">
                            <img src="{{ asset('images/img-adp.jpg') }}" class="img-fluid">
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-12 mb-md-3 mb-4">
                    <a href="https://www.youtube.com/watch?v=bpQAVeS_JRk" target="_blank">
                        <div class="sec04-block pb-4">
                            <h2 class="sec-title">台灣最新研發成果，ADP破壁防護噴粉</h2>
                            <h5 class="sec-infos">
                                於疫情越發嚴重其間,創辦人取材自天然食材－（紫蘇）的天然特性,並以昶安的技術優勢,開發出經過國防醫學院認證的紫蘇噴霧和紫蘇噴粉等產品,能有效抑制新冠病毒，期許能造福人類為己任。
                            </h5>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/watch?v=bpQAVeS_JRk" target="_blank">
                        <img src="{{ asset('images/ic-yt.png') }}" class="yt img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Sec04 Content -->

    <!-- Sec05 Content -->
    <section class="sec05">
        <div class="container">
            <div class="row card-row">
                <div class="col-lg-3 col-6" data-aos="fade-down" data-aos-delay="150" data-aos-duration="800">
                    <div class="card hover-card bg-dark text-white border-0">
                        <img class="card-img" src="./img/img-c01.jpg" alt="">
                        <div class="card-img-overlay text-center">
                            <h2 class="mb-0">創新</h2>
                            <h5 class="mb-0">Innovation</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                    <div class="card hover-card bg-dark text-white border-0">
                        <img class="card-img" src="./img/img-c02.jpg" alt="">
                        <div class="card-img-overlay text-center">
                            <h2 class="mb-0">精準</h2>
                            <h5 class="mb-0">Accurate</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-aos="fade-down" data-aos-delay="450" data-aos-duration="800">
                    <div class="card hover-card bg-dark text-white border-0">
                        <img class="card-img" src="./img/img-c03.jpg" alt="">
                        <div class="card-img-overlay text-center">
                            <h2 class="mb-0">品質</h2>
                            <h5 class="mb-0">Quality</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                    <div class="card hover-card bg-dark text-white border-0">
                        <img class="card-img" src="./img/img-c04.jpg" alt="">
                        <div class="card-img-overlay text-center">
                            <h2 class="mb-0">感恩</h2>
                            <h5 class="mb-0">Grateful</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sec05 Content -->

    <!-- Sec06 Content -->
    <section class="sec06 bg-sec06" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
        <div class="container">
            <div class="patent-block">
                <h2 class="patent-title">Naomaterials</h2>
                <div class="sec06-block">
                    <h5 class="sec-infos">
                        昶安於疫情期間,研發出有效抵抗新冠病毒的產品,並經由國防部P4實驗室實驗認證
                    </h5>
                    <div class="row pt-md-4 pt-3">
                        <div class="col-lg-6 col-12 mb-3">
                            <a href="report2-1.pdf" class="btn-main bg-main-gradient" target="_blank">
                                測試報告2-1 <span class="akar-icons--cloud-download"></span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-12 mb-3">
                            <a href="report2-2.pdf" class="btn-main bg-main-gradient" target="_blank">
                                測試報告2-2 <span class="akar-icons--cloud-download"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div clas="row">
                <div class="col-12">
                    <h3 class="sec-title text-right">榮耀實績<span>Glory Performance</span></h3>
                </div>
                <div class="col-12 mb-md-5">
                    <div class="row">
                        <div class="col-lg-6 col-12 mb-4" data-aos="fade-down" data-aos-delay="150"
                            data-aos-duration="800">
                            <div class="text-center bg-white p-4 border">
                                <img src="{{ asset('images/img-patent01.jpg') }}" class="img-fluid">
                                <h5 class="text-dark mb-0 py-3">台式研磨發明專利</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-4" data-aos="fade-up" data-aos-delay="1050"
                            data-aos-duration="800">
                            <div class="text-center bg-white p-4 border">
                                <img src="{{ asset('images/img-patent02.jpg') }}" class="img-fluid">
                                <h5 class="text-dark mb-0 py-3">美國研磨正式發明專利</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sec06 Content -->



    <!-- Contact Us -->
    <!--
    <section id="contact" class="contact">
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="row">
            <div class="col-12" id="form-anchor">
              <h2 class="page-title text-center" id="contactus">聯絡我們</h2>
              <h5 class="text-lightdark text-center mb-4">請完成下方諮詢表單並送出，我們將會安排專人與您聯繫。</h5>
              
              <form class="contactform needs-validation" novalidate="">
                <div class="form-group">
                    <label for="username" required="">姓名</label>
                    <input type="text" class="form-control form-control-lg" id="username">
                </div>
                <div class="form-group">
                    <label for="phone" required="">聯絡電話</label>
                    <input type="phone" class="form-control form-control-lg" id="phone">
                </div>
                <div class="form-group">
                    <label for="email" required="">電子郵件</label>
                    <input type="email" class="form-control form-control-lg" id="email">
                </div>
                <div class="form-group">
                    <label for="request">諮詢商品</label>
                    <input type="text" class="form-control form-control-lg" id="request">
                </div>
                <div class="form-group">
                    <label for="message">諮詢內容</label>
                    <textarea class="form-control form-control-lg" id="message" rows="4"></textarea>
                </div>
                <div class="w-100 text-center mb-3">
                    <div class="g-recaptcha d-inline-block" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-m38sm6x228pq" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI&amp;co=ZmlsZTo.&amp;hl=zh-TW&amp;v=1kRDYC3bfA-o6-tsWzIBvp7k&amp;size=normal&amp;cb=4aqwiw2n7tb8"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                    <br>
                </div>

                <button type="submit" class="btn btn-main bg-main-gradient w-100 py-0" value="Submit">送出</button>

              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-12">
          <div class="row align-items-center">
            <div class="col-12 mb-md-4">
              <ul class="link-group mt-md-5">
                <li class="w-100"><a href="#"><img src="./img/ic-home.svg" class="footer-listicon">昶安奈米應用生技有限公司</a></li>
                <li class="w-100"><a href="tel:+886-6-2791367"><img src="./img/ic-cellphone.svg" class="footer-listicon">(06)279-1367</a></li>
                <li class="w-100"><a href="https://maps.app.goo.gl/RoF5fMJEQRY5JgFm6" target="_blank"><img src="./img/ic-marker1.svg" class="footer-listicon">臺南市仁德區一甲里19鄰太乙三街21號</a></li>
              </ul>
            </div>
            <div class="col-12">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d918.2924174456425!2d120.2523489!3d22.980787499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e714d5bf93155%3A0xaf7280ff8de3fc7b!2zNzE35Y-w5Y2X5biC5LuB5b635Y2A5aSq5LmZ5LiJ6KGXMjHomZ8!5e0!3m2!1szh-TW!2stw!4v1708797895365!5m2!1szh-TW!2stw" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    -->
    <!-- Contact Us -->

    <!-- Side Social Link -->
    <aside class="sidebar">
        <ul class="list-unstyled">
            <!-- 20230304新增 -->
            <li data-aos="zoom-in-up" data-aos-easing="ease-in-out" data-aos-delay="150" data-aos-duration="1000"
                data-aos-anchor=".navbar" class="aos-init aos-animate"><a href="#" target="_blank"><img
                        src="{{ asset('images/side-ic-cart.png') }}" srcset="{{ asset('images/side-ic-cart.svg') }}"
                        class="side_ic ic_cart d-none"></a></li>
            <li data-aos="zoom-in-up" data-aos-easing="ease-in-out" data-aos-delay="300" data-aos-duration="1000"
                data-aos-anchor=".navbar" class="aos-init aos-animate"><a href="tel:0988200837"><img
                        src="{{ asset('images/side-ic-phone.png') }}" srcset="{{ asset('images/side-ic-phone.svg') }}"
                        class="side_ic ic_phone"></a>
            </li>
            <!-- <li data-aos="zoom-in-up" data-aos-easing="ease-in-out" data-aos-delay="300" data-aos-duration="1000" data-aos-anchor=".navbar" class="aos-init aos-animate"><a href="#top"><img src="./img/side-ic-top.png" srcset="./img/side-ic-top.svg" class="side_ic ic_top"></a></li> -->
            <!-- 20230304新增 -->
        </ul>
    </aside>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            AOS.init({
                offset: 120,
                once: true,
            });

            $('.carousel').carousel({
                interval: 5000
            });

        })
        $(document).scroll(function() {
            if ($(window).scrollTop() > $('nav').height()) {
                $('.navbar').addClass('fixed-top').addClass('bg-white-transparent4').removeClass('bg-white');
            } else {
                $('.navbar').removeClass('fixed-top').removeClass('bg-white-transparent4').addClass('bg-white');
            }
        });
    </script>
@endsection

@section('css')
@endsection
