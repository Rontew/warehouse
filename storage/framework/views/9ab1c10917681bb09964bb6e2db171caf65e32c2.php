<?php $__env->startSection('title'); ?>
    <?php echo e($products -> name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="container">
      <br>
      <br>
        <table class="table table-striped">
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>kategory</th>
            <th>Picture</th>
            <th>Edit</th>
          </tr>
            <tr>
              <td>
                <?php echo e($products->name); ?>

              </td>
              <td>
                <?php echo e($products->price); ?>

              </td>
              <td>
                <?php echo e($products->kategory); ?>

              </td>
               <td>
                <img src="<?php echo e($products->picture); ?>" class="img-thumbnail" title="Default picture">
              </td>
              <td>
                <a href="http://localhost/www2016/public/products/<?php echo e($products->id); ?>/edit"><button type="button" class="btn btn-success btn-sm">Edit</button>
              </td>
            </tr>
        </table> 

      </div>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>