<?php
//Setup file:
#Database Connection
include('/config/connection.php');

$site_title = 'AtomCMS 2.0';

#Constants:
DEFINE('D_TEMPLATE','template');

#Function
include('functions/data.php');
include('functions/template.php');

#site setup:
$debug =data_settings_value($dbc,'debug-status');

if(isset($_GET['page'])){
    
$pageid=$_GET['page']; // Set $pageid to equal the value given in the URL
    
    
}else {
    
    $pageid =1; //Set $pageid equal to 1 or the Home page
}

#Page Setup

$page = data_page($dbc,$pageid);

#User Setup
$user = data_user($dbc,$_SESSION['username']);


?>