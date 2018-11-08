<?php

/**
 * @Author: indran
 * @Date:   2018-11-07 19:45:31
 * @Last Modified by:   indran
 * @Last Modified time: 2018-11-08 05:31:19
 */
include_once('includes/header.php') ?>

<?php

$id = 0;

if(isset($_GET['id'])){ 
	$id = $_GET['id'];
} 
if ($id == 0) {
	setLocation('admin/stationmasteredit.php');
}


?>
<?php
$db=new Database();
?> 


<section>
	<?php echo " SELECT * FROM tablename  WHERE id = $id "; ?>
</section>
<?php include_once('includes/footer.php') ?>