<?php $__env->startSection('content'); ?>

<div class="container">
  <canvas id="myChart" width="400" height="400"></canvas>
  <input id="date" type="text" size="8">
  <input id="taulu" type="text" size="8">
<?php echo Form::model($products,[
	'method' =>'patch',
	'route' => ['products.update', $products->id]
]); ?>


<span>Name:</span>
<label class="sr-only" >Name:</label>
    <input type="text" class="form-control" name="name" value="<?php echo e($products->name); ?>"><br>
<label class="sr-only"></label>
<span>Price:</span>
<input type="text" class="form-control" name="price" value="<?php echo e($products->price); ?>"><br>
<button type="submit" class="btn btn-primary" value="Edit">Edit</button>
<?php echo e(Form::close()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>