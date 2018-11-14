<?php
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
	

	<div class="row-sm-10"  align="center">
   <div class="col-sm-6" align="left" >
     <form  action=""  method="post" data-parsley-validate  align="center" >
     	<?php echo " SELECT * FROM tablename  WHERE id = $id "; ?>
     	<div class="form-group">
     	</div>
     </form>
 </div>
</div>
</section>
<?php include_once('includes/footer.php') ?>