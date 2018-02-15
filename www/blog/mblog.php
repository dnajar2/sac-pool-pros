<!doctype html>
<?php
include('../admin/inc/conn.php');
$query = "SELECT * FROM  blog
		ORDER BY  blog_id DESC ";

$results = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($results);
$title = $row['title'];
$description = $row['content'];
$img = $row['img'];
$date_posted = date_create($row['posted']);

$select_title = "SELECT title FROM blog";
$page_title = mysqli_query($conn, $select_title);

$page_id = 7;
?>
<html amp lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="canonical" href="https://sacpoolpros.com/blog/mblog/index.html">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title>Custom Pool Builder and Pool Service</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
		  "mainEntityOfPage": {
    		"@type": "WebPage",
    		"@id": "https://sacpoolpros.com/blog"
  			},
        "headline" : "Pool Service and Construction tips",
		"author" : "David Randolph",
		
		"publisher" :  {
    "@type": "Organization",
    "name": "Sac Pool Pros",
    "logo": {
      "@type": "ImageObject",
      "url": "https://sacpoolpros.com/images/logo-stone.png",
      "width": 185,
      "height": 40
    }
  },
        "datePublished" : "2016-12-07T12:02:41Z",
		"dateModified" : "2016-12-09T11:02:41Z",
		"image": {
    	"@type": "ImageObject",
    	"url": "https://sacpoolpros.com/images/logo-stone.png",
    	"width": 200,
        "height": 40
  		}
      }
    </script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<style amp-custom>
	body{
		font-family: Baskerville, Palatino Linotype, Palatino, Century Schoolbook L, Times New Roman, serif;
	}
	amp-img{
		margin: auto;
	}
	#blog{
		padding-left: 10px;
		padding-right: 10px;
	}
	h1, h2, h3 {
		text-align: center;
	}
</style>
  </head>
	<body>
	
		<h1><amp-img height="40" width="185" layout="responsive" src="https://sacpoolpros.com/images/logo-stone.png"></amp-img><br>
			Sac Pool Pros News and Tips</h1>
		<h2>(916) 722-7665</h2>
		<amp-img height="260" width="425" layout="responsive" src="https://sacpoolpros.com/images/gallery/antonios_pools_slideshow_078.jpg" alt="Welcome"></amp-img>
		<div id="blog">
			<?php do { ?>
			<div>
				<h3><a href="../blog/b.php?title=<?php echo $post_title = str_replace(" ", "-",$row['title'] ); ?>" title="<?php echo $row['title']; ?>"><?php echo $row['title'] ?></a></h3>
				<amp-img layout="responsive" src="https://sacpoolpros.com/images/gallery/<?php echo $row['img'] ?>" alt="Why build a swimming pool in your Sacramento back yard" height="220" width="425" ></amp-img>
			</div>
				
			<article>	
				<?php 
				echo  substr($row['content'], 0, 256);			
				?>...
				<div class="trades text-right">
					<em><?php echo $row['author'] ?></em>
					<small><em> posted <?php echo $date = date_format($date_posted,"m/d/Y")  ?></em></small>
				</div>
				<hr>		
			</article>		  
			<?php } while($row = mysqli_fetch_assoc($results)); ?>
		</div>
	</body>
</html>
<?php
mysqli_close($conn);
?>