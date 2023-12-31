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
  <style>
    .star {
      width: 120px;
      position: relative;
      color: #bdbdbd;
    }

    .rating span {
      font-size: 20px;
      margin-left: -4px;
      white-space: nowrap;
      overflow: hidden;
    }

    .rating span:before {
      content: "\2605";
      position: absolute;
      color: gray;
    }

    .rating span.fill:before {
      content: "\2605";
      position: absolute;
      color: gold;
    }
  </style>
</head>

<body>
  <header id="main-header">
    <div class="main-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-light p-0 ">
              <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="navbar-toggler-icon" data-toggle="collapse">
                  <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                  <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                  <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                </div>
              </a>
              <a href="home.php" class="navbar-brand">
                <img src="images/logo.png" class="img-fluid logo" alt="" />
              </a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="menu-main-menu-container">
                  <ul id="top-menu" class="navbar-nav ml-auto">
                    <li class="menu-item"><a href="home.php">Home</a></li>
                    <li class="menu-item active"><a href="movies.php">Movies</a></li>
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
                      <li class="nav-item nav-icon">
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
                    <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center p-0">
                      <i class="bi bi-person-fill"></i>
                    </a>
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


    <div class="slide slick-bg s-bg-2">
      <div class="container-fluid position-relative h-100">
        <div class="slider-inner h-100">
          <div class="row align-items-center h--100">
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
      <div class="container-fluid" style="margin-top: 80px">
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
                          <a href="detail.php?movie_id=<?php echo $movie['movie_id']; ?>"> <?php echo $movie['judul']; ?> </a>
                        </h6>
                        <div class="movie-time d-flex align-items-center my-2">
                          <div class="badge badge-secondary p-1 mr-2">16+</div>
                          <span class="text-white">1h 43min</span>
                        </div>
                        <div class="hover-buttons">
                          <div class="star-rating">
                            <?php

                            $stars = "";
                            for ($i = 1; $i < 6; $i++) {
                              $stars .= '<span' . (($i <= $movie['movie_id']) ? ' class="fill"' : '') . '>';
                              $stars .= '&#9733;</span>';
                            }
                            echo '<div class="star"><div class="rating">' . $stars . '</div></div>'; ?>
                          </div>
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
                <?php
                include "koneksi.php";

                $movies = mysqli_query($conn, "SELECT * FROM movies");

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
                          <a href="detail.php?movie_id=<?php echo $movie['movie_id']; ?>"> <?php echo $movie['judul']; ?> </a>
                        </h6>
                        <div class="movie-time d-flex align-items-center my-2">
                          <div class="badge badge-secondary p-1 mr-2">16+</div>
                          <span class="text-white">1h 43min</span>
                        </div>
                        <div class="hover-buttons">
                          <div class="star-rating">
                            <?php

                            $stars = "";
                            for ($i = 1; $i < 6; $i++) {
                              $stars .= '<span' . (($i <= $movie['movie_id']) ? ' class="fill"' : '') . '>';
                              $stars .= '&#9733;</span>';
                            }
                            echo '<div class="star"><div class="rating">' . $stars . '</div></div>'; ?>
                          </div>
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
    <!-- upcoming contents section ends -->

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
                include "koneksi.php";

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
                          <a href="detail.php?movie_id=<?php echo $movie['movie_id']; ?>"> <?php echo $movie['judul']; ?> </a>
                        </h6>
                        <div class="movie-time d-flex align-items-center my-2">
                          <div class="badge badge-secondary p-1 mr-2">16+</div>
                          <span class="text-white">1h 43min</span>
                        </div>
                        <div class="hover-buttons">
                          <div class="star-rating">
                            <?php

                            $stars = "";
                            for ($i = 1; $i < 6; $i++) {
                              $stars .= '<span' . (($i <= $movie['movie_id']) ? ' class="fill"' : '') . '>';
                              $stars .= '&#9733;</span>';
                            }
                            echo '<div class="star"><div class="rating">' . $stars . '</div></div>'; ?>
                          </div>
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
                include "koneksi.php";

                $movies = mysqli_query($conn, "SELECT * FROM movies WHERE genre_id = 3");

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
                          <a href="detail.php?movie_id=<?php echo $movie['movie_id']; ?>"> <?php echo $movie['judul']; ?> </a>
                        </h6>
                        <div class="movie-time d-flex align-items-center my-2">
                          <div class="badge badge-secondary p-1 mr-2">16+</div>
                          <span class="text-white">1h 43min</span>
                        </div>
                        <div class="hover-buttons">
                          <div class="star-rating">
                            <?php

                            $stars = "";
                            for ($i = 1; $i < 6; $i++) {
                              $stars .= '<span' . (($i <= $movie['movie_id']) ? ' class="fill"' : '') . '>';
                              $stars .= '&#9733;</span>';
                            }
                            echo '<div class="star"><div class="rating">' . $stars . '</div></div>'; ?>
                          </div>
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