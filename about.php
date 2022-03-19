<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eternity_The_RoboTa </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php
include 'partials/header.php';

?>


    <section id="about-carousel1">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/coding_l_9.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Design</h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images\machine_l_1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Development</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images\marketing_l_6.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Marketin</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </section>


    <section id="about-detail mt-2">
        <h1 class="text-center mt-3 py-3">About Us</h1>
        <div class="container d-flex justify-content-center align-items-center">

            <div class="row">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4 text-capitalize">think!It We!design!It & And finally depoly!it</h1>
                        <p class="lead text-capitalize">hello there!.Lets rock on!</p>
                        <p class="text-capitalize">we the robotons a creative group of the imagination and productive
                            world.undoubtedly there have some stories which go from from generation to generation.in
                            such stories ,ther is the story of the world of eternity the robota which graphed with a
                            vast range of gigital presence and social media management achievements!.
                        </p>
                        <div class="row">
                            <div class="col-md-4">
                                <i class="fa fa-video-camera" style="color: #f05b5b;font-size: 228px;padding:12px 75px;"></i>
                            </div>
                            <div class="col-md-4"> <i class="fa fa-android" style="color: green;font-size: 228px;padding:12px 75px;"></i></div>
                            <div class="col-md-4"> <i class="fa fa-desktop" style="color: black;font-size: 228px;padding:12px 75px;"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section id="services">
        <div class="container mt-4">
            <h1 class="text-center">Our Services</h1>
            <div class="row">
                <div class="col-md-4 col-sm-6 col">
                    <div class="content">
                        <img src="images\cooding_l_1.jpg" class="img-fluid " alt="">
                        <h3>pecular <br> design</h3>

                        <div class="main-content">

                            <p class="text-center text-capitalize">logo design,card design,graphic design,image
                                design
                                <br>
                                video editing....
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col">
                    <div class="content">
                        <img src="images/machine-1.jpg" class=" img-fluid " alt="">
                        <h3 class="text-center text-capitalize">buid an accomplished product</h3>

                        <div class="main-content">


                            <p class="text-center text-capitalize">web &mobile app development,software development
                                <br>machine learning ,aI projects E-commerce projects and may more..
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col">
                    <div class="content">
                        <img src="images/marketing_l_4.jpg" class=" img-fluid " alt="">
                        <h3 class="text-center text-capitalize">make your <br> brand charismatie</h3>

                        <div class="main-content">
                            <p class="text-center text-capitalize">
                                media planning,digital marketing, <br> social media marketing, <br> and whats app
                                marketing and many more..
                            </p>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- services section end -->











    <!-- footer section start -->
    <?php
   include 'partials/footer.php';
   
   ?>

    <!-- footer section end -->


    <script src="jquery/jquery.slim.min.js"></script>
    <script src="script/bootstrap.bundle.min.js"></script>
</body>

</html>