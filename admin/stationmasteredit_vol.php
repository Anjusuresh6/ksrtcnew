<?php include_once('includes/header.php') ?>
<?php include_once('includes/header.php') ?>
<?php $db=new Database(); ?>
<?php
if (isset($_POST['submit'])) {			
	//var_dump($_POST);
	$sid = $_POST['sid'];
	$name = $_POST['sname'];
	$type = $_POST['type'];
	$joining = $_POST['joining'];
	$cno = $_POST['cno'];
	$dname = $_POST['dname'];
	$dusr = $_POST['dusr'];
	$dpswd = $_POST['dpswd'];
	$submit=$_POST['submit'];

	$params = array(



'name' => $name,
'type' => $type,
'joiningyear' => $joining,
'contactno' => $cno,
'depotname' => $dname,
'depotusename' => $dname,
'depotpswd' => $dpswd
	);
 

 // echo $stmnt ='UPDATE `stationmaster` SET name =:sname,type=:type,joiningyear=:joining,contactno=:cno,depotname=:dname,depotusename=:dusr,depotpswd=:dpswd WHERE stationmasterid=:sid ';
	     
	//      	     $params=array(
                 
       
 //          ':sname'        =>  $name,
 //         ':type'       =>  $type,
 //         '  :joining'    =>  $joining,
         
 //              ':cno'     =>  $cno,
 //          ':dname'       =>  $dname,
 //           ':dusr'        =>  $dusr,
 //          ':dpswd'        =>  $dpswd,

 //         ':sid'        =>  $sid
 //         // ':noofemployees'   =>  $emp,
 //         // ':longestroute'    =>  $lngstsrc.$lngstdes,
 //         // ':topcollection'   =>  $tpsrc.$tpdes,
 //         // ':income'          =>  $income,
         
	//      	);
 
	//          $istrue=$db->execute_query($stmnt,$params);


	$istrue = updateTable( 'stationmaster', $params, ' stationmasterid =' . $sid  , $db); 
	                 if($istrue){
	         	                  $message= 'Updated Successfully';
	         	                  echo "Updated Successfully";
	         	                   setLocation("admin/stationmasteredit.php");
	                            }
	                 else{
	         	          $message=$istrue;
	         	           echo "Duplicate values";	
	                     }
	     

}

?>

<?php


$id = -1;
if (isset($_GET['id'])) {
  $id = $_GET['id'];

}


if (   $id == -1) {

  setLocation("admin/stationmasteredit.php");
}




include_once('includes/header.php');



$error='';

$message=array(
  null,
  null
);


?>




<div class="row">
  <div class="col-sm-12 px-3  bg-white ">



    <div class="page-header">
      <div class="h3 mb-3 bg-primary text-white" align="center"><h1> Edit Details</h1>
      </div>
    </div>




    <?php


    $stmnt=' SELECT * FROM `stationmaster` WHERE stationmasterid = :id ';

    $params = array (
      ':id' => $id
    );


    $details = $db->display($stmnt,  $params );

    if (isset(  $details[0])) {
     $details =   $details[0];
   }  else {

    setLocation("admin/stationmasteredit.php");
  }

  ?>












<section>
	<div class="row-sm-10"  align="center">
		<div class="col-sm-6" align="left" >




<form action="" method="post" >

  <table class="table table-hover w-50">
    <tbody>
      <tr>
        <th scope="col">Stationmaster Id</th>
        <td>
          <input type="text" name="sid" id="sid" value="<?php echo  $details['stationmasterid']; ?>" disabled="disabled">
          <input type="hidden" name="sid" value="<?php echo  $details['stationmasterid']; ?>">
        </td>
      </tr>
      <tr>
        <th scope="col">Name</th>
        <td><div class="form-group">
                
                <input type="text" name="sname" id="sname" class="form-control" value="<?php echo  $details['name']; ?>"  >
                <!-- <input type="hidden" name="sname" value="<?php echo  $details['name']; ?>"> -->
            </div>
        </td>
      </tr>
      <tr>
        <th scope="col">User Type</th>
        <td><div class="form-group">
                <input type="text" name="type" id="type" class="form-control" value="<?php echo  $details['type']; ?>" disabled="disabled" >
                <input type="hidden" name="type" value="<?php echo  $details['type']; ?>">
            </div>
        </td>
      </tr>
      <tr>
        <th scope="col">Joining Year</th>
        <td><div class="form-group">
                <input type="date" name="joining" id="joining" class="form-control" value="<?php echo  $details['joiningyear']; ?>" >
                <!-- <input type="hidden" name="joining" value="<?php echo  $details['joiningyear']; ?>"> -->
            </div>
        </td>
      </tr>
      <tr>
        <th scope="col">Contact No</th>
        <td><div class="form-group">
                <input type="text" name="cno" id="cno" class="form-control" value="<?php echo  $details['contactno']; ?>" >
                <!-- <input type="hidden" name="cno" value="<?php echo  $details['contactno']; ?>"> -->
            </div>
        </td>
      </tr>
      <tr>
        <th scope="col">Depot Name</th>
        <td><div class="form-group">
                <input type="text" name="dname" id="dname" class="form-control" value="<?php echo  $details['depotname']; ?>"  >
                <!-- <input type="hidden" name="dname" value="<?php echo  $details['depotname']; ?>"> -->
            </div>
        </td>
      </tr>
      <tr>
        <th scope="col">Depot UserName</th>
        <td><div class="form-group">
                <input type="text" name="dusr" id="dusr" class="form-control" value="<?php echo  $details['depotusename']; ?>" disabled="disabled" >
                <input type="hidden" name="dusr" value="<?php echo  $details['depotusename']; ?>">
            </div>
        </td>
      </tr>

      <tr>

        <th scope="col">Depot Password</th>
        <td><div class="form-group">
                <input type="text" name="dpswd" id="dpswd" class="form-control" value="<?php echo  $details['depotpswd']; ?>" disabled="disabled" >
                <input type="hidden" name="dpswd" value="<?php echo  $details['depotpswd']; ?>">
            </div>
        </td>
      </tr>
      </tbody>
</table>
<input type="submit" name="submit" value="Update" onclick="action">
</form>




</div> 
</div>
</section>

















<?php include_once('includes/footer.php'); ?>
