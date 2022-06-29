<header>
    <!-- Navigation -->
    <nav id="navigation_bar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="header_wrap">
                <div class="user_login">
                    <ul>
                        <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                                <?php
                                $email = $_SESSION['login'];
                                $sql = "SELECT FullName FROM tblusers WHERE EmailId=:email ";
                                $query = $dbh->prepare($sql);
                                $query->bindParam(':email', $email, PDO::PARAM_STR);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                if ($query->rowCount() > 0) {
                                    foreach ($results as $result) {

                                        echo htmlentities($result->FullName);
                                    }
                                } ?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <?php if ($_SESSION['login']) { ?>
                                    <li><a href="profile.php">Pengaturan Profil</a></li>
                                    <li><a href="my-booking.php">List Booking</a></li>
                                    <li><a href="update-password.php">Ubah Password</a></li>
                                    <li><a href="post-testimonial.php">Post Testimoni</a></li>
                                    <li><a href="my-testimonials.php">Testimoni Saya</a></li>
                                    <li><a href="logout.php">Keluar</a></li>
                                <?php } else { ?>
                                    <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Masuk</a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Beranda</a> </li>
                    <li><a href="car-listing.php">Daftar Mobil</a>
                    <li><a href="contact-us.php">Kontak Kami</a></li>
                </ul>   
            </div>
        </div>
    </nav>
    <!-- Navigation end -->

</header>