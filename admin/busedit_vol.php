<?php include_once('includes/header.php') ?>
<?php $db=new Database(); ?>

<?php
if (isset($_POST['submit'])) {			
	//var_dump($_POST);
	$bid = $_POST['bid'];
	
	$type = $_POST['type'];
	$pdate = $_POST['pdate'];
	$seat= $_POST['seat'];
	$dname = $_POST['dname'];
	$pusr = $_POST['pusr'];
	
	$submit=$_POST['submit'];

	$params = array(




'type' => $type,
'purchasedate' => $pdate,
'noofseats' => $seat,
'depot' => $dname,
'producer' => $pusr,

	);
 



	$istrue = updateTable( 'bus', $params, ' busid =' . $bid  , $db);  
	                 if($istrue){
	         	                  $message= 'Updated Successfully';
	         	                  echo "Updated Successfully";
	         	                   //setLocation("admin/stationmasteredit.php");
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

  setLocation("admin/busedit.php");
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


    $stmnt=' SELECT * FROM `bus` WHERE busid = :id ';

    $params = array (
      ':id' => $id
    );


    $details = $db->display($stmnt,  $params );

    if (isset(  $details[0])) {
     $details =   $details[0];
   }  else {

    setLocation("admin/busedit.php");
  }

  ?>












<section>
	<div class="row-sm-10"  align="center">
		<div class="col-sm-6" align="left" >




<form action="" method="post" >

  <table class="table table-hover w-50">
    <tbody>
      <tr>
        <th scope="col">Bus Id</th>
        <td>
          <input type="text" name="bid" id="bid" value="<?php echo  $details['busid']; ?>" disabled="disabled">
          <input type="hidden" name="bid" value="<?php echo  $details['busid']; ?>">
          <?php echo $_POST['bid'] ?>
        </td>
      </tr>
      <tr>
        <th scope="col">Type</th>
        <td><div class="form-group">
                
                <input type="text" name="type" id="type" class="form-control" value="<?php echo  $details['type']; ?>"  >
                <input type="hidden" name="type" value="<?php echo  $details['type']; ?>"> 
            </div>
        </td>
      </tr>
      <tr>
        <th scope="col">Purchase Date</th>
        <td><div class="form-group">
                <input type="date" name="pdate" id="pdate" class="form-control" value="<?php echo  $details['purchasedate']; ?>" disabled="disabled" >
                <input type="hidden" name="pdate" value="<?php echo  $details['purchasedate']; ?>">
            </div>
        </td>
      </tr>
      <tr>
        <th scope="col">No of Seats</th>
        <td><div class="form-group">
                <input type="text" name="seat" id="seat" class="form-control" value="<?php echo  $details['noofseats']; ?>" disabled="disabled">
                <input type="hidden" name="seat" value="<?php echo  $details['noofseats']; ?>">
            </div>
        </td>
      </tr>
     
      <tr>
        <th scope="col">Depot Name</th>
        <td><div class="form-group">
                <input type="text" name="dname" id="dname" class="form-control" value="<?php echo  $details['depot']; ?>"  >
                <!-- <input type="hidden" name="dname" value="<?php echo  $details['depot']; ?>"> -->
            </div>
        </td>
      </tr>
      <tr>
        <th scope="col">Producer</th>
        <td><div class="form-group">
                <input type="text" name="pusr" id="pusr" class="form-control" value="<?php echo  $details['producer']; ?>" disabled="disabled" >
                <input type="hidden" name="pusr" value="<?php echo  $details['producer']; ?>">
            </div>
        </td>
      </tr>

      <tr>

        
      </tbody>
</table>
<input type="submit" name="submit" value="Update" onclick="action">
</form>




</div> 
</div>
</section>



