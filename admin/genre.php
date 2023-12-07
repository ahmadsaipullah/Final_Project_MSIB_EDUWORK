<?php
include '../koneksi.php';
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
                            <div class="mobile-more-menu">
                                <a href="../javascript:void(0);" class="more-toggle" id="dropdownMenuButton" data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h"></i>
                                </a>
                                <div class="more-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="navbar-right position-relative">
                                        <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                                            <li>
                                                <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center">
                                                    <img src="../images/user/user.png" class="img-fluid user-m rounded-circle" alt="" />
                                                </a>
                                                <div class="iq-sub-dropdown iq-user-dropdown">
                                                    <div class="iq-card shadow-none m-0">
                                                        <div class="iq-card-body p-0 pl-3 pr-3">
                                                            <a href="#" class="iq-sub-card setting-dropdown">
                                                                <div class="media align-items-center">
                                                                    <div class="right-icon">
                                                                        <i class="fa fa-user text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0">Manage Profile</h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="iq-sub-card setting-dropdown">
                                                                <div class="media align-items-center">
                                                                    <div class="right-icon">
                                                                        <i class="fa fa-cog text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0">Settings</h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="iq-sub-card setting-dropdown">
                                                                <div class="media align-items-center">
                                                                    <div class="right-icon">
                                                                        <i class="fa fa-inr text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0">Pricing Plan</h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="iq-sub-card setting-dropdown">
                                                                <div class="media align-items-center">
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
                                            <img src="../images/user/user.png" class="img-fluid user-m rounded-circle" alt="" />
                                        </a>
                                        <div class="iq-sub-dropdown iq-user-dropdown">
                                            <div class="iq-card shadow-none m-0">
                                                <div class="iq-card-body p-0 pl-3 pr-3">
                                                    <a href="#" class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="fa fa-user text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Manage Profile</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
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

    <!-- main content starts  -->
    <div class="main-content">
        <div class="container-fluid" style="margin-top: 70px">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <button type="button" class="btn btn-hover iq-button" data-toggle="modal" data-target="#tambah" style="margin-bottom: 20px">ADD GENRE</button>
                    <table class="table table-bordered" id="Table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">GENRE</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($genre = mysqli_fetch_array($genres)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $genre['genre_name'] ?></td>
                                    <td class="text-center" style="vertical-align: middle;">
                                        <a class="btn btn-hover iq-button" data-toggle="modal" name="edit" data-target="#edit<?= $no ?>">
                                            <i class="fa fa-pencil mr-1"></i>
                                        </a>
                                        <a class="btn btn-hover iq-button ml-2" data-toggle="modal" name="hapus" data-target="#hapus<?= $no ?>">
                                            <i class="fa fa-trash mr-1"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal Edit -->
                                <div id="edit<?= $no ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark">EDIT GENRE</h5>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="genre/editgenre.php" method="POST">
                                                <input type="hidden" name="genre_id" value="<?= $genre['genre_id'] ?>">
                                                <div class="modal-body" style="max-height: calc(100vh -  200px); overflow-y: auto;">
                                                    <div class="form-group">
                                                        <label class="control-label text-dark" for="genre_name">NAME</label>
                                                        <input type="text" name="genre_name" class="form-control" id="genre_name" value="<?= $genre['genre_name'] ?>" required>
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
                                                <h5 class="modal-title text-dark">DELETE GENRE</h5>
                                            </div>
                                            <form action="genre/delete.php" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="genre_id" value="<?= $genre['genre_id'] ?>">
                                                <div class="modal-body">
                                                    <h5 class="text-center text-dark"> Apakah Anda Yakin Akan Hapus <br>
                                                        <span class="text-danger"><?= $genre['genre_name'] ?></span>
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
                                    NetFlix App
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
                    <h5 class="modal-title text-dark">ADD GENRE</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="genre/addgenre.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body" style="max-height: calc(100vh - 200px); overflow-y: auto;">
                        <div class="form-group">
                            <label class="control-label text-dark" for="genre_name">GENRE</label>
                            <input type="text" name="genre_name" class="form-control" id="genre_name" required>
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