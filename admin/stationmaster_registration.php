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
    <select name="typeofusr" value="select" class="form-control" id="typeofusr">
		 	<option value="Select" selected="selected" disabled="disabled">Select</option>
		  	<option value="Admin"> Admin</option>
		  	<option value="Station Master">Station Master</option>
		  	<option value="Inspector"> Inspector</option>
		  	<option value="Driver"> Driver</option>
		  	<option value="Conductor">Conductor</option>
         </select> 
  </div>


<div class="form-group">
    <label for="joiningyear">Joining Year</label>
   <input type="date" name="joiningyr" id="joiningyr" class="form-control" required="Required">
  </div>

  <div class="form-group">
    <label for="joiningyear">Contact No</label>
   <input type="text" name="contactno" id="contactno" class="form-control " placeholder="Enter ContactNo" required="Required">
  </div>

<div class="form-group">
    <label for="joiningyear">User Name</label>
   <input type="text" name="usrnmae" id="usrnmae" class="form-control" placeholder="Enter UserName" required="Required">
  </div>

<div class="form-group">
    <label for="joiningyear">Password</label>
   <input type="Password" name="pswd" id="pswd" class="form-control" placeholder="Enter Password" required="Required">
  </div>
		
	<div class="form-group">
    <label for="joiningyear">Confirm Password</label>
   <input type="Password" name="cnfrmpswd" id="cnfrmpswd" class="form-control" placeholder="Confirm Password" required="Required">
  </div>	 
    
		
		 <div class="form-group">
    
   <input type="submit" name="submit" id="submit" value="Submit">
  </div>  
			
		
		</form>
	</div>
	
</div>

</section>

<?php include_once('includes/footer.php') ?>