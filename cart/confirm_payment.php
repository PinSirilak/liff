<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rintip</title>




  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400&display=swap" rel="stylesheet">




  <link rel="stylesheet" href="../css/style.css" media="all">
  <link rel="stylesheet" href="../css/bootstrap.min.css" media="all" />
  <link rel="stylesheet" href="../css/animate.css" media="all">
  <link rel="stylesheet" href="../css/font.awesome.css" media="all">
  <link rel="stylesheet" href="../css/ionicons.min.css" media="all">
  <link rel="stylesheet" href="../css/jquery-ui.min.css" media="all">
  <link rel="stylesheet" href="../css/slick.css" media="all">
  <link rel="stylesheet" href="../css/magnific-popup.css" media="all">
  <link rel="stylesheet" href="../css/owl.carousel.min.css" media="all">
  <link rel="stylesheet" href="../css/linearicons.css" media="all">
  <link rel="stylesheet" href="../css/slinky.menu.css" media="all">
  <link rel="stylesheet" href="../css/plugins.css" media="all">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/isotope.pkgd.min.js"></script>
  <script src="../js/jquery-waypoints.js"></script>
  <script src="../js/jquery.countdown.js"></script>
  <script src="../js/jquery.counterup.min.js"></script>
  <script src="../js/jquery.elevatezoom.js"></script>
  <script src="../js/jquery.instagramFeed.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/jquery.ui.js"></script>
  <script src="../js/main.js"></script>
  <script src="../js/map.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/plugins.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/slinky.menu.js"></script>
  <script src="../js/tippy-bundle.umd.js"></script>
  <script src="../js/vconsole.min.js"></script>



  <style>
  .sizeImgLogo {
    width: 60px;
  }

  .sizeImgMenu {
    width: 21px;
  }

  .broderBotton {
    border-bottom: 1px solid #d5d5d5;
    padding: 10px;
  }

  .broderB {
    border-bottom: 1px solid #d5d5d5;
    margin: 10px;
    padding-bottom: 20px;
  }

  .imgBank {
    width: 70px;
    height: 70px;
    border-radius: 30px;
  }

  p {
    border-bottom: 0px dashed #ddd;
  }

  .wText {
    font-size: 16px;
    font-weight: bold;
    color: #ffff;
    margin-bottom: 0px;
  }

  .abtn {
    background-color: #0bbc0d;
    border-color: #0bbc0d;
    margin: 20% 0% 10%;
  }

  .form-control {
    background-color: #f9f9f9;
    border: 1px solid #ced4da
  }

  .container {
    border: 1px solid #cfcfcf;
    border-radius: 6px;
  }

  .container-1 {
    border-right: 1px solid #cfcfcf;
    border-bottom: 1px solid #cfcfcf;
    padding: 20px;
  }

  .container-2 {
    /* border-right: 1px solid #cfcfcf; */
    border-bottom: 1px solid #cfcfcf;
    padding: 10px 0px;
  }

  input[type="radio"] {
    accent-color: #0bbc0d;
    width: 20px;
    height: 20px;
    margin: 10px 0px 10px;
  }

  .p_font {
    font-size: 14px;
    margin-bottom: 0px;
    /* color: #b7b3b3; */
    /* padding: 20px; */
  }


  input[type="file"] {
    display: block;
  }

  .imageThumb {
    max-height: 150px;
    max-width: 150px;
    border: 2px solid;
    padding: 1px;
    cursor: pointer;
    margin: 5px 40px 5px;
  }

  .pip {
    display: inline-table;
    margin: 0px 0px 0px 0px;
  }

  .remove {
    display: block;
    background: #444;
    border: 1px solid black;
    color: white;
    text-align: center;
    cursor: pointer;
  }

  .remove:hover {
    background: white;
    color: black;
  }



  .app-menu--icon {
    width: 35px;
    height: 30px;
    position: relative;
    cursor: pointer;
    display: block;
    margin-left: auto;
  }

  .app-menu--icon span {
    background-color: #fff;
    position: absolute;
    border-radius: 2px;
    transition: .3s cubic-bezier(.8, .5, .2, 1.4);
    width: 100%;
    height: 2px;
    transition-duration: 500ms
  }

  .app-menu--icon span:nth-child(1) {
    top: 0px;
    left: 0px;
  }

  .app-menu--icon span:nth-child(2) {
    top: 13px;
    left: 0px;
    opacity: 1;
  }

  .app-menu--icon span:nth-child(3) {
    bottom: 0px;
    left: 0px;
  }

  .app-menu.open .app-menu--icon span:nth-child(1) {
    transform: rotate(45deg);
    top: 13px;
  }

  .app-menu.open .app-menu--icon span:nth-child(2) {
    opacity: 0;
  }

  .app-menu.open .app-menu--icon span:nth-child(3) {
    transform: rotate(-45deg);
    top: 13px;
  }

  .app-menu {
    width: 35px;
    height: 30px;
    margin-left: auto;
    padding: 1rem;
    transition-duration: 500ms;
    overflow: hidden;
    color: white;
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 9999;
    border-bottom-left-radius: 50%;
  }


  a {
    color: #000;
    text-decoration: none;
  }

  a h6 {
    margin-bottom: 15px;
  }

  .app-menu.open {
    height: calc(130%);
    width: calc(100% - 6rem);
    margin-left: auto;
    background-color: rgb(255 255 255 / 100%);
    border-radius: 0;
  }


  a h6:hover {
    color: #23bc0e;
  }


  .app-menu--content {
    text-align: left;
    margin: 10px 20px;
  }

  .app-menu.open .app-menu--content {}

  .app-content {
    padding-left: 1rem;
    padding-right: 1rem;
    color: white;
    position: absolute;
    top: 3.5rem;
    right: 0;
    left: 0;
  }

  .app-content a {
    color: white;
    text-decoration: none;
    font-size: 14px;
  }




  .sizeImgClose {
    width: 30px;
    height: 30px;
    margin-top: 5px
  }

  .layOut_logo {
    align-self: flex-start;
  }

  .sizeImgLogo_1 {
    width: 80px;
    margin-bottom: 20px;
  }
  </style>
