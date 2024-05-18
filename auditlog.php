<?php


session_start();
	if(!isset($_SESSION['user'])) header('Location: login.php');
$user = $_SESSION['user'];	
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="auditlog.css">
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
									<button class="dropbtn"><a href="?"><?php echo $user['USERNAME'] ?></a> 
										<i class="fa fa-caret-down"></i>
									</button>
									<div class="dropdown-content">
										<a href="logout.php">LOG OUT</a>
										<a href="auditlog.php">AUDIT LOGS</a>
										<a href="submitted_formsofficer.php">SUBMISSIONS</a>
									</div>
								</div> 
							</div>
					</div>
				</div>
		
				<img class="logo1" src="images/logo1.png" alt="logo1-umak"> 
						<img class="logo2" src="images/logo2.png" alt="logo2-herons">  
				</div>
			







			
                <div class="page-title">
				    <h2>AUDIT LOGS</h2>
                </div>
                
				<div class="audit_content">
                    <div class="line"></div>
					<div class="audit_left">
						<div class="publication">
							<a href="#"> Publication #1 </a>
						</div>
						<div class="publication">
							<a href="#"> Publication #2</a>
						</div>
						<div class="publication">
							<a href="#"> Publication #3</a>
						</div>
						<div class="publication">
							<a href="#"> Publication #4</a>
						</div>
						<div class="publication">
							<a href="#"> Publication #5</a>
						</div>
						<div class="publication">
							<a href="#"> Publication #6</a>
						</div>
						<div class="publication">
							<a href="#"> Publication #7</a>
						</div>
						<div class="publication">
							<a href="#"> Publication #8</a>
						</div>
						<div class="publication">
							<a href="#"> Publication #9</a>
						</div>
						<div class="publication">
							<a href="#"> Publication #10</a>
						</div>
						<div class="publication">
							<a href="#"> Publication #11</a>
						</div>
						<div class="publication">
							<a href="#"> Publication #12</a>
						</div>
						<div class="publication">
							<a href="#"> Publication #13</a>
						</div>
						<div class="publication">
							<a href="#"> Publication #14</a>
						</div>
						<div class="publication">
							<a href="#"> Publication #15</a>
						</div>
				
					</div>
					<div class="audit_right">
						<div class="publication_right">
							<h2> Publication #1 </h2>
						</div>
						<div class="info">
							<p class="author"> Author: </p>
							<p class="page"> Page: </p>
							<p class="date"> Date: </p>
							<p class="desc"> Description: </p>
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
                    <a href= "aboutus-account.html">LEARN MORE</a>
                </div>
                </div>

                <div class="container">
                    <div class="quicklinks">QUICK LINKS
                       <div class="roster"><a href= "aboutus-account.html">Roster</a></div>
                       <div class="About"><a href= "aboutus-account.html">About the team</a></div>
                       <div class="schedule"><a href= "schedule-account.html">Schedule</a></div>
                       <div class="common"><a href= "tryoutalt-account.html">Common inquiries</a></div>
                       <div class="cont"><a href= "contactusalt-account.html">Contacts</a></div>
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
                        <a href= "contactusalt-account.html">CONTACT US</a>
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
    

           
</body>
</html>