<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ฝากถอน lucky777</title>
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
  </style>
</head>
<body>
<!-- banner -->
<div class="row mt-lg-5 pt-lg-5"></div>
    <div class="justify-content-center mt-md-3 pt-md-3 mt-lg-3">
        <!-- btn login&register -->
        <div class="d-flex justify-content-center pt-md-4 mt-md-4">
            <div class="row mt-5 pt-3 w-100">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn" id="myBtnlogin">
                          <img src="<?=base_url('./assets/img/core-img/btn_login.png');?>" class="img-fluid" alt="login">
                        </button>    
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn" id="myBtnRegister">
                          <img src="<?=base_url('./assets/img/core-img/btn_regis.png');?>" class="img-fluid" alt="register">
                        </button>
                    </div>
                </div>
            </div>  
        </div>
    </div>

  <!-- content -->
  <main id="main">
    <section id="main-content">
      <div class="container">
        <div class="row mt-lg-3 pt-lg-3">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-lg-3">
            <div class="d-flex justify-content-center pt-3">
              <img src="<?=base_url('./assets/images/deposit/depos_banner.png');?>" alt="Banner">
            </div>
          </div>
        </div>
        <div class="row mt-3">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <img src="<?=base_url('./assets/images/deposit/depos.png');?>" class="img-fluid" alt="Deposit">
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <img src="<?=base_url('./assets/images/deposit/withdrow.png');?>" alt="Deposit" class="img-fluid">
            </div>
        </div>
      </div>
    </section>
    <!-- #promotion card -->
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-21 col-lg-12 col-xl-12">
                    <div class="d-flex justify-content-center">
                    <img src="<?=base_url('./assets/images/deposit/with_depos_pay.png');?>" alt="Deposit" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-21 col-lg-12 col-xl-12">
                    <div class="justify-content-center">
                        <div class="mt-3 p-3" style="background-color: #f0f2f5;border-radius: 15px;">
                            <p>ฝากถอนไม่มีขั่นต่ำ เติมผ่าน true wallet </p><p>การเติมเงินเข้าเล่นเกมส์ แบบเดิมๆที่ล่าช้า ทำให้ลูปค้าไม่พอใจนั้นลืมลืมกันไปได้เลยครับ เพราะเรามี ระบบใหม่ ที่ทุกคนอาจจะยังไม่เข้าใจหรือร้จักกันก็อาจจะมีบ้าง เพราะการที่เราจะทำธุกรรมใดๆก็ตามใน ยุค 5G นี้ต้องได้รับความรวดเร็วทันใจไม่ต้องรอช้าให้เสียเวลาและเสียอารมณ์ ของคนที่รอทำรายการ โดยเว็บเกมส์เรานั้น ทรูวอลเลท ได้นำระบบฝากเงินที่ง่ายสะดวกสบาย มาไว้เพื่อลริการทุกท่านอย่างเต็มระบบ เพราะเราคือเว็บเกมส์พรี่เมี่ยมที่จะหาสิ่งที่ดี มาให้กับลูกค้าของเรา เพราะการเล่นสล็อตของเราเติมเงินโดยไม่มีขั้นต่ำผ่าน true wallet สมาชิกทุกคนสามารถทำรายการฝาก-ถอนไม่มีขั้นต่ำ ผ่านระบบออโต้ได้เป็นช่วงเวลาตลอด 24 ชั่วโมง </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-sm-12 col-md-12 co-lg-12 col-xl-12">
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-danger btn-sm pr-4 pl-4" style="border-radius: 30px;">ฝากเลย คลิก</button>
                    </div>
                </div>
            </div>
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
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