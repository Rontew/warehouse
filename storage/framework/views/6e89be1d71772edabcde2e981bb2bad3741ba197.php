<?php $__env->startSection('title'); ?>
    moikka
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <?php foreach($users as $user): ?>
            <tr>
              <td>
                <?php echo e($user->email); ?>

              </td>
              
            </tr>
          <?php endforeach; ?>
        </table> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>