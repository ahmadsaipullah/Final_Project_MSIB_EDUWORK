<?php
include 'koneksi.php';
function getAverageRating($movieId, $conn)
{
  $query = "SELECT AVG(rating) as avg_rating FROM reviews WHERE movie_id = $movieId";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  return $row['avg_rating'];
}
$movies = mysqli_query($conn, "SELECT movies.*, AVG(reviews.rating) as avg_rating 
                                FROM movies 
                                JOIN reviews ON movies.movie_id = reviews.movie_id 
                                GROUP BY movies.movie_id 
                                LIMIT 6 ");
$dramas = mysqli_query($conn, "SELECT movies.*, AVG(reviews.rating) as avg_rating 
                              FROM movies 
                              JOIN reviews ON movies.movie_id = reviews.movie_id 
                              WHERE genre_id = 1
                              GROUP BY movies.movie_id");
$actions = mysqli_query($conn, "SELECT movies.*, AVG(reviews.rating) as avg_rating 
                              FROM movies 
                              JOIN reviews ON movies.movie_id = reviews.movie_id 
                              WHERE genre_id = 2
                              GROUP BY movies.movie_id");
$fantasys = mysqli_query($conn, "SELECT movies.*, AVG(reviews.rating) as avg_rating 
                              FROM movies 
                              JOIN reviews ON movies.movie_id = reviews.movie_id 
                              WHERE genre_id = 3
                              GROUP BY movies.movie_id");
$comedys = mysqli_query($conn, "SELECT movies.*, AVG(reviews.rating) as avg_rating 
                              FROM movies 
                              JOIN reviews ON movies.movie_id = reviews.movie_id 
                              WHERE genre_id = 4
                              GROUP BY movies.movie_id");
$advantures = mysqli_query($conn, "SELECT movies.*, AVG(reviews.rating) as avg_rating 
                              FROM movies 
                              JOIN reviews ON movies.movie_id = reviews.movie_id 
                              WHERE genre_id = 5
                              GROUP BY movies.movie_id");
$horrors = mysqli_query($conn, "SELECT movies.*, AVG(reviews.rating) as avg_rating 
                              FROM movies 
                              JOIN reviews ON movies.movie_id = reviews.movie_id 
                              WHERE genre_id = 6
                              GROUP BY movies.movie_id");
?>
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
            <nav class="navbar navbar-expand-lg navbar-light p-0 ">
              <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="navbar-toggler-icon" data-toggle="collapse">
                  <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                  <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                  <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                </div>
              </a>
              <a href="home.php" class="navbar-brand">
                <img src="images/logosaaf.png" class="img-fluid logo" alt="" />
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
                    <a href="admin/login.php" class="iq-user-dropdown d-flex align-items-center p-0">
                      <img src="images/users.png" class="img-fluid user-m rounded-circle" alt="User Image" />
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

  <!-- main content starts  -->
  <div class="main-content">
    <section id="iq-favorites">
      <div class="container-fluid" style="margin-top: 80px">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Top Picks For You</h4>
              <a href="movie/all.php" class="iq-view-all">View All</a>
            </div>
            <div class="row">
              <?php foreach ($movies as $movie) : ?>
                <div class="col-md-2">
                  <div class="card mb-4 product-wap rounded-5" style="background-color: black; color: white; position: relative;">
                    <a href="detail.php?id=<?= $movie['movie_id']; ?>">
                      <img class="card-img rounded-5 img-fluid" src="images/img/<?= $movie['cover_image']; ?>" style="width: 100%; height: 350px; object-fit: cover;">
                    </a>
                    <div class="card-body" style="position: absolute; bottom: 0; width: 100%; background: rgba(0, 0, 0, 0.7); height: 200px; display: flex; flex-direction: column; justify-content: space-between;">
                      <a href="detail.php?id=<?= $movie['movie_id']; ?>" class="h6 text-decoration-none text-light"><?= $movie['judul']; ?></a>
                      <div class="movie-time d-flex align-items-center my-2">
                        <span class="text-white"><?= $movie['durasi']; ?></span>
                      </div>
                      <div class="star-rating">
                        <span class="fa fa-star text-warning"></span>
                        <span><?= number_format(getAverageRating($movie['movie_id'], $conn), 1); ?></span>
                      </div>
                      <div class="card-boy rounded-5 mt-2">
                        <a href="detail.php?id=<?= $movie['movie_id']; ?>" class="btn btn-hover iq-button" style="font-size: 10px;">
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
              <h4 class="main-title">Drama</h4>
              <a href="movie/drama.php" class="iq-view-all">View All</a>
            </div>
            <div class="row">
              <?php foreach ($dramas as $drama) : ?>
                <div class="col-md-2">
                  <div class="card mb-4 product-wap rounded-5" style="background-color: black; color: white; position: relative;">
                    <a href="detail.php?id=<?= $drama['movie_id']; ?>">
                      <img class="card-img rounded-5 img-fluid" src="images/img/<?= $drama['cover_image']; ?>" style="width: 100%; height: 350px; object-fit: cover;">
                    </a>
                    <div class="card-body" style="position: absolute; bottom: 0; width: 100%; background: rgba(0, 0, 0, 0.7); height: 200px; display: flex; flex-direction: column; justify-content: space-between;">
                      <a href="detail.php?id=<?= $drama['movie_id']; ?>" class="h6 text-decoration-none text-light"><?= $drama['judul']; ?></a>
                      <div class="movie-time d-flex align-items-center my-2">
                        <span class="text-white"><?= $drama['durasi']; ?></span>
                      </div>
                      <div class="star-rating">
                        <span class="fa fa-star text-warning"></span>
                        <span><?= number_format(getAverageRating($drama['movie_id'], $conn), 1); ?></span>
                      </div>
                      <div class="card-boy rounded-5 mt-2">
                        <a href="detail.php?id=<?= $drama['movie_id']; ?>" class="btn btn-hover iq-button" style="font-size: 10px;">
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
        </div>
      </div>
    </section>
    <!-- upcoming contents section ends -->

    <section id="iq-suggested" class="s-margin">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Action</h4>
              <a href="movie/action.php" class="iq-view-all">View All</a>
            </div>
            <div class="row">
              <?php foreach ($actions as $action) : ?>
                <div class="col-md-2">
                  <div class="card mb-4 product-wap rounded-5" style="background-color: black; color: white; position: relative;">
                    <a href="detail.php?id=<?= $action['movie_id']; ?>">
                      <img class="card-img rounded-5 img-fluid" src="images/img/<?= $action['cover_image']; ?>" style="width: 100%; height: 350px; object-fit: cover;">
                    </a>
                    <div class="card-body" style="position: absolute; bottom: 0; width: 100%; background: rgba(0, 0, 0, 0.7); height: 200px; display: flex; flex-direction: column; justify-content: space-between;">
                      <a href="detail.php?id=<?= $action['movie_id']; ?>" class="h6 text-decoration-none text-light"><?= $action['judul']; ?></a>
                      <div class="movie-time d-flex align-items-center my-2">
                        <span class="text-white"><?= $action['durasi']; ?></span>
                      </div>
                      <div class="star-rating">
                        <span class="fa fa-star text-warning"></span>
                        <span><?= number_format(getAverageRating($action['movie_id'], $conn), 1); ?></span>
                      </div>
                      <div class="card-boy rounded-5 mt-2">
                        <a href="detail.php?id=<?= $action['movie_id']; ?>" class="btn btn-hover iq-button" style="font-size: 10px;">
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
        </div>
      </div>
    </section>

    <section id="iq-suggested" class="s-margin">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Fantasy</h4>
              <a href="movie/fantasy.php" class="iq-view-all">View All</a>
            </div>
            <div class="row">
              <?php foreach ($fantasys as $fantasy) : ?>
                <div class="col-md-2">
                  <div class="card mb-4 product-wap rounded-5" style="background-color: black; color: white; position: relative;">
                    <a href="detail.php?id=<?= $fantasy['movie_id']; ?>">
                      <img class="card-img rounded-5 img-fluid" src="images/img/<?= $fantasy['cover_image']; ?>" style="width: 100%; height: 350px; object-fit: cover;">
                    </a>
                    <div class="card-body" style="position: absolute; bottom: 0; width: 100%; background: rgba(0, 0, 0, 0.7); height: 200px; display: flex; flex-direction: column; justify-content: space-between;">
                      <a href="detail.php?id=<?= $fantasy['movie_id']; ?>" class="h6 text-decoration-none text-light"><?= $fantasy['judul']; ?></a>
                      <div class="movie-time d-flex align-items-center my-2">
                        <span class="text-white"><?= $fantasy['durasi']; ?></span>
                      </div>
                      <div class="star-rating">
                        <span class="fa fa-star text-warning"></span>
                        <span><?= number_format(getAverageRating($fantasy['movie_id'], $conn), 1); ?></span>
                      </div>
                      <div class="card-boy rounded-5 mt-2">
                        <a href="detail.php?id=<?= $fantasy['movie_id']; ?>" class="btn btn-hover iq-button" style="font-size: 10px;">
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
        </div>
      </div>
    </section>

    <section id="iq-suggested" class="s-margin">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Comedy</h4>
              <a href="movie/comedy.php" class="iq-view-all">View All</a>
            </div>
            <div class="row">
              <?php foreach ($comedys as $comedy) : ?>
                <div class="col-md-2">
                  <div class="card mb-4 product-wap rounded-5" style="background-color: black; color: white; position: relative;">
                    <a href="detail.php?id=<?= $comedy['movie_id']; ?>">
                      <img class="card-img rounded-5 img-fluid" src="images/img/<?= $comedy['cover_image']; ?>" style="width: 100%; height: 350px; object-fit: cover;">
                    </a>
                    <div class="card-body" style="position: absolute; bottom: 0; width: 100%; background: rgba(0, 0, 0, 0.7); height: 200px; display: flex; flex-direction: column; justify-content: space-between;">
                      <a href="detail.php?id=<?= $comedy['movie_id']; ?>" class="h6 text-decoration-none text-light"><?= $comedy['judul']; ?></a>
                      <div class="movie-time d-flex align-items-center my-2">
                        <span class="text-white"><?= $comedy['durasi']; ?></span>
                      </div>
                      <div class="star-rating">
                        <span class="fa fa-star text-warning"></span>
                        <span><?= number_format(getAverageRating($comedy['movie_id'], $conn), 1); ?></span>
                      </div>
                      <div class="card-boy rounded-5 mt-2">
                        <a href="detail.php?id=<?= $comedy['movie_id']; ?>" class="btn btn-hover iq-button" style="font-size: 10px;">
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
        </div>
      </div>
    </section>

    <section id="iq-suggested" class="s-margin">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Advanture</h4>
              <a href="movie/advanture.php" class="iq-view-all">View All</a>
            </div>
            <div class="row">
              <?php foreach ($advantures as $advanture) : ?>
                <div class="col-md-2">
                  <div class="card mb-4 product-wap rounded-5" style="background-color: black; color: white; position: relative;">
                    <a href="detail.php?id=<?= $advanture['movie_id']; ?>">
                      <img class="card-img rounded-5 img-fluid" src="images/img/<?= $advanture['cover_image']; ?>" style="width: 100%; height: 350px; object-fit: cover;">
                    </a>
                    <div class="card-body" style="position: absolute; bottom: 0; width: 100%; background: rgba(0, 0, 0, 0.7); height: 200px; display: flex; flex-direction: column; justify-content: space-between;">
                      <a href="detail.php?id=<?= $advanture['movie_id']; ?>" class="h6 text-decoration-none text-light"><?= $advanture['judul']; ?></a>
                      <div class="movie-time d-flex align-items-center my-2">
                        <span class="text-white"><?= $advanture['durasi']; ?></span>
                      </div>
                      <div class="star-rating">
                        <span class="fa fa-star text-warning"></span>
                        <span><?= number_format(getAverageRating($advanture['movie_id'], $conn), 1); ?></span>
                      </div>
                      <div class="card-boy rounded-5 mt-2">
                        <a href="detail.php?id=<?= $advanture['movie_id']; ?>" class="btn btn-hover iq-button" style="font-size: 10px;">
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
        </div>
      </div>
    </section>

    <section id="iq-suggested" class="s-margin">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Horror</h4>
              <a href="movie/horror.php" class="iq-view-all">View All</a>
            </div>
            <div class="row">
              <?php foreach ($horrors as $horror) : ?>
                <div class="col-md-2">
                  <div class="card mb-4 product-wap rounded-5" style="background-color: black; color: white; position: relative;">
                    <a href="detail.php?id=<?= $horror['movie_id']; ?>">
                      <img class="card-img rounded-5 img-fluid" src="images/img/<?= $horror['cover_image']; ?>" style="width: 100%; height: 350px; object-fit: cover;">
                    </a>
                    <div class="card-body" style="position: absolute; bottom: 0; width: 100%; background: rgba(0, 0, 0, 0.7); height: 200px; display: flex; flex-direction: column; justify-content: space-between;">
                      <a href="detail.php?id=<?= $horror['movie_id']; ?>" class="h6 text-decoration-none text-light"><?= $horror['judul']; ?></a>
                      <div class="movie-time d-flex align-items-center my-2">
                        <span class="text-white"><?= $horror['durasi']; ?></span>
                      </div>
                      <div class="star-rating">
                        <span class="fa fa-star text-warning"></span>
                        <span><?= number_format(getAverageRating($horror['movie_id'], $conn), 1); ?></span>
                      </div>
                      <div class="card-boy rounded-5 mt-2">
                        <a href="detail.php?id=<?= $horror['movie_id']; ?>" class="btn btn-hover iq-button" style="font-size: 10px;">
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