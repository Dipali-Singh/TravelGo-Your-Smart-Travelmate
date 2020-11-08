<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <!-- build:css css/main.css -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesold.css">
    <!-- endbuild -->
    <title>Travel Go- Your Smart TravelMate</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="#"><img src="img/logo.png" height="30" width="41"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg"></span> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contactus.html"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="./payment.html"><span class="fa fa-money fa-lg"></span> Transaction</a></li>
                </ul>
                <label>
                    &nbsp;
                    <span class="navbar-text">
                        <a role="button" id="loginModal2">
                            <span class="fa fa-sign-in"></span><b>Login</b> (Already have an account)
                        </a>
                    </span>

                    <span class="navbar-text">
                        <a role="button" id="siginModal2">
                            <span class="fa fa-sign-in"></span><b>Signin</b> (New User)
                        </a>
                    </span>
                </label>
            </div>
        </div>
    </nav>
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
                            </div>
                            <div class="col-sm-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-1">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="signinModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sign-in </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="first name"></label>
                                <input type="text" class="form-control form-control-sm mr-1" id="firstname" placeholder="First Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="middle name"></label>
                                <input type="text" class="form-control form-control-sm mr-1" id="middlename" placeholder="Middle Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="last name"></label>
                                <input type="text" class="form-control form-control-sm mr-1" id="lastname" placeholder="Last Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="contact number"></label>
                                <input type="text" class="form-control form-control-sm mr-1" id="contactnumber" placeholder="Contact Number">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
                            </div>
                            <div class="col-sm-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-1">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Travel Go</h1>
                    <p>The sky’s the limit! We’ll show you the world. Sandy beaches to snowy peaks. Get with us and get away.</p>
                </div>
                <div class="col-12 col-sm align-self-center">
                    <img src="img/logo.png" class="img-fluid">
                </div>
                <div class="col-12 col-sm align-self-center">
                    <a role="button" id="res2"
                       class="btn btn-clock nav-link btn-warning">Reserve</a>
                </div>
            </div>
        </div>
    </header>
    <div class="modal" tabindex="-1" role="dialog" id="res">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reserve</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="demo.php" method="post">
                        <div class="form-group row">
                            <label for="noofguest" class="col-4 col-form-label">Number of Traveler</label>
                            <div class="col-1">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">1</label>
                            </div>

                            <div class="col-1">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">2</label>
                            </div>
                            <div class="col-1">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">3</label>
                            </div>
                            <div class="col-1">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">4</label>
                            </div>
                            <div class="col-1">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">5</label>
                            </div>
                            <div class="col-1">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">6</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dest" class="col-4 col-form-label">Source </label>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn">
                                    <input type="text" name="source" class="form-control" id="option2">
                                </label>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dest" class="col-4 col-form-label">Destination  </label>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn">
                                    <input type="text" name="destination" class="form-control" id="option2">
                                </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="datetime" class="col-sm-3 col-form-label">Date and Time</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputDate" placeholder="Date">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputTime" placeholder="Time">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="dest" class="col-4 col-form-label">Duration  </label>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn">
                                    <input type="text" class="form-control" id="option2">
                                </label>

                            </div>
                        </div>
						<button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button><br>
                    <button type="submit" class="btn btn-primary" id="reservefinal" >Reserve</button>
                    </form>
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row row-content">
            <div class="col">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="img/travel2.jpg" alt="travel2" />
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Come,Lets explore the world along together.</h2>
                                <p class="d-none d-sm-block">We will help you to make your journey wonderful with our best travel guid.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/travel5.jpg" alt="travel5" />
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Adventure is worthwhile.</h2>
                                <p>If you think adventure is dangerous, try routine, it is lethal.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/travel3.jpg" alt="travel3" />
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="mt-0">Collect moments. Not things</h2>

                                <p class="d-none d-sm-block">
                                    Wherever you go becomes a part of you somehow.
                                </p>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <div class="btn-group" id="carouselButton">
                        <button class="btn btn-danger btn-sm" id="carouselButton">
                            <span id="carousel-button-icon" class="fa fa-pause"></span>
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>Best Travel Destination Waiting For You.</h3>
            </div>
            <div class="col col-sm order-sm-first col-md">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/italy.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Italy</h5>
                        <p class="card-text">We invite you to experience here with your family, definitely you are filled with lasting memories and feel awesome.</p>
                        <a href="#" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col col-sm order-sm-first col-md">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="img/india.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">India</h5>
                        <p class="card-text">Do visit the Country of love and pilgrimage</p>
                        <a href="#" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-content align-items-center">
            <div class="col col-sm order-sm-first col-md">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="img/uk.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">UK</h5>
                        <p class="card-text">Visit world's ancient museum and castles.</p>
                        <a href="#" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col col-sm order-sm-first col-md">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="img/us.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">US</h5>
                        <p class="card-text">Best place to travel with your loved ones,beautiful beaches,cashinos,yatch and many more.</p>
                        <a href="#" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col col-sm order-sm-first col-md">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="img/aus.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Australia</h5>
                        <p class="card-text">Come and vist Sydney,most loved place by travellers.</p>
                        <a href="#" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-content align-items-center">
            <div class="col col-sm order-sm-first col-md">

                <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609904165!2d72.74109922183743!3d19.082197839026808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1595599556416!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="./aboutus.html">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                        121, Clear Water Bay Road<br>
                        Clear Water Bay, Kowloon<br>
                        HONG KONG<br>
                        <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
                        <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
                        <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:travelgo@gmail.com">travelgo@gmail.com</a>
                    </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <p>© Copyright 2018 Travel Go</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <!-- build:js js/main.js -->
    
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <!-- endbuild -->
</body>

</html>
