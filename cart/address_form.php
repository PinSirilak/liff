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


  .front {
    font-size: 16px;
    margin-top: 5px;
  }

  .form-control {
    background-color: #f9f9f9;
    border: 1px solid #ced4da
  }

  .abtn {
    background-color: #0bbc0d;
    border-color: #0bbc0d;
  }


  .wText {
    font-size: 18px;
    font-weight: bold;
    color: #ffff;
    margin-bottom: 0px;
  }

  .mt-30 {
    margin: 10% 0 10%;
  }


  .broderB {
    border-bottom: 1px solid #d5d5d5;
    margin: 15px 10px 10px;
    padding: 10px 0px 10px;
  }
  </style>




</head>

<body style="background-color: #ffff;">



  <div class='row broderBotton'>
    <div class='col-3'>
      <img class='sizeImgLogo' src='../image/100.png' alt='' />
    </div>
    <div class='col-7 text-center'>
      <p class='front'><b>ที่อยู่จัดส่ง</b></p>
    </div>
    <div class='col-2' style='text-align: right;'>
      <img class='sizeImgMenu' src='../image/Component_161.png' alt='' />
    </div>
  </div>




  <div class='p-3'>

    <div class='mb-3'>
      <label for='exampleInputEmail1' class='form-label'>ชื่อ</label>
      <input type='text' class='form-control' required>
    </div>

    <div class='mb-3'>
      <label for='exampleInputEmail1' class='form-label'>นามสกุล</label>
      <input type='text' class='form-control' required>
    </div>

    <div class='mb-3'>
      <label for='exampleInputEmail1' class='form-label'>ที่อยู่</label>
      <input type='text' class='form-control' required>
    </div>

    <div class='row'>
      <div class='col'>
        <div class='mb-3'>
          <label for='exampleInputEmail1' class='form-label'>จังหวัด</label>
          <select class='form-control' name='province' id='jprovince' onchange='provinceFunction()'>
            <option value='' selected disabled>-กรุณาเลือกจังหวัด-</option>
            <option value=''>กระบี่</option>
            <option value=''>กาญจนบุรี</option>
            <option value=''>กาฬสินธุ์</option>
          </select>
        </div>
      </div>
      <div class='col'>
        <div class='mb-3'>
          <label for='exampleInputEmail1' class='form-label'>อำเภอ</label>
          <select class='form-control' name='province' id='jprovince' onchange='provinceFunction()'>
            <option value='' selected disabled>-กรุณาเลือกอำเภอ-</option>
            <option value=''>กระบี่</option>
            <option value=''>กาญจนบุรี</option>
            <option value=''>กาฬสินธุ์</option>
          </select>
        </div>
      </div>
    </div>


    <div class='row'>
      <div class='col'>
        <div class='mb-3'>
          <label for='exampleInputEmail1' class='form-label'>ตำบล</label>
          <select class='form-control' name='province' id='jprovince' onchange='provinceFunction()'>
            <option value='' selected disabled>-กรุณาเลือกตำบล-</option>
            <option value=''>กระบี่</option>
            <option value=''>กาญจนบุรี</option>
            <option value=''>กาฬสินธุ์</option>
          </select>
        </div>
      </div>
      <div class='col'>
        <div class='mb-3'>
          <label for='exampleInputEmail1' class='form-label'>รหัสไปรษณีย์</label>
          <input type='text' class='form-control' required>
        </div>
      </div>
    </div>


    <div class='mb-3'>
      <label for='exampleInputEmail1' class='form-label'>เบอร์โทรศัพท์</label>
      <input type='text' class='form-control' required>
    </div>

  </div>

  <div class='d-grid gap-2 col-11 mx-auto'>
    <a href='../cart/address_add_form.php' class='btn abtn mt-30' type='submit'>
      <p class='wText'>บันทึก</p>
    </a>
  </div>






</body>

</html>