
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurangabad Distillery Limited</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/db006bf474.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style-mobile.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <p> <a href="/"> <i class="fa fa-home font-weight-bold mr-1" aria-hidden="true"></i> Home </a> </p>
  <p> <a href="gallery.php"> <i class="fa fa-phone h5 font-weight-bold mr-1" aria-hidden="true"></i> Gallery </a> </p>
  <p> <a href="product.html"> <i class="fa fa-photo font-weight-bold mr-1" aria-hidden="true"></i> Our Products </a> </p>
  <p> <a href="certification.html"> <i class="fa fa-video-camera font-weight-bold mr-1" aria-hidden="true"></i> Certification </a> </p>
        <p> <a href="vision-mission.html"> <i class="fa fa-eye font-weight-bold mr-1" aria-hidden="true"></i> Vision </a> </p>
  <p> <a href="report.php"> <i class="fa fa-video-camera font-weight-bold mr-1" aria-hidden="true"></i> Annual Report </a> </p>
  <p> <a href="contact.html"> <i class="fa fa-black-tie font-weight-bold mr-1" aria-hidden="true"></i> Contact Us </a> </p>
  <p> <a href="about.html"> <i class="fa fa-info-circle h5 font-weight-bold mr-1" aria-hidden="true"></i> ABOUT </a> </p>
  <p> <a href="https://instagram.com/shravan.y?utm_medium=copy_link" target="__blank"> <i class="fa fa-instagram mr-1" aria-hidden="true"></i> INSTAGRAM </a> </p>
</div>

    <div class="container-fluid">
        <div class="row main">

            <div class="col-md-12 position-fixed nav pt-3 classinitial d-flex align-items-center" id="nav">
                <div class="col-md-5 d-flex mb-2 text-left text-light">
                    <p class="mr-4"> <a href="/"> Home </a> </p>
                    <p class="mr-4"> <a href="gallery.php"> Gallery </a> </p>
                    <p class="mr-4"> <a href="product.php"> Products </a> </p>
                    <p class="mr-4"> <a href="certification.html"> Certification </a> </p>
                    <p class="mr-4"> <a href="vision-mission.html"> Vision </a> </p>
                    <p class="mr-4"> <a href="report.php"> Annual Report </a> </p>
                </div>
                <div class="col-md-2 text-center">
                <a href="index.html"> <h2> <img src="./images/logo.png" width="40px" alt=""> </h2> </a>
                </div>
                <div class="col-md-5 float-right d-flex flex-row-reverse mb-2 text-right">
                <p class="ml-4 h2"> <a href="https://instagram.com/shravan.y?utm_medium=copy_link" target="__blank"> <i class="fa fa-instagram mr-1" aria-hidden="true"></i> </a> </p>
                <p class="ml-4"> <a href="about.html"> <input type="button" onclick="window.location='tel:8275343970' " class="btn btnE p-1 pr-3 pl-3" value="ENQUIRE NOW"> </a> </p>
                <p class="mr-4 m-2"> <a href="contact.html"> Contact US </a> </p>
                <p class="mr-4 m-2"> <a href="about.html"> About us </a> </p>
                </div>
            </div>

            <div class="col-md-12 navMob position-fixed d-flex align-items-center pt-2 pb-2" id="navMob">
                <div class="col-3 h3 text-light">
                <a onclick="openNav()"> <i class="fa fa-bars font-weight-bold " aria-hidden="true"></i> </a>
                </div>
                <div class="col-6 text-center"  onclick="window.location='/'">
                <a href="index.html"> <img src="./images/logo.png" width="50px" alt=""> </a>
                </div>
                <div class="col-3 text-right h3 d-flex">
                <a href="tel:7875839313" target="__blank"> <i class="fa fa-phone mt-2  mr-2" aria-hidden="true"></i> </a>
                <a href="www.instagram.com/filmit_productions" target="__blank"> <i class="fa fa-instagram mt-2" aria-hidden="true"></i> </a>
                </div>
            </div>

            <div id="carouselExampleControls" class="carousel slide col-md-12 p-0" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="./images/product/main.jpg" class="cimg" id="cimg" alt="">
                    <div class="data">
                        <h1  data-aos-duration="5000" data-aos ="fade-down"> Our Products </h1>
                        <!-- <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a>  -->
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./images/product/rectified.jpg" class="cimg" id="cimg2" alt="">
                    <div class="data"> 
                        <h1  data-aos-duration="5000" data-aos ="fade-down">  Rectified Spirit (RS) </h1>
                        <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a> 
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./images/product/ExtraNeutralAlchol.jpg" class="cimg" id="cimg2" alt="">
                    <div class="data"> 
                        <h1  data-aos-duration="5000" data-aos ="fade-down"> Extra Neutral Alcohol </h1>
                        <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a> 
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./images/product/specialDenatured.jpg" class="cimg" id="cimg2" alt="">
                    <div class="data"> 
                        <h1  data-aos-duration="5000" data-aos ="fade-down">  Special denatured spirit </h1>
                        <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a> 
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./images/product/ethanol.jpg" class="cimg" id="cimg3" alt="">
                    <div class="data"> 
                        <h1 data-aos-duration="5000" data-aos ="fade-down"> Ethanol </h1>
                        <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a> 
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./images/product/whitePotash.jpg" class="cimg" id="cimg3" alt="">
                    <div class="data"> 
                        <h1 data-aos-duration="5000" data-aos ="fade-down"> Potash </h1>
                        <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a> 
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./images/product/bioPotash.jpg" class="cimg" id="cimg3" alt="">
                    <div class="data"> 
                        <h1 data-aos-duration="5000" data-aos ="fade-down"> Bio Potash </h1>
                        <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a> 
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./images/product/dePotashVinnase.jpg" class="cimg" id="cimg3" alt="">
                    <div class="data"> 
                        <h1 data-aos-duration="5000" data-aos ="fade-down"> De Potash Vinnase (DPV) </h1>
                        <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a> 
                    </div>
                    </div>
                    
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Gallery Section Begin -->
    <div class="container p-4 ">
        <h1 class="text-center mb-5 mt-5 pb-5"> Our Products <div class="col-md-4 offset-md-4 bg-dark"></div> </h1>
        
        
        <div class="row" id="">
            <div class="col-md-5">
                <img src="./images/product/rectified.jpg" width="100%" class="img rounded shadowme" alt="">
            </div>
            <div class="col-md-7">
                <h1 class="col-md-11 offset-md-1">Rectified Spirit (RS)</h1>
                <h5 class="col-md-11 offset-md-1 text-justify">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem possimus amet rerum sint quidem quis aliquam placeat reiciendis consectetur quisquam, totam sit vero eveniet sapiente molestiae alias libero repellat facere perspiciatis. Excepturi, quas optio! Ab ad sit adipisci doloribus vero.
                    <br>
                    <input type="button" class="btn btn-outline-primary btn-normal mt-4" id="showMore" onClick="pagination()" value="Learn More">
                </h5>


            </div>
        </div>
    </div>





