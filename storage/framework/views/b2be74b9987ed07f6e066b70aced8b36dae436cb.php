
<?php $__env->startSection('content'); ?>

<?php if(Auth::user() && Auth::user()->staff_id == "admin"): ?>

   <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3></h3>
				<p></p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form method="POST"  enctype="multipart/form-data" action="/events" id="eventForm">
                            <?php echo e(csrf_field()); ?>

                            
                            

                           <div class="container">
                            <div class="col-md-6 offset-md-3">
                              <h1>Add News or Event</h1>
                              <p>Please and the information in the field below. </p>
                              <hr>
                              <?php if($errors->any()): ?>
                              <div class="w-4/8 m-auto text-center">
                                  <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <li class="text-red-500 list-none">
                                      <?php echo e($error); ?>

                                  </li>
                                      
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
                              
                          <?php endif; ?>    
                              <label for="title"><b>Title</b></label>
                              <input type="text" placeholder="Enter title" name="title" id="title" >

                              <label for="title"><b>Body</b></label>
                              <input type="text" placeholder="Enter news body" name="body" id="body" >

                              
                              <label for="title"><b>Image</b></label></br>
                              <input type="file" name="image" id="image" >

                              
                                              
                              <button type="submit " class="registerbtn">Submit</button>
                            </div>
                           </div>
                          </form>
                    </div>
                </div>


			</div>
            <?php elseif(Auth::user()): ?>
            <div class="error-pagewrap">
                <div class="error-page-int">
                    <div class="text-center m-b-md custom-login">
                        <h3></h3>
                        <p></p>
                    </div>
                    <div class="content-error">
                        <div class="hpanel">
                            <div class="panel-body">
                                
                                   <div class="container">
                                    <div class="mt-20 col-md-6 offset-md-3">
                                      <h1  class="mt-20">Oops!</h1>
                                      <p class="mb-60"> Please login with an appropriate aacount to access this page.. </p>
                                      <hr>                                   
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <script> window.location.replace("/login"); </script>
<?php endif; ?>
			<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fajob\Documents\GitHub\yca\resources\views/events/create.blade.php ENDPATH**/ ?>