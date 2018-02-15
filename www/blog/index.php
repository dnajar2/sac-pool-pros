<?php
include('../admin/inc/conn.php');
$query = "SELECT * FROM  blog
		ORDER BY blog_id DESC ";

$results = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($results);
$title = $row['title'];
$description = $row['content'];
$img = $row['img'];


$select_title = "SELECT title FROM blog";
$page_title = mysqli_query($conn, $select_title);

$page_id = 7;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="https://sacpoolpros.com/blog" rel="canonical" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sac Pool Pros Construction &amp; Service blog</title>


<meta property="og:site_name" content="Sac Pool Pros Construction &amp; Service">
<meta property="og:title" content="Sac Pool Pros Construction &amp; Service">
<meta property="og:url" content="http://www.sacpoolpros.com">
<meta property="og:type" content="website">
<meta property="og:description" content="All the information you needs regarding your pool, pool construction or pool service">
<meta itemprop="name" content="Sac Pools pros, swimming pool &amp; Spa service" >
<meta itemprop="url" content="http://www.sacpoolpros.com">
<meta itemprop="description" content="All the information you needs regarding your pool, pool construction or pool service">
<meta name="twitter:title" content="Sac Pools pros, swimming pool &amp; Spa service">
<meta name="twitter:url" content="https://www.sacpoolpros.com">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="All the information you needs regarding your pool, pool construction or pool service">
<meta name="description" content="All the information you needs regarding your pool, pool construction or pool service">
<link rel="amphtml" href="https://sacpoolpros.com/blog/mblog/index.html">
<!-- Bootstrap -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/custom-style.css" rel="stylesheet">
<link href="../css/animate.css" rel="stylesheet">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="hide">Sac Pools pros, swimming pool &amp; Spa service, we offer swimming pool service in the Saceamento area as well as construction service, our cliens are based out of Sacramento and Eldorado counties</div>
<?php 
	include('../includes/nav.php');
	?>
<div class="container-fluid">
  <div class="row">
    <div class="parallax_header header-two">
      <h1 class="text-center animated slideInLeft">All About Swimming Pools, Spas and more.</h1>      
    </div>
  </div>
</div>

<div class="container section">
  <div class="row">
	  
	  <div id="blog" class="col-sm-9">
 		  <?php do { ?>
  		  	<div class="col-sm-3">
	  	<img src="https://sacpoolpros.com/images/gallery/<?php echo $row['img'] ?>" alt="Why build a swimming pool in your Sacramento back yard" class="img-responsive">
	  </div>
	  		  <h3><a href="/title/<?php echo $post_title = str_replace(" ", "-",$row['title'] ); ?>.html" title="<?php echo $row['title']; ?>"><?php echo $row['title'] ?></a></h3>
	  		<article class="col-sm-9">	
			<?php 
			echo  substr($row['content'], 0, 256);			
		?>...
		<div class="trades text-right">
			<em><?php echo $row['author'] ?></em>
			<small><em> posted <?php echo $date = $row['posted']  ?></em></small>
		
		</div>
		
		<hr>		
	  </article>
		  
	  <?php } while($row = mysqli_fetch_assoc($results)); ?>
	  </div>
	  <div class="col-sm-3 archives">
		  <h3><i class="glyphicon glyphicon-menu-right"></i> Archives</h3>
		  <ul id="archives">
		  <?php 
			   
			  
			  do { ?>
			<li>
		  		<a href="/title/<?php echo $post_title = str_replace(" ", "-",$row['title'] ); ?>.html">
			  		<i class="glyphicon glyphicon-menu-right"></i>
			  		<?php echo $row['title'] ?>
			  	</a>
			</li>
			  <?php } while($row = mysqli_fetch_assoc($page_title)); ?>
		  </ul>	  	
	  </div>
  </div>
  <hr>
</div>
<?php 
	include('../includes/footer.php');
	?>
	<script>
	$(document).ready(function(){
		$('#archives li').first().hide()
		$('#get_started').click(function(){
		$('#contact-us').modal('show');
		});
			
	})
		
	</script>
</body>
</html>
