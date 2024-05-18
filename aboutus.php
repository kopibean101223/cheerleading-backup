<?php
session_start();
	if(!isset($_SESSION['user'])) header('Location: login.php');
$user = $_SESSION['user'];	
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="aboutus.css">
	</head>	
	<body>
		
		<div class="wrapper">
			<div class="headercontainer">
                <div class="umakcontainer">
                    <div class="umaktext"> UMAK HERONS CHEERLEADING TEAM</div>
                </div>
                <div class="ribboncontainer">
                    <div class="ribboncontainer2">
                        <div class="ribboncontainer3">
                            <div class="ribbontext"><a href= "index.php">HOME</a></div>
                        </div>
                        <div class="ribboncontainer3">
                            <div class="ribbontext"><a href= "aboutus.php">ABOUT US</a></div>
                        </div>
                        <div class="ribboncontainer3">
                            <div class="ribbontext"><a href= "gallery.php">GALLERY</a></div>
                        </div>
                        <div class="ribboncontainer3">
                            <div class="ribbontext"><a href= "schedule.php">SCHEDULE</a></div>
                        </div>
                        <div class="ribboncontainer3">
                            <div class="ribbontext"><a href= "news.php">NEWS</a></div>
                        </div>
                        <div class="ribboncontainer3">
                            <div class="ribbontext"><a href= "tryoutalt.php">TRYOUTS/FAQ</a></div>
                        </div>
                        <div class="ribboncontainer3">
                            <div class="ribbontext"><a href= "contactusalt.php">CONTACT US</a></div>
                        </div>              
                        <div class="ribboncontainer3">
                            <div class="ribbontext"><a href= "signup.php">SIGN-UP</a></div>
                        </div>
                </div>
            </div>
    
            <img class="logo1" src="images/logo1.png" alt="logo1-umak"> 
                    <img class="logo2" src="images/logo2.png" alt="logo2-herons">  
            </div>
			<br>
			<div class = "mainbg">
					<div class = "ftpicbg">
						<img class = "featuredpic" src="images/mainpic2.JPG" alt="mainimage">
					</div>
					<div class = "fttextbg">
								<div class = "featuredtext1"><br></br>ABOUT US
								</div>
								<div class = "featuredtext2">The UMAK Herons Cheerleading Team is a group of student athletes who play an 
								important part in increasing the school's morale and supporting our sports teams, which is overseen by the 
								Center for Athletic Development (CAD). The cheerleading team is well-known for their outstanding athleticism, 
								passion, and collaboration. They devote endless hours to polishing their abilities, perfecting routines, and 
								instilling a sense of unity among their members.

								<br><br>The team's leadership is made up of experienced captains who offer advice, mentoring, and inspiration to their
								cheerleader teammates. The cheerleading squad displays the athletes' duty and sense of school pride in addition 
								to their skill on the field. They are a prime example of what it entails to represent the university with skill, 
								fervor, and spirit.<br><br>
								</div>
				
								<div class = "featuredtext1">OUR BATTLE CRY
								</div>
								<div class = "featuredtext2">
										WIN EVERY BATTLE <br>
										TO GOD TO BE THE GLORY ALTOGETHER! <br><br>
										HERONS, CHEER <br>	
										GO BLUE, YELLOW, WHITE,FIGHT HERONS <br>
										FIGHT, UMAK! <br>
										FLY HIGH!
								</div>
					</div>
			</div>
			<h2 id="but2"></h2>
			
			<center>
			<div class = "line0"></div>
				<div class="container_top">
					<div class="image-upload" id="imageUpload">
					<img src="images/add.png">
					</div>
					<div class="inputs">
						<input class="caption" type="text" placeholder="Write Name..." id="caption">
						<select class="mind" name="role" id="role">
							<option value="" disabled selected>Role</option>
							<option value="coach">Coach</option>
							<option value="officer">Officer</option>
							<option value="members">Members</option>
						</select>

						<button id="publish">Add</button>
					</div>
				</div>
			</center>

	<div class = "conj">
		
			<div class = "pogi">
				<div class="containerfix4">
				<div class = "spacing">Meet The TEAM</div>
			

						<div class = "line1"></div>

			<div class = "mainlist">
					<a class = "but1" href="#but1">➤ Back to Top  </a>
					<a class = "but2" href="#but2">➤ Coaches </a>
					<a class = "but3" href="#but3">➤ Officers  </a>
					<a class = "but4" href="#but4">➤ Roster  </a>
			</div>
		</div>
			</div>
			<div class="containerfix">
			<div class ="members">
						<div class = "lines0">
									<div class = "line3"></div>
						
						</div>		
						<div class="containerfix1">
							
									<div class = "member1"><img class ="member2" src="images/timbang.png"><div class = "text1">TIMBANG, ALVIN</div></div>
									

									
									<div class = "member1"><img class ="member2" src="images/cruz.png"><div class = "text2">CRUZ, JAYSON</div></div>
								
								<div class = "member1"><img class ="member2" src="images/ortega.png"><div class = "text3">ORTEGA, JHOMAR</div></div>
									
									<div class = "member1"><img class ="member2" src="images/albay.png"><div class = "text4">ALBAY, NAIGEL</div></div>
									
								</div>
						<h2 id="but3"></h2>
						<div class = "lines1">
									<div class = "line3"></div>
						
						</div>

						<div class="containerfix1">
							<div class = "member1"><img class ="member2" src="images/kyle.png"><div class = "text1">Lleno, Kyle Angelo</div></div>
							<div class = "member1"><img class ="member2" src="images/mary.jpg"><div class = "text2">Salcedo, Mary Grace D.</div></div>	
							<div class = "member1"><img class ="member2" src="images/rhose.png"><div class = "text3">Coo, Rhose Anne C.</div></div>	
							<div class = "member1"><img class ="member2" src="images/jenrick.png"><div class = "text4">Villaros, Jenrick P</div></div>	
							<div class = "member1"><img class ="member2" src="images/lwayne.png"><div class = "text1">Mamaril, Lwayne John P.</div></div>	
									
								</div>
						<h2 id="but4"></h2>
						<div class = "lines1">
									<div class = "line3"></div>
						
						</div>			
						<div class="containerfix1">
									<div class = "member1"><img class ="member2" src="images/marcus.png"><div class = "text1">Balunsay, Marcuss Bennedict G.</div></div>
									<div class = "member1"><img class ="member2" src="images/edgardo.png"><div class = "text2">Bernardino, Edgardo T. Jr.</div></div>
									<div class = "member1"><img class ="member2" src="images/robin.png"><div class = "text3">Carlos, Robin Christopher A.</div></div>
									<div class = "member1"><img class ="member2" src="images/jericho.png"><div class = "text4">Comla, Jericho T.</div></div>						
									<div class = "member1"><img class ="member2" src="images/sabino.png"><div class = "text1">Delgado III, Sabino C.</div></div>
								</div><div class="containerfix1">
									<div class = "member1"><img class ="member2" src="images/ranier.png"><div class = "text2">Guillergan, Ranier V.</div></div>
									<div class = "member1"><img class ="member2" src="images/jenneth.png"><div class = "text3">Laude, Jenneth T.</div></div>
									<div class = "member1"><img class ="member2" src="images/robelyn.png"><div class = "text4">Madrona, Robelyn P.</div></div>
									<div class = "member1"><img class ="member2" src="images/jasmine.png"><div class = "text1">Manansala, Jasmine Mae F.</div></div>
									<div class = "member1"><img class ="member2" src="images/patricia.png"><div class = "text2">Manuntag, Patricia Nicole P.</div></div>
								</div><div class="containerfix1">			
									<div class = "member1"><img class ="member2" src="images/scarlet.png"><div class = "text3">Ortega, Scarlet Joy P</div></div>
									<div class = "member1"><img class ="member2" src="images/maurene.png"><div class = "text4">Sanchez, Maurene Kaye T.</div></div>
									<div class = "member1"><img class ="member2" src="images/jamiela.png"><div class = "text1">Domingo, Jamiela U.</div></div>
									<div class = "member1"><img class ="member2" src="images/rajesh.png"><div class = "text2">Guillergan, Rajesh V</div></div>
									<div class = "member1"><img class ="member2" src="images/john rey.png"><div class = "text3">Lamar, John Rey J.</div></div>
								</div><div class="containerfix1">			
									<div class = "member1"><img class ="member2" src="images/eugeliene.png"><div class = "text4">Malaca, Eugelien M.</div></div>
									<div class = "member1"><img class ="member2" src="images/james lee.png"><div class = "text1">Rosario, James Lee A.</div></div>
									<div class = "member1"><img class ="member2" src="images/jhoe when.png"><div class = "text2">Quiñones, Jhoe When A.</div></div>
									<div class = "member1"><img class ="member2" src="images/replace.png"></div>
									<div class = "member1"><img class ="member2" src="images/replace.png"></div>
									
								</div>
			</div>
		</div>
			</div>
			

			
				<div class="footer">
					<img class="footlogo" src="images/logo2.png">
	
					<div class="container2">
					<div class="foot1">HERONS CHEERLEADING TEAM</div>
					<div class="foot2">UNIVERSITY OF MAKATI</div>
					<div class="foot3">The UMAK Herons Cheerleading Team, under the Center for Athletic Development (CAD), boosts school morale and supports sports teams with exceptional athleticism, passion, and collaboration. Led by experienced captains, they exemplify duty, school pride, and represent the university with skill and fervor.
					</div>
					<div class="foot4"> 
						<a href= "aboutus.html">LEARN MORE</a>
					</div>
					</div>
	
					<div class="container">
						<div class="quicklinks">QUICK LINKS
							<div class="roster"><a href= "aboutus.html#but4">Roster</a></div>
							<div class="About"><a href= "aboutus.html">About the team</a></div>
							<div class="schedule"><a href= "schedule.html">Schedule</a></div>
							<div class="common"><a href= "tryoutalt.html">Common inquiries</a></div>
							<div class="cont"><a href= "contactusalt.html">Contacts</a></div>
						 </div>
					   </div>
	
					 <div class="container1">
						<div class="followus">FOLLOW US
						   <div class="fb"><div class="fb1"><a href= "https://www.facebook.com/UMAKHeronsCheerleadingTeam">Facebook</a></div></div>
						   <div class="tiktok"><div class="tiktok1"><a href= "https://www.tiktok.com/@umak_hct?is_from_webapp=1&sender_device=pc">Tiktok</a></div></div>
						</div>
					   </div>
	   
						
	
					<div class="container3">
					<div class="got1">GOT THE SPIRIT? <BR> LET'S HEAR IT!
						<div class="got2">
							<div class="got3">
							<a href= "contactusalt.html">CONTACT US</a>
							</div>
						</div>   
					 </div>
					</div>
	
					
	
	
	
					 
				</div>
				<div class="footlast">
					<div class="hct">© UMAK HCT</div>
					<div class="all">All Rights Reserved </div>
				 </div>
				 <div class="footlast1"></div>
        
   

    

    
</body>
</html>

