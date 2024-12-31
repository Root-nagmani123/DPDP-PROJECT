<!doctype html>
<html class="no-js" lang="en">

<head>
   <?php echo view('admin/layouts/header'); ?>
</head>

<body>

	<main id="main">				
   		<?= $this->renderSection("content");?>
	</main>
    <?php echo view('admin/layouts/footer'); ?>

</body>

</html>