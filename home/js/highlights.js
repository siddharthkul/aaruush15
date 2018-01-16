$(document).ready(function(){

	/*--------------------------------------------EVENTS----------------------------------*/

	var flag;
	
	$('.rslider').click(function(){
		var id = (this).id;
		var i;
		flag  = id;
        $(this).addClass('fix').css({'right':'-40px'});
		$('.rslider').not(this).css({'right':'-200px'}).removeClass('fix');
		$('.lslider').css({'left':'-200px'}).removeClass('fix');
		for (i=1;i<15;i++)
			{	
				if(flag != 'sld'+i){
					$('#sld'+i).children('img').attr('src','images/dom_icons/sld'+i+'w.png');
					}
			}
	});

	$('.lslider').click(function(){
		var id = (this).id;
		flag  = id;
        $(this).addClass('fix').css({'left':'-40px'});
		$('.lslider').not(this).css({'left':'-200px'}).removeClass('fix');
		$('.rslider').css({'right':'-200px'}).removeClass('fix');
		for (i=1;i<15;i++)
			{	
				if(flag != 'sld'+i){
					$('#sld'+i).children('img').attr('src','images/dom_icons/sld'+i+'w.png');
					}
			}
	});
	
	$('.lslider').mouseover(function(){
		var id = (this).id;
        if(flag != id){
		$(this).children('img').attr('src','images/dom_icons/'+id+'.png');
		}
	}).mouseout(function() {
		var id = (this).id;
		if(flag != id){
			$(this).children('img').attr('src','images/dom_icons/'+id+'w.png');
		}
	});
	$('.rslider').mouseover(function(){
		var id = (this).id;
        if(flag != id){
		$(this).children('img').attr('src','images/dom_icons/'+id+'.png');
		}
	}).mouseout(function() {
		var id = (this).id;
		if(flag != id){
		$(this).children('img').attr('src','images/dom_icons/'+id+'w.png');
		}
	});

                         /*-----js for content loading-------*/

	function tabs (domain,first_event){
				var intro = 'events_content/' + domain + '/'+first_event+'/introduction.event.txt';
				var rounds = 'events_content/' + domain + '/'+first_event+'/rounds.event.txt';
				var rules = 'events_content/' + domain +'/'+first_event+'/rules.event.txt';
				var coordi = 'events_content/' + domain +'/'+first_event+'/coordinator.event.txt';

				$('#content_box').load(intro);

				$('#btab1').click(function(){
					$('#content_box').load(intro);	
				})
				$('#btab2').click(function(){
					$('#content_box').load(rounds);
				})
				$('#btab3').click(function(){
					$('#content_box').load(rules);
				})
				$('#btab4').click(function(){
					$('#content_box').load(coordi);
				})
			  }

	function dom(domain,first,second,third,fourth)
	{			
				var first_event = first.toLowerCase().replace(/ /g,"");
				$("#list ul li:nth-child(2)").html("<a>"+first+"</a>");
				$('#list ul li:nth-child(2) a').css('opacity','1');	
				$("#list ul li:nth-child(3)").html("<a>"+second+"</a>");
				$("#list ul li:nth-child(4)").html("<a>"+third+"</a>");
				if(!fourth)
					{$("#list ul li:nth-child(5)").html("");}
				else	
					{$("#list ul li:nth-child(5)").html("<a>"+fourth+"</a>");}
				$('#content_box').load('events_content/' + domain + '/'+first_event+'/introduction.event.txt');
				tabs(domain,first_event);
	}		  		

	$('.lslider,.rslider').click(function(){

		var domain = $(this).find('h3').text().toLowerCase().replace(/ /g,"");

			switch(domain) {
				case "architecture":
					$("#list ul li:nth-child(1)").html("ARCHITECTURE");
					dom("architecture","CLASH OF CLANS","BOB THE BUILDER","GREEN HOUSE");
					break;
				case "bluebook":
					$("#list ul li:nth-child(1)").html("BLUE BOOK");
					dom("bluebook","BODYTECTURE","MIND VS WILD","SENSOLOGY");
					break;
				case "digitaldesign":
					$("#list ul li:nth-child(1)").html("DIGITAL DESIGN");
					dom("digitaldesign","CLICK THE FLICK","CINEMATOURETTES","PHOTOGRAHIERX");
					break;
				case "electrizite":
					$("#list ul li:nth-child(1)").html("ELECTRIZITE");
					dom("electrizite","ARPITRIX","CIRCUITOCRITE","ELECTRANCE","SHERSHOCK OHMS");
					break;
				case "fundaz":
					$("#list ul li:nth-child(1)").html("FUNDAZ");
					dom("fundaz","GOLDEN EYE","DA VINCI GAME","BACK TO SCHOOL","SPOOKY MINIONS");
					break;
				case "konstruktion":
					$("#list ul li:nth-child(1)").html("KONSTRUKTION");
					dom("konstruktion","AERO DOME","ATLANTIS BRIDGE","SAF-O-STRUKTION");
					break;
				case "machination":
					$("#list ul li:nth-child(1)").html("MACHINATION");
					dom("machination","HOVERUSH","MACHINE MANIA","CADOVATION");
					break;
				case "magefficie":
					$("#list ul li:nth-child(1)").html("MAGEFFICIE");
					dom("magefficie","GAME OF LIFE","MAKE IN INDIA","WOLF OF WALL STREET");
					break;
				case "online":
					$("#list ul li:nth-child(1)").html("ONLINE");
					dom("online","SOURCECODE 1.0","REBUS","PHOTOHOLICS");
					break;
				case "praesentatio":
					$("#list ul li:nth-child(1)").html("PRAESENTATIO");
					dom("praesentatio","JAM OUT LOUD","THE DEFENDERS","THE EDITORS PICK");
					break;
				case "robogyan":
					$("#list ul li:nth-child(1)").html("ROBOGYAN");
					dom("robogyan","PERCY'S ODYSSEY","SUMO SLAMMERS","THE ATLANTEAN CHALLENGERS","THE FLASHBACK");
					break;
				case "vimanaz":
					$("#list ul li:nth-child(1)").html("VIMANAZ");
					dom("vimanaz","PROJECT-ILE","SWAT-KATS","WINGS OF WAR");
					break;
				case "x-zone":
					$("#list ul li:nth-child(1)").html("X-ZONE");
					dom("x-zone","221-B BAKER STREET","DARE 2 PLAY","HELL & HEAVEN","TEXAS HOLD'EM");
					break;
				case "yuddhame":
					$("#list ul li:nth-child(1)").html("YUDDHAME");
					dom("yuddhamme","CHARLOTTE'S WEB","CLAVE CLUSTER","CODE MORTEM","MOTHER OF CODE");
					break;


			} //end of switch


			$('#list > ul > li > a').click(function(){
				
				var event_name = $(this).text().toLowerCase().replace(/ /g,"");
				$(this).css('opacity','1');
				$('#list >ul>li>a').not(this).css('opacity','0.5');
				tabs(domain,event_name);

				})

	}); //end of slider click 

	/*--------------------------------CHAMPIONSHIPS----------------------------------------------*/

	$('#contentbox').html("As Aaruush evolves and progresses through its editions, so does the level of competition. Each year people participate in different competitions under various fields.  The championship brings you a varied extravaganza of competitions all under one roof. Championships in Aaruush presents an appealing and exciting set of challenges for people looking out for some contention. Championships provide students with an opportunity to showcase their talent. The four championships this year are in the fields of Robotics, Sports, Coding and Unmanned Aerial Vehicle. These championships will provide a platform to the students testing their limits and skills.")
	$('.hi-icon-wrap').click(function(){
		var id = (this).id;
		if (id == 'c1')
		{
			$('#contentbox').html("Robotics is an up and coming field in the modern world. Research in this area is far spread and is of great interest to many. Robotics championship combines the excitement of sport with rigors of science and technology offering a challenging event for the participants. The participants will get to design a team “brand”, hone teamwork skills, build and program robots to perform against worthy competitors. Filtering will be done at major hotspots from all over India to provide a national level competition. This high tech spectator event gives the students an opportunity to showcase the results of weeks of intense preparation, competing thrilling matches and working on their robots in the arena.<br><br><center><a href='./downloads/robowars_rulebook.pdf' target='_blank'>Rule Book</a><br><br><a href='./downloads/robowars.docx' target='_blank'>Registration Form</a></center><br><br><div style='text-align:right;'><span style='font-size:18px;font-weight:900;'>Prizes Worth Rs. 70000<br><br><br>For Any Queries<br>Contact: Jagadeesh Kandimalla<br> +91 9962936687</span></div>");
		  //$('#contentbox').load('file.txt')
			$('#heading > h2').html("Robowars");
		}
		if (id == 'c3')
		{
			$('#contentbox').html("Sports is as important as any other skill in today’s world. The sports championship provides a platform for the students to exhibit their mastery in a multi- sport event. Sports championship hunts for the champions of a long list of sports. Participants can take part in cricket, badminton, table tennis, athletics, chess and football. This is an ideal arena for sports enthusiasts to indulge in amidst a techno- management fest. The wide range of sports will see tough competition with only a single team running away with all the honors. The events will test the physical ability and skill of the participants while providing entertainment to both participants and the spectators. This championship will give Aaruush the distinction of catering to a wide range of interests.");
			$('#heading > h2').html("Sports");
		}
		if (id == 'c2')
		{
			$('#contentbox').html("The UAV (Unmanned Aerial Vehicle) is a mechanical drone which can be remotely controlled. Its flight is controlled either autonomously by onboard computers or by the remote control of a pilot. The Unmanned Aerial Vehicle is a multi- round event. With the emergence of UAV technology all around the world, this event will see vigorous competition from participants coming in from all over India. The event will see the participants designing, building and programming a quadcopter from the scratch. Event will test the technical skill of the participants driving them to the limits with only the best handful progressing to the next rounds. An initial filtering round will be conducted all around India and the best teams will progress to the final round which will be conducted during Aaruush. The event will showcase the latest technology in the field of mechanics and electrics.<br><br><center><a href='./downloads/uav_rulebook.pdf'>Rule Book</a><br><br><a href='./downloads/uav.docx'>Registration Form</a></center><br><br><div style='text-align:right;'><span style='font-size:18px;font-weight:900;'>Prizes Worth Rs. 80000<br><br><br>For Any Queries<br>Contact:  Jagadeesh Kandimalla<br> +91 9962936687</span></div>");
			$('#heading > h2').html("UAV");
		}
		if (id == 'c4')
		{
			$('#contentbox').html("Coding championship offers a platform for all the computer – savvy heads out there. The coding competition will bring together the toughest coders to compete and challenge other peers from all around India. The participants will have to solve a set of logical or mathematical problems in a given time frame. The participants have to clear three rounds to be crowned as champions. The first two rounds will be online based which allows participation from any corner of the country. The third and final round will be based on real time programming which will be hosted and conducted in association with renowned establishments offering a very unique learning experience to all the participants. Think hard, scrabble your mind on your way to become the ultimate champion of coding. ");
			$('#heading > h2').html("Coding");
		} 	 	 		
	});


	
	/*------------------------------------WORKSHOPS------------------------------------------*/


	 var work_number = 1; // varibale to make a notice of which workshop tab is active .
	 // Initialize collapse button
	  $(".button-collapse").sideNav();
	  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
	  //$('.collapsible').collapsible();
	  $('.button-collapse').sideNav({
	      menuWidth: 300, // Default is 240
	      edge: 'right', // Choose the horizontal origin
	      closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
	    }
	  );
		  // Show sideNav
		$('.button-collapse').sideNav('show');
		// Hide sideNav
		$('.button-collapse').sideNav('hide');




	$('#workshop_text1').click(function(){
         $('#first_container').html('Workshop 1');
	})
	$('#workshop_text2').click(function(){
         $('#first_container').html('Workshop 2');
	})
	$('#workshop_text3').click(function(){
         $('#first_container').html('Workshop 3');
	})
	$('#workshop_text4').click(function(){
         $('#first_container').html('Workshop 4');
	})

//breadcrump 
function allblack() //making all the breadcrumps black 
  {
  	$('#parallelogram1').removeClass('parallelogram1click');
   $('#parallelogram2').removeClass('parallelogram2click');	
   $('#parallelogram3').removeClass('parallelogram3click');	
   $('#parallelogram4').removeClass('parallelogram4click');	
   $('#parallelogram5').removeClass('parallelogram5click');	
   $('#parallelogram6').removeClass('parallelogram6click');	
  }
 function allwhite() //making all the side bar options white when active 
  {
  	$('#workshop_text1,#workshop_li1').removeClass('white');
  	$('#workshop_text2,#workshop_li2').removeClass('white');
  	$('#workshop_text3,#workshop_li3').removeClass('white');
  	$('#workshop_text4,#workshop_li4').removeClass('white');
  	$('#workshop_text5,#workshop_li5').removeClass('white');
  	$('#workshop_text6,#workshop_li6').removeClass('white');
  	$('#workshop_text7,#workshop_li7').removeClass('white');
  	$('#workshop_text8,#workshop_li8').removeClass('white');
  	$('#workshop_text9,#workshop_li9').removeClass('white');
  	$('#workshop_text10,#workshop_li10').removeClass('white');
  	$('#workshop_text11,#workshop_li11').removeClass('white');
  }

	allblack();
	$('#parallelogram2').addClass('parallelogram2click');
	$('#parallelogram1').addClass('parallelogram1click');

	$('#parallelogram2 , #parallelogram1').click(function(){
		allblack();
		$('#parallelogram2').addClass('parallelogram2click');
		$('#parallelogram1').addClass('parallelogram1click');
    })
    $('#parallelogram3 , #parallelogram4').click(function(){
		allblack();
		$('#parallelogram3').addClass('parallelogram3click');
		$('#parallelogram4').addClass('parallelogram4click');
    })
     $('#parallelogram5 , #parallelogram6').click(function(){
		allblack();
		$('#parallelogram5').addClass('parallelogram5click');
		$('#parallelogram6').addClass('parallelogram6click');
    })

	$('#workshop_text1, #workshop_text2, #workshop_text3, #workshop_text4, #workshop_text5, #workshop_text6, #workshop_text7, #workshop_text8 ').click(function() {

		allblack();
		$('#parallelogram2').addClass('parallelogram2click');
		$('#parallelogram1').addClass('parallelogram1click');
		
		$('#workshop_content').show(1000);

	})
	$('#workshop_text1').click(function(){
		$('#first_container').text('ACCELEROBOTICS');
		
		$('#workshop_content').hide(100);
		$('#wrk_img > img').hide(100);
		$('#workshop_content').html('Conducted by <span style="font-weight:bolder"> ARK Techno Solutions</span>, this workshop aims at giving the participants an introduction to<span style="font-weight:bolder"> Robotics</span>, <span style="font-weight:bolder">Embedded systems </span> and<span style="font-weight:bolder"> Arduino</span>. The workshop will describe how to interface Accelerometer with Arduino. On attending this workshop students will learn how to create an Accelerometer based gesture controlled robot, PC-mouse, PC-games, etc.');
		$('#wrk_img >img').attr("src","images/accel.png").load(function(){
			$('#workshop_content').show(400);
			
		});
		allwhite();
		$('#workshop_text1,#workshop_li1').addClass('white');
		
		work_number = 1;
	})
	$('#workshop_text2').click(function(){
		$('#first_container').text('APPLICATIONS OF GIS');
		$('#workshop_content').hide(100);
		$('#wrk_img > img').hide(100);
		$('#workshop_content').html('Organized by <span style="font-weight:bolder">Civil Simplified</span>, this workshop teaches the students about <span style="font-weight:bolder">GPS</span>,<span style="font-weight:bolder"> Photogrammetry</span>,<span style="font-weight:bolder"> remote sensing</span>, etc. The workshop also includes an introduction on the various types of data collection and manipulation and a practical session on CAD based mapping.');
		$('#wrk_img > img').attr("src","images/gis.png").load(function(){
			$('#workshop_content').show(400);
			$('#wrk_img > img').show(400);
		});
		allwhite();
		$('#workshop_text2,#workshop_li2').addClass('white');
		work_number=2;
		// $('#workshop_content').show();
	})
	$('#workshop_text3').click(function(){
		$('#first_container').text('BIKE OVERHAULING');
		$('#workshop_content').hide(100);
		$('#wrk_img > img').hide(100);
		$('#workshop_content').html('This workshop will be conducted by<span style="font-weight:bolder"> PrigmaEdutech Services</span>. The workshop deals with<span style="font-weight:bolder"> dismantling </span>and<span style="font-weight:bolder"> conceptualization of motorbikes</span>,<span style="font-weight:bolder"> structure styling of engines </span>and<span style="font-weight:bolder"> engine technology.</span>');
		$('#wrk_img >img').attr("src","images/bike.png").load(function(){
			$('#workshop_content').show(400);
			$('#wrk_img > img').show(400);
		});
		allwhite();
		$('#workshop_text3,#workshop_li3').addClass('white');
		work_number=3;
	})
	$('#workshop_text4').click(function(){
		$('#first_container').text('BUSINESS PLAN');
		$('#workshop_content').hide(100);
		$('#wrk_img > img').hide(100);
		$('#workshop_content').html('To be conducted by<span style="font-weight:bolder"> Nurture Talent</span>, this workshop gives the participants an insight into <span style="font-weight:bolder">entrepreneurship</span>, <span style="font-weight:bolder">challenges in business</span>, <span style="font-weight:bolder">sales and marketing</span>, <span style="font-weight:bolder">digital marketing and emerging trends</span>. It will also direct the students towards developing their own business plan and setting up a startup.');
		$('#wrk_img >img').attr("src","images/bird2.png").load(function(){
			$('#workshop_content').show(400);
			$('#wrk_img > img').show(400);
		});
		allwhite();
		$('#workshop_text4,#workshop_li4').addClass('white');
		work_number=4;
	})
	$('#workshop_text5').click(function(){
		$('#first_container').text('HACKTRACK');
		$('#workshop_content').hide(100);
		$('#wrk_img > img').hide(100);
		$('#workshop_content').html('A workshop will be conducted by<span style="font-weight:bolder"> Ankit Fadia on ethical hacking</span>,<span style="font-weight:bolder"> password cracking</span>,<span style="font-weight:bolder"> unblocking websites</span>, etc. It will also deal with other interesting cyber security issues such as<span style="font-weight:bolder"> computer forensics</span> and<span style="font-weight:bolder"> cyber-crime investigation</span>.');
		$('#wrk_img >img').attr("src","images/hack.png").load(function(){
			$('#workshop_content').show(400);
			$('#wrk_img > img').show(400);
		});
		allwhite();
		$('#workshop_text5,#workshop_li5').addClass('white');
		work_number=5;
	})
	$('#workshop_text6').click(function(){
		$('#first_container').text('RC CARS');
		$('#workshop_content').hide(100);
		$('#wrk_img > img').hide(100);
		$('#workshop_content').html('Conducted by<span style="font-weight:bolder"> Aerotrix</span>, this workshop gives participants an introduction to<span style="font-weight:bolder"> automobiles and RC cars</span>. This workshop will give the students an insight about the various types of<span style="font-weight:bolder"> RC cars</span>, the numerous innovations in the field, and racing techniques.');
		$('#wrk_img >img').attr("src","images/rc.png").load(function(){
			$('#workshop_content').show(400);
			$('#wrk_img > img').show(400);
		});
		allwhite();
		$('#workshop_text6,#workshop_li6').addClass('white');
		work_number=6;
	})
	$('#workshop_text7').click(function(){
		$('#first_container').text('TRANCEBOTICS');
		$('#workshop_content').hide(100);
		$('#wrk_img > img').hide(100);
		$('#workshop_content').html('Conducted by<span style="font-weight:bolder"> ARK Techno Solutions</span> this workshop is designed to show students the essentials of creating<span style="font-weight:bolder"> ball-following robot</span>,<span style="font-weight:bolder"> gesture controlled media player and mouse pointer</span>. It gives students an introduction to Arduino software and hardware and image processing using <span style="font-weight:bolder">MATLAB</span>.');
		$('#wrk_img >img').attr("src","images/trance.png").load(function(){
			$('#workshop_content').show(400);
			$('#wrk_img > img').show(400);
		});
		allwhite();
		$('#workshop_text7,#workshop_li7').addClass('white');
		work_number=7;
	})
	$('#workshop_text8').click(function(){
		$('#first_container').text('WIRELESS SENSOR NETWORKS');
		$('#workshop_content').hide(100);
		$('#wrk_img > img').hide(100);
		$('#workshop_content').html('This workshop will be conducted by<span style="font-weight:bolder"> Frugal Labs</span>. It aims at imparting knowledge on<span style="font-weight:bolder"> motion sensing technologies</span> to the participants. It will also brief them on <span style="font-weight:bolder">sensors</span> and<span style="font-weight:bolder"> wireless communication</span>,<span style="font-weight:bolder"> data gathering</span>,<span style="font-weight:bolder"> analysis</span> and<span style="font-weight:bolder"> visualization</span>,<span style="font-weight:bolder"> microcontroller</span> and<span style="font-weight:bolder"> micro-processing units</span> and<span style="font-weight:bolder"> designing wearable consumer devices</span>.');
		$('#wrk_img >img').attr("src","images/wireless.png").load(function(){
			$('#workshop_content').show(400);
			$('#wrk_img > img').show(400);
		});
		allwhite();
		$('#workshop_text8,#workshop_li8').addClass('white');
		work_number=8;
	})
   $('#parallelogram3 , #parallelogram4').click(function(){
       if(work_number==1)
       {
		       $('#workshop_content').hide(100);
		$('#workshop_content').html(' <ul><li> Will be held on <span style="font-weight:bolder"> 9th and 10th September </span> (7 hours a day)</li><li>Students who register will be provided with all the tools and parts necessary for the workshop.</li><li>Cost: <span style="font-weight:bolder"> Rs 5200 </span> for team of 4 (Including kit)</li><li><span style="font-weight:bolder">Laptop is mandatory for each team</span></li></ul>');
		$('#workshop_content').show(400);
       }
      else if(work_number==2)
       {
		       $('#workshop_content').hide(100);
		$('#workshop_content').html(' <ul><li> To be held on <span style="font-weight:bolder"> 11th and 12th September</span></li><li>Cost:  <span style="font-weight:bolder">Rs 1290</span></li><li><span style="font-weight:bolder">Laptop is mandatory</span></li></ul>');
		$('#workshop_content').show(400);
       }
       else if(work_number==3)
       {
		       $('#workshop_content').hide(100);
		$('#workshop_content').html(' <ul><li>Held on<span style="font-weight:bolder"> 9th and 10th September</span></li><li>Cost:<span style="font-weight:bolder"> Rs 1200</span></li></ul>');
		$('#workshop_content').show(400);
       }
       else if(work_number==4)
       {
		       $('#workshop_content').hide(100);
		$('#workshop_content').html(' <ul><li>To be held on<span style="font-weight:bolder"> 9th and 10th September</span></li><li>Cost:<span style="font-weight:bolder"> Rs 1200</span></li><li><span style="font-weight:bolder">Laptop is mandatory</span></li></ul>');
		$('#workshop_content').show(400);
       }
       else if(work_number==5)
       {
		       $('#workshop_content').hide(100);
		$('#workshop_content').html(' <ul><li>To be held on<span style="font-weight:bolder"> 11th and 12th September</span></li><li>Cost:<span style="font-weight:bolder"> Rs 1000</span></li></ul>');
		$('#workshop_content').show(400);
       }
        else if(work_number==6)
       {
		       $('#workshop_content').hide(100);
		$('#workshop_content').html(' <ul><li>To be held on<span style="font-weight:bolder"> 5th and 6th September</span></li><li>Cost:<span style="font-weight:bolder"> Rs 6000</span> (exclusive of transmitter and receiver) /<span style="font-weight:bolder"> Rs 8000</span> (inclusive of transmitter and receiver)</li></ul>');
		$('#workshop_content').show(400);
       }
        else if(work_number==7)
       {
		       $('#workshop_content').hide(100);
		$('#workshop_content').html(' <ul><li>To be held on<span style="font-weight:bolder"> 5th and 6th September</span></li><li>Participants will be provided with all the tools and parts necessary during the workshop</li><li>Cost:<span style="font-weight:bolder"> Rs 5200</span> for team of 4 (including kit)</li><li><span style="font-weight:bolder">Laptop is mandatory for each team</span></li></ul>');
		$('#workshop_content').show(400);
       }
       else if(work_number==8)
       {
		       $('#workshop_content').hide(100);
		$('#workshop_content').html(' <ul><li>To be held on<span style="font-weight:bolder"> 11th and 12th September</span></li><li>Participants will be provided with all the tools and parts necessary during the workshop</li><li>Cost:<span style="font-weight:bolder"> Rs 5200</span> for team of 4 (including kit)</li><li><span style="font-weight:bolder">Laptop is mandatory for each team</span></li></ul>');
		$('#workshop_content').show(400);
       }
   })
 		 $('#parallelogram1 , #parallelogram2').click(function(){
       if(work_number==1)
       {
		      $('#workshop_content').hide(100);
		$('#workshop_content').html('Conducted by <span style="font-weight:bolder"> ARK Techno Solutions</span>, this workshop aims at giving the participants an introduction to<span style="font-weight:bolder"> Robotics</span>, <span style="font-weight:bolder">Embedded systems </span> and<span style="font-weight:bolder"> Arduino</span>. The workshop will describe how to interface Accelerometer with Arduino. On attending this workshop students will learn how to create an Accelerometer based gesture controlled robot, PC-mouse, PC-games, etc.');
		$('#workshop_content').show(400);
       }
      else if(work_number==2)
       {
		       $('#workshop_content').hide(100);
		$('#workshop_content').html('Organized by <span style="font-weight:bolder">Civil Simplified</span>, this workshop teaches the students about <span style="font-weight:bolder">GPS</span>,<span style="font-weight:bolder"> Photogrammetry</span>,<span style="font-weight:bolder"> remote sensing</span>, etc. The workshop also includes an introduction on the various types of data collection and manipulation and a practical session on CAD based mapping.');
		$('#workshop_content').show(400);
       }
       else if(work_number==3)
       {
		      $('#workshop_content').hide(100);
		$('#workshop_content').html('This workshop will be conducted by<span style="font-weight:bolder"> PrigmaEdutech Services</span>. The workshop deals with<span style="font-weight:bolder"> dismantling </span>and<span style="font-weight:bolder"> conceptualization of motorbikes</span>,<span style="font-weight:bolder"> structure styling of engines </span>and<span style="font-weight:bolder"> engine technology.</span>');
		$('#workshop_content').show(400);
       }
       else if(work_number==4)
       {
		       $('#workshop_content').hide(100);
		$('#workshop_content').html('To be conducted by<span style="font-weight:bolder"> Nurture Talent</span>, this workshop gives the participants an insight into <span style="font-weight:bolder">entrepreneurship</span>, <span style="font-weight:bolder">challenges in business</span>, <span style="font-weight:bolder">sales and marketing</span>, <span style="font-weight:bolder">digital marketing and emerging trends</span>. It will also direct the students towards developing their own business plan and setting up a startup.');
		$('#workshop_content').show(400);
       }
       else if(work_number==5)
       {
		      $('#workshop_content').hide(100);
		$('#workshop_content').html('A workshop will be conducted by<span style="font-weight:bolder"> Ankit Fadia on ethical hacking</span>,<span style="font-weight:bolder"> password cracking</span>,<span style="font-weight:bolder"> unblocking websites</span>, etc. It will also deal with other interesting cyber security issues such as<span style="font-weight:bolder"> computer forensics</span> and<span style="font-weight:bolder"> cyber-crime investigation</span>.');
		$('#workshop_content').show(400);
       }
        else if(work_number==6)
       {
		      $('#workshop_content').hide(100);
		$('#workshop_content').html('Conducted by<span style="font-weight:bolder"> Aerotrix</span>, this workshop gives participants an introduction to<span style="font-weight:bolder"> automobiles and RC cars</span>. This workshop will give the students an insight about the various types of<span style="font-weight:bolder"> RC cars</span>, the numerous innovations in the field, and racing techniques.');
		$('#workshop_content').show(400);
       }
        else if(work_number==7)
       {
		       $('#workshop_content').hide(100);
		$('#workshop_content').html('Conducted by<span style="font-weight:bolder"> ARK Techno Solutions</span> this workshop is designed to show students the essentials of creating<span style="font-weight:bolder"> ball-following robot</span>,<span style="font-weight:bolder"> gesture controlled media player and mouse pointer</span>. It gives students an introduction to Arduino software and hardware and image processing using <span style="font-weight:bolder">MATLAB</span>.');
		$('#workshop_content').show(400);
       }
       else if(work_number==8)
       {
		      $('#workshop_content').hide(100);
		$('#workshop_content').html('This workshop will be conducted by<span style="font-weight:bolder"> Frugal Labs</span>. It aims at imparting knowledge on<span style="font-weight:bolder"> motion sensing technologies</span> to the participants. It will also brief them on <span style="font-weight:bolder">sensors</span> and<span style="font-weight:bolder"> wireless communication</span>,<span style="font-weight:bolder"> data gathering</span>,<span style="font-weight:bolder"> analysis</span> and<span style="font-weight:bolder"> visualization</span>,<span style="font-weight:bolder"> microcontroller</span> and<span style="font-weight:bolder"> micro-processing units</span> and<span style="font-weight:bolder"> designing wearable consumer devices</span>.');
		$('#workshop_content').show(400);
       }

   })
 		$('#parallelogram5 , #parallelogram6').click(function(){
       if(work_number==1)
       {
		      $('#workshop_content').hide(100);
		$('#workshop_content').html('<ul><li><span style="font-weight:bolder">Ashok </span> (9791059414)</li><li><span style="font-weight:bolder">Gowtham </span> (8608703456)</li></ul>');
		$('#workshop_content').show(400);
		
       }
      else if(work_number==2)
       {
		       $('#workshop_content').hide(100);
		$('#workshop_content').html('<ul><li><span style="font-weight:bolder">Ashok</span> (9791059414)</li><li><span style="font-weight:bolder">Bhavitha</span> (9003249678)</li></ul>');
		$('#workshop_content').show(400);
       }
       else if(work_number==3)
       {
		      $('#workshop_content').hide(100);
		$('#workshop_content').html('<ul><li><span style="font-weight:bolder">Ashok</span> (9791059414)</li><li><span style="font-weight:bolder">Amarnadh</span> (8754450253)</li></ul>');
		$('#workshop_content').show(400);
       }
       else if(work_number==4)
       {
		       $('#workshop_content').hide(100);
		$('#workshop_content').html('<ul><li><span style="font-weight:bolder">Ashok</span> (9791059414)</li><li><span style="font-weight:bolder">Kalyan Murthy</span> (8754450253)</li></ul>');
		$('#workshop_content').show(400);
       }
       else if(work_number==5)
       {
		      $('#workshop_content').hide(100);
		$('#workshop_content').html('<ul><li><span style="font-weight:bolder">Ashok</span> (9791059414)</li><li><span style="font-weight:bolder">Rohith</span> (8681062862)</li></ul>');
		$('#workshop_content').show(400);
       }
        else if(work_number==6)
       {
		      $('#workshop_content').hide(100);
		$('#workshop_content').html('<ul><li><span style="font-weight:bolder">Ashok</span> (9791059414)</li><li><span style="font-weight:bolder">Rakesh</span> (8681800817)</li></ul>');
		$('#workshop_content').show(400);
       }
        else if(work_number==7)
       {
		       $('#workshop_content').hide(100);
		$('#workshop_content').html('<ul><li><span style="font-weight:bolder">Ashok</span> (9791059414)</li><li><span style="font-weight:bolder">Gowtham</span> (8608703456)</li></ul>');
		$('#workshop_content').show(400);
       }
       else if(work_number==8)
       {
		      $('#workshop_content').hide(100);
		$('#workshop_content').html('<ul><li><span style="font-weight:bolder">Ashok</span> (9791059414)</li><li><span style="font-weight:bolder">Gowtham</span> (8608703456)</li></ul>');
		$('#workshop_content').show(400);
       }
       
   })

	
/*--------------------------------HOSPITALITY----------------------------------------------*/


	$("#acco-bed").click(function(){
		$("#acco-help-content").hide(400);
		$("#acco-map-content").hide(400);
		$("#acco-contact-content").hide(400);
		$("#acco-bed-content").show(500);
		$("#accomodation-header-text").text("ACCOMODATION");

	});
	$("#acco-help").click(function(){
		$("#acco-bed-content").hide(400);
		$("#acco-map-content").hide(400);
		$("#acco-contact-content").hide(400);
		$("#acco-help-content").show(500);
		$("#accomodation-header-text").text("FAQ");
	});
	$("#acco-map").click(function(){
		$("#acco-help-content").hide(400);
		$("#acco-bed-content").hide(400);
		$("#acco-contact-content").hide(400);
		$("#acco-map-content").show(500);
		$("#accomodation-header-text").text("REACH SRM");
	});
	$("#acco-contact").click(function(){
		$("#acco-help-content").hide(400);
		$("#acco-bed-content").hide(400);
		$("#acco-map-content").hide(400);
		$("#acco-contact-content").show(500);
		$("#accomodation-header-text").text("MESSAGE US");
	});
	$('select').material_select();



	

}); //document.ready END