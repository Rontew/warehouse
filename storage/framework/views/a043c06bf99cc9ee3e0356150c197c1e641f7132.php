<?php $__env->startSection('title'); ?>
moro
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="container">
      <br>
      <br>
        <table class="table table-striped">
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>

          </tr>
          <?php foreach($user as $user): ?>
           <tr> 
              <td>
                <?php echo e($user->name); ?>

              </td>
              <td>
                <?php echo e($user->email); ?>

               </td>
               <td>
                <?php echo e($user->account_type); ?>

              </td>


                <td>
                <a href="http://localhost/www2016/public/user/<?php echo e($user->id); ?>/edit"><button type="button" class="btn btn-success btn-sm">Edit</button>
              </td>

              <td>
                <?php echo Form::open([
                    'method' =>'delete',
                    'route' => ['user.destroy', $user->id]
                ]); ?>

                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                <?php echo e(Form::close('Delete')); ?>

              </td>




               </tr>
 <?php endforeach; ?>             
        </table> 


      </div>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>