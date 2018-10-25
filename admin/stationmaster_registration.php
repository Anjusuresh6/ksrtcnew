<?php include_once('includes/header.php') ?>
<?php include_once('includes/header.php') ?>


<section>
	<div class="row-sm-10"  align="center">
		<div class="col-sm-6" align="left" >
			<form  action=""  method="post" data-parsley-validate   >




 <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name"   placeholder="Enter Name" required="Required"> 
  </div>

  <div class="form-group">
    <label for="usertype">User Type</label>
    <select name="typeofusr" value="select" class="form-control" id="typeofusr" disabled="disabled">
		 	<!-- \\<option value="Select" selected="selected" disabled="disabled">Select</option> -->
		  	<!-- <option value="Admin"> Admin</option> -->
		  	<option value="Station Master">Station Master</option>
		  	<!-- <option value="Inspector"> Inspector</option> -->
		  	<!-- <option value="Driver"> Driver</option> -->
		  	<!-- <option value="Conductor">Conductor</option> -->
         </select> 
  </div>


<div class="form-group">
    <label for="joiningyear">Joining Year</label>
   <input type="date" name="joiningyr" id="joiningyr" class="form-control" required="Required">
  </div>

  <div class="form-group">
    <label for="contactno">Contact No</label>
   <input type="text" name="contactno" id="contactno" class="form-control " placeholder="Enter ContactNo" required="Required">
  </div>

<div class="form-group">
    <label for="depotname">Depot Name</label>
    <select name="depotname" value="select" class="form-control" id="depotname">

    <?php
    $db=new Database();
       $sql="SELECT * FROM `depot` WHERE 1";
        
 
                $result=$db->display($sql);
                
              foreach ($result as $key => $value) {
              	  var_dump($value);
	
	              echo "<option value='$value[deponame]'>$value[deponame]</option>" ;
                    }
    
       
          ?>
  
  </div>
  
  </select>

<div class="form-group">
    <label for="Depot UserName">Depot UserName</label>
   <input type="text" name="dusrname" id="dusrname" class="form-control" readonly="readonly">
  </div>
		
	<div class="form-group">
    <label for="Depot Password">Depot Password</label>
   <input type="Password" name="dpswd" id="dpswd" class="form-control"  readonly="readonly">
  </div>	 
    
		
		 <div class="form-group">
    
   <input type="submit" name="submit" id="submit" value="Submit">
  </div>  
			
		
		</form>
	</div>

</div>

</section>

<?php include_once('includes/footer.php') ?>