</head>

<body style="background-color: #ffff;">


  <div class="app">

    <div class='row broderBotton'>
      <div class='col-3'>
        <img class='sizeImgLogo' src='../image/100.png' alt='' />
      </div>
      <div class='col-7 text-center'>
        <p class='front'><b>แจ้งชำระเงิน</b></p>
      </div>
      <div class='col-2' style='text-align: right;'>
        <img class='sizeImgMenu' src='../image/Component_161.png' alt='' />
      </div>
    </div>



    <div class="app-menu" onclick="toggleClassActive()">


      <div class="me-auto p-2 text-center">
        <img class="sizeImgLogo_1" src="../image/100.png" alt="" />
      </div>

      <div class="app-menu--content">
        <a href="../index.php">
          <h6>รายการสินค้า</h6>
        </a>
        <a href="../cart/index.php">
          <h6>ตะกร้าสินค้า</h6>
        </a>
        <a href="../cart/address_add_form.php">
          <h6>ที่อยู่จัดส่ง</h6>
        </a>
        <a href="../cart/pay_summary.php">
          <h6>ขัอมูลบัญชีธนาคาร/บัตร</h6>
        </a>
        <a href="../cart/order_management.php">
          <h6>จัดการคำสั่งซื้อ</h6>
        </a>
      </div>
    </div>



    <div class='p-3'>

      <div class='mb-3'>
        <label for='exampleInputEmail1' class='form-label'>ธนาคาร</label>
        <div class="container ">
          <div class="row row-cols-2">
            <div class="col-2  container-1">
              <input type="radio" id="html" name="fav_language" value="HTML">
            </div>
            <div class="col-10 container-2">
              <div class="row row-cols-2">
                <div class="col-4 text-center">
                  <img class="imgBank" src="../image/logo.png" alt="...">
                </div>
                <div class="col-8">
                  <p class="p_font">สาขา : เทพารักษ์</p>
                  <p class="p_font">เลขบัญชี : 446-2-95271-1 </p>
                  <p class="p_font">ชื่อบัญชี : บริษัท โมบิค จำกัด</p>
                </div>
              </div>
            </div>
          </div>


          <div class="row row-cols-2">
            <div class="col-2  container-1">
              <input type="radio" id="html" name="fav_language" value="HTML">
            </div>
            <div class="col-10 container-2">
              <div class="row row-cols-2">
                <div class="col-4 text-center">
                  <img class="imgBank" src="../image/2049.png" alt="...">
                </div>
                <div class="col-8">
                  <p class="p_font">สาขา : เทพารักษ์</p>
                  <p class="p_font">เลขบัญชี : 32-403464-3 </p>
                  <p class="p_font">ชื่อบัญชี : บริษัท โมบิค จำกัด</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


      <div class='mb-3'>
        <label for='exampleInputEmail1' class='form-label'>จำนวนเงิน</label>
        <input type='text' class='form-control' placeholder="4,130" required>
      </div>


      <div class='row'>
        <div class='col'>
          <div class='mb-3'>
            <label for='exampleInputEmail1' class='form-label'>วันที่</label>
            <input type='text' class='form-control' value="<?php
                                                            date_default_timezone_set("Asia/Bangkok");
                                                            echo date('d/m/Y'); ?>" required>
          </div>
        </div>
        <div class='col'>
          <div class='mb-3'>
            <label for='exampleInputEmail1' class='form-label'>เวลา</label>

            <input type='text' class='form-control' value="<?php
                                                            date_default_timezone_set("Asia/Bangkok");
                                                            echo date('H:i'); ?>" required>
          </div>
        </div>
      </div>

      <div class='mb-3'>
        <label for='exampleInputEmail1' class='form-label'>รูปสลิป</label>
        <br>
        <label>
          <img src="../image/Component_164.png" style="margin-left: 10px; margin-right: 20px;">
          <input type="file" id="files" name="files[]" multiple style="display:none">
        </label>
      </div>



    </div>



    <div class='d-grid gap-5 col-11 mx-auto'>
      <a href='#' class='btn abtn mt-20' type='submit'>
        <p class='wText'>ยืนยันการชำระเงิน</p>
      </a>
    </div>



  </div>


  <script>
  function toggleClassActive() {
    document.querySelector('.app-menu').classList.toggle("open");
  }

  $(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
      $("#files").on("change", function(e) {
        var files = e.target.files,
          filesLength = files.length;
        for (var i = 0; i < filesLength; i++) {
          var f = files[i]
          var fileReader = new FileReader();
          fileReader.onload = (function(e) {
            var file = e.target;
            $("<span class=\"pip\">" +
              "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
              "<br/><span class=\"remove\">Remove image</span>" +
              "</span>").insertAfter("#files");
            $(".remove").click(function() {
              $(this).parent(".pip").remove();
            });



          });
          fileReader.readAsDataURL(f);
        }
        console.log(files);
      });
    } else {
      alert("Your browser doesn't support to File API")
    }
  });
  </script>



</body>

</html>