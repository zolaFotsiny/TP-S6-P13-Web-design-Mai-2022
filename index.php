

<!DOCTYPE html>
<html lang="en">
<head>
     <title>rechauffement climatique |  causes  </title>
<!--
DIGITAL TREND
https://templatemo.com/tm-538-digital-trend
-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content=" information du rechauffement climatique ">
     <meta name="keywords" content="rechauffement climatique">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">
</head>
<body>
<?php 
     require ("utils/function.php");
     $Actualite=Actualite();
     include("header.php");
     
?>
     <!-- MENU BAR -->


     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">
                                   <h1 class="text-white" data-aos="fade-up">Réchauffement Climatique</h1>
                                   <p class="d-block  text-white" data-aos="fade-up" data-aos-delay="200">Les principaux cause du <strong >réchauffement climatique</strong></p>
                                   <a href="contact.html" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">En savoir plus</a>
                              </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">
                            <img src="images/working-girl.png" class="img-fluid" alt="working girl">
                          </div>
                        </div>
                    </div>
               </div>
     </section>
     <!-- ABOUT -->
     <section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">
                              <h2 class="mb-8" >Definition: <br> <strong>Réchauffement Climatique</strong> </h2><br>
                              <p class="mb-0" data-aos="fade-up">
                              Le <strong>réchauffement climatique </strong> est un phénomène caractérisé par une élévation de la température de l'atmosphère et des surfaces océaniques .
                              <br><br>
                              Plus précisément, quand on parle de réchauffement climatique, on parle d'augmentations de température liées à l'activité industrielle, notamment l' <a href="blog.html">effet de serre</a>.
                              </p>
                              <br>
                         </div>
                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">
<br><br>
                          <img src="images/office.png" width="100%"  height="80%"  class="img-fluid" alt="office">
                        </div>
                    </div>
               </div>
          </div>
     </section>


     <!-- PROJECT -->
     <section class="project section-padding" id="project">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-12 col-12">

                        <h2 class="mb-5 text-center" data-aos="fade-up">
                        Informations sur le
                            <strong> réchauffement climatique </strong>
                        </h2>           
                         <div class="owl-carousel owl-theme" id="project-slide">
                              <?php for($i=0;$i<count($Actualite);$i++) {?>
                                   <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                        <img src="images/project/project-image01.jpg" class="img-fluid" alt="project image">

                                        <div class="project-info">
                                             <small><?php echo $Actualite [$i]['titre'] ?></small>

                                             <h3>
                                                  <a href="project-detail.html">
                                                       <span><?php echo $Actualite [$i]['soustitre'] ?></span>
                                                       <i class="fa fa-angle-right project-icon"></i>
                                                  </a>
                                             </h3>
                                        </div>
                                   </div>
                              <?php }?>

                             

                              
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     


    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">We make creative <strong>brands</strong> only.</h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              +99 080 070 4224
            </p>

            <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                hello@company.com
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Our Studio</h4>

            <p class="mb-1">
              <i class="fa fa-home mr-2 footer-icon"></i> 
              Av. Lúcio Costa - Barra da Tijuca, Rio de Janeiro - RJ, Brazil
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Copyright &copy; 2020 Your Company
            <br>
            <a rel="nofollow noopener" href="https://templatemo.com">Design: TemplateMo</a></p>
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            
            <ul class="footer-link">
              <li><a href="#">Stories</a></li>
              <li><a href="#">Work with us</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="#" class="fa fa-instagram"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-dribbble"></a></li>
              <li><a href="#" class="fa fa-behance"></a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>