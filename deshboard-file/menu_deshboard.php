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
            background: url(../images/home-bg.jpg) repeat !important;
            background-size: contain;
            background-position: center;
            border: 2px solid black;
        }

        .card-body .btn-1 {
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
            display: inline-block;
            font-weight: 600 !important;
            cursor: pointer;
            color: black;
            /* display: inline-block !important; */
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

        .btn-4 {
            background: transparent !important;
        }

        .btn-4:hover .arrow {
            padding-right: .5rem;
            transition: .2s linear;
        }

        .btn-4 {
            color: white !important;
            text-transform: capitalize !important;
        }

        .btn-4.active {
            color: orange !important;
        }

        .btn-2:hover {
            background-color: orchid;
            color: white;
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
                        <div class="col-xl-2 col-md-2 "><a class="btn-2" href="../deshboard.php"><i
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


                                <ul class="nav nav-pills mb-3 list-group" id="pills-tab" role="tablist">

                                    <li class="nav-item" role="presentation">

                                        <button class="nav-link active btn-4" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-menu_dessert" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true"><i
                                                class="fas fa-arrow-right text-white arrow"></i> menu dessert items
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn-4" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-menu_burgar" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false"><i
                                                class="fas fa-arrow-right text-white arrow"></i> menu bargar items
                                        </button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn-4" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-menu_cake" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false"><i
                                                class="fas fa-arrow-right text-white arrow"></i> menu cake items
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn-4" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-menu_pizza" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false"><i
                                                class="fas fa-arrow-right text-white arrow"></i> menu pizza items
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn-4" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-menu_dish" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false"><i
                                                class="fas fa-arrow-right text-white arrow"></i> menu dish items
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn-4" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-menu_drink" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false"><i
                                                class="fas fa-arrow-right text-white arrow"></i> menu drink items
                                        </button>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="tab-content col-xl-9" id="pills-tabContent">



                            <!-- =====================menu dessert div=========== -->
                            <div class="tab-pane fade show active" id="pills-menu_dessert" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="card-body">
                                    <div class="card bg-dark p-1 px-2">
                                        <div class="card-header border-bottom-1 border-light">
                                            <h5 class="text-center text-white">menu dessert table</h5>
                                        </div>
                                        <br>
                                        <div>
                                            <a href="./menu_dessert_add.php" class="btn-3 text-decoration-none">add
                                                now
                                            </a>
                                        </div>
                                        <br>
                                        <table class="table  bg-dark">

                                            <thead>
                                                <tr>
                                                    <th class="border-1 border-white bg-dark text-white" scope="col">id
                                                    </th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        image</th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        title</th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        subtitle</th>

                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        price</th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $serial = 1;
                                                $sql = 'select*from menu_desserttable';
                                                $result = $connection->query($sql);
                                                while ($row = $result->fetch_assoc()) { ?>


                                                    <tr>
                                                        <th class=" border-1 border-white bg-dark text-white" scope="row">
                                                            <?php echo $serial++ ?>
                                                        </th>

                                                        <td class=" border-1 border-white bg-dark text-white">
                                                            <img src="../uploaded_img/<?php echo $row['image'] ?>"
                                                                style="width:100px; height:100px; object-fit:cover;" alt="">
                                                        </td>

                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['title'] ?>
                                                        </td>

                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['sub_title'] ?>
                                                        </td>
                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['price'] ?>
                                                        </td>

                                                        <td class=" border-1 border-white bg-dark text-white ">
                                                            <a href="menu_dessert_edit.php?id=<?php echo $row['id']; ?>"
                                                                class="btn-3 text-decoration-none d-block text-center">edit</a>
                                                            <br>
                                                            <a href="menu_dessert_delete.php?id=<?php echo $row['id']; ?>"
                                                                class="btn-3 text-decoration-none d-block text-center">delete</a>



                                                        </td>


                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <!-- ========ending========= -->


                            <!-- =========menu burgar div========  -->
                            <div class="tab-pane fade" id="pills-menu_burgar" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="card-body">
                                    <div class="card bg-dark p-1 px-2">
                                        <div class="card-header border-bottom-1 border-light">
                                            <h5 class="text-center text-white">menu burgar table</h5>
                                        </div>
                                        <br>
                                        <div>
                                            <a href="./menu_burgar_add.php" class="btn-3 text-decoration-none">add
                                                now
                                            </a>
                                        </div>
                                        <br>
                                        <table class="table  bg-dark">

                                            <thead>
                                                <tr>
                                                    <th class="border-1 border-white bg-dark text-white" scope="col">id
                                                    </th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        image</th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        title</th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        subtitle</th>

                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        price</th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $serial = 1;
                                                $sql = 'select*from menu_burgartable';
                                                $result = $connection->query($sql);
                                                while ($row = $result->fetch_assoc()) { ?>


                                                    <tr>
                                                        <th class=" border-1 border-white bg-dark text-white" scope="row">
                                                            <?php echo $serial++ ?>
                                                        </th>

                                                        <td class=" border-1 border-white bg-dark text-white">
                                                            <img src="../uploaded_img/<?php echo $row['image'] ?>"
                                                                style="width:100px; height:100px; object-fit:cover;" alt="">
                                                        </td>

                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['name'] ?>
                                                        </td>

                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['sub_title'] ?>
                                                        </td>
                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['price'] ?>
                                                        </td>

                                                        <td class=" border-1 border-white bg-dark text-white ">
                                                            <a href="menu_burgar_edit.php?id=<?php echo $row['id']; ?>"
                                                                class="btn-3 text-decoration-none d-block text-center">edit</a>
                                                            <br>
                                                            <a href="menu_burgar_delete.php?id=<?php echo $row['id']; ?>"
                                                                class="btn-3 text-decoration-none d-block text-center">delete</a>
                                                        </td>
                                                    </tr>

                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- =====ending===== -->


                            <!-- =========menu caek div========  -->
                            <div class="tab-pane fade" id="pills-menu_cake" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="card-body">
                                    <div class="card bg-dark p-1 px-2">
                                        <div class="card-header border-bottom-1 border-light">
                                            <h5 class="text-center text-white">menu cake table</h5>
                                        </div>
                                        <br>
                                        <div>
                                            <a href="./menu_cake_add.php" class="btn-3 text-decoration-none">add
                                                now
                                            </a>
                                        </div>
                                        <br>
                                        <table class="table  bg-dark">

                                            <thead>
                                                <tr>
                                                    <th class="border-1 border-white bg-dark text-white" scope="col">id
                                                    </th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        image</th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        title</th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        subtitle</th>

                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        price</th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $serial = 1;
                                                $sql = 'select*from menu_caketable';
                                                $result = $connection->query($sql);
                                                while ($row = $result->fetch_assoc()) { ?>


                                                    <tr>
                                                        <th class=" border-1 border-white bg-dark text-white" scope="row">
                                                            <?php echo $serial++ ?>
                                                        </th>

                                                        <td class=" border-1 border-white bg-dark text-white">
                                                            <img src="../uploaded_img/<?php echo $row['image'] ?>"
                                                                style="width:100px; height:100px; object-fit:cover;" alt="">
                                                        </td>

                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['title'] ?>
                                                        </td>

                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['sub_title'] ?>
                                                        </td>
                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['price'] ?>
                                                        </td>

                                                        <td class=" border-1 border-white bg-dark text-white ">
                                                            <a href="menu_cake_edit.php?id=<?php echo $row['id']; ?>"
                                                                class="btn-3 text-decoration-none d-block text-center">edit</a>
                                                            <br>
                                                            <a href="menu_cake_delete.php?id=<?php echo $row['id']; ?>"
                                                                class="btn-3 text-decoration-none d-block text-center">delete</a>
                                                        </td>
                                                    </tr>

                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- =====ending===== -->


                            <!-- =========menu pizza div========  -->
                            <div class="tab-pane fade" id="pills-menu_pizza" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="card-body">
                                    <div class="card bg-dark p-1 px-2">
                                        <div class="card-header border-bottom-1 border-light">
                                            <h5 class="text-center text-white">menu pizza table</h5>
                                        </div>
                                        <br>
                                        <div>
                                            <a href="./menu_pizza_add.php" class="btn-3 text-decoration-none">add
                                                now
                                            </a>
                                        </div>
                                        <br>
                                        <table class="table  bg-dark">

                                            <thead>
                                                <tr>
                                                    <th class="border-1 border-white bg-dark text-white" scope="col">id
                                                    </th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        image</th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        title</th>

                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        subtitle</th>

                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        price</th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $serial = 1;
                                                $sql = 'select*from menu_pizzatable';
                                                $result = $connection->query($sql);
                                                while ($row = $result->fetch_assoc()) { ?>


                                                    <tr>
                                                        <th class=" border-1 border-white bg-dark text-white" scope="row">
                                                            <?php echo $serial++ ?>
                                                        </th>

                                                        <td class=" border-1 border-white bg-dark text-white">
                                                            <img src="../uploaded_img/<?php echo $row['image'] ?>"
                                                                style="width:100px; height:100px; object-fit:cover;" alt="">
                                                        </td>

                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['title'] ?>
                                                        </td>


                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['sub_title'] ?>
                                                        </td>
                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['price'] ?>
                                                        </td>

                                                        <td class=" border-1 border-white bg-dark text-white ">
                                                            <a href="menu_pizza_edit.php?id=<?php echo $row['id']; ?>"
                                                                class="btn-3 text-decoration-none d-block text-center">edit</a>
                                                            <br>
                                                            <a href="menu_pizza_delete.php?id=<?php echo $row['id']; ?>"
                                                                class="btn-3 text-decoration-none d-block text-center">delete</a>
                                                        </td>
                                                    </tr>

                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- =====ending===== -->


                            <!-- =========menu dish div========  -->
                            <div class="tab-pane fade" id="pills-menu_dish" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="card-body">
                                    <div class="card bg-dark p-1 px-2">
                                        <div class="card-header border-bottom-1 border-light">
                                            <h5 class="text-center text-white">menu dish table</h5>
                                        </div>
                                        <br>
                                        <div>
                                            <a href="./menu_dish_add.php" class="btn-3 text-decoration-none">add
                                                now
                                            </a>
                                        </div>
                                        <br>
                                        <table class="table  bg-dark">

                                            <thead>
                                                <tr>
                                                    <th class="border-1 border-white bg-dark text-white" scope="col">id
                                                    </th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        image</th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        title</th>

                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        subtitle</th>

                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        price</th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $serial = 1;
                                                $sql = 'select*from menu_dishtable';
                                                $result = $connection->query($sql);
                                                while ($row = $result->fetch_assoc()) { ?>


                                                    <tr>
                                                        <th class=" border-1 border-white bg-dark text-white" scope="row">
                                                            <?php echo $serial++ ?>
                                                        </th>

                                                        <td class=" border-1 border-white bg-dark text-white">
                                                            <img src="../uploaded_img/<?php echo $row['image'] ?>"
                                                                style="width:100px; height:100px; object-fit:cover;" alt="">
                                                        </td>

                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['title'] ?>
                                                        </td>


                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['sub_title'] ?>
                                                        </td>
                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['price'] ?>
                                                        </td>

                                                        <td class=" border-1 border-white bg-dark text-white ">
                                                            <a href="menu_dish_edit.php?id=<?php echo $row['id']; ?>"
                                                                class="btn-3 text-decoration-none d-block text-center">edit</a>
                                                            <br>
                                                            <a href="menu_dish_delete.php?id=<?php echo $row['id']; ?>"
                                                                class="btn-3 text-decoration-none d-block text-center">delete</a>
                                                        </td>
                                                    </tr>

                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- =====ending===== -->

                            <!-- =========menu drink div========  -->
                            <div class="tab-pane fade" id="pills-menu_drink" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="card-body">
                                    <div class="card bg-dark p-1 px-2">
                                        <div class="card-header border-bottom-1 border-light">
                                            <h5 class="text-center text-white">menu drink table</h5>
                                        </div>
                                        <br>
                                        <div>
                                            <a href="./menu_drink_add.php" class="btn-3 text-decoration-none">add
                                                now
                                            </a>
                                        </div>
                                        <br>
                                        <table class="table  bg-dark">

                                            <thead>
                                                <tr>
                                                    <th class="border-1 border-white bg-dark text-white" scope="col">id
                                                    </th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        image</th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        title</th>

                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        subtitle</th>

                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        price</th>
                                                    <th class=" border-1 border-white bg-dark text-white" scope="col">
                                                        action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $serial = 1;
                                                $sql = 'select*from menu_drinktable';
                                                $result = $connection->query($sql);
                                                while ($row = $result->fetch_assoc()) { ?>


                                                    <tr>
                                                        <th class=" border-1 border-white bg-dark text-white" scope="row">
                                                            <?php echo $serial++ ?>
                                                        </th>

                                                        <td class=" border-1 border-white bg-dark text-white">
                                                            <img src="../uploaded_img/<?php echo $row['image'] ?>"
                                                                style="width:100px; height:100px; object-fit:cover;" alt="">
                                                        </td>

                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['title'] ?>
                                                        </td>


                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['sub_title'] ?>
                                                        </td>
                                                        <td class=" border-1 border-white bg-dark text-white"
                                                            style="text-transform: none;">
                                                            <?php echo $row['price'] ?>
                                                        </td>

                                                        <td class=" border-1 border-white bg-dark text-white ">
                                                            <a href="menu_drink_edit.php?id=<?php echo $row['id']; ?>"
                                                                class="btn-3 text-decoration-none d-block text-center">edit</a>
                                                            <br>
                                                            <a href="menu_drink_delete.php?id=<?php echo $row['id']; ?>"
                                                                class="btn-3 text-decoration-none d-block text-center">delete</a>
                                                        </td>
                                                    </tr>

                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- =====ending===== -->







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