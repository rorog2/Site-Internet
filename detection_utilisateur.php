<?php
function detect_os_navigateur(void){
// Simple browser and OS detection script. This will not work if User Agent is false.
$agent = $_SERVER['HTTP_USER_AGENT'];

// Detect Device/Operating System
if(preg_match('/Linux/i',$agent)) $os = 'Linux';
elseif(preg_match('/Mac/i',$agent)) $os = 'Mac'; 
elseif(preg_match('/iPhone/i',$agent)) $os = 'iPhone'; 
elseif(preg_match('/iPad/i',$agent)) $os = 'iPad'; 
elseif(preg_match('/Droid/i',$agent)) $os = 'Droid'; 
elseif(preg_match('/Unix/i',$agent)) $os = 'Unix'; 
elseif(preg_match('/Windows/i',$agent)) $os = 'Windows';
else $os = 'Unknown';

// Browser Detection
if(preg_match('/Firefox/i',$agent)) $br = 'Firefox'; 
elseif(preg_match('/Mac/i',$agent)) $br = 'Mac';
elseif(preg_match('/Chrome/i',$agent)) $br = 'Chrome'; 
elseif(preg_match('/Opera/i',$agent)) $br = 'Opera'; 
elseif(preg_match('/MSIE/i',$agent)) $br = 'IE'; 
else $bs = 'Unknown';

// Action when OS/Device is found
if($os=='Linux')  { echo 'This is done when the OS/Device is Linux'; }
if($os=='Mac')	  { echo 'This is done when the OS/Device is MacOS'; }
if($os=='iPhone') { echo 'This is done when the OS/Device is iPhone'; }
if($os=='iPad')   { echo 'This is done when the OS/Device is iPad'; }
if($os=='Droid')  { echo 'This is done when the OS/Device is Droid'; }
if($os=='Unix')   { echo 'This is done when the OS/Device is Unix'; }
if($os=='Unknown'){ echo 'This is done when the OS/Device is unknown. This is the failsafe for when an OS/Device is not detected.'; }

// Action when Browser is detected
if($br=='Firefox'){ echo 'This is done when the Browser is Firefox'; }
if($br=='Chrome') { echo 'This is done when the Browser is Chrome'; }
if($br=='Opera')  { echo 'This is done when the Browser is Opera'; }
if($br=='MSIE')   { echo 'This is done when the Browser is Microsoft Internet Explorer'; }
if($br=='Unknown'){ echo 'This is done when the Browser is Unknown. This is the failsafe for when a browser type is not detected'; }

// Action when both browser and OS/Device are detected
if($os=='Linux' && $br=='Firefox')  { echo 'This is done when the Browser is Firefox and the OS is Linux.'; }
if($os=='Unknown' && $br=='Unknown'){ echo 'This is done when the Browser is Unknown and the OS is Unknown. This is the catch-the-rest failsafe'; }
}
?>