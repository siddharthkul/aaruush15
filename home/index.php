<!DOCTYPE html>

<html>



<head>

    <title>Aaruush'15</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="./css/layout.css">

    <link rel="stylesheet" type="text/css" href="./css/jquery.fullPage.css" />

    <link rel="stylesheet" type="text/css" href="./css/common.css" />

    <link rel="stylesheet" type="text/css" href="./css/demo.css" />

    <link rel="stylesheet" type="text/css" href="./css/index1.css">

    <link rel="icon" href="images/favi.ico" type="image/x-icon"/>

	

	<?php

		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");

	

		if ($android == true) 

		{ 

		header('Location: https://play.google.com/store/apps/details?id=webarch.aaruush15&hl=en');

		}

	?>

    <style type="text/css">

        body {

            margin: 0;

            font: normal 25% Arial, Helvetica, sans-serif;

            overflow:hidden;

        }

        

        .fullpage{

            display: none;

        }



        canvas {

            display: block;

            vertical-align: bottom;

        }



        .menu_bar{

            font-family: 'Roboto';

            font-size: 10px;

            font-size: 1.5vw;

            color:#FFF;

            position: absolute;

            top:60px;

            left:30px;

            text-align: center;

            font-weight: 100;

            

        }

        /* ---- particles.js container ---- */

        

        #particles-js {

            position: absolute;

            width: 100%;

            height: 100%;

            background-color: ;

            background-image: url("");

            background-repeat: no-repeat;

            background-size: cover;

            background-position: 50% 50%;

        }

        /* ---- stats.js ---- */

        

        .count-particles {

            background: #000022;

            position: absolute;

            top: 48px;

            left: 0;

            width: 80px;

            color: #13E8E9;

            font-size: .8em;

            text-align: left;

            text-indent: 4px;

            

            line-height: 14px;

            padding-bottom: 2px;

            font-family: Helvetica, Arial, sans-serif;

            font-weight: bold;

        }

        

        .js-count-particles {

            font-size: 1.1em;

        }

        

        #stats,

        .count-particles {

            -webkit-user-select: none;

            margin-top: 5px;

            margin-left: 5px;

        }

        

        #stats {

            border-radius: 3px 3px 0 0;

            overflow: hidden;

        }

        

        .count-particles {

            border-radius: 0 0 3px 3px;

        }

        

        #stats {

            display: none !important;

        }

        

        .section {

            background: -webkit-radial-gradient(circle, white, gray);

            background: -o-radial-gradient(circle, white, gray);

            /* Opera 11.6 to 12.0 */

            background: -moz-radial-gradient(circle, white, gray);

            /* Firefox 3.6 to 15 */

            background: radial-gradient(circle, white, gray);

            /* Standard syntax */

        }

        

        #image {

              position: relative;

              left: 263px;

              top: 87px;

        }

        

        #triangle-right1 {

            width: 0;

            height: 0;

            border-top: 40px solid transparent;

            border-left: 80px solid #383838;

            border-bottom: 40px solid transparent;

            -webkit-transition: background 1s;

            /* Safari 3.1 to 6.0 */

            transition: border-left 1s;

        }

        

        #triangle-left1 {

            width: 0;

            height: 0;

            margin-top: -38px;

            border-top: 40px solid transparent;

            border-right: 80px solid #383838;

            border-bottom: 40px solid transparent;

            -webkit-transition: background 1s;

            /* Safari 3.1 to 6.0 */

            transition: border-right 1s;

        }

        

        #triangle-right2 {

            width: 0;

            height: 0;

            margin-top: -38px;

            border-top: 40px solid transparent;

            border-left: 80px solid #383838;

            border-bottom: 40px solid transparent;

            -webkit-transition: background 1s;

            /* Safari 3.1 to 6.0 */

            transition: border-left 1s;

        }

        

        #triangle-left2 {

            width: 0;

            height: 0;

            margin-top: -38px;

            border-top: 40px solid transparent;

            border-right: 80px solid #383838;

            border-bottom: 40px solid transparent;

            -webkit-transition: background 1s;

            /* Safari 3.1 to 6.0 */

            transition: border-right 1s;

        }

        

        #triangle-right3 {

            width: 0;

            height: 0;

            margin-top: -38px;

            border-top: 40px solid transparent;

            border-left: 80px solid #383838;

            border-bottom: 40px solid transparent;

            -webkit-transition: background 0.5s;

            /* Safari 3.1 to 6.0 */

            transition: border-left 0.5s;

        }

        

        #triangle-right1:hover {

            border-left: 80px solid #7e7e7e;

        }

        

        #triangle-left1:hover {

            border-right: 80px solid #7e7e7e;

        }

        

        #triangle-right2:hover {

            border-left: 80px solid #7e7e7e;

        }

        

        #triangle-left2:hover {

            border-right: 80px solid #7e7e7e;

        }

        

        #triangle-right3:hover {

            border-left: 80px solid #7e7e7e;

        }

                

        #image_new {

          margin-left: -76px;

          margin-top: -17px;

          position: absolute;

        }

        

        #image_new_right_asquare {

            margin: -14px 38px;

            position: absolute;

        }

        

        #image_new_right_tool {

            margin: -25px 38px;

            position: absolute;

        }

        

        #left_sidebar {

            position: absolute;

            top: 178px;

        }

        

        #right_sidebar {

            position: absolute;

            right: 0px;

            top: 181px;

        }

        

        @-moz-keyframes bounce {

            0%,

            20%,

            50%,

            80%,

            100% {

                -moz-transform: translateY(0);

                transform: translateY(0);

            }

            40% {

                -moz-transform: translateY(-30px);

                transform: translateY(-30px);

            }

            60% {

                -moz-transform: translateY(-15px);

                transform: translateY(-15px);

            }

        }

        

        @-webkit-keyframes bounce {

            0%,

            20%,

            50%,

            80%,

            100% {

                -webkit-transform: translateY(0);

                transform: translateY(0);

            }

            40% {

                -webkit-transform: translateY(-30px);

                transform: translateY(-30px);

            }

            60% {

                -webkit-transform: translateY(-15px);

                transform: translateY(-15px);

            }

        }

        

        @keyframes bounce {

            0%,

            20%,

            50%,

            80%,

            100% {

                -moz-transform: translateY(0);

                -ms-transform: translateY(0);

                -webkit-transform: translateY(0);

                transform: translateY(0);

            }

            40% {

                -moz-transform: translateY(-30px);

                -ms-transform: translateY(-30px);

                -webkit-transform: translateY(-30px);

                transform: translateY(-30px);

            }

            60% {

                -moz-transform: translateY(-15px);

                -ms-transform: translateY(-15px);

                -webkit-transform: translateY(-15px);

                transform: translateY(-15px);

            }

        }

        

        .arrow {

            position: absolute;

            bottom: 0;

            margin-left: 34px;

            width: 50px;

            height: 50px;

            background-image: url(images/arrow.png);

            background-size: contain;

            background-repeat: no-repeat;

        }

        

        .bounce {

            -moz-animation: bounce 2s infinite;

            -webkit-animation: bounce 2s infinite;

            animation: bounce 2s infinite;

        }

        

        #arrow_flip {

            position: fixed;

            left: 630px;

            bottom: 0px;

        }

        

        #srm_logo {

            position: absolute;

            top: 45px;

            left: 30px;

        }

        #top_bar {

          height: 35px;

          width: 100%;

          position: absolute;

          background-color: #383838;

          border-bottom:4px solid #4682B4;

          font-size: 17px;

          color: #28AADC;

          box-sizing: border-box;

        }

        #top_bar div.navblock{

            float: right;

            width: 100%;

            text-align: center;

            font-family: 'Roboto';

        }

        #top_bar div.navblock .pipe{

            color: #FFF;

        }

        .navblock div:hover{

            color: #FFF;

            cursor: pointer;

        }

        #top_bar div.navblock div a{

            -webkit-transition: all 0.1s linear;

            -moz-transition: all 0.1s linear;

            -o-transition: all 0.1s linear;

            transition: all 0.1s linear;

        }

        #top_bar div.navblock div a:hover{

            color: #FFF;

        }

        #top_bar div.navblock div{

            display: inline-block;

            box-sizing: border-box;

            padding: 2px 14px 2px 14px;

            text-align: right;

        }

        #aaruush_logo{

            position:absolute;

            right:25px;

            top:37px;

        }

        .timer{

            position: absolute;

            bottom: 20px;

            right: 30px;

            color: #000000;

            font-size: 17px;

            text-align: center;

        }

        .timer .daystitle{

            font-weight: bold !important;

            color: #1A51C0;

            font-size: 20px;

            font-family: roboto;

        }

        .navblock a{font-weight: 900;}

    </style>

