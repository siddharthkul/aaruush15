<html>
<head>
    <title>AARUUSH'15</title>
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/aboutus.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <script src="js/materialize.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/aboutus.css">
    <link rel="stylesheet" type="text/css" href="css/proshow.css">
    <style>

    .hexagon {
    width: 100px;
    height: 55px;
    position: relative;
}
.hexagon, .hexagon:before, .hexagon:after {
    background: #393939;
    -moz-box-shadow: 0 0 10px rgba(0,0,0,0.8);   
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.8);   
    box-shadow: 0 0 10px rgba(0,0,0,0.8);   
}
.hexagon:before, .hexagon:after {
    content: "";
    position: absolute;
    left: 22px;
    width: 57px;
    height: 57px;
    -moz-transform: rotate(145deg) skew(22.5deg);
    -webkit-transform: rotate(145deg) skew(22.5deg);
    transform: rotate(145deg) skew(22.5deg);
}
.hexagon:before {
    top: -29px;
}
.hexagon:after {
    top: 27px;
}
.hexagon span {
    position: absolute;
    top: 0;
    left: 0;
    width: 100px;
    height: 55px;
    background:#393939;
    z-index: 1;
}
#right-sidebar{
    padding-left: 3%;
  }
#bottom{
    height:30%;
  }
@media (min-width:1800px){
  #central-container{
    margin-top: 5%;
  }
  #right-sidebar{
    padding-left: 9%;
  }
}

@media (max-width:1334px){
    #central-container{
    margin-top: -2%;
  }
}

@media (max-width:1200px){
    #central-container{
    margin-top: -4%;
  }

}

@media (min-width:1500px) and (max-width:1799px){
    #right-sidebar{
    padding-left: 6%;
  }

}

.responsive-img{position:relative;top:-15px;height:20px;}


    </style>
  </head>

<?php
	include_once("loader.php");
?>
<body>
<?php
	$header_text="highlights";
	$font_size="20px";
	include "header2.php";
?>

		<?php
		 include "footer.php";
		?>	  
</body>
		<script type="text/javascript">
            $(window).load(function() {
                $(".loaderClass").fadeOut(300);
            });
        </script>
    <br><br><br>
    <div class="container-fluid">
        <div class="row" id="central-container">
            <div class="col s12 m3">
                <br><br>
                <div class="hexagon tooltipped" id="link1" data-position="right" data-delay="0" data-tooltip="Aaruush Educates" style="position:relative;left:120px;bottom:25px">
                    <span><img class="responsive-img z-depth-0" src="images/highlights_img/educates.png"></span>
                </div>
                <br><br>
                <div id="link2" class="hexagon tooltipped" data-position="right" data-delay="0" data-tooltip="
