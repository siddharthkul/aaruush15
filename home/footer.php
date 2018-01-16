<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<footer>
	<div id="footerbox">
		<div id="social"> 
	  		<a href="http://www.facebook.com/aaruush.srm/" target="_blank"><i  class="fa fa-2x fa-facebook" id="fb"></i></a>
	        <a href="http://www.twitter.com/Aaruush_Srmuniv" target="_blank"><i class="fa fa-2x fa-twitter" id="twitter"></i></a>
	        <a href="http://www.youtube.com/user/aaruush12" target="_blank"><i class="fa fa-2x fa-youtube-play" id="yout"></i></a>
	    	<a href="http://www.instagram.com/aaruush_srm" target="_blank"><i class="fa fa-2x fa-instagram" id="ins"></i></a>
	    </div>
	    <div id="walogo">
        	<a href="http://www.webarchsrm.com/"><img src="images/walogo2.png" height="32" ></a>
        </div>       
    </div>
</footer>
<style>
footer {
	z-index: 999;
}

#footerbox {
		position:fixed;
   		left:0px;
   		bottom:0px;
		width: 100%;
		height: 40px;
		background-color:#333;
		border-top: 3px solid #3083c8 ;
		background-image:url(images/web.png);
}
* html #footerbox {
   position:absolute;
   top:expression((0-(footer.offsetHeight)+(document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight)+(ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop))+'px');
}

.fa-2x{font-size:1.5em !important;}

#social{
	bottom:3%;
	left:45%;
}

#fb {
	color: white;
	position:absolute;
	left:3px;
	bottom:5px;
	}
#fb:hover {
	color: #3b5998;
	}
#twitter {
	color: white;
	position:absolute;
	left:40px;
	bottom:5px;
	}
#twitter:hover {
	color:#1dcaff;
	}
#yout {
	color: white;
	position:absolute;
	left:80px;
	bottom:5px;
	}
#yout:hover {
	color: #cc181e;
	}
#ins {
	color: white;
	position:absolute;
	left:125px;
	bottom:5px;
	}
#ins:hover {
	color:#9b683f;
	}


#walogo {

	position: absolute;
	bottom:-2px;
	right: 7px;

}



</style>
