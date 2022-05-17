

<!DOCTYPE html>
<html lang="en">
<head>
     <title>rechauffement climatique | definitions - causes -solution- informations </title>
<!--
DIGITAL TREND
https://templatemo.com/tm-538-digital-trend
-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content=">definitions - causes -solution- informations sur le rechauffement climatique   ">
     <meta name="keywords" content="rechauffement climatique ">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
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
     <center>
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div >
                                   <h1 class="text-white" data-aos="fade-up">Réchauffement Climatique</h1>
                                   <p class="d-block  text-white" data-aos="fade-up" data-aos-delay="200">Définitions et Informations du réchauffement climatique</p>
                                   <a href="contact.html" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">En savoir plus</a>
                              </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">
                            <img src="images/rechauffement climatique.png" width=450 height=450 class="img-fluid" alt="rechauffement climatique" >
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
                              <h2 class="mb-8" >Definitions: <br> <strong>Réchauffement Climatique</strong> </h2><br>
                              <p class="mb-0" data-aos="fade-up">
                              Le <strong>réchauffement climatique </strong> est un phénomène caractérisé par une élévation de la température de l'atmosphère et des surfaces océaniques .
                              <br><br>
                              Plus précisément, quand on parle de réchauffement climatique, on parle d'augmentations de température liées à l'activité industrielle, notamment l' <a href="blog.html">effet de serre</a>.
                              </p>
                              <br>
                         </div>
                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">
<br><br>
                          <img src="images/office.png" width=500 height=600   class="img-fluid" alt="office">
                        </div>
                    </div>
               </div>
          </div>
     </section>


     <!-- PROJECT -->
     <section class="project section-padding" id="information">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-12 col-12">

                        <h2 class="mb-5 text-center" data-aos="fade-up">
                        Informations sur le <strong> réchauffement climatique </strong>
                        </h2>           
                         <div class="owl-carousel owl-theme" id="project-slide">
                              <?php for($i=0;$i<count($Actualite);$i++) {?>
                                   <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                       
                                        <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                             <div>
                                                  
                                                  <h3>
                                                       <a href="project-detail.html">
                                                            <span><?php echo $Actualite [$i]['titre'] ?></span>
                                                       </a>
                                                  </h3>
                                                  <small><?php echo $Actualite [$i]['soustitre'] ?></small> 
                                                  
                                             </div>
                                        </div>
                                   </div>
                              <?php }?>
                         </div>
                    </div>

               </div>
          </div>

     </section>
     
     </center>                            

     <!-- TESTIMONIAL -->
     


     <?php 
     include("footer.php");
     ?>


     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>