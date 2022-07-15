
<?php $__env->startSection('content'); ?>
    <h1  class="has-text-centered is-size-4 has-text-weight-semibold">NURSING DEPARTMENT</h1>
   
   
    <form action="nursingstore" class="column is-half is-offset-3" method="post">
        <?php echo csrf_field(); ?>
           
        <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <h1 class="has-text-weight-bold has-text-danger"><?php echo e($message); ?></h1>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <textarea name="text" class="textarea" id="" value='<?php echo e(old('text')); ?>' cols="30" rows="10"></textarea>
        <button class="button is-fullwidth is-info mt-3">Send</button>
    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('department.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fpasa\doctor\resources\views/department/nursing.blade.php ENDPATH**/ ?>