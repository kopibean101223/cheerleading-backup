<?php


session_start();
	if(!isset($_SESSION['user'])) header('Location: login.php');
$user = $_SESSION['user'];	
?>









<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="home-account.css">
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
                            <div class="ribbontext"><a href= "home-account.html">HOME</a></div>
                        </div>
                        <div class="ribboncontainer3">
                            <div class="ribbontext"><a href= "aboutus-account.html">ABOUT US</a></div>
                        </div>
                        <div class="ribboncontainer3">
                            <div class="ribbontext"><a href= "gallery-account.html">GALLERY</a></div>
                        </div>
                        <div class="ribboncontainer3">
                            <div class="ribbontext"><a href= "schedule-account.html">SCHEDULE</a></div>
                        </div>
                        <div class="ribboncontainer3">
                            <div class="ribbontext"><a href= "news-account.html">NEWS</a></div>
                        </div>
                        <div class="ribboncontainer3">
                            <div class="ribbontext"><a href= "tryoutalt-account.html">TRYOUTS/FAQ</a></div>
                        </div>
                        <div class="ribboncontainer3">
                            <div class="ribbontext"><a href= "contactusalt-account.html">CONTACT US</a></div>
                        </div>              
                        <div class="ribboncontainer3">
                            <div class="dropdown">
                                <button class="dropbtn"><a href="?"><?php echo $user['USERNAME'] ?></a> 
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="logout.php">LOG OUT</a>
                                    <a href="member_attend.html">ATTENDANCE</a>
                                    <a href="auditlog.html">AUDIT LOGS</a>
                                    <a href="appform.html">APPLICATION FORMS</a>
                                    <a href="attendance-month.html">RECORDS</a>
                                    <a href="coach_input.html">EVALUATION</a>
                                    <a href="submitted_forms.html">SUBMISSIONS</a>
                                </div>
                            </div> 
                        </div>
                </div>
            </div>
    
            <img class="logo1" src="images/logo1.png" alt="logo1-umak"> 
                    <img class="logo2" src="images/logo2.png" alt="logo2-herons">  
            </div>
            
            <div class="picture"> 
                <img class="logo3" src="images/logo2.png">
                <div class="welc">WELCOME HERONS!</div>
                <div class="welc1">Soar high with University of Makati Cheerleading squad! Come and fly with us, what are you waiting for join now!</div>
                <div class="join"><div class="join1"><a href= "signup.html">JOIN US</a></div></div>
            </div>
            <div class="contain">
            <div class="calendar">
                <div class="calendar1">
                    <div class="arrow"></div>
                    <div class="month">JANUARY </div>
                    <div class="arrow"></div>
                </div>
                <div class="week">
                    <div class="sun">Sunday </div> 
                    <div class="mon">Monday</div> 
                    <div class="tue">Tuesday</div> 
                    <div class="wed">Wednesday</div> 
                    <div class="thurs">Thursday</div> 
                    <div class="fri">Friday</div> 
                    <div class="sat">Saturday</div> 
                </div>
                <div class="days">
                    <div class="s"></div>
                    <div class="m">1</div>
                    <div class="t">2</div>
                    <div class="w">3</div>
                    <div class="th">4</div>
                    <div class="f">5</div>
                    <div class="st">6</div>
                </div>
                <div class="days">
                    <div class="s">7</div>
                    <div class="m">8</div>
                    <div class="t">9</div>
                    <div class="w">10</div>
                    <div class="th">11</div>
                    <div class="f">12</div>
                    <div class="st">13</div>
                </div>
                <div class="days">
                    <div class="s">14</div>
                    <div class="m">15</div>
                    <div class="t">16</div>
                    <div class="w">17</div>
                    <div class="th">18</div>
                    <div class="f">19</div>
                    <div class="st">20</div>
                </div>
                <div class="days">
                    <div class="s">21</div>
                    <div class="m">22</div>
                    <div class="t">23</div>
                    <div class="w">24</div>
                    <div class="th">25</div>
                    <div class="f">26</div>
                    <div class="st">27</div>
                </div>
                <div class="days">
                    <div class="s">28</div>
                    <div class="m">29</div>
                    <div class="t">30</div>
                    <div class="w">31</div>
                    <div class="th"></div>
                    <div class="f"></div>
                    <div class="st"></div>
                </div>
                <div class="days">
                    <div class="s"></div>
                    <div class="m"></div>
                    <div class="t"></div>
                    <div class="w"></div>
                    <div class="th"></div>
                    <div class="f"></div>
                    <div class="st"></div>
                </div>
                </div>
            
            <div class="events">
                <div class="events1">
                    <div class="events2">Upcoming Events</div>
                </div>
                <div class="dates">
                    <div class="date"> 
                        <div class="date1">1 <br>JAN</div>
                    </div>
                    <div class="date2">
                        <div class="date3">NEW YEAR</div>
                        <div class="date4">New Year with more spirited performances, dazzling routines, and triumphant moments ahead!</div>
                    </div>
                </div>
                <div class="dates">
                    <div class="date"> 
                        <div class="date1">TBA</div>
                    </div>
                    <div class="date2">
                        <div class="date3">To Be Announced.</div>
                        <div class="date4">Exciting cheerleading events and performances coming soon – stay tuned for updates from the UMAK Herons!</div>
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

