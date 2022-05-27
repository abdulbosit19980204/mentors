<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutors</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="CSS/userpage.css">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/swiper.css">
    <link rel="stylesheet" href="CSS/swiper-bundle.min.css">
    <link rel="stylesheet" href="CSS/3dsocial.sass">
    <!-- <link href="login page simple/thirdlogin.css"> -->
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
                        <a href="login page simple/thirdlogin.php" class="mx-3 me-2" d-flex>
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
                        <input type="text" id="search_text" class="search_input__center fadeIn second" autofocus placeholder="biror narsa kiriting" name="search_input search_text">
                        <button class="btn btn-primary btn_position" type="submit" name="submit_btn">
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

            <div id="result" class="container mt-3 col-6" style="position: absolute; top:472px; left: 255px; z-index: 8;"></div>
            <script>
                $(document).ready(function() {
                    $('#search_text').keyup(function() {
                        var txt = $(this).val();
                        if (txt != '') {
                            $.ajax({
                                url: "searchautocomplate.php",
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
            <div class="swiper mySwiper3" style="width: 100%;
            height: 400px;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="text-align: center;
                    font-size: 18px;
                    background: #fff;
                    /* Center slide text vertically */
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: -webkit-flex;
                    display: flex;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    -webkit-justify-content: center;
                    justify-content: center;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    -webkit-align-items: center;
                    align-items: center;">


                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <!-- Ag -->
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">Аgrobiznes</h6>
                                            <img src="img/shaxsiy rasmlar/Rustamjonov_Shoxruxbek626x417.png" class="img-thumbnail" alt="">
                                            <p class="card-text">Rustamjonov Shoxruxbek</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish<img src="img/Chevron Right_20px.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">Аgrobiznes</h6>
                                            <img src="img/tutorman5.webp" class="img-thumbnail" alt="">
                                            <p class="card-text">Bu Kim</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish <img src="img/Chevron Right_20px.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">Аgrobiznes</h6>
                                            <img src="img/tutorman2.webp" class="img-thumbnail" alt="">
                                            <p class="card-text">Yana kimdir</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish <img src="img/Chevron Right_20px.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">Аgrobiznes</h6>
                                            <img src="img/backimage.jpg" class="img-thumbnail" alt="">
                                            <p class="card-text">Yana bir tutor Vakant</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish <img src="img/Chevron Right_20px.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper mySwiper ">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">Аgrobiologiya</h6>
                                            <img src="img/shaxsiy rasmlar/Javohirbek626x417.png" class="img-thumbnail" alt="">
                                            <p class="card-text">Akbarov Javohirbek</p>

                                            <a href="#javohir_date" class="btn btn-outline-success">To'liq ma'lumot olish 
                                          <!-- shu scriptdi ishlatish kerak -->
                                          <img src="img/Chevron Right_20px.png">
                                        </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">Аgrobiologiya</h6>
                                            <img src="img/shaxsiy rasmlar/Nabiyev_Baxtiyor626x417.png" class="img-thumbnail" alt="">
                                            <p class="card-text">Nabiyev Baxtiyor</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish<img src="img/Chevron Right_20px.png"> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">Аgrobiologiya</h6>
                                            <img src="img/tutorman2.webp" class="img-thumbnail" alt="">
                                            <p class="card-text">Yana kimdir</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish<img src="img/Chevron Right_20px.png"> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">Аgrobiologiya</h6>
                                            <img src="img/backimage.jpg" class="img-thumbnail" alt="">
                                            <p class="card-text">Yana bir tutor Vakant</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish<img src="img/Chevron Right_20px.png"> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper mySwiper ">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">Аgroinjeneriya</h6>
                                            <img src="img/shaxsiy rasmlar/Mamatqulov olimjon 626x417.png" class="img-thumbnail" alt="">
                                            <p class="card-text">Mamatqulov Olimjon</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish<img src="img/Chevron Right_20px.png"> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">Аgroinjeneriya</h6>
                                            <img src="img/shaxsiy rasmlar/Mamadaliyeva_Gulhayo626x417.png" class="img-thumbnail" alt="">
                                            <p class="card-text">Mamadaliyeva Gulhayo</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish<img src="img/Chevron Right_20px.png"> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">Аgroinjeneriya</h6>
                                            <img src="img/tutorman2.webp" class="img-thumbnail" alt="">
                                            <p class="card-text">Yana kimdir</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish <img src="img/Chevron Right_20px.png"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">Аgroinjeneriya</h6>
                                            <img src="img/backimage.jpg" class="img-thumbnail" alt="">
                                            <p class="card-text">Yana bir tutor Vakant</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish<img src="img/Chevron Right_20px.png"> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="text-align: center;
                    font-size: 18px;
                    background: #fff;
                    /* Center slide text vertically */
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: -webkit-flex;
                    display: flex;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    -webkit-justify-content: center;
                    justify-content: center;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    -webkit-align-items: center;
                    align-items: center;">
                        <div class="swiper mySwiper ">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">QXMS</h6>
                                            <img src="img/shaxsiy rasmlar/MYusuf626x417.png" class="img-thumbnail" alt="">
                                            <p class="card-text">Polonchiyev Muhammadyusuf</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish <img src="img/Chevron Right_20px.png"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">QXMS</h6>
                                            <img src="img/tutorman5.webp" class="img-thumbnail" alt="">
                                            <p class="card-text">Bu Kim</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish<img src="img/Chevron Right_20px.png"> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">QXMS</h6>
                                            <img src="img/tutorman2.webp" class="img-thumbnail" alt="">
                                            <p class="card-text">Yana kimdir</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish <img src="img/Chevron Right_20px.png"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">QXMS</h6>
                                            <img src="img/backimage.jpg" class="img-thumbnail" alt="">
                                            <p class="card-text">Yana bir tutor Vakant</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish <img src="img/Chevron Right_20px.png"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper mySwiper ">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">O'HK</h6>
                                            <img src="img/shaxsiy rasmlar/zokirov_Ilyosbek626x417.png"  class="img-thumbnail"  alt="">
                                            <p class="card-text">Zokirov Ilyosbek</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish <img src="img/Chevron Right_20px.png"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">O'HK</h6>
                                            <img src="img/shaxsiy rasmlar/Soliyev_Ziyoydin626x417.png" class="img-thumbnail" alt="">
                                            <p class="card-text">Soliyev Ziyoydin</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish<img src="img/Chevron Right_20px.png"> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">O'HK</h6>
                                            <img src="img/shaxsiy rasmlar/Abdulxamidov_Anvarjon626x417.png" class="img-thumbnail" alt="">
                                            <p class="card-text">Abdulhamidov Anavrjon</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish <img src="img/Chevron Right_20px.png"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">O'HK</h6>
                                            <img src="img/backimage.jpg" class="img-thumbnail" alt="">
                                            <p class="card-text">Yana bir tutor Vakant</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish <img src="img/Chevron Right_20px.png"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper mySwiper ">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">O'HK</h6>
                                            <img src="img/shaxsiy rasmlar/zokirov_Ilyosbek626x417.png" class="img-fluid" alt="">
                                            <p class="card-text">Zokirov Ilyosbek</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish <img src="img/Chevron Right_20px.png"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">O'HK</h6>
                                            <img src="img/shaxsiy rasmlar/Soliyev_Ziyoydin626x417.png" class="img-thumbnail" alt="">
                                            <p class="card-text">Soliyev Ziyoydin</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish<img src="img/Chevron Right_20px.png"> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">O'HK</h6>
                                            <img src="img/shaxsiy rasmlar/Abdulxamidov_Anvarjon626x417.png" class="img-thumbnail" alt="">
                                            <p class="card-text">Abdulhamidov Anavrjon</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish <img src="img/Chevron Right_20px.png"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-2">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-center">O'HK</h6>
                                            <img src="img/backimage.jpg" class="img-thumbnail" alt="">
                                            <p class="card-text">Yana bir tutor Vakant</p>
                                            <a href="#" class="btn btn-outline-success">To'liq ma'lumot olish <img src="img/Chevron Right_20px.png"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>

            <!-- Swiper JS -->
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper3", {
                    spaceBetween: 30,
                    centeredSlides: true,
                    autoplay: {
                        delay: 16000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>
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




            <!-- Bu yerdan button qidiruv boshlandi -->


            <!--             
            <div class="container mt-3 col-5" style="position: relative; top:-265px; left: -135px;">
                <div class="container form-control ">

                    <?php
            $con = new PDO("mysql:host=localhost; dbname=search",'root','');
            if(isset($_POST["submit_btn"])){
                $str = $_POST["search_text"];
                // $sth = $con->prepare("SELECT * FROM `student` where name = '$str'");
                $sth = $con->prepare("SELECT * FROM student where name LIKE '%".$_POST["search_text"]."%'");
                               
                $sth->setFetchMode(PDO:: FETCH_OBJ);
                $sth -> execute();
                
                if($row = $sth->fetch())
                {
                    ?>
                        <br><br><br><br>
                        <table class="table bg-light">
                            <tr class="table-primary">
                                <th>Name</th>
                                <th>SURNAME</th>
                                <th>Group</th>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo $row->name; ?>
                                </td>
                                <td>
                                    <?php echo $row->surname; ?>
                                </td>
                                <td>
                                    <?php echo $row->student_group; ?>
                                </td>
                            </tr>
                        </table>
                        <?php
                }
                else{
            
            echo "Qidirilgan ma'lumot bazada mavjud emas";
                                     
                }
              
            }
            
            ?>
                </div>
            </div> -->


            <!-- bu yerda button qidiruv tugadi -->

            <div class="swiper mySwiper1" style="width: 100%; height: 950px;">
                <div class="swiper-wrapper">
                    <!-- Nabiyev ABxtiyor -->
                    <div class="swiper-slide">
                        <div class="container margintop">


                            <div class="row">
                                <div class="col-6">
                                    <div class="name_tutor">
                                        <div class="row">
                                            <div class="col-10">
                                                <h1 class="">Nabiyev <span class="redcl">Baxtiyor</span> </h1>
                                            </div>
                                            <div class="col-1">
                                                <img src="img/faculty-logo-4.png" alt="" class="top_logo img-img-fluid">
                                                <p> Agrobiologiya </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p>--------------------------------------------------------------------------</p>

                                        <h6 class="mb-3">Telefon qilish</h6>
                                        <div class="col-2">
                                            <img src="img/Phone_48px.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>+998 99 000 0000</p>
                                            <p>+998 99 000 0001</p>
                                        </div>

                                        <p>--------------------------------------------------------------------------</p>

                                    </div>
                                    <div class="row">
                                        <h6 class="mb-3">Pochta xabarini yuborish</h6>
                                        <div class="col-2">
                                            <img src="img/Group Message_48px.png" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>nabiyevbaxtiyor<span class="mark">@gmail.com</span> </p>
                                            <p>nabiyevbaxtiyor<span class="mark">@mail.ru</span> </p>
                                        </div>

                                        <p>---------------------------------------------------------------------------</p>
                                        <div class="row">
                                            <h6 class="mb-3">Ijtimoiy tarmoqlarda</h6>
                                            <div class="col-2">
                                                <img src="img/Telegram App_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @nabiyevbaxtiyor
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/Instagram_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @nabiyevbaxtiyor
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/LinkedIn_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @nabiyevbaxtiyor
                                            </div>
                                        </div>
                                        <p>---------------------------------------------------------------------------</p>

                                        <div class="row">
                                            <h6 class="mb-3">Biriktirilgan Gruppalar</h6>
                                            <div class="col-10">
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">01-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">02-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">03-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">11-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">12-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">21-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">22-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">109-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">95-21</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 bg-light mx-0">
                                    <div class="bgyellow col-8">

                                    </div>
                                    <div class="col-4">
                                        <img class="imageposition" src="img/shaxsiy rasmlar/Nabiyev_Baxtiyor600x814.png" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Mamatqulov Olimjon -->
                    <div class="swiper-slide">
                        <div class="container margintop">


                            <div class="row">
                                <div class="col-6">
                                    <div class="name_tutor">
                                        <div class="row">
                                            <div class="col-10">
                                                <h1 class="">Mamatqulov <span class="redcl">Olimjon</span> </h1>
                                            </div>
                                            <div class="col-1">
                                                <img src="img/faculty-logo-2-1-1024x1024.png" alt="" class="top_logo img-img-fluid">
                                                <p> Agroinjineriya </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p>--------------------------------------------------------------------------</p>

                                        <h6 class="mb-3">Telefon qilish</h6>
                                        <div class="col-2">
                                            <img src="img/Phone_48px.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>+998 99 722 7065</p>
                                            <p>+998 99 722 7065</p>
                                        </div>

                                        <p>--------------------------------------------------------------------------</p>

                                    </div>
                                    <div class="row">
                                        <h6 class="mb-3">Pochta xabarini yuborish</h6>
                                        <div class="col-2">
                                            <img src="img/Group Message_48px.png" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>example<span class="mark">@gmail.com</span> </p>
                                            <p>example<span class="mark">@mail.ru</span> </p>
                                        </div>

                                        <p>---------------------------------------------------------------------------</p>
                                        <div class="row">
                                            <h6 class="mb-3">Ijtimoiy tarmoqlarda</h6>
                                            <div class="col-2">
                                                <img src="img/Telegram App_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @olimjon_mamatqulov
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/Instagram_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @olimjon_mamatqulov
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/LinkedIn_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @olimjon_mamatqulov
                                            </div>
                                        </div>
                                        <p>---------------------------------------------------------------------------</p>

                                        <div class="row">
                                            <h6 class="mb-3">Biriktirilgan Gruppalar</h6>
                                            <div class="col-10">
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">01-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">02-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">03-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">11-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">12-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">21-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">22-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">109-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">95-21</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 bg-light mx-0">
                                    <div class="bgyellow col-8">

                                    </div>
                                    <div class="col-4">
                                        <img class="imageposition" src="img/shaxsiy rasmlar/Mamatqulov_Olimjon600x814-removebg.png" alt="">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Akbarov Javohir -->
                    <div class="swiper-slide">
                        <div class="container margintop" id="javohir_date">
                            <div class="row">
                                <div class="col-6">
                                    <div class="name_tutor">
                                        <div class="row">
                                            <div class="col-10">
                                                <h1 class="">Akbarov <span class="redcl">Javohirbek</span> </h1>
                                            </div>
                                            <div class="col-1">
                                                <img src="img/Agro-Gidro.png" alt="" class="top_logo img-img-fluid">
                                                <p> Agrobiologiya </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p>--------------------------------------------------------------------------</p>

                                        <h6 class="mb-3">Telefon qilish</h6>
                                        <div class="col-2">
                                            <img src="img/Phone_48px.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>+998 94 100 8828</p>
                                            <p>+998 94 100 8828</p>
                                        </div>

                                        <p>--------------------------------------------------------------------------</p>

                                    </div>
                                    <div class="row">
                                        <h6 class="mb-3">Pochta xabarini yuborish</h6>
                                        <div class="col-2">
                                            <img src="img/Group Message_48px.png" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>ajavohir949<span class="mark">@gmail.com</span> </p>
                                            <p>ajavohir949<span class="mark">@mail.ru</span> </p>
                                        </div>

                                        <p>---------------------------------------------------------------------------</p>
                                        <div class="row">
                                            <h6 class="mb-3">Ijtimoiy tarmoqlarda</h6>
                                            <div class="col-2">
                                                <img src="img/Telegram App_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @javohirakbarov
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/Instagram_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @javohirakbarov
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/LinkedIn_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @javohirakbarov
                                            </div>
                                        </div>
                                        <p>---------------------------------------------------------------------------</p>

                                        <div class="row">
                                            <h6 class="mb-3">Biriktirilgan Gruppalar</h6>
                                            <div class="col-10">
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">01-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">02-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">03-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">11-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">12-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">21-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">22-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">109-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">95-21</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 bg-light mx-0">
                                    <div class="bgyellow col-8">

                                    </div>
                                    <div class="col-4">
                                        <img class="imageposition" src="img/shaxsiy rasmlar/javohira600x814.png" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Soliyev Ziyoyddin -->
                    <div class="swiper-slide">
                        <div class="container margintop">


                            <div class="row">
                                <div class="col-6">
                                    <div class="name_tutor">
                                        <div class="row">
                                            <div class="col-10">
                                                <h1 class="">Soliyev<span class="redcl">Ziyoyddin</span> </h1>
                                            </div>
                                            <div class="col-1">
                                                <img src="img/faculty-logo-2-1-1024x1024.png" alt="" class="top_logo img-img-fluid">
                                                <p>O'HK</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p>--------------------------------------------------------------------------</p>

                                        <h6 class="mb-3">Telefon qilish</h6>
                                        <div class="col-2">
                                            <img src="img/Phone_48px.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>+998 94 435 5700</p>
                                            <p>+998 99 002 0202</p>
                                        </div>

                                        <p>--------------------------------------------------------------------------</p>

                                    </div>
                                    <div class="row">
                                        <h6 class="mb-3">Pochta xabarini yuborish</h6>
                                        <div class="col-2">
                                            <img src="img/Group Message_48px.png" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>ziyodbeksoliyev91<span class="mark">@gmail.com</span> </p>
                                            <p>ziyodbeksoliyev91<span class="mark">@mail.ru</span> </p>
                                        </div>

                                        <p>---------------------------------------------------------------------------</p>
                                        <div class="row">
                                            <h6 class="mb-3">Ijtimoiy tarmoqlarda</h6>
                                            <div class="col-2">
                                                <img src="img/Telegram App_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @Ziyoyddin_Soliyev
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/Instagram_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @Ziyoyddin_Soliyev
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/LinkedIn_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @Ziyoyddin_Soliyev
                                            </div>
                                        </div>
                                        <p>---------------------------------------------------------------------------</p>

                                        <div class="row">
                                            <h6 class="mb-3">Biriktirilgan Gruppalar</h6>
                                            <div class="col-10">
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">01-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">02-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">03-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">11-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">12-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">21-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">22-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">109-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">95-21</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 bg-light mx-0">
                                    <div class="bgyellow col-8">

                                    </div>
                                    <div class="col-4">
                                        <img class="imageposition" src="img/shaxsiy rasmlar/Soliyev_Ziyoydin600x814.png" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Rustamjonov Shoxruxbek -->
                    <div class="swiper-slide">
                        <div class="container margintop">


                            <div class="row">
                                <div class="col-6">
                                    <div class="name_tutor">
                                        <div class="row">
                                            <div class="col-10">
                                                <h1 class="">Rustamjonov <span class="redcl">Shoxruxbek</span> </h1>
                                            </div>
                                            <div class="col-1">
                                                <img src="img/faculty-logo-2-1-1024x1024.png" alt="" class="top_logo img-img-fluid">
                                                <p> Agrobiznes </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p>--------------------------------------------------------------------------</p>

                                        <h6 class="mb-3">Telefon qilish</h6>
                                        <div class="col-2">
                                            <img src="img/Phone_48px.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>+998 94 566 66 01</p>
                                            <p>+998 99 002 0202</p>
                                        </div>

                                        <p>--------------------------------------------------------------------------</p>

                                    </div>
                                    <div class="row">
                                        <h6 class="mb-3">Pochta xabarini yuborish</h6>
                                        <div class="col-2">
                                            <img src="img/Group Message_48px.png" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>shoxruhrustamjonov<span class="mark">@gmail.com</span> </p>
                                            <p>shoxruhrustamjonov<span class="mark">@mail.ru</span> </p>
                                        </div>

                                        <p>---------------------------------------------------------------------------</p>
                                        <div class="row">
                                            <h6 class="mb-3">Ijtimoiy tarmoqlarda</h6>
                                            <div class="col-2">
                                                <img src="img/Telegram App_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @shoxruhrustamjonov
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/Instagram_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @shoxruhrustamjonov
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/LinkedIn_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @shoxruhrustamjonov
                                            </div>
                                        </div>
                                        <p>---------------------------------------------------------------------------</p>

                                        <div class="row">
                                            <h6 class="mb-3">Biriktirilgan Gruppalar</h6>
                                            <div class="col-10">
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">01-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">02-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">03-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">11-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">12-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">21-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">22-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">109-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">95-21</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 bg-light mx-0">
                                    <div class="bgyellow col-8">

                                    </div>
                                    <div class="col-4">
                                        <img class="imageposition" src="img/shaxsiy rasmlar/Rustamjonov_Shoxruxbek600x814.png" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Zokirov Ilyosbek -->
                    <div class="swiper-slide">
                        <div class="container margintop">


                            <div class="row">
                                <div class="col-6">
                                    <div class="name_tutor">
                                        <div class="row">
                                            <div class="col-10">
                                                <h1 class="">Zokirov <span class="redcl">Ilyosbek</span> </h1>
                                            </div>
                                            <div class="col-1">
                                                <img src="img/faculty-logo-1-1.png" alt="" class="top_logo img-img-fluid">
                                                <p>O'HK</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p>--------------------------------------------------------------------------</p>

                                        <h6 class="mb-3">Telefon qilish</h6>
                                        <div class="col-2">
                                            <img src="img/Phone_48px.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>+998 99 767 1555</p>
                                            <p>+998 99 002 0202</p>
                                        </div>

                                        <p>--------------------------------------------------------------------------</p>

                                    </div>
                                    <div class="row">
                                        <h6 class="mb-3">Pochta xabarini yuborish</h6>
                                        <div class="col-2">
                                            <img src="img/Group Message_48px.png" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>ilyos.27061990<span class="mark">@gmail.com</span> </p>
                                            <p>ilyos.27061990<span class="mark">@mail.ru</span> </p>
                                        </div>

                                        <p>---------------------------------------------------------------------------</p>
                                        <div class="row">
                                            <h6 class="mb-3">Ijtimoiy tarmoqlarda</h6>
                                            <div class="col-2">
                                                <img src="img/Telegram App_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @ilyoszokirov
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/Instagram_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @ilyoszokirov
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/LinkedIn_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @ilyoszokirov
                                            </div>
                                        </div>
                                        <p>---------------------------------------------------------------------------</p>

                                        <div class="row">
                                            <h6 class="mb-3">Biriktirilgan Gruppalar</h6>
                                            <div class="col-10">
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">61-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">62-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">61-20</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">61-19</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">62-19</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">63-19</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 bg-light mx-0">
                                    <div class="bgyellow col-8">

                                    </div>
                                    <div class="col-4">
                                        <img class="imageposition" src="img/shaxsiy rasmlar/Zokirov_Ilyosbek600x814.png" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Mamadaliyeva Gulhayo -->
                    <div class="swiper-slide">
                        <div class="container margintop">


                            <div class="row">
                                <div class="col-6">
                                    <div class="name_tutor">
                                        <div class="row">
                                            <div class="col-10">
                                                <h1 class="">Mamadaliyeva <span class="redcl">Gulhayo</span> </h1>
                                            </div>
                                            <div class="col-1">
                                                <img src="img/faculty-logo-2-1-1024x1024.png" alt="" class="top_logo img-img-fluid">
                                                <p> Agroinjineriya </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p>--------------------------------------------------------------------------</p>

                                        <h6 class="mb-3">Telefon qilish</h6>
                                        <div class="col-2">
                                            <img src="img/Phone_48px.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>+998 99 909 7627</p>
                                            <p>+998 99 002 0202</p>
                                        </div>

                                        <p>--------------------------------------------------------------------------</p>

                                    </div>
                                    <div class="row">
                                        <h6 class="mb-3">Pochta xabarini yuborish</h6>
                                        <div class="col-2">
                                            <img src="img/Group Message_48px.png" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>mamadaliyevagulhayo<span class="mark">@gmail.com</span> </p>
                                            <p>mamadaliyevagulhayo<span class="mark">@mail.ru</span> </p>
                                        </div>

                                        <p>---------------------------------------------------------------------------</p>
                                        <div class="row">
                                            <h6 class="mb-3">Ijtimoiy tarmoqlarda</h6>
                                            <div class="col-2">
                                                <img src="img/Telegram App_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @mamadaliyevagulhayo
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/Instagram_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @mamadaliyevagulhayo
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/LinkedIn_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @mamadaliyevagulhayo
                                            </div>
                                        </div>
                                        <p>---------------------------------------------------------------------------</p>

                                        <div class="row">
                                            <h6 class="mb-3">Biriktirilgan Gruppalar</h6>
                                            <div class="col-10">
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">01-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">02-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">03-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">11-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">12-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">21-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">22-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">109-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">95-21</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 bg-light mx-0">
                                    <div class="bgyellow col-8">

                                    </div>
                                    <div class="col-4">
                                        <img class="imageposition" src="img/shaxsiy rasmlar/Mamadaliyeva_Gulhayo600x814.png" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Zakirov Shoxabbos -->
                    <div class="swiper-slide">
                        <div class="container margintop">


                            <div class="row">
                                <div class="col-6">
                                    <div class="name_tutor">
                                        <div class="row">
                                            <div class="col-10">
                                                <h1 class="">Zakirov <span class="redcl">Shoxabbos</span> </h1>
                                            </div>
                                            <div class="col-1">
                                                <img src="img/faculty-logo-2-1-1024x1024.png" alt="" class="top_logo img-img-fluid">
                                                <p> Agroinjineriya </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p>--------------------------------------------------------------------------</p>

                                        <h6 class="mb-3">Telefon qilish</h6>
                                        <div class="col-2">
                                            <img src="img/Phone_48px.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>+998 99 000 0003</p>
                                            <p>+998 99 000 0004</p>
                                        </div>

                                        <p>--------------------------------------------------------------------------</p>

                                    </div>
                                    <div class="row">
                                        <h6 class="mb-3">Pochta xabarini yuborish</h6>
                                        <div class="col-2">
                                            <img src="img/Group Message_48px.png" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>zakirovshoxabbos<span class="mark">@gmail.com</span> </p>
                                            <p>zakirovshoxabbos<span class="mark">@mail.ru</span> </p>
                                        </div>

                                        <p>---------------------------------------------------------------------------</p>
                                        <div class="row">
                                            <h6 class="mb-3">Ijtimoiy tarmoqlarda</h6>
                                            <div class="col-2">
                                                <img src="img/Telegram App_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @zakirovshoxabbos
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/Instagram_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @zakirovshoxabbos
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/LinkedIn_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @zakirovshoxabbos
                                            </div>
                                        </div>
                                        <p>---------------------------------------------------------------------------</p>

                                        <div class="row">
                                            <h6 class="mb-3">Biriktirilgan Gruppalar</h6>
                                            <div class="col-10">
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">01-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">02-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">03-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">11-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">12-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">21-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">22-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">109-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">95-21</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 bg-light mx-0">
                                    <div class="bgyellow col-8">

                                    </div>
                                    <div class="col-4">
                                        <img class="imageposition" src="img/shaxsiy rasmlar/Zakirov_ShoxAbbos600x814.png" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Mamatov Izzatillo -->
                    <div class="swiper-slide">
                        <div class="container margintop">


                            <div class="row">
                                <div class="col-6">
                                    <div class="name_tutor">
                                        <div class="row">
                                            <div class="col-10">
                                                <h1 class="">Mamatov<span class="redcl">Izzatillo</span> </h1>
                                            </div>
                                            <div class="col-1">
                                                <img src="img/faculty-logo-2-1-1024x1024.png" alt="" class="top_logo img-img-fluid">
                                                <p> Agroinjineriya </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p>--------------------------------------------------------------------------</p>

                                        <h6 class="mb-3">Telefon qilish</h6>
                                        <div class="col-2">
                                            <img src="img/Phone_48px.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>+998 99 000 0005</p>
                                            <p>+998 99 000 0006</p>
                                        </div>

                                        <p>--------------------------------------------------------------------------</p>

                                    </div>
                                    <div class="row">
                                        <h6 class="mb-3">Pochta xabarini yuborish</h6>
                                        <div class="col-2">
                                            <img src="img/Group Message_48px.png" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>mamatovizzatillo4<span class="mark">@gmail.com</span> </p>
                                            <p>mamatovizzatillo4<span class="mark">@mail.ru</span> </p>
                                        </div>

                                        <p>---------------------------------------------------------------------------</p>
                                        <div class="row">
                                            <h6 class="mb-3">Ijtimoiy tarmoqlarda</h6>
                                            <div class="col-2">
                                                <img src="img/Telegram App_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @mamatovizzatillo4
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/Instagram_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @mamatovizzatillo4
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/LinkedIn_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @mamatovizzatillo4
                                            </div>
                                        </div>
                                        <p>---------------------------------------------------------------------------</p>

                                        <div class="row">
                                            <h6 class="mb-3">Biriktirilgan Gruppalar</h6>
                                            <div class="col-10">
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">01-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">02-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">03-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">11-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">12-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">21-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">22-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">109-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">95-21</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 bg-light mx-0">
                                    <div class="bgyellow col-8">

                                    </div>
                                    <div class="col-4">
                                        <img class="imageposition" src="img/shaxsiy rasmlar/Mamatov Izzatullo.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Razzakov Baxodir -->
                    <div class="swiper-slide">
                        <div class="container margintop">


                            <div class="row">
                                <div class="col-6">
                                    <div class="name_tutor">
                                        <div class="row">
                                            <div class="col-10">
                                                <h1 class="">Razzakov <span class="redcl">Baxodir</span> </h1>
                                            </div>
                                            <div class="col-1">
                                                <img src="img/faculty-logo-2-1-1024x1024.png" alt="" class="top_logo img-img-fluid">
                                                <p> Agroinjineriya </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p>--------------------------------------------------------------------------</p>

                                        <h6 class="mb-3">Telefon qilish</h6>
                                        <div class="col-2">
                                            <img src="img/Phone_48px.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>+998 99 000 000</p>
                                            <p>+998 99 002 0202</p>
                                        </div>

                                        <p>--------------------------------------------------------------------------</p>

                                    </div>
                                    <div class="row">
                                        <h6 class="mb-3">Pochta xabarini yuborish</h6>
                                        <div class="col-2">
                                            <img src="img/Group Message_48px.png" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p>brazzakov176<span class="mark">@gmail.com</span> </p>
                                            <p>brazzakov176<span class="mark">@mail.ru</span> </p>
                                        </div>

                                        <p>---------------------------------------------------------------------------</p>
                                        <div class="row">
                                            <h6 class="mb-3">Ijtimoiy tarmoqlarda</h6>
                                            <div class="col-2">
                                                <img src="img/Telegram App_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @razzakovbaxodir
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/Instagram_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @razzakovbaxodir
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/LinkedIn_48px.png" alt="">
                                            </div>
                                            <div class="col-6">
                                                @razzakovbaxodir
                                            </div>
                                        </div>
                                        <p>---------------------------------------------------------------------------</p>

                                        <div class="row">
                                            <h6 class="mb-3">Biriktirilgan Gruppalar</h6>
                                            <div class="col-10">
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">01-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">02-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">03-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">11-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">12-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">21-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success mb-2">22-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">109-21</span>
                                                </a>
                                                <a href="">
                                                    <span class="btn btn-outline-success">95-21</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 bg-light mx-0">
                                    <div class="bgyellow col-8">

                                    </div>
                                    <div class="col-4">
                                        <img class="imageposition" src="img/shaxsiy rasmlar/Mamadaliyeva_Gulhayo600x814.png" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                <!-- <div class="swiper-pagination"></div> -->
            </div>
            <script>
                var swiper = new Swiper(".mySwiper1", {
                    // effect: 'cube',
                    // grabCursor: true,
                    // cubeEffect: {
                    //     shadow: false,
                    //     // siledeShadows: false,
                    //     // shadowOffset: 90,
                    //     ShadovScale: 0.4,
                    // },
                    spaceBetween: 30,
                    centeredSlides: true,
                    direction: 'vertical',
                    loop: true,
                    autoplay: {
                        delay: 3500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                        // dynamicBullets: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-butston-prev",
                    },
                });
            </script>

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
                            <p>Zokirov Ilyosbek</p>
                        </div>
                        <div class="swiper-slide" style="  background-position: center; background-size: cover; width: 300px; height: 300px;">
                            <img src="img/tyutorlar faoliyatidan/photo_2022-02-07_09-57-23.jpg" alt="" class="img-thumbnail">
                            <p>Zokirov Ilyosbek</p>
                        </div>
                        <div class="swiper-slide" style="  background-position: center; background-size: cover; width: 300px; height: 300px;">
                            <img src="img/tyutorlar faoliyatidan/20211130_180842.jpg" alt="" class="img-thumbnail">
                            <p>Zokirov Ilyosbek</p>
                        </div>
                        <div class="swiper-slide" style="  background-position: center; background-size: cover; width: 300px; height: 300px;">
                            <img src="img/tyutorlar faoliyatidan/20211130_182644.jpg" alt="" class="img-thumbnail">
                            <p>Zokirov Ilyosbek</p>
                        </div>
                        <div class="swiper-slide" style="  background-position: center; background-size: cover; width: 300px; height: 300px;">
                            <img src="img/tyutorlar faoliyatidan/20211130_183041.jpg" alt="" class="img-thumbnail">
                            <p>Zokirov Ilyosbek</p>
                        </div>
                        <div class="swiper-slide" style="  background-position: center; background-size: cover; width: 300px; height: 300px;">
                            <img src="img/1.jpg" alt="" class="img-thumbnail">
                            <p>Zokirov Ilyosbek</p>
                        </div>
                        <div class="swiper-slide" style="  background-position: center; background-size: cover; width: 300px; height: 300px;">
                            <img src="img/tyutorlar faoliyatidan/photo_2022-02-07_10-05-31.jpg" alt="" class="img-thumbnail">
                            <p>Zokirov Ilyosbek</p>
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