<?php 
require_once 'includes/head.php';
redic_f();
// funcion para obtener datos de el libro usando el id del get para conseguir el libro
$libro = book($db, $_GET['id']);
// si no hay resultados se redirecciona al index
// empty($libro) ? header('location: index.php'): '';
// funcion para las categorias
$categoria = Categorias($db,$_GET['id']);
// funcion para los autores 
$autor = Autores_libros($db,$_GET['id']);
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
					<div class="lb-inf">
						<h1><?=$libro['titulo'];?></h1>
						<hr>
						<div id="center-book" class="book-inner">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>
				</div>
				<?php require_once 'includes/libro-side.php'; ?>
			</div>
		</div>
	</div>
</div>
<?php require_once 'includes/footer.php';?>