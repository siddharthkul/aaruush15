<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/layout.css">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<title>Aaruush'15|Championships</title>
<link rel="stylesheet" type="text/css"  href="css/champ.css">
<script src="js/jquery.min.js"></script>
<script src="js/main.js" type="text/javascript"></script>
</head>

<?php
  include_once("loader.php");
?>

<body>
<?php
$header_text="championships";
$font_size="19px";
include "header2.php"
?>
  <div id="mainbox">
      <div id="contentbox">
        
        </div>
    </div>
    <div id="heading"><h2>Competitions</h2></div>
    <div class="circle" id="c1"></div>
    
  <div id="c1" class="hi-icon-wrap hi-icon-effect-8">
    <a href="#" class="hi-icon"><img src="images/cogs.png" class="l_logo1"></img></a>
  </div>
  
  <div id="c2" class="hi-icon-wrap hi-icon-effect-8">
   <a href="#" class="hi-icon"><img src="images/quadcopter.png" class="l_logo1"></img></a>
  </div>
  
   <div id="c3" class="hi-icon-wrap hi-icon-effect-8">
    <a href="#" class="hi-icon"><img src="images/prize.png" class="l_logo2"></img></a>
  </div>

  <div id="c4" class="hi-icon-wrap hi-icon-effect-8">
   <a href="#" class="hi-icon"><img src="images/code.png" class="l_logo2"></img></a>
  </div>
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