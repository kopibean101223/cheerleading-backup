
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UMAK Herons Cheerleading Team - Sign In</title>
        <link rel="stylesheet" type="text/css" href="signup.css">
    </head>
        <body>
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
                            <div class="dropdown">
                                <button class="dropbtn"><a href="signup.php">ACCOUNT</a> 
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="login.php">LOG IN</a>
                                </div>
                            </div> 
                        </div>
                </div>
            </div>
    
            <img class="logo1" src="images/logo1.png" alt="logo1-umak"> 
                    <img class="logo2" src="images/logo2.png" alt="logo2-herons">  
            </div>




                <!--Sign In-->
                    <section class="sign-in-area">
                        <div class="sign-in-container">
                            <h2>SIGN UP</h2>
                            <img src="images/newlogo_transparent.png" alt="Team Logo" class="team-logo">
                        </div>
                    <!--Registration form-->
                        <div class="registration-container">
                            <h2>Select Your Role</h2>
                            <form class="registration-form" action="appformwebsite.php" method="post">
                            <!--Role radio buttons-->
                                <div class="role-selection">
                                    <label><input type="radio" value ="Applicant"id="applicant" name="role" >New Applicant</label>
                                    <label><input type="radio" value="Coach"id="coach" name="role"required>New Coach</label>
                                </div>
                            <!--Username, Password, Email inputs-->
                                <input type="text" id="username" name="username" placeholder="Enter Username"required>
                                <input type="password" id="password" name="password"  placeholder="Enter Password"required>
                                <input type="email" id="email" name="email"  placeholder="Enter Email"required>
                                <button type="submit" class="appform" href="appformwebsite.php">SIGN IN</button>
                            </form>
                        </div>
                    </section>





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
