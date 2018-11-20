<?php include_once('includes/header.php') ?>
<?php
$db=new Database();
if (isset($_POST['submit'])) {	
	// $deponame = $_POST['depotname'];
 //       $stmnt=" SELECT * FROM `depot` where `depotname`= '$deponame' ";
        
 //         $details = $db->display($stmnt);
        
 //        foreach ($details as $key => $value){
 //        	$id= $value['depoid'];
        	//$pswd=$value['depopswd'];
        //}


		
	//var_dump($_POST);
	$busid = $_POST['busno'];
	$bustype = $_POST['bustype'];
	$purchase = $_POST['purchase'];
	$seat = $_POST['seat'];
	$depot = $_POST['depotname'];
	$producer = $_POST['producer'];
	$submit=$_POST['submit'];
 

 $stmnt ='insert into bus (busid,type,purchasedate,noofseats,depot,producer,depoid) values( :busid,:type,:purchasedate,:noofseats,:depot,:producer,:depoid)';
	     
	     	     $params=array(
                 
       
         ':busid'        =>  $busid,
         ':type'       =>  $bustype,
         ':purchasedate'    =>  $purchase,
         
         ':noofseats'     =>  $seat,
          ':depot'       =>  $deponame,
          ':producer'        =>  $producer,
          ':depoid'   =>  $depoid,
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

            <form action="" method="post">
	
            <div class="form-group">
                  <label for="depotname">Depot Name</label>

                   <select name="depotname" value="select" class="form-control" id="depotname" OnChange="this.form.submit()">
    

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
  </form>


<?php 

if (isset($_POST['depotname'])) {
	$dpname = $_POST['depotname'];
$stmnt=" SELECT * FROM `depot` where `depotname`= '$dpname' ";
       $details = $db->display($stmnt);
        foreach ($details as $key => $value){
        	  $depoid= $value['depoid'];
        	
 }
}
?>

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
 
<div class="form-group">
    <label for="seat">No of Seats</label>
    <input type="number" class="form-control" id="seat" name="seat"   placeholder="Enter No of Seats" required="Required"> 
  </div>
<div class="form-group">
    <label for="producer">Producer</label>
   <select name="producer" value="select" class="form-control"  name="producer" id="prducer" required="Required">
			<option value="Select" selected="selected" disabled="disabled">Select</option>
		  	<option value="Ashok Leyland">Ashok Leyland</option>
		  	<option value="Tata">Tata</option>
		  	
     </select>
  </div>
  <input type="submit" name="submit" value="Submit" onclick="action">
</form>
</div>
</div>
</section>

<?php include_once('includes/footer.php') ?>