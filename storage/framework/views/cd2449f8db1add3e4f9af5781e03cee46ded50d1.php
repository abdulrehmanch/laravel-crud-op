<?php $__env->startSection('content'); ?>

<h1>Welcome Home</h1>
<p class="lead">C.R.U.D. Operations</p>
<hr>

<a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-info">View Contacts</a>
<a href="<?php echo e(route('tasks.create')); ?>" class="btn btn-primary">Add New Contact</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>