<?php include_once('includes/header.php') ?>
<?php
$db=new Database();
?>
<section>
	<div class="row-sm-10"  align="center">
	<div class="col-sm-6" align="left" >
	<form  action=""  method="post" data-parsley-validate  align="center" >
		<div class="form-group">
    <label for="depotname">Depot Name</label>
     </div>
    <select name="depotname" value="select" class="form-control" id="depotname" >
    <option value="Select" selected="selected" disabled="disabled">Select</option>
    <?php
    
       $sql="SELECT * FROM `depot` WHERE 1";
        
 
                $result=$db->display($sql);
                
              foreach ($result as $key => $value) {
              	  var_dump($value);
	
	              echo "<option value='$value[deponame]'>$value[deponame]</option>" ;
                    }
    
       
          ?>
  
  </div>
  
  </select>
<input type="submit" name="submit" value="Submit" onclick="frm2" align="center" >
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
        if (isset($_POST['depotname'])) {
         $dpname = $_POST['depotname'];



         $stmnt=" SELECT * FROM `stationmaster` where `deponame`= '$dpname' ";
        
        
         $details = $db->display($stmnt);
        }

        ?>

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


<td><a href="admin/stationmasterfulviewvol.php" id= <?php echo $value['stationmasterid']; ?>"  class="btn btn-sm btn-info "  > <i  class=" fa fa-eye"></i></a></td>
 <td><a href="admin/stationmasteredit_vol.php" id=<?php echo $value['stationmasterid']; ?>"   class="btn btn-sm btn-warning "  ><i class="far fa-edit"></i></a>     </td>
    </tr>



        <?php endforeach; ?>
      </tbody>
    </table>



    

  </div> 
</div>
</form>
<?php include_once('includes/footer.php') ?>