<div class="container-fluid text-center pt-5 bg-dark footer2 text-md-left">
    <div class="container">

        <div class="row">

            <div class="col-md-6 col-lg-6 col-xl-6 mb-4">

                <h6 class="text-uppercase font-weight-bold">ABOUT US</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  "Aurangabad Distillery Limited "
                  <br>
                   We are one of the leading manufacturers of Rectified Spirit, Denatured Spirit and Extra Neutral Alcohol. Apportion of our production of molasses from sugar factory is used as raw material for manufacture of spirit i.e. Rectified Spirit, Denatured Spirit and Extra Neutral Alcohol which is manufactured by the Continuous Fermentation & Multipressure Vacuum Distillation and also effecting sells of carbon dioxide (CO2) and fusel oil which are produced as by-products during distillation process of Spirit.
                </p>
            </div>

            <div class="col-md-1 col-lg-1 col-xl-1">
            </div>

            <div class="col-md-5 col-lg-5 col-xl-5 mx-auto mb-md-0 mb-4">

                <h6 class="text-uppercase font-weight-bold">CONTACT US</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                <i class="fa fa-home mr-3"></i> Aurangabad, Maharashtra</p>
                <p>
                <i class="fa fa-envelope mr-3"></i> <a href="#" class="text-light"> shravanyadavmail@gmail.com <a> </p>
                <p>
                <i class="fa fa-phone mr-3"></i> 
                  +91 8208124471
                </p>
                <p>
                <i class="fa fa-phone mr-3"></i> 
                  02118 252 407
                </p>                
                <p>
                  Aurangabad Distillery, Walchandnagar, Maharashtra 413114
                </p>
            </div>

        </div>
    </div> 

    <div class="footer-copyright text-center text-white-50 py-3">
    © 2021 Copyright:
    <a class="text-white" href="">Saurabh</a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
<script>
 function openNav() {
      document.getElementById("mySidenav").style.width = "100%";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  $(function () { 
      var header = $(".classinitial"); 
      $(window).scroll(function () { 
          var scroll = $(window).scrollTop(); 

          if (scroll >= 250) { 
              header.removeClass('classinitial') 
                      .addClass("classfinal"); 
                      
          } else { 
              header.removeClass("classfinal") 
                      .addClass('classinitial'); 
          } 

          base = -70;

          document.getElementById("cimg").style =  'margin-top:'+ (base + (scroll/2) )+'px';
          document.getElementById("cimg2").style = 'margin-top:'+ (base + (scroll/2) )+'px';
          document.getElementById("cimg3").style = 'margin-top:'+ (base + (scroll/2) )+'px';
          

      }); 
  });
  

</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
