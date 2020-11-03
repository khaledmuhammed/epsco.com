<?php
class emailClass{
	public static function form(){
?>
	<form role="form" onsubmit="submitForm(this,'forms.php')" prevent-default>
	<input type="hidden" name="action" value="submit_email">
	<div class="form-group">
	<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
	<div class="validation"></div>
	</div>
	<div class="form-group">
	<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required>
	<div class="validation"></div>
	</div>
	<div class="form-group">
	<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required>
	<div class="validation"></div>
	</div>
	<div class="form-group">
	<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
	<div class="validation"></div>
	</div>
	<div class="text-center"><button type="submit">Send Message</button></div>
	</form>

<?php
	}

}