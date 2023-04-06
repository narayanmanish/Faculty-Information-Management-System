<?php include('./include/db.php'); 
$query = "SELECT * FROM basic_setup,personal_setup,aboutus_setup";
$runquery = mysqli_query($db,$query);
if(!$db){
    header("location:index-2.html");
}
$data = mysqli_fetch_array($runquery);
//var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$data['title']?></title>
  <meta content="<?=$data['description']?>" name="description">
  <meta content="<?=$data['keyword']?>" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/<?=$data['icon']?>" rel="icon">
  <link href="assets/img/<?=$data['icon']?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style type="text/css">
  .logoimg {

    width: 200px;
    border-radius: 50%;
    border: 4px solid #fff;
    margin: 0 auto;
   }
   .alignjustify {
  margin: 0;
 
  text-align: justify;
}
.mybtn
{
  background: #0563bb;
    border: 0;
    padding: 10px 35px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
}
.myheading {
    line-height: 18px;
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
    color: #0563bb;
    margin-bottom: 10px;
}
</style>
  
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Career</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Course Work</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>SDP</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
 <img src="assets/img/n2.jpg" class="logoimg" alt="">
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <br>
      <h1><?=$data['name']?></h1>
      <p>I'm <span class="typed" data-typed-items="<?php
          $prof = explode(",",$data['professions']);
          foreach($prof as $value){echo $value.",";}?>"></span></p>
      <p>United Institute of Management (Allahabad)</p>
     
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p class="text-center"><?=$data['shortdesc']?></p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/<?=$data['profilepic']?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3><?=$data['heading']?></h3>
            <p class="fst-italic text-center">
             <?=$data['subheading']?>
            </p>
            <br><br>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>##  -  ##  -  ####</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>http://dhananjaysinghuim.42web.io/</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+19 ##  -  ##  -  ####</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Prayagraj, UttarPradesh, India</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                   <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Birthday :</strong> <?=$data['dob']?></li>
                                <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Email :</strong> <?=$data['emailid']?></li>
                                <li class="col-lg-5"><i class="icofont-rounded-right"></i> <strong>Mobile :</strong> <?=$data['mobile']?></li>
                </ul>
              </div>
            </div>
            <p class="alignjustify">
              <?=$data['longdesc']?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
   <!-- <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section>----><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <!--<section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>---><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Career</h2>
          <p >I did Qualified UGC-NET in Computer Science and Application for Assistant Professor. To work in academic environment, so that it provide me ample of opportunities to enhance my skills and to make significant contribution to the Institute.</p>
        </div>

      
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Education</h3>
                        <?php
                    $query4 = "SELECT * FROM resume WHERE category='e'";
$runquery4= mysqli_query($db,$query4);
while($data4=mysqli_fetch_array($runquery4)){
    ?>
                    <div class="resume-item">
                            <h4><?=$data4['title']?></h4>
                            <h5><?=$data4['year']?></h5>
                            <p><em><?=$data4['ogname']?></em></p>
                            <p><?=$data4['workdesc']?></p>
                        </div>
                                <?php
}
                    ?>
                        
                        
                        
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        
                        <?php
                    $query4 = "SELECT * FROM resume WHERE category='pe' and faculty_id=0";
$runquery4= mysqli_query($db,$query4);
while($data4=mysqli_fetch_array($runquery4)){
    ?>
                    <div class="resume-item">
                            <h4><?=$data4['title']?></h4>
                            <h5><?=$data4['year']?></h5>
                            <p><em><?=$data4['ogname']?></em></p>
                            <p><?=$data4['workdesc']?></p>
                        </div>
                                <?php
}
                    ?>
                    </div>
                </div>

            </div>
      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <br>
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Course Works</h2>
        
        </div>







<div class="accordion" id="accordioncm">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingcm">
      <button class="accordion-button myheading" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecm" aria-expanded="true" aria-controls="collapseOne">
        Course File's
      </button>
    </h2>
    <div id="collapsecm" class="accordion-collapse collapse show" aria-labelledby="headingcm" data-bs-parent="#accordioncm">
      <div class="accordion-body">
       
         <!-------Custum Teaching Subject start----->
          <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button myheading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        M.C.A (Here all Subjects PPT)
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        
         <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed myheading" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        MCA I Semester Subjects
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">

        <div class="accordion accordion-flush" id="accordionFlushExampleI">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOneI">
      <button class="accordion-button collapsed myheading" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOneI" aria-expanded="false" aria-controls="flush-collapseOneI">
        Principles of Management & Communication
      </button>
    </h2>
    <div id="flush-collapseOneI" class="accordion-collapse collapse" aria-labelledby="flush-headingOneI" data-bs-parent="#accordionFlushExampleI">
      <div class="accordion-body">
        <div class="row">
          <div class="col-md-6 offset-3">
             <table class="table table-bordered">
               <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">UNIT Wise PDF</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="sem1/UNIT-1.pdf" target="_blank">UNIT I PDF (CLICK HERE)</a></td>
     
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><a href="sem1/UNIT-2.pdf" target="_blank">UNIT II PDF (CLICK HERE)</a></td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><a href="sem1/UNIT-3.pdf" target="_blank">UNIT III PDF (CLICK HERE)</a></td>
     
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><a href="sem1/UNIT-4.pdf" target="_blank">UNIT IV PDF (CLICK HERE)</a></td>
     
    </tr>
    <tr>
      <th scope="row">5</th>
      <td><a href="sem1/UNIT-5.pdf" target="_blank">UNIT V PDF (CLICK HERE)</a></td>
     
    </tr>
  
       </table>
          </div>
        </div>
       
      </div>

    </div>
  </div> 
