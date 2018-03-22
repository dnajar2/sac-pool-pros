<?php
$page_id = 7;
include('../admin/inc/conn.php');
$title = trim($_REQUEST['title']);
$cleantTitle = filter_var($title, FILTER_SANITIZE_STRING);
$seoTitle = str_replace("-", " ", $title);
$sql = "SELECT * FROM blog WHERE title LIKE '%$seoTitle%' ";
$results = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($results);

$select_title = "SELECT title FROM blog ORDER BY blog_id DESC";
$page_title = mysqli_query($conn, $select_title);

$date = date_create($row['posted']);

$title = $row['title'];
$content = $row['content'];
$img = $row['img'];
$author = $row['author'];
$description = $row['description'];
$date_posted = date_create($row['posted']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="https://sacpoolpros.com/blog/b.php?title=" rel="canonical" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title ?></title>

<meta name="description" content="<?php echo $description ?>">

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
  	  <ol class="breadcrumb">
  		<li class="breadcrumb-item"><a href="/blog/">Blog</a></li>
  		<li class="breadcrumb-item active"><?php echo $title ?></li>
	</ol>
	  <div class="col-sm-9">

	  <h2><?php echo $title ?></h2>
		  <small><em></em>By <?php echo $author . " | Posted " . date_format($date_posted,"m/d/Y")  ?></em></small>

	  <article>
	  	<div class="center-block">
	  		<img src="https://sacpoolpros.com/images/gallery/<?php echo $img ?>" alt="<?php echo trim($title);?>" class="img-responsive">
		  	</img>
		</div>
	  	<?php
	echo $content;
	?>
	  </article>
	  </div>
  	<div class="col-sm-3 archives">
		  <h3><i class="glyphicon glyphicon-menu-right"></i> Archives</h3>
		  <ul id="archives">
		  <?php
			  do { ?>
			<li>
		  		<!--<a href="b.php?title=<?php echo $post_title = str_replace(" ", "-",$row['title'] ); ?>">-->
			  	<!--	<i class="glyphicon glyphicon-menu-right"></i>-->
			  	<!--	<?php echo $row['title'] ?>-->
			  	<!--</a>-->
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
		})

	$('#get_started').click(function(){
		$('#contact-us').modal('show');
	});
	</script>
</body>
</html>
