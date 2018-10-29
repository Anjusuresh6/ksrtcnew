<?php include_once('includes/header.php') ?>
<?php
$db=new Database();
// $link=mysql_connect("localhost","root","","ksrtc") or die("not connected");
// $db=mysql_select_db("ksrtc",$link) or die("no database");
if (isset($_POST['submit'])) {			
	//var_dump($_POST);
	$busid = $_POST['busno'];
	$bustype = $_POST['bustype'];
	$purchase = $_POST['purchase'];
	$seat = $_POST['seat'];
	$depot = $_POST['depot'];
	$producer = $_POST['producer'];
	$submit=$_POST['submit'];
 

 $stmnt ='insert into bus (busid,type,purchasedate,noofseats,depot,producer) values( :busid,:type,:purchasedate,:noofseats,:depot,:producer)';
	     
	     	     $params=array(
                 
       
         ':busid'        =>  $busid,
         ':type'       =>  $bustype,
         ':purchasedate'    =>  $purchase,
         
         ':noofseats'     =>  $seat,
          ':depot'       =>  $depot,
          ':producer'        =>  $producer,
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
			<form  action="" method="POST" data-parsley-validate >
				 <div class="form-group">
                <label for="busno">Bus No</label>
                          <input type="text" class="form-control" id="busno" name="busno"   placeholder="Enter Bus No" required="Required"> 
               </div>
          <div class="form-group">
           <label for="type">Type</label>
               <select name="bustype" value="select" class="form-control" id="bustype">
			<option value="Select" selected="selected" disabled="disabled">Select</option>
		  	<option value="ordinary">Ordinary</option>
		  	<option value="superfast">Super Fast</option>
		  	<option value="superdeluxe">Super Deluxe</option>
		  	<option value="venad">Venad</option>
		  	<option value="towntotown">Town to Town</option>
         </select>
</div>
<div class="form-group">
    <label for="purchase">Purchase Date</label>
    <input type="Date" class="form-control" id="purcase" name="purchase"   placeholder="Enter Bus No" required="Required"> 
  </div>
 <!--  <?php
     $age=POST['purchase'].value-date;
     echo $age;
  ?> -->

 <!--  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" id="age" name="age"   placeholder="Age" disabled="disabled" required="Required"> 
  </div> -->

  <div class="form-group">
    <label for="seat">No of Seats</label>
    <input type="number" class="form-control" id="seat" name="seat"   placeholder="Enter No of Seats" required="Required"> 
  </div>

  <!-- <div class="form-group">
    <label for="route">Route</label>
    <input type="text"  id="source" name="source"   placeholder="Enter Source" class="form-control" required="Required"> To
     <input type="text"  id="destination" name="destination"   placeholder="Destination" class="form-control" required="Required">
 -->
     <div class="form-group">
    <label for="depotname">Depot Name</label>
    <select name="depot" value="select" class="form-control"  name="depotname" id="depotname" required="Required">
			<option value="Select" selected="selected" disabled="disabled">Select</option>
		  	<option value="Mallappally">Mallappally</option>
		  	<option value="Erumely">Erumely</option>
		  	<option value="Ponkunnam">Ponkunnam</option>
		  	<option value="Kottayam">Kottayam</option>
		  	<option value="Triuvalla">Tiruvalla</option>
         </select>
  </div>
    

     <div class="form-group">
    <label for="producer">Producer</label>
   <select name="producer" value="select" class="form-control"  name="producer" id="prducer" required="Required">
			<option value="Select" selected="selected" disabled="disabled">Select</option>
		  	<option value="Ashok Leyland">Ashok Leyland</option>
		  	<option value="Tata">Tata</option>
		  	<!-- <option value="Ponkunnam">Ponkunnam</option>
		  	<option value="Kottayam">Kottayam</option>
		  	<option value="Triuvalla">Tiruvalla</option> -->
         </select>
  </div>


<!--  <div class="form-group">
    <label for="distance">Coverage Distace</label>
    <input type="number" class="form-control" id="distance" name="distance"   placeholder="Enter Coverage Distance" required="Required"> 
  </div>

   <div class="form-group">
    <label for="amount">Collection Amount</label>
    <input type="number" class="form-control" id="amount" name="amount"   placeholder="Enter Collection Amount" required="Required"> 
  </div> -->
  </div>
  <input type="submit" name="submit" value="Submit" onclick="action">
</form>
			
		</div>
		
	</div>
</section>


<?php include_once('includes/footer.php') ?>