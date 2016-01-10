<?php $__env->startSection('content'); ?>

<h1>Contacts</h1>
<p class="lead">Contact List.</p>

<hr>
<?php foreach($tasks as $task): ?>
    <h3>Name: <?php echo e($task->name); ?></h3>
    <p> User Name: <?php echo e($task->username); ?></p>
    <p> Email:   <?php echo e($task->email); ?></p>
    <p> Address: <?php echo e($task->address); ?></p>
    <p> Likes:   <?php echo e($task->likes); ?></p>
    <p> Gender:  <?php echo e($task->gender); ?></p>
    
    <p>
        <a href="<?php echo e(route('crud.tasks.show', $task->id)); ?>" class="btn btn-info">View Contact</a>
        <a href="<?php echo e(route('crud.tasks.edit', $task->id)); ?>" class="btn btn-primary">Edit Contact</a>
    </p>
    
    <hr>
<?php endforeach; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('crud.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>