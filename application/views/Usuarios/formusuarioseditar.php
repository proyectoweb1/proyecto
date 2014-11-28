<!DOCTYPE html>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-3">
			<div class="form-group">
			<?php
					echo form_open('Usuario/update');
					$cedula = array(
		              'name'        => 'cedula',
		              'id'          => 'cedula',
		              'maxlength'   => '100',
		              'placeholder' => 'Cedula',
		              'class'		=> 'form-control',
		              'value'	=>  $usuario->cedula
		            );
					echo form_input($cedula);
			?>
			</div>
			<div class="form-group">
				<?php
				$nombre = array(
		              'name'        => 'username',
		              'id'          => 'username',
		              'maxlength'   => '100',
		              'placeholder' => 'Nombre',
		              'class'		=> 'form-control',
		              'value'	=>  $usuario->nombre
		            );
					echo form_input($nombre);
				?>
			</div>			
			<div class="form-group">
				<?php
				$apellido = array(
		              'name'        => 'primerapellido',
		              'id'          => 'primerapellido',
		              'maxlength'   => '100',
		              'placeholder' => 'Primer apellido',
		              'class'		=> 'form-control',
		              'value'	=>  $usuario->primerapellido
		            );
					echo form_input($apellido);
				?>
			</div>
			<div class="form-group">
				<?php
				$segundoapellido = array(
		              'name'        => 'segundoapellido',
		              'id'          => 'segundoapellido',
		              'maxlength'   => '100',
		              'placeholder' => 'Segundo apellido',
		              'class'		=> 'form-control',
		              'value'	=>  $usuario->segundoapellido
		            );
				echo form_input($segundoapellido);
				?>
			</div>
			<div class="form-group">
				<?php
				$username = array(
		              'name'        => 'NickName',
		              'id'          => 'NickName',
		              'maxlength'   => '100',
		              'placeholder' => 'Nick name',
		              'class'		=> 'form-control',
		              'value'	=>  $usuario->nombreusuario
		            );
				echo form_input($username);
				?>
			</div>
			<?php
				$password = array(
		              'name'        => 'password',
		              'id'          => 'password',
		              'type'		=> 'password',
		              'maxlength'   => '100',
		              'placeholder' => 'Password',
		              'class'		=> 'form-control',
		              'value'	=>  $usuario->password
		            );
			echo form_input($password);
				?>		
			<div class="form-group">
				<?php
				// $dropdown_role = "<select class=\"btn btn-default dropdown-toggle\" name=\"roles\">";
				// 	foreach ($role as $rol) {
				// 		$dropdown_role.="<option value=\"$rol->id\">$rol->nombre</option>";
				// 	}
				// 	$dropdown_role.="</select>";
				// echo $dropdown_role;
				// ?>
			</div>
			<div class="form-group">
				<?php
					$data = array(
					    'name' => 'button',
					    'type' => 'submit',
					    'class' => 'btn btn-default',
					    'content' => 'Actualizar',
					     'value' => $usuario->id
					);
					echo form_button($data);
				?>
			</div>				
			</div>
			<div class="col-md-9">			
			</div>	
		</div>
	</div>
</div>
</div>
</body>