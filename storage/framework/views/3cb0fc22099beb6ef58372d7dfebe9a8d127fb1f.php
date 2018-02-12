<?php $__env->startSection('title'); ?>
    <?php echo e($user -> name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="container">
      <br>
      <br>
        <table class="table table-striped">
          <tr>
            <th>Name</th>
            <th>Price</th>

          </tr>
            <tr>
              <td>
                <?php echo e($user->name); ?>

              </td>
              <td>
                <?php echo e($user->email); ?>

              </td>
            </tr>
        </table> 

      </div>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>