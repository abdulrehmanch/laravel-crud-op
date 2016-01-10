<?php $__env->startSection('content'); ?>

<h3><?php echo e($task->name); ?></h3>
    <p><?php echo e($task->username); ?></p>
    <p><?php echo e($task->email); ?></p>
    <p><?php echo e($task->adderss); ?></p>
    <p><?php echo e($task->likes); ?></p>
    <p><?php echo e($task->gender); ?></p>
<p class="lead"><?php echo e($task->description); ?></p>
<hr>

<a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-info">Back to all contact</a>
<a href="<?php echo e(route('tasks.edit', $task->id)); ?>" class="btn btn-primary">Edit Contact</a>

<div class="col-md-6 text-right">
        <?php echo Form::open([
            'method' => 'DELETE',
            'route' => ['tasks.destroy', $task->id]
        ]); ?>

            <?php echo Form::submit('Delete this contact?', ['class' => 'btn btn-danger']); ?>

        <?php echo Form::close(); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>