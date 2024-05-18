<?php


session_start();
	if(!isset($_SESSION['user'])) header('Location: login.php');
$user = $_SESSION['user'];	
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="coach_input.css">
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

            <div class="containera">
                <form class="containerb" action="" method="post">
                    <div class="containercoach">
                        <div class="text">TRAINING INFO</div>
                        <div class="line"></div>
                        <div class="containerd">
                            <div class="containere">
                            <div class="text1">
                                DATE:<input type="date" id="date" name="date" required> <br>
                            </div>
                            </div>

                            <div class="containere">
                                <div class="text1">
                                    COACH:<input type="text" id="coach" name="coach" placeholder="CURRENT COACH" required> <br>
                                </div>
                                </div>
                                <div class="containere">
                                    <div class="text1">
                                        POINTS:
                                    
                                        <input list="PointList" placeholder="INPUT POINTS" required>
                                        <datalist id="PointList">
                                            <option value="1 Point">
                                        </datalist>
                                </div>
                            </div>

                            <div class="containere">
                                <div class="text1">
                                    DURATION:
                                
                                    <input list="HourList" placeholder="INPUT HOURS" required>
                                    <datalist id="HourList">
                                        <option value="1 Hour">
                                        <option value="2 Hours">
                                        <option value="3 Hours">
                                        <option value="4 Hours">
                                    </datalist>
                            </div>
                        </div>

                        <div class="containerh">
                            <button type="submit">Post</button>
                        </div>

                                

                        </div>
                    </div>
                </form>
















                <div class="containerc">
                    <form class="containernotify" action=""  method="post">
                        <div class="text">NOTIFY A MEMBER</div>
                        <div class="line"></div>
                        <div class="containerd">
                        <div class="containerf">
                            <div class="text1">
                                MEMBER:
                            
                                <input list="NotifyMemberList" placeholder="MEMBER NAME" required>
                                <datalist id="NotifyMemberList">
                                    <option value="Kyle Angelo">Kyle Angelo</option>
                                        <option value="Rhose Anne">Rhose Anne</option>
                                        <option value="Lwayne John">Lwayne John</option>
                                        <option value="Mary Grace">Mary Grace</option>
                                        <option value="Jenrick Villaros">Jenrick Villaros</option>
                                        <option value="John Rey Lamar">John Rey Lamar</option>
                                        <option value="Jasmine Mae">Jasmine Mae</option>
                                        <option value="Maurene Kaye">Maurene Kaye</option>
                                        <option value="Scarlet Joy">Scarlet Joy</option>
                                        <option value="Sabino Delgado">Sabino Delgado</option>
                                        <option value="Jhoe When Qui">Jhoe When Qui</option>
                                        <option value="Jericho Comla">Jericho Comla</option>
                                        <option value="Patricia Nicole">Patricia Nicole</option>
                                        <option value="Robelyn Madr">Robelyn Madr</option>
                                        <option value="Jenneth Laude">Jenneth Laude</option>
                                        <option value="Marcuss Bennedict">Marcuss Bennedict</option>
                                        <option value="James Lee Rosales">James Lee Rosales</option>
                                        <option value="Rajesh Guiller">Rajesh Guiller</option>
                                        <option value="Robin Christopher">Robin Christopher</option>
                                        <option value="Eugelien Mala">Eugelien Mala</option>
                                        <option value="Jamile Domingo">Jamile Domingo</option>
                                        <option value="Ranier Guillermo">Ranier Guillermo</option>                                                                                                                   
                                </datalist>           
                        </div>
                    </div>
                    <div class="containerf">
                        
                        <div class="text2">
                            MESSAGE:
                            <div class="containerg">
                            <textarea id="MESSAGE" name="MESSAGE" required></textarea>
                        </div>
                        </div>
                        
                </div>
                <div class="containerh">
                    <button type="submit">Submit</button>
                </div>
                
                </div>
            </form>








                    <form class="containerfeedback" action=" " method="post">
                        <div class="text">COACH FEEDBACK</div>
                        <div class="line"></div>
                        <div class="containerd">
                        <div class="containerf">
                            <div class="text1">
                                MEMBER:
                            
                                <input list="FeedbackMemberList" placeholder="MEMBER NAME" required>
                                <datalist id="FeedbackMemberList">
                                    <option value="Kyle Angelo">Kyle Angelo</option>
                                        <option value="Rhose Anne">Rhose Anne</option>
                                        <option value="Lwayne John">Lwayne John</option>
                                        <option value="Mary Grace">Mary Grace</option>
                                        <option value="Jenrick Villaros">Jenrick Villaros</option>
                                        <option value="John Rey Lamar">John Rey Lamar</option>
                                        <option value="Jasmine Mae">Jasmine Mae</option>
                                        <option value="Maurene Kaye">Maurene Kaye</option>
                                        <option value="Scarlet Joy">Scarlet Joy</option>
                                        <option value="Sabino Delgado">Sabino Delgado</option>
                                        <option value="Jhoe When Qui">Jhoe When Qui</option>
                                        <option value="Jericho Comla">Jericho Comla</option>
                                        <option value="Patricia Nicole">Patricia Nicole</option>
                                        <option value="Robelyn Madr">Robelyn Madr</option>
                                        <option value="Jenneth Laude">Jenneth Laude</option>
                                        <option value="Marcuss Bennedict">Marcuss Bennedict</option>
                                        <option value="James Lee Rosales">James Lee Rosales</option>
                                        <option value="Rajesh Guiller">Rajesh Guiller</option>
                                        <option value="Robin Christopher">Robin Christopher</option>
                                        <option value="Eugelien Mala">Eugelien Mala</option>
                                        <option value="Jamile Domingo">Jamile Domingo</option>
                                        <option value="Ranier Guillermo">Ranier Guillermo</option>

                                                                                                                        
                                </datalist>
                        </div>
                    </div>



                    <div class="containerf">
                        
                        <div class="text2">
                            COMMENT:
                            <div class="containerg">
                            <textarea id="COMMENT" name="COMMENT" required></textarea>
                        </div>
                        </div>
                        
                </div>
                <div class="containerh">
                    <button type="submit">Submit</button>
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
      
  
          <script src="coach_input.js"></script>
  </body>
  </html>