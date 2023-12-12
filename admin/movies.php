<?php
include '../koneksi.php';
include '../admin/auth/index.php';

$alls = mysqli_query($conn, "SELECT * FROM movies
    LEFT JOIN director ON movies.director_id = director.director_id
    LEFT JOIN genres ON movies.genre_id = genres.genre_id");
$directors = mysqli_query($conn, "SELECT * FROM director");
$genres = mysqli_query($conn, "SELECT * FROM genres");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Video Streaming</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- i will provide this in description  -->
    <link rel="stylesheet" href="../css/slick.css" />
    <link rel="stylesheet" href="../css/slick-theme.css" />
    <link rel="stylesheet" href="../css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../css/animate.min.css" />
    <link rel="stylesheet" href="../css/magnific-popup.css" />
    <link rel="stylesheet" href="../css/select2.min.css" />
    <link rel="stylesheet" href="../css/select2-bootstrap4.min.css" />

    <link rel="stylesheet" href="../css/slick-animation.css" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
</head>
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
                            <a href="movies.php" class="navbar-brand">
                                <img src="../images/logo.png" class="img-fluid logo" alt="" />
                            </a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div class="menu-main-menu-container">
                                    <ul id="top-menu" class="navbar-nav ml-auto">
                                        <li class="menu-item"><a href="movies.php">Movies</a></li>
                                        <li class="menu-item"><a href="director.php">Director</a></li>
                                        <li class="menu-item"><a href="genre.php">Genre</a></li>
                                        <li class="menu-item"><a href="coment.php">Coment</a></li>
                                    </ul>
                                </div>
                            </div>


                            <div class="navbar-right menu-right">
                                <ul class="d-flex align-items-center list-inline m-0">

                                    <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center p-0">
                                        <img src="../images/user/user.png" class="img-fluid user-m rounded-circle" alt="" />
                                    </a>
                                    <div class="iq-sub-dropdown iq-user-dropdown">
                                        <div class="iq-card shadow-none m-0">
                                            <div class="iq-card-body p-0 pl-3 pr-3">
                                                <!-- <a href="#" class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="fa fa-user text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Manage Profile</h6>
                                                        </div>
                                                    </div>
                                                </a> -->
                                                <a href="#" class="iq-sub-card setting-dropdown" data-toggle="modal" data-target="#exampleModal">
                                                    <div class="media align-items-center pt-4">
                                                        <div class="right-icon">
                                                            <i class="fa fa-sign-out text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Logout</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
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
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-dark">Pilih "Logout" jika anda ingin mengakhiri sesi.</div>
                <div class="modal-footer">
                    <button class="btn btn-close card-shadow-2 btn-sm" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary btn-sm card-shadow-2" href="../admin/auth/destroy.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- main content starts  -->
    <div class="main-content">
        <div class="container-fluid" style="margin-top: 70px">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <button type="button" class="btn btn-hover iq-button" data-toggle="modal" data-target="#tambah" style="margin-bottom: 20px">ADD MOVIES</button>
                    <table class="table table-bordered" id="Table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">COVER</th>
                                <th scope="col">TITLE</th>
                                <th scope="col">DESCRIPTION</th>
                                <th scope="col">GENRE</th>
                                <th scope="col">DIRECTOR</th>
                                <th scope="col">LINK</th>
                                <th scope="col">ACTOR</th>
                                <th scope="col">DURATION</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($all = mysqli_fetch_array($alls)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><img src="../images/img/<?php echo $all['cover_image']; ?>" class="img-thumbnail" alt="Image" style="width: 80px; height: 100px; object-fit: cover;"></td>
                                    <td><?php echo $all['judul'] ?></td>
                                    <td><?php echo substr($all['deskripsi'], 0, 100) . '...'; ?></td>
                                    <td><?php echo $all['genre_name'] ?></td>
                                    <td><?php echo $all['nama'] ?></td>
                                    <td><?php echo $all['movie_link'] ?></td>
                                    <td><?php echo $all['actor'] ?></td>
                                    <td><?php echo $all['durasi'] ?></td>
                                    <td>




                                        <div class="d-flex">
                                            <a class="btn btn-hover iq-button" data-toggle="modal" name="edit" data-target="#edit<?= $no ?>">
                                                <i class="fa fa-pencil mr-1"></i>
                                            </a>
                                            <a class="btn btn-hover iq-button ml-2" data-toggle="modal" name="hapus" data-target="#hapus<?= $no ?>">
                                                <i class="fa fa-trash mr-1"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal Edit -->
                                <div id="edit<?= $no ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark">EDIT MOVIES</h5>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="movies/editmovie.php" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="movie_id" value="<?= $all['movie_id'] ?>">
                                                <div class="modal-body" style="max-height: calc(100vh - 200px); overflow-y: auto;">
                                                    <div class="form-group">
                                                        <label class="control-label text-dark" for="judul">Judul</label>
                                                        <input type="text" name="judul" class="form-control" id="judul" value="<?= $all['judul'] ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label text-dark" for="deskripsi">Deskripsi</label>
                                                        <textarea class="form-control" name="deskripsi" rows="4" required><?php echo $all['deskripsi'] ?>"</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label text-dark" for="director_id">Director</label>
                                                        <select class="form-control" name="director_id">
                                                            <?php foreach ($directors as $director) { ?>
                                                                <option value="<?php echo $director['director_id'] ?>" <?php if ($director['director_id'] == $all['director_id']) echo 'selected'; ?>>
                                                                    <?php echo $director['nama'] ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label text-dark" for="genre_id">Genre</label>
                                                        <select class="form-control" name="genre_id">
                                                            <?php foreach ($genres as $genre) { ?>
                                                                <option value="<?php echo $genre['genre_id'] ?>" <?php if ($genre['genre_id'] == $all['genre_id']) echo 'selected'; ?>>
                                                                    <?php echo $genre['genre_name'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label text-dark" for="movie_link">Movie Link</label>
                                                        <input type="text" name="movie_link" class="form-control" id="movie_link" value="<?= $all['movie_link'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label text-dark" for="actor">Actor</label>
                                                        <textarea class="form-control" name="actor" rows="2" required><?php echo $all['actor'] ?>"</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label text-dark" for="durasi">Durasi</label>
                                                        <input type="text" name="durasi" class="form-control" id="durasi" value="<?= $all['durasi'] ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label text-dark" for="cover_image">Cover Image:</label>

                                                        <img src="../images/img/<?php echo $all['cover_image']; ?> " width="100px" ;>
                                                        <input type="file" class="form-control border-0" id="cover_image" name="cover_image">

                                                        <img src="../images/img/<?php echo $all['cover_image']; ?> " width="100px" ;>
                                                        <input type="file" class="form-control border-0" id="cover_image" name="cover_image">

                                                        <img src="../images/img/<?php echo $all['cover_image']; ?> " width="100px" ;>
                                                        <input type="file" class="form-control border-0" id="cover_image" name="cover_image">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                                        <button type="submit" class="btn btn-primary" name="tambah" value="simpan">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Edit Akhir -->
                                <!-- Modal Hapus -->
                                <div id="hapus<?= $no ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark">DELETE MOVIE</h5>
                                            </div>
                                            <form action="movies/delete.php" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="movie_id" value="<?= $all['movie_id'] ?>">
                                                <div class="modal-body">
                                                    <h5 class="text-center text-dark"> Apakah Anda Yakin Akan Hapus <br>
                                                        <span class="text-danger"><?= $all['judul'] ?></span>
                                                    </h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
                                                </div>
                                            </form>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Hapus Akhir -->
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- main content ends  -->
    <footer class="iq-bg-dark">
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
                        </div>
                        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                            <div class="widget text-left">
                                <div class="textwidget">
                                    <h6 class="footer-link-title">
                                        SAAFilm App
                                    </h6>
                                    <div class="d-flex align-items-center">
                                        <a href="#"><img src="../images/footer/01.jpg" alt=""></a>
                                        <br>
                                        <a href="#" class="ml-3"><img src="../images/footer/02.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Modal Tambah -->
        <div id="tambah" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark">ADD MOVIES</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="movies/addmovie.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body" style="max-height: calc(100vh - 200px); overflow-y: auto;">
                            <div class="form-group">
                                <label class="control-label text-dark" for="judul">Judul</label>
                                <input type="text" name="judul" class="form-control" id="judul" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label text-dark" for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label text-dark" for="director_id">Director</label>
                                <select class="form-control" name="director_id">
                                    <option selected>Pilih Director</option>
                                    <?php foreach ($directors as $director) { ?>
                                        <option value="<?php echo $director['director_id'] ?>"><?php echo $director['nama'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label text-dark" for="genre_id">Genre</label>
                                <select class="form-control" name="genre_id">
                                    <option selected>Pilih Genre</option>
                                    <?php foreach ($genres as $genre) { ?>
                                        <option value="<?php echo $genre['genre_id'] ?>"><?php echo $genre['genre_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label text-dark" for="movie_link">Movie Link</label>
                                <input type="text" name="movie_link" class="form-control" id="movie_link">
                            </div>
                            <div class="form-group">
                                <label class="control-label text-dark" for="actor">Actor</label>
                                <textarea class="form-control" name="actor" rows="2" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label text-dark" for="durasi">Durasi</label>
                                <input type="text" name="durasi" class="form-control" id="durasi" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label text-dark" for="cover_image">Cover Image:</label>
                                <input type="file" class="form-control border-0" id="cover_image" name="cover_image" required>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="submit" class="btn btn-primary" name="tambah" value="simpan">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Tambah Akhir -->




        <!-- js files  -->
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/slick.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/select2.min.js"></script>
        <script src="../js/jquery.magnific-popup.min.js"></script>
        <script src="../js/slick-animation.min.js"></script>
        <script src="../main.js"></script>
        <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#Table').DataTable();
            });
        </script>
</body>

</html>