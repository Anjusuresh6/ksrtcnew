<?php include_once('includes/header.php') ?>
<?php include_once('includes/header.php') ?>
<?php
$db=new Database();
?>

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
		 	<option value="Station Master">Station Master</option>
		  	
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
    <form method="post">
    <select name="depotname" value="select" class="form-control" id="depotname" OnChange="this.form.submit()">
    

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
  <?php 
  if (isset($_POST['submit']))
  {
  $dpname=POST['depotname'] ; 
   $stmnt=' SELECT * FROM `depot` where `depotname`= "$dpname" ';
        
         $details = $db->display($stmnt);
        
        foreach ($details as $key => $value){
        	$usrname= $value['depousername'];
        	$pswd=$value['depopswd'];

       }
  ?>
}
  </form>
</div>

 <div class="form-group">
    
   <input type="submit" name="submit" id="submit" value="Submit">
  </div>  
			
		
		</form>
	</div>

</div>

</section>

<?php include_once('includes/footer.php') ?>