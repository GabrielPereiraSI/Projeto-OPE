<?php
	session_start();
	include_once("seguranca.php");
	include_once("conexao/conexao.php");
	seguranca_adm();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Htec Eletronics Solutions</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a><img src="../img/logo.png" alt="Htec Solutions" /></a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Administrative</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="active">
                    <a href="status.php">
                        <i class="pe-7s-note2"></i>
                        <p>Status</p>
                    </a>
                </li>
                <li>
                    <a href="residential.php">
                       <i class="pe-7s-home"></i>
                        <p>Residential</p>
                    </a>
                </li> 
                <li>
                    <a href="comercial.php">
                       <i class="pe-7s-hammer"></i>
                        <p>Comercial</p>
                    </a>
                </li>
                <li>
                    <a href="vessel.php">
                       <i class="pe-7s-map-2"></i>
                        <p>Vessel</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade our SERVICE</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Registered users</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="sair.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

	<div class="content">
            <div class="container-fluid">
                <div class="row">
					<div class="col-md-12">
		                        <div class="card">
		                            <div class="header">
		                                <h4 class="title">User Register</h4>
		                                <p class="category">Form</p>
		                            </div>
		                            <div class="content">
		                            	<form  class="form-horizontal"  method="POST" action="formDAO.php">
											<fieldset>
											<!-- Form Name -->
											<legend><h4 class="title">User Information</h4></legend>
											<!-- Text input-->
											<div class="form-group">
											  <label class="col-md-4 control-label" for="nome">Name</label>  
											  <div class="col-md-4">
											  	<input id="txt_name" name="txt_name" type="text" placeholder="client name" class="form-control input-md">		    
											  </div>
											</div>
											<!-- Text input-->		
											<!-- -->
											<div class="form-group">
												<label class="col-md-4 control-label" for="email">Email</label>
												<div class="col-md-4">
											  	<input id="txt_email" name="txt_email" type="text" placeholder="client email" class="form-control input-md">		  
											  </div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label" for="senha">Senha</label>
												<div class="col-md-4">
											  	<input id="pass" name="pass" type="password" placeholder="PassWord" class="form-control input-md">		  
											  </div>
											</div>

											<div class="form-group">
											  <label class="col-md-4 control-label" for="nome">Street name</label>  
											  <div class="col-md-4">
											  	<input id="txt_street" name="txt_street" type="text" placeholder="client street name" class="form-control input-md">		    
											  </div>
											</div>
											<div class="form-group">
											  <label class="col-md-4 control-label" for="nome">Zip Code</label>  
											  <div class="col-md-4">
											  	<input id="txt_zipcode" name="txt_zipcode" type="text" placeholder="client zip code" class="form-control input-md">		    
											  </div>
											</div>
											<div class="form-group">
											  <label class="col-md-4 control-label" for="nome">State</label>  
											  <div class="col-md-4">
											  	<input id="txt_state" name="txt_state" type="text" placeholder="client state" class="form-control input-md">		    
											  </div>
											</div>

											<div class="form-group">
											  <label class="col-md-4 control-label" for="nome">Country</label>  
											  <div class="col-md-4">
											  	<input id="txt_country" name="txt_country" type="text" placeholder="cleint country" class="form-control input-md">		    
											  </div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label" for="access_leve"> Access Control</label>
												<div class="col-md-4">
													<select id="usuarioNiveisAcessoId" class="form-control" name="usuarioNiveisAcessoId" >	                	
									                	<option value="3" selected> User </option>
									                	<option value="2">Colaborador</option>
									                	<option value="1">Admin</option>
									            	</select><br/>	            		
								            	</div>
											</div>


											<legend><h4 class="title">Boat information</h4></legend>
											<!-- Text input-->
											<div class="form-group">
											  <label class="col-md-4 control-label" for="nome">Name</label>  
											  <div class="col-md-4">
											  	<input id="txt_boat_name" name="txt_boat_name" type="text" placeholder="Boat name" class="form-control input-md">		    
											  </div>
											</div>
											<!-- Text input-->
											<div class="form-group">
											  <label class="col-md-4 control-label" for="textinput">Capitain Name</label>  
											  <div class="col-md-4">
											  	<input id="txt_boat_capita" name="txt_boat_capita" type="text" placeholder="Boat capitain" class="form-control input-md">		  
											  </div>
											</div>
											<!-- -->
											<div class="form-group">
												<label class="col-md-4 control-label" for="email">Boat Size</label>
												<div class="col-md-4">
											  	<input id="txt_boat_size" name="txt_boat_size" type="text" placeholder="size boat" class="form-control input-md">		  
											  </div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label" for="email">Port Base</label>
												<div class="col-md-4">
											  	<input id="txt_boat_port_base" name="txt_boat_port_base" type="text" placeholder="Boat Port Base" class="form-control input-md">		  
											  </div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label" for="email">Flag Origin</label>
												<div class="col-md-4">
											  	<input id="txt_boat_flag_origin" name="txt_boat_flag_origin" type="text" placeholder="Boat flag origin" class="form-control input-md">		  
											  </div>

											</div>		
											<div class="form-group">
											  <label class="col-md-4 control-label" for="nuevoImplante"></label>
											  <div class="col-md-4">
											   <input type="submit" id="btn_save" name="btn_save" value="Save New User" class="btn btn-primary"></input>
											    <a href="../dashboard.php" name="leave" id="btn_leave" name="leave" class="btn btn-danger">Cancel</a>
											  </div>
											</div>			
											</fieldset>
										</form>


		                            <div class="footer">
		                                <div class="legend">
		                                    
		                                </div>
		                                <hr>
		                                    <div class="stats">
		                                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
				    
			
			
	</div>
</body>
</html>

<!-- 

<div class="form-group">
				<label class="col-md-2 control-label" for="senha">Senha</label>
				<div class="col-md-2">
			  	<input id="pass" name="pass" type="password" placeholder="PassWord" class="form-control input-md">		  
			  </div>

-->