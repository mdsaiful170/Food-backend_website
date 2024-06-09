<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>


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

    ?>



    <h3 class="text-center text-danger pt-5 fw-bold">
        <?php
        session_start();
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
        }
        session_destroy();
        ?>
    </h3>
    <section class="register mt-5">

        <?php $sql = 'select*from user_table1';
        $result = $connection->query($sql);
        $row = mysqli_fetch_array($result);
        ?>
        <form action="./update-file/user_register2.php" method="POST" class="box wow animate__zoomInRight">

            <h2>register now</h2>
            <input type="text" name="name" class="box-1" placeholder="enter your name" required maxlength="50"
                oninput="if(this.value = this.value.replace(/\s/g, ''))" id="">

            <input type="email" name="email" class="box-1" required maxlength="50" placeholder="enter your email"
                oninput="if(this.value = this.value.rolace(/\s/g, ''))" id="">

            <input type="number" name="number" class="box-1" required maxlength="9999999999"
                placeholder="enter your phone" oninput="if(this.value = this.value.replace(/\s/g, ''))" id="">
            <input type="password" name="password" class="box-1" placeholder="enter your password" maxlength="12" id=""
                oninput="if(this.value = this.value.replace(/\s/g, ''))">
            <input type="password" name="con_password" class="box-1" placeholder="conforam your password" maxlength="12"
                id="" oninput="if(this.value = this.value.replace(/\s/g, ''))">
            <input type="submit" value="register now" class="sub-btn">

            <p>already have an accoutn?<a href="login.php">login now</a></p>
        </form>
    </section>












    <script src="./js/jquery.js"></script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="./js/wow.min.js"></script>

    <script src="./js/owl.carousel.js"></script>

    <script src="./js/owl.carousel.min.js"></script>

    <script src="./js/jquery.lettering.js"></script>

    <script src="./js/jquery.textillate.js"></script>

    <script src="./js/bootstrap.bundle.min.js"></script>

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