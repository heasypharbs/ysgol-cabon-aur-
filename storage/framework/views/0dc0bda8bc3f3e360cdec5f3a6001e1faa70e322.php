
<?php $__env->startSection('content'); ?>

<?php  
 // dd($event);
 //dd($event->title);
?>

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
                              <input type="text" id="title" name="title"  value="<?php echo e($event->title); ?>">

                              <label for="title"><b>Body</b></label>
                              <input type="text" id="body" name="body" value="<?php echo e($event->body); ?>"  >

                                
                              <label for="title"><b>Image</b></label></br>
                              <input type="file" name="image" id="image" value="<?php echo e($event->image); ?>" >
                              <hr>
                                                       
                              <button type="submit" class="registerbtn">Update</button>
                            </div>
                           </div>
                          </form>
                    </div>
                </div>
			</div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aur\resources\views/events/edits.blade.php ENDPATH**/ ?>