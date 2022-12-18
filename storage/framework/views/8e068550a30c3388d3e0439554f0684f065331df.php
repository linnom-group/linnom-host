<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employee details</h>
<form action="<?php echo e(url('search')); ?>" method="get">
<input type="search" name="search">
<input type="submit" value="Search">
</form>
<table border="1px">
<tr>
    <td>Code</td>
    <td>Name</td>
    <td>Last name</td>
    <td>Documrnt</td>
    <td>Action</td>
    <td>update</td>
</tr>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employees): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($employees->code); ?></td>
    <td><?php echo e($employees->first_name); ?></td>
    <td><?php echo e($employees->last_name); ?></td>
    <td><a href="Documents/<?php echo e($employees->documents); ?>"><?php echo e($employees->documents); ?></a></td>
    <td><a href="<?php echo e(url('delete',$employees->id)); ?>">delete</a></td>
    <td><a href="<?php echo e(url('update',$employees->id)); ?>">Edit</a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</body>
</html><?php /**PATH C:\xampp\htdocs\flexismartshares\resources\views/employees/employee-details.blade.php ENDPATH**/ ?>