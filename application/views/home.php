<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>lucky777</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?=base_url('./assets/img/logo.png');?>" rel="icon">
  <link href="<?=base_url('./assets/img/logo.png');?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?=base_url('./assets/css/bootstrap.min.css');?>" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="<?=base_url('./assets/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('./assets/css/animate.css');?>" rel="stylesheet">
  <link href="<?=base_url('./assets/lib/ionicons/css/ionicons.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('./assets/lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?=base_url('./assets/css/style.css');?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <!-- special style -->
  <style>
  .blog .carousel-indicators {
    left: 0;
    top: auto;
    bottom: -80px;
  }

  /* The colour of the indicators */
  .blog .carousel-indicators li {
      background: #a3a3a3;
      border-radius: 50%;
      width: 23px;
      height: 8px;
  }

.blog .carousel-indicators .active {
background: #707070;
}

/* card game */
/* The colour of the indicators */
#owl-demo .item{
  padding: 30px 0px;
  margin: 10px;
  color: #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;
}

#owl-casino .item{
  padding: 30px 0px;
  margin: 10px;
  color: #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;
}

.customNavigation{
  text-align: center;
}
.customNavigation a{
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

/* test */
.owl-nav button {
  position: absolute;
  top: 50%;
  background-color: #000;
  color: #fff;
  margin: 0;
  transition: all 0.3s ease-in-out;
}
.owl-nav button.owl-prev {
  left: 0;
}
.owl-nav button.owl-next {
  right: 0;
}

.owl-dots {
  text-align: center;
  padding-top: 15px;
}
.owl-dots button.owl-dot {
  width: 15px;
  height: 15px;
  border-radius: 50%;
  display: inline-block;
  background: #ccc;
  margin: 0 3px;
}
.owl-dots button.owl-dot.active {
  background-color: #000;
}
.owl-dots button.owl-dot:focus {
  outline: none;
}
.owl-nav button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.38) !important;
}
span {
    font-size: 70px;    
    position: relative;
    top: -5px;
}
.owl-nav button:focus {
    outline: none;
}
/* end */
@media only screen and (min-width: 360px) and (max-width: 640px){
  .centered {
    position: absolute;
    top: 17%;
    left: 25%;
    transform: translate(-50%, -50%);
  }
  .centered-regis-slot{
    position: absolute;
    top: 17%;
    right: -25%;
    transform: translate(-50%, -50%);
  }
  .bn-finvite{
    width: 95%;
  }
  /* img ชวนเพื่อนสมัคร */
  .centered6 {
    position: absolute;
    top: 250px;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
  }

}
@media only screen and (min-width: 768px) and (max-width: 1024px){
  .centered {
    position: absolute;
    top: 13%;
    left: 25%;
    transform: translate(-50%, -50%);
  }
  .centered-regis-slot{
    position: absolute;
    top: 13%;
    right: -25%;
    transform: translate(-50%, -50%);
  }
  .bn-finvite{
    width: 100%;
  }
  /* img ชวนเพื่อนสมัคร */
  .centered6 {
    position: absolute;
    top: 276px;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
  }
  .img-btn-login, .img-btn-regis{
    width: 60%;
  }
}
@media only screen and (min-width: 1080px) and (max-width: 1920px){
  .centered {
    position: absolute;
    top: 35%;
    left: 47%;
    transform: translate(-50%, -50%);
  }
  .centered-regis-slot{
    position: absolute;
    top: 35%;
    right: -1%;
    transform: translate(-50%, -50%);
  }
}
  </style>
