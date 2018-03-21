<?php
$page_id = 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sac Pool Pros - Our Pools Our Reputation</title>
<meta property="og:site_name" content="Sac Pool Pros Construction &amp; Service">
<meta property="og:title" content="Sac Pool Pros Construction &amp; Service">
<meta property="og:url" content="http://www.sacpoolpros.com/about/">
<meta property="og:type" content="website">
<meta property="og:description" content="Great pools we have put together a gallery of the best pools we have ever build in and arround Sacramento">
<meta itemprop="name" content="About Sac Pool Pros Construction &amp; Service">
<meta itemprop="url" content="http://www.sacpoolpros.com/about/">
<meta itemprop="description" content="Great pools we have put together a gallery of the best pools we have ever build in and arround Sacramento">
<meta name="twitter:title" content="About Sac Pool Pros Construction &amp; Service">
<meta name="twitter:url" content="http://www.sacpoolpros.com/about/">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="Great pools we have put together a gallery of the best pools we have ever build in and arround Sacramento">
<meta name="description" content="Great pools we have put together a gallery of the best pools we have ever build in and arround Sacramento">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/custom-style.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/lightslider.css" />
<style type="text/css">
    .demo {
    width:750px;
    margin:auto;
        }
        ul {
            list-style: none outside none;
            padding-left: 0;
            margin-bottom:0;
        }
        li {
            display: block;
            float: left;
            margin-right: 6px;
            cursor:pointer;
        }
        img {
            display: block;
            height: auto;
            width: 100%;
        }
        @media (max-width:767px){
            .demo{
                width:360px;
            }
            .demo img{
                width:100% !important;
            }
        }
</style>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
	include('includes/nav.php');
	?>
<div class="container-fluid">
  <div class="row">
    <div class="parallax_header header-two">
      <h1 class="text-center animated slideInLeft">
      Our Best Pools Yet!
      </h1>
    </div>
  </div>
</div>
<div class="container section">
  <div class="row text-center">
    <div class="col-md-12 animated fadeIn">
    <section>
   	  <div class="container" style="padding:0">
        <div class="demo">
            <ul id="lightSlider">
                <li data-thumb="img/top-pools/IMG_0301.jpg">
                    <img src="img/top-pools/IMG_0301.jpg" />
                </li>
                <li data-thumb="img/top-pools/IMG_0444.jpg">
                    <img src="img/top-pools/IMG_0444.jpg" />
                </li>
                <li data-thumb="img/top-pools/IMG_7605.jpg">
                    <img src="img/top-pools/IMG_7605.jpg" />
                </li>
                <li data-thumb="img/top-pools/antonios_pools_slideshow_089.jpg">
                    <img src="img/top-pools/antonios_pools_slideshow_089.jpg" />
                </li>
                <li data-thumb="img/top-pools/antonios_pools_slideshow_090.jpg">
                    <img src="img/top-pools/antonios_pools_slideshow_090.jpg" />
                </li>

            </ul>
        </div>
      </div>
    </section>
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
<?php
	include('includes/footer.php');
	?>
<script src="js/lightslider.js"></script>
<script>
$(document).ready(function() {
    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 9
    });
});
</script>
</body>
</html>
