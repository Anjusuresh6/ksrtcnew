<?php include_once('includes/header.php') ?>
<?php include_once('includes/header.php') ?>
<?php
$db=new Database();
?>
<?php
if (isset($_POST['submit'])) {	
	$deponame = $_POST['depotname'];
 $stmnt=" SELECT * FROM `depot` where `depotname`= '$deponame' ";
        
         $details = $db->display($stmnt);
        
        foreach ($details as $key => $value){
        	$usrname= $value['depousername'];
        	$pswd=$value['depopswd'];
        }

	//var_dump($_POST);
	

	$name = $_POST['name'];
	$type = $_POST['typeofusr'];
	$yr = $_POST['joiningyr'];
	$no = $_POST['contactno'];
	$submit=$_POST['submit'];
 

 $stmnt ='insert into stationmaster (name,type,joiningyear,contactno,depotname,depotusename,depotpswd) values( :name,:type,:yr,:no,:deponame,:usrname,:pswd)';
	     
	     	     $params=array(
                 
          ':deponame'   =>  $deponame,
         ':name'        =>  $name,
         ':type'       =>  $type,
         ':yr'    =>  $yr,
         
         ':no'     =>  $no,
          ':usrname'       =>  $usrname,
          ':pswd'        =>  $pswd,
          
         // ':longestroute'    =>  $lngstsrc.$lngstdes,
         // ':topcollection'   =>  $tpsrc.$tpdes,
         // ':income'          =>  $income,
         
	     	);
 
	         $istrue=$db->execute_query($stmnt,$params);
	                 if($istrue){
	         	                  $message= 'added';
	         	                  echo "Successfully Added";
	                            }
	                 else{
	         	          $message=$istrue;
	         	           echo "Error";	
	                     }
	     

}

?>

<section>
	<div class="row-sm-10"  align="center">
		<div class="col-sm-6" align="left" >


<form action="" method="post">
	
<div class="form-group">
    <label for="depotname">Depot Name</label>

    <select name="depotname" value="select" class="form-control" id="depotname" OnChange="this.form.submit()">
    

     <option value="Select" selected="selected" disabled="disabled">Select</option>
    <?php
    
       $sql="SELECT * FROM `depot` WHERE 1";
        
 
                $result=$db->display($sql);
                
              foreach ($result as $key => $value) {
              	   
	
	               //echo "<option value='$value[deponame]'>$value[deponame]</option>" ;

									
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
  
</form>


<?php 


if (isset($_POST['depotname'])) {
	$dpname = $_POST['depotname'];


 
    $stmnt=" SELECT * FROM `depot` where `depotname`= '$dpname' ";
        
         $details = $db->display($stmnt);
        
        foreach ($details as $key => $value){
        	$usrname= $value['depousername'];
        	$pswd=$value['depopswd'];

       }








}



?>


<form  action=""  method="post" data-parsley-validate   >

<input type="hidden" name="depotname" value="<?php if(isset($_POST['depotname'])) {echo $_POST['depotname'];} ?>">


 <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name"   placeholder="Enter Name" required="Required"> 
  </div>

  <div class="form-group">
    <label for="usertype">User Type</label>
    <select name="typeofusr" value="select" class="form-control" id="typeofusr" disabled="disabled">
		 	<option value="Station Master">Station Master</option>
		  	
         </select> 
         <input type="hidden" name="typeofusr" value="Station Master">
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
    
   <input type="submit" name="submit" id="submit" value="Submit" onclick="action">
  </div>  
			
		
		</form>
	</div>

</div>

</section>

<?php include_once('includes/footer.php') ?>