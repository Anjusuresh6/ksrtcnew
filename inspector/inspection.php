<?php include_once('includes/header.php') ?>
<?php
$db=new Database();

if (isset($_POST['submit'])) {      
   var_dump($_POST);
  $busno = $_POST['bno'];
  $name = $_POST['name'];
  $ticket = $_POST['ticket'];
  $dname = $_POST['dname'];
  $conductor = $_POST['conductor'];
  $time = $_POST['times'];
  $amount = $_POST['income'];
  $submit=$_POST['submit'];
 

 $stmnt ='insert into inspection (busno,name,nooftickets,drivername,conductorname,amount,times) values( :busno,:name,:ticket,:dname,:conductor,:amount,:times)';
       
             $params=array(
                 
       
         ':busno'        =>  $busno,
         ':name'       =>  $name,
         ':ticket'    =>  $ticket,
         ':dname'        =>  $dname,
         ':conductor'     =>  $conductor,
         ':times'       =>  $times,
         ':amount'        =>  $amount,
         // ':noofemployees'   =>  $emp,
         // ':longestroute'    =>  $lngstsrc.$lngstdes,
         // ':topcollection'   =>  $tpsrc.$tpdes,
         // ':income'          =>  $income,
         
        );
 
           $istrue=$db->execute_query($stmnt,$params);
                   if($istrue){
                              $message= 'added';
                              echo "Successfully added";
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
					<label for="name" > Name</label>

						<input type="text" name="name" class="form-control" id="name" placeholder="Enter  Name" required="Required">
					
					
				</div>
				<div class="form-group">
    <label for="busno">Bus No</label>
    <input type="text" class="form-control" id="bno" name="bno"   placeholder="Enter Bus No" required="Required"> 
  </div>

  <div class="form-group">
    <label for="dname">Driver Name</label>
    <input type="text" class="form-control" id="dname" name="dname"   placeholder="Enter Driver Name" required="Required"> 
  </div>

 

  <div class="form-group">
    <label for="conductor">Conductor Name</label>
    <input type="text" class="form-control" id="conductor" name="conductor"   placeholder="Enter Conductor Name" required="Required"> 
  </div>

  <div class="form-group">
    <label for="ticket">No of Tickets</label>
    <input type="text" class="form-control" id="ticket" name="ticket"   placeholder="Enter no of Tickets" required="Required"> 
  </div>

  <div class="form-group">
    <label for="income">Income</label>
    <input type="text" class="form-control" id="income" name="income"   placeholder="Enter Income" required="Required"> 
  </div>

<div class="form-group">
    <label for="ticket"> Time</label>
    <input type="time" class="form-control" id="times" name="times"   placeholder="Enter checking Time" required="Required"> 
  </div>


  
  <input type="submit" name="submit" value="Submit" onclick="action">
           </form >

          
   </div>
</section>
<?php include_once('includes/footer.php') ?>