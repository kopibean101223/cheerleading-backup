<?php


session_start();
	if(!isset($_SESSION['user'])) header('Location: login.php');
$user = $_SESSION['user'];	
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="attendance-monthsreal.css">
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
								<div class="ribbontext"><a href= "indexcoach.php">HOME</a></div>
							</div>
							<div class="ribboncontainer3">
								<div class="ribbontext"><a href= "aboutuscoach.php">ABOUT US</a></div>
							</div>
							<div class="ribboncontainer3">
								<div class="ribbontext"><a href= "gallerycoach.php">GALLERY</a></div>
							</div>
							<div class="ribboncontainer3">
								<div class="ribbontext"><a href= "schedulecoach.php">SCHEDULE</a></div>
							</div>
							<div class="ribboncontainer3">
								<div class="ribbontext"><a href= "newscoach.php">NEWS</a></div>
							</div>
							<div class="ribboncontainer3">
								<div class="ribbontext"><a href= "tryoutaltcoach.php">TRYOUTS/FAQ</a></div>
							</div>
							<div class="ribboncontainer3">
								<div class="ribbontext"><a href= "contactusaltcoach.php">CONTACT US</a></div>
							</div>              
                        <div class="ribboncontainer3">
                            <div class="dropdown">
                                <button class="dropbtn"><a href="?"><?php echo $user['USERNAME'] ?></a> 
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="logout.php">LOG OUT</a>
                                    <a href="member_attend.php">ATTENDANCE</a>
                                    <a href="attendance-month.php">RECORDS</a>
                                    <a href="coach_input.php">EVALUATION</a>
                                    <a href="submitted_formscoach.php">SUBMISSIONS</a>
                                </div>
                            </div> 
                        </div>
                </div>
            </div>
    
            <img class="logo1" src="images/logo1.png" alt="logo1-umak"> 
                    <img class="logo2" src="images/logo2.png" alt="logo2-herons">  
            </div>

            <div class="attendancetext"> ATTENDANCE</div>
            <div class="line"></div>
            <div class="containera">
            <div class="monthtext">MAY</div></div>
            
            <div class="containera">
                <div class="containermonth">
                    <div class="containermontha">
                        <div class="text">
                            DATE
                        </div>
                    </div>
                </div>
                <div class="containerstatus">
                    <div class="containerstatusa">
                        <div class="text">
                            STATUS
                        </div>
                    </div>
                </div>
                <div class="containerdays">
                    <div class="containerdaysa">
                        <div class="text">
                            REMARKS
                        </div>
                    </div>
                </div>

            </div>



            
            <div class="containerb">
                <div class="containermonth">    
                        <div class="text1">
                            May 1, 2024 <br>
                            5PM - 9PM
                        </div>                
                </div>
                <div class="containerstatus">                   
                        <div class="text3">
                            Completed
                        </div>                 
                </div>

                <div class="containerdays">                   
                        <div class="text4">
                            P: ? | A: ? | L: ? | E: ?
                       </div>                   
                </div>
                <div class="containerevaluate">
                    <div class="text2">
                        <a href= "">Check Session</a>
                   </div>
                </div>
            </div>

            <div class="containerc">
                <div class="containermonth">
                        <div class="text1">
                            May 3, 2024 <br>
                            5PM - 9PM
                        </div>
                </div>
                <div class="containerstatus">
                    
                        <div class="text3">
                            Completed
                        </div>         
                </div>
                <div class="containerdays">                   
                        <div class="text4">
                            P: ? | A: ? | L: ? | E: ?
                        </div>                    
                </div>
                <div class="containerevaluate">
                    <div class="text2">
                        <a href= "">Check Session</a>
                   </div>
                </div>
            </div>
            <div class="containerb">
                <div class="containermonth">    
                        <div class="text1">
                            May 6, 2024 <br>
                            5PM - 9PM
                        </div>                
                </div>
                <div class="containerstatus">                   
                        <div class="text3">
                            Completed
                        </div>                 
                </div>

                <div class="containerdays">                   
                        <div class="text4">
                            P: ? | A: ? | L: ? | E: ?
                       </div>                   
                </div>
                <div class="containerevaluate">
                    <div class="text2">
                        <a href= "">Check Session</a>
                   </div>
                </div>
            </div>

            <div class="containerc">
                <div class="containermonth">
                        <div class="text1">
                            May 8, 2024 <br>
                            5PM - 9PM
                        </div>
                </div>
                <div class="containerstatus">
                    
                        <div class="text3">
                            Completed
                        </div>         
                </div>
                <div class="containerdays">                   
                        <div class="text4">
                            P: ? | A: ? | L: ? | E: ?
                        </div>                    
                </div>
                <div class="containerevaluate">
                    <div class="text2">
                        <a href= "">Check Session</a>
                   </div>
                </div>
            </div>

            <div class="containerb">
                <div class="containermonth">    
                        <div class="text1">
                            May 10, 2024 <br>
                            5PM - 9PM
                        </div>                
                </div>
                <div class="containerstatus">                   
                        <div class="text3">
                            On going
                        </div>                 
                </div>

                <div class="containerdays">                   
                        <div class="text4">
                            P: ? | A: ? | L: ? | E: ?
                       </div>                   
                </div>
                <div class="containerevaluate">
                    <div class="text2">
                        <a href= "attendance-days.html">Check Session</a>
                   </div>
                </div>
            </div>

            <div class="containerc">
                <div class="containermonth">
                        <div class="text1">
                            May 13, 2024 <br>
                            5PM - 9PM
                        </div>
                </div>
                <div class="containerstatus">
                    
                        <div class="text3">
                            Not Started
                        </div>         
                </div>
                <div class="containerdays">                   
                        <div class="text4">
                            P: ? | A: ? | L: ? | E: ?
                        </div>                    
                </div>
                <div class="containerevaluate">
                    <div class="text2">
                        <a href= "">Check Session</a>
                   </div>
                </div>
            </div>

            <div class="containerb">
                <div class="containermonth">    
                        <div class="text1">
                            May 15, 2024 <br>
                            5PM - 9PM
                        </div>                
                </div>
                <div class="containerstatus">                   
                        <div class="text3">
                            Not Started
                        </div>                 
                </div>

                <div class="containerdays">                   
                        <div class="text4">
                            P: ? | A: ? | L: ? | E: ?
                       </div>                   
                </div>
                <div class="containerevaluate">
                    <div class="text2">
                        <a href= "">Check Session</a>
                   </div>
                </div>
            </div>

            <div class="containerc">
                <div class="containermonth">
                        <div class="text1">
                            May 17, 2024 <br>
                            5PM - 9PM
                        </div>
                </div>
                <div class="containerstatus">
                    
                        <div class="text3">
                            Not Started
                        </div>         
                </div>
                <div class="containerdays">                   
                        <div class="text4">
                            P: ? | A: ? | L: ? | E: ?
                        </div>                    
                </div>
                <div class="containerevaluate">
                    <div class="text2">
                        <a href= "">Check Session</a>
                   </div>
                </div>
            </div>

            <div class="containerb">
                <div class="containermonth">    
                        <div class="text1">
                            May 20, 2024 <br>
                            5PM - 9PM
                        </div>                
                </div>
                <div class="containerstatus">                   
                        <div class="text3">
                            Not Started
                        </div>                 
                </div>

                <div class="containerdays">                   
                        <div class="text4">
                            P: ? | A: ? | L: ? | E: ?
                       </div>                   
                </div>
                <div class="containerevaluate">
                    <div class="text2">
                        <a href= "">Check Session</a>
                   </div>
                </div>
            </div>

            <div class="containerc">
                <div class="containermonth">
                        <div class="text1">
                            May 22, 2024 <br>
                            5PM - 9PM
                        </div>
                </div>
                <div class="containerstatus">
                    
                        <div class="text3">
                            Not Started
                        </div>         
                </div>
                <div class="containerdays">                   
                        <div class="text4">
                            P: ? | A: ? | L: ? | E: ?
                        </div>                    
                </div>
                <div class="containerevaluate">
                    <div class="text2">
                        <a href= "">Check Session</a>
                   </div>
                </div>
            </div>

            <div class="containerb">
                <div class="containermonth">    
                        <div class="text1">
                            May 24, 2024 <br>
                            5PM - 9PM
                        </div>                
                </div>
                <div class="containerstatus">                   
                        <div class="text3">
                            Not Started
                        </div>                 
                </div>

                <div class="containerdays">                   
                        <div class="text4">
                            P: ? | A: ? | L: ? | E: ?
                       </div>                   
                </div>
                <div class="containerevaluate">
                    <div class="text2">
                        <a href= "">Check Session</a>
                   </div>
                </div>
            </div>

            <div class="containerc">
                <div class="containermonth">
                        <div class="text1">
                            May 27, 2024 <br>
                            5PM - 9PM
                        </div>
                </div>
                <div class="containerstatus">
                    
                        <div class="text3">
                            Not Started
                        </div>         
                </div>
                <div class="containerdays">                   
                        <div class="text4">
                            P: ? | A: ? | L: ? | E: ?
                        </div>                    
                </div>
                <div class="containerevaluate">
                    <div class="text2">
                        <a href= "">Check Session</a>
                   </div>
                </div>
            </div>

            <div class="containerb">
                <div class="containermonth">    
                        <div class="text1">
                            May 29, 2024 <br>
                            5PM - 9PM
                        </div>                
                </div>
                <div class="containerstatus">                   
                        <div class="text3">
                            Not Started
                        </div>                 
                </div>

                <div class="containerdays">                   
                        <div class="text4">
                            P: ? | A: ? | L: ? | E: ?
                       </div>                   
                </div>
                <div class="containerevaluate">
                    <div class="text2">
                        <a href= "">Check Session</a>
                   </div>
                </div>
            </div>

            <div class="containerc">
                <div class="containermonth">
                        <div class="text1">
                            May 31, 2024 <br>
                            5PM - 9PM
                        </div>
                </div>
                <div class="containerstatus">
                    
                        <div class="text3">
                            Not Started
                        </div>         
                </div>
                <div class="containerdays">                   
                        <div class="text4">
                            P: ? | A: ? | L: ? | E: ?
                        </div>                    
                </div>
                <div class="containerevaluate">
                    <div class="text2">
                        <a href= "">Check Session</a>
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