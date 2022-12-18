<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h2>Update</h2>

<form action="<?php echo e(url('update',$employee->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
<input type="text" name="first_name" value="<?php echo e($employee->first_name); ?>" placeholder="name"><br>
<input type="text" name="last_name" value="<?php echo e($employee->last_name); ?>" placeholder="last name"><br>
<input type="text" name="code" value="<?php echo e($employee->code); ?>" placeholder="code"><br>
<a href="/Documents/<?php echo e($employee->documents); ?>"><?php echo e($employee->documents); ?></a>
<input type="file" name="file" ><br>
<input type="submit" value="submiit">
        </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\flexismartshares\resources\views/employees/update-page.blade.php ENDPATH**/ ?>