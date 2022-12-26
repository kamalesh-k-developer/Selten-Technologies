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


  <!-- <div class="" style="max-width:100%; width:100%;" onmouseover="stopShow()" onmouseout="runShow()">
  
    <img class="mySlides" src="../images/imageslider/slider-1.png" style="width:100%" >
    <img class="mySlides" src="../images/imageslider/slider-2.png" style="width:100%" >
    <img class="mySlides" src="../images/imageslider/slider-3.png" style="width:100%" >
    <img class="mySlides" src="../images/imageslider/slider-4.png" style="width:100%" >
    <img class="mySlides" src="../images/imageslider/slider-5.png" style="width:100%" >
</div>
    <div class="" style="width:100%"> -->
  <!-- <div class="w3-left curousel-btn w3-hover-text-khaki" onclick="plusDivs(-1)"><i class="fa-duotone fa-arrow-right"></i></div>
    <div class="w3-right  curousel-btn w3-hover-text-khaki" onclick="plusDivs(1)"><i class="fa-duotone fa-arrow-lrft"></i></div> -->
  <!-- <span class="w3-badge slider-button demo w3-border w3-transparent w3-hover-red" onclick="currentDiv(1)"></span>
    <span class="w3-badge slider-button demo w3-border w3-transparent w3-hover-red" onclick="currentDiv(2)"></span>
    <span class="w3-badge slider-button demo w3-border w3-transparent w3-hover-red" onclick="currentDiv(3)"></span>
    <span class="w3-badge slider-button demo w3-border w3-transparent w3-hover-red" onclick="currentDiv(4)"></span>
    <span class="w3-badge slider-button demo w3-border w3-transparent w3-hover-red" onclick="currentDiv(5)"></span> -->
  </div>
  </div>

  <!-- slider -->
  <div id="slider">
    <img src="..\images\imageslider\slider-1.png" alt="Image 1" style="width:100%">
    <img src="..\images\imageslider\slider-2.png" alt="Image 2" style="width:100%">
    <img src="..\images\imageslider\slider-3.png" alt="Image 3" style="width:100%">
    <img src="..\images\imageslider\slider-4.png" alt="Image 4" style="width:100%">
    <img src="..\images\imageslider\slider-5.png" alt="Image 5" style="width:100%">
  </div>

  <!-- slide end -->
  <script>
    var index = 0;
    var images = document.getElementById("slider").children;
    var timer;

    function slide() {
      for (var i = 0; i < images.length; i++) {
        images[i].style.display = "none";
      }
      index++;
      if (index >= images.length) {
        index = 0;
      }
      images[index].style.display = "block";
    }

    function startTimer() {
      timer = setInterval(slide, 3000);
    }

    function stopTimer() {
      clearInterval(timer);
    }

    document.getElementById("slider").addEventListener("mouseenter", stopTimer);
    document.getElementById("slider").addEventListener("mouseleave", startTimer);

    startTimer();
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
    <div class="container">
      <div class="why-heading">
        <h1>
          Why Choose Us
        </h1>
      </div>
      <div class="why-para">
        <h4>We will give you 6 reason to work with us</h4>
      </div>
    
    <div class="col-sm-12">
      <div class="row why-row ">
        <div class="col-sm-6  why-col why-col-1 ">
          <div class="why-col-head">
            <h3>Quick response</h3>
          </div>
        </div>
        <div class="col-sm-6 why-col why-col-2">
          <div class="why-col-para">
            Emergency response time is one hour or less guaranteed. We can log in to your PC or server remotely and resolve many issues immediately.
          </div>
        </div>
        <div class="col-sm-6 why-col why-col-3 ">
          <div class="why-col-para">
            Emergency response time is one hour or less guaranteed. We can log in to your PC or server remotely and resolve many issues immediately.
          </div>
        </div>
        <div class="col-sm-6 why-col why-col-4">
          <div class="why-col-head">
            <h3>Reputable</h3>
          </div>
        </div>


        <div class="col-sm-6 why-col why-col-5">
          <div class="why-col-head">
            <h3>Experienced</h3>
          </div>
        </div>
        <div class="col-sm-6 why-col why-col-6">
          <div class="why-col-para">
            Emergency response time is one hour or less guaranteed. We can log in to your PC or server remotely and resolve many issues immediately.
          </div>
        </div>
        <div class="col-sm-6 why-col why-col-7">
          <div class="why-col-para">
            Emergency response time is one hour or less guaranteed. We can log in to your PC or server remotely and resolve many issues immediately.
          </div>
        </div>
        <div class="col-sm-6 why-col why-col-8">
          <div class="why-col-head">
            <h3>Business savvy</h3>
          </div>
        </div>

        <div class="col-sm-6 why-col why-col-9">
          <div class="why-col-head">
            <h3>Proactive</h3>
          </div>
        </div>
        <div class="col-sm-6 why-col why-col-10">
          <div class="why-col-para">
            Emergency response time is one hour or less guaranteed. We can log in to your PC or server remotely and resolve many issues immediately.
          </div>
        </div>
      
        <div class="col-sm-6 why-col why-col-11">
          <div class="why-col-para">
            Emergency response time is one hour or less guaranteed. We can log in to your PC or server remotely and resolve many issues immediately.
          </div>
        </div>
        <div class="col-sm-6 why-col why-col-12">
          <div class="why-col-head">
            <h3>Comprehensive project management</h3>
          </div>
        </div>
       
        </div>
      </div>
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