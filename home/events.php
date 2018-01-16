<!DOCTYPE HTML>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<title>Aaruush'15|Events</title>
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css"  href="css/events.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/main.js" type="text/javascript"></script>

<style type="text/css">
.com_soon{
    font-size: 112px;
    color: #fff;
    -ms-transform: rotate(-23deg); /* IE 9 */
    -webkit-transform: rotate(-23deg); /* Chrome, Safari, Opera */
    transform: rotate(-23deg);
    top:24px;
    position: absolute;
    left: 300px;
    }</style>
</head>
<?php
    include_once("loader.php");
?>

<body>

<?php
$header_text="events";
$font_size="20px";
include "header2.php"
?>

<div id="l_sldcontainer">

    <a><div class="lslider rskew" id="sld1"><h3 style="right:65px;">Architecture</h3><img class="icon_l" src="images/dom_icons/sld1w.png"></div></a>
    
    <a><div class="lslider rskew" id="sld2"><h3 style="right:80px;">Bluebook</h3><img class="icon_l" src="images/dom_icons/sld2w.png"></div></a>
    
    <a><div class="lslider rskew" id="sld3"><h3 style="right:60px;">Digital Design</h3><img class="icon_l" src="images/dom_icons/sld3w.png"></div></a>
    
    <a><div class="lslider rskew" id="sld4"><h3 style="right:70px;">Electrizite</h3><img class="icon_l" src="images/dom_icons/sld4w.png"></div></a>
    
    <a><div class="lslider rskew" id="sld5"><h3 style="right:90px;">Fundaz</h3><img class="icon_l" src="images/dom_icons/sld5w.png"></div></a>
    
    <a><div class="lslider rskew" id="sld6"><h3 style="right:65px;">Konstruktion</h3><img class="icon_l" src="images/dom_icons/sld6w.png"></div></a>
    
    <a><div class="lslider rskew" id="sld7"><h3 style="right:65px;">Machination</h3><img class="icon_l" src="images/dom_icons/sld7w.png"></div></a>
</div>    

<div id="r_sldcontainer">
    <a><div class="rslider lskew " id="sld8"><h3 style="left:80px;">Magefficie</h3><img class="icon_r" src="images/dom_icons/sld8w.png"></div></a>
    
    <a><div class="rslider lskew" id="sld9"><h3 style="left:90px;">Online</h3><img class="icon_r" src="images/dom_icons/sld9w.png"></div></a>
    
    <a><div class="rslider lskew" id="sld10"><h3 style="left:65px;">Praesentatio</h3><img class="icon_r" src="images/dom_icons/sld10w.png"></div></a>
    
    <a><div class="rslider lskew" id="sld11"><h3 style="left:80px;">Robogyan</h3><img class="icon_r" src="images/dom_icons/sld11w.png"></div></a>
    
    <a><div class="rslider lskew" id="sld12"><h3 style="left:80px;">Vimanaz</h3><img class="icon_r" src="images/dom_icons/sld12w.png"></div></a>
    
    <a><div class="rslider lskew" id="sld13"><h3 style="left:85px;">X-Zone</h3><img class="icon_r" src="images/dom_icons/sld13w.png"></div></a>
    
    <a><div class="rslider lskew" id="sld14"><h3 style="left:75px;">Yuddhame</h3><img class="icon_r" src="images/dom_icons/sld14w.png"></div></a>
</div>

<div id="mainbox">
  <div id="box_menu" align="center">
	<div id="list">
                <ul>
						<li style="font-weight:bold; font-size:20px; padding-bottom:20px;"></li>
						<li><a></a></li>
						<li><a></a></li>
						<li><a></a></li>
                        <li><a></a></li>
                        <li><a></a></li>
                        <li><a></a></li>
				</ul>
        </div>
	</div>
    
    <div id="tabcontainer">
        <a><div class="boxtab" id="btab1"><h3>INTRO</h3></div></a>
        <a><div class="boxtab rskew" id="btab2"><h3>ROUNDS</h3></div></a>
        <a><div class="boxtab rskew" id="btab3"><h3>RULES</h3></div></a>
        <a><div class="boxtab rskew" id="btab4"><h3>COORDINATORS</h3></div></a>
        <a><div class="boxtab" id="btab5"><h3 style="top:-43px;"></h3></div></a>
	</div>
            
    <div id="content_box">
    	

   </div>
    
</div>

<div id="star"><img src="images/dom_icons/events.png" class="icon"><span><h2>SPECIAL</h2></span></div> 
<?php
include "footer.php"
?>

</body>

        <script type="text/javascript">
            $(window).load(function() {
                $(".loaderClass").fadeOut(300,function(){
                    $(".fullpage").delay(400).fadeIn(300);
                });
            });
        </script>
<script type="text/javascript">
  
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-57882122-3', 'auto');
  ga('send', 'pageview');
</script>
</html>