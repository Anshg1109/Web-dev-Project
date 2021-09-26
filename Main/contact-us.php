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
    <title>Health-Flix/contact-us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/UI.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./Main.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: sticky; top: 0px; z-index: 10; ">
        <div class="container-fluid">
        <span id="logo"><a class="navbar-brand" href="#"><img src="https://fontmeme.com/permalink/210706/eb3a27c8b923ad5f681086d639fd6334.png" alt="netflix-font"></a></span>
            <!-- <a class="navbar-brand" href="#">Health-Flix</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index2.php"><i class="fas fa-home"></i> Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-dumbbell"></i> Our Services
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index2.php">Regular Membership</a></li>
                            <li><a class="dropdown-item" href="index2.php">Gold Membership</a></li>
                            <li><a class="dropdown-item" href="index2.php">Diamond Membership</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="index2.php">Custom Pack</a></li>
                        </ul>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="./contact-us.php" tabindex="-1"><i class="fas fa-id-card-alt"></i> Contact us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="./about-us.php" tabindex="-1"> <i class="fas fa-address-card"></i> About us</a>
                    </li>
                </ul>


                <p  style="color:aliceblue; padding-right:10px; margin-top:15px ">Hello!, <?php echo $user_data['username']; ?></p>
          <a class="btn btn-outline-success" href="index1.html">log out </a>

            </div>
        </div>
    </nav>

<section class="jumbotron text-center" >
    <div class="container">
        <h1 class="jumbotron-heading">Health-Flix</h1>
        <p class="lead mb-0" style="color: white;">A Step For Your Health</p>
    </div>
</section>

<hr style="height:2px;border-width:0;color:gray;background-color:gray">
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index1.html" style="color: white;">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: white;">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-success text-white"><i class="fa fa-envelope"></i> Contact us.
                </div>
                <div class="card-body bg-dark text-white">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-success text-right">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-dark mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                <div class="card-body text-white">
                        <p>VAMT Labs</p>
                        <p>75008 Chandigarh</p>
                        <p>India</p>
                        <p>Email : healthflix@gmail.com</p>
                        <p>Tel. 1800 1111 0000</p>

                </div>

            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
<!-- Footer -->
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
                        <li><a href="./index2.php">Home</a></li>
                        <li><a href="./index2.php">Our Services</a></li>
                        <li><a href="./contact-us.php" target="_blank">Contact-Us</a></li>
                        <li><a href="./about-us.php" target="_blank">About-Us</a></li>
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
                        <li><i class="fa fa-envelope mr-2"></i> heatlthflix@gmail.com</li>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>