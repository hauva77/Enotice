<?php
error_reporting(0);
session_start();
require_once('config.php');

if($_SESSION['username']==""){
    echo "<a href=\"index.php\">Re-LogIn</a>";
}

else{?>
<html>

<head>
    <title>Smart Classroom | Electrical Appliances Controller</title>
    <link rel='shortcut icon' type='image/x-icon' href="images/logo.png" />
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/animate.min.css">
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
    text-align: center;
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
  text-align: center;
  bottom: 0;
  left: 0;
  padding: 10px 20px 30px 165px;
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
  color: lightblue;
  text-decoration: none;
}



        </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/Header-Nightsky.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>
    <!--GO TO TOP SETION ( BOTTOM RIGHT ) START-->
    <div class="up" data-toggle="tooltip" data-placement="left" title="Go To Top">
        <br/><br/>
        <br/>
        <a href="logout.php"><button class="btn btn-danger"><b style="border:5px;font-weight:900;">LOGOUT</b></button></a>   
    </div>
    <!--GO TO TOP SETION ( BOTTOM RIGHT ) END-->


    <br/>
    <!--about SECTION START-->
    <div class="fluid-container animated fadeIn wow" data-wow-delay="0.5s" id="modules">
        <div class="container">
            <h1 class="section_heading" style="font-family:algerian;font-size:70px;">ATTENDANCE VIEWER</h1>
            <h1 style="color:red;font-family:algerian;font-size:60px;font-weight:900;text-align:center;text-shadow:5px;">Student Login</h1>
            <h3>Welcome <span style="font-weight:900;color:#1e88e5;"><?php echo $_SESSION['name']; ?></span>.<br/><br/></span>.</h3>
            <h1 style="font-weight:900;text-align:center;">Details Of <?php echo $_SESSION['name'];  ?></h1>
            <br/>
            <div class="row">
                <div class="container">
                    <table class="table table-striped table-responsive">
  <thead>
    <tr class="table-active">
      <th style="text-align:center;">Roll No.</th>
      <th style="text-align:center;">Name</th>
      <th style="text-align:center;">Unique Number</th>
      <th style="text-align:center;">Classes Attended</th>
      <th style="text-align:center;">Total Classes</th>
      <th style="text-align:center;">Tutorials Attended</th>
      <th style="text-align:center;">Total Tutorials</th>
      <th style="text-align:center;">Attendance Percentage</th>
      <th style="text-align:center;">DWM</th>
      <th style="text-align:center;">LP</th>
      <th style="text-align:center;">MC</th>
      <th style="text-align:center;">TCP</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $rn=$_SESSION['roll_no'];
      $sq="SELECT * FROM seventh_sem_cse WHERE Roll_No='$rn'";
      $result=mysqli_query($conn,$sq);
      while($row = mysqli_fetch_array($result)){?>
      <tr>
          <td style="text-align:center;"><?php echo $row['Roll_No'];?></td>
          <td style="text-align:center;"><?php echo $row['Name'];?></td>
          <td style="text-align:center;"><?php echo $row['Unique_Id'];?></td>
          <td style="text-align:center;"><?php echo $row['Class_Attended'];?></td>
          <td style="text-align:center;"><?php echo $row['Total_Classes'];?></td>
          <td style="text-align:center;"><?php echo $row['Tutorials_Attended'];?></td>
          <td style="text-align:center;"><?php echo $row['Total_Tutorials'];?></td>
          <td style="text-align:center;"><?php echo $row['Percent_Attendance'];?></td>
          <td style="text-align:center;"><?php echo $row['DWM'];?></td>
          <td style="text-align:center;"><?php echo $row['LP'];?></td>
          <td style="text-align:center;"><?php echo $row['MC'];?></td>
          <td style="text-align:center;"><?php echo $row['TCP'];?></td>
      <?php } ?>
    </tr>
  </tbody>
</table>

                </div>
    </div>
    <!--BODY SECTION END-->
    <br/><br/>
    <!--FOOTER SECTION START-->
    <footer class="fluid-container well animated fadeIn wow" data-wow-delay="0.3s">   
        <div class="container">
            <center>
                <div class="col-lg-5 col-md-5" style="text-align:center;">
                    <h3 style="font-weight:900;">Copyrights @ Smart Classroom, 2017</h3>
                </div>
            </center>
          </div>
        </div>
    </footer>
    <!--FOOTER SECTION END-->
</body>
</html>
<?php
}
?>