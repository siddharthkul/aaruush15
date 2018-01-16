<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/layout.css">
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="css/style_workshop.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <title>Aaruush'15|Workshops</title>
</head>

<?php
  include_once("loader.php");
?>

<body>
<?php
$header_text="workshops";
$font_size="20px";
include "header2.php"
?>

  <ul id="slide-out" class="side-nav">
    <li id="list_workshop" style="
    color: #00b4ff;font-size: 20px;height: 45px;padding:7px 0 0 0;">WORKSHOPS</li>
    <li id="workshop_li1" class="white" style=" height: 45px;"><a class="workshop_text white" id="workshop_text1" style="height: 45px;line-height: 47px;" href="#!" >ACCELEROBOTICS</a>
      </li>

   <li id="workshop_li2" style=" height: 45px;"><a class="workshop_text " id="workshop_text2" style="height: 45px;line-height: 47px;" href="#!" >APPLICATIONS OF GIS</a></li>
   <li id="workshop_li3" style=" height: 45px;"><a class="workshop_text" id="workshop_text3" style="height: 45px;line-height: 47px;" href="#!" >BIKE OVERHAULING</a></li>
  <li id="workshop_li4" style=" height: 45px;"><a class="workshop_text" id="workshop_text4" style="height: 45px;line-height: 47px;" href="#!" >BUSINESS PLAN</a></li>
  <li id="workshop_li5" style=" height: 45px;"><a class="workshop_text" id="workshop_text5" style="height: 45px;line-height: 47px;" href="#!" >ETHICAL HACKING</a></li>
  <li id="workshop_li6" style=" height: 45px;"><a class="workshop_text" id="workshop_text6" style="height: 45px;line-height: 47px;" href="#!" >RC CARS</a></li>
  <li id="workshop_li7" style=" height: 45px;"><a class="workshop_text" id="workshop_text7" style="height: 45px;line-height: 47px;" href="#!" >TRANCEBOTICS</a></li>
  <li id="workshop_li8" style=" height: 45px;"><a class="workshop_text" id="workshop_text8" style="height: 45px;line-height: 47px;" href="#!" >WIRELESS SENSOR NETWORKS</a></li>
  <li id="workshop_li9" style=" height: 45px;"><a class="workshop_text" id="workshop_text9" style="height: 45px;line-height: 47px;" href="#!" >NATIONAL INSTRUMENTS</a></li>
  </ul>
  
<div class="row">
  
  
     
     <div id="content_box_parent" class="offset-s3 col s9 m9" style="height:500px">
      <div id="container_box" class="row" style="">
        <div id="parallelogram" class="col s4" >
            <div id="first_container" style="color: #00b4ff;">ACCELEROBOTICS</div>
        </div>
        <a href="#"><div id="parallelogram1"  class="col s4">

        </div></a>
        <a href="#"><div id="parallelogram2"  class="col s4">
                                <div id="first_container">DESCRIPTION</div>
        </div></a>
        <a href="#"><div id="parallelogram3"  class="col s4">

        </div></a>
        <a href="#"><div id="parallelogram4"  class="col s4">
                                 <div id="first_container">DETAILS</div>
        </div></a>
        <a href="#"><a href="#"><div id="parallelogram5"  class="col s4">

        </div>
        <a href="#"><div id="parallelogram6"  class="col s4">
                                 <div id="first_container">CONTACTS</div>
        </div></a>
            <br><br>
            <div   class="row">
              <div id="workshop_content"  class="col s12 m6 fixed_width">
              <p style="width:100% !important;">
            Conducted by <span style="font-weight:bolder"> ARK Techno Solutions</span>, this workshop aims at giving the participants an introduction to<span style="font-weight:bolder"> Robotics</span>, <span style="font-weight:bolder">Embedded systems </span> and<span style="font-weight:bolder"> Arduino</span>. The workshop will describe how to interface Accelerometer with Arduino. On attending this workshop students will learn how to create an Accelerometer based gesture controlled robot, PC-mouse, PC-games, etc.
       </p>
        </div>
        <div id="wrk_img" class="offset-m1 col s12 m6 right-align" >
          <img id="work_image" src='images/accel.png'></img>
        </div>
      </div>

       <!--  <div id="wrk_img">
          <img src='images/accel.png'></img>
        </div> -->
      </div>
     </div>

</div>
<?php
include "footer.php"
?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/main.js"></script>

        <script type="text/javascript">
            $(window).load(function() {
                $(".loaderClass").fadeOut(300,function(){
                    $(".fullpage").delay(400).fadeIn(300);
                });
            });
        </script>

</body>
<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-57882122-3', 'auto');
  ga('send', 'pageview');
</script>
</html>