<?php
session_start();
if(session_destroy())
{
	echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}
