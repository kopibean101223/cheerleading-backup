<?php


session_start();
	if(!isset($_SESSION['user'])) header('Location: login.php');
$user = $_SESSION['user'];	
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="contactusalt.css">
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




            <div class="containerfix">
                <div class="containerfix2">
                    <div class="faqtext">
                        CONTACT US
                    </div>
                    <div class="line"></div>
                    <div class="questioncontainer">
                        <div class="further">
                            If you have any further inquiries, please do not hesitate to contact us on the following connections and we will answer shortly, thank you for your patience.
                        </div>
                            <div class="requirement">
                                <div class="question1">
                                    CONTACT INFO
                                </div>
                            </div>
                        <div   class="containercon1">
                            <img class="icon" src="images/contacticon.png">
                            <div class="containercon2">
                                <div class="contactname">Capt. Kyle Angle S. Lleno</div>
                                <div class="contactnum">09122189310</div>
                            </div>
                        </div>
                        <div   class="containercon1">
                            <img class="icon" src="images/contacticon.png">
                            <div class="containercon2">
                                <div class="contactname">Secretary Rhose Anne C. Coo</div>
                                <div class="contactnum">09658520231</div>
                            </div>
                        </div>

                        <div class="requirement">
                            <div class="question1">
                                SOCIAL MEDIA
                            </div>
                            
                        </div>
                        <div   class="containercon1">
                            <a href= "https://www.facebook.com/UMAKHeronsCheerleadingTeam"><img class="icon1" src="images/fbblue.png"></a>
                            <a href= "https://www.tiktok.com/@umak_hct?is_from_webapp=1&sender_device=pc"><img class="icon1" src="images/tiktokblue.png"></a>
                        </div>
                        <img class="tryoutrequirements" src="images/map.png">

                    </div>
                </div>
                <div class="containerfix3">
                    <div class="faqtext">
                        CONTACT FORM
                    </div>
                    <div class="line"></div>
                    <div class="questioncontainer">
                        <div class="contact-form-container">
                            
                            <div class="contact-form-box">
                                <form class="form" action="contact_process.php" method="post">
                                    <label for="name">NAME:</label><br>
                                    <input type="text" id="name" name="name"><br><br>
                            
                                    <div class="phone-email">
                                        <div class="phone-class">
                                            <label for="phone">PHONE:</label><br>
                                            <input type="text" id="phone" name="phone"><br><br>
                                        </div>
                                        <div class="email-class">
                                            <label for="email">EMAIL ADDRESS:</label><br>
                                            <input type="text" id="email" name="email"><br><br>
                                        </div>
                                    </div>
                            
                                    <label for="message">MESSAGE:</label><br>
                                    <input type="text" id="message" name="message"><br><br>
                            
                                    <input class="submit-button" type="submit" value="SUBMIT">
                                </form>
                                
                            </div>
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
        </div>
    

    
</body>
</html>