</head>







    <?php

        include_once('loader.php');

    ?>



<body>



    <!-- Facebook SDK JS -->



    <div id="fb-root"></div>

    <script>(function(d, s, id) {

      var js, fjs = d.getElementsByTagName(s)[0];

      if (d.getElementById(id)) return;

      js = d.createElement(s); js.id = id;

      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=613876921967621";

      fjs.parentNode.insertBefore(js, fjs);

    }(document, 'script', 'facebook-jssdk'));</script>

     



    <!-- Common Modal -->

    

    <div class="modal" style="display: none;">

        <div class="close"><b>X</b></div>

        <center>

            <div class="modalcontent" style="width: 40%;">

                <center>

               <div class="fb-page" data-href="https://www.facebook.com/aaruush.srm" data-width="550" data-height="550" 

               data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" 

               data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/aaruush.srm">

               <a href="https://www.facebook.com/aaruush.srm">Aaruush, SRM University</a></blockquote></div></div>

               </center>

            </div>

        </center>

    </div>



    <div class="videomodal" style="display: none;">

        <div class="close"><b>X</b></div>

        <center>

            <div class="modalcontent" style="width: 100%;">

                <center>

                    <iframe width="853" height="480" src="https://www.youtube.com/embed/rarLuUhvRuw?rel=0&vq=hd720&amp;showinfo=0" class="videoframe" frameborder="0" allowfullscreen></iframe>

                </center>

            </div>

        </center>

    </div>

    







    <div id="fullpage">

        <div class="section" id="section1">

            <div id="particles-js"></div>

            <div id="top_bar" class="row">

                <div class="navblock">

                    <div><a href="http://aaruush.net/blog/index.php">Blog</a></div>

                    

                    <div><a href="http://www.campusinteraction.com/Campusinteraction/showAaruushHome.action" target="_blank">Registration</a></div>

                    

                    <div><a href="./sponsors.php">Sponsors</a></div>

                    

                    <div><a href="">Project</a></div>

                    

                    <div><a href="http://konvolve.in" target="_blank">Konvolve</a></div>



                    <div><a href="teamwebarch.php" target="_blank">Credits</a></div>



                </div>

            </div>

            <div id="srm_logo">

             <a href="http://www.srmuniv.ac.in" target="_blank">    <img width="125px" src="images/srm.png" style="position:relative;top:10px"></img> </a>

            </div>

            <div id="aaruush_logo">

             <a href=""> <img width="190px" src="images/aaruush_unseco.png" style="position:relative;left:15px"></img> </a>

            </div>

            <div style="position: absolute; left: 50%; top: 48%; transform: translate(-50%, -50%);" id="image">

                  <img style="" src="images/center3.png"> 

            </div>

            <div id="left_sidebar">

                <div id="triangle-right1" value="r">

                 <img id="image_new" src="images/new.png"></img> 

                </div>

                <div id="triangle-left1">

                 <a href="">     <img id="image_new_right_asquare" src="images/sicon2.png"></img> </a>

                </div>

                <div id="triangle-right2">

                <a href="https://play.google.com/store/apps/details?id=webarch.aaruush15&hl=en" target="_blank">      <img id="image_new" src="images/sicon6.png"></img> </a>

                </div>

                <div id="triangle-left2">

                <a href="http://robotics.aaruush.net">      <img id="image_new_right_tool" src="images/sicon4.png"></img> </a>

                </div>

                <div id="triangle-right3">

                <img id="image_new" src="images/sicon7.png"></img>

                </div>



            </div>

            <div id="right_sidebar">

                <div class="component">

                    <a href="https://www.facebook.com/aaruush.srm" target="_blank" id="facebook" class="icon icon-cube1 facebook">facebook</a>

                    <br>

                    <a href="https://twitter.com/aaruush_srmuniv" target="_blank" id="twitter" class="icon icon-cube2 twitter">twitter</a>

                    <br>

                    <a href="https://www.youtube.com/aaruush12" target="_blank" id="youtube" class="icon icon-cube3 googleplus">google+</a>

                    <br>

                    <a href="https://www.instagram.com/aaruush_srm" target="_blank" id="youtube" class="icon icon-cube4 googleplus">google+</a>

                </div>

            </div>

            <a data-menuanchor="firstPage" href="#secondPage">

               <div style="position: absolute; left: 46%; top: 100%; transform: translate(-50%, -50%);" id="arrow_flip">



                        <div class="arrow bounce">



                        </div>

                </div>

            </a>

            

            <div class="rotatingCube">

                <div class="wrap">

                    <div class="cube">

                        <a href="https://www.facebook.com/aaruush.srm/photos/pb.172731949541472.-2207520000.1441799729./520603524754311/?type=3&src=https%3A%2F%2Fscontent.fmaa1-1.fna.fbcdn.net%2Fhphotos-xlf1%2Ft31.0-8%2F11951483_520603524754311_4601046101519349744_o.jpg&smallsrc=https%3A%2F%2Fscontent.fmaa1-1.fna.fbcdn.net%2Fhphotos-xta1%2Fv%2Ft1.0-9%2F11222790_520603524754311_4601046101519349744_n.jpg%3Foh%3Dca523c2f31bfc16895ed011f6ac5de60%26oe%3D566FBBF6&size=2048%2C1638&fbid=520603524754311" target="_blank"><div class="left"></div></a>
                        
                        <a href="https://www.facebook.com/aaruush.srm/photos/pb.172731949541472.-2207520000.1441800053./519876514827012/?type=3&src=https%3A%2F%2Fscontent.fmaa1-1.fna.fbcdn.net%2Fhphotos-xpa1%2Fv%2Ft1.0-9%2F11990500_519876514827012_4842593901253667412_n.jpg%3Foh%3Db27ffb44219eb796d8d93eb61c73a5b3%26oe%3D56660713&size=960%2C720&fbid=519876514827012" target="_blank"><div class="right"></div></a>
                        
                        <a href="http://www.chennaiyil.com/item/agnee-live-in-concert/" style='height:100%; width:100%;' target="_blank"><div class="front"></div></a>
                        
                        <a href="https://www.facebook.com/aaruush.srm/photos/a.309405862540746.1073741879.172731949541472/520929721388358/?type=1" style='height:100%; width:100%;' target="_blank"><div class="back"></div></a>
                        
                        <div class="top">top</div>

                        <div class="bottom">bottom</div>

                        

                    </div>

                </div>

            </div>

          <div class="timer">

           <a href="events_content/logistics.pdf">

                <span class="daystitle">Logistics PDF</span><br>

               <span class="pdf" style="font-size: 120%; font-weight: bold; font-family: roboto; color: rgb(0, 0, 0);" ></span></a>

           </div>



        </div>

        <div class="section" id="section2">

                <!-- particles.js container -->

            <div id="particless-js"></div>



                <div id="home-section2-tabs-events">

                    <div class="raise" id="bird4"><img id="spinner-b" src="images/bird4.png"></div>

                    <div class="raise" id="bird3"><img id="spinner-b" src="images/bird3.png"></div>

                    <div class="raise" id="a-sphere"><img id="spinner" class="polysphere" src="images/polysphere.png" style="max-width:100%;"></div>

                    <div class="raise" id="bird1"><img id="spinner-b" src="images/bird1.png"></div>

                    <div class="raise" id="bird2"><img id="spinner-b" src="images/bird2.png"></div>

                    <div class="row sec2-div2 footer-raise">

                        <div class="col-tabs raise2 tabs border">

                            <a href="about_us.php"><div class="bg-dots arrow-up"><span class="menu_bar" style="left:40px;">About Us</span><img class="bg-dot" id="img1" src="images/dots.png"></div></a>

                        </div>

                        <div class="col-tabs raise2 tabs border">

                            <a href="hospitality.php"><div class="bg-dots arrow-up"><span class="menu_bar" style="left:40px;">Hospitality</span><img class="bg-dot" src="images/dots.png"></div></a>

                        </div>

                        <div class="col-tabs raise2 tabs border">

                            <a href="events.php"><div class="bg-dots arrow-up"><span class="menu_bar" style="left:55px;">Events</span><img class="bg-dot" src="images/dots.png"></div></a>

                        </div>

                        <div class="col-tabs raise2 tabs border">

                            <a href="workshop.php"><div class="bg-dots arrow-up"><span class="menu_bar">Workshops</span><img class="bg-dot" src="images/dots.png"></div></a>

                        </div>

                        <div class="col-tabs raise2 tabs border">

                            <a href="highlights.php"><div class="bg-dots arrow-up"><span class="menu_bar" style="left:40px;">Highlights</span><img class="bg-dot" src="images/dots.png"></div></a>

                        </div>

                        <div class="col-tabs raise2 tabs border">

                            <a href="champ.php"><div class="bg-dots arrow-up"><span class="menu_bar" style="left:15px;">Championships</span><img class="bg-dot" src="images/dots.png"></div></a>

                        </div>

                        <div class="col-tabs raise2 tabs border">

                            <a href="gallery.php" target="_blank"><div class="bg-dots arrow-up"><span class="menu_bar" style="left:50px">Gallery</span><img class="bg-dot" src="images/dots.png"></div></a>

                        </div>

                        <div class="col-tabs raise2 tabs border">

                            <a href="contact.php"><div class="bg-dots arrow-up">

                                <span class="menu_bar" style="left:40px;">Contact Us</span><img class="bg-dot" src="images/dots.png"></div></a>

                        </div>

                        

                    </div>



                    <div class="foot footer-raise">

                        <div class="row">

                            <span class="copyright">&copy; Webarch - 2015</span>

                           <a href="http://www.webarchsrm.com" target="_blank"> <img id="footer-logo" src="images/walogo1.png"></a>

                           <svg width="100%" height="35pt"  viewBox="0 0 1366 35" version="1.1" xmlns="http://www.w3.org/2000/svg">

                            <path fill="#1f7cca" d=" M 0.00 0.00 L 1366.00 0.00 L 1366.00 35.00 L 862.26 35.00 C 942.43 26.99 1022.67 19.65 1102.86 11.90 C 1129.67 9.47 1156.43 6.52 1183.27 4.47 C 1173.53 3.67 1163.75 4.11 1154.00 4.00 C 938.66 4.00 723.33 4.00 507.99 4.00 C 502.16 4.05 496.38 4.82 490.58 5.33 C 397.73 14.04 304.88 22.74 212.03 31.44 C 200.09 32.64 188.11 33.47 176.21 35.00 L 0.00 35.00 L 0.00 0.00 Z" />

                            

                            </svg>                       

                       



                        </div>

                    </div>



                </div>

            </div>

    </div>





        <script src="js/jquery.min.js" type="text/javascript"></script>

        <script src="js/jquery.fullPage.min.js" type="text/javascript"></script>

        <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

        <script src="js/particles.min.js" type="text/javascript"></script>

        <script src="js/index.js" type="text/javascript"></script>

        <!--script type="text/javascript" src="js/particless.min.js"></script-->

        <script type="text/javascript" src="js/index1.js"></script>

        <script src="js/app.js" type="text/javascript"></script>

        <script src="js/modernizr.js" type="text/javascript"></script>

       



        <script type="text/javascript">

            $(window).load(function() {

                $(".loaderClass").fadeOut(300,function(){

                    $(".fullpage").delay(400).fadeIn(300);

                });

                

                





                //Modal Part

                $("#triangle-right1 , .feedback").bind('click',function(){

                    $(".modal").fadeIn(300);

                    $(".modal .close").fadeIn();

                    $(".modal .modalcontent").delay(301).slideDown(500);

                    if(this.id=="triangle-right1")

                    {

                        $(".fb-page").show();

                        $("#form").hide();

                    }

                  

                    

                });



                $("#triangle-right3").bind('click',function(){

                    $(".videomodal").fadeIn(300);

                    $(".videomodal .close").fadeIn();

                    $(".videomodal .modalcontent").delay(301).slideDown(300);

                });



                $(".modal .close").bind("click",function(){

                    $(".modal .close").fadeOut();

                    $(".modal .modalcontent").slideUp(300);

                    $(".modal").delay(301).fadeOut(300)

                });



                $(".videomodal .close").bind("click",function(){

                    var source=$(".videoframe").attr("src");

                    $(".videoframe").attr("src",source);

                    $(".videomodal .close").fadeOut();

                    $(".videomodal .modalcontent").slideUp(300);

                    $(".videomodal").delay(301).fadeOut(300);

                });

                //Modal Part Ends



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

			
=======
<!DOCTYPE html>
<html>

<head>
    <title>Aaruush'15</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./css/layout.css">
    <link rel="stylesheet" type="text/css" href="./css/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="./css/common.css" />
    <link rel="stylesheet" type="text/css" href="./css/demo.css" />
    <link rel="stylesheet" type="text/css" href="./css/index1.css">
    <link rel="icon" href="images/favi.ico" type="image/x-icon"/>
	
	<?php
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
	
		if ($android == true) 
		{ 
		header('Location: https://play.google.com/store/apps/details?id=webarch.aaruush15&hl=en');
		}
	?>
    <style type="text/css">
        body {
            margin: 0;
            font: normal 25% Arial, Helvetica, sans-serif;
            overflow:hidden;
        }
        
        .fullpage{
            display: none;
        }

        canvas {
            display: block;
            vertical-align: bottom;
        }

        .menu_bar{
            font-family: 'Roboto';
            font-size: 10px;
            font-size: 1.5vw;
            color:#FFF;
            position: absolute;
            top:60px;
            left:30px;
            text-align: center;
            font-weight: 100;
            
        }
        /* ---- particles.js container ---- */
        
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: ;
            background-image: url("");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 50%;
        }
        /* ---- stats.js ---- */
        
        .count-particles {
            background: #000022;
            position: absolute;
            top: 48px;
            left: 0;
            width: 80px;
            color: #13E8E9;
            font-size: .8em;
            text-align: left;
            text-indent: 4px;
            
            line-height: 14px;
            padding-bottom: 2px;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: bold;
        }
        
        .js-count-particles {
            font-size: 1.1em;
        }
        
        #stats,
        .count-particles {
            -webkit-user-select: none;
            margin-top: 5px;
            margin-left: 5px;
        }
        
        #stats {
            border-radius: 3px 3px 0 0;
            overflow: hidden;
        }
        
        .count-particles {
            border-radius: 0 0 3px 3px;
        }
        
        #stats {
            display: none !important;
        }
        
        .section {
            background: -webkit-radial-gradient(circle, white, gray);
            background: -o-radial-gradient(circle, white, gray);
            /* Opera 11.6 to 12.0 */
            background: -moz-radial-gradient(circle, white, gray);
            /* Firefox 3.6 to 15 */
            background: radial-gradient(circle, white, gray);
            /* Standard syntax */
        }
        
        #image {
              position: relative;
              left: 263px;
              top: 87px;
        }
        
        #triangle-right1 {
            width: 0;
            height: 0;
            border-top: 40px solid transparent;
            border-left: 80px solid #383838;
            border-bottom: 40px solid transparent;
            -webkit-transition: background 1s;
            /* Safari 3.1 to 6.0 */
            transition: border-left 1s;
        }
        
        #triangle-left1 {
            width: 0;
            height: 0;
            margin-top: -38px;
            border-top: 40px solid transparent;
            border-right: 80px solid #383838;
            border-bottom: 40px solid transparent;
            -webkit-transition: background 1s;
            /* Safari 3.1 to 6.0 */
            transition: border-right 1s;
        }
        
        #triangle-right2 {
            width: 0;
            height: 0;
            margin-top: -38px;
            border-top: 40px solid transparent;
            border-left: 80px solid #383838;
            border-bottom: 40px solid transparent;
            -webkit-transition: background 1s;
            /* Safari 3.1 to 6.0 */
            transition: border-left 1s;
        }
        
        #triangle-left2 {
            width: 0;
            height: 0;
            margin-top: -38px;
            border-top: 40px solid transparent;
            border-right: 80px solid #383838;
            border-bottom: 40px solid transparent;
            -webkit-transition: background 1s;
            /* Safari 3.1 to 6.0 */
            transition: border-right 1s;
        }
        
        #triangle-right3 {
            width: 0;
            height: 0;
            margin-top: -38px;
            border-top: 40px solid transparent;
            border-left: 80px solid #383838;
            border-bottom: 40px solid transparent;
            -webkit-transition: background 0.5s;
            /* Safari 3.1 to 6.0 */
            transition: border-left 0.5s;
        }
        
        #triangle-right1:hover {
            border-left: 80px solid #7e7e7e;
        }
        
        #triangle-left1:hover {
            border-right: 80px solid #7e7e7e;
        }
        
        #triangle-right2:hover {
            border-left: 80px solid #7e7e7e;
        }
        
        #triangle-left2:hover {
            border-right: 80px solid #7e7e7e;
        }
        
        #triangle-right3:hover {
            border-left: 80px solid #7e7e7e;
        }
                
        #image_new {
          margin-left: -76px;
          margin-top: -17px;
          position: absolute;
        }
        
        #image_new_right_asquare {
            margin: -14px 38px;
            position: absolute;
        }
        
        #image_new_right_tool {
            margin: -25px 38px;
            position: absolute;
        }
        
        #left_sidebar {
            position: absolute;
            top: 178px;
        }
        
        #right_sidebar {
            position: absolute;
            right: 0px;
            top: 181px;
        }
        
        @-moz-keyframes bounce {
            0%,
            20%,
            50%,
            80%,
            100% {
                -moz-transform: translateY(0);
                transform: translateY(0);
            }
            40% {
                -moz-transform: translateY(-30px);
                transform: translateY(-30px);
            }
            60% {
                -moz-transform: translateY(-15px);
                transform: translateY(-15px);
            }
        }
        
        @-webkit-keyframes bounce {
            0%,
            20%,
            50%,
            80%,
            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            40% {
                -webkit-transform: translateY(-30px);
                transform: translateY(-30px);
            }
            60% {
                -webkit-transform: translateY(-15px);
                transform: translateY(-15px);
            }
        }
        
        @keyframes bounce {
            0%,
            20%,
            50%,
            80%,
            100% {
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            40% {
                -moz-transform: translateY(-30px);
                -ms-transform: translateY(-30px);
                -webkit-transform: translateY(-30px);
                transform: translateY(-30px);
            }
            60% {
                -moz-transform: translateY(-15px);
                -ms-transform: translateY(-15px);
                -webkit-transform: translateY(-15px);
                transform: translateY(-15px);
            }
        }
        
        .arrow {
            position: absolute;
            bottom: 0;
            margin-left: 34px;
            width: 50px;
            height: 50px;
            background-image: url(images/arrow.png);
            background-size: contain;
            background-repeat: no-repeat;
        }
        
        .bounce {
            -moz-animation: bounce 2s infinite;
            -webkit-animation: bounce 2s infinite;
            animation: bounce 2s infinite;
        }
        
        #arrow_flip {
            position: fixed;
            left: 630px;
            bottom: 0px;
        }
        
        #srm_logo {
            position: absolute;
            top: 45px;
            left: 30px;
        }
        #top_bar {
          height: 35px;
          width: 100%;
          position: absolute;
          background-color: #383838;
          border-bottom:4px solid #4682B4;
          font-size: 17px;
          color: #28AADC;
          box-sizing: border-box;
        }
        #top_bar div.navblock{
            float: right;
            width: 100%;
            text-align: center;
            font-family: 'Roboto';
        }
        #top_bar div.navblock .pipe{
            color: #FFF;
        }
        .navblock div:hover{
            color: #FFF;
            cursor: pointer;
        }
        #top_bar div.navblock div a{
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            -o-transition: all 0.1s linear;
            transition: all 0.1s linear;
        }
        #top_bar div.navblock div a:hover{
            color: #FFF;
        }
        #top_bar div.navblock div{
            display: inline-block;
            box-sizing: border-box;
            padding: 2px 14px 2px 14px;
            text-align: right;
        }
        #aaruush_logo{
            position:absolute;
            right:25px;
            top:37px;
        }
        .timer{
            position: absolute;
            bottom: 20px;
            right: 30px;
            color: #000000;
            font-size: 17px;
            text-align: center;
        }
        .timer .daystitle{
            font-weight: bold !important;
            color: #1A51C0;
            font-size: 20px;
            font-family: roboto;
        }
        .navblock a{font-weight: 900;}
    </style>
