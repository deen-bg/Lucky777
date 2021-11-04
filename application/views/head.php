<!-- ***** Header Area Start ***** -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Favicons -->
<link href="<?=base_url('./assets/img/core-img/logo.png');?>" rel="icon">
  <link href="<?=base_url('./assets/img/core-img/logo.png');?>" rel="apple-touch-icon">


<!-- use for navbar -->
<link rel="stylesheet" href="<?=base_url('./assets/style.css');?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&display=swap" rel="stylesheet">

<style>
  #bg_header{
    background-image: url(assets/img/core-img/hadebar.png);
  }

  .img-invitefriends {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
  
</style>
</head>
<div id="top-bar">
<header id="header" class="fixed-top">
    <div class="container">
      <div class="justify-content-center">
        <nav class="main-nav d-none d-lg-block justify-content-center">
            <ul class="justify-content-center">
                <li id="li_menu">
                  <a class="<?=($this->uri->segment(1)=='home') ? 'active' : ''; ?>" href="<?=base_url('home');?>">หน้าแรก</a>
                </li>
                <li id="li_menu" >
                  <a class="<?=($this->uri->segment(1)=='promotion') ? 'active' : ''; ?>" href="<?=base_url('promotion');?>">โปรโมชั่น</a>
                </li>
                
                <li id="li_menu" >
                  <a class="<?=($this->uri->segment(1)=='slot') ? 'active' : ''; ?>" href="<?=base_url('slot');?>">SLOT</a>
                </li>
                <li id="li_menu" >
                  <a class="<?=($this->uri->segment(1)=='casino') ? 'active' : ''; ?>" href="<?=base_url('casino');?>">CASINO</a>
                </li>
                <li><img class="img-responsive d-none d-md-none d-lg-block d-xl-block" src="<?=base_url('./assets/img/core-img/main_logo.png');?>" alt="lucky777" style="width: 298px;top: -48px;bottom: 0;"></li>
                <li id="li_menu" >
                  <a class="<?=($this->uri->segment(1)=='deposit') ? 'active' : ''; ?>" href="<?=base_url('deposit');?>">ฝากถอน</a>
                </li>
                <li id="li_menu" >
                  <a class="<?=($this->uri->segment(1)=='download') ? 'active' : ''; ?>" href="<?=base_url('download');?>">ดาวน์โหลด</a>
                </li>
                <li id="li_menu" >
                  <a class="<?=($this->uri->segment(1)=='blog') ? 'active' : ''; ?>" href="<?=base_url('blog');?>">บทความ</a>
                </li>
                <li id="li_menu" class="d-none d-md-none d-lg-block d-xl-block"><a type="button" href="#" id="menuBtnRegister">สมัครสมาชิก</a></li>

                <!-- <li class="d-block d-md-block d-lg-none d-xl-none">
                  <button type="button" class="btn btn-primary" id="myBtnlogin">เข้าสู่ระบบ</button>  
                  <button type="button" class="btn btn-primary" id="myBtnRegister">สมัครสมาชิก</button>  
                </li> -->
            </ul>
        </nav>
      </div>
    </div>
  </header>
  </div>

  <script src="<?=base_url('./assets/lib/jquery/jquery.min.js');?>"></script>
  <script>
    window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;

  // 20 is an arbitrary number here, just to make you think if you need the prevScrollpos variable:
  if (currentScrollPos > 20) {
    // I am using 'display' instead of 'top':
    document.getElementById("top-bar").style.display = "none";
  } else {
    document.getElementById("top-bar").style.display = "initial";
  }
}
  </script> 
  <!--  -->
    <!-- modal -->
      <!-- modal -->
  <script>
$(document).ready(function(){
  // 
  $("#menuBtnRegister").click(function(){
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

        

  