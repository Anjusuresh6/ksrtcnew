<?php include_once('includes/header.php') ?>

<section>
	<div class="row">
		<div class="col">
			<form  action="" method="" data-parsley-validate >
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
    <input type="Date" class="form-control" id="purcase" name="purcase"   placeholder="Enter Bus No" required="Required"> 
  </div>

  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" id="age" name="age"   placeholder="Age" disabled="disabled" required="Required"> 
  </div>

  <div class="form-group">
    <label for="seat">No of Seats</label>
    <input type="number" class="form-control" id="seat" name="seat"   placeholder="Enter No of Seats" required="Required"> 
  </div>

  <div class="form-group">
    <label for="route">Route</label>
    <input type="text"  id="source" name="source"   placeholder="Enter Source" class="form-control" required="Required"> To
     <input type="text"  id="destination" name="destination"   placeholder="Destination" class="form-control" required="Required">

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
    <input type="text" class="form-control" id="producer" name="producer"   placeholder="Enter Producer Name" required="Required"> 
  </div>


 <div class="form-group">
    <label for="distance">Coverage Distace</label>
    <input type="number" class="form-control" id="distance" name="distance"   placeholder="Enter Coverage Distance" required="Required"> 
  </div>

   <div class="form-group">
    <label for="amount">Collection Amount</label>
    <input type="number" class="form-control" id="amount" name="amount"   placeholder="Enter Collection Amount" required="Required"> 
  </div>
  </div>
  <input type="submit" name="submit" value="Submit" onclick="action">
</form>
			
		</div>
		
	</div>
</section>


<?php include_once('includes/footer.php') ?>