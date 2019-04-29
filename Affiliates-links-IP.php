<?php 
/**
* Plugin Name: Affiliates link By Informatica Pereyra
* Plugin URI: https://informatica.pereyra.online/
* Description: WordPress plugin to create differents affiliates links.
* Version: 0.0.1 alpha
* Author: Alan Pereyra
* Author URI: https://informatica.pereyra.online/alanpereyra57
**/

// Detect affiliates link. 
  
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $alip_link = "https"; 
}
else {
    $alip_link = "http"; 
}
  
// Here append the common URL characters. 
$alip_link .= "://"; 
  
// Append the host(domain name, ip) to the URL. 
$alip_link .= $_SERVER['HTTP_HOST']; 
  
// Append the requested resource location to the URL 
$alip_link .= $_SERVER['REQUEST_URI']; 
      
// Print the link 
	

?>