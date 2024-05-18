<?php


session_start();
	if(!isset($_SESSION['user'])) header('Location: login.php');
$user = $_SESSION['user'];	
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="gallery.css">
	</head>
	<body>
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













            <div class="white">
                <div class="gallerytext">
                    GALLERY
                </div>
                <div class="line"></div>
                <div class="blue1">
                    <div class="blue2">
                        <div class="awards">
                            AWARDS
                        </div>
                        <div class="awardstxt">

                            The UMAK Herons Cheerleading Team has garnered admiration for their outstanding performances, exemplifying the core values of dedication, unity, and spirit. While specific awards may not be listed, their collective passion and synchronized precision create an undeniable impact. The UMAK Herons shine as a beacon of excellence in the cheerleading realm, showcasing resilience, camaraderie, and an unwavering commitment to the art of cheer. Their remarkable journey speaks volumes about the team's exceptional qualities and their ability to leave an indelible mark on audiences.                        </div>
                    </div>
                    <div class="piccontainer">
                        <div id="mainImageContainerGallery1">
                            <img id="mainImageGallery1" src="images/awards.png" alt="Main Image">
                        </div>

                    </div>
                </div>
                <div class="blue3">
                    <div id="thumbnail-images-gallery1">
                        <img src="images/1.jpg" alt="Thumbnail 1" class="thumbnail" onclick="showImage('images/1.jpg', 'mainImageGallery1', 'mainImageContainerGallery1')">
                        <img src="images/2.jpg" alt="Thumbnail 1" class="thumbnail" onclick="showImage('images/2.jpg', 'mainImageGallery1', 'mainImageContainerGallery1')">
                        <img src="images/3.jpg" alt="Thumbnail 1" class="thumbnail" onclick="showImage('images/3.jpg', 'mainImageGallery1', 'mainImageContainerGallery1')">
                        <img src="images/addtemplate.png" alt="Thumbnail 1" class="thumbnail" onclick="showImage('images/4.jpg', 'mainImageGallery1', 'mainImageContainerGallery1')">
                        <img src="images/5.jpg" alt="Thumbnail 1" class="thumbnail" onclick="showImage('images/5.jpg', 'mainImageGallery1', 'mainImageContainerGallery1')">
                        <img src="images/6.jpg" alt="Thumbnail 1" class="thumbnail" onclick="showImage('images/6.jpg', 'mainImageGallery1', 'mainImageContainerGallery1')">
                        <img src="images/7.jpg" alt="Thumbnail 1" class="thumbnail" onclick="showImage('images/7.jpg', 'mainImageGallery1', 'mainImageContainerGallery1')">
                
                      </div>

                </div>
            </div>
            <div class="white">
            
                <div class="blue1">
                    <div class="blue2">
                        <div class="awards">
                            PERFORMANCE
                        </div>
                        <div class="awardstxt">

                            The UMAK Herons Cheerleading Team astounds audiences with their stellar performances, setting a standard of excellence that resonates with unmatched energy and precision. Their dynamic routines showcase a perfect blend of skill, passion, and teamwork, leaving spectators in awe. The UMAK Herons excel in delivering captivating displays of athleticism and spirit, proving time and again that their commitment to top-notch performances is unwavering. With each routine, they leave an indelible mark on the cheerleading stage, earning admiration for their unmatched talent and dedication to the art of cheer.                        </div>
                    </div>
                    <div class="piccontainer">
                        <div id="mainImageContainerGallery2">
                            <img id="mainImageGallery2" src="images/33.jpg" alt="Main Image">
                        </div>

                    </div>
                </div>
                <div class="blue3">
                    <div id="thumbnail-images-gallery2">
                        <img src="images/11.jpg" alt="Thumbnail 1" class="thumbnail" onclick="showImage('images/11.jpg', 'mainImageGallery2', 'mainImageContainerGallery2')">
                        <img src="images/22.jpg" alt="Thumbnail 1" class="thumbnail" onclick="showImage('images/22.jpg', 'mainImageGallery2', 'mainImageContainerGallery2')">
                        <img src="images/99.jpg" alt="Thumbnail 1" class="thumbnail" onclick="showImage('images/99.jpg', 'mainImageGallery2', 'mainImageContainerGallery2')">
                        <img src="images/44.jpg" alt="Thumbnail 1" class="thumbnail" onclick="showImage('images/44.jpg', 'mainImageGallery2', 'mainImageContainerGallery2')">
                        <img src="images/55.jpg" alt="Thumbnail 1" class="thumbnail" onclick="showImage('images/55.jpg', 'mainImageGallery2', 'mainImageContainerGallery2')">
                        <img src="images/66.jpg" alt="Thumbnail 1" class="thumbnail" onclick="showImage('images/66.jpg', 'mainImageGallery2', 'mainImageContainerGallery2')">
                        <img src="images/77.jpg" alt="Thumbnail 1" class="thumbnail" onclick="showImage('images/77.jpg', 'mainImageGallery2', 'mainImageContainerGallery2')">
                        <img src="images/88.jpg" alt="Thumbnail 1" class="thumbnail" onclick="showImage('images/88.jpg', 'mainImageGallery2', 'mainImageContainerGallery2')">
                
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
                    <div class="learnmorecontainer">
                    <div class="foot4"> 
                        <a href= "aboutus.html">LEARN MORE</a>
                    </div>
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
        </div>
    

        <script src="script.js"></script>
</body>
</html>
