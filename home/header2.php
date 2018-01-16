<?php
	$tabs_pretext = array(array("aboutus","about_us"), array("Hospitality","hospitality"), array("Events","events"), array("Workshops","workshop"), array("Highlights","highlights"), array("Championships","champ"), array("Gallery","gallery"), array("Contact Us","contact"));
	$tabs_text=array(array("Home","index.php"));
	for($j=0;$j<8;$j++){
		if(strcasecmp($tabs_pretext[$j][0],$header_text)==0){
		}
		else{
			array_push($tabs_text,array($tabs_pretext[$j][0],$tabs_pretext[$j][1]));
		}
	}
?>
<header>
<div id="toptabs" class="row">
	<div class="col-3 tabs_text_font">
		<div class="row">
			<div class="col-3 border-card"><a id="card-color" href="index.php"><center>Home</center></a></div>
			<?php for($i=1;$i<4;$i++){ ?>
			<div class="col-3 border-card"><a id="card-color1" href="<?php echo $tabs_text[$i][1] ?>.php"><center><?php echo $tabs_text[$i][0] ?></center></a></div>
			<?php } ?>
		</div>
	</div>
	<div class="col-6 img-div">
		<a href="index.php"><img src='images/<?php echo "$header_text.png" ?>' id="top_aar"></img></a>	
	</div>
	<div class="col-3 tabs_text_font">
		<div class="row">
			<?php for($i=4;$i<8;$i++){ ?>
			<div class="col-3 border-card"><a id="card-color2" href="<?php echo $tabs_text[$i][1] ?>.php"><center><?php echo $tabs_text[$i][0] ?></center></a></div>
			<?php } ?>
		</div>
	</div>
</div>
<style>
.col-6{
	height: 40px;
}
a {
	text-decoration:none;
}
#toptabs{
		height:40px;
		background: #383838;
}
.col-3{
	padding-left: 0px;
	padding-right: 0px;
}
.tabs_text_font{
	font-size: 11px;
	text-transform:uppercase;
	font-weight: 600;
}
#top_aar{
	width: 100%;
	position: relative;
	z-index: 10;
}
 .border-card{
 	position: relative;
  overflow: visible;
  margin: 0.8rem 0rem 1rem 0rem;
 }
 #card-color{
 	color: #039be5!important;
 }
 #card-color:hover {
 	color: #FFFFFF !important;
 }
 #card-color1{
 	color: #039be5!important;
 }
 #card-color1:hover {
 	color: #FFFFFF !important;
 }
 #card-color2{
 	color: #039be5!important;
 }
 #card-color2:hover {
 	color: #FFFFFF !important;
 }
.header_text{
	position:fixed;
 	z-index:1000;
 	top:10%;
 	left:47.2%;
 	color:#fff; 
 	font-family:"Roboto",sans-serif !important; 
 	font-weight:600; 
 	font-size:<?php echo $font_size ?>; 
 	text-align:center; 
 }
@media (max-width:1920px){
	.img-div{
	width: 44%
}	
.tabs_text_font{
	width: 28%;
	font-size: 13px;
}
}
@media(min-width: 1920px){
	.img-div{
		width: 50%;
	}
	.tabs_text_font{
		width: 25%;
		font-size: 13px;
	}

}
@-moz-document url-prefix() {
    .tabs_text_font {
        font-size: 11px;
    }

}

 </style>
</header>
