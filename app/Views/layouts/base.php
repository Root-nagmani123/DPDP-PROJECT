<!doctype html>
<html class="no-js" lang="en">

<head>
   <?php echo view('layouts/header'); ?>
</head>

<body>

	<main id="main">				
   		<?= $this->renderSection("content");?>
	</main>
    <?php echo view('layouts/footer'); ?>

</body>

</html>