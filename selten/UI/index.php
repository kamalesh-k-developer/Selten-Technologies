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
  <!-- <div id="slider">
    <figure>
      <img src="..\images\banners\CRM gif_0.gif" alt>
      <img src="..\images\banners\CRM gif_0.gif" alt>
      <img src="..\images\banners\CRM gif_0.gif" alt>
      <img src="..\images\banners\CRM gif_0.gif" alt>
      <img src="..\images\banners\CRM gif_0.gif" alt>

    </figure>
  </div> -->

  <!-- <section aria-label="newest photos" class="image-slide">
    <div class="carousel" data-carousel>
      <button class="carousel-button prev" data-carousel-button="prev">&#8249;</button>
      <button class="carousel-button next" data-carousel-button="next">&#8250;</button>
      <ul data-slides class="mySlides">
        <li class="slide" id="slide" data-active>
          <img src="../images/imageslider/slider-1.png"  alt="crm " srcset="">
        </li>
        <li class="slide">
          <img src="../images/imageslider/slider-2.png" alt="crm " srcset="">
        </li>
        <li class="slide">
          <img src="../images/imageslider/slider-3.png" alt="crm " srcset="">
        </li>
        <li class="slide">
          <img src="../images/imageslider/slider-4.png" alt="crm " srcset="">
        </li>
        <li class="slide">
          <img src="../images/imageslider/slider-5.png" alt="crm " srcset="">
        </li>
      </ul>
    </div>
  </section> -->

  <div class="" style="max-width:100%; width:100%;">
    <img class="mySlides" src="../images/imageslider/slider-1.png" style="width:100%">
    <img class="mySlides" src="../images/imageslider/slider-2.png" style="width:100%">
    <img class="mySlides" src="../images/imageslider/slider-3.png" style="width:100%">
    <img class="mySlides" src="../images/imageslider/slider-4.png" style="width:100%">
    <img class="mySlides" src="../images/imageslider/slider-5.png" style="width:100%">
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
<script>var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}</script>

  <!-- our services -->
  <!-- <div class="wrapper"> -->
    <div class=" index-service">
      <div class="index-ser">
        <h1>OUR SERVICES</h1>
      </div>
      <div class=" container index-3-service">


        <div class="row index-service-row ">

          <div class="col-md-4  index-col-1 ">
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
              <div class="index-shadowtwo"></div>
              <div class="index-shadowone"></div>
              

            </div>
          </div>
          <div class="col-md-4 index-col-2 ">
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
              <div class="index-shadowtwo"></div>
              <div class="index-shadowone"></div>

            </div>
          </div>
          <div class="col-md-4 index-col-3 ">
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
              <div class="index-shadowtwo"></div>
              <div class="index-shadowone"></div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- our mission our vission we are selten -->
  
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
          <p>Like a scene in a movie or a verse in a song, paragraphs are the building blocks of any good piece of writing. Paragraphs lend a natural rhythm to your writing that makes it a joy to read. The question is, how do you handle them successfully</p>
          <h3>Messi</h3>
        </div>
        <div class="test-img">
          <img src="..\images\images\test-p.jpg" alt="" srcset="">
        </div>
      </div>

      <div class="test-col">
        <div class="test-user">
          <p>Like a scene in a movie or a verse in a song, paragraphs are the building blocks of any good piece of writing. Paragraphs lend a natural rhythm to your writing that makes it a joy to read. The question is, how do you handle them successfully</p>
          <h3>Ranaldo</h3>

        </div>
        <div class="test-img">
          <img src="..\images\images\test-p.jpg" alt="" srcset="">
        </div>
      </div>

      <div class="test-col">
        <div class="test-user">
          <p>Like a scene in a movie or a verse in a song, paragraphs are the building blocks of any good piece of writing. Paragraphs lend a natural rhythm to your writing that makes it a joy to read. The question is, how do you handle them successfully</p>
          <h3>Dhoni</h3>

        </div>
        <div class="test-img">
          <img src="..\images\images\test-p.jpg" alt="" srcset="">
        </div>
      </div>

      <div class="test-col">
        <div class="test-user">
          <p>Like a scene in a movie or a verse in a song, paragraphs are the building blocks of any good piece of writing. Paragraphs lend a natural rhythm to your writing that makes it a joy to read. The question is, how do you handle them successfully</p>
          <h3>Mangoliya</h3>

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



<script>
  var myIndex = 0;
  carousel();

  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {
      myIndex = 1
    }
    x[myIndex - 1].style.display = "block";
    setTimeout(carousel, 3000); // Change image every 2 seconds
  }
  
</script>
</body>
<?php
include_once('footer.php');
?>