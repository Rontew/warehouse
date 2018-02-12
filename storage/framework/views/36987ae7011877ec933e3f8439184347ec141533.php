<?php $__env->startSection('content'); ?>

<div class="container">

<?php echo Form::model($user,[
	'method' =>'patch',
	'route' => ['user.update', $user->id]
]); ?>


<span>Name:</span>
<label class="sr-only" >Name:</label>
    <input type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>"><br>
<label class="sr-only"></label>
<span>Email:</span>
<input type="text" class="form-control" name="email" value="<?php echo e($user->email); ?>"><br>
<button type="submit" class="btn btn-primary" value="Edit">Edit</button>
<?php echo e(Form::close()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>