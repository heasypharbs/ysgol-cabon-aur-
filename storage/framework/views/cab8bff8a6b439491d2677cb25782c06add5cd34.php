
<?php $__env->startSection('content'); ?>


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
                        <form method="POST"  enctype="multipart/form-data" action="/events/<?php echo e($event->id); ?>" >
                           <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                            

                           <div class="container">
                            <div class="col-md-6 offset-md-3">
                              <h1>Update News or Event</h1>
                              <p>Please add the information in the field below. </p>
                              <hr>
                             
                              <label for="title"><b>Title</b></label>
                              <input type="text"  vlaue="<?php echo e($event->title); ?>">

                              <label for="title"><b>Body</b></label>
                              <input type="text"  vlaue="<?php echo e($event->body); ?>"  >

                              
                              <hr>
                                                       
                              <button type="submit" class="registerbtn">Update</button>
                            </div>
                           </div>
                          </form>
                    </div>
                </div>
			</div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aur\resources\views/events/edit.blade.php ENDPATH**/ ?>