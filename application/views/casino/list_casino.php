<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>casino | lucky777</title>
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
  /* background: #3fbf79; */
  padding: 30px 0px;
  margin: 10px;
  color: #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;
}

#owl-casino .item{
  /* background: #3fbf79; */
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
  <div id="banner_home" class="img-responsive">
    <div class="justify-content-center">
      <!-- btn login&register -->
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 justify-content-end centered mt-0 mt-md-0 mt-lg-5 mt-xl-5">
          <div class="justify-content-center">
            <button type="button" class="btn" id="myBtnlogin">
              <img src="<?=base_url('./assets/img/core-img/btn_login.png');?>" class="img-fluid img-btn-login" alt="login">
            </button>    
          </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 justify-content-start centered-regis-slot text-right mt-0 mt-md-0 mt-lg-5 mt-xl-5">
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
    <section id="bg_game_card">
      <div class="container">
        <!-- casino -->
        <div class="row mt-4">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="d-flex justify-content-center">
              <img src="<?=base_url('./assets/img/core-img/casino.png');?>" class="img-fluid" alt="CASINO">
            </div>
          </div>
        </div>

        <!-- card -->
        <div class="row mt-3">
            <!-- card1 -->
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-2">
                <div class="card mb-4" style="border-radius: 10px;">
                    <img class="card-img-top" src="<?=base_url('./assets/img/casino/slotsexy.png');?>" class="img-fluid" alt="Card image cap" style="border-radius: 10px;">
                </div>
            </div>
            <!-- card2 -->
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-2">
                <div class="card mb-4" style="border-radius: 10px;">
                    <img class="card-img-top" src="<?=base_url('./assets/img/casino/casinowm.png');?>" class="img-fluid" alt="Card image cap" style="border-radius: 10px;">
                </div>
            </div>
            <!-- card3 -->
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-2">
                <div class="card mb-4" style="border-radius: 10px;">
                    <img class="card-img-top" src="<?=base_url('./assets/img/casino/casinosacopy.png');?>" class="img-fluid" alt="Card image cap" style="border-radius: 10px;">
                </div>
            </div>
            <!-- card4 -->
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-2">
                <div class="card mb-4" style="border-radius: 10px;">
                    <img class="card-img-top" src="<?=base_url('./assets/img/casino/casinodrem.png');?>" class="img-fluid" alt="Card image cap" style="border-radius: 10px;">
                </div>
            </div>
            <!-- card5 -->
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-2">
                <div class="card mb-4" style="border-radius: 10px;">
                    <img class="card-img-top" src="<?=base_url('./assets/img/casino/casinopretty.png');?>" class="img-fluid" alt="Card image cap" style="border-radius: 10px;">
                </div>
            </div>
            <!-- card6 -->
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-2">
                <div class="card mb-4" style="border-radius: 10px;">
                    <img class="card-img-top" src="<?=base_url('./assets/img/casino/casinoallbet.png');?>" class="img-fluid" alt="Card image cap" style="border-radius: 10px;">
                </div>
            </div>
            <!-- card7 -->
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-2">
                <div class="card mb-4" style="border-radius: 10px;">
                    <img class="card-img-top" src="<?=base_url('./assets/img/casino/slotsexy.png');?>" class="img-fluid" alt="Card image cap" style="border-radius: 10px;">
                </div>
            </div>
            <!-- card8 -->
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-2">
                <div class="card mb-4" style="border-radius: 10px;">
                    <img class="card-img-top" src="<?=base_url('./assets/img/casino/casinowm.png');?>" class="img-fluid" alt="Card image cap" style="border-radius: 10px;">
                </div>
            </div>
            <!-- card9 -->
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-2">
                <div class="card mb-4" style="border-radius: 10px;">
                    <img class="card-img-top" src="<?=base_url('./assets/img/casino/casinosacopy.png');?>" class="img-fluid" alt="Card image cap" style="border-radius: 10px;">
                </div>
            </div>
            <!-- card10 -->
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-2">
                <div class="card mb-4" style="border-radius: 10px;">
                    <img class="card-img-top" src="<?=base_url('./assets/img/casino/casinodrem.png');?>" class="img-fluid" alt="Card image cap" style="border-radius: 10px;">
                </div>
            </div>
            <!-- card11 -->
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-2">
                <div class="card mb-4" style="border-radius: 10px;">
                    <img class="card-img-top" src="<?=base_url('./assets/img/casino/casinopretty.png');?>" class="img-fluid" alt="Card image cap" style="border-radius: 10px;">
                </div>
            </div>
            <!-- card12 -->
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-2">
                <div class="card mb-4" style="border-radius: 10px;">
                    <img class="card-img-top" src="<?=base_url('./assets/img/casino/casinoallbet.png');?>" class="img-fluid" alt="Card image cap" style="border-radius: 10px;">
                </div>
            </div>
        </div>
        <!-- end card! -->
        <!-- this call pagination here -->
      </div>
    </section>
    
    <section id="bg_footer">
      <div class="container">
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
  
    $('#blogCarousel').carousel({
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
  
    // // custom Navigation Events
    // $(".next").click(function(){
    //   owl.trigger('owl.next');
    // })
    // $(".prev").click(function(){
    //   owl.trigger('owl.prev');
    // })
    // $(".play").click(function(){
    //   owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
    // })
    // $(".stop").click(function(){
    //   owl.trigger('owl.stop');
    // });
    
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

});
</script>
</body>
</html>