<?php

/**
 * @Author: indran
 * @Date:   2018-10-17 16:49:19
 * @Last Modified by: mikey.zhaopeng
 * @Last Modified time: 2018-10-29 18:59:16
 */
?>


				</div>

<footer class="footer">
	<div class="container-fluid clearfix">
		<span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> Copyright © <?php echo THEME_OWN_BY; ?>
		<a href="<?php echo TERMS__CONDITIONS; ?>" target="_blank">read</a>. All rights reserved.</span>
		<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> 
		</span>
	</div>
</footer> 
</div> 
</div> 
</div> 


<script src="assets/js/popper.min.js"></script>  
<script src="assets/js/bootstrap-material-design.min.js"></script> 
<script src="assets/js/jquery.slimscroll.min.js"></script> 
<script src="assets/js/parsley.min.js"></script>
<script src="assets/js/lobibox.min.js"></script>  


<script src="admin/js/main.js"></script>



<script type="text/javascript">
	$(document).ready(function($) {
		$('body').bootstrapMaterialDesign();


		$("form.parsley").parsley({
			errorClass: 'has-danger',
			successClass: 'has-success',
			classHandler: function(ParsleyField) {
				return ParsleyField.$element.parents('.form-group');
			},
			errorsContainer: function(ParsleyField) {
				return ParsleyField.$element.parents('.form-group');
			},
			errorsWrapper: '<span class="invalid-feedback d-block">',
			errorTemplate: '<div></div>',
			trigger: 'change'
		});





	});
</script>

</body>

</html>
