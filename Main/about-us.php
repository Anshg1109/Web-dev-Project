<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Health-Flix.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/UI.css">

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./Main.js"></script>

</head>

<body>

    <div class="bg-linear-gradient(196deg, rgba(0, 0, 0, 1) 0%, rgba(6, 9, 28, 1) 100%) text-light">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: sticky; top: 0px; z-index: 10; ">
            <div class="container-fluid">
                <span id="logo"><a class="navbar-brand" href="#"><img src="https://fontmeme.com/permalink/210706/eb3a27c8b923ad5f681086d639fd6334.png" alt="netflix-font"></a></span>
                <!-- <a class="navbar-brand" href="#">Health-Flix</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./index1.html"><i class="fas fa-home"></i> Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-dumbbell"></i> Our Services
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index1.html">Regular Membership</a></li>
                                <li><a class="dropdown-item" href="index1.html">Gold Membership</a></li>
                                <li><a class="dropdown-item" href="index1.html">Diamond Membership</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item " href="index1.html">Custom Pack</a></li>
                            </ul>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="./contactus.html" tabindex="-1"><i class="fas fa-id-card-alt"></i> Contact us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="./aboutus.html" tabindex="-1"> <i class="fas fa-address-card"></i> About us</a>
                        </li>
                    </ul>

                    <p style="color:aliceblue; padding-right:10px; margin-top:15px ">Hello!,
                        <?php echo $user_data['username']; ?>
                    </p>
                    <a class="btn btn-outline-success" href="index1.html">log out </a>

                </div>
            </div>
        </nav>

        <div class="image-aboutus-banner" style="margin-top:70px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="lg-text">About Us</h1>
                        <p class="image-aboutus-para">Health-Flix and Chill</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container paddingTB60">
            <div class="row">

                <!-- Blog Post Content Column -->
                <div class="col-lg-8">
                    <hr>
                    <h2>Our Mission</h2>
                    <hr>

                    <!-- Post Content -->
                    <p class="lead">Health-Flix is a catalyst to restart the #remain_healthy meantality again in the minds of not only the youth but in every citizen's. We always aim to give the best output from us and keep changing our system to provide the updated
                        and best ways for being healthy.</p>
                    <hr>
                    <hr>
                    <h2>Community</h2>
                    <hr>
                    <p>Fostering community is at the heart of what we do at Health-Flix. Through our social communities we bring health seekers together so that they can get the best in the pursuit of well-being.</p>
                    <hr>
                    <hr>
                    <h2>Privacy Policy</h2>
                    <p>Health-Flix is dedicated to protect the privacy of its customers. Because customer privacy is our top priority, we proactively embed privacy into the development and curation of our services. At any time, all customers — regardless
                        of geographical location — can make a data subject access request by using our rights requst. In doing so, customers can access, delete, restrict, or correct all personal information that they have shared with us. Health-Flix will
                        share your personal information with third-party marketers only after you have provided explicit consent to do so. We are committed to the advancement of customer privacy initiatives.
                    </p>
                    <hr>
                    <hr>
                    <h2>Terms of Use</h2>
                    <p>Our content is for the benefit of the society in terms of physical health and menatal health only. Always seek the advice of your physician or other qualified health provider with any questions you may have regarding a medical condition
                        if you get any problem regarding the work-outs. If you think you may have a medical emergency, call your doctor or 911 immediately. Our websites and apps operate under a code of conduct to encourage welcoming, diverse, and inclusive
                        interactions; and to discourage harassment of any kind. We support authors creative rights by investigating, and removing where appropriate, materials that infringe on an author’s copyright.</p>

                    <hr>
                </div>

                <!-- Blog Sidebar Widgets Column -->
                <div class="col-md-4" style="padding-left:64px">

                    <!-- Blog Search Well -->
                    <div class="well">

                        <div class="input-group">
                            <span class="input-group-btn">
                                <a href="index1.html" class="btn btn-sm btn-success"><i class="fas fa-arrow-circle-left"></i> Back to home</a>
                            </span>
                        </div>
                        <!-- /.input-group -->
                    </div><br>

                    <!-- Blog Categories Well -->
                    <div class="well">
                        <h4>Quick Links</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="./index1.html">Our-Services</a>
                                    </li>
                                    <li><a href="./Sign-in.html">Join Us !</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="./contactus.html">Contact-Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>

                    <!-- Side Widget Well -->
                    <!-- <div class="well bgcolor-skyblue"> -->
                    <!-- <h4>Side Widget Well</h4> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p> -->
                    <!-- </div> -->

                </div>

            </div>
        </div>


        <div class="cta-sektion cta-padding35">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <h3><span class="glyphicon glyphicon-cog "></span> <b>Feel free to contact us for any kind of queries</b></h3>
                    </div>
                    <!-- <div class="col-md-3 col-sm-3 col-xs-12 Tpadding10"> -->
                    <!-- <button type="button" class="btn btn-primary site-btn">Start Right Now</button> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <hr>
        <footer class="text-light ">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-4 col-xl-3">
                        <h5>About</h5>
                        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                        <p class="mb-0">
                            © 2020-2021 Health-FLix a Red Ventures Company. All rights reserved. Our website services, content, and products are for informational purposes only. Healthline Media does not provide medical advice, diagnosis, or treatment.
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                        <h5>Informations</h5>
                        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                        <ul class="list-unstyled">
                            <li><a href="./index1.html">Home</a></li>
                            <li><a href="./index1.html">Our Services</a></li>
                            <li><a href="./contactus.html" target="_blank">Contact-Us</a></li>
                            <li><a href="./aboutus.html" target="_blank">About-Us</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                        <h5>Social Handles</h5>
                        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                        <ul class="list-unstyled">
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3">
                        <h5>Contact</h5>
                        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-home mr-2"></i> Health-Flix</li>
                            <li><i class="fa fa-envelope mr-2"></i> healthflix@gmail.com</li>
                            <li><i class="fa fa-phone mr-2"></i> 1800 1111 0000</li>
                            <li><i class="fa fa-print mr-2"></i> + 91 12 14 15 16</li>
                        </ul>
                    </div>
                    <div class="col-12 copyright mt-3">
                        <p class="float-left">
                            <a href="#">Back to top</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>