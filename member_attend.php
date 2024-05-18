<?php


session_start();
	if(!isset($_SESSION['user'])) header('Location: login.php');
$user = $_SESSION['user'];	
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="member_attend.css">
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












                
                
                <div class="calender">      
                  <div class="cal-container">
                    <div class="prev">&#10094;</div>
                    <div class="month">May<br>
                      <span style="font-size:18px">2024</span>
                    </div>
                    <div class="next">&#10095;</div>
                  </div>
                  
                
                <ul class="weekdays">
                  <li>Monday</li>
                  <li>Tuesday</li>
                  <li>Wednesday</li>
                  <li>Thursday</li>
                  <li>Friday</li>
                  <li>Saturday</li>
                  <li>Sunday</li>
                </ul>
                
                <ul class="days">  
                  <li>1</li>
                  <li>2</li>
                  <li>3</li>
                  <li>4</li>
                  <li>5</li>
                  <li>6</li>
                  <li>7</li>
                  <li>8</li>
                  <li>9</li>
                  <li><span class="active">10</span></li>
                  <li>11</li>
                  <li>12</li>
                  <li>13</li>
                  <li>14</li>
                  <li>15</li>
                  <li>16</li>
                  <li>17</li>
                  <li>18</li>
                  <li>19</li>
                  <li>20</li>
                  <li>21</li>
                  <li>22</li>
                  <li>23</li>
                  <li>24</li>
                  <li>25</li>
                  <li>26</li>
                  <li>27</li>
                  <li>28</li>
                  <li>29</li>
                  <li>30</li>
                  <li>31</li>
                </ul>
                
                <div class="section">
                    <div class="form-container-attendance">
                        <div class="section-title">
                            <h2>ATTENDANCE</h2>
                        </div>
                      <form class="attendance-form" action="/submit-attendance" method="post">
                        <div class="form-row-radio">
                            <h2>STATUS: *</h2>
                            <div class="radio-group">
                                <label><input type="radio" id="present" name="status" value="present">Present</label>
                                <label><input type="radio" id="absent" name="status" value="absent">Absent</label>
                            </div>
                          </div>
                        <div class="form-row">
                          <label for="date">DATE:</label>
                            <input type="date" id="date" name="date" readonly>
                        </div>
                        <div class="form-row">
                          <label for="coach">COACH:</label>
                          <input type="text" id="coach" name="coach" placeholder="CURRENT COACH" readonly>
                        </div>
                        <div class="form-row">
                          <label for="time_in">TIME IN: *</label>
                          <input type="time" id="time_in" name="time_in" required>
                        </div>
                        <div class="form-row">
                            <label for="time_in">TIME OUT: *</label>
                            <input type="time" id="time_in" name="time_in" required>
                          </div>
                        <div class="form-actions">
                          <button type="submit" class="custom-button">Submit</button>
                        </div>
                      </form>
                    </div>
                  
                  
                                      
                    <div class="form-container-feedback">
                        <div class="section-title">
                            <h2>COACH FEEDBACK</h2>
                        </div>
                      <form action="/submitted-feedback" method="get">
                        <div class="form-row">
                          <label for="coach-name">COACH NAME:</label>
                          <input type="text" id="coach-name" name="coach_name" readonly>
                        </div>
                        <div class="form-row-comment">
                          <label for="comment">COMMENT:</label>
                          <textarea id="comment" name="comment" readonly></textarea>
                        </div>
                      </form>
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
        </div>
    </body>
</html>