Guest lectures" style="position:relative;left:50px;bottom: 25px;">
                    <span><img class="responsive-img" src="images/highlights_img/guestlectures.png"></span>
                </div><br><br>
                <div id="link3" class="hexagon tooltipped" data-position="right" data-delay="0" data-tooltip="Industrial conclave" style="position:relative;left:120px;bottom:25px;">
                    <span><img class="responsive-img" src="images/highlights_img/internationalConference.png"></span>
                </div> 
                
            </div>
            <div class="col s12 m6" style="border:4px solid;padding:0px;">
                <h5 style="background-color:#393939;color:white;text-align:center;margin:0px;padding:5px" id="top">Aaruush Educates</h5>
                <p style="padding:10px;margin-bottom:5px;" id="bottom">
                </p>
            </div>
            <div class="col s12 m3" id="right-sidebar" style="position:relative;left:30px">
                <br><br>
                <div id="link4" class="hexagon tooltipped" data-position="left" data-delay="0" data-tooltip="Startup Weekend" style="position:relative;left:30px;bottom:25px">
                    <span><img class="responsive-img" src="images/highlights_img/panneldiscussion.png"></span>
                </div><br><br>
                <div id="link5" class="hexagon tooltipped" data-position="left" data-delay="0" data-tooltip="Swastika " style="position:relative;left:98px;bottom: 25px;">
                    <span><img class="responsive-img" src="images/highlights_img/swastika.png"></span>
                </div><br><br>
                <div id="link6" class="hexagon tooltipped" data-position="left" data-delay="0" data-tooltip="Unconference " style="position:relative;left:30px;bottom: 25px;">
                    <span><img class="responsive-img" src="images/highlights_img/unconference.png"></span>
                </div>
            </div>
        </div>
    </div>

            <div class="main">
              <div class="view view-ninth" id="proshow1">
                    <img src="images/proshows/Radium Light Art.jpg" />
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>Radium Light Art</h2>
                        <p> A mesmerizing display of Radium-LED's by India's first ever Radium-LED painter, Vivek Patil</p>
                        
                    </div>
                </div>

                <div class="view view-ninth" id="proshow2">
                    <img src="images/proshows/Sand ARt.jpg" />
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>Sand Art</h2>
                        <p>Artistic display of creativity with tiny sand grains by Vivek Patil</p>
                      
                    </div>
                </div>

                <div class="view view-ninth" id="proshow3">
                    <img src="images/proshows/UV Act.jpg" />
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>UV Act</h2>
                        <p>Perplexing show of Ultra Violet light by Illuminati</p>
                        
                    </div>
                </div>

                <div class="view view-ninth" id="proshow4">
                    <img src="images/proshows/TRON Act.jpg" />
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>TRON Act</h2>
                        <p>A coordinated act of professional artists and the LED's to produce a striking effect among the audience by Illuminati</p>
                    
                    </div>
                </div>

                <div class="view view-ninth" id="proshow5">
                    <img src="images/proshows/3D Projection.jpg" />
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>3D Projection</h2>
                        <p>Prominent display of reality onto a 3-D screen by Knownsense Studios</p>
                        
                    </div>
                </div>

            </div>

    <script>
        $(document).ready(function(){
               $('#top').html("Aaruush Educates");
               $('#bottom').html("<blockquote>'Education is not preparation for life; education is life itself'</blockquote><p>Aaruush Educates is one of its kind; this initiative from Aaruush is centered around the belief that education is the most powerful tool which can be used to change the world.Aaruush has always been a techno-management fest with a strong emphasis on social responsibility in every edition.</p><p>The program involves educating underprivileged children studying in grades five to eight and provides a practical and entertaining way of learning to generate true interest in the students towards their studies.</p>"); 
            
           $('#link1').click(function(){
                $('#top').html("Aaruush Educates");
                $('#bottom').html("<blockquote>'Education is not preparation for life; education is life itself'</blockquote><p>Aaruush Educates is one of its kind; this initiative from Aaruush is centered around the belief that education is the most powerful tool which can be used to change the world.Aaruush has always been a techno-management fest with a strong emphasis on social responsibility in every edition.</p><p>The program involves educating underprivileged children studying in grades five to eight and provides a practical and entertaining way of learning to generate true interest in the students towards their studies.</p>");
           });
            
              $('#link2').click(function(){
                $('#top').html("Guest lectures");
                $('#bottom').html("<blockquote>'Experience is not what happens to you, but what you do with what happens to you'</blockquote><p>AARUUSH plays host to various guest lectures each year, featuring speakers who are prominent in their fields. It has proved to be a stage where the students indulge in the mine of knowledge that the lecturers bring in.</p><p>These exciting sessions promises to provide fodder for the young innovative minds. The exposure to ideas and technical substance are bound to plant the seeds of revolutionary concepts.</p>");
           });
            
            $('#link3').click(function(){
                $('#top').html("Industrial conclave");
                $('#bottom').html("<p>Aaruush'15 presents ‘Industrial Conclave’, an event which provides a platform for students to interact with leading personalities of premier industries and institutions from across the nation. This forum will expose the aspiring industrialist to the challenges faced by the current leaders and how to curb these issues.</p><p>Industrial conclave this year will feature guest lectures from the very best in the field of management. The conclave will arm the students with managerial skills, innovative ideas and a general mindset as to what is expected of a jobholder in today’s world. It will be a fun and interactive session in which the students will learn the norms of the industrial world.</p>");
           });
            
             $('#link4').click(function(){
                $('#top').html("Startup Weekend");
                $('#bottom').html("<p>Startup Weekend is a global network of passionate leaders and entrepreneurs on a mission to inspire, educate and empower individuals, teams and communities who are learning the basics of start-ups and launching successful ventures.</p><p>The event inspires students to bring forward their best ideas. After this, the teams focus on customer development, validating their ideas and building a basic viable product. Then the teams then demo their prototypes and receive valuable feedback from a panel of experts. Startup weekend is a 54 hour frenzy of business model creation, coding, designing, and market validation.</p>");
           });
            
            $('#link5').click(function(){
                $('#top').html("Swastika ");
                $('#bottom').html("<blockquote>“Education is our passport to the future, for tomorrow belongs to the people who prepare for it today”</blockquote><p>Swastika is a national-level inter-school quiz program hosted by Aaruush. Swastika is a Sanskrit word that means ‘a good start’. Every year SWASTIKA reaches out to hundreds of schools spread across many cities. Over 3000 students participate in this quiz which covers a wide range of subjects like science, history, social science and many more. AARUUSH wishes to continue educating the youth of the country and thus, has taken this initiative to ignite the minds of the next generation.</p>");
           });
            
            $('#link6').click(function(){
                $('#top').html("Unconference ");
                $('#bottom').html("<p>Unconference brings us an amazing opportunity to pick the brains of our esteemed panelists on the most heated issues and events from around the globe. This intimate gathering will bridge the gap between the professional and student communities, thus facilitating a deeper understanding of the issues plaguing our society. </p><p>With two Unconferences this year, there is more room for one to voice their opinions and imbibe others’ views on the matter being discussed. The two topics proposed are ‘Leading India: Science or Politics’ and ‘NaMoNomics’.</p>");
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