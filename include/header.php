<?php include("./config/config.php") ?>
<header>
  <!-- top header -->
  <div class="top-header bg-secondary  py-2 pt-2 pb-1 py-2">
    <div class="container">
      <div class="row align-items-center">
        <!-- social icons -->
        <div class=" col-md-6 text-center text-md-left">
          <span class="text-white">Connect With Us:</span>
          <ul class="list-inline d-inline-block">
            <li class="list-inline-item"><a class="text-white d-inline-block p-2" href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a class="text-white d-inline-block p-2" href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a class="text-white d-inline-block p-2" href="#"><i class="fa fa-rss"></i></a></li>
            <li class="list-inline-item"><a class="text-white d-inline-block p-2" href="#"><i class="fa fa-google"></i></a></li>
            <li class="list-inline-item"><a class="text-white d-inline-block p-2" href="#"><i class="fa fa-vimeo"></i></a></li>
          </ul>
        </div>
        <!-- mail and phone -->
        <div class=" col-md-6 text-md-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item mx-0 border-right border-secondary"><a class="text-white d-inline-block px-lg-3 px-2" href="mailto:info@vsinfo.in">Info@vanguardsols.com</a></li>
            <li class="list-inline-item mx-0"><a style="text-decoration:none" class="text-white d-inline-block px-lg-3 px-2 " href="tel: +917011936724">Call Us Now: <span class="text-white"> 011-41082529</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- /top header -->

  <!-- navigation -->
  <div class="navigation bg-white position-relative">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <!-- <a class="navbar-brand" href="<?php echo SITE_PATH?>"><img class="img-fluid logo-size" src="assets/img/Logo.png" alt="VS Info Solutions"></a> -->
        <a class="navbar-brand" href="<?php echo SITE_PATH?>"><h3>Vanguard <span style="color:#7bb390;font-size: 30px;">Solutions</span></h3></a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center pb-lg-0" id="navigation">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
              <a class="nav-link "href="<?php echo SITE_PATH?>" role="button"> Home </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="aboutus" role="button"> Company </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="solutions" role="button"> Solutions </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="products" role="button"> Products </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="clients" role="button"> Clients </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="contactus" role="button"> Contact Us </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!-- /navigation -->
</header>