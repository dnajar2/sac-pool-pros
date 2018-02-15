<?php
define ("root", $_SERVER['SERVER_NAME']);
$root_path =  "https://".root;

$current = '<span class="sr-only">(current)</span>';
$active = 'active';
$phone = "(916) 722-7665"
?>

 <span itemscope itemtype="http://schema.org/LocalBusiness"><nav class="navbar navbar-default navbar-fixed-top container-fluid">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="index"><img itemprop="image"  src="<?php echo $root_path ?>/images/logo-stone.png" alt="Sac Pool Pros"></a> <span itemprop="telephone" class="phone"><?php echo $phone ?></span></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav navbar-right ">
        <li class="dropdown <?php if($page_id == 0 ){echo $active; }  ?>"><a href="<?php echo $root_path ?>/index" title="Sac Pool Pros">Home Page<?php if($page_id == 0 ){echo $current;}  ?></a>

        </li>
        <li class="<?php if($page_id == 2 ){echo $active; }  ?>">
			<a href="<?php echo $root_path ?>/about" title="About Us">About Us<?php if($page_id == 2 ){echo $current;}  ?></a>
        </li>
        <li class="dropdown  <?php if($page_id == 3 ){echo $active; }  ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Construction<?php if($page_id == 3 ){echo $current;}  ?><span class="caret"></span></a>
        	<ul class="dropdown-menu" role="menu">
            	<li><a href="<?php echo $root_path ?>/swimming-pool-construction" title="Swimming Pool Construction" >Swimming Pool Construction</a></li>
              <li><a href="<?php echo $root_path ?>/gunite" title="Swimming Pool Gunite" >Swimming Pool Gunite Service</a></li>
              <li><a href="<?php echo $root_path ?>/pool-gallery" title="Swimming Pool Gallery">Pool Gallery</a></li>
              <li><a href="<?php echo $root_path ?>/pool-slide-show" title="Swimming Pool Slide Show">Custom Pools</a></li>
            	<li class="divider"></li>
            	<li><a href="<?php echo $root_path ?>/swimming-pool-financing" title="Swimming Pool Financing">Pool Financing</a></li>
            	<li class="divider"></li>
            	<li><a href="<?php echo $root_path ?>/swimming-pool-products" title="Swimming Pool Products">Pool Products</a></li>
				<li><a href="<?php echo $root_path ?>/swimming-pool-process" title="Swimming pool porcess">Process</a></li>
          	</ul>
        </li>
        <li class="dropdown <?php if($page_id == 5 ){echo $active; }  ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
           <li><a href="<?php echo $root_path ?>/swimming-pool-weekly-service" title="Weekly service">Weekly Service</a></li>
           <li><a href="<?php echo $root_path ?>/swimming-pool-commercial-service" title="commercial swimming pool service" >Commercial Pool Service</a></li>
            <li><a href="<?php echo $root_path ?>/swimming-pool-repair" title="Swimming pool repair">Repairs</a></li>
            <li><a href="<?php echo $root_path ?>/swimming-pool-remodels" title="Swimming pool remodels">Remodels</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo $root_path ?>/green-swimming-pool" title="Green Pool Cleaning">Green Pool Cleaning</a></li>
            <li><a href="<?php echo $root_path ?>/swimming-pool-tile-cleaning" title="Pool Tile Cleaning">Pool Tile Cleaning</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo $root_path ?>/swimming-pool-covers" title="Swimming Pool Covers">Pool Covers</a></li>
            <li><a href="<?php echo $root_path ?>/swimming-pool-faq" title="Swimming Pool Covers">FAQ's</a></li>
          </ul>
        </li>
		<li class="<?php if($page_id == 6 ){echo $active; }  ?>"><a href="<?php echo $root_path ?>/swimming-pool-solar" title="Swimming Pool Solor">Solar</a></li>
     	<li class="<?php if($page_id == 7 ){echo $active; }  ?>"><a href="<?php echo $root_path ?>/blog/">Blog</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
