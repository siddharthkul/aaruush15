<!DOCTYPE html>
<html>
<head>
	<title>Aaruush'15|Gallery</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="gallery/engine1/style.css" />
	<script type="text/javascript" src="gallery/engine1/jquery.js"></script>

</head>

<?php
	include_once("loader.php");
?>

<body>
	<?php
             $header_text="gallery";
             $font_size="20px";
             include 'header2.php';
	?>
	
	
	<div id="wowslider-container1">
	<center><div class="ws_images" style="height:550px"><ul>
		<li><img height="470" src="gallery/data1/images/1.jpg" title="1" id="wows1_0"/></li>
		<li><img height="470" src="gallery/data1/images/2.jpg"   id="wows1_1"/></li>
		<li><img height="470" src="gallery/data1/images/3.jpg"   id="wows1_2"/></li>
		<li><img height="470" src="gallery/data1/images/4.jpg"   id="wows1_3"/></li>
		<li><img height="470" src="gallery/data1/images/5.jpg"   id="wows1_4"/></li>
		<li><img height="470" src="gallery/data1/images/6.jpg"   id="wows1_5"/></li>
		<li><img height="470" src="gallery/data1/images/7.jpg"   id="wows1_6"/></li>
		<li><img height="470" src="gallery/data1/images/8.jpg"   id="wows1_7"/></li>
		<li><img height="470" src="gallery/data1/images/9.jpg"   id="wows1_8"/></li>
		<li><img height="470" src="gallery/data1/images/10.jpg"  id="wows1_9"/></li>
		<li><img height="470" src="gallery/data1/images/11.jpg"  id="wows1_10"/></li>
		<li><img height="470" src="gallery/data1/images/12.jpg"  id="wows1_11"/></li>
		<li><img height="470" src="gallery/data1/images/13.jpg"  id="wows1_12"/></li>
		<li><img height="470" src="gallery/data1/images/14.jpg"  id="wows1_13"/></li>
		<li><img height="470" src="gallery/data1/images/15.jpg"  id="wows1_14"/></li>
		<li><img height="470" src="gallery/data1/images/16.jpg"  id="wows1_15"/></li>
		<li><img height="470" src="gallery/data1/images/17.jpg"  id="wows1_16"/></li>
		<li><img height="470" src="gallery/data1/images/18.jpg"  id="wows1_17"/></li>
		<li><img height="470" src="gallery/data1/images/19.jpg"  id="wows1_18"/></li>
		<li><img height="470" src="gallery/data1/images/20.jpg"  id="wows1_19"/></li>
	</ul></div></center>
	</div>	
	<script type="text/javascript" src="gallery/engine1/wowslider.js"></script>
	<script type="text/javascript" async src="gallery/engine1/script.js"></script>
<?php include 'footer.php'; ?>
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
	<style type="text/css">
	@media(max-width: 1800px){
	#wowslider-container1{
		margin-top: 6%!important;
	}
}
	@media(min-width: 1800px){
	#wowslider-container1{
		margin-top: 8%!important;
	}
}

		body{margin:0;background: url('images/bg1.jpg'); overflow:hidden;}
		#wowslider-container1{margin-top: 80px;}
	</style>
</html>