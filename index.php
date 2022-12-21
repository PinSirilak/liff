<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rintip</title>




  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400&display=swap" rel="stylesheet">




  <link rel="stylesheet" href="css/style.css" media="all">
  <link rel="stylesheet" href="css/bootstrap.min.css" media="all" />
  <link rel="stylesheet" href="css/animate.css" media="all">
  <link rel="stylesheet" href="css/font.awesome.css" media="all">
  <link rel="stylesheet" href="css/ionicons.min.css" media="all">
  <link rel="stylesheet" href="css/jquery-ui.min.css" media="all">
  <link rel="stylesheet" href="css/slick.css" media="all">
  <link rel="stylesheet" href="css/magnific-popup.css" media="all">
  <link rel="stylesheet" href="css/owl.carousel.min.css" media="all">
  <link rel="stylesheet" href="css/linearicons.css" media="all">
  <link rel="stylesheet" href="css/slinky.menu.css" media="all">
  <link rel="stylesheet" href="css/plugins.css" media="all">




  <script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/jquery-waypoints.js"></script>
  <script src="js/jquery.countdown.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/jquery.elevatezoom.js"></script>
  <script src="js/jquery.instagramFeed.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.ui.js"></script>
  <script src="js/main.js"></script>
  <script src="js/map.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/slinky.menu.js"></script>
  <script src="js/tippy-bundle.umd.js"></script>
  <script src="js/vconsole.min.js"></script>

  <style>
  .sizeImgLogo {
    width: 60px;
  }

  .sizeImgLogo_1 {
    width: 80px;
    margin-bottom: 20px;
  }

  .front {
    size: 12px;
  }


  .sizeImgProdeuct {
    width: 100%;
    margin-top: -20px
  }

  .sizeImgMenu {
    width: 21px;
    margin-top: 12px;
  }

  .sizeImgฺBasket {
    width: 20px;
    margin-top: 10px;
  }

  .frontPro {
    font-size: 16px;
    font-weight: bold;
    margin-top: 10px
  }

  .frontProDetail {
    font-size: 12px;
    margin-top: -10px
  }

  .wInput {
    width: 50%
  }

  .rLayOut {
    margin: 10px
  }


  .ImgฺBasketPro {
    width: 15px;
  }

  .card {
    margin-bottom: 10px;
    background-color: #ffff;
  }

  p {
    border-bottom: 0px dashed #ddd;
  }

  .abtn {
    background-color: #0bbc0d;
    border-color: #0bbc0d;
    color: #ffff;
  }



  .btn:hover {
    color: #fff
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
  </style>
</head>

<body style="background-color: #d9d9d9;">


  <input type="hidden" id="friendship" name="" value="">

  <div class="app">

    <div class="d-flex mb-3 " style="background-color: #ffff;">
      <div class="me-auto p-2">
        <img class="sizeImgLogo" src="image/100.png" alt="" />
      </div>

      <div class="me-auto p-3">
        <p class="front"><b>รายการสินค้า</b></p>
      </div>
      <div class="p-2">

        <div class="header_account_list  mini_cart_wrapper">
          <a href="cart/index.php">
            <div class="lnr"><img class="sizeImgฺBasket" src="image/Group_2.png" alt="" /></div>
            <span class="item_count">2</span>
          </a>
        </div>
      </div>



      <div class="p-2">
        <img class="sizeImgMenu" src="image/Component_161.png" alt="" />
      </div>
    </div>


    <div class="app-menu" onclick="toggleClassActive()">


      <div class="me-auto p-2 text-center">
        <img class="sizeImgLogo_1" src="image/100.png" alt="" />
      </div>




      <div class="app-menu--content">
        <a href="index.php">
          <h6>รายการสินค้า</h6>
        </a>
        <a href="cart/index.php">
          <h6>ตะกร้าสินค้า</h6>
        </a>
        <a href="cart/address_add_form.php">
          <h6>ที่อยู่จัดส่ง</h6>
        </a>
        <a href="cart/pay_summary.php">
          <h6>ขัอมูลบัญชีธนาคาร/บัตร</h6>
        </a>
        <a href="cart/order_management.php">
          <h6>จัดการคำสั่งซื้อ</h6>
        </a>
      </div>
    </div>




    <div class="card">
      <div class="d-flex">
        <img class="sizeImgProdeuct" src="image/P3.jpg" alt="" />
      </div>

      <div class="d-flex">
        <div class="p-2 w-100 frontPro">น้ำมันปาล์มโอเลอีนแบบขวด ขนาด 1 ลิตร</div>
        <div class="p-2 flex-shrink-1 frontPro">590</div>
      </div>

      <div class="d-flex">
        <div class="p-2 w-100 frontProDetail">บรรจุ 12 ขวด / กล่อง</div>
      </div>


      <div class="d-flex row rLayOut">
        <div class="p-2  col-7">
          <div class="product_variant quantity">
            <label>จำนวน &nbsp;&nbsp;</label><input class="wInput" min="1" value="1" type="number">
            &nbsp;&nbsp;<label>ลัง</label>
          </div>
        </div>
        <div class="p-2  col-5">
          <button type="button" class="btn abtn "><img class="ImgฺBasketPro" src="image/Group_1.png" alt="">
            &nbsp;ใส่ตะกร้า</button>
        </div>
      </div>
    </div>


    <div class="card">
      <div class="d-flex">
        <img class="sizeImgProdeuct" style="margin-top: 0px" src="image/P4.jpg" alt="" />
      </div>

      <div class="d-flex">
        <div class="p-2 w-100 frontPro">นน้ำมันปาล์มโอเลอีนแบบถุงขนาด 1 ลิตร</div>
        <div class="p-2 flex-shrink-1 frontPro">590</div>
      </div>



      <div class="d-flex">
        <div class="p-2 w-100 frontProDetail">บรรจุ 12 ถุง / กล่อง</div>
      </div>



      <div class="d-flex row rLayOut">
        <div class="p-2  col-7">
          <div class="product_variant quantity">
            <label>จำนวน &nbsp;&nbsp;</label><input class="wInput" min="1" value="1" type="number">
            &nbsp;&nbsp;<label>ลัง</label>
          </div>
        </div>
        <div class="p-2  col-5">
          <button type="button" class="btn abtn "><img class="ImgฺBasketPro" src="image/Group_1.png" alt="">
            &nbsp;ใส่ตะกร้า</button>
        </div>
      </div>
    </div>


  </div>


  <script>
  function toggleClassActive() {
    document.querySelector('.app-menu').classList.toggle("open");
  }



  function getFriendship() {
    const friend = liff.getFriendship();
    document.getElementById("friendship").append(friend.friendFlag);
    if (!friend.friendFlag) {
      if (confirm("คุณยังไม่ได้เพิ่ม Rintip เป็นเพื่อน จะเพิ่มเลยไหม?")) {
        window.location = "https://lin.ee/NcyQM2W"
      }
    }

  }


  async function main() {
    await liff.init({
      liffId: "1657711762-jN316KyJ"
    })

    // getFriendship()
  }
  main()
  </script>



</body>

</html>