<?php $__env->startSection('content'); ?>

        <div class="container">
        	  <div class="jumbotron">
        	<h1><?php echo e(trans('greetings.Hello')); ?></h1>
        	<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off">
            Varaston tilanne
			</button>
			<br>
			<br>
			<a href="http://localhost/www2016/public/products/create"><button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off">
            Lisää varastoon
			</button>
            <a href="<?php echo e(url('/users')); ?>"><button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off">
            List users
            </button>

</div>

        </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>