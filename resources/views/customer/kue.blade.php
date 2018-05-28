<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vina Catering</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/assets2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="/assets2/css/agency.min.css" rel="stylesheet">






  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand " href="#page-top">Vina Catering</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">

            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{route('menu.utama')}}"><i class="fa fa-th-list fa-fw"></i>Menu Utama</a>
            </li>
            
          
          </ul>


        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Menu Kue</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">             
                
            </ul>
          </div>
        </div>
      </div>
    </section>
    </header>

      <!-- Menu -->
 <section class="bg-light" id="menu">
      <div class="container">
        <div class="row">
        </div>
        <div class="row">
          <div class="row">

                    <?php foreach ($data as $datas):
            
          ?>
                
              <div class="card col-sm-4" style="border-radius: 15;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.3)">
                <div class="card-body col-sm-12">
                  <img style="width: 800px; height: 200px" class="img-fluid" src="{{ ('upload/menu/'.$datas->foto) }}" alt="">
                <div class="card-footer col-lg-12" >
                  <center><h4><?php echo $datas->nama ?></h4></center>
                  <p class="text-muted"><?php echo $datas->deskripsi ?> </p>
                  <p>Harga : Rp.<?php echo $datas->harga ?> </p>
                <center>
                  <form action="" method="post">
                  <input type="hidden" value="<?php echo $datas->id_menu ?>" name="id_menu">
                  <input type="submit" class="btn btn-primary" value="add to cart">
                </form>
                </center>
                </div>
              </div>
            </div>

            <?php endforeach; ?>



           

        </div>


    </section>      <div class="container">
        <div class="row">
        </div>
        <div class="row">
          <div class="row">

                    <?php foreach ($data as $datas):
            
          ?>
                
                  <div class="col-md-4 col-sm-6 portfolio-item">
            
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  
                </div>
              </div>
              <img style="width: 800px; height: 200px" class="img-fluid" src="" alt="">
            <div class="portfolio-caption" >
              <h4><?php echo $datas->nama ?></h4>
              <p class="text-muted"><?php echo $datas->deskripsi ?> </p>
              <p>Rp.<?php echo $datas->harga ?> </p>
            
            <form action="" method="post">
              <input type="hidden" value="<?php echo $datas->id_menu ?>" name="id_menu">
              <input type="submit" class="btn btn-primary" value="add to cart">
            </form>
            </div>
          </div>

          <?php endforeach; ?>



           

        </div>


          </section>

          <section class="bg-light text-center" id="cart">

            <h2 class="section-heading text-uppercase">Cart Pesanan</h2>
            <br>

         

    

          </section>

        
   
    <script src="/assets2/vendor/jquery/jquery.min.js"></script>
    <script src="/assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="/assets2/js/jqBootstrapValidation.js"></script>
    <script src="/assets2/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/assets2/js/agency.min.js"></script>

  </body>

</html>
