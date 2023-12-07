<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Video Streaming</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- i will provide this in description  -->
  <link rel="stylesheet" href="css/slick.css" />
  <link rel="stylesheet" href="css/slick-theme.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/select2.min.css" />
  <link rel="stylesheet" href="css/select2-bootstrap4.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/slick-animation.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header id="main-header">
    <div class="main-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
              <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="navbar-toggler-icon" data-toggle="collapse">
                  <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                  <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                  <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                </div>
              </a>
              <a href="index.php" class="navbar-brand">
                <img src="images/logo2.png" class="img-fluid logo" alt="" />
              </a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="menu-main-menu-container">
                  <ul id="top-menu" class="navbar-nav ml-auto">
                    <li class="active menu-item"><a href="index.php">Home</a></li>
                    <li class="menu-item"><a href="movies.php">Movies</a></li>
                    <li class="menu-item"><a href="about.php">About Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="mobile-more-menu">
                <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton" data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-ellipsis-h"></i>
                </a>
                <div class="more-menu" aria-labelledby="dropdownMenuButton">
                  <div class="navbar-right position-relative">
                    <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                      <li>
                        <a href="#" class="search-toggle">
                          <i class="fa fa-search"></i>
                        </a>
                        <div class="search-box iq-search-bar">
                          <form action="#" class="searchbox">
                            <div class="form-group position-relative">
                              <input type="text" class="text search-input font-size-12" placeholder="type here to search..." />
                              <i class="search-link fa fa-search"></i>
                            </div>
                          </form>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center">
                          <i class="bi bi-person-fill"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="navbar-right menu-right">
                <ul class="d-flex align-items-center list-inline m-0">
                  <li class="nav-item nav-icon">
                    <a href="#" class="search-toggle device-search">
                      <i class="fa fa-search"></i>
                    </a>
                    <div class="search-box iq-search-bar d-search">
                      <form action="#" class="searchbox">
                        <div class="form-group position-relative">
                          <input type="text" class="text search-input font-size-12" placeholder="type here to search..." />
                          <i class="search-link fa fa-search"></i>
                        </div>
                      </form>
                    </div>
                  </li>
                  <li class="nav-item nav-icon">
                    <i class="bi bi-person-fill"></i>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="nav-overlay"></div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- slider starts  -->
  <section id="home" class="iq-main-slider p-0">
    <div id="home-slider" class="slider m-0 p-0">
      <div class="slide slick-bg s-bg-1">
        <div class="container-fluid position-relative h-100">
          <div class="slider-inner h-100">
            <div class="row align-items-center h--100">
              <div class="col-xl-6 col-lg-12 col-md-12">
                <a href="javascript:void(0)">
                  <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                    <img src="images/logo2.png" class="c-logo" alt="" />
                  </div>
                </a>
                <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft" data-delay-in="0.6">
                  Avengers
                </h1>
                <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft" style="opacity: 1">
                  <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                    <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star-half"></i></li>
                    </ul>
                    <span class="text-white ml-2">7.3(imbd)</span>
                  </div>
                  <div class="d-flex align-items-center mt-2 mt-md-3">
                    <span class="badge badge-secondary p-2">16+</span>
                    <span class="ml-3">2h 21min</span>
                  </div>
                </div>
                <p data-animation-in="fadeInUp">
                  When Tony Stark and Bruce Banner try to jump-start a dormant
                  peacekeeping program called Ultron, things go horribly wrong
                  and it's up to Earth's nightest heroes to stop the
                  villainous Ultron from enacting his terrible plan.
                </p>
                <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <div class="text-primary title starring">
                    Starring :
                    <span class="text-body">Robert Downey Jr., Chris Evans, Mark Ruffalo</span>
                  </div>
                  <div class="text-primary title genres">
                    Genres : <span class="text-body">Action</span>
                  </div>
                  <div class="text-primary title tag">
                    Tags :
                    <span class="text-body">Action, Adventure, Horror</span>
                  </div>
                </div>
                <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="#" class="btn btn-hover iq-button"><i class="fa fa-play mr-3"></i>Watch Trailer</a>
                  <a href="#" class="btn btn-link">More Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide slick-bg s-bg-2">
        <div class="container-fluid position-relative h-100">
          <div class="slider-inner h-100">
            <div class="row align-items-center h--100">
              <div class="col-xl-6 col-lg-12 col-md-12">
                <a href="javascript:void(0)">
                  <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                    <img src="images/logo.png" class="c-logo" alt="" />
                  </div>
                </a>
                <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft" data-delay-in="0.6">
                  Frozen
                </h1>
                <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft" style="opacity: 1">
                  <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                    <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star-half"></i></li>
                    </ul>
                    <span class="text-white ml-2">7.4(imbd)</span>
                  </div>
                  <div class="d-flex align-items-center mt-2 mt-md-3">
                    <span class="badge badge-secondary p-2">13+</span>
                    <span class="ml-3">1h 42min</span>
                  </div>
                </div>
                <p data-animation-in="fadeInUp">
                  When the newly crowned Queen Elsa accidentally uses her
                  power to turn things into ice to curse her home in infinte
                  winter, her sister Anna teams up with a mountain man, his
                  playful reindeer, and a snowman to change the weather
                  condition.
                </p>
                <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <div class="text-primary title starring">
                    Starring :
                    <span class="text-body">Kristan Bell, Idina menzel, Jonathan Groff</span>
                  </div>
                  <div class="text-primary title genres">
                    Genres : <span class="text-body">Animation</span>
                  </div>
                  <div class="text-primary title tag">
                    Tags :
                    <span class="text-body">Animation, Adventure, Comedy</span>
                  </div>
                </div>
                <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="#" class="btn btn-hover iq-button"><i class="fa fa-play mr-3"></i>Watch Trailer</a>
                  <a href="#" class="btn btn-link">More Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide slick-bg s-bg-3">
        <div class="container-fluid position-relative h-100">
          <div class="slider-inner h-100">
            <div class="row align-items-center h--100">
              <div class="col-xl-6 col-lg-12 col-md-12">
                <a href="javascript:void(0)">
                  <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                    <img src="images/logo.png" class="c-logo" alt="" />
                  </div>
                </a>
                <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft" data-delay-in="0.6">
                  The Conjuring
                </h1>
                <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft" style="opacity: 1">
                  <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                    <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star-half"></i></li>
                    </ul>
                    <span class="text-white ml-2">7.5(imbd)</span>
                  </div>
                  <div class="d-flex align-items-center mt-2 mt-md-3">
                    <span class="badge badge-secondary p-2">16+</span>
                    <span class="ml-3">1h 52min</span>
                  </div>
                </div>
                <p data-animation-in="fadeInUp">
                  Paranomal investigators Ed and Lorraine Warren work to help
                  a family terrorized by a dark presence in their farmhouse.
                </p>
                <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <div class="text-primary title starring">
                    Starring :
                    <span class="text-body">Patrick Wilson, Vera Farminga, Ron Livingston</span>
                  </div>
                  <div class="text-primary title genres">
                    Genres : <span class="text-body">Horror</span>
                  </div>
                  <div class="text-primary title tag">
                    Tags :
                    <span class="text-body">Horror, Mystery, Thriller</span>
                  </div>
                </div>
                <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="#" class="btn btn-hover iq-button"><i class="fa fa-play mr-3"></i>Watch Trailer</a>
                  <a href="#" class="btn btn-link">More Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- slider ends -->

  <!-- main content starts  -->
  <div class="main-content">
    <!-- favorite section starts   -->

    <section id="iq-favorites">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Top Picks For You</h4>
              <a href="#" class="iq-view-all">View All</a>
            </div>
            <div class="favorite-contens">
              <ul class="favorites-slider list-inline row p-0 mb-0">
                <?php
                include "koneksi.php";

                $movies = mysqli_query($conn, "SELECT * FROM movies LIMIT 5");

                foreach ($movies as $movie) {
                ?>
                  <!-- slide item 1 -->
                  <li class="slide-item">
                    <div class="block-images position-relative">
                      <div class="img-box">
                        <img src="images/img/<?php echo $movie["cover_image"]; ?>" class="img-fluid" alt="" style="height:300px; width:285px;" />
                      </div>
                      <div class="block-description">
                        <h6 class="iq-title">
                          <a href="#"> <?php echo $movie["judul"]; ?> </a>
                        </h6>
                        <div class="movie-time d-flex align-items-center my-2">
                          <div class="badge badge-secondary p-1 mr-2">16+</div>
                          <span class="text-white">1h 43min</span>
                        </div>
                        <div class="hover-buttons">
                          <span class="btn btn-hover iq-button">
                            <i class="fa fa-play mr-1"></i>
                            Watch Trailer
                          </span>
                        </div>
                      </div>
                      <div class="block-social-info">
                        <ul class="list-inline p-0 m-0 music-play-lists">
                          <li class="share">
                            <span><i class="fa fa-share-alt"></i></span>
                            <div class="share-box">
                              <div class="d-flex align-items-center">
                                <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                                <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                                <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                              </div>
                            </div>
                          </li>
                          <li>
                            <span><i class="fa fa-heart"></i></span>
                            <span class="count-box">19+</span>
                          </li>
                          <li>
                            <span><i class="fa fa-plus"></i></span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                <?php } ?>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- favourite section ends -->

    <!-- upcoming contents section starts  -->
    <section id="iq-upcoming-movie">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Popular Movies</h4>
              <a href="#" class="iq-view-all">View All</a>
            </div>
            <div class="favorite-contens">
              <ul class="favorites-slider list-inline row p-0 mb-0">
                <!-- slide item 1 -->
                <?php
                $movies = mysqli_query($conn, "SELECT * FROM movies WHERE genre_id = 1");

                foreach ($movies as $movie) {
                ?>
                  <li class="slide-item">
                    <div class="block-images position-relative">
                      <div class="img-box">
                        <img src="images/img/<?php echo $movie["cover_image"]; ?>" class="img-fluid" alt="" style="height:300px; width:285px;" />
                      </div>
                      <div class="block-description">
                        <h6 class="iq-title">
                          <a href="#"><?php echo $movie["judul"]; ?></a>
                        </h6>
                        <div class="movie-time d-flex align-items-center my-2">
                          <div class="badge badge-secondary p-1 mr-2">10+</div>
                          <span class="text-white">2h</span>
                        </div>
                        <div class="hover-buttons">
                          <span class="btn btn-hover iq-button">
                            <i class="fa fa-play mr-1"></i>
                            Watch Trailer
                          </span>
                        </div>
                      </div>
                      <div class="block-social-info">
                        <ul class="list-inline p-0 m-0 music-play-lists">
                          <li class="share">
                            <span><i class="fa fa-share-alt"></i></span>
                            <div class="share-box">
                              <div class="d-flex align-items-center">
                                <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                                <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                                <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                              </div>
                            </div>
                          </li>
                          <li>
                            <span><i class="fa fa-heart"></i></span>
                            <span class="count-box">89+</span>
                          </li>
                          <li>
                            <span><i class="fa fa-plus"></i></span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- upcoming contents section ends -->

    <!-- top ten trending  -->

    <section id="iq-topten">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="topten-contents">
              <h4 class="main-title iq-title topten-title">
                Trending Movies
              </h4>
              <ul id="top-ten-slider" class="list-inline p-0 m-0 d-flex align-items-center">
                <?php
                $movies = mysqli_query($conn, "SELECT * FROM movies WHERE genre_id = 3");

                foreach ($movies as $movie) {
                ?>
                  <li class="slick-bg">
                    <a href="#">
                      <img src="images/img/<?php echo $movie["cover_image"]; ?>" class="img-fluid w-100" alt="" />
                      <h6 class="iq-title"><a href="#"><?php echo $movie["judul"]; ?></a></h6>
                    </a>
                  </li>
                <?php } ?>
              </ul>
              <div class="vertical_s">
                <ul id="top-ten-slider-nav" class="list-inline p-0 m-0 d-flex align-items-center">
                  <?php
                  $movies = mysqli_query($conn, "SELECT * FROM movies WHERE genre_id = 3");

                  foreach ($movies as $movie) {
                  ?>
                    <li>
                      <div class="block-images position-relative">
                        <a href="#">
                          <img src="images/img/<?php echo $movie["cover_image"]; ?>" class="img-fluid w-100" alt="" style="weight :300px; height:169px;" />
                        </a>
                        <div class="block-description">
                          <h5><?php echo $movie["judul"]; ?></h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <div class="badge badge-secondary p-1 mr-2">
                              10+
                            </div>
                            <span class="text-white">8 Parts</span>
                          </div>
                          <div class="hover-buttons">
                            <a href="#" class="btn btn-hover" tabindex="0">
                              <i class="fa fa-play mr-1" aria-hidden="true"></i>
                              Watch Trailer
                            </a>
                          </div>
                        </div>
                      </div>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="iq-suggested" class="s-margin">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Drama</h4>
              <a href="#" class="iq-view-all">View All</a>
            </div>
            <div class="favorite-contens">
              <ul class="favorites-slider list-inline row p-0 mb-0">
                <?php
                $movies = mysqli_query($conn, "SELECT * FROM movies WHERE genre_id = 1");

                foreach ($movies as $movie) {
                ?>
                  <!-- slide item 1 -->
                  <li class="slide-item">
                    <div class="block-images position-relative">
                      <div class="img-box">
                        <img src="images/img/<?php echo $movie["cover_image"]; ?>" class="img-fluid" alt="" style="height:300px; width:285px;" />
                      </div>
                      <div class="block-description">
                        <h6 class="iq-title">
                          <a href="#"><?php echo $movie["judul"]; ?></a>
                        </h6>
                        <div class="hover-buttons">
                          <span class="btn btn-hover iq-button">
                            <i class="fa fa-play mr-1"></i>
                            Watch Trailer
                          </span>
                        </div>
                      </div>
                      <div class="block-social-info">
                        <ul class="list-inline p-0 m-0 music-play-lists">
                          <li class="share">
                            <span><i class="fa fa-share-alt"></i></span>
                            <div class="share-box">
                              <div class="d-flex align-items-center">
                                <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                                <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                                <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                              </div>
                            </div>
                          </li>
                          <li>
                            <span><i class="fa fa-heart"></i></span>
                            <span class="count-box">89+</span>
                          </li>
                          <li>
                            <span><i class="fa fa-plus"></i></span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- parallax section  -->
    <section id="parallex" class="parallax-window">
      <div class="container-fluid h-100">
        <div class="row align-items-center justify-content-center h-100 parallaxt-details">
          <div class="col-lg-4 r-mb-23">
            <div class="text-left">
              <a href="javascript:void(0)">
                <h1 class="parallax-heading">Avatar</h1>
              </a>
              <div class="parallax-ratting d-flex align-items-center mt-3 mb-3">
                <ul class="ratting-start p-o m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                  <li>
                    <a href="#" class="text-primary"><i class="fa fa-star"></i></a>
                  </li>
                  <li>
                    <a href="#" class="text-primary"><i class="pl-2 fa fa-star"></i></a>
                  </li>
                  <li>
                    <a href="#" class="text-primary"><i class="pl-2 fa fa-star"></i></a>
                  </li>
                  <li>
                    <a href="#" class="text-primary"><i class="pl-2 fa fa-star"></i></a>
                  </li>
                  <li>
                    <a href="#" class="text-primary"><i class="pl-2 fa fa-star-half-o"></i></a>
                  </li>
                </ul>
                <span class="text-white ml-3">7.8(Imbd)</span>
              </div>
              <div class="movie-time d-flex align-items-center mb-3">
                <div class="badge badge-secondary p-1 mr-2">9+</div>
                <span class="text-white">2h 42min</span>
              </div>
              <p>
                A paraplegic Marine dispatched to the moon Pandora on a unique
                mission becomes torn between following his orders and
                protecting the world he feels is his home.
              </p>
              <div class="parallax-buttons">
                <a href="#" class="btn btn-hover">Watch Trailer</a>
                <a href="#" class="btn btn-link">More Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="parallax-img">
              <a href="#"><img src="images/parallax/avatar.jpg" alt="" class="img-fluid w-100" /></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- trending section  -->

    <section id="iq-suggested" class="s-margin">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Recommended For You</h4>
              <a href="#" class="iq-view-all">View All</a>
            </div>
            <div class="favorite-contens">
              <ul class="favorites-slider list-inline row p-0 mb-0">
                <?php
                $movies = mysqli_query($conn, "SELECT * FROM movies ");

                foreach ($movies as $movie) {
                ?>
                  <!-- slide item 1 -->
                  <li class="slide-item">
                    <div class="block-images position-relative">
                      <div class="img-box">
                        <img src="images/img/<?php echo $movie["cover_image"]; ?>" class="img-fluid" alt="" style="height:300px; width:285px;" />
                      </div>
                      <div class="block-description">
                        <h6 class="iq-title">
                          <a href="#"><?php echo $movie['judul']; ?></a>
                        </h6>
                        <div class="movie-time d-flex align-items-center my-2">
                          <div class="badge badge-secondary p-1 mr-2">15+</div>
                          <span class="text-white">2h 45min</span>
                        </div>
                        <div class="hover-buttons">
                          <span class="btn btn-hover iq-button">
                            <i class="fa fa-play mr-1"></i>
                            Watch Trailer
                          </span>
                        </div>
                      </div>
                      <div class="block-social-info">
                        <ul class="list-inline p-0 m-0 music-play-lists">
                          <li class="share">
                            <span><i class="fa fa-share-alt"></i></span>
                            <div class="share-box">
                              <div class="d-flex align-items-center">
                                <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                                <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                                <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                              </div>
                            </div>
                          </li>
                          <li>
                            <span><i class="fa fa-heart"></i></span>
                            <span class="count-box">89+</span>
                          </li>
                          <li>
                            <span><i class="fa fa-plus"></i></span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


  </div>

  <!-- main content ends  -->


  <footer class="iq-bg-dark">
    <div class="footer-top">
      <div class="container-fluid">
        <div class="row footer-standard">
          <div class="col-lg-5">
            <div class="widget text-left">
              <div>
                <ul class="menu p-0">
                  <li><a href="#">Terms of Use</a></li>
                  <li><a href="#">Privacy-Policy</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Watch List</a></li>
                </ul>
              </div>
            </div>
            <div class="widget text-left">
              <div class="textwidget">
                <p><small>This is Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quo tempore. Quasi rem rerum est in nulla atque quibusdam illo. this is footer and simple tsesxij is writen jkd. fsek hello how are you. please like and subscribe. footer ends .</small></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <h6 class="footer-link-title">
              Follow Us:
            </h6>
            <ul class="info-share">
              <li>
                <a href="#">
                  <i>
                    <fa class="fa fa-facebook"></fa>
                </a>
              </li>
              <li>
                <a href="#">
                  <i>
                    <fa class="fa fa-youtube"></fa>
                </a>
              </li>
              <li>
                <a href="#">
                  <i>
                    <fa class="fa fa-instagram"></fa>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="widget text-left">
              <div class="textwidget">
                <h6 class="footer-link-title">
                  NetFlix App
                </h6>
                <div class="d-flex align-items-center">
                  <a href="#"><img src="images/footer/01.jpg" alt=""></a>
                  <br>
                  <a href="#" class="ml-3"><img src="images/footer/02.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- js files  -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/select2.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/slick-animation.min.js"></script>

  <script src="main.js"></script>
</body>

</html>