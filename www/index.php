<?php
include('admin/config.php');
include('admin/inc/conn.php');
$query = "SELECT * FROM  blog ORDER BY  blog_id DESC ";

$results = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($results);
$title = $row['title'];
$description = $row['content'];
$img = $row['img'];


$select_title = "SELECT title FROM blog";
$page_title = mysqli_query($conn, $select_title);
$page_id = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta itemprop="priceRange" content="$$" />
<link rel="alternate" href="https://sacpoolpros.com" hreflang="en-us" />
<link href="https://sacpoolpros.com" rel="canonical" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Swimming Pool Contractors &amp; Pool Service Pros</title>
<meta property="og:site_name" content="Swimming Pool Contractor &amp; Swimming Pool Service Sac Pool Pros">
<meta property="og:title" content="Swimming Pool Contractors &amp; Swimming Pool Service Pros">
<meta property="og:url" content="https://www.sacpoolpros.com">
<meta property="og:type" content="website">
<meta property="og:description" content="We are swimming pool experts at Sac Pool Pros, for your swimming pool service needs or pool construction give us a call (916) 722-7665, for any pool build call us today">
<meta itemprop="name" content="Swimming Pool Construction &amp; Service Sac Pool Pros" >
<meta itemprop="url" content="https://www.sacpoolpros.com">
<meta itemprop="description" content="Sac Pool Pros, for your swimming pool service needs or pool construction give us a call (916) 722-7665">
<meta name="twitter:title" content="Swimming Pool Contractors &amp; Swimming Pool Service Pros">
<meta name="twitter:url" content="https://www.sacpoolpros.com">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="we are pool builders and pool service experts, for your swimming pool service needs or pool construction give us a call (916) 722-7665">
<meta name="description" content="we are pool builders and swimming pool service experts, for your swimming pool service needs or pool construction give us a call (916) 722-7665">
<?php print $key_words ?>

<!-- Bootstrap -->
<link href="https://sacpool-sacpoolpros.netdna-ssl.com/css/bootstrap.css" rel="stylesheet">
<link href="https://sacpool-sacpoolpros.netdna-ssl.com/css/custom-style.css" rel="stylesheet">
<link href="https://sacpool-sacpoolpros.netdna-ssl.com/css/animate.css" rel="stylesheet">
<link href="https://sacpool-sacpoolpros.netdna-ssl.com/css/assets/owl.carousel.css" rel="stylesheet">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51129647-1', 'auto');
  ga('send', 'pageview');

</script>
<div class="hide">
    <p>swimming pool service sacramento and Sacramento pool builders</p>
<h1>We are <a href="https://sacpoolpros.com/swimming-pool-construction" title="Swimming Pool Builder Sacramento">swimming pool construction</a> experts, we build quality swimming pools and pride in the overal pool builder process we execute when cunstructing your swimming pool, ensuring the pool build process is the best of the industry</h1>
Sac Pools pros, swimming pool &amp; Spa construction &amp; service, we offer swimming <a href="swimming-pool-weekly-service" title="pool service sacramento ca"></a>pool service in the Sacramento</a> area as well as swimming pool construction service, our clients are based out of Sacramento and El Dorado counties, we are swimming pool builder experts for the best swimming pool contractor contact us today .
</div>
<?php
	include('includes/nav.php');
	?>
<div class="container-fluid">
  <div class="row">
    <div class="parallax_header header-one">
      <h1 class="text-center animated slideInLeft">Build a great back yard, <span itemprop="name">Sac Pool Pros</span></h1>
      <div class="text-center">
      		<button id="get_started"  type="button" class="btn btn-primary animated fadeIn ">GET STARTED</button>
      </div>

    </div>
  </div>
