<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <div class="container-fluid section blue">
  <div class="row">
   <h2 class="text-center">
   	Your dream backyard awaits.
   </h2>
   <div class="text-center">
   		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#contact-us">Request a Call &nbsp; <i class="glyphicon glyphicon-earphone"></i></button>
   </div>
   <div class="col-sm-10 col-sm-offset-1">
   	<hr>
   </div>
   <div class="clearfix"></div>
   <div class="text-center">
   	<h3>SAC POOL PROS<br>
	LOCATIONS</h3>
   </div>
    <div class="text-justify col-sm-3 col-sm-offset-2">
	<address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><h4>Pool Cleaning Service</h4>
		<span itemprop="streetAddress">6241 Turner Rd</span> | Suite A<br>
		<span itemprop="addressLocality">Sacramento</span>, <span itemprop="addressRegion">CA</span> <span itemprop="postalCode">95829</a>
  	</address>
  	<span itemprop="priceRange" class="hide">$$</span>
   </div>
    <div class="col-sm-3 text-justify">
    <address><h4>Pool Construction Design </h4>
	6241 Turner Rd | Suite B<br>
	Sacramento, CA 95829
  	</address>
    </div>
    <div class="col-sm-3 text-justify">
    <address><h4>Pool Construction </h4>
	6241 Turner Rd | Suite C<br>
	Sacramento, CA 95829
  	</address>
    </div>
  </div>
</div>
<div class="container-fluid footer">
	<div class="row">
		<div class="text-center col-md-8 col-md-offset-2">
			<h3><?php echo $phone ?></h3>

			<p class="text-center">
				SAC POOLS PROS IS THE #1-RATED AND LARGEST SWIMMING POOL BUILDER IN NORTHER CALIFORNIA. IN SACRAMENTO &amp; IN EL DORADO COUNTIES , WE PROVIDE CUSTOM SWIMMING POOL DESIGN AND BUILDING SERVICES, SPAS & HOT TUBS, BACKYARD HARDSCAPING AND MORE.
			</p>
			<p class="col-md-12">CSLB #1001713<br>
Copyright &copy; 2015 &middot; All Rights Reserved &middot; <a itemprop="url" href="https://sacpoolpros.com/" title="SWIMMING POOL BUILDER" >Sac Pool Pros</a></p>
		</div>
		<div class="clearfix"></div>
		<div class="text-right ss-media">
			<a href="https://www.facebook.com/SacPoolPros/" target="_blank" title="swimming pool service sacramento on FB"><i class="fa fa-facebook-square"></i></a>
			<a href="https://www.yelp.com/biz/sac-pool-pros-fair-oaks-3" target="_blank" title="swimming pool service sacramento yelp"><i class="fa fa-yelp"></i></a>
			<a href="https://www.pinterest.com/pin/394979829792098725/" target="_blank" title="swimming pool service sacramento on pinterest"><i class="fa fa-pinterest-square"></i></a>
			<a href="https://www.instagram.com/sacpool/" target="_blank" title="swimming pool service sacramento on IG"><i class="fa fa-instagram "></i></a>
			<a href="https://plus.google.com/+Sacpoolservices" target="_blank" title="swimming pool service on google"><i class="fa fa-google-plus-square"></i></a>
		</div>
	</div>
</div></span>

<div class="modal fade" id="contact-us" tabindex="-1" role="dialog" aria-labelledby="Contact">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="Contact"><i class="glyphicon glyphicon-phone-alt"></i> Schedule A Call </h4>
      </div>
      <div class="modal-body">
       		<div class="col-sm-4">
       			<h3>For any swimming pool related matter, let us know your need.</h3>

       		</div>
       		<div class="col-sm-8">
       			<div id="error"></div>
				<form id="footerForm" action="https://sacpoolpros.com/email2.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
					<input type="hidden" name="noreply" id="noreply" value="noreply@sacpoolpros.com">
					<input type="hidden" name"remote" id="remote" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>">
						<input type="text" class="form-control" name="name2" id="name2" required placeholder="First Name">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="lastname2" id="lastname2" required placeholder="Last Name">
					</div>
					<div class="form-group">
						<input type="phone" class="form-control" name="phone2" id="phone2" required placeholder="Best Contact Number">
					</div>
					<div class="form-group">
						<textarea class="form-control" name="note2" id="note2" placeholder="Send us a note"></textarea>
					</div>
					<div class="form-group text-right">
						<button id="submit-2" type="submit" class="btn btn-success">Send &nbsp; <i class="glyphicon glyphicon-send"></i></button>
					</div>
				</form>
     		</div>
     		<div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo $root_path ?>/js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://sacpool-sacpoolpros.netdna-ssl.com/js/bootstrap.js"></script>
