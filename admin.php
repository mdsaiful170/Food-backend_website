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



    <section class="login" style="margin-top:10rem">

        <?php $sql = 'select*from admin_table';
        $result = $connection->query($sql);
        $row = mysqli_fetch_array($result);
        ?>
        <form action="./admin/admin_login.php" method="POST" class="box wow animate__zoomInUp">
            <h3 class="text-danger">
                <?php
                session_start();
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                }
                session_destroy();
                ?>
            </h3>
            <br>
            <h4>admin:<span class="text-danger px-2">admin</span> password: <span class="text-danger">111</span></h4>
            <h2>login now</h2>
            <div class="inputbox">
                <label for="" class="fas fa-envelope"></label>
                <input type="text" name="username" maxlength="50" placeholder="email" required id=""
                    oninput="this.value = this.value.replace(/\s/g, '')">
            </div>

            <div class="inputbox">
                <label for="" class="fas fa-key"></label>
                <input type="password" name="password" maxlength="12" placeholder="password" required id=""
                    oninput="this.value = this.value.replace(/\s/g,'')">
            </div>
            <p>dont have an account?<a href="admin_register.php">register now</a></p>

            <input type="submit" value="login now" class="btn-1">

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