</div>
</div>
</div>
<div class="accordion" id="accordionmcaII">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingmcaII">
      <button class="accordion-button collapsed myheading" type="button" data-bs-toggle="collapse" data-bs-target="#collapsemcaII" aria-expanded="false" aria-controls="collapsemcaII">
        MCA II Semester Subjects
      </button>
    </h2>
    <div id="collapsemcaII" class="accordion-collapse collapse" aria-labelledby="headingmcaII" data-bs-parent="#accordionmcaII">
      <div class="accordion-body">
        <strong>Data Not Found</strong> 
      </div>
    </div>
  </div>
</div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed myheading myheading" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        MCA III Semester Subjects
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="accordion accordion-flush" id="accordionFlushExampleIII">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOneIII">
      <button class="accordion-button collapsed myheading" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOneIII" aria-expanded="false" aria-controls="flush-collapseOneI">
        WEB TECHNOLOGY (KCA-021)
      </button>
    </h2>
    <div id="flush-collapseOneIII" class="accordion-collapse collapse" aria-labelledby="flush-headingOneIII" data-bs-parent="#accordionFlushExampleIII">
      <div class="accordion-body">
        <div class="row">
          <div class="col-md-6 offset-3">
             <table class="table table-bordered">
               <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">UNIT Wise PDF</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="sem3/UNIT-1.pdf" target="_blank">UNIT I PDF (CLICK HERE)</a></td>
     
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><a href="sem3/UNIT-2.pdf" target="_blank">UNIT II PDF (CLICK HERE)</a></td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><a href="sem3/UNIT-3.pdf" target="_blank">UNIT III PDF (CLICK HERE)</a></td>
     
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><a href="sem3/UNIT-4.pdf" target="_blank">UNIT IV PDF (CLICK HERE)</a></td>
     
    </tr>
    <tr>
      <th scope="row">5</th>
      <td><a href="sem3/UNIT-5.pdf" target="_blank">UNIT V PDF (CLICK HERE)</a></td>
     
    </tr>
  
       </table>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  
</div>
      </div>
    </div>
  </div>




<div class="accordion" id="accordionmcaIV">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingmcaIV">
      <button class="accordion-button collapsed myheading" type="button" data-bs-toggle="collapse" data-bs-target="#collapsemcaIV" aria-expanded="false" aria-controls="collapsemcaIV">
        MCA IV Semester Subjects
      </button>
    </h2>
    <div id="collapsemcaIV" class="accordion-collapse collapse" aria-labelledby="headingmcaIV" data-bs-parent="#accordionmcaIV">
      <div class="accordion-body">
        <strong>Data Not Found</strong> 
      </div>
    </div>
  </div>
</div>

</div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed myheading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        M.B.A. (Here all Subjects PPT)
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">

      <div class="accordion-body">
        <div class="accordion" id="accordionmba">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingmbaI">
      <button class="accordion-button myheading" type="button" data-bs-toggle="collapse" data-bs-target="#collapsembaI" aria-expanded="true" aria-controls="collapsembaI">
        MBA I Semester Subjects
      </button>
    </h2>
    <div id="collapsembaI" class="accordion-collapse collapse show" aria-labelledby="headingmbaI" data-bs-parent="#accordionmba">
      <div class="accordion-body">
        <strong>Data not found</strong> 
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingmbaII">
      <button class="accordion-button collapsed myheading" type="button" data-bs-toggle="collapse" data-bs-target="#collapsembaII" aria-expanded="false" aria-controls="collapsembaII">
        MBA II Semester Subjects
      </button>
    </h2>
    <div id="collapsembaII" class="accordion-collapse collapse" aria-labelledby="headingmbaII" data-bs-parent="#accordionmba">
      <div class="accordion-body">
        <strong>Data not found</strong> 
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingmbaIII">
      <button class="accordion-button collapsed myheading" type="button" data-bs-toggle="collapse" data-bs-target="#collapsembaIII" aria-expanded="false" aria-controls="collapsembaIII">
        MBA III Semester Subjects
      </button>
    </h2>
    <div id="collapsembaIII" class="accordion-collapse collapse" aria-labelledby="headingIII" data-bs-parent="#accordionmba">
      <div class="accordion-body">
        <strong>Data not found</strong> 
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingIV">
      <button class="accordion-button collapsed myheading" type="button" data-bs-toggle="collapse" data-bs-target="#collapsembaIV" aria-expanded="false" aria-controls="collapsembaIV">
        MBA IV Semester Subjects
      </button>
    </h2>
    <div id="collapsembaIV" class="accordion-collapse collapse" aria-labelledby="headingIV" data-bs-parent="#accordionmba">
      <div class="accordion-body">
        <strong>Data not found.</strong> 
      </div>
    </div>
  </div>
