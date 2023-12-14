<?php
include 'koneksi.php';
include 'hitCounter.php';

$hit = new HitCounter();

//cek dan simpan
$hit->Hitung();

$reviews = mysqli_query($conn, "SELECT * FROM reviews");
$movies = mysqli_query($conn, "SELECT * FROM movies WHERE genre_id = 1");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Streaming</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- i will provide this in description  -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- i will provide this in description  -->
  <link rel="stylesheet" href="css/slick.css" />
  <link rel="stylesheet" href="css/slick-theme.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/select2.min.css" />
  <link rel="stylesheet" href="css/review.css" />
  <link rel="stylesheet" href="css/select2-bootstrap4.min.css" />

  <link rel="stylesheet" href="css/slick-animation.css" />
  <link rel="stylesheet" href="style.css" />
  <style>
    .star {
      width: 120px;
      position: relative;
      color: #bdbdbd;
    }

    .rating span {
      font-size: 30px;
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
                    <li class="active menu-item"><a href="home.php">Home</a></li>
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

  <!-- main content starts  -->
  <div class="main-content">
    <!-- detail movies -->


    <?php
    $movie_id = $_GET['movie_id'];

    $movies = mysqli_query($conn, "SELECT * FROM movies JOIN director ON movies.director_id = director.director_id
      JOIN genres ON movies.genre_id = genres.genre_id WHERE movie_id = $movie_id");

    foreach ($movies as $movie) {
    ?>
      <div class="container" style="margin-top: 80px">
        <div class="header">
          <h2 class="text-center">Detail Movies</h2>
        </div>
        <div class="row my-5">
          <div class="col-md-6">
            <img src="images/img/<?php echo $movie["cover_image"]; ?>" alt="gambar" width="550px" height="550px">
          </div>
          <div class="col-md-6">
            <h1 class="bold"><?php echo $movie['judul']; ?></h1>
            <article class="text-justify pt-2">
              <?php echo $movie['deskripsi']; ?>
            </article>
            <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft" style="opacity: 1">
              <!-- <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">

                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star-half"></i></li>
                </ul>
                <span class="text-white ml-2">7.5(imbd)</span>
              </div> -->
              <div class="d-flex align-items-center mt-2 mt-md-3">
                <span class="badge badge-secondary p-2">16+</span>
                <span class="ml-3">1h 52min</span>
              </div>
            </div>
            <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
              <div class="text-primary title starring">
                Director :
                <span class="text-body"><?php echo $movie['nama']; ?></span>
              </div>
              <div class="text-primary title genres">
                Genres : <span class="text-body"><?php echo $movie['genre_name'] ?></span>
              </div>
              <div class="text-primary title genres">
                Jumlah Pengunjung : <span class="text-body"><?php echo $hit->tampil(); ?></span>
              </div>
              <div class="text-primary">
                <!-- tampilkan history kunjungan -->
                <?php $h = $hit->waktu();
                if (!empty($h)) {
                  echo '<br>Kunjungan : ' . $h;
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

  </div>

  <!-- main content ends  -->


  <!-- comments and reviews -->
  <div class="row">
    <div class="comments col-8">
      <!-- tabs nav -->
      <ul class="nav nav-tabs comments__title comments__title--tabs" id="comments__tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link">
            <h4>Reviews</h4>
          </a>
        </li>
      </ul>
      <!-- end tabs nav -->

      <!-- tabs -->
      <div class="tab-content">
        <!-- reviews -->
        <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
          <ul class="reviews__list">
            <?php foreach ($reviews as $review) : ?>
              <li class="reviews__item">
                <div class="reviews__autor">
                  <span class="reviews__name">
                    <a style="font-size: 18px; color:white; padding-bottom:100px;" href="#"><?= $review['reviewer_name']; ?></a>
                  </span>
                  <span class="reviews__time pt-2 text-danger">
                    <?php echo date('d-M-Y', strtotime($review['review_date'])); ?>
                  </span>
                  <span class="reviews__rating"><?php

                                                $stars = "";
                                                for ($i = 1; $i < 6; $i++) {
                                                  $stars .= '<span' . (($i <= $review["rating"]) ? ' class="fill"' : '') . '>';
                                                  $stars .= '&#9733;</span>';
                                                }
                                                echo '<div class="star"><div class="rating">' . $stars . '</div></div>'; ?>
                  </span>
                  <p class="pt-2" style="font-size: 14px;"><?= $review['review_text']; ?></p>
                </div>
              </li>
            <?php endforeach; ?>
            <form action="review_users.php" class="reviews__form" method="post">
              <input type="hidden" name="movie_id" value="<?= $movie_id; ?>">
              <div class="row">
                <div class="col-12 col-md-9 col-lg-10 col-xl-9">
                  <div class="sign__group">
                    <input type="text" name="reviewer_name" class="sign__input" id="reviewer_name" placeholder="Name">
                  </div>
                </div>

                <div class="col-12 col-md-3 col-lg-2 col-xl-3">
                  <div class="sign__group">
                    <input type="hidden" id="rating" name="rating" value="0">
                    <div class="rateYo" id="rating" data-rateyo-rating="0" data-rateyo-num-stars="5" data-rateyo-score="3">
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="sign__group">
                    <textarea id="review_text" name="review_text" class="sign__textarea" placeholder="Add review"></textarea>
                  </div>
                </div>

                <div class="col-12">
                  <button type="submit" class="sign__btn" name="tambah" value="simpan">Send</button>
                </div>
              </div>
            </form>
          </ul>
        </div>
        <!-- end reviews -->
      </div>
      <!-- end tabs -->
    </div>

    <!-- Recomanded -->
    <div class="comments col-4">
      <div class="col-sm-12 overflow-hidden">
        <div class="iq-main-header d-flex align-items-center justify-content-between">
          <h4 class="main-title">Recomanded</h4>
        </div>
        <div class="row">
          <?php foreach ($movies as $movie) : ?>
            <div class="col-md-4">
              <div class="card mb-4 product-wap rounded-5" style="background-color: black; color: white; position: relative;">
                <a href="#">
                  <img class="card-img rounded-5 img-fluid" src="images/img/<?= $movie['cover_image']; ?>" style="width: 100%; height: 350px; object-fit: cover;">
                </a>
                <div class="card-body" style="position: absolute; bottom: 0; width: 100%; background: rgba(0, 0, 0, 0.7); height: 200px; display: flex; flex-direction: column; justify-content: space-between;">
                  <a href="#" class="h6 text-decoration-none text-light"><?= $movie['judul']; ?></a>
                  <div class="movie-time d-flex align-items-center my-2">
                    <span class="text-white"><?= $movie['durasi']; ?></span>
                  </div>
                  <div class="star-rating">
                    <span class="fa fa-star text-warning"></span>
                    <span>4 / 5</span>
                  </div>
                  <div class="card-boy rounded-5 mt-2">
                    <a href="detail.php" class="btn btn-hover iq-button" style="font-size: 10px;">
                      <i class="fa fa-play"></i>
                      Watch Trailer
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- end tabs -->
    </div>
  </div>
  <!-- end Recomanded-->

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
  < <script src="js/jquery-3.4.1.min.js"></>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/select2.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/slick-animation.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
  <script src="main.js"></script>

  <script>
    $(function() {
      var $rateYo = $(".rateYo").rateYo({
        "rating": 0.7
      });

      $rateYo.rateYo("option", "onChange", function(rating, rateYoInstance) {
        // Update the hidden input value with the selected rating
        $("#rating").val(rating);
      });

      $rateYo.rateYo("option", "multiColor", true);
    });
  </script>
</body>

</html>