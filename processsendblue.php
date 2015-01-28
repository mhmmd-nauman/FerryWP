<?php
/**
 * Mailin REST client
 */ 
session_start();
//echo "come here";
$_SESSION['POST_DATA'] = $_POST;
require(dirname(__FILE__).'/mailin.php');
$name     = $_POST['message_name'];
$email    = $_POST['message_email'];
$mailin = new Mailin("https://api.sendinblue.com/v2.0","Z7jsWErHTztdYK4n");
$attributes = array("NAME"=>$name);
$blacklisted = 0;
$listid = array(6);
$listid_unlink = array(0);//array(2,5);
$blacklisted_sms = 0;
$mailin->create_update_user($email,$attributes,$blacklisted,$listid,$listid_unlink,$blacklisted_sms);
header("Location:http://internationalmachinery.eu/contact-us/?message=success");
// php