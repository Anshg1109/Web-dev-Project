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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: sticky; top: 0px; z-index: 10; ">
        <div class="container-fluid">
            <span id="logo"><a class="navbar-brand" href="#"><img src="https://fontmeme.com/permalink/210706/eb3a27c8b923ad5f681086d639fd6334.png" alt="netflix-font"></a></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index1.html"><i class="fas fa-home"></i> Home</a>
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
                        <a class="nav-link " href="./contactus.html" target="_blank"><i class="fas fa-id-card-alt"></i> Contact us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="./aboutus.html" target="_blank"> <i class="fas fa-address-card"></i> About us</a>
                    </li>
                </ul>


                <p  style="color:aliceblue; padding-right:10px; margin-top:15px ">Hello!, <?php echo $user_data['username']; ?></p>
          <a class="btn btn-outline-success" href="index1.html">log out </a>

            </div>
        </div>
    </nav>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../Images/Highlander Strength Fitness.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <a href="index1.html" class="btn btn-sm btn-success"><i class="fas fa-arrow-circle-left"></i> Back to home</a>

    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <h2 style="text-align: center; color: white;">Meet Our Team</h2>


    <div class="container mx-auto mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card1" style="width:18rem; text-align: center; margin: auto;">
                    <img src="../Images/Might Guy.png" style="height: 230px;" class="card-img-top" alt="...">
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
                        <li><a href="./contactus.html" target="_blank">Contact-Us</a></li>
                        <li><a href="./aboutus.html" target="_blank">About-Us</a></li>
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
</body>