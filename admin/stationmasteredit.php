<?php include_once('includes/header.php') ?>
<?php
$db=new Database();
?>
<?php
    if (isset($_POST['stationmasterid'])) 
 {

   $id = $_POST['stationmasterid'];
   $sql="DELETE FROM `stationmaster` WHERE `stationmaster`.`stationmasterid` = '$id'";

$db->execute_query($sql);
                   if($db){
                              $message= 'Successfully Deleted';
                              echo "Successfully Deleted";
                              }
}
?>
<section class="my-3">
	<div class="row-sm-10"  align="center">
   <div class="col-sm-6" align="left" >
     <form  action=""  method="post" data-parsley-validate  align="center" >
      <div class="form-group">
        <label for="depotname">Depot Name</label>

        <select name="depotname" value="select"  class="form-control" id="depotname" >
          <option value="Select" selected="selected" disabled="disabled">Select</option>
          <?php

          $sql="SELECT * FROM `depot` WHERE 1";


          $result=$db->display($sql);

          foreach ($result as $key => $value) {
            $meselected  = "";
            if (isset($_POST['depotname']))   {
              if( $_POST['depotname'] == $value['depotname']) {
                $meselected = " selected "; 
              }

            }


            echo "<option value='$value[depotname]'   $meselected>$value[depotname]</option>" ;
          }


          ?>

        </div>

      </select>
    </div>
    <div class="form-group">
     <input type="submit" name="submit" value="Submit" class="btn btn-info "  onclick="frm2" align="center" >

   </div>
 </form>
 <?php
 if (isset($_POST['depotname']))	
 {

  $dpname = $_POST['depotname'];

}
?>
</div>
</div>

</section>

<div class="row">
  <div class="col-sm-12 ">
    <form name="frm2"  method="post">
      <?php  if (isset($_POST['depotname'])): ?>


        <div class="page-header">
          <div class="h3 mb-3 bg-primary text-white"><h1>StationMaster Details</h1>
          </div>
        </div>

        <?php
        $dpname = $_POST['depotname'];



        $stmnt=" SELECT * FROM `stationmaster` where `depotname`= '$dpname' ";


        $details = $db->display($stmnt);


        ?>

        <?php if( $details ): ?>
          <div class="table-responsive">

            <table class="table table-hover bg-white">
              <thead>
                <tr>
                  <th scope="col">StationMaster Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">User Type</th>
                  <th scope="col">Joining Year</th>
                  <th scope="col">Contact No</th>
                  <th scope="col">Depot Name</th>
                  <th scope="col">Depot UserName</th>
                  <th scope="col">Depot Password</th>
                  <th scope="col" colspan="2">Action</th>
                </tr>
              </thead>

              <tbody>

                <?php foreach ($details as $key => $value): ?>
                  <tr>
                    <td> <?php echo $value['stationmasterid']; ?> </td>
                    <td><?php echo $value['name'];  ?></td>
                    <td><?php echo $value['type']; ?></td>
                    <td><?php echo $value['joiningyear']; ?></td>
                    <td><?php echo $value['contactno']; ?></td>
                    <td><?php echo $value['depotname']; ?></td>
                    <td><?php echo $value['depotusename']; ?></td>
                    <td><?php echo $value['depotpswd']; ?></td>


                    <td>
                      <form action="action" method="post">
                        <input type="hidden" value="<?php echo $value['stationmasterid']; ?>" name="stationmasterid">
                        <?php
                          // if (isset($_POST['stationmasterid'])) 
                          // {

                          //        $id = $_POST['stationmasterid'];

                          // }
                        ?>
                   <!--  <a href="admin/stationmasterfulviewvol.php?id=<?php echo $value['stationmasterid']; ?>" id= <?php echo $value['stationmasterid']; ?>"  class="btn btn-sm btn-info "><i class="fas fa-trash-alt"></i> -->
                      <button name="submit" class="btn btn-sm btn-info "<i class="fas fa-trash-alt" ></i>go</button>
                      </form>
                    </td>
                    <td><a href="admin/stationmasteredit_vol.php?id=<?php echo $value['stationmasterid']; ?>" id=<?php echo $value['stationmasterid']; ?>"   class="btn btn-sm btn-warning "  ><i class="far fa-edit"></i></a>     </td>
                  </tr>



                <?php endforeach; ?>
              </tbody>
            </table>

          </div>
          <?php else : ?>
            <div class="alert text-center alert-warning">
              <p>no data found</p>
            </div>

          <?php endif; ?>

        <?php endif; ?>



      </div> 
    </div>
  </form>
  <?php include_once('includes/footer.php') ?>