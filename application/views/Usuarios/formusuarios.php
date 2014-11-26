<!DOCTYPE html>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-3">
			<div class="form-group">
			<?php
					echo form_open('Usuario/Control');
					$cedula = array(
		              'name'        => 'cedula',
		              'id'          => 'cedula',
		              'maxlength'   => '100',
		              'placeholder' => 'Cedula',
		              'class'		=> 'form-control',
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
		            );
				echo form_input($username);
				?>
			</div>		
			<div class="form-group">
				<?php
				$password = array(
		              'name'        => 'password',
		              'id'          => 'password',
		              'maxlength'   => '100',
		              'placeholder' => 'Password',
		              'class'		=> 'form-control',
		            );
			echo form_input($password);
				?>
			</div>	
			<div class="form-group">
				<?php
				$dropdown_role = "<select class=\"btn btn-default dropdown-toggle\" name=\"roles\">";
					foreach ($role as $rol) {
						$dropdown_role.="<option value=\"$rol->id\">$rol->nombre</option>";
					}
					$dropdown_role.="</select>";
				echo $dropdown_role;
				?>
			</div>
			<div class="form-group">
				<?php
					$data = array(
					    'name' => 'button',
					    'id' => 'button',
					    'type' => 'submit',
					    'name' => 'agregar',
					    'class' => 'btn btn-default',
					    'content' => 'Guardar'
					);
					echo form_button($data);
				?>
			</div>
				
			</div>
			<div class="col-md-9">
				<?php
					$table = "<table id=\"table\" class=\"table table-bordered\"><tr><th>Cedula</th><th>Nombre</th><th>Primer Apellido</th><th>Segundo Apellido</th><th>Nombre Usuario</th><th>ID Role</th><th>Editar</th><th>Eliminar</th></tr>";
						foreach ($name as $nom) {
							$roll;
							if ($nom->role_id == 1) {
								$roll = "Administrador";
							}elseif ($nom->role_id == 2) {
								$roll = "Director de carrera";
							}else{
								$roll = "Profesor";
							}
							$table.= "<tr><td>".$nom->cedula."</td><td>".$nom->nombre."</td><td>".$nom->primerapellido."</td><td>".$nom->segundoapellido."</td><td>".$nom->nombreusuario."</td><td>".$roll."</td>";
							$table.="<td><button type=\"submit\" name=\"editar\" value=\"$nom->id\" class=\"editar btn btn-default\">Editar</button></td><td>      <button type=\"submit\" name=\"eliminar\" value=\"$nom->id\" class=\"eliminar btn btn-default\">Eliminar</button></td></tr>";
						}
						$table.="</table>";	
					echo $table;
				?>				
			</div>	
		</div>
	</div>
</div>
</body>