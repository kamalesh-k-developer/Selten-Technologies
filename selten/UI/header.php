<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css\my.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="..\assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="..\css\my.css">
    <link rel="stylesheet" href="..\assets\css\all.min.css">
    <link rel="stylesheet" href="..\assets\css\aos.css">
    <link rel="stylesheet" href="..\assets\css\animate.css">
    <link rel="stylesheet" href="..\assets\css\fontawesome.min.css">
    <link rel="stylesheet" href="..\css\bootstrap-icons.css">
    <link rel="stylesheet" href="..\css\contact.css">
    <link rel="stylesheet" href="..\css\footer.css">
    <link rel="stylesheet" href="..\css\services.css">
    <link rel="stylesheet" href="..\assets\css/newAnimate.css">
    <link rel="stylesheet" href="..\css\blog.css">
    <link rel="stylesheet" href="..\css\about.css">


    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <script src="..\assets\js\my.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="..\assets\js\aos.js"></script>
    <!-- <script src="..\assets\js\my.js"></script> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        let scrollRef = 0;
        $(window).on("resize scroll", function() {
            // increase value up to 10, then refresh AOS
            scrollRef <= 10 ? scrollRef++ : AOS.refresh();
        });
    </script>
    <title>selten</title>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-light nav-main">
        <!-- <div class="container-fluid"> -->

        <div class="row">
            <div class="col-md-4 ">
                <a class="navbar-brand logo  mx-3" href="#">
                    <img class="animate__animated animate__fadeIn " src="..\images\logo\logo.png" height="70px" /></a>

            </div>

            <div class="col-md-8 ">
                <div class="info navbar-right  ">
                    <ul class="info-ul">
                        <li class="info-li">
                            <span class="info-detail ">
                                <table class="info-table">
                                    <tr>
                                        <td class="info-main "><span class="info-email"> <a href="https://www.w3schools.com/" class="hemail "><i class="fa fa-envelope   info-icon "></i><span class="info-fix">social.seltentechnologies@gmail.com </span></a></span><span class="info-phone"><a href="https://www.youtube.com/" class="hemail "> <i class="fa fa-phone   info-icon "></i><i class="fa-brands fa-whatsapp info-icon px-1" style="color:white;"></i><span class="info-fix">+91 9876543210</span></a></span></td>
                                    </tr>
                                </table>
                            </span>
                        </li>

                    </ul>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="nav">
                        <div class="hamburger">
                            <!-- material icons https://material.io/resources/icons/ -->
                            <i class="menuIcon fa-solid fa-bars"></i>
                            <i class="closeIcon fa-solid fa-close" style="display:none"></i>
                        </div>
                        <div class="collapse nav navbar-collapse" id="navbarSupportedContent">
                            <ul class=" navbar-nav nav-ul navbar-right " id="toggle" style="display: flex !important;">
                                <li class="nav-item nav-li  <?php echo $GLOBALS['home']; ?>"><a class="nav-link" href="index.php">Home</a></li>
                                
                                <li class="nav-item  nav-li <?php echo $GLOBALS['service']; ?>" id="nav-ul"><a class="nav-link " href="#">Services <i class="fa fa-caret-down" style="
    opacity: 0.5;"></i></a>
                                <div class="mega-box">
                                    <div class="mega-content">
                                        
                                        <div class="mega-main">
                                            <div >
                                            <p>Web Development</p>
                                            </div>
                                            
                                            <ul class="mega-ul">
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">web</a>
                                                </li>
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">web</a>
                                                </li>
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">web</a>
                                                </li>
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">web</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="mega-main">
                                            <p>Digital marketing</p>
                                            <ul class="mega-ul">
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">digial</a>
                                                </li>
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">digital</a>
                                                </li>
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">digital</a>
                                                </li>
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">digital</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mega-main">
                                            <p>CRM Services</p>
                                            <ul class="mega-ul">
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">CRM</a>
                                                </li>
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">CRM</a>
                                                </li>
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">CRM</a>
                                                </li>
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">CRM</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mega-main">
                                            <p>App Development</p>
                                            <ul class="mega-ul">
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">App</a>
                                                </li>
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">App</a>
                                                </li>
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">App</a>
                                                </li>
                                                <li class="mega-li">
                                                    <a href="" class="mega-link">App</a>
                                                </li>
                                            </ul>
                                        </div>
                                      
                                       
                                    </div>
                                </div>
                            </li>
                                <li class="nav-item nav-li <?php echo $GLOBALS['blog']; ?>"><a class="nav-link" href="blog.php">Blog</a></li>
                                <li class="nav-item nav-li <?php echo $GLOBALS['about']; ?>"><a class="nav-link" href="About.php">About Us</a></li>
                                <li class="nav-item nav-li <?php echo $GLOBALS['contact']; ?>"><a class="nav-link" href="contact.php">Contacts Us</a></li>

                            </ul>

                            <div>


                            </div>
                        </div>
                    </div>
                </div>
    </nav>

    <script src="..\assets\js\aos.js"></script>
    <script>
        AOS.init({});
        // toggle function //
        $(document).ready(function() {

            $(".cross").hide();
            $(".nav-ul").hide();
            $(".hamburger").click(function() {
                $(".nav-ul").slideToggle("slow", function() {
                    $(".hamburger").hide();
                    $(".cross").show();
                });
            });

            $(".cross").click(function() {
                $(".nav-ul").slideToggle("slow", function() {
                    $(".cross").hide();
                    $(".hamburger").show();
                });
            });

        });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>