</head>
<body>
<!-- banner -->
  <!-- <div id="banner_home" class="img-responsive">
    <div class="justify-content-center">
      
      <div class="row">
        <div class="col-12 col-sm-12 col-12 col-md-6 col-lg-6 col-xl-6 centered">
          <div class="d-flex justify-content-start">
            <button type="button" class="btn" id="myBtnlogin">
              <img src="<?=base_url('./assets/img/core-img/btn_login.png');?>" class="img-fluid" alt="login">
            </button>    
          </div>
        </div>
        <div class="col-12 col-sm-12 col-12 col-md-6 col-lg-6 col-xl-6 justify-content-start centered text-right">
          <button type="button" class="btn" id="myBtnRegister">
            <img src="<?=base_url('./assets/img/core-img/btn_regis.png');?>" class="img-fluid" alt="register" style="margin-left: 64%;">
          </button>
        </div>
      </div>  
      <div class="row">
        <div class="col-12 col-sm-12 col-12 col-md-6 col-lg-6 col-xl-6 centered6">
          <img src="<?=base_url('./assets/img/core-img/invite-friends.png');?>" class="img-fluid" alt="invite friends"></div>
        </div>
      </div>
    </div>
  </div>  -->
  <!-- banner -->
  <div id="banner_home" class="img-responsive">
    <div class="justify-content-center">
      <!-- btn login&register -->
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 justify-content-end centered">
          <div class="justify-content-center">
            <button type="button" class="btn" id="myBtnlogin">
              <img src="<?=base_url('./assets/img/core-img/btn_login.png');?>" class="img-fluid img-btn-login" alt="login">
            </button>    
          </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 justify-content-start centered-regis-slot text-right">
          <div class="d-flex justify-content-start">
            <button type="button" class="btn" id="myBtnRegister">
              <img src="<?=base_url('./assets/img/core-img/btn_regis.png');?>" class="img-fluid img-btn-regis" alt="register">
            </button>
          </div>    
        </div>

      </div>  
      <div class="row">
        <div class="col-12 col-sm-12 col-12 col-md-6 col-lg-6 col-xl-6 centered6">
        <div class="d-flex justify-content-center">
          <img src="<?=base_url('./assets/img/core-img/invite-friends.png');?>" class="img-fluid bn-finvite" alt="invite friends">
        </div>
      </div>
    </div>
    </div>
  </div>

  <!-- content -->
  <main id="main">
    <section id="main-content">
      <div class="container">
        <div class="row mt-5">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 wow fadeInUp">
            <div id="bg-promotion">
              <div class="row mb-5">
                <div class="col-12"></div>
              </div>
              <div class="row mb-5 pb-5 mb-lg-5 pb-lg-5 pb-md-0">
                <div class="col-12"></div>
              </div>
              <!-- carosel -->
              <div class="row blog pt-5 pl-4 pr-4 pt-md-0">
                <div class="col-12 col-sm-12  col-md-12 col-lg-12 col-xl-12 mt-lg-5 pt-lg-5">
                  <div class="owl-slider">
                    <div id="carousel" class="owl-carousel">
                      <div class="item">
                        <a href="<?=base_url('promotion');?>"><img src="<?=base_url('./assets/img/core-img/HAPPYBIRTHDAY-FOR-YOU.jpeg');?>" alt="HAPPYBIRTHDAY-FOR-YOU"></a>
                      </div>
                      <div class="item">
                        <a href="<?=base_url('promotion');?>"><img src="<?=base_url('./assets/img/core-img/mobile_2.jpeg');?>" alt=""></a>
                      </div>
                      <div class="item">
                        <a href="<?=base_url('promotion');?>"><img src="<?=base_url('./assets/img/core-img/depositwithoutbonus.jpeg');?>" alt=""></a>
                      </div>
                      <div class="item">
                        <img src="<?=base_url('./assets/img/core-img/depositwithoutbonus.jpeg');?>" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- #Game -->
    <section id="bg_game_card">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="d-flex justify-content-center">
              <img src="<?=base_url('/assets/img/core-img/SLOT-logo.png');?>" class="img-fluid" alt="SLOT">
            </div>
          </div>
        </div>

        <!-- card -->
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <!-- carosel -->
            <div id="owl-demo" class="owl-carousel owl-theme">
              <div class="item"><img src="<?=base_url('./assets/img/game/slotpg.png');?>" alt=""></div>
              <div class="item"><img src="<?=base_url('./assets/img/game/slotlive22.png');?>" alt=""></div>
              <div class="item"><img src="<?=base_url('./assets/img/game/slotspad.png');?>" alt=""></div>
              <div class="item"><img src="<?=base_url('./assets/img/game/slotgamatron.png');?>" alt=""></div>
              <div class="item"><img src="<?=base_url('./assets/img/game/slotameba.png');?>" alt=""></div>
              <div class="item"><img src="<?=base_url('./assets/img/game/slotevo.png');?>" alt=""></div>
            </div>
            
            <div class="customNavigation">
              <!-- <a class="btn prev">Previous</a>
              <a class="btn next">Next</a> -->
            </div>
            <!-- end -->
          </div>
        </div>
        <!-- end -->
        <!-- casino -->
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="d-flex justify-content-center">
              <img src="<?=base_url('./assets/img/core-img/casino.png');?>" class="img-fluid" alt="CASINO">
            </div>
          </div>
        </div>

        <!-- card -->
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <!-- carosel -->
            <div id="owl-casino" class="owl-carousel owl-theme">
              <div class="item">
                <a href="<?=base_url('./casino');?>">
                  <img src="<?=base_url('./assets/img/casino/slotsexy.png');?>" alt="">
                </a>
              </div>
              <div class="item">
                <a href="<?=base_url('./casino');?>">
                  <img src="<?=base_url('./assets/img/casino/casinowm.png');?>" alt="">
                </a>
                </div>
              <div class="item">
                <a href="<?=base_url('./casino');?>">
                  <img src="<?=base_url('./assets/img/casino/casinosacopy.png');?>" alt="">
                </a>
              </div>
              <div class="item">
                <a href="<?=base_url('./casino');?>">
                  <img src="<?=base_url('./assets/img/casino/casinodrem.png');?>" alt="">
                </a>
              </div>
              <div class="item">
                <a href="<?=base_url('./casino');?>">
                  <img src="<?=base_url('./assets/img/casino/casinopretty.png');?>" alt="">
                </a>
              </div>
              <div class="item">
                <a href="<?=base_url('./casino');?>">
                  <img src="<?=base_url('./assets/img/casino/casinoallbet.png');?>" alt="">
                </a>
                </div>
            </div>
          </div>
        </div>
        <!-- end -->
        <!-- client -->
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div id="bg_lient">
              <div class="row">
                <div class="col-2 col-2 col-md-2 col-lg-2 col-xl-2">
                  <img src="<?=base_url('./assets/img/client/pg.png');?>" alt="game6" style="width: 100%;height: 66%;" align="center">
                </div>
                <div class="col-2 col-2 col-md-2 col-lg-2 col-xl-2 pt-lg-3 pt-md-2">
                  <img src="<?=base_url('./assets/img/client/live22.png');?>" alt="game1" style="width: 100%;" align="center">
                </div>

                <div class="col-2 col-2 col-md-2 col-lg-2 col-xl-2 pt-lg-3 pt-md-3">
                  <img src="<?=base_url('./assets/img/client/logospad.png');?>" alt="game1" style="width: 100%;" align="center">
                </div>
                <div class="col-2 col-2 col-md-2 col-lg-2 col-xl-2">
                  <img src="<?=base_url('./assets/img/client/gamatron1.png');?>" alt="game1" style="width: 100%;" align="center">
                </div>
                <div class="col-2 col-2 col-md-2 col-lg-2 col-xl-2 pt-lg-3 pt-md-3">
                  <img src="<?=base_url('./assets/img/client/AMEBA1.png');?>" alt="game1" style="width: 100%;" align="center">
                </div>
                <div class="col-2 col-2 col-md-2 col-lg-2 col-xl-2 pt-lg-4 pt-md-3">
                  <img src="<?=base_url('./assets/img/client/dragonsoft.png');?>" alt="game1" style="width: 100%;" align="center">
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- end -->
        <div class="row mt-5">
          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game6.png');?>" class="img-fluid" alt="game6">
          </div>
          
          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game1.png');?>" class="img-fluid" alt="game1">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game2.png');?>" class="img-fluid" alt="game2">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game3.png');?>" class="img-fluid" alt="game3">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game4.png');?>" class="img-fluid" alt="game4">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game5.png');?>" class="img-fluid" alt="game5">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game7.png');?>" class="img-fluid" alt="game7">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game12.png');?>" class="img-fluid" alt="game11">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game11.png');?>" class="img-fluid" alt="game11">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game10.png');?>" class="img-fluid" alt="game10">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game9.png');?>" class="img-fluid" alt="game9">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game8.png');?>" class="img-fluid" alt="game8">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game13.png');?>" class="img-fluid" alt="game13">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game18.png');?>" class="img-fluid" alt="game18">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game17.png');?>" class="img-fluid" alt="game17">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game16.png');?>" class="img-fluid" alt="game16">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game15.png');?>" class="img-fluid" alt="game15">
          </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 mb-2">
            <img src="<?=base_url('./assets/img/client/game14.png');?>" class="img-fluid" alt="game14">
          </div>
        </div>
      </div>
    </section>
    <section id="bg_contact">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-5">
            <div class="d-flex justify-content-start mt-5 pt-5">
              <img src="<?=base_url('./assets/img/core-img/logo.png');?>" class="img-fluid" alt="Contact">
            </div>
            <p class="text-white text-left mt-">เราเป็นผู้ให้บริการเกมส์พนันเต็มรูปแบบ ที่เปิดให้บริการมาอย่าง ยาวนาน และเป็นผู้นำโดดเด่นในการให้บริการในทุกๆด้าน โยเฉพาะในหมวกหมู่สล็อต ที่มีผู้ใช้บริการจำนวนมากให้ความสนใจเป็นพิเศษ
 และเกมส์สล็อตที่มีผู้เข้าเล่นมากที่สุดอันดับ 1 ของทางค่ายนั่นก็คือ Joker123 ค่ายเกมส์สล็อตที่มีผู้สนใจเข้าร่วมเล่นกับทางค่ายมากที่สุด ด้วยจุดเด่นที่ไม่เหมือนใครของระบบที่มีความเสถียรสูง แจกหนัก และ ยังเป็นค่ายเกมส์ SLOT ที่เปิดให้บริการมาอย่างยาวนาน
            </p>
            <div class="row">
              <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <img src="<?=base_url('./assets/img/core-img/btn_regis.png');?>" id="btn_regis" class="img-fluid" alt="register">
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <img src="<?=base_url('./assets/img/core-img/button@LUCKY777.png');?>" id="btn_atline" class="img-fluid" alt="register">
              </div>
            </div>
          </div>
          
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-md-5 pt-md-5 mt-lg-5 pt-lg-5">
            <div class="d-flex justify-content-center">
              <img src="<?=base_url('./assets/img/contact/seo-image.png');?>" id="seo_img" class="img-fluid" alt="Contact">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="bg_footer">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
            <div class="d-flex justify-content-center">
              <img src="<?=base_url('./assets/img/core-img/DOWNLOAD.png');?>" alt="DOWNLOAD">
            </div>
          </div>
        </div>
        <!-- download icon -->
        <div class="row mt-5">
          <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            
              <img src="<?=base_url('./assets/img/core-img/downloadplay.png');?>" alt="play in browser">
            
          </div>
          <div div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
           
              <img src="<?=base_url('./assets/img/core-img/downloadstore.png');?>" alt="play in store">
           
          </div>
          <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            
              <img src="<?=base_url('./assets/img/core-img/downloadapp.png');?>" alt="play in store">
            
          </div>
        </div>
        <!-- bank -->
        <div class="row mt-5">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="d-flex justify-content-center mt-5">
              <img src="<?=base_url('./assets/img/cradit/bank.png');?>" class="img-fluid" alt="">
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="d-flex justify-content-center">
              <img src="<?=base_url('./assets/img/core-img/main_logo.png');?>" class="img-fluid" alt="" style="width: 50%;">
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="d-flex justify-content-center">
              <img src="<?=base_url('./assets/img/core-img/qr.png');?>" class="img-fluid" alt="">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="d-flex justify-content-center mt-5 pt-5">
              <h6 class="text-white">Copyright © 2021 - All Rights Reserved.</h6>
            </div>
          </div>
        </div>
      </div>
    </section>

        <!-- modal regis -->
        <div class="modal fade" id="myModalregister">
      <div class="modal-dialog">
        <div class="modal-content" style="background: #FF7E00;background: -webkit-linear-gradient(top, #FF7E00, #FFC800);
        background: -moz-linear-gradient(top, #FF7E00, #FFC800);background: linear-gradient(to bottom, #FF7E00, #FFC800);border-radius: 27px;">
        <!-- Modal Header -->
          <div class="modal-header border-0">
            <h4 class="modal-title text-center text-white" style="font-family: 'Kanit_regular';">สมัครสมาชิก</h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <!-- Modal body -->
        <div class="modal-body pl-5 pr-5">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="d-flex justify-content-center">
                <img class="img-responsive" src="<?=base_url('./assets/img/core-img/main_logo.png');?>" alt="lucky777" style="width: 50%;">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <!-- test -->
              <form>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ocl-xl-12">
                  <div class="d-flex justify-content-center">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="กรุณากรอกเบอร์โทรศัพท์" style="border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
                    </div>
                  </div>
                </div>
                <div class="pl-5 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" id="exampleRadios1">
                    <label class="form-check-label" for="exampleRadios1"> <h6>ยอมรับเงื่อนไข Term and condition</h6></label>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mb-2" style="width: 50%;color: #fff;background-color: #3ac5e7;border-color: #3ac5e7;border-radius: 30px;font-family: 'Kanit_regular';"><b>ยืนยัน</b></button>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">
                  <div class="d-flex justify-content-center align-items-center">
                    <h6 class="pt-2">คุณมีบัญชีผู้ใช้แล้ว</h6>&nbsp;<button type="button" class="btn btn-danger btn-sm pl-3 pr-3" style="border-radius: 30px;" id="switch_to_login">เข้าสู่ระบบ</button>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
                  <div class="d-flex justify-content-center align-items-center">
                    <b class="text-dark">พบปัญหา</b>&nbsp;<b class="text-danger">ติดต่อฝ่ายบริการลูกค้า</b>
                  </div>
                </div>
              </div>
            </form>
            <!-- end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->
  <!-- modal login -->
  <div class="modal fade" id="myModallogin">
    <div class="modal-dialog">
      <div class="modal-content" style="background: #FF7E00;background: -webkit-linear-gradient(top, #FF7E00, #FFC800);
        background: -moz-linear-gradient(top, #FF7E00, #FFC800);background: linear-gradient(to bottom, #FF7E00, #FFC800);border-radius: 27px;">
        <!-- Modal Header -->
        <div class="modal-header border-0">
          <h4 class="modal-title text-center text-white" style="font-family: 'Kanit_regular';">เข้าสู่ระบบ</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body pl-5 pr-5">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="d-flex justify-content-center">
                <img class="img-responsive" src="<?=base_url('./assets/img/core-img/main_logo.png');?>" alt="lucky777" style="width: 50%;">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <!-- test -->
              <form>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ocl-xl-12">
                  <div class="d-flex justify-content-center">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="กรุณากรอกเบอร์โทรศัพท์" style="border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ocl-xl-12">
                  <div class="d-flex justify-content-center">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="รหัสผ่าน" style="border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
                    </div>
                  </div>
                </div>
                <div class="pl-5 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="d-flex justify-content-end">
                    <h6 class="text-dark">ลืมรหัสผ่าน</h6>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-danger mb-2" style="width: 50%;color: #fff;border-radius: 30px;font-family: 'Kanit_regular';">เข้าสู่ระบบ</button>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">
                  <div class="d-flex justify-content-center align-items-center">
                    <h6 class="align-items-center pt-2">คุณมีบัญชีผู้ใช้แล้ว?</h6>&nbsp;<button type="button" class="btn btn-info btn-sm pl-3 pr-3" style="border-radius: 30px;" id="switch_to_regis">สมัครสมาชิก</button>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
                  <div class="d-flex justify-content-center align-items-center">
                    <b class="text-dark">พบปัญหา</b>&nbsp;<b class="text-danger">ติดต่อฝ่ายบริการลูกค้า</b>
                  </div>
                </div>
              </div>
            </form>
            <!-- end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->

  </main>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- JavaScript Libraries -->
  <script src="<?=base_url('./assets/lib/jquery/jquery.min.js');?>"></script>
  <script src="<?=base_url('./assets/lib/jquery/jquery-migrate.min.js');?>"></script>
  <script src="<?=base_url('./assets/lib/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?=base_url('./assets/lib/easing/easing.min.js');?>"></script>
  <script src="<?=base_url('./assets/lib/mobile-nav/mobile-nav.js');?>"></script>
  <script src="<?=base_url('./assets/lib/wow/wow.min.js');?>"></script>
  <script src="<?=base_url('./assets/lib/waypoints/waypoints.min.js');?>"></script>
  <script src="<?=base_url('./assets/lib/counterup/counterup.min.js');?>"></script>
  <script src="<?=base_url('./assets/lib/owlcarousel/owl.carousel.min.js');?>"></script>
  <script src="<?=base_url('./assets/lib/isotope/isotope.pkgd.min.js');?>"></script>
  <script src="<?=base_url('./assets/lib/lightbox/js/lightbox.min.js');?>"></script>

  <script>
    $('#promotionCarousel').carousel({
      loop: true,
      center: true,
      items: 3,
      margin: 0,
      autoplay: true,
      dots:true,
      autoplayTimeout: 5000,
      smartSpeed: 450,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 3
        },
        1170: {
          items: 4
        }
      }
		});

    // card game
    var owl = $("#owl-demo");
    owl.owlCarousel({
      loop: true,
      margin: 0,
      center: true,
      items : 6, // 10 items above 1000px browser width
      autoplay: true,
      dots:true,
      autoplayTimeout: 5000,
      smartSpeed: 450,
      itemsDesktop : [1000,5], // 5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet : [600,2], // 2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option

    });
    
    // casino
    var owl = $("#owl-casino");
    owl.owlCarousel({
      loop: true,
      margin: 0,
      center: true,
      items : 6, // 10 items above 1000px browser width
      autoplay: true,
      dots:true,
      autoplayTimeout: 5000,
      smartSpeed: 450,
      itemsDesktop : [1000,5], // 5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet : [600,2], // 2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option

    });
    // end
    // test
    jQuery("#carousel").owlCarousel({
      autoplay: false,
      rewind: true, /* use rewind if you don't want loop */
      margin: 20,
      items: 3,
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 7000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 3
        },

        1024: {
          items: 3
        },

        1366: {
          items: 3
        }
      }
    });

    // end
  </script>

  <!-- modal -->
  <script>
$(document).ready(function(){
  $("#myBtnlogin").click(function(){
    $("#myModallogin").modal();
  });
  // 
  $("#myBtnRegister").click(function(){
    $("#myModalregister").modal();
  });
 
  // login -> regis
  $("#switch_to_regis").click(function(){
    $('#myModallogin').modal('hide');
    $("#myModalregister").modal();
  });
  
  // regis->login 
  $("#switch_to_login").click(function(){
    $('#myModalregister').modal('hide');
    $("#myModallogin").modal();
  });

});
</script>
</body>
</html>