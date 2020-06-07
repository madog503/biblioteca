<?php 
require_once 'includes/head.php';
$b = search($db, $_POST['q']);
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
					<h1> Resultado de : <?=$_POST['q']?></h1>
					<?php require_once 'includes/template_libros.php'; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'includes/footer.php';?>