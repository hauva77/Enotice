<!DOCTYPE html>
<html>

<head>
<meta name	="viewport" content="width=device-width, initial-scale=1">
    <title>E-Notice App</title>
    <link rel='shortcut icon' type='image/x-icon' href="images/logo.png" />
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/animate.min.css">
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="./scripts/jquery-2.2.0.min.js"></script>
    <script src="./scripts/bootstrap.min.js"></script>
    <script src="./scripts/wow.min.js"></script>
    <script>
        new WOW().init();//WOW.JS INITIALISATION
        //PRELOADER SCRIPT
        window.addEventListener("load",function(){
            var load_screen = document.getElementById("content");
            document.body.removeChild(content);
        });
        //TOOLTIP SCRIPT
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
        //SMOOTHSCROLLING SCRIPT 
        window.smoothScroll = function(target) {
            var scrollContainer = target;
            do { //find scroll container
                scrollContainer = scrollContainer.parentNode;
                if (!scrollContainer) return;
                scrollContainer.scrollTop += 1;
            } while (scrollContainer.scrollTop == 0);

            var targetY = 0;
            do { //find the top of target relatively to the container
                if (target == scrollContainer) break;
                targetY += target.offsetTop;
            } while (target = target.offsetParent);

            scroll = function(c, a, b, i) {
            i++; if (i > 30) return;
            c.scrollTop = a + (b - a) / 30 * i;
            setTimeout(function(){ scroll(c, a, b, i); }, 30);
            }
            // start scrolling
            scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
        }

        </script>
        <style>
            a{font-weight:bolder;}
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 70%;
                margin: auto;
            }
            .up{
                max-width: 90px;
                position: fixed;
                bottom: 35px;
                right: 35px;
                z-index: 99;
                font-size:50px;
            }
            h1.section_heading{
                color: #1e88e5;
                font-weight: bold;
                font-size: 60px;
                margin-bottom: 36px;
                text-decoration: underline;
                text-align: center;
                text-transform: capitalize;
            }
            @media screen and (max-width: 767px) {
                h1.section_heading{
                    font-size: 42px;
                }
            }
            #contact{
                background-image:url('images/contact_us_banner.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
            p{
                margin-bottom:15px;
                font-size:21px;
                font-weight:200;
            }
            #about ul{
                list-style-type: disc;
                margin-bottom:15px;
                margin-top:15px;
                font-size:21px;
                font-weight:200;
                color:black;
            }
            #about ul li{
                text-transform: capitalize;
            }


