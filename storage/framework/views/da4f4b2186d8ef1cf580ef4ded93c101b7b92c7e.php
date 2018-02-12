<?php $__env->startSection('content'); ?>



$users = DB::table('users')->count();

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>