<?php

/**
 * @Author: indran
 * @Date:   2018-10-17 17:05:45
 * @Last Modified by:   indran
 * @Last Modified time: 2018-10-17 17:08:04
 */
?>




<?php 
$key = "404";
if (isset($_GET['key'])) {
	$key = $_GET['key'];
} 

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $key. " error"; ?></title>
</head>
<body>
	<p style="text-align: center; margin: 2rem auto; font-size: 2rem;">
		<?php echo $key. " error"; ?>
	</p>
</body>
</html>