<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>card page</title>

    <link rel="stylesheet" href="./css/animate.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <link rel="stylesheet" href="./css/owl.carousel.min.css">

    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <link rel="stylesheet" href="./css/style.css">


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


</head>

<body>
    <?php


    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'food_db';
    $connection = mysqli_connect($hostname, $username, $password, $dbname);

    $sql = 'select*from user_table1';
    $result = $connection->query($sql);
    $user = mysqli_fetch_array($result);

    ?>
    <!-- ===============header============= -->
    <header>
        <section class="flex">
            <a href="home.php" class="logo" data-aos="zoom-in-left" data-aos-delay="150"> yum-mi 😋</a>
            <nav class="navlist" data-aos="zoom-in-left" data-aos-delay="200">
                <a href="home.php">home</a>
                <a href="ABOUT.php">ABOUT</a>
                <a href="menu.php">menu</a>
                <a href="order.php">order</a>
                <a href="contact.php">contact</a>
            </nav>
            <div class="icons">
                <a href="search.php" data-aos="zoom-in-left" data-aos-delay="300"><i class="fas fa-search"></i></a>
                <a href="cart.php" data-aos="zoom-in-left" data-aos-delay="400"><i class="fas fa-shopping-cart"></i></a>
                <div data-aos="zoom-in-left" data-aos-delay="500"><i class="fas fa-user" id="user-btn"></i></div>
                <div data-aos="zoom-in-left" data-aos-delay="600"><i class="fas fa-bars" id="bar-btn"></i></div>
            </div>


            <div class="profile">

                <?php



                if ($user['name']) { ?>

                    <h3>
                        <?php echo $user['name'] ?>
                    </h3>

                <?php } else {
                    ?>
                    <a href="#">null <i class="fas fa-user"></i></a>

                <?php } ?>


                <div class="flex">
                    <a href="profile.php" class="btn-1">profile</a>
                    <a href="logout.php" class="btn-2">logout</a>
                </div>
                <p><a href="login.php">login</a> or <a href="user_register.php">register</a></p>
            </div>
        </section>
    </header>
    <!-- ===ending====== -->


    <!-- ============headding text========= -->
    <div class="header-text">
        <h3 class="wow animate__flipInY">my card</h3>
        <p><a href="home.php">home</a><span>/cart</span></p>
    </div>
    <!-- =======ending======  -->


    <!-- ===================home products======= -->
    <section class="products-2">
        <h3 class="titel tlt" data-in-effect="tada" data-out-effect="tada">your card</h3>




        <table class="table wow animate__zoomIn">
            <thead>
                <tr>
                    <th scope="col" class="fs-3 border-2 border-dark text-center bg-dark text-white">number</th>
                    <th scope="col" class="fs-3 border-2 border-dark text-center bg-dark text-white">action</th>
                    <th scope="col" class="fs-3 border-2 border-dark text-center bg-dark text-white">image</th>
                    <th scope="col" class="fs-3 border-2 border-dark text-center bg-dark text-white">product name</th>
                    <th scope="col" class="fs-3 border-2 border-dark text-center bg-dark text-white">price</th>
                    <th scope="col" class="fs-3 border-2 border-dark text-center bg-dark text-white">quntity</th>
                    <th scope="col" class="fs-3 border-2 border-dark text-center bg-dark text-white">total price</th>
                </tr>
            </thead>
            <tbody class="border-2 border-dark">
                <?php
                session_start();
                $serial = 1;
                $total = 0;
                $subtotal = 0;
                foreach ($_SESSION['cart'] as $p_id => $qty) {

                    $sql = "select * from home_productstable where id='$p_id'";
                    $result = $connection->query($sql);
                    while ($row = $result->fetch_assoc()) {

                        $subtotal = $row['price'] * $qty;
                        $total = $total + $subtotal;


                        ?>


                        <tr class="">
                            <form action="add_cart.php" method="POST">

                                <th scope="row" class="border-1 border-dark">
                                    <h3 class="text-center fs-1 fw-bold text-success">
                                        <?php echo $serial++ ?>
                                    </h3>
                                </th>
                                <th scope="row" class="border-1 border-dark pt-2 ps-5">

                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <input type="submit" name="delete" value="delete" class="btn-1 rounded-4 py-3 px-5 fs-5">

                                </th>
                                <td class="border-1 border-dark pt-2 ps-5"><img src="uploaded_img/<?php echo $row['image'] ?>"
                                        style="width:80px; heigh:50px; object-fit:cover;" alt=""></td>
                                <td class="border-1 border-dark pt-2 ps-5">
                                    <h3>
                                        <?php echo $row['title'] ?>
                                    </h3>
                                </td>
                                <td class="border-1 border-dark pt-2 ">
                                    <h3 class="text-center fs-1 fw-bold text-success">
                                        <?php echo $row['price'] ?>
                                    </h3>
                                </td>

                                <td scope="row" class="border-1 border-dark pt-2 ps-5">

                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <input type="number" name="qty" value="<?php echo $qty ?>" class="fw-bold  fs-4"
                                        style="border:1px solid black; width:60px;height:38px; padding:1rem; background:#eee">
                                    <input type="submit" name="update" value="update"
                                        class="btn-1 rounded-4 py-3 fs-5 px-5 ms-2">

                                </td>

                                <td class="border-1 border-dark pt-2 ps-5">
                                    <h3 class="text-center fs-1 fw-bold text-success">
                                        <?php echo $row['price'] * $qty ?>
                                    </h3>
                                </td>
                            </form>
                        </tr>
                        <?php
                    }
                }
                ?>

            </tbody>
        </table>


        <br><br>
        <div class="wow animate__bounce">


            <?php

            if ($user['name']) { ?>


                <h2 class="text-left text-success ">Already you login</h2>

            <?php } else {
                ?>
                <h2 class="text-left text-danger">please login frist</h2>

            <?php } ?>

            <br>
        </div>
        <div class="box-1 wow animate__zoomIn">
            <h2> total : $<sapn class="text-center fs-1 fw-bold text-success">
                    <?php echo $total ?>
                </sapn>
            </h2>

            <?php



            if ($user['name']) { ?>


                <a href="cheackout.php" class="btn-1 wow animate__shakeX">cheackout orders</a>

            <?php } else {
                ?>
                <a href="cheackout.php" class="btn-1 wow animate__shakeX disabled">null</a>

            <?php } ?>


        </div>
    </section>






    <!-- ========footer details section====== -->
    <section class="footer">

        <h3 class="headding-2 tlt" data-in-effect="tada" data-out-effect="tada">our details</h3>
        <div class="box-container">
            <?php
            $i = 1;
            $sql = 'select*from footter_detalistable';
            $result = $connection->query($sql);
            while ($row = $result->fetch_assoc()) { ?>

                <?php if ($i == 1) { ?>

                    <div class="box" data-aos="fade-up" data-aos-delay="150">
                        <img src="uploaded_img/<?php echo $row['image'] ?>" alt="">
                        <h3>
                            <?php echo $row['title'] ?>
                        </h3>
                        <a href="#">
                            <?php echo $row['sub_title'] ?>
                        </a>
                        <a href="#">
                            <?php echo $row['sub_title_2'] ?>
                        </a>
                    </div>
                <?php } ?>


                <?php if ($i == 2) { ?>
                    <div class="box" data-aos="fade-up" data-aos-delay="150">
                        <img src="uploaded_img/<?php echo $row['image'] ?>" alt="">
                        <h3>
                            <?php echo $row['title'] ?>
                        </h3>
                        <p>
                            <?php echo $row['sub_title'] ?>
                        </p>
                    </div>
                <?php } ?>


                <?php if ($i == 3) { ?>
                    <div class="box" data-aos="fade-up" data-aos-delay="150">
                        <img src="uploaded_img/<?php echo $row['image'] ?>" alt="">
                        <h3>
                            <?php echo $row['title'] ?>
                        </h3>
                        <p>
                            <?php echo $row['sub_title'] ?>
                        </p>
                    </div>
                <?php } ?>


                <?php if ($i == 4) { ?>
                    <div class="box" data-aos="fade-up" data-aos-delay="150">
                        <img src="uploaded_img/<?php echo $row['image'] ?>" alt="">
                        <h3>
                            <?php echo $row['title'] ?>
                        </h3>
                        <a href="#">
                            <?php echo $row['sub_title'] ?>
                        </a>
                        <a href="#">
                            <?php echo $row['sub_title_2'] ?>
                        </a>
                    </div>
                <?php } ?>


                <?php $i++;
            } ?>

        </div>
    </section>
    <!-- ======ending===== -->
    P
    <br><br>

    <!-- ==========footer-2 section======= -->
    <section class="footter-2">
        <div class="box-container">
            <div class="row">

                <div class="col-sm-12 col-md-6 col-xl-3 box" data-aos="fade-right" data-aos-delay="150"
                    data-aos-duration="1200">
                    <a href="home.php" class="logo-1 fs-3 fw-bold"> yum-mi 😋 <img src="images/title-img.png" alt="">
                    </a>
                    <?php
                    $sql = 'select*from footter_table';
                    $result = mysqli_query($connection, $sql) or die(mysql_error());
                    while ($row = $result->fetch_assoc()) { ?>
                        <a href="#"><i class="fas fa-<?php echo $row['icon'] ?>"></i>
                            <?php echo $row['title'] ?>
                        </a>
                    <?php } ?>
                </div>

                <div class="col-sm-12 col-md-6 col-xl-2 box" data-aos="fade-up" data-aos-delay="150"
                    data-aos-duration="1200">
                    <h3>Resource</h3>
                    <a href="#"><i class="fas fa-arrow-right-long"></i>Helps</a>
                    <a href="#"><i class="fas fa-arrow-right-long"></i>Download App</a>
                    <a href="#"><i class="fas fa-arrow-right-long"></i>Helps</a>
                    <a href="#"><i class="fas fa-arrow-right-long"></i>Privacy and Policy</a>
                    <a href="#"><i class="fas fa-arrow-right-long"></i>FAQ</a>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-2 box" data-aos="zoom-in" data-aos-delay="150"
                    data-aos-duration="1200">
                    <h3>quick links</h3>
                    <a href="home.php"><i class="fas fa-arrow-right-long"></i>home</a>
                    <a href="menu.php"><i class="fas fa-arrow-right-long"></i>ABOUT </a>
                    <a href="order.php"><i class="fas fa-arrow-right-long"></i>order</a>
                    <a href="menu.php"><i class="fas fa-arrow-right-long"></i>menu</a>
                    <a href="contact.php"><i class="fas fa-arrow-right-long"></i>contact</a>
                    <a href="search.php"><i class="fas fa-arrow-right-long"></i>search</a>
                    <a href="login.php"><i class="fas fa-arrow-right-long"></i>login</a>
                    <a href="register.php"><i class="fas fa-arrow-right-long"></i>register</a>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-2 box" data-aos="fade-down" data-aos-delay="150"
                    data-aos-duration="1200">
                    <h3>Our Social Media</h3>
                    <a href="https://www.facebook.com"><i class="fab fa-facebook"></i>facebook</a>
                    <a href="https://www.twitter.com"><i class="fab fa-twitter"></i>twitter</a>
                    <a href="https://www.fa-instagram.com"><i class="fab fa-instagram"></i>instagram</a>
                    <a href="https://www.youtube.com"><i class="fab fa-youtube"></i>youtube</a>
                    <a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i>linkedin</a>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima at voluptatem ducimus aspernatur
                    sapiente! Nam, enim, explicabo fuga veritatis quibusdam perspiciatis possimus omnis temporibus quod
                    fugiat velit exercitationem cupiditate necessitatibus!

                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 box" data-aos="fade-left" data-aos-delay="150"
                    data-aos-duration="1200">
                    <h3>Join a Newsletter</h3>
                    <a href="#">your email <i class="fas fa-envelope ms-2"></i></a>
                    <br>
                    <input type="search" name="search" placeholder="enter your eamil" class="s-box">
                    <input type="submit" value="send" class="btn-1">
                    <p>Onner Md Saiful Islam</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =========ending======= -->



    <!-- =======creator div ======? -->
    <?php
    $sql = 'select*from creator_table';
    $result = $connection->query($sql);
    $row = mysqli_fetch_array($result); ?>
    <div class="creat">
        <div class="wow animate__zoomIn">
            &hellip; Created by <span>
                <?php echo $row['name'] ?>
            </span> year <span>
                <?php echo date('F', strtotime($row['year'])); ?>
                <?php echo date('j', strtotime($row['year'])); ?>,
                <?php echo date('Y', strtotime($row['year'])); ?>

            </span><span><a href="admin.php">admin</a></span>
        </div>
    </div>
    <!-- ==ending==== -->












    <script src="./js/jquery.js"></script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="./js/wow.min.js"></script>

    <script src="./js/bootstrap.bundle.min.js"></script>

    <script src="./js/owl.carousel.js"></script>

    <script src="./js/owl.carousel.min.js"></script>

    <script src="./js/jquery.lettering.js"></script>

    <script src="./js/jquery.textillate.js"></script>


    <script src="./js/sqript.js"></script>


    <script>
        AOS.init({
            offset: 150,
            duration: 1000,
        });
        new WOW().init({
            loop: true,
        });

        $(function () {
            $('.tlt').textillate({
                loop: true,
                minDisplayTime: 100,
            });
        })


    </script>

</body>

</html>