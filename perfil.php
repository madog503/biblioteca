<?php 
require_once 'includes/head.php';
redic_f();
?>
<!-- contenido principal -->
<div class="main-box">
	<?php if (isset($_SESSION['errores'])):?>
			<div class="fade-prom-log" id="errores">
				<i id="close" class="fas fa-times-circle btn-time"></i>
				<div class="inner-prom-log">
					<ol class="list-prom">
					<?php if(isset($_SESSION['errores'][0])):?>
							<li>
								<?= $_SESSION['errores'][0]; ?>
							</li>
						<?php endif; ?>	
						<?php if(isset($_SESSION['errores'][1])):?>
							<li>
								<?= $_SESSION['errores'][1]; ?>
							</li>
						<?php endif; ?>
						<?php if(isset($_SESSION['errores'][2])):?>
							<li>
								<?= $_SESSION['errores'][2]; ?>
							</li>
						<?php endif; ?>
						<?php if(isset($_SESSION['errores'][3])):?>
							<li>
								<?= $_SESSION['errores'][3]; ?>
							</li>
						<?php endif; ?>
						<?php if(isset($_SESSION['errores'][4])):?>
							<li>
								<?= $_SESSION['errores'][4]; ?>
							</li>
						<?php endif; ?>
					</ol>
				</div>
			</div>
		<?php endif; ?>
	<!-- barra lateral -->
	<?php require_once 'includes/side.php';?>
	<div class="content-box">
		<?php require_once 'includes/nav.php';?>
	 	<div class="main-content-box">
	 		<h2>Mi perfil</h2>				
			 	<div class="profile-box">
			 		<div class="my-profile">
	 					<legend>informacion general</legend>
			 			<form action="validaciones/actualizar-datos.php" method="POST">
							<label for="nombre">nombre</label>
							<div class="cont-d">
								<i class="fas fa-user-tag"></i>
								<input type="text" name="nombre" value="<?=$_SESSION['user']['nombre'];?>">	
							</div>
							<label for="apellido">apellido</label>
							<div class="cont-d">
								<i class="fas fa-user-tag"></i>
								<input type="text" name="apex" value="<?=$_SESSION['user']['apellido'];?>">	
							</div>
							<label for="user">usuario</label>
							<div class="cont-d">
								<i class="fas fa-user-tag"></i>
								<input type="text" name="user" value="<?=$_SESSION['user']['user'];?>">	
							</div>
							<label for="email">correo</label>
							<div class="cont-d">
								<i class="fas fa-user-tag"></i>
								<input type="email" name="email" value="<?=$_SESSION['user']['email'];?>">	
							</div>
							<label for="date">fecha de ingreso</label>
							<div class="cont-d disabled_date">
								<i class="fas fa-user-tag"></i>
								<input disabled="disabled"type="date" name="date" value="<?=$_SESSION['user']['fecha'];?>">	
							</div>
							<button>guardar</button>
						</form>
			 		</div>
			 		<div class="my-profile pass-content">
	 					<legend>cambiar contraseña</legend>
			 			<form action="validaciones/actualizar-pass.php" method="POST">
							<!-- <label for="cur">contraseña actual</label>
							<div class="cont-d">
								<i class="fas fa-user-tag"></i>
								<input type="password" name="cur" value="contraseña">
							</div> -->
							<label for="cur">nueva contraseña</label>
							<div class="cont-d">
								<i class="fas fa-user-tag"></i>
								<input type="password" name="nuv" id="inp">
								<i id="view">V</i>
							</div>
							<label for="cur">confirmar contraseña</label>
							<div class="cont-d">
								<i class="fas fa-user-tag"></i>
								<input type="password" name="con">
							</div>
							<button class="btn-pass">guardar</button>
						</form>
			 		</div>
			 	</div>
	 	</div>
	</div>
</div>
<?php require_once 'includes/footer.php';?>
