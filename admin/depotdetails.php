<?php include_once('includes/header.php') ?>


<section>
	<div class="row">
		<div class="col">
			<form  action=""  method="post"    >
				<div class="form-group">
					<label for="depotname" >Depot Name</label>

						<input type="text" name="depotname" class="form-control" id="depotname" placeholder="Enter Depot Name">
					
					
				</div>
				<div class="form-group">
    <label for="contactno">Contact No</label>
    <input type="text" class="form-control" id="cno" name="cno"   placeholder="Enter Contact No"> 
  </div>

  <div class="form-group">
    <label for="durname">Depot UserName</label>
    <input type="text" class="form-control" id="dusrname" name="dusrname"   placeholder="Enter Depot UserName"> 
  </div>

  <div class="form-group">
    <label for="dpswd">Depot Pasword</label>
    <input type="password" class="form-control" id="dpswd" name="dpswd"   placeholder="Enter Depot Password"> 
  </div>

  <div class="form-group">
    <label for="cnfrm">Conform Password</label>
    <input type="password" class="form-control" id="cnfrm" name="cnfrm"   placeholder="Conform Password"> 
  </div>

  <div class="form-group">
    <label for="noofbus">No Of Buses</label>
    <input type="text" class="form-control" id="noofbus" name="noofbus"   placeholder="Enter No of Buses"> 
  </div>
  <div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" id="location" name="location"   placeholder="Enter Location"> 
  </div>

  <div class="form-group">
    <label for="emp">No of Employees</label>
    <input type="text" class="form-control" id="emp" name="emp"   placeholder="Enter No of Employees"> 
  </div>
  <div class="form-group">
    <label for="lngstroute">Longest Route</label>
    <input type="text" class="form-control" id="lngstroutesrc" name="lngstroutesrc"   placeholder="Enter Source"> To
     <input type="text" class="form-control" id="lngstroutedes" name="lngstroutedes"   placeholder="Enter Destination"> 
  </div>

   <div class="form-group">
    <label for="top">Top Collection Route</label>
    <input type="text" class="form-control" id="tpsrc" name="tpsrc"   placeholder="Enter Source"> To
     <input type="text" class="form-control" id="tpdes" name="tpdes"   placeholder="Enter Destination"> 
  </div>


  <div class="form-group">
    <label for="income">Income</label>
    <input type="text" class="form-control" id="income" name="income"   placeholder="Enter Income"> 
  </div>
  <input type="button" name="submit" value="Submit">
           </form >

          
   </div>
</section>
<?php include_once('includes/footer.php') ?>