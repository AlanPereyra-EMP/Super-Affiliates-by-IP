<?php 
/**
* Plugin Name: Super Affiliates By Informatica Pereyra
* Plugin URI: https://informatica.pereyra.online/
* Description: WordPress plugin to create differents affiliates links.
* Version: 0.0.1 alpha
* Author: Alan Pereyra
* Author URI: https://informatica.pereyra.online/alanpereyra57
**/

// Detect affiliates link. 
  
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $saip_affiliate_link = "https"; 
}
else {
    $saip_link = "http"; 
}
  
// Here append the common URL characters. 
$saip_link .= "://"; 
  
// Append the host(domain name, ip) to the URL. 
$saip_link .= $_SERVER['HTTP_HOST']; 
  
// Append the requested resource location to the URL 
$saip_link .= $_SERVER['REQUEST_URI']; 
      
// Print the link 
	

?>