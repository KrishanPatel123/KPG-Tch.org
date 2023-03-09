<?php
include('Conn.php');
include("User_Contact_Data.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!--fontawesome CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!--CSS Link -->
    <link rel="stylesheet" href="Contact.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="Icon" href="Image\favicon.ico" type="Icon" sizes="128x512">

</head>

</head>

<body>
    <!-- Nav Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger ">
        <div class="container-fluid ">
            <a class="navbar-brand" href="\new Project\index.php"><img src="../Image/Logo.jpg"
                    class="rounded float-start img-fluid" alt="" style="width: 50px;" alt="Somthing Wrong"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2  mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white " href="\new Project\index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Project
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-white" href="#">Student Management System</a></li>
                            <li><a class="dropdown-item text-white" href="#">Amazon Clone</a></li>
                            <li><a class="dropdown-item text-white" href="#">Shopping Websites</a></li>
                            <li><a class="dropdown-item text-white" href="#">Portfolio</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Contact.php" tabindex="-1" aria-disabled="true">Contact
                            Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- -------------------------------------------- -->
    <from class="flex" method="POST">
        <div class="mb-3 col-2" style="margin-left: 120px;margin-top:350px;">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="your name"
                style="font-style:italic;" name="U-Name" required>
        </div>
        <div class="mb-3 col-2" style="margin-left: 120px;">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"
                style="font-style:italic;" name="U-Email" required>
        </div>
        <div class="mb-3 col-3" style="margin-left: 120px;">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style="font-style:italic;"
                name="textaerea_U"></textarea>
        </div>
        <input type="Submit" class="btn btn-warning" style="margin-left: 270px;" name="submit" value="Submit">
    </from>
    </body>

</html>