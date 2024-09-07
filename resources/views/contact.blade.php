<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <style>
        .nav-link:hover
        {
            color: blue;
        }
        .nav-link
        {
            font-weight: bold;
            font-size: small;
        }
        .container h1
        {
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container-fluid bg-white">
        <div class="container p-2">
            <nav class="navbar navbar-expand-md">
                <img src="./Images/logo.png.webp">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>Menu
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="#navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link " href="http://127.0.0.1:5500/HOME.html">HOME</a></li>
                        <li class="nav-item"><a class="nav-link " href="http://127.0.0.1:5500/ABOUT.html">ABOUT </a></li>
                        <li class="nav-item"><a class="nav-link " href="http://127.0.0.1:5500/SERVICES.html">SERVICES</a></li>
                        <li class="nav-item"><a class="nav-link " href="http://127.0.0.1:5500/PORTFOLIO.html">PORTGOLIO</a></li>
                        <li class="nav-item"><a class="nav-link " href="http://127.0.0.1:5500/CONTACT.html">CONTACT</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!--section # 1-->

    <section class="bg-primary p-5">
        <div class="container p-5">
           <h1 class="text-white text-center display-5">Contact</h1>
            <h5><a class="text-white nav-link text-center" href="http://127.0.0.1:5500/HOME.html">Home <span> ➞ </span> Contact Us</a></h5>
            </div>
    </section>

     <!--section # 2-->

    <section class="p-5 m-5">
        <div class="container p-5 m-5" style="background-color: rgb(229, 229, 235) ;">
            <div class="row">

               <div class="col-md p-5 ">
                    <div class="circle d-flex" style="width: 50px; height: 50px; border-radius: 50%; align-items: center; justify-content: center;margin-left: 47%; background-color: rgb(147, 147, 150); "> <h2 class="text-white"> ! </h2></div>
                    <h5 class="text-center pt-5">Sorry! Something went wrong.</h5>
                    <p class="text-center pb-5" style="font-size: small;">This page didn't load Google Maps correctly. See the JavaScript console for technical details</p>
                    </div>

            </div>
        </div>
    </section>

    <!-- section # 3 -->

    <section>
        <div class="container p-5">
            <div class="row">
                <div class="col-md-4">

                    <div class="row">
                        <div class="col-md-2">
                            <div class="icon text-primary h2"><span class="lnr lnr-home"></span></div>
                       </div>
                        <div class="col-md-10">
                            <h5>Binghamton, New York</h5>
                            <p> 4343 Hinkle Deegan Lake Road</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="icon text-primary h2"><span class="lnr lnr-phone-handset"></span></div>
                       </div>
                        <div class="col-md-10">
                            <h5>00 (958) 9865 562</h5>
                            <p> Mon to Fri 9am to 6 pm</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="icon text-primary h2"><span class="lnr lnr-envelope"></span></div>
                        </div>
                        <div class="col-md-10">
                            <h5>support@colorlib.com</h5>
                            <p> Send us your query anytime!</p>
                         </div>
                    </div>

                 </div>

                <div class="col-md-4">
                    <div class="row">

                        <div class="mb-3 mt-3">
                             <input type="email" class="form-control" id="email" placeholder="Enter your name" name="text">
                        </div>
                        <div class="mb-3 mt-3">
                             <input type="email" class="form-control" id="email" placeholder="Enter email address" name="email">
                        </div>
                         <div class="mb-3 mt-3">
                            <input type="email" class="form-control" id="email" placeholder="Enter subject" name="text">
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3 mt-3">
                        <textarea class="form-control" rows="5" id="comment" placeholder="Enter Message" name="text" style="width: 350px; height: 175px;"></textarea>
                        <button type="button" class="btn btn-primary my-4">Send Message</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

</body>

<footer class="bg-black p-5">
    <div class="container m-5">
        <div class="row">
            <div class="col-md-5">
                <h5 class="text-white">About Me</h5>
                <p class="text-secondary pt-3">We have tested a number of registry fix and clean utilities and present our top 3 list on our site for your convenience.</p>
                <p class="text-secondary pt-2">Copyright ©2024 All rights reserved | This template is made <br>with <span class="lnr lnr-heart"> by </span> <span class="text-primary"> Colorlib </span> </p>
            </div>
            <div class="col-md-4 mb-3">
                <h5 class="text-white">Newsletter</h5>
                <p class="text-secondary pt-3">Stay updated with our latest trends</p>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Email Address">
                    <button class="btn btn-primary px-3" type="submit"> → </button>
                  </div>
            </div>
            <div class="col-md-3">
                <h5 class="text-white">Follow Me</h5>
                <p class="text-secondary pt-3">Let us be social</p>
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook "></i></a>
                    <a href="#"><i class="fa fa-twitter "></i></a>
                    <a href="#"><i class="fa fa-dribble "></i></a>
                    <a href="#"><i class="fa fa-behance "></i></a>
                </div>

            </div>
        </div>
    </div>
</footer>

</html>
