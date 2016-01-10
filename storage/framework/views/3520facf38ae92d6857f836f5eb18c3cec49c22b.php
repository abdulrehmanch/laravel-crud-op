<?php $__env->startSection('content'); ?>
<?php echo $__env->make('crud.partials.alerts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<h1>Editing "<?php echo e($task->name); ?>"</h1>
<p class="lead">Edit and save this contact below, or <a href="<?php echo e(route('crud.tasks.index')); ?>">go back to all contacts.</a></p>
<hr>


<?php echo Form::model($task, [
    'method' => 'PATCH',
    'route' => ['crud.tasks.update', $task->id]
]); ?>


<div class="form-group">
    <?php echo Form::label('name', 'Name:', ['class' => 'control-label']); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('username', 'User Name:', ['class' => 'control-label']); ?>

    <?php echo Form::text('username', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('email', 'Email:', ['class' => 'control-label']); ?>

    <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('address', 'Address:', ['class' => 'control-label']); ?>

    <?php echo Form::text('address', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('likes', 'What would you like?:', ['class' => 'control-label']); ?>

    <?php echo Form::select('likes', array('PK' => 'Pakistan', 'US' => 'USA', 'UK' => 'UK'), array(), array('multiple'));; ?>

</div>

<div class="form-group">
    <?php echo Form::label('gender', 'Gender:', ['class' => 'control-label']); ?>

    <?php echo Form::label('Male', 'Male:', ['class' => 'control-label']); ?>

    <?php echo Form::radio('gender', 'male', ['class' => 'form-control']); ?>

    <?php echo Form::label('Female', 'Female:', ['class' => 'control-label']); ?>

    <?php echo Form::radio('gender', 'female', ['class' => 'form-control']); ?>

</div>

<?php echo Form::submit('Update Contact', ['class' => 'btn btn-primary']); ?>


<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('crud.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>