<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Creative Responsive Bootstrap Multi-Purpose HTML Template">
<meta name="keywords" content="H2O, Creative, Agency, Portfolio, Freelancer, Shop, Store,Bootstrap, HTML, Template, One page">
<meta name="author" content="Vadzim Liashkevich">

<!-- SITE TITLE -->
<title>Dental clinic</title>

<!-- =========================
      FAV AND TOUCH ICONS  
============================== -->
<link rel="shortcut icon" href="images/dentalclinic.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<!-- =========================
     STYLESHEETS   
============================== -->

<link rel="stylesheet" type="text/css" href="css/master.css" />
	<style >
		table, th, td {
    border: 1px solid black;
}
	</style>
</head>

<body data-spy="scroll" data-target=".navbar">

<!-- =========================
     TOP BAR
============================== -->
<div class="top-bar" id="top-bar">
	<div class="container">
		<div class="row"> 
			
			<!-- TOP BAR LEFT -->
			<!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="top-bar-adress"> <i class="flaticon-navigation-arrow"></i> 2nd Floor, 3rd Cross Rd, Stage I, Kengeri Satellite Town,, Stage I, Kengeri Satellite Town, Bengaluru, Karnataka 560060</div>
			</div>-->
			
			<!-- TOP BAR RIGHT -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
			</div>
		</div>
	</div>
</div>
<!-- =========================
     END TOP BAR   
============================== --> 

<!-- =========================
     HEADER
============================== -->
<div class="header" id="header">
	<div class="container">
		<div class="row"> 
			
			<!-- HEADER LOGO -->
			<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
				<div class="header-logo"> <a href="#"><img src="images/dentalclinic.png" alt="" />
					<a href="index.html"><span class="bold600 color-child-6">DENTAL</span>
					<span class="color-child-5">CLINIC</span></a>
					</a> </div>
			</div>
			
			<!-- HEADER BUTTONS -->
			<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
				<div class="header-button"> <a href="#bookform1" class="">
					<span class=""></span>
					</a> </div>
				<div class="header-phone"> <i class=""></i>  </div>
			</div>
		</div>
	</div>
</div>
<!-- =========================
     END HEADER
============================== --> 

<!-- =========================
     MAIN MENU
============================== -->
<div id="smartposition"></div>
<div class="top-menu" id="top-menu">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="mobile-bar-cont">
					<div class="top-menu-logo"> <a href="#"><img src="images/dentalclinic.png" alt="" />
						<span class="bold600 color-child-6">DENTAL</span>
						<span class="color-child-5">CLINIC</span>
						</a> </div>
					<div class="mobile-bar">
						<div class="show-menu" id="show-menu"> <i class="fa fa-bars"></i> </div>
					</div>
				</div>
				<ul class="nav navbar-nav">
					<li ><a href="index.php">HOME</a></li>
					<li ><a href="logout.php">LOGOUT</a></li>
                 </ul>
			</div>
		</div>
	</div>
</div>


