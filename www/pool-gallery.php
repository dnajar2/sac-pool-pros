<?php
$page_id = 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Swimming Pool Construction Experts Sac Pool Pros</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="We are swimming pool builder and swimming pool contractor, for pool building needs, free estimates, swimming pool layouts, call today (916) 722-7665">
<meta name="keywords" content="Swimming pool construction, swimming pool builder, swimming pool contractor, swimming pool construction, custom swimming poll builds">


<!-- Bootstrap -->
<link href="https://sacpool-sacpoolpros.netdna-ssl.com/css/bootstrap.css" rel="stylesheet">
<link href="https://sacpool-sacpoolpros.netdna-ssl.com/css/custom-style.css" rel="stylesheet">
<link href="https://sacpool-sacpoolpros.netdna-ssl.com/css/animate.css" rel="stylesheet">
<link href="https://sacpool-sacpoolpros.netdna-ssl.com/css/blueimp-gallery.css" rel="stylesheet">
<link href="https://sacpool-sacpoolpros.netdna-ssl.com/css/blueimp-gallery-indicator.css" rel="stylesheet">


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
    <div class="parallax_header gallery-header">
      <h1 class="text-center animated slideInLeft">SAC POOL PROS<br>
		  <span>CUSTOM POOLS GALLERY</span></h1>            
    </div>
  </div>
</div>
<div class="container section">
  <div class="row">
	<div class="col-sm-2 wow slideInLeft">		
		<?php include('includes/sub-cat.php') 
	
	?>
	</div>

	<div class="col-sm-7 wow fadeIn">
	<div id="pool-gallery">
 <script>
for(var i = 89; i > 0; i--){
	var img = i + 1;
	var imageLink = '<a href="https://sacpool-sacpoolpros.netdna-ssl.com/images/gallery/antonios_pools_slideshow_0'+[img]+'.jpg" title="Custom pools by Sac Pool Pros">';
	var imagePath = '<img src="https://sacpool-sacpoolpros.netdna-ssl.com/images/gallery/antonios_pools_slideshow_0'+[img]+'.jpg" alt="Custom pools by Sac Pool Pros"></a>';
	document.write(imageLink + imagePath);
}	 
		
</script>
    
        
    
</div>
	
	</div>
	<div class="col-sm-3 wow slideInRight">
		<h3>Schedule A Call</h3>
		<form>
			<div class="form-group">
				<input type="text" class="form-control" name="name" id="name" required placeholder="First Name">
			</div>
			<div class="form-group">
			<input type="text" class="form-control" name="lname" id="lname" required placeholder="Last Name">
			</div>
			<div class="form-group">
			<input type="text" class="form-control" name="email" id="email" required placeholder="E-mail">
			</div>
			<div class="form-group">
			<input type="phone" class="form-control" name="phone" id="phone" data-format="(ddd) ddd-dddd" required placeholder="Best Contact Number">
			</div>
			<div class="form-group">
			<input type="text" class="form-control" name="zcode" id="zcode" required placeholder="Zip Code">
			</div>
			<div class="form-group">
			<textarea class="form-control" name="message" id="message" placeholder="Send us a note"></textarea>	
			</div>
			<div class="form-group text-right">
			<button type="submit" class="btn btn-success">Send &nbsp; <i class="glyphicon glyphicon-send"></i></button>
			</div>
		</form>
	</div>
	<div class="clearfix"></div>
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

<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<?php 
	include('includes/footer.php');
	?>
<script src="js/blueimp-gallery.js"></script>
<script src="js/blueimp-gallery-indicator.js"></script>
<script>
document.getElementById('pool-gallery').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>	
</body>
</html>
