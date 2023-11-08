<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>VapeLead</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.png" />

  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/slicknav.css" />
  <link rel="stylesheet" href="assets/css/flaticon.css" />
  <link rel="stylesheet" href="assets/css/animate.min.css" />
  <link rel="stylesheet" href="assets/css/price_rangs.css" />
  <link rel="stylesheet" href="assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="assets/css/themify-icons.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/nice-select.css" />
  <link rel="stylesheet" href="assets/css/style.css" />

</head>

<body>

  <!-- preloader -->
  <!-- <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="preloader-circle"></div>
        <div class="preloader-img pere-text">
          <img src="assets/img/icon/loder.png" alt="loder" />
        </div>
      </div>
    </div>
  </div> -->
  <style>
    /* Style for the background overlay */
    #age-verification-popup {
      display: flex;
      justify-content: center;
      align-items: center;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      /* Semi-transparent black overlay */
      z-index: 1000;
      /* Ensure the popup is on top of other elements */
    }

    /* Style for the popup content */
    .popup-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      text-align: center;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    /* Style for the popup title */
    h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    /* Style for the birthdate input */
    #birthdate {
      padding: 5px;
      font-size: 16px;
    }

    /* Style for the Verify button */
    #verify-button {
      background-color: #007bff;
      /* Blue color for the button */
      color: #fff;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    /* Style for the Verify button on hover */
    #verify-button:hover {
      background-color: #0056b3;
      /* Darker blue color on hover */
    }

    #whatsapp-button {
      position: fixed;
      top: 50%;
      right: 20px;
      /* Adjust the distance from the right */
      transform: translateY(-50%);
      z-index: 1000;
      /* Ensure it's above other elements */
    }

    #whatsapp-button a {
      display: block;
      width: 60px;
      /* Adjust the button width */
      height: 60px;
      /* Adjust the button height */
      background-color: #25d366;
      /* WhatsApp green color */
      border-radius: 10px;
      /* Make it a circle */
      text-align: center;
      line-height: 60px;
      /* Center the icon vertically */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      /* Optional shadow */
    }

