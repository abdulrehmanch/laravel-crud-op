<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>C.R.U.D</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Contacts</a>
    </div>
    <div class="nav navbar-nav navbar-right">
        <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
        <li><a href="<?php echo e(route('tasks.index')); ?>">Contacts</a></li>
    </div>
  </div>
</nav>

<main>
    <div class="container">
        <?php if(Session::has('flash_message')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('flash_message')); ?>

            </div>
        <?php endif; ?>
        
        <?php echo $__env->yieldContent('content'); ?>
    </div>

</main>

</body>
</html>