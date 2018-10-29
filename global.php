<?php

/**
 * @Author: indran
 * @Date:   2018-10-17 13:24:39
 * @Last Modified by:   indran
 * @Last Modified time: 2018-10-17 17:40:01
 */
?>
<?php
if (session_status() === PHP_SESSION_NONE){session_start();}

define( 'SYSTEM_NAME', 'ksrtcnew' ); 
define( 'DISPLAY_NAME', 'ksrtc' );
define( 'SYSTEM_ROOT', '/ksrtcnew' );




define( 'KEY', 'f4c6se34sff3d399793sef213se43df2dsw4w34w333q0ise3w5');


define( 'MAP_KEY', ''); 
define( 'CAPTCHA', ''); 

define( 'MODE', "testing"  );  
define("ENCRYPTION_KEY", "!@1#Y$^%g&k*");

define("INDEX_NUMBER", 29561);



define( 'FILES', "../files_p9DFyy/"  );  
define( 'TEMP_DIR', FILES . "temp/"  );  



define( 'ADMIN', 'admin'); 








function siteURL() {
	$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http"; 
	return $protocol;
} 
$SPROTOCOL = siteURL();
define( 'ROOT',  $SPROTOCOL. ':' . '//' . $_SERVER['SERVER_NAME'] .':' . $_SERVER['SERVER_PORT']  ); 
define( 'DIRECTORY',  SYSTEM_ROOT . '/'); 
define( 'PATH', $SPROTOCOL. '://' . $_SERVER['SERVER_NAME'] .':' . $_SERVER['SERVER_PORT']  . DIRECTORY ); 
define( 'DIRECTORY_PUBLIC', DIRECTORY  . '' ); 








define( 'DIRECTORY_ADMIN', DIRECTORY . ADMIN . '/dashboard' ); 




define( 'PATH_ADMIN', PATH . ADMIN );  








define( 'TERMS__CONDITIONS', '#'); 
define( 'THEME_OWN_BY', '2018 MCA RIT ');

function indexMe ( $index ) {
	$index = INDEX_NUMBER + $index;
	return  $index;
}
function unIndexMe ( $index ) {
	$index = $index - INDEX_NUMBER ;
	return  $index;
}
function setLocation ( $nowPath ){ echo '<script type="text/javascript">location.href = "' . $nowPath . '" ;</script>'; exit(); }
function encrypt($pure_string, $encryption_key = KEY) { 
	return strtr(base64_encode($pure_string), '+/=', '-_,'); 
}
function decrypt($encrypted_string, $encryption_key = KEY) {
	return base64_decode(strtr($encrypted_string, '-_,', '+/=')); 
}
function random_bytes_05($length, $keyspace = 'abcdefghijklmnopqrstuvwxyz234567'){    
	$str = '';
	$keysize = strlen($keyspace);
	for ($i = 0; $i < $length; ++$i) {
		$str .= $keyspace[mt_rand(0,25)];
	}
	return $str;
}  
if (empty($_SESSION[ SYSTEM_NAME .'_token']) || !isset($_SESSION[ SYSTEM_NAME .'_token'] )) {
	$_SESSION[  SYSTEM_NAME . '_token'] = bin2hex(random_bytes_05(32));
}













function getAuthentication ( $type = '' ) {
//  r5 w4 a1 n0 
	$gAuthentication = array(
		"profile" => 0 , 
	);
	if($type == 'f'){
		$gAuthentication["profile"] = 6 ;
	} 
	return $gAuthentication = json_encode($gAuthentication);
};
?>