</style>
  <div id="whatsapp-button">
    <a href="https://wa.me/971563783078" target="_blank" rel="noopener noreferrer">
      <img src="assets/img/icon/whatsapp-icon.png" alt="WhatsApp" />
    </a>
  </div>

  <div id="age-verification-popup">
    <div class="popup-content">
      <h2>Age Verification</h2>
      <p>Please varify that you're 18+!</p>
      <button class="btn btn-info" id="yes">Yes</button>
      <button class="btn btn-danger" id="no">No</button>
    </div>
  </div>

  <script>
    // Get elements
    const popup = document.getElementById('age-verification-popup');
    const yesButton = document.getElementById('yes');
    const noButton = document.getElementById('no');

    // Function to check age
    function checkYes() {
        popup.style.display = 'none';
    }
    function checkNo() {
        alert('You must be 18 or older to access this site.');
    }

    // Attach event listener to the verify button
    yesButton.addEventListener('click', checkYes);
    noButton.addEventListener('click', checkNo);
  </script>

  <header>
    <div class="header-area">
      <div class="header-top d-none d-sm-block">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="d-flex justify-content-between flex-wrap align-items-center">
                <div class="header-info-left">
                  <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Contact Us</a></li>

                  </ul>
                </div>
                <div class="header-info-right d-flex">
                  <ul class="header-social">
                    <li>
                      <a href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-mid header-sticky">
        <div class="container">
          <div class="menu-wrapper">
            <div class="logo">
              <a href="index.php"><img src="assets/img/logo/logo.png" alt="" /></a>
            </div>

            <div class="main-menu d-none d-lg-block">
              <nav>
                <ul id="navigation">
                  <li><a href="index..php">Home</a></li>
                  <li><a href="#product">Disposable</a></li>
                  <li><a href="#product">Device</a></li>
                  <li class="new">
                    <a href="#product">Pod System</a>
                  </li>
                  <li><a href="#product">E-Liquid</a></li>
                  <li><a href="#product">Heets</a></li>
                  <li><a href="#product">Electronic's</a></li>

                  <!-- <li><a href="contact.html">Contact</a></li> -->
                </ul>
              </nav>
            </div>

            <div class="col-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
        <div class="header-bottom text-center">
          <p>
            WARNING: [18+] This product contains nicotine. Nicotine is an addictive chemical.
            <a href="#" class="browse-btn">Shop Now</a>
          </p>
        </div>
      </div>
  </header>
  <main>
    <section class="slider-area">
      <div class="slider-active">
        <div class="single-slider slider-bg1 slider-height d-flex align-items-center">
          <div class="container">
            <div class="rowr">
              <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-10">
                <div class="hero-caption text-center">
                  <!-- <span>Hot Sale</span> -->
                  <h1 style="color: antiquewhite" data-animation="bounceIn" data-delay="0.2s">
                    Original products
                  </h1>
                  <p data-animation="fadeInUp" data-delay="0.4s">
                    We have a variety of vape kits, pod kits, Disposable kits, and E-Cigarette, with the best brands available in Dubai. such as Yuoto, Tugboat, Pod salt, Myle, Juul, Nerd Bar, Nasty, Vgod, Geek vape, Voopoo, Smok.
                  </p>
                  <a href="#" class="btn_1 hero-btn" data-animation="fadeInUp" data-delay="0.7s">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="single-slider slider-bg2 slider-height d-flex align-items-center">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-10">
                <div class="hero-caption text-center">
                  <span>Hot Sale</span>
                  <h1 data-animation="bounceIn" data-delay="0.2s">
                    GET THE BEST VAPE TODAY
                  </h1>
                  <p data-animation="fadeInUp" data-delay="0.4s">
                    VapeLead is one of the leading best multipurpose e-cigarette retailer in UAE since 2016 and VapeLead has been providing its customers with guaranteed high-quality world top brands vape products for many years.
                  </p>
                  <a href="#" class="btn_1 hero-btn" data-animation="fadeInUp" data-delay="0.7s">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="items-product1 pt-30">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="single-items mb-20">
              <div class="items-img">
                <img src="assets/img/gallery/disposable.jpg" alt="" />
              </div>
              <div class="items-details">
                <h4><a href="#">Disposable</a></h4>
                <a href="#" class="browse-btn">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="single-items mb-20">
              <div class="items-img">
                <img src="assets/img/gallery/electric.jpg" alt="" />
              </div>
              <div class="items-details">
                <h4><a href="#">Device</a></h4>
                <a href="#" class="browse-btn">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="single-items mb-20">
              <div class="items-img">
                <img src="assets/img/gallery/pod.jpg" alt="" />
              </div>
              <div class="items-details">
                <h4><a href="#">Pod System</a></h4>
                <a href="#" class="browse-btn">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="items-product1 pt-30">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="single-items mb-20">
              <div class="items-img">
                <img src="assets/img/gallery/electric.jpg" alt="" />
              </div>
              <div class="items-details">
                <h4><a href="#">E-Liquid</a></h4>
                <a href="#" class="browse-btn">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="single-items mb-20">
              <div class="items-img">
                <img src="assets/img/gallery/pod.jpg" alt="" />
              </div>
              <div class="items-details">
                <h4><a href="#">Heets</a></h4>
                <a href="#" class="browse-btn">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="single-items mb-20">
              <div class="items-img">
                <img src="assets/img/gallery/disposable.jpg" alt="" />
              </div>
              <div class="items-details">
                <h4><a href="#">Electronics</a></h4>
                <a href="#" class="browse-btn">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    $query = "SELECT * FROM `category`";
    $sql = mysqli_query($connect, $query);
    while ($category = mysqli_fetch_array($sql)) { ?>
      <section class="latest-items section-padding fix">
        <div class="row">
          <div class="col-xl-12">
            <div class="section-tittle text-center mb-40">
              <h2><?php echo $category['name']; ?></h2>
            </div>
          </div>
        </div>
        <div class="container">
          <div id="product" class="latest-items-active">
            <?php
            $query1 = "SELECT * FROM `product` WHERE category = '" . $category['name'] . "';";
            $sql1 = mysqli_query($connect, $query1);
            while ($product = mysqli_fetch_array($sql1)) { ?>
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <img src="assets/product/<?php echo $product['image']; ?>" alt="" />
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><?php echo $product['name']; ?></h3>
                    <div class="properties-footer">
                      <div class="price">
                        <!-- <span>$98.00 <span>$120.00</span></span> -->
                        <span>AED<?php echo $product['price']; ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </section>
    <?php
    }
    ?>
    <div class="categories-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay=".2s">
              <div class="cat-icon">
                <img src="assets/img/icon/services1.svg" alt="" />
              </div>
              <div class="cat-cap">
                <h5>Fast & Free Delivery</h5>
                <p>Free delivery on all orders</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay=".2s">
              <div class="cat-icon">
                <img src="assets/img/icon/services2.svg" alt="" />
              </div>
              <div class="cat-cap">
                <h5>Secure Payment</h5>
                <p>Free delivery on all orders</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay=".4s">
              <div class="cat-icon">
                <img src="assets/img/icon/services3.svg" alt="" />
              </div>
              <div class="cat-cap">
                <h5>Money Back Guarantee</h5>
                <p>Free delivery on all orders</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay=".5s">
              <div class="cat-icon">
                <img src="assets/img/icon/services4.svg" alt="" />
              </div>
              <div class="cat-cap">
                <h5>Online Support</h5>
                <p>Free delivery on all orders</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="footer-wrapper gray-bg">
      <div class="footer-area footer-padding">

        <div class="footer-bottom-area">
          <div class="container">
            <div class="footer-border">
              <div class="row">
                <div class="col-xl-12">
                  <div class="footer-copy-right text-center">
                    <a href="index.php"><img src="assets/img/logo/logo2_footer.png" alt="" /></a><br><br>
                    <p>
                      Copyright &copy;
                      <script>
                        document.write(new Date().getFullYear());
                      </script>
                      All rights reserved
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
              <div class="single-footer-caption mb-50">
                <div class="footer-tittle">
                  <h4>Disposable</h4>
                  <ul>
                    <li><a href="#">XYZ Brand</a></li>
                    <li><a href="#">Winter</a></li>
                    <li><a href="#">Summer</a></li>
                    <li><a href="#">Formal</a></li>
                    <li><a href="#">Casual</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
              <div class="single-footer-caption mb-50">
                <div class="footer-tittle">
                  <h4>Pod System</h4>
                  <ul>
                    <li><a href="#">ABC Brand</a></li>
                    <li><a href="#">Winter</a></li>
                    <li><a href="#">Summer</a></li>
                    <li><a href="#">Formal</a></li>
                    <li><a href="#">Casual</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
              <div class="single-footer-caption mb-50">
                <div class="footer-tittle">
                  <h4>Electric</h4>
                  <ul>
                    <li><a href="#">MNO Brand</a></li>
                    <li><a href="#">Winter</a></li>
                    <li><a href="#">Summer</a></li>
                    <li><a href="#">Formal</a></li>
                    <li><a href="#">Casual</a></li>
                  </ul>
                </div>
              </div>
            </div> -->
        <!-- <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
              <div class="single-footer-caption mb-50">
                <div class="footer-tittle">
                  <h4>Quick Links</h4>
                  <ul>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Carrier</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div> -->
      </div>
    </div>
    </div>
    </div>
  </footer>

  <div id="back-top">
    <a class="wrapper" title="Go to Top" href="#">
      <div class="arrows-container">
        <div class="arrow arrow-one"></div>
        <div class="arrow arrow-two"></div>
      </div>
    </a>
  </div>

  <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/jquery.slicknav.min.js"></script>

  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.js"></script>
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/price_rangs.js"></script>

  <script src="assets/js/contact.js"></script>
  <script src="assets/js/jquery.form.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/mail-script.js"></script>
  <script src="assets/js/jquery.ajaxchimp.min.js"></script>

  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>