<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://kit.fontawesome.com/abad5402ea.js" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title><?php if ( $title != 'Welcome' ) { echo $title . ' | '; } ?>ASBAQ 2020 Make it Happen. Make it Matter.</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128963342-11"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-128963342-11');
        </script>
    </head>
    <body>
        <div class="header">
            <div class="container py-3">
                <div class="row align-items-center py-5">
                    <div class="col-md-6">
                        <a href="./"><img src="img/logo.png" width="460" alt="ASBAQ 2020 Logo" class="img-fluid mb-4 mb-md-0"></a>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <img src="img/tagline.png" width="400" alt="Mackay, 27-29 May 2020. Make it Happen. Make it Matter." class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="container">
                <div class="row">
                    <div class="col m-0">
                        <nav class="navbar navbar-expand-lg p-0">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link <?php if( in_array($title, array("Welcome")) ) { echo "active"; }?>" href="index.php">Welcome</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if( in_array($title, array("Registration")) ) { echo "active"; }?>" href="registration.php">Registration</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if( in_array($title, array("Preliminary Program")) ) { echo "active"; }?>" href="preliminary-program.php">Program</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if( in_array($title, array("Accommodation")) ) { echo "active"; }?>" href="accommodation.php">Accommodation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if( in_array($title, array("Speakers")) ) { echo "active"; }?>" href="speakers.php">Speakers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if( in_array($title, array("Venue")) ) { echo "active"; }?>" href="venue.php">Venue</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle <?php if( in_array($title, array("Sponsors & Exhibitors", "Sponsorship & Exhibition")) ) { echo "active"; }?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sponsorship & Exhibition<i class="far fa-angle-down"></i> </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="sponsorship-and-exhibition.php">Sponsorship Information</a>
                                            <a class="dropdown-item" href="confirmed-sponsors-and-exhibitors.php">Sponsors and Exhibitors</a>
                                        </div>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link <?php if( in_array($title, array("Sponsorship & Exhibition")) ) { echo "active"; }?>" href="sponsorship-and-exhibition.php">Sponsorship & Exhibition</a>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a class="nav-link <?php if( in_array($title, array("Contact Us")) ) { echo "active"; }?>" href="contact-us.php">Contact Us</a>
                                    </li> -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle <?php if( in_array($title, array("Contact Us", "Media")) ) { echo "active"; }?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact Us<i class="far fa-angle-down"></i> </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="contact-us.php">Contact</a>
                                            <a class="dropdown-item" href="media.php">Media</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="title">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php echo $title; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if ( $title == "Welcome"){ ?>

            <div class="quote">
                <div class="container">
                    <div class="row">
                        <div class="col">
                <strong>“Some people dream of success,<div class="d-none d-xl-block"></div> while other people get up every morning<div class="d-none d-xl-block"></div> and make it happen.”</strong>
                Wayne Huizenga
            </div>
            </div>
            </div>
            </div>
        <?php } ?>
        <?php if ( $title == "Venue"){ ?>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.210736008186!2d149.1797389154813!3d-21.144010182663678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6bdbd3f6fd49b291%3A0xd7fb8d8a6668aaa8!2sMackay%20Entertainment%20%26%20Convention%20Centre%20(MECC)!5e0!3m2!1sen!2sau!4v1570079801588!5m2!1sen!2sau" width="100%" height="420" class="d-block" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <?php } ?>

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col p-5">
