<!doctype html>
<html lang="en">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Services Form Page</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="robots" content="noindex" />
<link rel="canonical" href="order/" />






<?php include_once("includes/head.php") ?>








</head>
<body class="order-page ordrpage">








<section class="tphead">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 ord-box1">
        <div class="logo">
            <a href="/">
              <img class="img-fluid black" src="assets/images/logo.png" alt="*" />
            </a>
          </div>
      </div>
      <div class="col-lg-9  ord-box2">
        <div class="text-right">
          <a href="/"><span class="icon-x-square"></span></a>
        </div>
      </div>
    </div>
  </div>
</section>




<div class="slider-wrapper black">
  <section class="">
    <div class="item">
      <div class="form-banner ">
        <div class="container ">
          <div class="row">
            <div class=" col-lg-12 col-xl-12 text-center">
              <div class="home-banner-content">
                <div class="col-lg-8 offset-lg-2   inner-content mtpx-100 text-left">
                  <div class="form-box-main clearfix">
                    <h2>We would love to hear from you</h2>
                    <form class="cmxform" method="POST" action="/leads/">
                    <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI']?>">   
                  <input type="hidden" name="brand" value="thecontentmaestros">   
                  <input type="hidden" name="token" value="<?= $token;?>">   
                  <input type="hidden" name="tag" value="sidepanel form in landing-page">
                  <input type="hidden" name="price" value="null">
                  <input type="hidden" name="news" value="1">
                  <input type="text" class="jun"  name="gender" >
                      <div class="row">
                        <div class="col-md-12">
                          <label class="field-txt">Name <span>*</span></label>
                          <input id="username" name="name" minlength="2" type="text" placeholder="Enter your name" required />
                        </div>
                        <div class="col-md-12">
                          <label class="field-txt">Email <span>*</span></label>
                          <input id="cemail" type="email" name="email" placeholder="Enter email here" required>
                        </div>
                        <div class="col-md-12">
                          <label class="field-txt">Phone Number<span>*</span></label>
                          <input id="phone-coun" name="phone" type="number" placeholder="Phone Number"  style="padding-left:50px;" required/>
                        </div>
                        <div class="col-md-6">
                         <div class="slct">
                            <label class="field-txt">Select Package <span>*</span></label>
                            <select id="packages" name="Package" class="valid" aria-invalid="false" >
                              <option value="-1" pack="0">Select</option>
                              <option value="&nbsp 3 stars" pack="1">&nbsp 3 stars Website Copywriting Package</option>
                              <option value="&nbsp 4 stars Website Copywriting Package" pack="2">&nbsp 4 stars Website Copywriting Package</option>
                              <option value="&nbsp 5 stars Website Copywriting Package" pack="3">&nbsp 5 stars Website Copywriting Package</option>
                              <option value="&nbsp 3 Stars Package" pack="4">&nbsp 3 Stars Article Writing Package</option>
                              <option value="&nbsp 4 Stars Article Writing Package" pack="5">&nbsp 4 Stars Article Writing Package</option>
                              <option value="&nbsp 5 Stars Article Writing Package" pack="6">&nbsp 5 Stars Article Writing Package</option>
                              <option value="&nbsp 3 Stars Writing Package" pack="7">&nbsp 3 Stars Writing Package</option>
                              <option value="&nbsp 4 Stars Writing Package" pack="8">&nbsp 4 Stars Writing Package</option>
                              <option value="&nbsp 5 Stars Writing Package" pack="9">&nbsp 5 Stars Writing Package</option>
                              <option value="&nbsp 3 Stars eBook Package" pack="10">&nbsp 3 Stars eBook Writing Package</option>
                              <option value="&nbsp 4 Stars Writing Package" pack="11">&nbsp 4 Stars eBook Writing Package</option>
                              <option value="&nbsp 5 Stars eBook Writing Package" pack="12">&nbsp 5 Stars eBook Writing Package</option>
                              <option value="&nbsp 3 Stars Blog Writing Package" pack="13">&nbsp 3 Stars Blog Writing Package</option>
                              <option value="&nbsp 4 Stars Blog Writing Package" pack="14">&nbsp 4 Stars Blog Writing Package</option>
                              <option value="&nbsp 5 Stars Blog Writing Package" pack="15">&nbsp 5 Stars Blog Writing Package</option>
                              <option value="&nbsp 1 Minute Speech Writing Package" pack="16">&nbsp 1 Minute Speech Writing Package</option>
                              <option value="&nbsp 2 Minute Speech Writing Package" pack="17">&nbsp 2 Minute Speech Writing Package</option>
                              <option value="&nbsp 5 Minute Speech Writing Package" pack="18">&nbsp 5 Minute Speech Writing Package</option>
                              <option value="&nbsp 3 Stars 5 Blog Posts Writing Package" pack="19">&nbsp 3 Stars 5 Blog Posts Writing Package</option>
                              <option value="&nbsp 4 Stars 10 Blog Posts Writing Package" pack="20">&nbsp 4 Stars 5 Blog Posts Writing Package</option>
                              <option value="&nbsp 5 Stars 15 Blog Posts Writing Package" pack="21">&nbsp 5 Stars 5 Blog Posts Writing Package</option>
                              <option value="&nbsp 1 Power Blog Posts Writing Package" pack="22">&nbsp 1 Power Blog Posts Writing Package</option>
                              <option value="&nbsp 5 Power Blog Posts Writing Package" pack="23">&nbsp 5 Power Blog Posts Writing Package</option>
                              <option value="&nbsp 10 Power Blog Posts Writing Package" pack="24">&nbsp 10 Power Blog Posts Writing Package</option>

                              <option value="&nbsp Basic SEO Package" pack="25"> &nbsp Basic SEO Package</option>

                              <option value="&nbsp Silver SEO Package" pack="26"> &nbsp Standard SEO Package</option>

                              <option value="&nbsp Gold SEO Package" pack="27"> &nbsp Enterprise SEO Package</option>

                              <option value="&nbsp 1 Minute Speech Writing Package" pack="28">&nbsp 1 Minute Speech Writing Package</option>

                               <option value="&nbsp 2 Minute Speech Writing Package" pack="29">&nbsp 2 Minute Speech Writing Package</option>

                               <option value="&nbsp 5 Minute Speech Writing Package" pack="30">&nbsp 5 Minute Speech Writing Package</option>

                               <option value="&nbsp 3 Stars Press Release Package" pack="31">&nbsp 3 Stars Press Release Package</option>

                               <option value="&nbsp 4 Stars Press Release Package" pack="32">&nbsp 4 Stars Press Release Package</option>

                               <option value="&nbsp 5 Stars Press Release Package" pack="33">&nbsp 5 Stars Press Release Package</option>

                                <option value="&nbsp Social Basic Package" pack="34">&nbsp Social Basic Package</option>


                                <option value="&nbsp Social Pro Package" pack="35">&nbsp Social Pro Package</option>


                                <option value="&nbsp Social Advance Package" pack="36">&nbsp Social Advance Package</option>

                                 <option value="&nbsp 1 Minute Speech Writing Package" pack="37">&nbsp 1 Minute Speech Writing Package</option>

                                <option value="&nbsp 2 Minute Speech Writing Package" pack="38">&nbsp 2 Minute Speech Writing Package</option>


                                <option value="&nbsp 5 Minute Speech Writing Package" pack="39">&nbsp 5 Minute Speech Writing Package</option>


                                <option value="&nbsp Basic 5 Page White Paper  Package" pack="40">&nbsp Basic 5 Page White Paper  Package</option>

                                <option value="&nbsp Long 10 Page White Paper Package" pack="41">&nbsp Long 10 Page White Paper Package</option>

                                <option value="&nbsp Business 20 Page White Paper Package" pack="42">&nbsp Business 20 Page White Paper Package</option>



                                <option value="&nbsp Basic Proposal Writing Package" pack="43">&nbsp Basic Proposal Writing Package</option>

                                <option value="&nbsp Bronze Proposal Writing Package" pack="44">&nbsp Bronze Proposal Writing Package</option>

                                <option value="&nbsp Silver Proposal Writing Package" pack="45">&nbsp Silver Proposal Writing Package</option>

                                <option value="&nbsp Gold Proposal Writing Package" pack="46">&nbsp Gold Proposal Writing Package</option>

                                <option value="&nbsp Platinum Proposal Writing Package" pack="47">&nbsp Platinum Proposal Writing Package</option>



                                 <option value="&nbsp Basic Scripts Writing Package" pack="48">&nbsp Basic Scripts Writing Package</option>

                                 <option value="&nbsp Silver Scripts Writing Package" pack="49">&nbsp Silver  Scripts Writing Package</option>

                                 <option value="&nbsp Gold Scripts Writing Package" pack="50">&nbsp Gold  Scripts Writing Package</option>


                                 <option value="&nbsp 3 Stars Content Writing Package" pack="51">&nbsp 3 Stars Content Writing Package</option>

                                 <option value="&nbsp 4 Stars Content Writing Package" pack="52">&nbsp 4 Stars Content Writing Package</option>

                                 <option value="&nbsp 5 Stars Content Writing Package" pack="53">&nbsp 5 Stars Content Writing Package</option>

                                 <option value="1 Basic Package Guest Blogging" pack="54">1 Basic Package Guest Blogging</option>

                                 <option value="1 Standard Package Guest Blogging" pack="55">1 Standard Package Guest Blogging</option>

                                 <option value="5 Silver Package Guest Blogging" pack="56">5 Silver Package Guest Blogging</option>

                                 <option value="5 Gold Package Guest Blogging" pack="57">5 Gold Package Guest Blogging</option>


                                 <option value="&nbsp 3 Stars Press Release Package" pack="58">&nbsp 3 Stars Press Release Package</option>

                               <option value="&nbsp 4 Stars Press Release Package" pack="59">&nbsp 4 Stars Press Release Package</option>

                               <option value="&nbsp 5 Stars Press Release Package" pack="60">&nbsp 5 Stars Press Release Package</option>
                                  <option value="Article Writing Publication Silver Package" pack="61">Article Writing Publication Silver Package</option>
                                 <option value="Article Writing Publication Gold Package" pack="61">Article Writing Publication Gold Package</option>
                                 <option value="Article Writing Publication Platinum Package" pack="61">Article Writing Publication Platinum Package</option>
                            </select>
                         </div>
                        </div>

                        
                        <div class="col-md-12">
                          <label class="field-txt">Type of Service <span>*</span> <a href="#"></a></label>
                          <div class="check-list col-lg-6">
                            <input  type="checkbox" checked name="Services[]" value="Content Writing" >
                            <label for="checkbox1">Content Writing</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input  type="checkbox" name="Services[]" value="Website Copywriting">
                            <label for="checkbox2">Website Copywriting</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input  type="checkbox" name="Services[]" value="SEO">
                            <label for="checkbox3">SEO</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input  type="checkbox" name="Services[]" value="Guest Blogging">
                            <label for="checkbox4">Guest Blogging</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Services[]" value="Article Writing">
                            <label for="checkbox5">Article Writing</label>
                          </div>
                          <div class="check-list col-lg-6" >
                            <input type="checkbox" name="Services[]" value="Blog Writing">
                            <label for="checkbox6">Blog Writingl</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Services[]" value="Speech Writing">
                            <label for="checkbox7">Speech Writing</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Services[]" value="eBook Writing">
                            <label for="checkbox7">eBook Writing</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Services[]" value="Press Release">
                            <label for="checkbox7">Press Release</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Services[]" value="Web design & development">
                            <label for="checkbox7">Web design & development</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Services[]" value="Social Media Content">
                            <label for="checkbox7">Social Media Content</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Services[]" value="White Papers">
                            <label for="checkbox7">White Papers</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Services[]" value="Proposals Writing">
                            <label for="checkbox7">Proposals Writing</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Services[]" value="Case Studies">
                            <label for="checkbox7">Case Studies</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Services[]" value="Manuscripts & Novels">
                            <label for="checkbox7">Manuscripts & Novels</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Services[]" value="Editing and Proofreading">
                            <label for="checkbox7">Editing and Proofreading</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Services[]" value="Wikipedia Profile">
                            <label for="checkbox7">Wikipedia Profile</label>
                          </div>
                        </div>
                        
                        <div class="col-md-12">
                          <label class="field-txt">Genre <span>*</span></label>
                          <div class="check-list col-lg-6">
                            <input  type="checkbox" checked name="Genre[]" value="Memoir / Autobiography">
                            <label for="checkbox1">Memoir / Autobiography</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input  type="checkbox" name="Genre[]" value="General Nonfiction">
                            <label for="checkbox2">General Nonfiction</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input  type="checkbox" name="Genre[]" value="Adult Fiction">
                            <label for="checkbox3">Adult Fiction</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input  type="checkbox" name="Genre[]" value="Biography">
                            <label for="checkbox4">Biography</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Genre[]" value="Personal Development">
                            <label for="checkbox5">Personal Development</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Genre[]" value="Young Adult Fiction">
                            <label for="checkbox6">Young Adult Fiction</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Genre[]" value="Business">
                            <label for="checkbox7">Business</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Genre[]" value="Religious">
                            <label for="checkbox7">Religious</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Genre[]" value="Children's Literature">
                            <label for="checkbox7">Children's Literature</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Genre[]" value="Self-Help">
                            <label for="checkbox7">Self-Help</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Genre[]" value="Spiritual">
                            <label for="checkbox7">Spiritual</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input type="checkbox" name="Genre[]" value="I Don't Know">
                            <label for="checkbox7">I Don't Know</label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <label class="field-txt">Publishing Goals <span>*</span></label>
                          <div class="check-list col-lg-6">
                            <input  type="checkbox" checked name="PublishingGoals[]" value="Traditional Publisher with National Distribution">
                            <label for="checkbox1">Traditional Publisher with National Distribution</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input  type="checkbox" name="PublishingGoals[]" value="Hybrid Publisher">
                            <label for="checkbox2">Hybrid Publisher</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input  type="checkbox" name="PublishingGoals[]" value="Self-Publishing or Print-on-Demand">
                            <label for="checkbox3">Self-Publishing or Print-on-Demand</label>
                          </div>
                          <div class="check-list col-lg-6">
                            <input  type="checkbox" name="PublishingGoals[]" value="I Don't Know">
                            <label for="checkbox4">I Don't Know</label>
                          </div>
                        </div>
                        
                        
                        
                        
                        
                        <div class="col-md-12">
                          <label class="field-txt">Additional Comments <span>*</span></label>
                          <textarea name="Comment" placeholder="Enter message here" /></textarea>
                        </div>
                        <div class="col-md-12">
                          <input class="btn-theme" type="submit" value="Submit" />
                        </div>
                      </div>
                    </form>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
  </section>
    <!-- <div class="slider-progress">
      <div class="progress"></div>
    </div> -->
</div>









  

<script src="assets/js/mlib.js"></script> 
<script src="assets/js/functions.js"></script>



<script type="text/javascript">
  $( document ).ready(function() {
    
});
</script>

</body>


</html>