<div class="tipsfaq">
<div class="serv">
	<ul id="isotope-filter">
		<li><a class="active" data-filter="*">TABLES</a></li>
		<li><a data-filter=".ap">LOGIN DETAILS</a></li>
		<li><a data-filter=".co">PATIENTS</a></li>
		<!-- <li><a data-filter=".other">Other Services</a></li> -->
		<!-- <li><a data-filter=".rehabillitation">Rehabillitation services</a></li> -->
	</ul>
	<div class="container">
		<div class="row">
			<div class="serv-items" id="isotope-items">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 serv-item isotope-item ap">

				
						
                 	<table  class="table table-hover">
     		            <tr>
     		            	<thead>
							 <th>ID</th>
   		                     <th>Name</th>
							<th>Emaik</th>
		                    
		                     <th>action</th>
		                     </thead>

	                     </tr> 
	                        <?php
                                 include "connect.php";
                                $stmt = $conn->prepare("SELECT * FROM user");
                                    $stmt->execute();              
                                    $res = $stmt->rowcount();
                                        if ($res){
                                            while($data = $stmt->fetchobject()){
     	                                      ?>
     	<tr>
     		<tbody>
     		<td><?= $data->id ?>
     		</td>
     		<td><?= $data->name ?>
     		</td>
     		<td><?= $data->email ?>
     		</td>
     		
     		<td><a href="deletedoc.php?ID=<?= $data->id?>" class="btn- delete"><i class="fa fa-trash"></i></a></td>
     		</tbody>
     	</tr>
     	<?php }
     }
    ?>
				</table>
					
				
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 serv-item isotope-item co">

				
						
     	<table class="table table-hover">
     		<tr>
     			<thead>
		<th> PID</th>
		<th> Doctor Name</th>
		<th>Name </th>
		<th>Phone </th>
		<th> Address</th>
		<th>Patient Email</th>
		<th>Card Holder Name </th>
		
		<th> Card Number</th>

		
		<th>action</th>
	</thead>
	</tr> 
	      <?php
                         
                                $stmt = $conn->prepare("SELECT * FROM client");
                                    $stmt->execute();              
                                    $res = $stmt->rowcount();
                                        if ($res){
                                            while($data = $stmt->fetchobject()){
     	                                      ?>
     	<tr>
     		<tbody>
     		<td><?= $data->client_id ?>
     		</td>
     		<td><?= $data->doctor ?>
     		</td>
     		<td><?= $data->name ?>
     		</td>
			 <td><?= $data->phone ?>
     		</td>
			 <td><?= $data->address ?>
     		</td>
			 <td><?= $data->email ?>
     		</td>
			 <td><?= $data->card ?>
     		</td>
			 <td><?= $data->cardn ?>
     		</td>
     		
			 
     		
     		
     		</td>
     		</td>

     		
     		<td><a href="deletecon.php?ID=<?= $data->client_id?>" class="btn- delete"><i class="fa fa-trash"></i></a></td>
     	</tbody>
     	</tr>
     	<?php }
     }
    ?>
				</table>
					
				
</div>
</div>
</div>
</div>
</div>
</div>



<
<!-- =========================
    END COLOR SWITHER
============================== -->
<div class="totop" id="totop"> <i class="fa fa-angle-up"></i> </div>

<link rel="stylesheet" type="text/css" href="css/responsive.css" />

<!-- =========================
     SCRIPTS   
============================== --> 
<!-- JQUERY --> 
<script src="js/jquery-2.2.0.min.js"></script> 

<!-- BOOTSTRAP --> 
<script src="js/bootstrap.min.js"></script> 

<!-- SLIDER PRO --> 
<script src="js/jquery.sliderPro.min.js"></script> 

<!-- LIGHTBOX --> 
<script src="js/jquery.fancybox.pack.js"></script> 

<!-- CAROUSEL --> 
<script src="js/owl.carousel.js"></script> 

<!-- STAR RATING --> 
<script src="js/jquery.barrating.min.js"></script> 

<!-- ISOTOPE FILTER --> 
<script src="js/isotope.pkgd.min.js"></script> 

<!-- SCROLLSPY --> 
<script src="js/scrollspy.js"></script> 

<!-- DATEPICKER --> 
<script src="js/moment.js"></script> 
<script src="js/bootstrap-datetimepicker.min.js"></script> 

<!-- JQUERY FORM --> 
<script src='js/jquery.form.js'></script> 

<!-- FORM VALIDATOR --> 
<script src='js/jquery.form-validator.js'></script> 

<!-- SELECT STYLING --> 
<script src='js/jquery.selectBox.js'></script> 

<!-- MATCHHEIGHT --> 
<script src='js/jquery.matchHeight.js'></script> 

<!-- IMAGES LOADED -->
<script src='js/imagesloaded.pkgd.min.js'></script>

<!-- CUSTOM SCRIPT --> 
<script src="js/theme.js"></script> 

<!-- GOOGLE MAPS --> 
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC1N87a_NHjocaepKKcovPAYTMUkJBr9pQ&amp;language=en&amp;sensor=true"></script> 

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]--> 

</body>
</html>