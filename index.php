<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPG-Tec</title>
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
    <!-- Search Bar link -->
    <script src="js\search.js"></script>
    <!--CSS Link -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/style.min.css">
    <!-- Favicon -->
    <link rel="Icon" href="Image\favicon.ico" type="Icon" sizes="128x512">

</head>

<body>
    <!-- Nav Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger ">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php"><img src="image/Logo.jpg" class="rounded float-start img-fluid"
                    alt="" style="width: 50px;" alt="Somthing Wrong"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2  mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white " href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Registation_User/About.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Project
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown" id="Unorderlist">
                            <li><a class="dropdown-item text-white" href="#" id="project">Student Management System</a></li>
                            <li><a class="dropdown-item text-white" href="#" id="project">Amazon Clone</a></li>
                            <li><a class="dropdown-item text-white" href="#" id="project">Shopping Websites</a></li>
                            <li><a class="dropdown-item text-white" href="#" id="project">Portfolio</a></li>
                        </ul>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Skill
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown" id="Unorderlist">
                            <li><a class="dropdown-item text-white" href="#" id="project">Python</a></li>
                            <li><a class="dropdown-item text-white" href="#" id="project">HTML</a></li>
                            <li><a class="dropdown-item text-white" href="#" id="project">CSS</a></li>
                            <li><a class="dropdown-item text-white" href="#" id="project">JS</a></li>
                            <li><a class="dropdown-item text-white" href="#" id="project">PHP</a></li>
                            <li><a class="dropdown-item text-white" href="#" id="project">React</a></li>
                            <li><a class="dropdown-item text-white" href="#" id="project">Mysql</a></li>
                            <li><a class="dropdown-item text-white" href="#" id="project">Ajax</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Registation_User/Contact.php" tabindex="-1"
                            aria-disabled="true">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Registation_User/c.php" tabindex="-1"
                            aria-disabled="true">Login</a>
                    </li>
                    </li>
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Project" aria-label="Search" id="surch"
                        onkeyup="search()">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
    <!-- Content -->
    <img src="image/Bg-ground.jpeg" class="img-fluid" alt="..." width="100%">
    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" style="background-color: #3b5998;color:white;"
                    href="https://www.facebook.com/profile.php?id=100010179390829" role="button">
                    <i class=" fa fa-facebook"></i>
                </a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" style="background-color:#55acee; color:white;"
                    href="#!" role="button"><i class="fa fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" style="background-color: #dd4b39; color:white;"
                    href="#!" role="button"><i class="fa fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" style="background-color: #f09433;color:white;    "
                    href="https://www.instagram.com/coder_boy_1319092/" role="button"><i
                        class="fa fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" style="background-color: #0082ca; color:white;"
                    href="https://www.linkedin.com/in/kishan1319092/" role="button"><i class="fa fa-linkedin"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" style="background-color: #333333; color:white;"
                    href="https://github.com/KrishanPatel123" role="button"><i class="fa fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
            </form>
            </section>
            <!-- Section: Form -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Success is all about taking new initiatives. I started developing KPG-TEC in the year 2022. At the
                    moment, I was providing training on Python & Web Development. Meanwhile, I thought, why not to
                    spread my knowledge to the world. So I started developing KPG-TEC.
                </p>
            </section>
            <!-- Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">KPG-Tec</h5>
                        <p>God helps you when you help someone, it was a matter of time when I was doing a bachelor
                            degree in the university where we studied, we used to see a lot of students to make ppt or
                            make notes of any subject Used to go here and there on the website and they used to have a
                            lot of problems, then one thing came to my mind why not make a website on which all the
                            notes should be put in easy language and we made it and hope that now the problem of many
                            students would have been solved.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Skill</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" class="text-white">HTML</a>
                            <li>
                                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" class="text-white">CSS</a>
                            </li>
                            <li>
                                <a href="https://jquery.com/" class="text-white">Jquery</a>
                            </li>
                            </li>
                            <li>
                                <a href="https://www.codecademy.com/catalog/language/python"
                                    class="text-white">Python</a>
                            </li>
                            <li>
                                <a href="https://www.w3schools.com/php/" class="text-white">PHP</a>
                            </li>
                            <li>
                                <a href="https://reactjs.org/" class="text-white">Recat</a>
                            </li>
                            <li>
                                <a href="https://www.hostinger.com/tutorials/what-is-mysql" class="text-white">Mysql</a>
                            </li>
                            <li>
                                <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX"
                                    class="text-white">Ajax</a>
                            </li>
                            <li>
                                <a href="https://mdbootstrap.com/docs/standard/" class="text-white">Bootstrap 5</a>
                            </li>
                            <li>
                                <a href="https://www.javascripttutorial.net/" class="text-white">Javascript</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">USEFUL LINKS</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="https://www.htmlelements.com/" class="text-white">HTML ELEMENT</a>
                            </li>
                            <li>
                                <a href="https://codepen.io/trending" class="text-white">Codepen</a>
                            </li>
                            <li>
                                <a href="https://mdbootstrap.com/" class="text-white">open-source UI Kits</a>
                            </li>
                            <li>
                                <a href="https://cdnjs.com/" class="text-white">All CDN</a>
                            </li>
                            <li>
                                <a href="https://getbootstrap.com/" class="text-white">Bootstrap v5</a>
                            </li>
                            <li>
                                <a href="https://www.w3schools.com/default.asp" class="text-white">Tutorials</a>
                            </li>
                            <li>
                                <a href="https://www.jqueryscript.net/" class="text-white">Free jQuery Plugins</a>
                            </li>
                            <li>
                                <a href="https://docs.python.org/3/py-modindex.html" class="text-white">Python
                                    Module</a>
                            </li>
                            <li>
                                <a href="https://chat.openai.com/chat" class="text-white">ChatGPT</a>
                            </li>
                            <li>
                                <a href="https://nerdcave.com/tailwind-cheat-sheet" class="text-white">CSS
                                    cheat-sheet</a>

                            </li>
                            <li>
                                <a href="https://www.freepik.com/" class="text-white">freepik</a>

                            </li>
                            <li>
                                <a href="https://www.freecodecamp.org/news" class="text-white">freecodecamp</a>

                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">CONTACT</h5>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224568.30312279146!2d76.8493175349761!3d28.42288550935018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19d582e38859%3A0x2cf5fe8e5c64b1e!2sGurugram%2C%20Haryana!5e0!3m2!1sen!2sin!4v1677964754639!5m2!1sen!2sin"
                            width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>


                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="https://KPG-Tec.in/">KPG-Tec.in</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>

</html>