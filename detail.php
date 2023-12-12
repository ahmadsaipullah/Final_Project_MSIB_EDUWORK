<?php
include 'koneksi.php';
$movie_id = $_GET['id'];

$movies = mysqli_query($conn, "SELECT * FROM movies 
LEFT JOIN director ON movies.director_id = director.director_id
LEFT JOIN genres ON movies.genre_id = genres.genre_id
JOIN reviews ON movies.movie_id = reviews.movie_id
WHERE movies.movie_id = $movie_id");
$movie = mysqli_fetch_assoc($movies);

$reviews = mysqli_query($conn, "SELECT * FROM reviews 
JOIN movies ON reviews.movie_id = movies.movie_id
WHERE reviews.movie_id = $movie_id ORDER BY review_date ASC");

$genre_id = $movie['genre_id'];
$recommended_movies = mysqli_query($conn, "SELECT movies.*, AVG(reviews.rating) AS avg_rating
  FROM movies
  LEFT JOIN reviews ON movies.movie_id = reviews.movie_id
  WHERE movies.genre_id = $genre_id AND movies.movie_id <> $movie_id
  GROUP BY movies.movie_id
  ORDER BY avg_rating DESC
  LIMIT 4");

if (isset($_POST['tambah'])) {
  if (tambahKomentar($_POST) > 0) {
    header("Location: detail.php?id=" . $movie['movie_id']);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Video Streaming</title>
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
              <a href="home.php" class="navbar-brand">
                <img src="images/logosaaf.png" class="img-fluid logo" alt="" />
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
            </nav>
            <div class="nav-overlay"></div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- main content starts  -->
  <div class="main-content">
    <div class="container" style="margin-top: 80px">
      <div class="header">
        <h2 class="text-center">Detail Movies</h2>
      </div>
      <div class="row my-5">
        <div class="col-md-6">
          <img src="images/img/<?php echo $movie['cover_image']; ?>" alt="gambar" width="500px" height="560px">
        </div>
        <div class="col-md-6">
          <h1 class="bold"><?php echo $movie['judul']; ?></h1>
          <article class="text-justify pt-2"><?php echo $movie['deskripsi']; ?></article>
          <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft" style="opacity: 1">
            <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
              <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star-half"></i></li>
              </ul>
              <span class="text-white ml-2"><?php echo $movie['rating']; ?></span>
            </div>
          </div>
          <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
            <div class="text-primary title starring">
              Director :
              <span class="text-body"><?php echo $movie['nama']; ?></span>
            </div>
            <div class="text-primary title genres">
              Genres : <span class="text-body"><?php echo $movie['genre_name']; ?></span>
            </div>
            <div class="text-primary title genres">
              Duration : <span class="text-body"><?php echo $movie['durasi']; ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- main content ends  -->

  <!-- comments and reviews -->
  <div class="row col-12">
    <div class="comments col-7">
      <div class="col-sm-12 overflow-hidden">
        <div class="iq-main-header d-flex align-items-center justify-content-between comments__title">
          <h4 class="main-title">Review</h4>
        </div>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
            <ul class="reviews__list">
              <?php foreach ($reviews as $review) : ?>
                <li class="reviews__item">
                  <div class="reviews__autor">
                    <span class="reviews__name">
                      <a href="#"><?= $review['reviewer_name']; ?></a>
                      <span class="reviews__time">
                        <?php
                        $timestamp = is_numeric($review['review_date']) ? $review['review_date'] : strtotime($review['review_date']);
                        echo date("d-m-Y", $timestamp);
                        ?>
                      </span>
                      <span class="reviews__rating">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                          <path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z" />
                        </svg><?= $review['rating']; ?>
                      </span>
                      <p class="reviews__text"><?= $review['review_text']; ?></p>
                  </div>
                </li>
              <?php endforeach; ?>
              <form method="post" class="reviews__form">
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
      </div>
    </div>

    <div class="comments col-5">
      <div class="col-sm-12 overflow-hidden">
        <div class="iq-main-header d-flex align-items-center justify-content-between">
          <h4 class="main-title">Recomanded</h4>
        </div>
        <div class="row">
          <?php foreach ($recommended_movies as $recommended) : ?>
            <div class="col-md-4">
              <div class="card mb-4 product-wap rounded-5" style="background-color: black; color: white; position: relative; width: 140px;">
                <a href="detail.php?id=<?= $recommended['movie_id']; ?>">
                  <img class="card-img rounded-5 img-fluid" src="images/img/<?= $recommended['cover_image']; ?>" style="width: 100%; height: 250px; object-fit: cover;">
                </a>
                <div class="card-body" style="position: absolute; bottom: 0; width: 100%; background: rgba(0, 0, 0, 0.7); height: 130px; display: flex; flex-direction: column; justify-content: space-between;">
                  <a href="detail.php?id=<?= $recommended['movie_id']; ?>" class="h6 text-decoration-none text-light"><?= $recommended['judul']; ?></a>
                  <div class="star-rating">
                    <span class="fa fa-star text-warning"></span>
                    <span><?= number_format($recommended['avg_rating'], 1); ?></span> <!-- Menampilkan rata-rata rating -->
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
  <script src="main.js"></script>
  <!-- Update your JavaScript code -->
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