<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
                                   minimum-scale=1,
                                   maximum-scale=1,
                                   initial-scale=1,
                                   user-scalable=no" >

    <title>dust-home</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<header class="container">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><em>_1981_</em></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="navbar-form navbar-right">
                    <div class="form-group">
                        <div class="form-control">
                            <span class="user-greeting">Welcome Back </span>
                            <span class="user-name">John Doe81</span>
                        </div>
                        <?php /*<input type="text" class="form-control" placeholder="Search">*/?>
                    </div>
                    <a href="#" class="btn btn-default" role="button">Client Sing-Out</a>
                </div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>


<div class="featured-image">
    <div class="container">
        <div class="row">
            <div class="col-md-16">
                <img src="img/featured-img.png" class="img-responsive center-block" alt="featered image">
            </div>
        </div>
    </div>
</div>



<div class="main-content container">


    <section class="featured row">
        <div class="col-md-16">
            <div class="text-center">
                <h2>Featured Title</h2>
            </div>
        </div>


        <div class="col-md-16">
            <!-- begin Slider -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>

                <div class="container-fluid carousel-inner">

                    <article class="row item active">
                        <div class="col-md-2"><img src="img/Layer-3.png" alt="..."></div>
                        <div class="col-md-2"><img src="img/Layer-3-copy-2.png" alt="..."></div>
                        <div class="col-md-2"><img src="img/Layer-3-copy-3.png" alt="..."></div>
                        <div class="col-md-9">
                            <header>
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="media-object" src="img/Cert.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Krili havtret hyo gustripast 1</h4>
                                        <em>Krili havtret hyo gustripast</em>
                                    </div>
                                </div>
                            </header>
                            <div class="feature-content content">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
                            </div>
                        </div>
                    </article>

                    <article class="row item">
                        <div class="col-md-2"><img src="img/Layer-3.png" alt="..."></div>
                        <div class="col-md-2"><img src="img/Layer-3-copy-2.png" alt="..."></div>
                        <div class="col-md-2"><img src="img/Layer-3-copy-3.png" alt="..."></div>
                        <div class="col-md-9">
                            <header>
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="media-object" src="img/Cert.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Krili havtret hyo gustripast 2</h4>
                                        <em>Krili havtret hyo gustripast</em>
                                    </div>
                                </div>
                            </header>
                            <div class="feature-content content">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>

            </div>
            <!-- end Slider -->
        </div>



    </section>




    <div class="steps-and-slider row">

        <div class="container-fluid">

            <div class="row">

        <article class="col-md-5 text-center">
            <header>
                <div class="circle">
                    <img src="img/book.png" alt="...">
                </div>
                <h2 class="text-uppercase">Research</h2>
            </header>
            <div class="content">
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
            </div>
            <footer>
                <a href="#" class="btn btn-default"  role="button">Learn more</a>
            </footer>
        </article>

        <article class="col-md-5 text-center">
            <header>
                <div class="circle">
                    <img src="img/book.png" alt="...">
                </div>
                <h2 class="text-uppercase">Work</h2>
            </header>
            <div class="content">
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
            </div>
            <footer>
                <a href="#" class="btn btn-default"  role="button">Learn more</a>
            </footer>
        </article>

        <article class="col-md-5 text-center">
            <header>
                <div class="circle">
                    <img src="img/book.png" alt="...">
                </div>
                <h2 class="text-uppercase">Deliver</h2>
            </header>
            <div class="content">
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
            </div>
            <footer>
                <a href="#" class="btn btn-default"  role="button">Learn more</a>
            </footer>
        </article>

    </div>

            <div class="row">
        <div class="col-md-16">
            <!-- begin Slider -->
            <div id="carousel-example" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <div class="carousel-indicators">
                    <a href="#" data-target="#carousel-example" data-slide-to="0" class="active"> 1 </a>
                    <a href="#" data-target="#carousel-example" data-slide-to="1"> 2 </a>
                </div>

                <div class="container-fluid carousel-inner">
                    <div class="row item active">
                        <article class="col-md-5">
                            <header><div class="media">
                                    <div class="pull-left">
                                        <img class="media-object" src="img/Cert.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Krili havtret hyo gustripast 1</h4>
                                        <em>Krili havtret hyo gustripast</em>
                                    </div>
                                </div>
                            </header>
                            <div class="content">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
                            </div>
                        </article>
                        <article class="col-md-5">
                            <header><div class="media">
                                    <div class="pull-left">
                                        <img class="media-object" src="img/Cert.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Krili havtret hyo gustripast 1</h4>
                                        <em>Krili havtret hyo gustripast</em>
                                    </div>
                                </div>
                            </header>
                            <div class="content">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
                            </div>
                        </article>
                        <article class="col-md-5">
                            <header><div class="media">
                                    <div class="pull-left">
                                        <img class="media-object" src="img/Cert.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Krili havtret hyo gustripast 1</h4>
                                        <em>Krili havtret hyo gustripast</em>
                                    </div>
                                </div>
                            </header>
                            <div class="content">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
                            </div>
                        </article>
                    </div>

                    <div class="row item">
                        <article class="col-md-5">
                            <header><div class="media">
                                    <div class="pull-left">
                                        <img class="media-object" src="img/Cert.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Krili havtret hyo gustripast 1</h4>
                                        <em>Krili havtret hyo gustripast</em>
                                    </div>
                                </div>
                            </header>
                            <div class="content">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
                            </div>
                        </article>
                        <article class="col-md-5">
                            <header><div class="media">
                                    <div class="pull-left">
                                        <img class="media-object" src="img/Cert.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Krili havtret hyo gustripast 1</h4>
                                        <em>Krili havtret hyo gustripast</em>
                                    </div>
                                </div>
                            </header>
                            <div class="content">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
                            </div>
                        </article>
                        <article class="col-md-5">
                            <header><div class="media">
                                    <div class="pull-left">
                                        <img class="media-object" src="img/Cert.png" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Krili havtret hyo gustripast 1</h4>
                                        <em>Krili havtret hyo gustripast</em>
                                    </div>
                                </div>
                            </header>
                            <div class="content">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>

            </div>
            <!-- end Slider -->
        </div>
    </div>

        </div>

    </div>





    <div class="row">
        <article class="col-md-7">
            <div class="box-image">
                <img src="img/Layer-3-copy-2.png" alt="...">
            </div>
            <header>
                <h2>Pharetra Eget</h2>
            </header>
            <div class="content">
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
            </div>
        </article>
        <article class="col-md-9">
            <header>
                <h2>Newsletter Subscription</h2>
            </header>
            <div class="content">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-default">Sing-up</button>
                </form>

                <div class="media">
                    <div class="pull-left text-center">
                        <img class="media-object" src="img/Layer-3-copy-3.png" alt="...">
                        <a href="#" class="btn btn-default btn-xs">follow</a>
                    </div>
                    <div class="media-body">
                        <p>RT @_1981_: Check out his awesome template on #themeforest  -
                            <a href="#">https://www.themeforest.net</a></p>
                    </div>
                </div>

            </div>
        </article>
    </div>



    

    <div class="row footer-content">
        <div class="col-md-5">
            <div class="title">
                <h3>Flickr</h3>
            </div>
            <div class="content">
                <ul class="list-inline">
                    <li><img src="img/Layer-3-copy-2.png" alt="..."></li>
                    <li><img src="img/Layer-3-copy-2.png" alt="..."></li>
                    <li><img src="img/Layer-3-copy-2.png" alt="..."></li>
                    <li><img src="img/Layer-3-copy-2.png" alt="..."></li>
                    <li><img src="img/Layer-3-copy-2.png" alt="..."></li>
                    <li><img src="img/Layer-3-copy-2.png" alt="..."></li>
                    <li><img src="img/Layer-3-copy-2.png" alt="..."></li>
                    <li><img src="img/Layer-3-copy-2.png" alt="..."></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="title">
                <h3>Featured Clients</h3>
            </div>
            <div class="content">
                <ul class="list-unstyled">
                    <li>logo</li>
                    <li>logo</li>
                    <li>logo</li>
                    <li>logo</li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="title">
                <h3>Our Friends</h3>
            </div>
            <div class="content">
                <ul class="list-unstyled">
                    <li>logo</li>
                    <li>logo</li>
                    <li>logo</li>
                    <li>logo</li>
                    <li>logo</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="title">
                <h3>Pages</h3>
            </div>
            <nav>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <p class="text-left">Copyright 2011 | Nineteen Eighty-One</p>
        </div>
        <div class="col-md-8">
            <nav class="text-right">
                <ul class="list-inline">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </nav>
        </div>
    </div>

</div>





<!-- begin add scripts-->
<script src="js/jquery.min.js"></script>
<script src="js/transition.js"></script>
<script src="js/carousel.js"></script>
<!-- end add scripts-->



</body>
</html>