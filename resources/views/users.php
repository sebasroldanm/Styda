<!DOCTYPE html>
<html>
<head>
	<title>Listado de Usuario</title>
</head>
<body>
	<h1><?php echo e($title) ?></h1>

	<?php foreach ($users as $user):?>
		<li><?php echo e($user) ?></li>
	<?php endforeach; ?>
</body>
</html>