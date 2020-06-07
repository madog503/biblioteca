<?php 
require_once 'includes/head.php';
redic_f();
$b = libros($db);
?>
<!-- contenido principal -->
<div class="main-box">
	<!-- barra lateral -->
	<?php require_once 'includes/side.php';?>
	<div class="content-box">
		<?php require_once 'includes/nav.php';?>
		<div class="content">
			<div class="main-in-content">
				<div class="principal">
					<?php require_once 'includes/template_libros.php'; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'includes/footer.php';?>
