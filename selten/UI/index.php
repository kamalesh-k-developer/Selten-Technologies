<?php
$GLOBALS['home'] = 'active';
include_once('header.php');
?>
<!-- <link rel="stylesheet" href="..\assets\css\aos.css"> -->
<!-- <script src="..\assets\js\aos.js"></script> -->
<!-- <script>
    AOS.init({});
  </script> -->

<body>


  <div class="" style="max-width:100%; width:100%;" onmouseover="stopShow()" onmouseout="runShow()">
  
    <img class="mySlides" src="../images/imageslider/slider-1.png" style="width:100%" onmouseover="stopShow()" onmouseout="runShow()">
    <img class="mySlides" src="../images/imageslider/slider-2.png" style="width:100%" onmouseover="stopShow()" onmouseout="runShow()">
    <img class="mySlides" src="../images/imageslider/slider-3.png" style="width:100%" onmouseover="stopShow()" onmouseout="runShow()">
    <img class="mySlides" src="../images/imageslider/slider-4.png" style="width:100%" onmouseover="stopShow()" onmouseout="runShow()">
    <img class="mySlides" src="../images/imageslider/slider-5.png" style="width:100%" onmouseover="stopShow()" onmouseout="runShow()">
</div>
    <div class="" style="width:100%">
      <!-- <div class="w3-left curousel-btn w3-hover-text-khaki" onclick="plusDivs(-1)"><i class="fa-duotone fa-arrow-right"></i></div>
    <div class="w3-right  curousel-btn w3-hover-text-khaki" onclick="plusDivs(1)"><i class="fa-duotone fa-arrow-lrft"></i></div> -->
      <!-- <span class="w3-badge slider-button demo w3-border w3-transparent w3-hover-red" onclick="currentDiv(1)"></span>
    <span class="w3-badge slider-button demo w3-border w3-transparent w3-hover-red" onclick="currentDiv(2)"></span>
    <span class="w3-badge slider-button demo w3-border w3-transparent w3-hover-red" onclick="currentDiv(3)"></span>
    <span class="w3-badge slider-button demo w3-border w3-transparent w3-hover-red" onclick="currentDiv(4)"></span>
    <span class="w3-badge slider-button demo w3-border w3-transparent w3-hover-red" onclick="currentDiv(5)"></span> -->
    </div>
  </div>
  <script>
    var myIndex = 0;
    var timer;
    carousel();

    function carousel() {
      var i;
      var timer;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1
      }
      // x[myIndex - 1].style.display = "block";
      timer=setTimeout(carousel, 5000); // Change image every 2 seconds
    }
  </script>

  <!-- our services -->
  <!-- <div class="wrapper"> -->
  <div class=" index-service">
    <div class="index-ser">
      <h1>OUR SERVICES</h1>
    </div>
    <div class=" container index-3-service">


      <div class="row index-service-row ">

        <div class="col-md-4  index-col-1 animate__animated animate__fadeInDown">
          <div class="index-main-ser">
            <div class="card index-serivice-card ">
              <div class="our-index-service-icon">
                <i class="fas fa-desktop"></i>
              </div>
              <div class=" our-index-service-heading">
                <h4>CRM service</h4>
              </div>
              <div class=" our-index-service-para">
                <p>
                  CRM Services provided by Selten Technologies dssdsfsfsffsds comes in three distinct modules: Marketing, Sales, and Customer Service. Every one of these modules helps organizations to store and deal with their contacts, customize email campaigns, and examine it for effective marketing. CRM is generally being embraced by the vast majority of the organizations to make a strong promotion and deals intended to drive in higher incomes.
                </p>
              </div>

            </div>
            <div class="index-shadowone"></div>
            <div class="index-shadowtwo"></div>



          </div>
        </div>
        <div class="col-md-4 index-col-2 animate__animated animate__fadeInDown ">
          <div class="index-main-ser">
            <div class="card index-serivice-card">
              <div class="our-index-service-icon">
                <i class="fas fa-bullhorn "></i>
              </div>
              <div class=" our-index-service-heading">
                <h4>Digital Marketing</h4>
              </div>
              <div class=" our-index-service-para">
                <p>
                  CRM services provided by Selten Technologies dssdsfsfsffsds comes in three distinct modules: Marketing, Sales, and Customer Service. Every one of these modules helps organizations to store and deal with their contacts, customize email campaigns, and examine it for effective marketing. CRM is generally being embraced by the vast majority of the organizations to make a strong promotion and deals intended to drive in higher incomes.
                </p>
              </div>

            </div>
            <div class="index-shadowone"></div>
            <div class="index-shadowtwo"></div>


          </div>
        </div>
        <div class="col-md-4 index-col-3 animate__animated animate__fadeInDown ">
          <div class="index-main-ser ">
            <div class="card index-serivice-card">
              <div class="our-index-service-icon">
                <i class="fa-solid fa-earth-americas"></i>
              </div>
              <div class=" our-index-service-heading">
                <h4>Web Development</h4>
              </div>
              <div class=" our-index-service-para">
                <p>
                  CRM services provided by Selten Technologies dssdsfsfsffsds comes in three distinct modules: Marketing, Sales, and Customer Service. Every one of these modules helps organizations to store and deal with their contacts, customize email campaigns, and examine it for effective marketing. CRM is generally being embraced by the vast majority of the organizations to make a strong promotion and deals intended to drive in higher incomes.
                </p>
              </div>

            </div>
            <div class="index-shadowone"></div>
            <div class="index-shadowtwo"></div>


          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
  <!-- our mission our vission we are selten -->

  <!-- why we choose us start -->
  <div class="why-choose">
    <div class="container"></div>
  <div class="dd_heading">
  <h2 class=" why-main-head">Why We Choose Us</h2>
