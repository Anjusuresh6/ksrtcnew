<?php include_once('includes/header.php') ?>
<?php $db=new Database(); ?>
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
        </td>
      </tr>
      <tr>
        <th scope="col">Type</th>
        <td><div class="form-group">
                
                <input type="text" name="type" id="type" class="form-control" value="<?php echo  $details['type']; ?>"  >
                <!-- <input type="hidden" name="sname" value="<?php echo  $details['name']; ?>"> -->
            </div>
        </td>
      </tr>
      <tr>
        <th scope="col">Purchase Date</th>
        <td><div class="form-group">
                <input type="text" name="pdate" id="pdate" class="form-control" value="<?php echo  $details['purchasedate']; ?>" disabled="disabled" >
                <input type="hidden" name="pdate" value="<?php echo  $details['puchasedate']; ?>">
            </div>
        </td>
      </tr>
      <tr>
        <th scope="col">No of Seats</th>
        <td><div class="form-group">
                <input type="text" name="seat" id="seat" class="form-control" value="<?php echo  $details['noofseats']; ?>" >
                <!-- <input type="hidden" name="joining" value="<?php echo  $details['noofseats']; ?>"> -->
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
                <input type="text" name="dname" id="dname" class="form-control" value="<?php echo  $details['depot']; ?>"  >
                <!-- <input type="hidden" name="dname" value="<?php echo  $details['depot']; ?>"> -->
            </div>
        </td>
      </tr>
      <tr>
        <th scope="col">Producer</th>
        <td><div class="form-group">
                <input type="text" name="pusr" id="pusr" class="form-control" value="<?php echo  $details['producer']; ?>" disabled="disabled" >
                <input type="hidden" name="dusr" value="<?php echo  $details['producer']; ?>">
            </div>
        </td>
      </tr>

      <tr>

        <th scope="col">Depot Id</th>
        <td><div class="form-group">
                <input type="text" name="dpid" id="dpid" class="form-control" value="<?php echo  $details['depoid']; ?>" disabled="disabled" >
                <input type="hidden" name="dpid" value="<?php echo  $details['depoid']; ?>">
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



