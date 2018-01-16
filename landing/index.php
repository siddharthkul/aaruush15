<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en">
<head>

  <meta http-equiv="content-type" content="text/html; charset=us-ascii" />
  <meta name="description" content="Aaruush is a national techno-management fest of SRM University" />
  <meta name="keyword" content="aaruush,aaruush'15,techno-management fest,college fest,tech fest">
  <meta name="viewport" content=
  "width=device-width,user-scalable=0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />

  <title>Aaruush '15 | National Level Techno-Manganement Fest</title> 
  <link rel="icon" href="img/favi.ico" type="image/x-icon"/>
  <style type="text/css">
/*<![CDATA[*/
        body  {margin:0;padding:0;background-color:#000000;font-size:0;overflow:hidden}
        div   {margin:0;padding:0;position:absolute;font-size:0;overflow:hidden}
        canvas{background-color:#000000;overflow:hidden}
  /*]]>*/

  </style>
  <link rel="stylesheet" type="text/css" href="css/style.css">
 
  <script type="text/javascript" src="jquery.min.js"></script>



   <script type="text/javascript">
    jQuery(document).ready(function($) {  

// site preloader
    $(window).load(function(){
    $('#a').fadeOut('slow',function(){$(this).remove();

    //  document.body.style.background='orange';
  //  document.getElementById('teaser').style.display="";
  $('#teaser').fadeIn(3000);
  $('#srmpng').fadeIn(2000);
   $('#wb').fadeIn(2000);
   $('#social').fadeIn(2000);
    });
});

});
  
    </script>

  <script type="text/javascript">
function $i(id) { return document.getElementById(id); }
function $r(parent,child) { (document.getElementById(parent)).removeChild(document.getElementById(child)); }
function $t(name) { return document.getElementsByTagName(name); }
function $c(code) { return String.fromCharCode(code); }
function $h(value) { return ('0'+Math.max(0,Math.min(255,Math.round(value))).toString(16)).slice(-2); }
function _i(id,value) { $t('div')[id].innerHTML+=value; }
function _h(value) { return !hires?value:Math.round(value/2); }

function get_screen_size()
  {
  var w=document.documentElement.clientWidth;
  var h=document.documentElement.clientHeight;
 // return Array(w,h);
 if(w<632)
 return Array(0,0);
else
  return Array(w,h);

  }

var url=document.location.href;

var flag=true;
var test=true;
var n=parseInt((url.indexOf('n=')!=-1)?url.substring(url.indexOf('n=')+2,((url.substring(url.indexOf('n=')+2,url.length)).indexOf('&')!=-1)?url.indexOf('n=')+2+(url.substring(url.indexOf('n=')+2,url.length)).indexOf('&'):url.length):512);
var w=0;
var h=0;
var x=0;
var y=0;
var z=0;
var star_color_ratio=0;
var star_x_save,star_y_save;
var star_ratio=256;
var star_speed=0.5;
var star_speed_save=0;
var star=new Array(n);
var color;
var opacity=0.1;

var cursor_x=0;
var cursor_y=0;
var mouse_x=0;
var mouse_y=0;

var canvas_x=0;
var canvas_y=0;
var canvas_w=0;
var canvas_h=0;
var context;

var key;
var ctrl;

var timeout;
var fps=0;

function init()
  {
  var a=0;
  for(var i=0;i<n;i++)
    {
    star[i]=new Array(5);
    star[i][0]=Math.random()*w*2-x*2;
    star[i][1]=Math.random()*h*2-y*2;
    star[i][2]=Math.round(Math.random()*z);
    star[i][3]=0;
    star[i][4]=0;
    }
  var starfield=$i('starfield');
  starfield.style.position='absolute';
  starfield.width=w;
  starfield.height=h;
  context=starfield.getContext('2d');
  //context.lineCap='round';
 // context.fillStyle='rgb(0,0,0)';
  context.fillStyle='rgba(0,0,0,'+opacity+')';
  context.strokeStyle='rgb(255,255,255)';

  var adsense=$i('adsense');
  adsense.style.left=Math.round((w-728)/2)+'px';
  adsense.style.top=(h-15)+'px';
  adsense.style.width=728+'px';
  adsense.style.height=15+'px';
  adsense.style.display='block';
  }

function anim()
  {
  mouse_x=cursor_x-x;
  mouse_y=cursor_y-y;
  context.fillRect(0,0,w,h);
  for(var i=0;i<n;i++)
    {
    test=true;
    star_x_save=star[i][3];
    star_y_save=star[i][4];
    star[i][0]+=mouse_x>>4; if(star[i][0]>x<<1) { star[i][0]-=w<<1; test=false; } if(star[i][0]<-x<<1) { star[i][0]+=w<<1; test=false; }
    star[i][1]+=mouse_y>>4; if(star[i][1]>y<<1) { star[i][1]-=h<<1; test=false; } if(star[i][1]<-y<<1) { star[i][1]+=h<<1; test=false; }
    star[i][2]-=star_speed; if(star[i][2]>z) { star[i][2]-=z; test=false; } if(star[i][2]<0) { star[i][2]+=z; test=false; }
    star[i][3]=x+(star[i][0]/star[i][2])*star_ratio;
    star[i][4]=y+(star[i][1]/star[i][2])*star_ratio;
    if(star_x_save>0&&star_x_save<w&&star_y_save>0&&star_y_save<h&&test)
      {
      context.lineWidth=(1-star_color_ratio*star[i][2])*2;
      context.beginPath();
      context.moveTo(star_x_save,star_y_save);
      context.lineTo(star[i][3],star[i][4]);
      context.stroke();
      context.closePath();
      }
    }
  timeout=setTimeout('anim()',fps);
  }



function start()
  {
  resize();
  anim();
  }

function resize()
  {
  w=parseInt((url.indexOf('w=')!=-1)?url.substring(url.indexOf('w=')+2,((url.substring(url.indexOf('w=')+2,url.length)).indexOf('&')!=-1)?url.indexOf('w=')+2+(url.substring(url.indexOf('w=')+2,url.length)).indexOf('&'):url.length):get_screen_size()[0]);
  h=parseInt((url.indexOf('h=')!=-1)?url.substring(url.indexOf('h=')+2,((url.substring(url.indexOf('h=')+2,url.length)).indexOf('&')!=-1)?url.indexOf('h=')+2+(url.substring(url.indexOf('h=')+2,url.length)).indexOf('&'):url.length):get_screen_size()[1]);
  x=Math.round(w/2);
  y=Math.round(h/2);
  z=(w+h)/2;
  star_color_ratio=1/z;
  cursor_x=x;
  cursor_y=y;
  init();
  }

//document.onmousemove=move;
//document.onkeypress=key_manager;
//document.onkeyup=release;
//document.onmousewheel=mouse_wheel; if(window.addEventListener) window.addEventListener('DOMMouseScroll',mouse_wheel,false);

</script>
</head>


<body onload="start();context.fillStyle='rgba(0,0,0,'+opacity+')'" onresize="resize()" onorientationchange="resize()">


  <canvas id="starfield" style="position: absolute; background-color: rgb(0, 0, 0);" width="1366" height="624"></canvas>
  <div id="adsense" style="position:absolute;background-color:transparent;display:none">
  </div>
  <div style="position:relative;display:none;top:20px;width:100%;box-sizing:border-box;padding-left:5px;padding-right:5px;color:#000;" id="srmpng" >    
     <img src="img/planet.png" style="float:left;"/>
     <a href="files/AARUUSH15-EVENTS.pdf" style="text-decoration: none; color: #000000;"><span style="float:right;font-size:20px;font-family:xirod1; background: #fff; box-sizing: border-box; padding: 5px;" class="eventLink">Events</span></a>
  </div>


  <svg width="300px" height="200px" viewBox="0 0 187.3 93.7" preserveAspectRatio="xMidYMid meet" style="left: 50%; top: 50%; position: absolute; transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);" id="a">
  <path stroke="#ededed" id="outline" fill="none" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" 
        d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1        c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" />
  <path id="outline-bg" opacity="0.05" fill="none" stroke="#ededed" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" 
        d="       M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1         c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" />
        </svg>

  

 <div style="display:none;" id="teaser" >

<img src="img/teaserfinal.png" />
 </div>
 <div id="social" style="bottom:10px;left:1%;display:none;">
  <ul style="list-style:none;display:flex">
  <li><a href="https://facebook.com/aaruush.srm" target="_blank"><img src="img/fbplanet.png" id="sc-img1" onmouseover="up(this.id)"></a></li>
  <li><a href="https://twitter.com/aaruush_srmuniv" target="_blank"><img src="img/twplanet.png" id="sc-img2" onmouseover="up(this.id)"></a></li>
  <li><a href="https://www.youtube.com/user/aaruush12" target="_blank"><img src="img/ytplanet.png" id="sc-img3"  onmouseover="up(this.id)"></a></li>

  </ul>
 </div>
  <div style="bottom:10px;display:none;" id="wb">
    <img src="img/wb.png">

  </div>
  <script type="text/javascript">
  function up (val) {
  //  document.getElementById(val).style.marginBottom='10px';
    // body...
  }



  </script>

</body>
<!-- google analytics code -->
<script type="text/javascript">
  
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57882122-3', 'auto');
  ga('send', 'pageview');


</script>
</html>
