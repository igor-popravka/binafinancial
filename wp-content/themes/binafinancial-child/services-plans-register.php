<?php 
/*
	Template Name: Services Plan Register
*/
get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		  <div class="signupForm">


            <div class="regLogin commonForm">          
			
					<h1>Sign Up</h1>


                     <?php 		
				$status = '';	
				function validateRegister($data)
				{
					$first_name = isset( $_POST['first_name'] )?$_POST['first_name']:''; 					
					$last_name = isset( $_POST['last_name'] )?$_POST['last_name']:''; 					
					$username = isset( $_POST['username'] )?$_POST['username']:''; 					
					$email = isset( $_POST['email'] )?$_POST['email']:''; 					
					$password = isset( $_POST['password'] )?$_POST['password']:''; 					
					$confirm_password = isset( $_POST['confirm_password'] )?$_POST['confirm_password']:''; 	

					if( $first_name == "" || $last_name == "" || $username == "" || $email == "" || $password == "" || $confirm_password == "" )
					{
						return new WP_Error( 'formerror', __( "Fill Form Data.", "my_textdomain" ) );
					}

					if (!filter_var($email, FILTER_VALIDATE_EMAIL))
					{
						return new WP_Error( 'email', __( "Email address is invalid.", "my_textdomain" ) );
					}

					if( strlen($password) < 8  )
					{
						return new WP_Error( 'email', __( "Password too short.", "my_textdomain" ) );
					}

					if( $password != $confirm_password )
					{
						return new WP_Error( 'email', __( "Password mismatch.", "my_textdomain" ) );
					}
					return false;
				}

				if( isset( $_POST['submit'] ) )
				{
					$first_name = isset( $_POST['first_name'] )?$_POST['first_name']:''; 					
					$last_name = isset( $_POST['last_name'] )?$_POST['last_name']:''; 					
					$username = isset( $_POST['username'] )?$_POST['username']:''; 					
					$email = isset( $_POST['email'] )?$_POST['email']:''; 					
					$password = isset( $_POST['password'] )?$_POST['password']:''; 					
					$confirm_password = isset( $_POST['confirm_password'] )?$_POST['confirm_password']:'';

					$status = validateRegister($_POST);
					if( $status == false )
					{

						$userdata = array(
						    'user_login'  =>  $username,
						    'user_email'  =>  $email,				 
						    'user_pass'   => $password,  
						    'first_name'   =>  $first_name,  
						    'last_name'   =>  $last_name,  
						    'role' => 'company_member',
						);

						$user_id = wp_insert_user( $userdata ) ;

						//On success						
						if ( ! is_wp_error( $user_id ) ) {
							wp_new_user_notification( $user_id ,NULL,'user');
							unset($_POST);
						   ?>
								<div class="alert alert-success">
								   Registration Successful.
								</div>
						   <?php
						}else{
							if( is_wp_error( $user_id ) ) {
								echo '<div class="alert alert-danger">';
							    	echo $user_id->get_error_message();
								echo '</div>';
							}
						}
					}
				}
			?>
			<?php 
				if( isset($status) )
				{
					if( is_wp_error( $status ) ) 
					{
					?>   
						<div class="alert alert-danger">
						  <?php echo $status->get_error_message(); ?>
						</div>
					<?php	
					}
				}
			?>
			<!-- Register Form starts-->
			<form action="" method="POST" class="regForm">

              <div class="et_pb_row">  
                <div class="et_pb_column et_pb_column_1_2">
			      <div class="form-group ">
			        <input required type="text" class="form-control" name="first_name" placeholder="First Name" value="<?php echo isset( $_POST['first_name'] )?$_POST['first_name']:''; ?>">
			      </div>
                </div>

               <div class="et_pb_column et_pb_column_1_2">
			     <div class="form-group ">			      
			       <input required type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?php echo isset( $_POST['last_name'] )?$_POST['last_name']:''; ?>">
			     </div>			  
			   </div>			   
			 </div>  

			   <div class="form-group ">			      
			     <input required type="text" class="form-control" name="username" placeholder="Username" value="<?php echo isset( $_POST['username'] )?$_POST['username']:''; ?>">
			   </div>
			   <div class="form-group ">			      
			     <input required type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo isset( $_POST['email'] )?$_POST['email']:''; ?>">
			   </div>
			   <div class="form-group ">			      
			     <input required type="password" class="form-control" name="password" placeholder="Password" value="" style="cursor: auto;">
			   </div>
			   <div class="form-group  ">			      
			   <input required type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" value="" style="cursor: auto;">
			   </div>			  
			   <input type="submit" class="button" name="submit" value="Register">
			</form>


				 
            </div>

			
			
			<!-- Register Form Ends -->
		</div>
	  </div>	
	</div>
</div>
<?php  get_footer(); ?>