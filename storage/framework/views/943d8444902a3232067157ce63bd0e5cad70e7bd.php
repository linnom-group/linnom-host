<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>
<body>
<h4>Register</h4>
<form action="<?php echo e(route('reg-user')); ?>" method="post"> 
  <?php if(Session::has('success')): ?>
  <span style="green"><?php echo e(Session::get('success')); ?></span>
  <?php endif; ?>

   <?php if(Session::has('fail')): ?>
  <span style="red"><?php echo e(Session::get('fail')); ?></span>
  <?php endif; ?>


  <?php echo csrf_field(); ?>
<input type="text" name="name" value="<?php echo e(old('name')); ?>" placeholder="Fullname"><br>
<span style="color: red;"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><span><br>
<input type="text" name=" email" value="<?php echo e(old('email')); ?>" placeholder="Email"><br>
<span style="color: red;"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><span><br>
<input type="password" name="password" placeholder="Password"><br>
<span style="color: red;"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><span><br>
<button type="submit">Register</button>
</form><br><br>
  <a href="login">Already Hace an Account</a>  
</body>
</html><?php /**PATH C:\xampp\htdocs\flexismartshares\resources\views/auth/register.blade.php ENDPATH**/ ?>