</div>
<div class="container section">
  <div class="row text-center">
    <div class="col-md-12">
		<h2 class="animated slideInRight">We Are  <a href="https://sacpoolpros.com/swimming-pool-construction" title="Swimming Pool Builder Sacramento">Swimming Pool Builders</a> and Swimming Pool Service Experts<br>OVER 20,000 SWIMMING POOLS BUILT THROUGHOUT CALIFORNIA</h2>
		 <div class="col-xs-12">
		     <h2>For all your swimming pool needs be it <a href="/swimming-pool-weekly-service" title="Pool Service">service</a>, <a href="/swimming-pool-repair" title="swimming pool repair">repair</a> or <a href="/swimming-pool-construction" title="swimming pool construction">construction</a> we are here for you!</h2>
		     <p class="lead">If you are located in <span id="city">Sacramento</span> and are in need of a great swimming pool service crew, you have come to the right place, we have more than 30 years of combined experience in the pool service field, feel free to call us today for a free estimate (916) 722-7665</p>
		 </div>
		 <hr>
		 <div class="services wow slideInLeft">
			<a href="pool-gallery" title="Swimming Pool Build Service"><img src="https://sacpool-sacpoolpros.netdna-ssl.com/images/assets/Swimming-Pools-Sacramento.png" atl="Swimming pools sacramento"></a>
			<a href="custom-swimming-pools" title="Custom Pool Builds"><img src="https://sacpool-sacpoolpros.netdna-ssl.com/images/assets/spas-hot-tubs-sacramento.png" alt="spas, hot tubs sacramento"></a>
			<a href="swimming-pool-products" title="Pool Products"><img src="https://sacpool-sacpoolpros.netdna-ssl.com/images/assets/patio-furniture-sacramento.png" alt="Patios Sacramento"></a>
			<a href="swimming-pool-weekly-service" title="Pool Service"><img src="https://sacpool-sacpoolpros.netdna-ssl.com/images/assets/pool-service-sacramento.png" alt="pool services sacramento"></a>
			<div class="clearfix"></div>
		 </div>
		 <div class="trades wow fadeIn">
		 	<img src="https://sacpool-sacpoolpros.netdna-ssl.com/images/assets/swimming-pool-construction-crew.jpg" alt="Sacramento pool builder crew">
		 	<img src="https://sacpool-sacpoolpros.netdna-ssl.com/images/assets/download.jpg" alt="Sacramentos best swimming pool service">
		 	<img src="https://sacpool-sacpoolpros.netdna-ssl.com/images/assets/trade-certified-pool-dealer.jpg" alt="Sacramento pool dealer">
		 	<img src="https://sacpool-sacpoolpros.netdna-ssl.com/images/assets/Inc-5000-2015-sac-pools-pros-sacramento.png" alt="sac pool pors, swimming pool construction experts"
		</div>
	 </div>
	</div>
  </div>
  <hr>
  <div class="row">
    <div class="text-center col-md-12">
      <div class="well text-center">
		  <h3>We Think We Are The Best</h3>
			<strong>We think we are the best because you the client said so, Great people work here to develop the best solutions for you. Each member of our team has its own function, and without doubt, makes the best possible way!</strong>
   	  </div>
    </div>
  </div>


</div>
<hr>

<!--
 <div class="row">
   <div class="owl-carousel">

  		<?php do { ?>
 		  	<div class="owl-item-holder"><!-- start of item
 		  		<h3><a href="/blog/b.php?title=<?php echo $post_title = str_replace(" ", "-",$row['title'] ); ?>" title="<?php echo $row['title']; ?>"><?php echo $row['title'] ?></a></h3>
				<div class="col-sm-6">
					<img src="https://sacpoolpros.com/images/gallery/<?php echo $row['img'] ?>" alt="Why build a swimming pool in your Sacramento back yard">
				</div>
				<div class="col-sm-6">
					<?php
					echo  substr($row['content'], 0, 256);
					?>...
					<div class="trades text-right">
						<em><?php echo $row['author'] ?></em>
						<small><em> posted <?php echo $date = $row['posted']  ?></em></small>
					</div>
				</div>
				<div class="clearfix"></div>
			</div><!-- end of item -->
	  <?php } while($row = mysqli_fetch_assoc($results)); ?>
  <!--
  </div>
  <div class="clearfix"></div>
  </div>
  -->
<?php
	include('includes/footer.php');
	?>
<script>
$(document).ready(function(){
	$('#get_started').click(function(){
		$('#contact-us').modal('show');
	});
	var owl = $('.owl-carousel');
	owl.owlCarousel({
	loop:true,
	nav:true,
	margin:10,
	items:2,
	dots:true,
	autoplay:true,
	autoplayTimeout:3000,
	autoplayHoverPause:true
	});
	$('.play').on('click',function(){
		owl.trigger('autoplay.play.owl',[1000])
	})
	$('.stop').on('click',function(){
		owl.trigger('autoplay.stop.owl')
	});
	$('.owl-prev').addClass('pull-left');
	$('.owl-next').addClass('pull-right');
// 	get location from guest
$.ajax({
		url:'https://freegeoip.net/json',
		method:'GET',
		dataType: 'jsonp',
		success:function(res){
 			$('#city').text(res.city)
		}
	})
})
</script>
</body>
</html>
