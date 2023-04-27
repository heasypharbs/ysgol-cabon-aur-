<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css "/>

<?php $__env->startSection('content'); ?>



<div class="all-title-box">
    <div class="container text-center">
        <h1>Blog</h1>
    </div>
</div>

<div id="overviews" class="section wb">
    <div class="container">
        
        <hr class="invis"> 


        <?php if(Auth::user()): ?>
            
   
            <div class="pt-20">
                <a
                    href="events/create"
                    class="border-b-2 pb-2 border-dotted italic text-grey-500">
                    Add News or Event &rarr;
                </a>

            </div>

            <div class="pt-80">
                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                    Logout
                </a>    
                <form id="frm-logout" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>

            </div>
    <?php endif; ?>
        <div class="row"> 
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            
        
            <div class="col-lg-4 col-md-6 col-12 mt-3">
                <div class="blog-item">
                    
                    <div class="image-blog">
                        <img src="<?php echo e(asset('uploads/'.$event->image_path)); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="meta-info-blog">
                        <span><i class="fa fa-calendar"></i> <a href="#"><?php echo e($event->created_at); ?></a> </span>
             
                    </div>
                    <div class="blog-title">
                        <h2><a href="<?php echo e(route('events.shows', $event->id)); ?>" title=""><?php echo e($event->title); ?></a></h2>
                    </div>
                    <div class="blog-desc">
                        <p class="text-justify"><?php echo e(Str::limit($event->body, 150)); ?> </p>

                       
                    </div>
                    <div class="blog-button ">

                        <div class="blog-button mb-3">
							<a class="hover-btn-new orange" href="<?php echo e(route('events.shows', $event->id)); ?>"><span>Read More<span></a>
						</div>
                            
                        <?php if(isset(Auth::user()->id) && Auth::user()->id == $event->user_id): ?>
                            
                      
                              <button class=" form-control">  <a class="border-b-2 pb-2 border-dotted italic text-green-500"
                                    href="<?php echo e(route('events.edits',$event->id)); ?>">
                                    Edit  &rarr;
                                </a></button>

                                <form class="pt-2" action="events/<?php echo e($event->id); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button class=" form-control  italic text-red-400" type="submit">
                                        Delete  &rarr;
                                    </button>

                                </form>
                        <?php endif; ?>
                        
                    </div>

                    
                </div>
            </div><!-- end col -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div><!-- end row -->

            <div class="theme-secondary mt-5">
                <?php echo $events->withQueryString()->links('pagination::bootstrap-5'); ?>

           </div>
    </div><!-- end container -->
   
</div><!-- end section -->

<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layouts.appHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aur\resources\views/events/index.blade.php ENDPATH**/ ?>