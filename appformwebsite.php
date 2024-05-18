<?php
session_start();
	if(!isset($_SESSION['user'])) header('Location: login.php');
$user = $_SESSION['user'];	
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="appform.css">
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
                                <button class="dropbtn"><a href="?">ACCOUNT</a> 
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="index.html">LOG OUT</a>
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


        <!-- Application form -->
            <div class="form-title">
                <h2>APPLICATION FORM</h2>
            </div>
            <div class="form-area">
                
                <div class="line"></div>
                <div class="form-container">
                    <form class="application-form" method="post" action="appform1.php">
                    <!--Style input-->
                        <div class="form-group-radio">
                            <h2>What's your jam? <B>Dancing</B> or <B>Cheerleading?</B><h2>
                            <div class="radio-group">
                                <label><input type="radio" id="dancing" name="style" value="dancing"required>Dancing</label>
                                <label><input type="radio" id="cheerleading" name="style" value="cheerleading"required>Cheerleading</label>
                                <label><input type="radio" id="both" name="style" value="both"required>Both</label>
                            </div>
                        </div>
                    <!-- Name input -->
                        <div class="form-group">
                            <label>Full Name*</label>
                            <input type="text" id="name" name="name" placeholder="EX. MC ALESTER C. SANCHEZ" required>
                        </div>
                    <!-- UMak ID and Birthdate inputs -->
                        <div class="form-group double">
                            <div class="id-group">
                                <label>UMak ID*</label>
                                <input type="text" id="umakid" name="umakid" placeholder="EX. K11831511" required>
                            </div>
                            <div class="bdate-group">
                                <label>Birthdate</label>
                                <input type="date" id="bdate" name="bdate"required>
                            </div>
                        </div>
                    <!-- Gender radio buttons -->
                        <div class="form-group-radio">
                            <h2>Gender</h2>
                            <div class="radio-group">
                                <label><input type="radio" id="male" name="gender" value="male"required>Male</label>
                                <label><input type="radio" id="female" name="gender" value="female"required>Female</label>
                            </div>
                        </div>
                    <!--Course input-->
                        <div class="form-group">
                            <label>College and Course / Program*</label>
                            <input type="text" id="course" name="course" placeholder="EX. CCIS - BS IN INFORMATION TECHNOLOGY" required>
                        </div>
                    <!--Year level dropmenu-->
                        <div class="form-group year">
                            <label for="year" >Year Level</label>
                                <select name= "year" required>
                                    <option name= "year"value="" selected="selected">- - - - - - - -</option>
                                    <option name= "year"value="Grade 11">Grade 11</option>
                                    <option name= "year"value="Grade 12">Grade 12</option>
                                    <option name= "year"value="1st Year">1st Year</option>
                                    <option name= "year"value="2nd Year">2nd Year</option>
                                    <option name= "year"value="3rd Year">3rd Year</option>
                                    <option name= "year"value="4th Year" >4th Year</option>
                                </select>
                        </div>
                    <!--COR Upload-->
                        <div class="form-group">
                            <label for="cor">Please upload your <B>most recent</B> COR*</label>
                            <input type="file" id="cor" name="cor" required>
                        </div>
                    <!-- Experience textarea -->
                        <div class="form-group">
                            <label for="experience">Any Experiences Related to Cheerleading?</label>
                            <textarea id="experience" name="experience" placeholder="Your experience"required></textarea>
                        </div>
                    <!--Emergency Contact-->
                        <div class="form-group">
                            <fieldset>
                                <legend>In Case of Emergency Contact Information</legend>
                                <label>Guardian's Full Name</label>
                                <input type="text" id="guardian" name="guardian" placeholder="EX. MC ALESTER C. SANCHEZ"required>
                                <label>Guardian's Contact Number</label>
                                <input type="text" id="g_contact" name="g_contact" placeholder="EX. 09123456789"required>
                                <label>Complete Address</label>
                                <textarea id="address" name="address" placeholder="EX. 8751 Paseo de Roxas Street, San Miguel Village, Barangay Poblacion, Makati City 1234"required></textarea>
                            </fieldset>
                        </div>
                        <!-- Submit button -->
								<input type="hidden" name="role" value="<?php echo $_POST['role']; ?>">
								<input type="hidden" name="username" value="<?php echo $_POST['username']; ?> ">
								<input type="hidden" name="password" value="<?php echo $_POST['password']; ?> ">
								<input type="hidden" name="email" value="<?php echo $_POST['email'];  ?>">
                        <button type="submit" class="custom-button">Submit Form</button>
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