<script src="https://sacpool-sacpoolpros.netdna-ssl.com/js/wow.min.js"></script>
<script src="https://sacpool-sacpoolpros.netdna-ssl.com/js/owl.carousel.min.js"></script>
<script src='https://sacpool-sacpoolpros.netdna-ssl.com/js/jquery.ajax-cross-origin.min.js'></script>
<script>
$(document).ready(function() {
	$('#formInput').keydown(function(){
		$("#formMail").addClass('hide');
		$('.error').hide()
	})
	$(function () {
  		$('[data-toggle="tooltip"]').tooltip()
	})
	new WOW().init();
	$('.error').hide();

	$("#submit").click(function(){

	var name = $("#name").val();
	var lastname = $("#lastname").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var zcode = $("#zcode").val();
	var message = $("#message").val();
	var mainName = name.split(" ");

	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'name='+ mainName[0] + '&lastname=' + lastname + '&email='+ email + '&phone='+ phone + '&zcode='+ zcode + '&message=' + message;
	if( name == ''|| email == ''|| phone== '')
	{
		$("#formMail").removeClass('hide').text("Please Fill Out All Fields");
		$('.error').show();
	}
	else
	{
	// AJAX Code To Submit Form.
	$.ajax({
	type: "POST",
	url: "https://sacpoolpros.com/email.php",
	data: dataString,
	cache: false,
	success: function(result){
		$('#formMail').removeClass('hide').html(result);
		$('#formInput').hide();
		$('#formInput').delay(5000).queue(function(showForm){
			$('#formInput').each(function(){
				this.reset();
			});
			$('#formInput').show();
			$('#formMail').addClass('hide').empty()
			showForm()
		});

		}
	});
	}
	return false;
	});

	//second form
	$("#error").show();

	$("#submit-2").click(function(){
	var remote = $("#remote").val();
	var name2 = $("#name2").val();
	var lastname2 = $("#lastname2").val();
	var phone2 = $("#phone2").val();
	var note2 = $('#note2').val();
	var mainName2 = name2.split(" ");

	// Returns successful data submission message when the entered information is stored in database.
	var dataString_2 = 'name2='+ mainName2[0] + '&lastname2=' + lastname2 + '&phone2='+ phone2 + '&note2=' + note2 +'&remote=' + remote;
	if( name2 == '' || phone2 == '')
	{
		$("#error").show().text("Please Fill Out All Fields");
		$('.error').show();
		console.log('click-1 '+mainName2[0])
	}
	else
	{
		console.log('click-2');
	// AJAX Code To Submit Form.
	$.ajax({
	type: "POST",
	url: "https://sacpoolpros.com/email2.php",
	data: dataString_2,
	cache: false,
	success: function(result2){
		$('#error').show().html(result2);
		$('#footerForm').each(function(){
				this.reset();
			});
		}
	});
	}
	return false;
	});
	
// 	test number is valid
    $('input[name="phone2"]').on('change', function(){
        console.log(    $(this).val()   );
        $(this).before('<i class="phone fa fa-refresh fa-spin"></i>')
        var number = $(this).val();
        if(number){
            var url = 'http://apilayer.net/api/validate?access_key=4f2eb59b66830f53ec878005c6d8e2e7&number='+number+'&country_code=US&format=1'
            $.ajax({
                crossOrigin: true,
                url: url,
                dataType: 'jsonp',
                success:function(json){
                    var json = JSON.parse(json)
                    var status = {
                        message:null,
                        cssClass:null
                    };
                    $('.phone').remove()
                    if(json.valid){
                        status.message = "Number is Valid";
                        status.cssClass = "success";
                        
                        if($('#submit-2').hasClass('disabled')){
                            $('#submit-2').removeClass('disabled').removeAttr('disabled');
                        }
                            
                    }else{
                        status.message = "Number is Invalid";
                        status.cssClass = "error"
                        $('#submit-2').addClass('disabled').attr('disabled', true);
                    }
                    
                    $('input[name="phone2"]').after('<div class="phone-stat '+ status.cssClass+'">'+status.message+'</div>')
                }
            });
        }
    }).on('focus', function(){
        $(this).val("");
        $(this).next('.phone-stat').text('');
        
    })
});
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Review",
  "itemReviewed": {
    "@type": "Service",
    "name": "Pool Repair"
  },
  "author": {
    "@type": "Person",
    "name": "Julie S."
  },
  "reviewRating": {
    "@type": "Rating",
    "ratingValue": "4",
    "bestRating": "5"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Yelp"
  }
}
</script>
