<?php 
require_once 'includes/head.php';
$b = lica($db, $_GET['id']);
if (!$b) {
	header('location: ./index.php');
}
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
					<?php $cati = cat($db, $_GET['id']); ?>
					<h1> Libros de categoria: <?= $cati['Categoria'];?></h1>
					<?php require_once 'includes/template_libros.php'; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'includes/footer.php';?>