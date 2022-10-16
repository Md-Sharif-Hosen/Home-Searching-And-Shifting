<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
            <div class="top-header bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="top-contact list-text-white  d-table">
                                <li><a href="#"><i class="fas fa-phone-alt text-success mr-1"></i>+880 172-873-7552</a></li>
                                <li><a href="#"><i class="fas fa-envelope text-success mr-1"></i>homesearching@shifting.com</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="top-contact float-right">
                                <ul class="list-text-white d-table">
								<li><i class="fas fa-user text-success mr-1"></i>
								<?php  if(isset($_SESSION['uemail']))
								{ ?>
								<a href="logout.php">Logout</a>&nbsp;&nbsp;<?php } else { ?>
								<a href="login.php">Login</a>&nbsp;&nbsp;
								
								| </li>
								<li><i class="fas fa-user-plus text-success mr-1"></i><a href="register.php"> Register</li><?php } ?>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav secondary-nav hover-success-nav py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="images/logo/logo-3.png" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>
										
										<li class="nav-item"> <a class="nav-link" href="about.php">About</a> </li>
										
                                        <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>										
										
                                        
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category Item</a>
											<ul class="dropdown-menu">
                                            <?php  if(isset($_SESSION['uemail']))
										{ ?>
												<li class="nav-item"> <a class="nav-link" href="products.php">House</a> </li>
                                                <?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="login.php">House</a> </li>
										<?php } ?>
										
                                        <?php  if(isset($_SESSION['uemail']))
										{ ?>
												<li class="nav-item"> <a class="nav-link" href="products.php">Vehicle</a> </li>
                                                <?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="login.php">Vehicle</a> </li>
										<?php } ?>

                                                <?php  if(isset($_SESSION['uemail']))
										{ ?>
												<li class="nav-item"> <a class="nav-link" href="products.php">Workers</a> </li>	
                                                <?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="login.php">worker</a> </li>
										<?php } ?>
											</ul>
                                        </li>
									
										

                                        <li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vendors</a>
											<ul class="dropdown-menu">
                                            <?php  if(isset($_SESSION['uemail']))
										    { ?>
										
												<li class="nav-item"> <a class="nav-link" href="landlords.php">Landlords</a> </li>
                                                
                                                <?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="login.php">Landlords</a> </li>
										<?php } ?>

                                                <?php  if(isset($_SESSION['uemail']))
										{ ?>
										<li class="nav-item dropdown">
												<li class="nav-item"> <a class="nav-link" href="vehicleowners.php">Vehicle Owners</a> </li>
                                                <?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="login.php">Vehicle Owners</a> </li>
										<?php } ?>
										

                                                <?php  if(isset($_SESSION['uemail']))
										{ ?>
										<li class="nav-item dropdown">
												<li class="nav-item"> <a class="nav-link" href="workers.php">Workers</a> </li>	
                                                <?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="login.php">Workers</a> </li>
										<?php } ?>
										
											</ul>
                                        </li>
										
										

										<?php  if(isset($_SESSION['uemail']))
										{ ?>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
											<ul class="dropdown-menu">
												<li class="nav-item"> <a class="nav-link" href="profile.php">Profile</a> </li>
												<li class="nav-item"> <a class="nav-link" href="feature.php">Your Products</a> </li>
												<li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>	
											</ul>
                                        </li>
										<?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="login.php">Login/Register</a> </li>
										<?php } ?>
										
                                    </ul>
                                    
									
									<a class="btn btn-success d-none d-xl-block" style="border-radius:30px;" href="submityourproduct.php">Submit Your Item</a> 
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>