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

  <section aria-label="newest photos" class="image-slide">
    <div class="carousel" data-carousel>
      <button class="carousel-button prev" data-carousel-button="prev">&#8249;</button>
      <button class="carousel-button next" data-carousel-button="next">&#8250;</button>
      <ul data-slides class="mySlides">
        <li class="slide" id="slide" data-active>
          <img src="../images/imageslider/slider-1.png" alt="crm " srcset="">
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
  </section>


  <!-- our services -->
  <div class="wrapper">
  <div class=" index-service">
    <div class="index-ser">
      <h1>OUR SERVICES</h1>
    </div>
    <div class=" container index-3-service">


      <div class="row index-service-row ">

        <div class="col-md-4 index-equal-height  ">
          <div class="index-main-ser ">
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
        <div class="col-md-4 index-equal-height ">
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
        <div class="col-md-4  index-equal-height">
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
  <div class="row ">
    <div class="col-md-6">
      <img src="..\images\images\whatsapp1-removebg-preview.png" class="app1" alt="" id="mission_image">
      <img src="..\images\images\whatsapp2-removebg-preview.png" class="app2" alt="" id="vission_image">
      <img src="..\images\images\whatsapp3-removebg-preview.png" class="app3" alt="" id="our_image">
    </div>
    <div class="col-md-6 first-col">
      <p class="paras para-1" id="mission_para">our mission of young minds showcasing our talent to the CRM and Marketing world to ease the processes of clients business and have happy customers. We offer services on various platforms across the globe which includes small, medium and large scale business. We are growing as team along with the clients to provide best cost effective solutions to improve the business</p>
      <p class="paras para-2" id="vission_para">our vission of young minds showcasing our talent to the CRM and Marketing world to ease the processes of clients business and have happy customers. We offer services on various platforms across the globe which includes small, medium and large scale business. We are growing as team along with the clients to provide best cost effective solutions to improve the business</p>
      <p class="paras para-3" id="our_para">selten are group of young minds showcasing our talent to the CRM and Marketing world to ease the processes of clients business and have happy customers. We offer services on various platforms across the globe which includes small, medium and large scale business. We are growing as team along with the clients to provide best cost effective solutions to improve the business</p>
    </div>

  </div>

</body>
<script>
  $(document).ready(function() {
    console.log('test');
    $('#mission_image').click(function() {
      $('#mission_para').show()
      $('#vission_para').hide()
      $('#our_para').hide()
    });
    $('#vission_image').click(function() {
      $('#vission_para').show()
      $('#mission_para').hide()
      $('#our_para').hide()
    });
    $('#our_image').click(function() {
      $('#vission_para').hide()
      $('#mission_para').hide()
      $('#our_para').show()
    });
  });
</script>
<!-- testimonial start -->
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
          <img src="..\images\logo\test-1.png" alt="" srcset="">
        </div>
      </div>

      <div class="test-col">
        <div class="test-user">
          <p>Like a scene in a movie or a verse in a song, paragraphs are the building blocks of any good piece of writing. Paragraphs lend a natural rhythm to your writing that makes it a joy to read. The question is, how do you handle them successfully</p>
          <h3>Ranaldo</h3>

        </div>
        <div class="test-img">
          <img src="..\images\logo\test-1.png" alt="" srcset="">
        </div>
      </div>

      <div class="test-col">
        <div class="test-user">
          <p>Like a scene in a movie or a verse in a song, paragraphs are the building blocks of any good piece of writing. Paragraphs lend a natural rhythm to your writing that makes it a joy to read. The question is, how do you handle them successfully</p>
          <h3>Dhoni</h3>

        </div>
        <div class="test-img">
          <img src="..\images\logo\test-1.png" alt="" srcset="">
        </div>
      </div>

      <div class="test-col">
        <div class="test-user">
          <p>Like a scene in a movie or a verse in a song, paragraphs are the building blocks of any good piece of writing. Paragraphs lend a natural rhythm to your writing that makes it a joy to read. The question is, how do you handle them successfully</p>
          <h3>Mangoliya</h3>

        </div>
        <div class="test-img">
          <img src="..\images\logo\test-1.png" alt="" srcset="">
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



<script>
  //   var btn = document.getElementsByClassName ("btn");
  // var testslide = document.getElementById ("testslide")

  // btn [0].onclick = function (){
  //     testslide.style.transform = "translateX(0px)";
  //     for (i=0; i<4; i++){
  //       btn[i].classList.remove("active-test");
  //       this.classList.add("active-test");
  //     }
  // }
  // btn [1].onclick = function (){
  //     testslide.style.transform = "translateX(-800px)";
  //     for (i=0; i<4; i++){
  //       btn[i].classList.remove("active-test");
  //       this.classList.add("active-test");
  //     }
  // }

  // btn [2].onclick = function (){
  //     testslide.style.transform = "translateX(-1600px)";
  //     for (i=0; i<4; i++){
  //       btn[i].classList.remove("active-test");
  //       this.classList.add("active-test");
  //     }
  // }

  // btn [3].onclick = function (){
  //     testslide.style.transform = "translateX(-2400px)";
  //     for (i=0; i<4; i++){
  //       btn[i].classList.remove("active-test");
  //       this.classList.add("active-test");
  //     }
  // }
  // slider//
</script>
</body>
<?php
include_once('footer.php');
?>