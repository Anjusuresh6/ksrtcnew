<?php include_once('includes/header.php') ?>
<?php
$db=new Database();
// $link=mysql_connect("localhost","root","","ksrtc") or die("not connected");
// $db=mysql_select_db("ksrtc",$link) or die("no database");
if (isset($_POST['submit'])) {			
	// var_dump($_POST);
	$dname = $_POST['depotname'];
	$cno = $_POST['cno'];
	$dusrname = $_POST['dusrname'];
	$dpswd = $_POST['dpswd'];
	$cnfrm = $_POST['cnfrm'];
	// $noofbus = $_POST['noofbus'];
	// $location = $_POST['location'];
	// $emp = $_POST['emp'];
	// $lngstsrc = $_POST['lngstroutesrc'];
	// $lngstdes = $_POST['lngstroutedes'];
	// $tpsrc = $_POST['tpsrc'];
	// $tpdes = $_POST['tpdes'];
	// $income = $_POST['income'];
	$submit=$_POST['submit'];
 

 $stmnt ='insert into depot (depotname,contactno,depousername,depopswd,conformpswd) values( :deponame,:contactno,:depousername,:depopswd,:conformpswd)';
	     
	     	     $params=array(
                 
       
         ':deponame'        =>  $dname,
         ':contactno'       =>  $cno,
         ':depousername'    =>  $dusrname,
         ':depopswd'        =>  $dpswd,
         ':conformpswd'     =>  $cnfrm,
         // ':noofbuses'       =>  $noofbus,
         // ':location'        =>  $location,
         // ':noofemployees'   =>  $emp,
         // ':longestroute'    =>  $lngstsrc.$lngstdes,
         // ':topcollection'   =>  $tpsrc.$tpdes,
         // ':income'          =>  $income,
         
	     	);
 
	         $istrue=$db->execute_query($stmnt,$params);
	                 if($istrue){
	         	                  $message= 'added';
	         	                  echo "hai";
	                            }
	                 else{
	         	          $message=$istrue;
	         	           echo "hlo";	
	                     }
	     

}

?>


<section>
	<div class="row-sm-10"  align="center">
		<div class="col-sm-6" align="left" >
			<form  action=""  method="post" data-parsley-validate   >
				<div class="form-group">
					<label for="depotname" >Depot Name</label>

						<input type="text" name="depotname" class="form-control" id="depotname" placeholder="Enter Depot Name" required="Required">
					
					
				</div>
				<div class="form-group">
    <label for="contactno">Contact No</label>
    <input type="text" class="form-control" id="cno" name="cno"   placeholder="Enter Contact No" required="Required"> 
  </div>

  <div class="form-group">
    <label for="durname">Depot UserName</label>
    <input type="text" class="form-control" id="dusrname" name="dusrname"   placeholder="Enter Depot UserName" required="Required"> 
  </div>

 

  <div class="form-group">
    <label for="dpswd">Depot Password</label>
    <input type="password" class="form-control" id="dpswd" name="dpswd"   placeholder="Enter Depot Password" required="Required"> 
  </div>

  <div class="form-group">
    <label for="cnfrm">Confirm Password</label>
    <input type="password" class="form-control" id="cnfrm" name="cnfrm"   placeholder="Confirm Password" required="Required"> 
  </div>

  <!-- <div class="form-group"> -->
    <!-- <label for="noofbus">No Of Buses</label> -->
    <!-- <input type="text" class="form-control" id="noofbus" name="noofbus"   placeholder="Enter No of Buses" required="Required">  -->
  <!-- </div> -->
  <!-- <div class="form-group"> -->
    <!-- <label for="location">Location</label> -->
    <!-- <input type="text" class="form-control" id="location" name="location"   placeholder="Enter Location" required="Required">  -->
  <!-- </div> -->

  <!-- <div class="form-group"> -->
    <!-- <label for="emp">No of Employees</label>
    <input type="text" class="form-control" id="emp" name="emp"   placeholder="Enter No of Employees" required="Required"> 
  </div>
  <div class="form-group">
    <label for="lngstroute">Longest Route</label>
    <div class="row">
    	<div class="col-sm-6">
    <input type="text" class="form-control" id="lngstroutesrc" name="lngstroutesrc"   placeholder="Enter Source" required="Required"> 
</div>
<div class="col-sm-6">
     <input type="text" class="form-control" id="lngstroutedes" name="lngstroutedes"   placeholder="Enter Destination" required="Required"> 
  </div>
</div>
  <div class="form-group">
   <label for="top">Top Collection Route</label>
   <div class="row">
      
  	<div class="col-sm-6">
  		

  		<input type="text" class="form-control" id="tpsrc" name="tpsrc"   placeholder="Enter Source" required="Required"> 
  	</div>
  	<div class="col-sm-6">
  		<input type="text" class="form-control" id="tpdes" name="tpdes"   placeholder="Enter Destination" required="Required"> 
  	</div>
  	
  </div>

   
    
    
     
  


  <div class="form-group">
    <label for="income">Income</label>
    <input type="number" data-parsley-minlength="6" data-parsley-error-message="Income should be in digits"   class="form-control" id="income" name="income"   placeholder="Enter Income" required="Required"> 
  </div> -->
  <input type="submit" name="submit" value="Submit" onclick="action">
           </form >

          
   </div>
</section>
<?php include_once('includes/footer.php') ?>