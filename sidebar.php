<style>
		i{
			color:grey;
		}
		
	 </style>

     <?php
     //session_start();
      include_once 'connect.php'; 
$Name=$_SESSION['username'];
$query=mysqli_query($conn,"SELECT * FROM clients WHERE Name='$Name'");
$result=mysqli_fetch_array($query);

     ?>

		<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="Name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $Name;?></div>
                    <div class="Email"><?php echo $Email;?></div>
                    
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    

                    <li>
                        <a href="add_property.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Add Property</span>
                        </a>
                    </li>

                     <li>
                        <a href="view_property_image.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Add Property Images</span>
                        </a>
                    </li>


                    <li>
                        <a href="view_property.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>View Property</span>
                        </a>
                    </li>
								               
                    
                    
                    
                                  <ul class="ml-menu">
                          
                            <li>
                                <a href="logout.php">Log out</a>
                            </li>
                           
                        </ul>
                    </li>
             
                </ul>
            </div>
            <!-- #Menu -->
            
        </aside>