<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduMetaFis</title>

    <link rel="icon" type="image/x-icon" href="assets/images/logo/logo-icon.png">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mail">
                        <p class="m-0">
                            <i class="fa-solid fa-phone pe-2"></i>
                            +91 1234567890
                        </p>
                        <p class="m-0 ps-4">
                            <i class="fa-regular fa-envelope pe-2"></i>
                            metafis8@gmail.com
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="top-social-icon">
                        <a class="pe-3" href="">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a class="pe-3" href="">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a class="pe-3" href="">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a class="pe-3" href="">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light edumetfis-navbar" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index"><img src="assets/images/logo/logo1.png" alt="image"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <img class="img-fluid hamburger" src="assets/images/hamburger.png" alt="image">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item home-icon">
                        <a class="nav-link nav-active active " aria-current="page" href="index">
                            <img class="home-icon" src="assets/images/banner/home.png" alt="image">
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="study-abroad">Study Abroad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="online-tutorial">Online Tutorial</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="services">Services</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="events" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Events
                        </a>
                        <ul class="dropdown-menu drop-list">
                            <li><a class="dropdown-item" href="sports-event">Sports Events</a></li>
                            <li><a class="dropdown-item" href="education-event">Education Events</a></li>

                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link " href="blog">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link contact-nav-link" href="contact">Contact Us</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- navbar end -->

    <script>
        document.querySelectorAll('.nav-active').forEach((item) => item.classList.add('active'));
    </script>