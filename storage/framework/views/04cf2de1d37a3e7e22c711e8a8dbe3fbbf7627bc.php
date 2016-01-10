<?php $__env->startSection('content'); ?>

<h1>Welcome Home</h1>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, possimus, ullam? Deleniti dicta eaque facere, facilis in inventore mollitia officiis porro totam voluptatibus! Adipisci autem cumque enim explicabo, iusto sequi.</p>
<hr>

<a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-info">View Tasks</a>
<a href="<?php echo e(route('tasks.create')); ?>" class="btn btn-primary">Add New Task</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>