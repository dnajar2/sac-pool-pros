<?php
$pool = <<<EOD
<div id="poolNav" class="collapse navbar-collapse">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#poolNav"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	<h3>Pools</h3>
	<ul  data-toggle="collapse" data-target="#poolNav" class="nav nav-pills nav-stacked">
		<li ><a href="../swimming-pool-construction" title="POOL CONSTRUCTION" >POOL CONSTRUCTION</a></li>
		<li><a href="../gunite" title="Swimming Pool Gunite" >POOL GUNITE</a></li>

		<li ><a href="../pool-gallery" title="POOL GALLERY">POOL GALLERY</a></li>
		<li ><a href="../swimming-pool-products" title="POOL PRODUCTS">POOL PRODUCTS</a></li>
		<li ><a href="../swimming-pool-financing" title="POOL FINANCING" >FINANCING</a></li>
		<li ><a href="#" title="SPECIAL OFFERS">SPECIAL OFFERS</a></li>
		<li ><a href="" data-toggle="modal" data-target="#contact-us" title="GET STARTED">GET STARTED</a></li>
	</ul>
</div>
EOD;


if($page_id == 3 || $page_id){
	echo $pool;
}
?>
