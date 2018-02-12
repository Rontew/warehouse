<?php $__env->startSection('title'); ?>
    <?php echo e($product -> name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<h1><?php echo e($product -> name); ?></h1>
<h2><?php echo e($product -> price); ?></h2>
<a hred="#">Edit</a><a hred="#">Delete</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>