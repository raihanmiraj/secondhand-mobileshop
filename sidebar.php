<?php $burl = ""; ?>


<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?php // echo $burl; ?>index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                          
                            <a class="nav-link" href="<?php // echo $burl; ?>buyadevice.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                              Buy A Device
                            </a>

                            <a class="nav-link" href="<?php // echo $burl; ?>selladevice.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                              Sell A Device
                            </a>
                           

                  
                            
                 
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="<?php // echo $burl; ?>solddevice.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Sold Device
                           
                            </a>
                            <a class="nav-link" href="<?php // echo $burl ; ?>boughtdevice.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Bought Device
                            </a>
                            <a class="nav-link" href="<?php // echo $burl ; ?>detailsbydate.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Analysis By Date
                            </a>
                            <a class="nav-link" href="<?php // echo $burl ; ?>moneypartner.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Money
                            </a>
                            <a class="nav-link" href="<?php // echo $burl ; ?>users.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Users
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['u_name']; ?>
                    </div>
                </nav>
            </div>