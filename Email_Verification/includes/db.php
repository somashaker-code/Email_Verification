<?php

$con = new mysqli( 'localhost', 'root', '', 'email_verification' );
if ($con->connect_errno) {
	die( 'Connection failed: ' . $con->connect_error );
}
