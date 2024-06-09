<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deshboard page</title>

    <link rel="stylesheet" href="../css/animate.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">

    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <!-- <link rel="stylesheet" href="./css/style.css"> -->

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <style>
        body {
            padding: 2rem;
            text-transform: capitalize;
            /* background-color:var(--white); */
            background: url(../images/home-bg.jpg) repeat !important;
            background-size: contain;
            background-position: center;
        }

        .card-box {
            /* background: url(./images/home-bg.jpg) repeat !important; */
            background-size: contain;
            background-position: center;
            border: 2px solid black;
        }

        .btn-1 {
            background-color: orchid !important;
            font-size: 1.2rem;
            font-weight: 500;
            text-align: center;
            border-radius: 8px;
            padding: .6rem;
            cursor: pointer;
        }

        .btn-1:hover {
            background-color: white !important;
            color: black !important;
        }

        .btn-3 {
            padding: .5rem 2rem;
            border-radius: 8px;
            background-color: orchid;
            font-size: 1rem;
            font-weight: 600 !important;
            cursor: pointer;
            color: black;
        }

        .btn-3:hover {
            background-color: white !important;
            color: black !important;
        }

        .btn-2 {
            padding: .5rem 2rem;
            border-radius: 8px;
            background-color: black;
            font-size: 1rem;
            font-weight: 600 !important;
            cursor: pointer;
            color: whitesmoke;
        }

        .btn-2:hover {
            background-color: orchid;
            color: white;
        }

        form input {
            border: 1px solid black !important;
            overflow: hidden;
            background-color: aliceblue;
        }

        textarea {
            border: 1px solid black !important;
            background-color: aliceblue;


        }
    </style>
</head>

<body>
    <?php


    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'food_db';


    $connection = mysqli_connect($hostname, $username, $password, $dbname);

    ?>

    <div class="container-fluid">
        <div class="row mt-2 ">
            <div class="col-xl-12  card-body">
                <div class="card-header text-center pb-2">
                    <h1>Admin Deshboard </h1>
                </div>
                <div class="card card-box border-1 shadow-2">
                    <div class="row d-flex align-itmes-center justify-content-center text-center py-2 pt-3">
                        <div class="col-xl-2 col-md-2 "><a class="btn-2" href="./home_deshboard.php"><i
                                    class="fas fa-arrow-left "></i></a></div>
                        <h5 class="text-danger fw-bold col-xl-3 col-md-2  ">Menu Deshboard</h5>
                        <a class=" col-xl-4 col-md-4 card-link fs-5 fw-bold text-dark text-decoration-none  class"
                            href="#">Admin
                            Name:
                            MD.Saiful
                            Islam</a>
                        <a class="col-xl-2 col-md-3 card-link fs-5 fw-bold "
                            href="../admin/logout.php"><u>Logout</u></a>

                    </div>
                    <hr class="border-dark">
                    <div class="row px-2">
                        <div class="col-xl-3 card-body">
                            <div class="card bg-dark" style="min-height:100%">
                                <div class="card-header border-bottom-1 border-light">
                                    <h5 class="text-center text-white">update</h5>
                                </div>
                                <ul class="text-white">
                                    <li class="mt-2"><a class="text-light text-decoration-none  " href="#">menu dsih
                                            edit</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="row w-100">
                                <div class="card-body">
                                    <div class="card p-1 px-2" style="background:#ff9966;">
                                        <div class="card-header border-bottom-1 border-light">
                                            <h5 class="text-center text-dark">edit form</h5>
                                        </div>

                                        <?php
                                        $id = $_GET['id'];
                                        $sql = "select * from menu_dishtable where id='$id'";
                                        $result = $connection->query($sql);
                                        $row = mysqli_fetch_array($result);
                                        ?>
                                        <br>

                                        <img class="d-block m-auto" src="../uploaded_img/<?php echo $row['image'] ?>"
                                            style="width:150px;height:150px; object-fit:cover;">

                                        <form action="menu_dish_edit2.php" method="POST"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>" id="">
                                            <div class="p-3">

                                                <div class="mb-3">
                                                    <label class="fs-6 fw-bold mb-1 text-dark">select Image</label>
                                                    <input type="file" class="form-control" value="<?php echo $row['image'] ?>" name="image" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="fs-6 fw-bold mb-1 text-dark">sub_title</label>
                                                    <input type="text" class="form-control" value="<?php echo $row['sub_title'] ?>" name="sub_title" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="fs-6 fw-bold mb-1 text-dark">title</label>
                                                    <input type="text" class="form-control" value="<?php echo $row['title'] ?>" name="title" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="fs-6 fw-bold mb-1 text-dark">price</label>
                                                    <input type="number" class="form-control" value="<?php echo $row['price'] ?>" name="price" required>
                                                </div>


                                                <br>
                                                <input type="submit" value="edit now"
                                                    class="btn btn-dark py-2 border-0 w-25 d-block m-auto">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>












    <script src="./js/jquery.js"></script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


    <script src="../js/bootstrap.bundle.min.js"></script>

    <script src="../js/owl.carousel.js"></script>

    <script src="../js/owl.carousel.min.js"></script>

    <script src="../js/sqript.js"></script>


</body>

</html>