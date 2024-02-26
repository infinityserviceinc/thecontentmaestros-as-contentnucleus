<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page | The Content Maestros</title>
    <?php include_once("includes/head.php") ?>
</head>
<body>
<?php include_once("includes/header.php") ?>
<section class="">
      <div class="item">
        <div class="home-banner">
          <div class="container align-self-center">
            <div class="row">
              <div class=" col-lg-7 col-md-7 col-sm-12">
                  <div class="banner_left">
                    <h1>404 Page Not Found</h1>
                   <p></p>
                    <div class="combo_img">
                        <a href="javascript:;"><img class="lazy" alt="Trustpilot" src="assets/images/rating-1.webp" style=""></a>
                        <a href="javascript:;"><img class="lazy" alt="Reviews.io" src="assets/images/rating-2.webp" style=""></a>
                        <a href="javascript:;"><img class="lazy" alt="Clutch" src="assets/images/rating-3.webp" style=""></a>
                        <a href="javascript:;"><img class="lazy" alt="DesignRush" src="assets/images/rating-4.webp" style=""></a>
                    </div>
                    <div class="combo_btn">
                        <a href="javascript:;" class="btn-theme" onclick="setButtonURL();">Consult an Expert</a>
                        <a href="javascript:;" class="btn-theme-outline" onclick="showPopup()">Get a Quote</a>
                    </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="banner_right ">
                  <video autoplay="" muted="" loop="" class="" style="position:unset;object-fit:contain;">
                    <source src="assets/video/banner-img.webm" type="video/webm">
                  </video>
                </div>
              </div>

            </div>
          </div>
          <div class="container sec1_main_form mob">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec1_form">
                        <h3>Sign up with The Content Maestros to Avail Our Exclusive Discounts</h3>
                        <form action="/leads/" method="POST">
<input type="hidden" name="route" value="/order/">   
                  <input type="hidden" name="brand" value="thecontentmaestros">   
                  <input type="hidden" name="token" value="282fffff0cad631a048ecf18dd1eb52df1842415111d3168ca2755e891d04ab8">   
                  <input type="hidden" name="tag" value="sidepanel form in landing-page">
                  <input type="hidden" name="price" value="null">
                  <input type="hidden" name="news" value="1">
                  <input type="text" class="jun" name="gender">
                            <input type="text" name="name" placeholder="Full Name" required="">
                            <input type="email" name="email" placeholder="Email" required="">
                            <input type="number" name="phone" placeholder="Phone Number" required="">
                            <input type="Submit" value="Submit">
                            <input type="checkbox" id="" name="" value="1" required>
                        <label for="terms">I have read and agree to the <a href="/terms-and-conditions/">terms of service</a></label>

                        </form>
                        
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="container sec1_main_form web">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec1_form">
                        <h3>Sign up with The Content Maestros to Avail Our Exclusive Discounts</h3>
                        <form action="/leads/" method="POST">
                        <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI']?>">
                        <input type="hidden" name="brand" value="thecontentmaestros">
                        <input type="hidden" name="token" value="<?= $token;?>">
                        <input type="hidden" name="tag" value="sidepanel form in landing-page">
                        <input type="hidden" name="price" value="null">
                        <input type="hidden" name="news" value="1">
                        <input type="text" class="jun" name="gender">
                            <input type="text" name="name" placeholder="Full Name" required="">
                            <input type="email" name="email" placeholder="Email" required="">
                            <input type="number" name="phone" placeholder="Phone Number" required="">
                            
                            <input type="Submit" value="Submit">
                            <div style="bottom: 5px;position: absolute;">
                            <input style="height: auto; width: auto;" type="checkbox" id="" name="" value="1" required>
                            <label for="terms">I have read and agree to the <a href="/terms-and-conditions/">terms of service</a></label>
                            </div>
                            
                            
                          
                           
                        </form>
                        

                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>
<?php include_once("includes/footer.php") ?>
</body>
</html>