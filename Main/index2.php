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
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/UI.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./Main.js"></script>
</head>

<body>

    <!-- <video id="videoBG" poster="poster.JPG" autoplay muted loop> -->
    <!-- <source src="../Images/bgvid2.mp4" type="video/mp4"> -->
    <!-- </video> -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: sticky; top: 0px; z-index: 10;">
        <div class="container-fluid">
        <span id="logo"><a class="navbar-brand" href="#"><img src="https://fontmeme.com/permalink/210706/eb3a27c8b923ad5f681086d639fd6334.png" alt="netflix-font"></a></span>
            <!-- <a class="navbar-brand" href="#">Health-Flix</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index2.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-dumbbell"></i> Our Services
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#our-services">Regular Membership</a></li>
                            <li><a class="dropdown-item" href="#our-services">Gold Membership</a></li>
                            <li><a class="dropdown-item" href="#our-services">Diamond Membership</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item " data-bs-toggle="modal" data-bs-target="#exampleModal">Custom Pack</a></li>
                        </ul>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="./contact-us.php" target="_blank" tabindex="-1"><i class="fas fa-id-card-alt"></i> Contact us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="./about-us.php" target="_blank" tabindex="-1"> <i class="fas fa-address-card"></i> About us</a>
                    </li>
                </ul>


                <p style="color: white; padding-right:20px; padding-top:15px">Hello, <?php echo $user_data['username']; ?></p>
          <a href="index.html" class="btn btn-outline-success">Log-Out </a>

            </div>
        </div>
    </nav>


    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../Images/slide1.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../Images/slide2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../Images/slide3.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <h2 style="text-align: center; color: white;">Our Services</h2>
    <hr style="height:2px;border-width:0;color:rgba(0, 0, 0, 0);background-color:rgba(0, 0, 0, 0)">

    <div class="container mx-auto mt-4" id="our-services">
        <div class="row">
            <div class="col-md-4">

                <div class="card" style="width: 23rem;  margin: auto; height: 553px; ">
                    <img src="../Images/Background Option-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <h5>Regular Membership</h5>
                            <h6>Perks:</h6>

                            <span class="check">Daily Work-Out Sessions</span><span>✔️</span><br>
                            <span class="check">Daily Meditation Sessions</span><span>✔️</span><br>
                            <span class="uncheck">Live Panel Discussions</span><span>✖️</span><br>
                            <span class="uncheck">Get a crown VIP Badge</span><span>✖️</span><br>
                            <span class="uncheck">Get Health-Flix Accessories</span>✖️<span></span><br>
                        </p>
                        <a class="btn btn-lg btn-dark" href="https://paytm.com/" target="_blank">₹200/month</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">

                <div class="card" style="width: 23rem; margin: auto;">
                    <img src="../Images/Background Option-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <h5>Gold Membership</h5>
                            <h6>Perks:</h6>

                            <span class="check">Daily Work-Out Sessions</span><span>✔️</span><br>
                            <span class="check">Daily Meditation Sessions</span><span>✔️</span><br>
                            <span class="check">Live Panel Discussions</span><span>✔️</span><br>
                            <span class="uncheck">Get a crown VIP Badge</span><span>✖️</span><br>
                            <span class="uncheck">Get Health-Flix Accessories</span>✖️<span></span><br>
                        </p>
                        <a class="btn btn-lg btn-dark" href="https://paytm.com/" target="_blank">₹300/month</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="card" style="width: 23rem; margin: auto;">
                    <img src="../Images/dumbbell.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <h5>Diamond Membership</h5>
                            <h6>Perks:</h6>

                            <span class="check">Daily Work-Out Sessions</span><span>✔️</span><br>
                            <span class="check">Daily Meditation Sessions</span><span>✔️</span><br>
                            <span class="check">Live Panel Discussions</span><span>✔️</span><br>
                            <span class="check">Get a crown VIP Badge</span><span>✔️</span><br>
                            <span class="check">Get Health-Flix Accessories</span>✔️<span></span><br>
                        </p>
                        <a class="btn btn-lg btn-dark" href="https://paytm.com/" target="_blank">₹500/month</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <hr style="height:2px;border-width:0;color:rgb(7, 6, 6);background-color:rgb(0, 0, 0)"> -->
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">

    <h2 style="text-align: center; color: white;">Customize Your Membership Today!</h2>
  

    <div class="card text-center bg-dark" style="color: aliceblue; width: 80%; margin-inline: 10%; margin-bottom: 30px; margin-top: 30px;">
        <div class="card-header">
            Customize
        </div>
        <div class="card-body">
            <h5 class="card-title">Make Your Custom Pack</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Custom Pack
      </button>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark" style="color: aliceblue;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Share Your info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form style="color: aliceblue;">
                        <label style="margin-right: 6px;">Weight:</label><input style="margin-left: 20px;" type="number" placeholder="Weight(in Kg)"><br>
                        <label style="margin-right: 7px;">Height:</label><input style="margin-left: 22px;" type="number" placeholder="Height (in cm)"><br>
                        <label style="margin-right: 5px;">Gender:</label><input style="margin-left: 19.5px;" type="text" placeholder="Gender"><br>
                        <label style="margin-right: 20px;">Age:</label><input style="margin-left: 28px;" type="number" placeholder="Age"><br>
                        <label style="margin-right: 20px;">Email:</label><input style="margin-left: 17px;" type="text" placeholder="Email"><br><br>
                        <input type="checkbox">
                        <label>Work-Out Sessions?</label><br>
                        <input type="checkbox">
                        <label>Want Meditation Counselling Sessions?</label>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="custompack.html" target="_blank"><button type="button" class="btn btn-outline-success">Save changes</button></a>
                </div>
            </div>
        </div>
    </div>

    <!--cards-->
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <h2 style="text-align: center; color: white;">Meet Our Team</h2>
    <!-- <hr style="height:2px;border-width:0;color:gray;background-color:gray"> -->

    <div class="container mx-auto mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card1" style="width:18rem; text-align: center; margin: auto;">
                    <img src="../Images/Might Guy.png" class="card-img-top" style="height: 230px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Might Guy</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Fitness Expert</h6>
                        <p class="card-text">Popularily known as the blue beast of the leaf and the strongest shinobi declared by Madara Uchiha in 4th Great Ninja War</p>
                        <a href="https://www.instagram.com/mlghtguy/" target="_blank" class="btn btn-sm btn-outline-success"><i class="fas fa-link"></i> Visit Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card1" style="width:18rem; text-align: center; margin: auto;">
                    <img src="../Images/Itachi.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Itachi Uchiha</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Psychologist</h6>
                        <p class="card-text">The Magekyou Sharingan Bearer and a prodigy from the leaf. The strongest genjutsu user of all time and big brother of the shadow hokage Sasuke Uchiha</p>
                        <a href="https://www.instagram.com/itachi_uchiha/" target="_blank" class="btn btn-sm btn-outline-success"><i class="fas fa-link"></i> Visit Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card1" style="width:18rem; text-align: center; margin: auto;">
                    <img src="../Images/Shikamaru.jfif" class="card-img-top" style="height: 250px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Shikamaru Nara</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Hokage's Advisor</h6>
                        <p class="card-text">The best advisor among the whole 5 nations and Advisor of current Hokage Naruto Uzumaki.</p>
                        <a href="https://www.instagram.com/shikamaru/" target="_blank" class="btn btn-sm btn-outline-success"><i class="fas fa-link"></i> Visit Profile</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
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
                        <li><a href="./index1.html">Home</a></li>
                        <li><a href="#our-services">Our Services</a></li>
                        <li><a href="./contact-us.php" target="_blank">Contact-Us</a></li>
                        <li><a href="./about-us.php" target="_blank">About-Us</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                    <h5>Social Handles</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter"></i></a></li>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>