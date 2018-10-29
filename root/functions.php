<?php include_once('../global.php'); ?><?php

/**
 * @Author: indran
 * @Date:   2018-08-21 18:45:04
 * @Last Modified by:   indran
 * @Last Modified time: 2018-10-17 13:43:22
 */
function auth_login() {


	if( ! isset( $_SESSION[ SYSTEM_NAME . 'userid'] )   ) {
		$cx090 = explode("/", dirname($_SERVER['SCRIPT_NAME']) ) ;
		$current_now = $cx090[count($cx090)-1];

		$dest = ROOT . $_SERVER['REQUEST_URI'];
		$_SESSION['TO'] = $dest;  


		switch ($current_now) {
			case ADMIN :
			setLocation( DIRECTORY_ADMIN);
			break;


			default:
			setLocation(  DIRECTORY_PUBLIC.'login' );
			break;
		}

		exit();
	}  
	
	$flag = true;


	if( decrypt($_SESSION[ SYSTEM_NAME . 'type']) == 'admin' && dirname($_SERVER['SCRIPT_NAME']) . '/' !=  DIRECTORY_ADMIN ) 
		$flag = false;  

	
	
	if(!$flag ) {
		auth_use();
		exit();
	}


}







function auth_use() {

	if( isset( $_SESSION[ SYSTEM_NAME . 'userid'] )   ) {  


		switch (user_type()) {

			case 'admin':
			setLocation(DIRECTORY_ADMIN);
			break; 


			default:
		 		# code...
			break;
		} 

	}

}
	// get logged user type
function user_type() {
	return decrypt($_SESSION[SYSTEM_NAME . 'type']);
}



/* ======== extra for stafff  ==============*/


function aAccess( $request, $level ) { 
	$returnV = false;
	if(isset($_SESSION[SYSTEM_NAME.'authentication']) && isset($_SESSION[SYSTEM_NAME.'lock'])) {
		$auth = $_SESSION[SYSTEM_NAME.'authentication']; 
		if (isset($auth->$request ) && (decrypt($_SESSION[SYSTEM_NAME.'lock']) == 0 || $level === 4 )) {
			$a = (int) $auth->$request - $level;
			if(($auth->$request == 7 ||  $a == 0 || $a == 1 || $a == 2 || $a == 4 ) && $a != $level){
				$returnV = true;				
			} 
		} 
	}
	return $returnV; 
}









function show_error ($message) { 
	$message_return = "";
	if (!empty($message)) {
		$message_return = $message_return . "<div class = 'alert ";
		switch ($message[0]) {
			case 1: $message_return = $message_return .  "alert-success"; break;
			case 2: $message_return = $message_return .  "alert-info"; break;
			case 3: $message_return = $message_return .  "alert-warning"; break; 
			case 4: $message_return = $message_return .  "alert-danger"; break;
			default: $message_return = $message_return .  "hidden"; break;
		}
		$message_return = $message_return .  "' role='alert'>";
		switch ($message[0]) {
			case 1: $message_return = $message_return .  
			'<i style="margin-right: 2em;" class="fa fa-check-circle" aria-hidden="true"></i>'; break;
			case 2: $message_return = $message_return .  
			'<i style="margin-right: 2em;" class="fa fa-info-circle" aria-hidden="true"></i>'; break;
			case 3: $message_return = $message_return .  
			'<i style="margin-right: 2em;" class="fa fa-exclamation-triangle" aria-hidden="true"></i>'; break; 
			case 4: $message_return = $message_return . 
			'<i style="margin-right: 2em;" class="fa fa-exclamation-circle" aria-hidden="true"></i>'; break;				
			default: $message_return = $message_return .  ""; break;
		}
		$message_return = $message_return . "" . $message[1] . "" ;
		$message_return = $message_return .  '<a class="close" data-dismiss="alert" href="page-elements.html#" aria-hidden="true"></a></div>';
	}
	return $message_return;

}





function imageToString ( $path , $WIDTH  = 0, $HEIGHT = 0, $QUALITY  = 0) { 
	$type = strtolower(pathinfo($path, PATHINFO_EXTENSION) );
	try {
		if( !($type == 'png' || $type == 'jpg' || $type == 'jpeg' || $type == 'gif'  ) || !file_exists( $path) ){
			$path = '../assets/image/default/no.png';
			$type = pathinfo($path, PATHINFO_EXTENSION);
		} 
		if( !( $WIDTH  == 0 || $HEIGHT == 0 || $QUALITY == 0) ) {
			$DESTINATION_FOLDER = TEMP_DIR;  
			list($width_orig, $height_orig) = getimagesize($path);
			$ratio_orig = $width_orig/$height_orig;
			if ($WIDTH/$HEIGHT > $ratio_orig) {
				$WIDTH = $HEIGHT*$ratio_orig;
			} else {
				$HEIGHT = $WIDTH/$ratio_orig;
			}
			$filename = basename($path); 
			if ( $type  == "png") {
				$image = imagecreatefromstring(file_get_contents($path));
// $image = imagecreatefrompng($path);
			} else {
				$image = imagecreatefromjpeg($path);
			}
			$bg = imagecreatetruecolor($WIDTH, $HEIGHT);
			imagefill($bg, 0, 0, imagecolorallocate($bg, 255, 255, 255));
			imagealphablending($bg, TRUE);
			imagecopyresampled($bg, $image, 0, 0, 0, 0, $WIDTH, $HEIGHT, $width_orig, $height_orig);
			imagedestroy($image);
			imagejpeg($bg, $DESTINATION_FOLDER.$filename, $QUALITY);
			$bin_string_little = file_get_contents($DESTINATION_FOLDER.$filename); 
			if( file_exists($DESTINATION_FOLDER.$filename ) ){
				if(is_writable($DESTINATION_FOLDER.$filename )){
					unlink($DESTINATION_FOLDER.$filename);
				}
			}
			imagedestroy($bg);
			$base64 =   'data:image/' . $type . ';base64,' .  base64_encode($bin_string_little); 
		} else {
			$data = file_get_contents($path);
			$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		}
	} catch (Exception $e) { 
	}
	return $base64 ;
}

?>