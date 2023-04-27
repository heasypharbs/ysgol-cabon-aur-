
<?php $__env->startSection('content'); ?>


 <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3></h3>
				<p></p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form method="POST"  action="<?php echo e(route("Registrations")); ?>" id="loginForm">
                            <?php echo e(csrf_field()); ?>

                            
                            <div class="row">
                                
                            <div class="container">
                            <div class="col-md-6 offset-md-3">
                              <h1>Register</h1>
                              
                              <p>Please fill in this form to create an account.</p>
                              <hr>
                              <?php if(Session::has('error')): ?>
                                <div class="alert alert-danger">
                                       <?php echo e(Session::get('error')); ?>

                                       <?php
                                           Session::forget('error');
                                       ?>
                                       </div>
                                  <?php endif; ?>
                                       <?php if(Session::has('success')): ?>
                                    <div class="alert alert-success">
                                       <?php echo e(Session::get('success')); ?>

                                       <?php
                                           Session::forget('success');
                                       ?>
                        
                                       </div>
                        
                               <?php endif; ?>
                              <label for="email"><b>Name</b></label>
                              <input type="text" placeholder="Enter name" name="name" id="name" required>

                              <label for="email"><b>Email</b></label>
                              <input type="text" placeholder="Enter Email" name="email" id="email" required>

                              <label for="email"><b>Staff ID</b></label>
                              <input type="text" placeholder="Enter Staff ID" name="staff_id" id="staff_id" required>
                          
                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="password" id="password" required>
                          
                              
                              <hr>
                          
                              <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                              <button type="submit" class="registerbtn">Register</button>
                            </div>
                          
                            <div class="container signin">
                              <p>Already have an account? <a href="/login">Sign in</a>.</p>
                            </div>
                        </div>
                          </form>
                    </div>
                </div>
			</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aur\resources\views/register.blade.php ENDPATH**/ ?>