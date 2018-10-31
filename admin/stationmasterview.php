<?php
include_once('includes/header.php'); ?>
<?php
$db=new Database();
$error='';

$message=array(
  null,
  null
);


?>





<div class="row">
  <div class="col-sm-12 ">



    <div class="page-header">
      <div class="h3 mb-3 bg-primary text-white"><h1>StationMaster Details</h1>
      </div>
    </div>


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
        </tr>
      </thead>
      
      <tbody>

        <?php


        $stmnt=' SELECT * FROM `stationmaster` ';
        


        $details = $db->display($stmnt);
        

        ?>

        <?php foreach ($details as $key => $value): ?>
   <tr>
        <td><?php echo $value['stationmasterid']; ?></td>
        <td><?php echo $value['name'];  ?></td>
        <td><?php echo $value['type']; ?></td>
        <td><?php echo $value['joiningyear']; ?></td>
        <td><?php echo $value['contactno']; ?></td>
        <td><?php echo $value['depotname']; ?></td>
         <td><?php echo $value['depotusename']; ?></td>
          <td><?php echo $value['depotpswd']; ?></td>


<td><a href="admin/stationmasterfulviewvol.php?id=<?php echo $value['stationmasterid']; ?>"  class="btn btn-sm btn-info "  > <i  class=" fa fa-eye"></i></a>
<td><a href="admin/stationmasteredit_vol.php?id=<?php echo $value['stationmasterid']; ?>"   class="btn btn-sm btn-warning "  ><i class="far fa-edit"></i></a>
      </td>
    </tr>



        <?php endforeach; ?>
      </tbody>
    </table>



    

  </div> 
</div>
<?php include_once('includes/footer.php'); ?>