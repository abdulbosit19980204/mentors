<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AjaxSearch</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="CSS/userpage.css">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/swiper.css">
    <link rel="stylesheet" href="CSS/swiper-bundle.min.css">
    <link rel="stylesheet" href="CSS/3dsocial.sass">
    <link href="login page simple/thirdlogin.css">
    <script src="CSS/js/bootstrap.min.js"></script>
    <script src='Js/validation.js'></script>
    <script src="Js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="Js/swiper-bundle.min.js"></script>
    <script src="Js/jquery.min.js."></script>
    <script src="Js/parallax.js-1.5.0/parallax.js"></script>

</head>

<body>

    <div class="container">
        <div class="blackbk">

            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#offcanvas" data-bs-toggle="offcanvas" role="button" aria-controls="offcanvasExample">
                        <img src="img/logo.png" class="png__logo_nav img-fluid " alt="">
                        <!-- <img src="img/logo.jpg" class="top_logo img-fluid" alt=""> -->
                    </a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <!-- <h4>Tutorlar sahifasiga xush kelibsiz</h4> -->
                        <a href="" class="mx-2"><img src="img/Telegram App_48px.png" alt=""></a>
                        <a href="" class="mx-2"><img src="img/Instagram_48px.png" alt=""></a>
                        <a href="http://moodle.andqxai.uz/" class="mx-2"><img src="img/moodle.png" alt="" style="width: 40px;"></a>
                        <a href="http://hemis.andqxai.uz/" class="mx-2"><img src="img/gerb.png" alt="" style="width: 40px;"></a>
                        <a href="https://lex.uz/" class="mx-2"><img src="img/lex_uz.svg" alt="" style="width: 80px;"></a>
                        <a href="login page simple/thirdlogin.html" class="mx-3 me-2" d-flex>
                            <img src=" img/icons8-login.gif " class="top_logo " alt="Saytga Kirish ">
                        </a>

                    </div>
                </div>
            </nav>

            <div class="center_find">
                <div class="caption_center">
                    <h4 class="tcaption"></h4>
                </div>
                <script src="Js/@2.0.12typed.js"></script>
                <!-- <script src="Js/mytayped.js"></script> -->
                <script>
                    let options = {
                        strings: ['AndQXAI Tyutorlari', ' web sahifasiga xush kelibsiz'],
                        typeSpeed: 40,
                        startDelay: 1000,
                        backSpeed: 40,
                        backDelay: 2000,
                        loop: true,
                        loopCount: Infinity,
                    };
                    let typed = new Typed('.tcaption', options);
                </script>
                <div class="search_center">
                    <form action="" method="POST">
                        <input type="text" class="search_input__center fadeIn second" autofocus placeholder="biror narsa kiriting" name="search_text" id="search_text">
                        <button class="btn btn-primary btn_position input-group-text" type="submit" name="submit_btn">
                        <img src="img/Search_20px.png" alt="">    
                        Qidirish</button>

                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-center mx-3 mt-3">
                <!-- <h3 class="btn bg-light">Fakultetlar</h3> -->
                <div class="nav navbar-dark bg- d-flex">
                    <ul class="nav-tems d-flex">
                        <li class="btn btn-outline-success  mx-1">
                            QXMS
                        </li>
                        <li class="btn btn-outline-success mx-1">
                            Agrobiznes
                        </li>
                        <li class="btn btn-outline-success mx-1">
                            Agrobiologiya
                        </li>
                        <li class="btn btn-outline-success mx-1">
                            Gidromelioratsiya
                        </li>
                        <li class="btn btn-outline-success mx-1">
                            Sirtqi
                        </li>
                        <li class="btn btn-outline-success mx-1">
                            Gorodno
                        </li>
                    </ul>
                </div>
            </div>


            <!-- background -->
            <div class="containerbck"></div>
            <!-- background tugadi -->



            <div id="result"  class="conatainer col-10 text-align-center mx-auto" ></div>
            <script>
                $(document).ready(function() {
                    $('#search_text').keyup(function() {
                        var txt = $(this).val();
                        if (txt != '') {
                            $.ajax({
                                url: "fetchsearch.php",
                                method: "post",
                                data: {
                                    search: txt
                                },
                                dataType: "text",
                                success: function(data) {
                                    $('#result').html(data);
                                }
                            });
                        } else {
                            $('#result').html('');


                        }
                    });
                });
            </script>

            <!-- card fakultetlar uchun  -->


            <!-- card fakultetlar uchun tugadi -->


            <div class="faculity_logo_banner">
                <div class="divflex">
                    <img src="img/agrobiologiya-1024x682.jpg" alt="" class="faculity_logo">
                    <p>Agrobiologiya</p>
                </div>
                <div class="divflex">
                    <img src="img/faculty-logo-1-1.png" alt="" class="faculity_logo ">
                    <p>Agrobiologiya</p>
                </div>
                <div class="divflex">
                    <img src="img/faculty-logo-2-1-1024x1024.png" alt="" class="faculity_logo">
                    <p>Agrobiznes</p>
                </div>
                <div class="divflex">
                    <img src="img/faculty-logo-4.png" alt="" class="faculity_logo">
                    <p>O'HK</p>
                </div>
                <div class="divflex">
                    <img src="img/Agro-Gidro.png" alt="" class="faculity_logo">
                    <p>Agroinjineriya</p>
                </div>

            </div>
            <!-- faculity logo baner tugadi -->






            <script src="Js/swiper.js"></script>
            <!-- search section -->


            <div class="hlogo_banner">
                <!-- <h3 class="vertical-align-midle">Tyutorlarni ishlaridan</h3> -->
            </div>
            <div class="parallax-window" data-parallax="scroll" data-image-src="img/andqxai.jpg">
            </div>
            <script src="Js/jquery.min.js"></script>
            <script src="Js/parallax.js-1.5.0/parallax.js"></script>
            <div class="hlogo_banner">
                <h6 class="vertical-align-midle mt-3">Tyutorlar faoliyatidan</h6>
            </div>
            <div class="conatiner d-flex justify-content-center">

                <div class="swiper mySwiper_tworks" style="  width: 100%; padding-top: 50px; padding-bottom: 50px; margin-bottom: 150px;">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide" style="  background-position: center; background-size: cover; width: 300px; height: 300px;">
                            <img src="img/tyutorlar faoliyatidan/photo_2022-02-07_10-05-31.jpg" alt="" class="img-thumbnail">
                        </div>
                        <div class="swiper-slide" style="  background-position: center; background-size: cover; width: 300px; height: 300px;">
                            <img src="img/tyutorlar faoliyatidan/photo_2022-02-07_10-05-31.jpg" alt="" class="img-thumbnail">
                        </div>
                        <div class="swiper-slide" style="  background-position: center; background-size: cover; width: 300px; height: 300px;">
                            <img src="img/tyutorlar faoliyatidan/20211130_180842.jpg" alt="" class="img-thumbnail">
                            <p>Zokirov Ilyosbek</p>
                        </div>
                        <div class="swiper-slide" style="  background-position: center; background-size: cover; width: 300px; height: 300px;">
                            <img src="img/tyutorlar faoliyatidan/20211130_182644.jpg" alt="" class="img-thumbnail">
                        </div>
                        <div class="swiper-slide" style="  background-position: center; background-size: cover; width: 300px; height: 300px;">
                            <img src="img/tyutorlar faoliyatidan/20211130_183041.jpg" alt="" class="img-thumbnail">
                        </div>
                        <div class="swiper-slide" style="  background-position: center; background-size: cover; width: 300px; height: 300px;">
                            <img src="img/1.jpg" alt="" class="img-thumbnail">
                        </div>
                        <div class="swiper-slide" style="  background-position: center; background-size: cover; width: 300px; height: 300px;">
                            <img src="img/1.jpg" alt="" class="img-thumbnail">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <script>
                    var swiper = new Swiper(".mySwiper_tworks", {
                        effect: "coverflow",
                        grabCursor: true,
                        centeredSlides: true,
                        slidesPerView: "auto",
                        coverflowEffect: {
                            rotate: 50,
                            stretch: 0,
                            depth: 100,
                            modifier: 1,
                            slideShadows: true,
                        },
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: ".swiper-pagination",
                        },
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                    });
                </script>
            </div>

            <div class="conatiner footer">
                <div class="row mx-5">
                    <div class="col-6">
                        <div class="row mt-3">
                            <div class=" col-4 mb-3 mx-1 mt-3 " style=" height: 90%; ">

                                <div class="row mt-2 ">
                                    <div class="col-6 ">
                                        <div class="row">
                                            <div class="col-2 mx-3">
                                                <a href="https://www.google.com/maps/dir//Andijan+Institute+of+Agriculture+and+Agritechnologies+%D0%9A%D1%83%D0%B9%D0%B3%D0%B0%D0%BD%D1%8F%D1%80+170600/@40.8559431,72.300032,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x38bc9561f1f8d107:0x24ccc39a4d407e5f">
                                                    <img src="img/Place Marker_48px.png " alt=" ">
                                                </a>
                                            </div>
                                            <div class="col-8">
                                                <h3>Manzil</h3>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <p>170600, Kuyganyor, Andijon tumani, Andijon viloyati, Uzbekistan</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-6 mb-3 mx-5 mt-3 " style=" height: 90%; ">

                                <div class="row mt-2 ">
                                    <div class="">
                                        <img src="img/Customer Support_30px.png" alt=" ">
                                        <h3>Ijtimoiy tarmoqlar</h3>

                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <a href="http://instagram.com"><img src="img/Instagram_48px.png" alt=""></a>

                                        </div>
                                        <div class="col-2">
                                            <a href="https://t.me/abdulbosit_tatu">
                                                <img src="img/Telegram App_48px.png" alt="">
                                            </a>
                                        </div>

                                        <div class="col-2">
                                            <a href="https://fb.com">
                                                <img src="img/Facebook Messenger_48px.png" alt="">
                                            </a>

                                        </div>
                                        <div class="col-2">
                                            <a href="https://www.youtube.com/channel/UCJoTEnhyBpa3lPbMFIabYsw">
                                                <img src="img/YouTube_48px.png" alt="">
                                            </a>
                                        </div>

                                        <div class="col-2">
                                            <a href="https://www.linkedin.com/in/abdulbosit-to-ychiyev-953b2a170/">
                                                <img src="img/LinkedIn_48px.png" alt="">
                                            </a>
                                        </div>
                                        <div class="col-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-4 mb-3 mx-2 mt-3 " style=" height: 90%; ">
                                <h3 class="mb-2">Biz bilan aloqa</h3>
                                <div class="row mt-2 mb-2">
                                    <div class="col-2 ">
                                        <a href="tel:+998743731663">
                                            <span><img src="img/Phone_48px.png " alt=" "></span>
                                        </a>
                                    </div>
                                    <div class="col-10 ">
                                        <p class="mx-5">+998743731663</p>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-2 ">
                                        <a href="http://andqxai.uz/">
                                            <span><img src="img/Website_50px.png " alt=" "></span>
                                        </a>
                                    </div>
                                    <div class="col-8 ">
                                        <p class="mx-5">www.andqxai.uz</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2 ">
                                        <a href="mailto:andqxai@mail.ru">
                                            <span><img src="img/Group Message_48px.png" alt=" "></span>
                                        </a>
                                    </div>
                                    <div class="col-8 ">
                                        <p class="mx-5 ">andqxai@mail.ru</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-3 mx-5 mt-3 " style=" height: 90%; ">
                                <h3>Links</h3>
                                <div class="row mt-2 mb-2">
                                    <div class="col-2 ">
                                        <a href="http://hemis.andqxai.uz/"></a>
                                        <span><img src="img/gerb.png " class="links_logo " alt=" "></span>
                                    </div>
                                    <div class="col-8 ">
                                        <p class="mx-5 ">hemsi.andqxai.uz</p>
                                    </div>
                                </div>
                                <div class="row mb-2 ">
                                    <div class="col-2 ">
                                        <a href="http://moodle.andqxai.uz/"></a>
                                        <span><img src="img/moodle.png " class="links_logo " alt=" "></span>
                                    </div>
                                    <div class="col-8 ">
                                        <p class="mx-5 ">moodle.andqxai.uz</p>
                                    </div>
                                </div>
                                <div class="row mb-2 ">
                                    <div class="col-2 ">
                                        <a href="https://lex.uz/">
                                            <span><img src="img/lex_uz.svg " class="links_logo " alt=" "></span>
                                        </a>
                                    </div>
                                    <div class="col-8 ">
                                        <p class="mx-5 ">www.Lex.uz</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3 ">
                        <div class="card mt-3 mx-3 ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3017.7258222318364!2d72.29784331527213!3d40.85594307931651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bc9561f1f8d107%3A0x24ccc39a4d407e5f!2sAndijan%20Institute%20of%20Agriculture%20and%20Agritechnologies!5e0!3m2!1sen!2s!4v1644042232805!5m2!1sen!2s "
                                width="100% " height="350px " style="border:0px; border-radius: 5px; " allowfullscreen=" " loading="lazy "></iframe>
                        </div>
                        <h6 class="mt-3 mx-3"> Bizni bu yerdan topishingiz mumkin</h6>
                    </div>
                </div>
            </div>
        </div>



    </div>


</body>

</html>