@import url(http://fonts.googleapis.com/css?family=Anaheim);

body{
    background-image: radial-gradient(mintcream 0%, lightgray 100%);
}


/*CSS FOR MODULE CARDS*/
.card {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.card:hover {
  box-shadow: 0 2px 105px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.card {
  margin-top: 10px;
  box-sizing: border-box;
  border-radius: 2px;
  background-clip: padding-box;
}
.card span.card-title {
    color: #fff;
    font-size: 24px;
    font-weight: 900;
    text-transform: uppercase;
}

.card .card-image {
  position: relative;
  overflow: hidden;
}
.card .card-image img {
  border-radius: 2px 2px 0 0;
  background-clip: padding-box;
  position: relative;
  z-index: -1;
}
.card .card-image span.card-title {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 16px;
}
.card .card-content {
  padding: 16px;
  border-radius: 0 0 2px 2px;
  background-clip: padding-box;
  box-sizing: border-box;
}
.card .card-content p {
  margin: 0;
  color: inherit;
}
.card .card-content span.card-title {
  line-height: 48px;
}
.card .card-action {
  border-top: 1px solid rgba(160, 160, 160, 0.2);
  padding: 16px;
}
.card .card-action a {
  color: #1e88e5;
  margin-right: 16px;
  transition: color 0.3s ease;
  text-transform: uppercase;
}
.card .card-action a:hover {
  color: black;
  text-decoration: none;
}



        </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./assets/css/Header-Nightsky.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>
    <!--GO TO TOP SETION ( BOTTOM RIGHT ) START-->
    <div class="up" data-toggle="tooltip" data-placement="left" title="Top">
        <a onclick="smoothScroll(document.getElementById('home'))" href="#"><i class="fa fa-arrow-circle-up fa-6" aria-hidden="true"></i></a>
    </div>
    <!--GO TO TOP SETION ( BOTTOM RIGHT ) END-->
    <!--HEADER SECTION START-->
    <div class="header-nightsky" id="home">
        <!--NAVIGATION BAR START-->
        <nav class="navbar navbar-default">
        </nav>
        <br/><br/><br/><br/><br/>
        <!--NAVIGATION BAR END-->
        <div class="hero">
            <h1><span class="animated fadeIn wow" data-wow-delay="0.5s" data-wow-duration="1s">Welcome</span><span class="animated fadeIn wow" data-wow-delay="1s" data-wow-duration="1s"> To</span> <span class="animated fadeIn wow" data-wow-delay="1.5s" data-wow-duration="1s">E - </span> <span class="animated fadeIn wow" data-wow-delay="2s" data-wow-duration="1s">NOTICE</span><span class="animated fadeIn wow" data-wow-delay="2s" data-wow-duration="1s"> PORTAL</span></h1>
            <div class="btn btn-primary animated fadeIn wow" href="#modules" onclick="smoothScroll(document.getElementById('modules'))" data-wow-delay="3s" data-wow-duration="1s"><a style="text-decoration:none;color:white;font-weight:900;"><span>View Modules</span></a></div>
        </div>
    </div>
    <!--HEADER SECTION END-->
    <br/>
    <!--about SECTION START-->
    <div class="fluid-container animated fadeIn wow" data-wow-delay="0.4s" id="modules">
        <div class="container">
            <!--<h1 class="section_heading">modules</h1>-->
            <div class="row">
                <div class="container">
<div class="col-md-4">
            <a href="hod_login.php" style="text-decoration:none;" target="_self">
                <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="images/module1_card.jpg">
                    
                </div>
                
                <div class="card-action" style="text-align:center;">
                    <a href="hod_login.php" target="_self">HOD/HIGHER AUTHORITY LOGIN</a>
                </div>
                
                <div class="card-action" style="text-align:center; text-decoration: none">
                    <span style="color:black;font-weight:900;">Do Not Have A Higher Authority Account?</span><br></br><a href="register_hod.php" target="_self"> Register Now</a>
                </div>
            </div>
            </a>
        </div>
<div class="col-md-4">
            <a href="faculty_login.php" style="text-decoration:none;" target="_self">
                <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="images/module2_card.jpg">
                    
                </div>
                
                <div class="card-action" style="text-align:center;">
                    <a href="faculty_login.php" target="_self">FACULTY LOGIN</a>
                </div>
                
                <div class="card-action" style="text-align:center; text-decoration: none">
                    <span style="color:black;font-weight:900;">Do Not Have A Faculty Account?</span><br></br><a href="register_faculty.php" target="_self"> Register Now</a>
                </div>
            </div>
            </a>
        </div>
<div class="col-md-4">
            <a href="student_login.php" style="text-decoration:none;" target="_self">
                <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="images/module3_card.jpg">
                    
                </div>
                
                <div class="card-action" style="text-align:center;">
                    <a href="student_login.php" target="_self">STUDENT LOGIN</a>
                </div>
                
                <div class="card-action" style="text-align:center; text-decoration: none">
                    <span style="color:black;font-weight:900;">Do Not Have A Student Account?</span><br></br><a href="register_student.php" target="_self"> Register Now</a>
                </div>
            </div>
            </a>
        </div>
                </div>
            </div>
        </div>
    </div>
    <!--MEMBERSHIP OPTIONS SECTION END-->
    <br/><br/>
    <!--FOOTER SECTION START-->
    <footer class="container-fluid well animated fadeIn wow" data-wow-delay="0.3s">   
        <div class="container">
            <center>
                <div class="col-lg-12 col-md-12" style="text-align : center;">
                    <h4 style="font-weight:200;">© E-Notice Team, 2018</h4>
                </div>
            </center>
          </div>
        </div>
    </footer>
    <!--FOOTER SECTION END-->
</body>
</html>