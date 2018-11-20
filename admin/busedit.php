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
     <div>
    <select name="depotname" value="select" class="form-control" id="depotname" >
    

                 <option value="Select" selected="selected" disabled="disabled">Select</option>
              <?php
    
                $sql="SELECT * FROM `depot` WHERE 1";
        
                $result=$db->display($sql);
                
              foreach ($result as $key => $value) {
              	 $name = $value['depotname'];
				  $selectedMe = "";
				if(isset($_POST['depotname']))
				if($_POST['depotname'] == $name )
					$selectedMe = "  selected ";
                   echo "<option value='$name'   $selectedMe>$name</option>";
									
				}
    ?>
       
 </select>
  </div>
          
  
  
  
 
<input type="submit" name="submit" value="Submit" onclick="action" align="center" a href="buseditview.php">
	</form>	
	</div>
    </div>
			
</section>



<div class="row">
  <div class="col-sm-12 ">
    <form name="frm2"  method="post">
      <?php  if (isset($_POST['depotname'])): ?>


        <div class="page-header">
          <div class="h3 mb-3 bg-primary text-white"><h1>Bus Details</h1>
          </div>
        </div>

        <?php
        $dpname = $_POST['depotname'];



        $stmnt=" SELECT * FROM `bus` where `depot`= '$dpname' ";


        $details = $db->display($stmnt);

        
        ?>

        <?php if( $details ): ?>
          <div class="table-responsive">

            <table class="table table-hover bg-white">
              <thead>
                <tr>
                  <th scope="col">Bus Id</th>
                  <th scope="col">Type</th>
                  <th scope="col">Purchase Date</th>
                  <th scope="col">Noof Seats</th>
                  <th scope="col">Depot</th>
                  <th scope="col">Producer</th>
                  <!-- <th scope="col">Age</th> -->
               
                  <th scope="col" colspan="2">Action</th>
                </tr>
              </thead>

              <tbody>

                <?php foreach ($details as $key => $value): ?>
                  <tr>
                    <td> <?php echo $value['busid']; ?> </td>
                    <td><?php echo $value['type'];  ?></td>
                    <td><?php echo $value['purchasedate']; ?></td>
                    <td><?php echo $value['noofseats']; ?></td>
                    <td><?php echo $value['depot']; ?></td>
                    <td><?php echo $value['producer']; ?></td>
                    <!-- <td><?php echo $value['age']; ?></td> -->
                    


                    <td>
                      <form action="action" method="post">
                        <input type="hidden" value="<?php echo $value['busid']; ?>" name="busid">
                        <?php
                          // if (isset($_POST['stationmasterid'])) 
                          // {

                          //        $id = $_POST['stationmasterid'];

                          // }
                        ?>
                   <!--  <a href="admin/stationmasterfulviewvol.php?id=<?php echo $value['busid']; ?>" id= <?php echo $value['busid']; ?>"  class="btn btn-sm btn-info "><i class="fas fa-trash-alt"></i> -->
                      <button name="submit" class="btn btn-sm btn-info "<i class="fas fa-trash-alt" ></i>go</button>
                      </form>
                    </td>
                    <td><a href="admin/busedit_vol.php?id=<?php echo $value['busid']; ?>" id=<?php echo $value['busid']; ?>"   class="btn btn-sm btn-warning "  ><i class="far fa-edit"></i></a>     </td>
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
