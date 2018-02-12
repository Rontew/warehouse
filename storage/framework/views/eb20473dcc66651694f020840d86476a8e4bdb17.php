<?php $__env->startSection('content'); ?>
<script>
var txt = $("#list option:selected").text();
</script>
    <div class="container">
      <span>Select the kategory</span>
      <select class="form-control" name="valinta" id="list">
        <?php foreach($products as $product): ?>
        <a href="http://localhost/www2016/public/products/<?php echo e($product->id); ?>/edit"><option>Lamput</option>
        <option>Liinavaatteet/pyyhkeet</option>
        <option>Astiat</option>
        <option>Wc-tarvikkeet</option>
        <option>Hotelli electroniikka</option>
        <?php endforeach; ?>
      </select>
      <br>
      <br>
        <table class="table table-striped">
          <tr>
            <th>Name</th>
            <th>Amount</th>
            <th>Kategory</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Show</th>
            <th>Create</th>
            <th>lisää</th>
          </tr>
          
         <?php foreach($products as $product): ?>
        


            <tr>
              <td>
                <?php echo e($product->name); ?>


              </td>
              <td>
                <?php echo e($product->price); ?>

              </td>
              <td>
                <?php echo e($product->kategory); ?>

              </td>
              <td>
                <a href="http://localhost/www2016/public/products/<?php echo e($product->id); ?>/edit"><button type="button" class="btn btn-success btn-sm">Edit</button>
              </td>
              <td>
                <?php echo Form::open([
                    'method' =>'delete',
                    'route' => ['products.destroy', $product->id]
                ]); ?>

                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                <?php echo e(Form::close('Delete')); ?>

              </td>

               <td>
                <a href="http://localhost/www2016/public/products/<?php echo e($product->id); ?>"><button type="button" class="btn btn-success btn-sm">Show</button>
              </td>

               <td>
                <a href="http://localhost/www2016/public/products/create"><button type="button" class="btn btn-success btn-sm">Create</button>
              </td>
              <td>
                
              <button type="button" class="btn btn-danger btn-sm">Lisää</button>
  
              </td>
            </tr>

          <?php endforeach; ?>
        </table> 
      </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>