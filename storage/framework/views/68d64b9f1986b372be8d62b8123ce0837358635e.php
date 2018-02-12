<?php $__env->startSection('title'); ?>
    Luo uusi tuote
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<form action="http://localhost/www2016/public/products" method="POST">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
  Name: <input type="text" name="name" value="name"><br>
  Price: <input type="text" name="price" value="price"><br>
  <input type="submit" value="Create">
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>