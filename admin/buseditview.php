
<?php

include_once('includes/header.php'); ?>
<?php
$db=new Database();
?>

<section>
	<div class="row-sm-10"  align="center">
		<div class="col-sm-6" align="left" >
			<form  action=""  method="post" data-parsley-validate   >
             <div class="form-group">
    <label for="depotname">Depot Name</label>
     </div>
    <select name="depotname" value="select" class="form-control" id="depotname" >
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
<input type="submit" name="submit" value="Submit" onclick="action" align="center">
			</form>
		</div>
	</div>
</section>
	 









<?php include_once('includes/footer.php'); ?>