<?php require_once('Connections/cities.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_getCiity = "-1";
if (isset($_GET['city'])) {
  $colname_getCiity = $_GET['city'];
}
$query_getCiity = sprintf("SELECT * FROM city WHERE city = %s", GetSQLValueString($colname_getCiity, "text"));
$getCiity = mysqli_query($cities, $query_getCiity) or die(mysql_error());
$row_getCiity = mysqli_fetch_assoc($cities, $getCiity);
$totalRows_getCiity = mysqli_num_rows($getCiity);
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title><?php $city = $row_getCiity['city'];  echo str_replace('-', ' ', $city); ?> Pool Service and Repairs</title>
	<meta name="description" itemprop="description" content="<?php $city = $row_getCiity['city'];  echo str_replace('-', ' ', $city); ?> pool service. We offer pool service in <?php $city = $row_getCiity['city'];  echo str_replace('-', ' ', $city); ?>, weekly pool clean ups, pool maintenance as well as commercial pool service">
	<meta name="keywords" itemprop="keywords" content="<?php $city = $row_getCiity['city'];  echo str_replace('-', ' ', $city); ?>, Swimming Pool Cleaning, Commercial, Residential, Maintenance, Maintenance, Weekly, Houses, Homes, Acid Washing, Green Cleaning, Pools, Water, Apartments, Hotels, Pubic, Backyard, Private, Concrete, Chlorine, Sanitized, Fiberglass,Natural, Pollution, Environmentally Friendly, clean, porcelain, tile cleaning," />

	<meta name="author" content="David" >
<style type="text/css">
.cities{
	text-align:center;
}
.cities ul{
	list-style-type:none;
	margin:0;
	padding:0;
	}
.cities li{
	float:left;
	padding:0px 5px;
}
</style>
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="../img/favicon.ico">
	<link rel="apple-touch-icon" href="../img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/apple-touch-icon-114x114.png">

	<!-- CSS Template
	================================================== -->
	<link rel="stylesheet" href="../css/template-1.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
</head>
<body>

<div class="loading"><div class="over-pattern diagonal opacity20"></div><span>Loading...</span></div>

	<!-- Start - Used on #to-top click -->
	<div id="start"></div>

	<div id="top">
		<div class="container">
			<div class="four columns clearfix">
				<div class="logo"><a href="../"><img src="../img/style1/logo-stone.png" alt="Stone" width="143" height="40" /></a></div>
				<!-- Mobile Menu -->
				<nav id="mobile-top-menu">
					<a href="#" class="mobile-nav-button"><i class="fa fa-bars"></i></a>
					<div id="menu-list"><div id="menu-content"></div></div>
				</nav>
			</div>

			<div class="twelve columns">
				<!-- Main Menu -->
				<?php include("include/topnav.php");?>
	<!-- Don't remove #top-space! -->
	<div id="top-space"></div>
	<!-- Don't remove #top-space! -->
	
	<!-- #Project Page -->
	<section id="project" class="page nopaddingbottom">
		<!-- #Breadcrumbs -->
		<div id="breadcrumbs">
			<div class="container">
				<div class="sixteen columns">
					<p><a href="https://sacpoolpros.com/service.php" title="pool Service" >Pool Service</a> <i class="fa fa-angle-double-right"></i> <span>in <?php $city = $row_getCiity['city'];  echo str_replace('-', ' ', $city); ?></span></p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="sixteen columns">
					<h1 class="super-title"><span class="color1">#</span><?php $city = $row_getCiity['city'];  echo str_replace('-', ' ', $city); ?> Pool Service</h1>
				</div>
			</div>

			<div class="row sidebar">
				<!-- Client Informations -->
				<div class="four columns">
					<div class="row">
						<h3 class="sidebar-title">Pool Cleaning Service</h3>
						<p>Pool Maintenance Service</p>
					</div>
					<div class="row">
						<h3 class="sidebar-title">Category</h3>
						<p>Service</p>
					</div>
					<div class="row">
						<h3 class="sidebar-title">What we do</h3>
						<ul class="list">
                        	<li><i class="fa fa-angle-right"></i>Pool Draining</li>
							<li><i class="fa fa-angle-right"></i>Sand Blast</li>
							<li><i class="fa fa-angle-right"></i>Grout Cleaning</li>
							<li><i class="fa fa-angle-right"></i>Buildup Removal</li>
							<li><i class="fa fa-angle-right"></i>Tile Inspection</li>
						</ul>
					</div>
					<div class="row">
						<!-- <h3 class="sidebar-title">View Work</h3>
						-->
					</div>
				</div>

				<!-- Owl Carousel Photo Slider -->			
				<div class="twelve columns">
					<div id="owl-slider" class="owl-carousel">
						<div class="item"><figure><img src="..//img/portfolio/item1-1.jpg" alt="Portfolio Photo 1.1"></figure></div>
						<div class="item"><figure><img src="../img/portfolio/item1-2.jpg" alt="Portfolio Photo 1.2"></figure></div>
						<div class="item"><figure><img src="../img/portfolio/pool-service1.jpg" alt="Portfolio Photo 1.3"></figure></div>
						<div class="item"><figure><img src="../img/portfolio/item5-1.jpg" alt="Portfolio Photo 1.4"></figure></div>
						<div class="item"><figure><img src="../img/portfolio/pool-repair.jpg" alt="Portfolio Photo 1.5"></figure></div>
						<div class="item"><figure><img src="../img/portfolio/pool-service.jpg" alt="Portfolio Photo 1.6"></figure></div>
					</div>
				</div>
			</div>

			<!-- Project Informations -->
			<div class="row">
				<div class="sixteen columns">
					<h2 class="title">Sac Pool Pros offers quality weekly <a href="/" title="pool service in <?php $city = $row_getCiity['city'];  echo str_replace('-', ' ', $city); ?>">pool service in <?php $city = $row_getCiity['city'];  echo str_replace('-', ' ', $city); ?></a></h2>
					 

<p><strong>Gold Package "Full Pool Service"</strong></p>
<p>
With this package all you need to do is enjoy your swimming pool! </p>
<hr>
<p>
1. Monthly filter cleans as needed <br>
<br>2.Each weekly visit turn on your equipment to ensure everything is working and no leaks if a problem occurs we will notify you with cost to fix right away 
<br>3. Netting all debris out of pool
<br>4. Cleaning Pump/Skimmer & Cleaner baskets/bags
<br>5.Brush entire swimming pool
<br>6.Check and adjust chemicals all chemicals are provided including algae treatment if needed
<br>7.Yearly spring tune up before your swim season starts we add conditioner to your water break down equipment lube up all o-rings and change any bad ones to ensure maximum performance 
<br>8. Vacuum out pool if needed ie. dirt / fine sand on bottom of pool we can vacuum and discharge for a spotless swimming pool</p>

<p><strong>Silver Package "Chem/Filter/Brush"</strong></p>
<hr>
<p>
1. Check over and ensure all equipment is functioning properly with no leaks
<br>2.Check and maintain filters clean on a monthly basis 
<br>3.Clean out baskets/skimmer/cleaner bag
<br>4.brush steps and swim outs on swimming pool
<br>5.light skim of debris on top of pool
<br>6.check and balance all chemicals "Algaecide not included"</p> 

<p><strong>Bronze Package  "Chemical Only"</strong></p>
<hr> 
<p>
1. Check equipment to ensure working properly with no leaks
<br>2.Balance & check chemicals 
<br>3. Clean out pump & skimmer basket & cleaner bag
<br>
this is the package for the do it your selfers who just want to have crystal clear water all year long but don't mind cleaning out there pool them selves </p>

<p><strong>Additional Services Offered </strong></p>
<hr>
<p><strong>Green Pool Cleans</strong><br>
1.Green Cleans sac pool pros can have your green swam looking crystal clear in 48 hours we will drain your swimming pool and remove all debris from the bottom & pressure wash all the algae on the wall and bottom then we will do a chlorine wash of the swimming pool walls,steps & bottom to ensure all algae is dead and gone then after this is done we will begin to fill your swimming pool and once full we will do a start up and balance all chemicals get equipment running and clean your swimming pool filters to ensure maximum pool performance! <br><br>
<strong>Algae Pool Cleans</strong><br>
2.Algae clean as most pool owners know black algae or any algae in general can be a complete nightmare let the pros take care of it for you we have can eliminate and treat any algae in your swimming pool no problem <br><br>
<strong>Acid Pool wash</strong><br>
3. Acid wash we can acid wash your pool due to plaster discoloration or scale build up no problems<br><br> 
<strong>Other services</strong><br>
4. One time pool cleans, out of town pool cleans <br>

5. Sand Filter Sand Replacement recommend every 3 years <br>

6. D.E Filter break down and D.E replacement recommend once a year<br>

7. cartridge pool filter cleaning <br>

we offer many more services give us a call today for any questions or for an estimate!</p>

<br>
<h3>For a free visit in <?php $city = $row_getCiity['city'];  echo str_replace('-', ' ', $city); ?> to take a look at your pool please contact<br>
 
David Randolph<br>


(530)312-2614</h3>
				</div>
			</div>
		</div>
		
		<!-- Prev or Next Project
		<div class="buttons-block">
			<div class="container">
				<div class="sixteen columns">
					<a href="#" class="btn small disabled"><i class="fa fa-angle-left"></i> Previous Project</a>
					<a href="#" class="btn small color2">Previous Project <i class="fa fa-angle-right right"></i></a>
				</div>
			</div>
		</div> -->		
	</section>



	<!-- #Footer -->
	
	<?php include("include/footer.php")?><!-- /#copyright -->

	<!-- Back to Top -->
	<a id="to-top" class="menu" href="#start"><i class="fa fa-angle-up"></i></a>
	
	<!-- jQuery Library
	================================================== -->
	<script src="../js/jquery-1.11.0.min.js"></script>
	
	<!-- Smooth Scroll
	================================================== -->
	<script src="../js/smooth-scroll.js"></script>

	<!-- Retina Images
	================================================== -->
	<script src="../js/retina.min.js"></script>

	<!-- Owl Carousel
	================================================== -->
	<script src="../js/owl.carousel.min.js"></script>

	<!-- Stone Actions (You can insert your scripts here)
	================================================== -->
	<script src="../js/stone.project.actions.min.js"></script>

</body>
</html>
<?php
mysqli_free_result($getCiity);
?>