</head>



    <?php
        include_once('loader.php');
    ?>

<body>

    <!-- Facebook SDK JS -->

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=613876921967621";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
     

    <!-- Common Modal -->
    
    <div class="modal" style="display: none;">
        <div class="close"><b>X</b></div>
        <center>
            <div class="modalcontent" style="width: 40%;">
                <center>
               <div class="fb-page" data-href="https://www.facebook.com/aaruush.srm" data-width="550" data-height="550" 
               data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" 
               data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/aaruush.srm">
               <a href="https://www.facebook.com/aaruush.srm">Aaruush, SRM University</a></blockquote></div></div>
               </center>
            </div>
        </center>
    </div>

    <div class="videomodal" style="display: none;">
        <div class="close"><b>X</b></div>
        <center>
            <div class="modalcontent" style="width: 100%;">
                <center>
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/rarLuUhvRuw?rel=0&vq=hd720&amp;showinfo=0" class="videoframe" frameborder="0" allowfullscreen></iframe>
                </center>
            </div>
        </center>
    </div>
    



    <div id="fullpage">
        <div class="section" id="section1">
            <div id="particles-js"></div>
            <div id="top_bar" class="row">
                <div class="navblock">
                    <div><a href="http://aaruush.net/blog/index.php">Blog</a></div>
                    
                    <div><a href="http://www.campusinteraction.com/Campusinteraction/showAaruushHome.action" target="_blank">Registration</a></div>
                    
                    <div><a href="./sponsors.php">Sponsors</a></div>
                    
                    <div><a href="">Project</a></div>
                    
                    <div><a href="http://konvolve.in" target="_blank">Konvolve</a></div>

                    <div><a href="teamwebarch.php" target="_blank">Credits</a></div>

                </div>
            </div>
            <div id="srm_logo">
             <a href="http://www.srmuniv.ac.in" target="_blank">    <img width="125px" src="images/srm.png" style="position:relative;top:10px"></img> </a>
            </div>
            <div id="aaruush_logo">
             <a href=""> <img width="190px" src="images/aaruush_unseco.png" style="position:relative;left:15px"></img> </a>
            </div>
            <div style="position: absolute; left: 50%; top: 48%; transform: translate(-50%, -50%);" id="image">
                  <img style="" src="images/center3.png"> 
            </div>
            <div id="left_sidebar">
                <div id="triangle-right1" value="r">
                 <img id="image_new" src="images/new.png"></img> 
                </div>
                <div id="triangle-left1">
                 <a href="">     <img id="image_new_right_asquare" src="images/sicon2.png"></img> </a>
                </div>
                <div id="triangle-right2">
                <a href="https://play.google.com/store/apps/details?id=webarch.aaruush15&hl=en" target="_blank">      <img id="image_new" src="images/sicon6.png"></img> </a>
                </div>
                <div id="triangle-left2">
                <a href="http://robotics.aaruush.net">      <img id="image_new_right_tool" src="images/sicon4.png"></img> </a>
                </div>
                <div id="triangle-right3">
                <img id="image_new" src="images/sicon7.png"></img>
                </div>

            </div>
            <div id="right_sidebar">
                <div class="component">
                    <a href="https://www.facebook.com/aaruush.srm" target="_blank" id="facebook" class="icon icon-cube1 facebook">facebook</a>
                    <br>
                    <a href="https://twitter.com/aaruush_srmuniv" target="_blank" id="twitter" class="icon icon-cube2 twitter">twitter</a>
                    <br>
                    <a href="https://www.youtube.com/aaruush12" target="_blank" id="youtube" class="icon icon-cube3 googleplus">google+</a>
                    <br>
                    <a href="https://www.instagram.com/aaruush_srm" target="_blank" id="youtube" class="icon icon-cube4 googleplus">google+</a>
                </div>
            </div>
            <a data-menuanchor="firstPage" href="#secondPage">
               <div style="position: absolute; left: 46%; top: 100%; transform: translate(-50%, -50%);" id="arrow_flip">

                        <div class="arrow bounce">

                        </div>
                </div>
            </a>
            
            <div class="rotatingCube">
                <div class="wrap">
                    <div class="cube">
                        <a href="https://www.facebook.com/aaruush.srm/photos/pb.172731949541472.-2207520000.1441799729./520603524754311/?type=3&src=https%3A%2F%2Fscontent.fmaa1-1.fna.fbcdn.net%2Fhphotos-xlf1%2Ft31.0-8%2F11951483_520603524754311_4601046101519349744_o.jpg&smallsrc=https%3A%2F%2Fscontent.fmaa1-1.fna.fbcdn.net%2Fhphotos-xta1%2Fv%2Ft1.0-9%2F11222790_520603524754311_4601046101519349744_n.jpg%3Foh%3Dca523c2f31bfc16895ed011f6ac5de60%26oe%3D566FBBF6&size=2048%2C1638&fbid=520603524754311" target="_blank"><div class="left"></div></a>
                        <a href="https://www.facebook.com/aaruush.srm/photos/pb.172731949541472.-2207520000.1441800053./519876514827012/?type=3&src=https%3A%2F%2Fscontent.fmaa1-1.fna.fbcdn.net%2Fhphotos-xpa1%2Fv%2Ft1.0-9%2F11990500_519876514827012_4842593901253667412_n.jpg%3Foh%3Db27ffb44219eb796d8d93eb61c73a5b3%26oe%3D56660713&size=960%2C720&fbid=519876514827012" target="_blank"><div class="right"></div></a>
                        <a href="https://www.facebook.com/aaruush.srm/photos/pb.172731949541472.-2207520000.1441800053./519363384878325/?type=3&src=https%3A%2F%2Fscontent.fmaa1-1.fna.fbcdn.net%2Fhphotos-xpf1%2Ft31.0-8%2F11934484_519363384878325_8555193642116033595_o.jpg&smallsrc=https%3A%2F%2Fscontent.fmaa1-1.fna.fbcdn.net%2Fhphotos-xlp1%2Fv%2Ft1.0-9%2F11952001_519363384878325_8555193642116033595_n.jpg%3Foh%3Defaecf52c049df35df596b5ac480d836%26oe%3D5665FB16&size=1702%2C630&fbid=519363384878325" style='height:100%; width:100%;' target="_blank"><div class="front"></div></a>
                        <a href="https://www.facebook.com/aaruush.srm/photos/a.309405862540746.1073741879.172731949541472/520929721388358/?type=1" style='height:100%; width:100%;' target="_blank"><div class="back"></div></a>
                        <div class="top">top</div>
                        <div class="bottom">bottom</div>
                        
                    </div>
                </div>
            </div>

        </div>
        <div class="section" id="section2">
                <!-- particles.js container -->
            <div id="particless-js"></div>

                <div id="home-section2-tabs-events">
                    <div class="raise" id="bird4"><img id="spinner-b" src="images/bird4.png"></div>
                    <div class="raise" id="bird3"><img id="spinner-b" src="images/bird3.png"></div>
                    <div class="raise" id="a-sphere"><img id="spinner" class="polysphere" src="images/polysphere.png" style="max-width:100%;"></div>
                    <div class="raise" id="bird1"><img id="spinner-b" src="images/bird1.png"></div>
                    <div class="raise" id="bird2"><img id="spinner-b" src="images/bird2.png"></div>
                    <div class="row sec2-div2 footer-raise">
                        <div class="col-tabs raise2 tabs border">
                            <a href="about_us.php"><div class="bg-dots arrow-up"><span class="menu_bar" style="left:40px;">About Us</span><img class="bg-dot" id="img1" src="images/dots.png"></div></a>
                        </div>
                        <div class="col-tabs raise2 tabs border">
                            <a href="hospitality.php"><div class="bg-dots arrow-up"><span class="menu_bar" style="left:40px;">Hospitality</span><img class="bg-dot" src="images/dots.png"></div></a>
                        </div>
                        <div class="col-tabs raise2 tabs border">
                            <a href="events.php"><div class="bg-dots arrow-up"><span class="menu_bar" style="left:55px;">Events</span><img class="bg-dot" src="images/dots.png"></div></a>
                        </div>
                        <div class="col-tabs raise2 tabs border">
                            <a href="workshop.php"><div class="bg-dots arrow-up"><span class="menu_bar">Workshops</span><img class="bg-dot" src="images/dots.png"></div></a>
                        </div>
                        <div class="col-tabs raise2 tabs border">
                            <a href="highlights.php"><div class="bg-dots arrow-up"><span class="menu_bar" style="left:40px;">Highlights</span><img class="bg-dot" src="images/dots.png"></div></a>
                        </div>
                        <div class="col-tabs raise2 tabs border">
                            <a href="champ.php"><div class="bg-dots arrow-up"><span class="menu_bar" style="left:15px;">Championships</span><img class="bg-dot" src="images/dots.png"></div></a>
                        </div>
                        <div class="col-tabs raise2 tabs border">
                            <a href="gallery.php" target="_blank"><div class="bg-dots arrow-up"><span class="menu_bar" style="left:50px">Gallery</span><img class="bg-dot" src="images/dots.png"></div></a>
                        </div>
                        <div class="col-tabs raise2 tabs border">
                            <a href="contact.php"><div class="bg-dots arrow-up">
                                <span class="menu_bar" style="left:40px;">Contact Us</span><img class="bg-dot" src="images/dots.png"></div></a>
                        </div>
                        
                    </div>
                    <div class="foot footer-raise">
                        <div class="row">
                            <span class="copyright">&copy; Webarch - 2015</span>
                           <a href="http://www.webarchsrm.com" target="_blank"> <img id="footer-logo" src="images/walogo1.png"></a>
                           <svg width="100%" height="35pt"  viewBox="0 0 1366 35" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#1f7cca" d=" M 0.00 0.00 L 1366.00 0.00 L 1366.00 35.00 L 862.26 35.00 C 942.43 26.99 1022.67 19.65 1102.86 11.90 C 1129.67 9.47 1156.43 6.52 1183.27 4.47 C 1173.53 3.67 1163.75 4.11 1154.00 4.00 C 938.66 4.00 723.33 4.00 507.99 4.00 C 502.16 4.05 496.38 4.82 490.58 5.33 C 397.73 14.04 304.88 22.74 212.03 31.44 C 200.09 32.64 188.11 33.47 176.21 35.00 L 0.00 35.00 L 0.00 0.00 Z" />
                            
                            </svg>                       
                       

                        </div>
                    </div>

                </div>
            </div>
    </div>


        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.fullPage.min.js" type="text/javascript"></script>
        <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
        <script src="js/particles.min.js" type="text/javascript"></script>
        <script src="js/index.js" type="text/javascript"></script>
        <!--script type="text/javascript" src="js/particless.min.js"></script-->
        <script type="text/javascript" src="js/index1.js"></script>
        <script src="js/app.js" type="text/javascript"></script>
        <script src="js/modernizr.js" type="text/javascript"></script>
       

        <script type="text/javascript">
            $(window).load(function() {
                $(".loaderClass").fadeOut(300,function(){
                    $(".fullpage").delay(400).fadeIn(300);
                });
                
                


                //Modal Part
                $("#triangle-right1 , .feedback").bind('click',function(){
                    $(".modal").fadeIn(300);
                    $(".modal .close").fadeIn();
                    $(".modal .modalcontent").delay(301).slideDown(500);
                    if(this.id=="triangle-right1")
                    {
                        $(".fb-page").show();
                        $("#form").hide();
                    }
                  
                    
                });

                $("#triangle-right3").bind('click',function(){
                    $(".videomodal").fadeIn(300);
                    $(".videomodal .close").fadeIn();
                    $(".videomodal .modalcontent").delay(301).slideDown(300);
                });

                $(".modal .close").bind("click",function(){
                    $(".modal .close").fadeOut();
                    $(".modal .modalcontent").slideUp(300);
                    $(".modal").delay(301).fadeOut(300)
                });

                $(".videomodal .close").bind("click",function(){
                    var source=$(".videoframe").attr("src");
                    $(".videoframe").attr("src",source);
                    $(".videomodal .close").fadeOut();
                    $(".videomodal .modalcontent").slideUp(300);
                    $(".videomodal").delay(301).fadeOut(300);
                });
                //Modal Part Ends

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
