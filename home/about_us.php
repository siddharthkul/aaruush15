<html>
<head>
    <title>AARUUSH'15|About Us</title>
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" href="css/aboutus.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/aboutus.js" type="text/javascript"></script>
  </head>

<?php
	include_once("loader.php");
?>

<body>
<?php
	$header_text="aboutus";
	$font_size="20px";
	include "header2.php";
?>

		<div class="box1">		                
			<div class="heading">
				<center><div class="headtop"></div></center>
			</div>
			<div class="content_box">
				
			</div>
		</div>		
		<div id="patrons" style="display:none;">
				<div id="grid">
					<table>
						<tr>	
							<td><img src="images/director.jpg" class="pat" id="pa1"></td>
							<td>Dr. C. Muthamizhchelvan<br><b>Director - E & T</b></td>	
							<td><img src="images/convenor.jpg" class="pat" id="pa2"></td>
							<td>Prof. Rathinam. A<br><b>Convenor</b></td>
						</tr>
						<tr>	
							<td><img src="images/eo.jpg" class="pat" id="pa3"></td>
							<td>Mr.V.Thirumurugan<br><b>Estate Officer</b></td>	
							<td><img src="images/fa.jpg" class="pat" id="pa4"></td>
							<td>Prof. V .M. Ponniah<br><b>Finance Advisor</b></td>
						</tr>
					</table>
				</div>	
		</div>
		<div class="box2">
		      
			  <div style="margin-top:3px;" id='x1'  class="hexagon1 hex">
			        <div style="font-size:25;z-index:999;" class="content3">&nbsp;&nbsp;SRM</div>
					<div style="font-size:25;z-index:999;" class="content2">University</div>
			   </div>
			   <div style="margin-top:3px;" id='x2'  class="hexagon2 hex">
			        <div style="font-size:25;z-index:999;" class="content1">
					  Legacy
					</div>
			   </div>
			    <div style="margin-top:-210px;margin-left:133px" id='x3' class="hexagon3 hex">
				   <div style="font-size:25;z-index:999;" class="content1">
					  Theme
					</div>
			   </div>
			    <div style="margin-top:4px;margin-left:133px" id='x4' class="hexagon4 hex">
				    <div style="font-size:25;z-index:999;" class="content1">
					  Patrons
					</div>
			   </div>
		</div> 
		<?php
		 include "footer.php";
		?>	  
</body>
		<script type="text/javascript">
            $(window).load(function() {
                $(".loaderClass").fadeOut(300);
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