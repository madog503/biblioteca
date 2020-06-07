<?php 
require_once 'includes/head.php';
if ($_SESSION['user']['user'] != 'admin') {
	header('location: ../index.php');
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
					<h1>nuevo libro</h1>
					<div class="addbo">
						<form action="validaciones/addbook.php" method="POST">
							<input type="text" name="titulo" placeholder="Titulo" style="width: 70%;">
							<div class="intem">
								<input type="text" name="autor" placeholder="autor">
								<div class="icf">
									<i>?</i>
									<p class="info-lib">utiliza ( , ) para separar los autores</p>
								</div>
							</div>
							<div class="intem">
							<input type="text" name="categoria" placeholder="categoria">
							<div class="icf">
								<i>?</i>
								<p class="info-lib">utiliza ( , ) para separar las categorias</p>
							</div>
							</div>
							<input type="date" name="fecha">
							<div class="icf">
								<i>?</i>
								<p class="info-lib">ingresa la fecha en la que se publico el libro</p>
							</div>
							<textarea name="descripcion" placeholder="sinopsis"></textarea>
							<button>agregar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'includes/footer.php';?>
