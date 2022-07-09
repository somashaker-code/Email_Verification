<?php
$page_title = "Welcome to XKCD Email Challenge, Let's Get Started";
require_once __DIR__ . '\includes\navbar.php';
?>
<div class="main-div center-div" style="text-align: center;">
	<div id="email-input">
		<h1>Verify Your Email<br /></h1>
		
		<!--- Take email as input -->
		<!-- <span class="label">Email:</span><br /> -->
		<input type="email" name="email" id="email" placeholder="Enter your email">

		<!--- Verify Email Button -->
		<button class="submit-btn" id="email-submit-btn" type="submit" name="verify">
			<span id="email-text">Verify Email</span>
			<i id="email-loader" class="hidden-class"></i>
		</button>
	</div>
	<div id="otp-input" style="text-align:center;">
		<!--- Take email as input -->
		<span class="label">OTP:</span><br />
		<input type="number" name="OTP" id="OTP" placeholder="Enter your OTP">
		<!--- Verify Email Button -->
		<button class="submit-btn" id="otp-submit-btn" type="submit" name="verify">
			<span id="otp-text">Verify Email</span>
			<i id="otp-loader" class="hidden-class"></i>

	</div>
	<div id="register-success">
		<h1 style="color:white">Successfully Subscribed</h1>
		<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
			<circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
			<path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
		</svg>
		<h5 style="color:white;text-align:center">
			Dear <span id="new-user-name"></span>,
			<br />
			Welcome to the XKCD Email Challenge. You have successfully subscribed. <br />
			Expect your first email to be sent in a few minutes. <br />
		</h5>
	</div>
	<h4 id="alert-msg"></h4>
</div>
<?php
require_once __DIR__ . '\includes\footer.php';
?>