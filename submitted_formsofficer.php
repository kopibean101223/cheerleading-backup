<?php
session_start();
	if(!isset($_SESSION['user'])) header('Location: login.php');
	$_SESSION['table'] = 'appliform';
$user = $_SESSION['user'];	
$appliform = include ('database/appliform.php');
?>




<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="submit	ted_forms.css">
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
                                    <a href="index.php">LOG OUT</a>

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


                


			



					



			

			<div class="form-title">
                <h2>SUBMITTED FORMS</h2>
            </div>

            <div class="form-area">
                <div class="line"></div>
                <div class="submitted-forms-section">
                        <!-- List of submitted forms here -->
		
						<?php
			// Connect to the database
			$db = mysqli_connect("localhost", "root", "", "cheerleading");
			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				exit();
			}

			// Fetch data from the database
			$query = "SELECT name FROM application_form";
			$result = mysqli_query($db, $query);
			$query2 = "Select role from application_form";
			$result2 = mysqli_query($db, $query2);
			$query3 = "Select username from application_form";
			$result3 = mysqli_query($db, $query3);
			$query4 = "Select email from application_form";
			$result4 = mysqli_query($db, $query4);
			$query5 = "Select dcb from application_form";
			$result5 = mysqli_query($db, $query5);
			$query6 = "Select name from application_form";
			$result6 = mysqli_query($db, $query6);
			$query7 = "Select umakid from application_form";
			$result7 = mysqli_query($db, $query7);
			$query8 = "Select bdate from application_form";
			$result8 = mysqli_query($db, $query8);
			$query9 = "Select gender from application_form";
			$result9 = mysqli_query($db, $query9);
			$query10 = "Select course from application_form";
			$result10 = mysqli_query($db, $query10);
			$query11 = "Select year_level from application_form";
			$result11 = mysqli_query($db, $query11);
			//$query12 = "Select cor from application_form";
			//$result12 = mysqli_query($db, $query12);
			$query13 = "Select experience from application_form";
			$result13 = mysqli_query($db, $query13);
			$query14 = "Select guardian_name from application_form";
			$result14 = mysqli_query($db, $query14);
			$query15 = "Select guardian_contact from application_form";
			$result15 = mysqli_query($db, $query15);
			$query16 = "Select guardian_add from application_form";
			$result16 = mysqli_query($db, $query16);

			
			// Loop through the results and create a collapsible button for each row
			while (($row = mysqli_fetch_assoc($result))&&
			($row2 = mysqli_fetch_assoc($result2))&&
			($row3 = mysqli_fetch_assoc($result3))&&
			($row4 = mysqli_fetch_assoc($result4))&& 
			($row5 = mysqli_fetch_assoc($result5))&& 
			($row6 = mysqli_fetch_assoc($result6))&& 
			($row7 = mysqli_fetch_assoc($result7))&& 
			($row8 = mysqli_fetch_assoc($result8))&& 
			($row9 = mysqli_fetch_assoc($result9))&& 
			($row10 = mysqli_fetch_assoc($result10))&& 
			($row11 = mysqli_fetch_assoc($result11))&& 
			//($row12 = mysqli_fetch_assoc($result12))&& 
			($row13 = mysqli_fetch_assoc($result13))&& 
			($row14 = mysqli_fetch_assoc($result14))&& 
			($row15 = mysqli_fetch_assoc($result15))&&
			($row16 = mysqli_fetch_assoc($result16)))

			{
				
				echo '<button id="pogi" name="button" class="collapsible">' . $row["name"] . '</button>';
				{
				
				echo '<div class="content">';
				echo '<form action="submitted_formphp.php" method="post">';
				echo '<p>'.'ROLE: '.$row2["role"].'<br>'.'</p>';
				echo '<p>'.'USERNAME: '.$row3["username"].'<br>'.'</p>';
				echo '<p>'.'EMAIL: '.$row4["email"].'<br>'.'</p>';
				echo '<p>'.'STRENGHTS: '.$row5["dcb"].'<br>'.'</p>';	
				echo '<p>'.'NAME: '.$row6["name"].'<br>'.'</p>';

				echo '<p>'.'ID: '.$row7["umakid"].'<br>'.'</p>';

				echo '<p>'.'BIRTHDAY: '.$row8["bdate"].'<br>'.'</p>';	
				echo '<p>'.'GENDER: '.$row9["gender"].'<br>'.'</p>';	
				echo '<p>'.'COURSE: '.$row10["course"].'<br>'.'</p>';	
				echo '<p>'.'YEAR LEVEL: '.$row11["year_level"].'<br>'.'</p>';	
				//echo '<p>'.readfile($row12["cor"]).'<br>'.'</p>';	
				echo '<p>'.'EXPERIENCE: '.$row13["experience"].'<br>'.'</p>';	
				echo '<p>'.'GUARDIAN NAME: '.$row14["guardian_name"].'<br>'.'</p>';	
				echo '<p>'.'GUARDIAN CONTACT: '.$row15["guardian_contact"].'<br>'.'</p>';	
				echo '<p>'.'GUARDIAN ADDRESS: '.$row16["guardian_add"].'<br>'.'</p>';		
				}
				?> 
				<a href class="ACCEPT" data-userid="<?= $row4['email'] ?>" data-name="<?= $row6['name'] ?>" ></i>ACCEPT</a>
				<a href class="REJECT" data-userid="<?= $row4['email'] ?>" data-name="<?= $row6['name'] ?>" ></i>REJECT</a>
				


				<?php
				echo '</form>';
				echo'</div>';
			}
			?> 
				

				
               </div>
            </div>






<script>
				let textcontent;
                var coll = document.getElementsByClassName("collapsible");
                var i;
                for (i = 0; i < coll.length; i++) {
                  coll[i].addEventListener("click", function() {

                    this.classList.toggle("=");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                      content.style.display = "none";
                    } else {
                      content.style.display = "block";
                    }
                  });
                }
				</script>';
				
	











				<script src="database/jquery3.7.1.js"></script>

<script>
	function script(){

		
		this.initialize = function(){
			this.registerEvents();	
		},

		this.registerEvents = function(){
			document.addEventListener('click',function(e){

				targetElement = e.target;
				classList = targetElement.classList;

				if(classList.contains('ACCEPT')){
				e.preventDefault();		
				userId = targetElement.dataset.name;
						if(window.confirm('Are you sure to ACCEPT '+userId +'?')){
							console.log('Accept ' + userId);

						} else console.log('Cancelled Acceptance');
				}


				if(classList.contains('REJECT')){
				e.preventDefault();	
				userId = targetElement.dataset.name	;
				if(window.confirm('Are you sure to REJECT '+ userId+'?')){
							console.log('Delete ' + userId);
						$.ajax({
							method:'POST',
							data:{
								user_id: userId
							},
							url: 'database/delete-user.php',
						})

						} else console.log('Cancelled Deletion');
				
				}
			})

		}


	}
	var script = new script;
	script.initialize();
	</script>









            





















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