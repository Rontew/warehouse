<?php $__env->startSection('content'); ?>
<div class="container">
<form action="http://localhost/www2016/public/products" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<span>Name:</span>
<label class="sr-only" for="exampleInputPassword3">Name:</label>
    <input type="text" class="form-control" name="name" value="name"><br>
<label class="sr-only" for="exampleInputPassword3"></label>
<span>Price:</span>
<input type="text" class="form-control" name="price" value="price"><br>
<span>Kategory:</span>
      <select class="form-control" name="kategory">
        <option>Lamput</option>
        <option>Liinavaatteet</option>
        <option>Astiat</option>
        <option>Hotelli electroniikka</option>
      </select>
<label>Picture</label>    
<input type="file" class="form-control" name="picture" value="picture">
 <button type="submit" class="btn btn-primary" value="Create">Create</button>
</form>
<div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>