</div>







      </div>
    </div>
  </div>
</div>  
          


      </div>
    </div>
  </div>
</div>












         <!-------Custum Teaching Subject end----->
       <!-- <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>--->

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skill Development Program</h2>
          
        </div>
  <div class="accordion" id="accordionPanelsStay">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-heading">
      <button class="accordion-button myheading" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse" aria-expanded="true" aria-controls="panelsStayOpen-collapse">
        Web Weaving
      </button>
    </h2>
    <div id="panelsStayOpen-collapse" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading">
      <div class="accordion-body">
        <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <div class="accordion accordion-flush" id="accordionFlush">
    
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingppt">
      <button class="accordion-button collapsed myheading" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseppt" aria-expanded="false" aria-controls="flush-collapseppt">
        PPT's
      </button>
    </h2>
    <div id="flush-collapseppt" class="accordion-collapse collapse" aria-labelledby="flush-headingppt" data-bs-parent="#accordionFlush">
      <div class="accordion-body">

<div class="row">
         <div class="col-md-6 offset-3 col-sm-12">
                  <iframe src="sdp/Web Weaving.pdf" 
style="width:500px; height:300px;" frameborder="0"></iframe>
<br>
<div class="text-center">
  <a href="sdp/Web Weaving.pdf" target="_blank" class="btn mybtn">Open in New Page</a>
</div>

                </div>



                 </div>


        
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingvi">
      <button class="accordion-button collapsed myheading" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsevi" aria-expanded="false" aria-controls="flush-collapsevi">
        Videos
      </button>
    </h2>
    <div id="flush-collapsevi" class="accordion-collapse collapse" aria-labelledby="flush-headingvi" data-bs-parent="#accordionFlush">
      <div class="accordion-body">
        <div class="row">
            <div class="col-md-3 offset-2 col-sm-12">
               <video width="320" height="240" controls>
  <source src="#" type="video/mp4">
  
  Your browser does not support the video tag.
</video>
            </div>
            <div class="col-md-3 offset-2 col-sm-12">
               <video width="320" height="240" controls>
  <source src="#" type="video/mp4">
  
  Your browser does not support the video tag.
</video>
            </div>
          </div>
      </div>
    </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headinghand">
      <button class="accordion-button collapsed myheading" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsehand" aria-expanded="false" aria-controls="flush-collapsehand">
        Handouts
      </button>
    </h2>
    <div id="flush-collapsehand" class="accordion-collapse collapse" aria-labelledby="flush-headinghand" data-bs-parent="#accordionFlush">
      <div class="accordion-body">

        <div class="row">
                <div class="col-md-6 col-sm-12">
                  <iframe src="sdp/Handouts/Do and Donts of Web Weaving.pdf" 
style="width:600px; height:300px;" frameborder="0"></iframe>
<br>
<a href="sdp/Handouts/Do and Donts of Web Weaving.pdf" class="btn mybtn" target="_blank">Open in New Page</a>
                </div>
                <div class="col-md-6 col-sm-12">
                  <iframe src="sdp/Handouts/Steps to Create a webpage.pdf" 
style="width:600px; height:300px;" frameborder="0"></iframe>
<br>
<a href="sdp/Handouts/Steps to Create a webpage.pdf" class="btn mybtn" target="_blank">Open in New Page</a>
                </div>
              </div>
  </div>
</div>
  </div>
</div>


      </div>
    </div>
  </div>
 
</div>

      













     
          <!---<div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">Sed Perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="">Dele Cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-arch"></i>
              </div>
              <h4><a href="">Divera Don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>---->

       
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
   <!-- <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>-->
<!---
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>End testimonial item -->
<!--
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Prayagraj, UttarPradesh, India</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>dhananjay.djsoft@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+19 ##  -  ##  -  ####</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

             <form action="include/message.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" id="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="bg-success error-message"></div>
                                <div class="sent-message"></div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Dhananjay Kumar Singh</h3>
      <p>United Institute of Management (Allahabad)</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>UGI</span></strong>. All Rights Reserved
      </div>
   
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
      
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>