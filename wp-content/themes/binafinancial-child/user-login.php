<?php 
/*
	Template Name: Login
*/
get_header();

?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		  <div class="signupForm">


            <div class="userLogin commonForm">          
			
					<h1>Login</h1>

                  <?php wp_login_form(); ?>
				 
            </div>			
			
			<!-- Register Form Ends -->
		</div>
	  </div>	
	</div>
</div>
<?php  get_footer(); ?>