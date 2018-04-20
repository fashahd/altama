<?php
	$tittle 	= strtoupper($title);
	$username 	= $this->session->userdata("username");
	$sql 	= "SELECT * FROM users WHERE username = ?";
	$query	= $this->db->query($sql,array($username));
	if($query->num_rows()>0){
		$row = $query->row();
		$name = $row->fullname;
	}
?>
<!doctype html>
<html class="no-js" lang="en">
    <?=$this->layout->headersource($title)?>
    <body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
				<!-- Logo -->
				<a href="<?=base_url()?>" class="logo">
					<!-- mini logo for sidebar mini 50x50 pixels -->
					<span class="logo-mini"><b>A</b>PG</span>
					<!-- logo for regular state and mobile devices -->
					<span class="logo-lg"><b>Admin</b>Page</span>
				</a>
				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
						<span class="sr-only">Toggle navigation</span>
					</a>

					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- User Account: style can be found in dropdown.less -->
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<span class="hidden-xs"><?=$name?></span>
								</a>
								<ul class="dropdown-menu">
									<li class="user-body">
										<div class="pull-left">
											<a href="<?=base_url()?>auth/profile" class="btn btn-default btn-flat">Profile</a>
										</div>
										<div class="pull-right">
										<a href="<?=base_url()?>auth/signout" class="btn btn-default btn-flat">Sign out</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">				
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?=base_url()?>dashboard/front">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-tags"></i> <span>Profile</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?=base_url()?>catalog/categories"><i class="fa fa-circle-o"></i> Company Overview</a></li>
                                <li><a href="<?=base_url()?>catalog/subcategories"><i class="fa fa-circle-o"></i> Vision and Mission</a></li>
                                <li><a href="<?=base_url()?>catalog/products"><i class="fa fa-circle-o"></i> Award & Recognition</a></li>
                                <li><a href="<?=base_url()?>catalog/products"><i class="fa fa-circle-o"></i> Board of Commisioner</a></li>
                                <li><a href="<?=base_url()?>catalog/products"><i class="fa fa-circle-o"></i> Board of Director</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=base_url()?>dashboard/front">
                                <i class="fa fa-dashboard"></i> <span>Brands</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>page/news">
                                <i class="fa fa-calendar"></i> <span>News & Events</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-wrench"></i> <span>Service Center</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>page/socialmedia">
                                <i class="fa fa-instagram"></i> <span>Career</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>page/messages">
                                <i class="fa fa-commenting-o"></i> <span>Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
			</aside>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<?=$this->load->view($pages)?>
			</div>
		</div>
      
		<!-- modal-area-end -->
        <?=$this->layout->headersourcejs()?>
    </body>
</html>
