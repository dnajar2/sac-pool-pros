	<div class="contact-form col-sm-3 wow slideInRight">
		<h3>Schedule A Call</h3>
		<div id="formMail" class="hide"></div>
		<form id="formInput" name="email_lead" action="https://sacpoolpros.com/email.php" method="post" enctype="multipart/form-data">
		<input type="hidden" id="ip_address" name="ip_address" value="<?php echo $ip_address = $_SERVER['REMOTE_ADDR'] ?>">
			<div class="form-group">
				<input type="text" class="form-control" name="name" id="name" placeholder="First Name">
				<label class="error" for="name" id="name_error">Name is required.</label>
			</div>
			<div class="form-group">
			<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
			<label class="error" for="lastname" id="lastname_error">Last Name is required.</label>
			</div>
			<div class="form-group">
			<input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
			<label class="error" for="email" id="email_error">Email is required.</label>
			</div>
			<div class="form-group">
			<input type="text" class="form-control" name="phone" id="phone" required placeholder="Best Contact Number">
			<label class="error" for="phone" id="phone_error">Phone is required.</label>
			</div>
			<div class="form-group">
			<input type="text" class="form-control" name="zcode" id="zcode" required placeholder="Zip Code">
			<label class="error" for="zcode" id="zcode_error">Zip Code is required.</label>
			</div>
			<div class="form-group">
			<textarea class="form-control" name="message" id="message" placeholder="Send us a note"></textarea>
			</div>
			<div class="form-group text-right">
			<button id="submit" type="submit" class="btn btn-success">Send &nbsp; <i class="glyphicon glyphicon-send"></i></button>
			</div>
		</form>
	</div>
