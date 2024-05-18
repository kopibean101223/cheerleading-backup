<?php


session_start();
	if(!isset($_SESSION['user'])) header('Location: login.php');
$user = $_SESSION['user'];	
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="schedule.css">
	</head>
		<div class="wrapper">
            <header>
				<div class="headercontainer">
					<div class="umakcontainer">
						<div class="umaktext"> UMAK HERONS CHEERLEADING TEAM</div>
					</div>
					<div class="ribboncontainer">
						<div class="ribboncontainer2">
							<div class="ribboncontainer3">
								<div class="ribbontext"><a href= "indexofficer.php">HOME</a></div>
							</div>
							<div class="ribboncontainer3">
								<div class="ribbontext"><a href= "aboutusofficer.php">ABOUT US</a></div>
							</div>
							<div class="ribboncontainer3">
								<div class="ribbontext"><a href= "galleryofficer.php">GALLERY</a></div>
							</div>
							<div class="ribboncontainer3">
								<div class="ribbontext"><a href= "scheduleofficer.php">SCHEDULE</a></div>
							</div>
							<div class="ribboncontainer3">
								<div class="ribbontext"><a href= "newsofficer.php">NEWS</a></div>
							</div>
							<div class="ribboncontainer3">
								<div class="ribbontext"><a href= "tryoutaltofficer.php">TRYOUTS/FAQ</a></div>
							</div>
							<div class="ribboncontainer3">
								<div class="ribbontext"><a href= "contactusaltofficer.php">CONTACT US</a></div>
							</div>              

							
							<div class="ribboncontainer3">
                                <div class="dropdown">
                                    <button class="dropbtn"><a href="#"><?php echo $user['USERNAME'] ?></a> 
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <div class="dropdown-content">
                                        <a href="logout.php">LOG OUT</a>

                                        <a href="auditlog.php">AUDIT LOGS</a>
									<a href="submitted_forms.php">SUBMISSIONS</a>
                                    </div>
                                </div> 
                            </div>
							
					</div>
				</div>
		
				<img class="logo1" src="images/logo1.png" alt="logo1-umak"> 
						<img class="logo2" src="images/logo2.png" alt="logo2-herons">  
				</div>
			</header>
            
            <body>
			<div class="competitionbox">
				<div class="competitionboxheader">
					<p>COMPETITIONS / EVENTS<p>
				</div>
				<div class="competitionboxleft">
					<div class="yellowline">
						<div class="yellowlinebox">
							<a href="index.html"><p>Vista Mall, Bataan</p></a>
						</div>
					</div>
					<div class="whiteline">
						<div class="whitelinebox">
						<a href="events2.html"><p>WNCAA </p></a>
						</div>
					</div>
					<div class="whiteline">
						<div class="whitelinebox">
							<a href="events3.html"><p>NATIONAL-ALL STAR</p></a>
						</div>
					</div>
					<div class="whiteline">
						<div class="whitelinebox">
							<a href=""><p>-----</p></a>
						</div>
					</div>
					<div class="whiteline">
						<div class="whitelinebox">
							<a href=""><p>-----</p></a>
						</div>
					</div>
					<div class="whiteline">
						<div class="whitelinebox">
							<a href=""><p>-----</p></a>
						</div>
					</div>
					<div class="whiteline">
						<div class="whitelinebox">
							<a href=""><p>-----</p></a>
						</div>
					</div>
					<div class="whiteline">
						<div class="whitelinebox">
							<a href=""><p>------</p></a>
						</div>
					</div>
				</div>
				<div class="competitionboxright">
					<div class="competitionboxrightheader">
						<p> All CHEERS COMPETITION </p>
					</div>



					<div class="subbox">
						<img src="images/competitionbox.png">
						<div class="subboxheader">
							<p>Experience the vibrant spirit of cheerleading at the "All Cheers Competition" in Vista Mall Bataan on October 20! 
								This thrilling event will feature eight dynamic university cheerleading teams showcasing their unparalleled athleticism, 
								precision, and boundless enthusiasm. As these spirited squads go head-to-head, they will push the boundaries of creativity and 
								synchronization in their quest for the coveted title.  </p>
							<div class="subboxicons">
								<div class="subboxcalendar">
									<img src="images/Vector.png">
									<p>October 20, 2023 </p>
								</div>
								<br>
								<div class="subboxtime">
									<img src="images/Vector (1).png">
									<p>4PM</p>
								</div>
								<br>
								<div class="subboxlocation">
									<img src="images/Vector (2).png">
									<p>Vista Malls <br>Main Hall</p>
								</div>
							</div>
						</div>
					</div>





					

				</div>
			</div>
			<div class="trainingbox">
				<div class="trainingboxheader">
					<p>Training</p>
				</div>
				<div class="trainingicons">
					<div class="subboxicons">
						<div class="subboxcalendar">
							<img src="images/Vector.png">
							<p>October 20, 2023 (FRIDAY)</p>
						</div>
						<br>
						<div class="subboxtime">
							<img src="images/Vector (1).png">
							<p>5 PM - 9 PM</p>
						</div>
						<br>
						<div class="subboxlocation">
							<img src="images/Vector (2).png">
							<p>HPSB BASKETBALL COURT<br>(12th Floor)</p>
						</div>
					</div>
				</div>
				<div class="requirementsheader">
					<a>Things to Bring</a><br><br>
						<li>School ID / COR<br></li>
						<li>Vaccination Card<br></li>
						<li>Water tumbler<br></li>
						<li>Extra shirt<br><br></li>
					<a> What to wear</a><br><br>
						<li>White shirt<br></li>
						<li>Rubber shoes<br></li>
						<li>Extra shirt<br><br></li>
					<div class="got22">
						<div class="got32">
							<a href= "contactusalt.html">CONTACT US</a>
						</div>
					</div>   
				</div>
			</div>
            </body>
		</div>
            <footer>
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
							<a href="https://www.facebook.com/UMAKHeronsCheerleadingTeam"target="blank"><div class="fb"><div class="fb1">Facebook</div></div></a>
							<a href="https://www.tiktok.com/@umak_hct?_t=8irEUpQtiDZ&_r=1&fbclid=IwAR0fxBFp-80y_h4IxwoBBvtVxqAe8Xo4nY2WVuqWSzAHAXjg-XzkK5-CUNY" target="_blank"><div class="tiktok"><div class="tiktok1">Tiktok</div></div></a>
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
		</div>
			</footer>
</html>