<p class=" why-p">When you choose us, you'll feel the benefit of 10 years' experience of Web Development.<br> Because we know the digital world and we know that how to handle it. With working knowledge of online, SEO and social media.</p>
</div>
<main class="page-content">
  <div class="d_card">
    <div class="why-content">
      <h2 class="why-heading">Modern Design</h2>
      <p class="data-content">We use latest technology for the latest world because we know the demand of peoples. </p>
    </div>
  </div>
  <div class="d_card">
    <div class="why-content">
      <h2 class="why-heading">Creative Design</h2>
      <p class="data-content">We are always creative and and always lisen our costomers and we mix these two things and make beast design. </p>
    </div>
  </div>
  <div class="d_card">
    <div class="why-content">
      <h2 class="why-heading">Market Strategy</h2>
      <p class="data-content">Holding back technology to preserve broken business models is like allowing blacksmiths to veto the internal combustion engine in order to protect their horseshoes. </p>
    </div>
  </div>
  <div class="d_card">
    <div class="why-content">
      <h2 class="why-heading">Affordable cost</h2>
      <p class="data-content">Love is a special word, and I use it only when I mean it. You say the word too much and it becomes cheap. </p>
    </div>
  </div>
</main>
</div>
</div>

  <!-- why we choose us end -->
  <!-- testimonial start -->
  <div class="testimonial-start">
    <div class="testimonials-head">
      <h1>TESTIMONIAL</h1>
    </div>


    <div class="container test-container">


      <div class="testimonial">
        <div class="test-row" id="testslide">
          <div class="test-col">
            <div class="test-user">
              <p>We choose CRM for all our marketing and manage the leads in different areas. Selten Technologies Guided to implementation of integrating CRM with various applications and tremendously support and successfully Delivered on time.</p>
              <h3>Messi</h3>
            </div>
            <div class="test-img">
              <img src="..\images\images\test-p.jpg" alt="" srcset="">
            </div>
          </div>

          <div class="test-col">
            <div class="test-user">
              <p>We Built a CRM for Call centre to manage the leads and Integrating with Twilio and Vici dial. Selten Technologies provided the timely solution for better integration of CRM and leads management.</p>
              <h3>Ranaldo</h3>

            </div>
            <div class="test-img">
              <img src="..\images\images\test-p.jpg" alt="" srcset="">
            </div>
          </div>

          <div class="test-col">
            <div class="test-user">
              <p>We Built a CRM for Call centre to manage the leads and Integrating with Twilio and Vici dial. Selten Technologies provided the timely solution for better integration of CRM and leads management.</p>
              <h3>Ranaldo</h3>

            </div>
            <div class="test-img">
              <img src="..\images\images\test-p.jpg" alt="" srcset="">
            </div>
          </div>

          <div class="test-col">
            <div class="test-user">
              <p>We Built a CRM for Call centre to manage the leads and Integrating with Twilio and Vici dial. Selten Technologies provided the timely solution for better integration of CRM and leads management.</p>
              <h3>Ranaldo</h3>

            </div>
            <div class="test-img">
              <img src="..\images\images\test-p.jpg" alt="" srcset="">
            </div>
          </div>
        </div>
      </div>
      <div class="test-indicator">
        <span class="btn test-btn active-test"> </span>
        <span class="btn test-btn"> </span>
        <span class="btn test-btn"> </span>
        <span class="btn test-btn"> </span>
      </div>
    </div>
  </div>



  
</body>
<?php
include_once('footer.php');
?>