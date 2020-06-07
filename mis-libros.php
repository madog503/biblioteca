<?php 
require_once 'includes/head.php';
redic_f();
$xl = mislibros($db, $_SESSION['user']['id']);
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
					<div class="libo">
						<div class="hibo">
							<span class="to">titulo</span>
							<span class="no">N° prestamo</span>
							<span class="fo">fecha prestamo</span>
						</div>
						<?php while($el = mysqli_fetch_assoc($xl)):?>
							<div class="ibo">
								<a href="./libro.php?id=<?= $el['idl']?>" class="tibo"><?=$el['titulo'];?></a>
								<span class="nibo"><?=$el['id'];?></span>
								<span class="fibo"><?=$el['fecha_prestamo'];?></span>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'includes/footer.php';?>
