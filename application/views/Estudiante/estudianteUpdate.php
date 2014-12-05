<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4"></div>
				<div class="col-md-4">
				<h4>Ingrese un Estudiante.</h4>
					<?php
						echo form_open('Estudiantes/update');
					?>
					<div class="form-group">
						<?php
							$id = array(
				              'name'        => 'id',
				              'id'          => 'id',
				              'maxlength'   => '100',
				              'placeholder' => 'id',
				              'class'		=> 'form-control',
				              'value'		=> $estudiante->id,
				              'type'		=>'hidden'
				            );
				            echo form_input($id);
			            ?>
					</div>
					<div class="form-group">
						<?php
							$nombre = array(
				              'name'        => 'nombre',
				              'id'          => 'nombre_id',
				              'maxlength'   => '100',
				              'placeholder' => 'Nombre',
				              'class'		=> 'form-control',
				              'value'		=> $estudiante->nombre
				            );
				            echo form_input($nombre);
			            ?>
					</div>
					<div class="form-group">
						<?php
							$primerapellido = array(
				              'name'        => 'primerapellido',
				              'id'          => 'primerapellido_id',
				              'maxlength'   => '100',
				              'placeholder' => 'apellido1',
				              'class'		=> 'form-control',
				              'value'		=> $estudiante->primerapellido
				            );
				            echo form_input($primerapellido);
			            ?>
					</div>
					<div class="form-group">
						<?php
							$segundoapellido = array(
				              'name'        => 'segundoapellido',
				              'id'          => 'segundoapellido_id',
				              'maxlength'   => '100',
				              'placeholder' => 'apellido2',
				              'class'		=> 'form-control',
				              'value'		=> $estudiante->segundoapellido
				            );
				            echo form_input($segundoapellido);
			            ?>
					</div>
					<div class="form-group">
						<?php
							$cedula = array(
				              'name'        => 'cedula',
				              'id'          => 'cedula_id',
				              'maxlength'   => '100',
				              'placeholder' => 'Cedula',
				              'class'		=> 'form-control',
				              'value'		=> $estudiante->cedula
				            );
				            echo form_input($cedula);
			            ?>
					</div>
					<div class="form-group">
						<?php
							$dropdown_Carrera = "<select class=\"btn btn-default dropdown-toggle\" name=\"cursos\">";
								foreach ($carreras as $data) {
									$dropdown_Carrera.="<option value=\"$data->id\">$data->nombre</option>";
								}
								$dropdown_Carrera.="</select>";
							echo $dropdown_Carrera;
						?>
					</div>
					<div class="form-group">
						<?php
							$ingles = array(
				              'name'        => 'ingles',
				              'id'          => 'ingles_id',
				              'maxlength'   => '100',
				              'placeholder' => 'Nivel de Ingles',
				              'class'		=> 'form-control',
				              'value'		=> $estudiante->nivelingles
				            );
				            echo form_input($ingles);
			            ?>
					</div>
					<div class="form-group">
					<div class="form-group">
						<?php
							$file = array(
				              'name'        => 'foto',
				              'id'          => 'foto_id',
				              'type'		=>'file'
				            );
				            echo form_input($file);
			            ?>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<div class="form-group">
									<?php
										$data = array(
										    'name' => 'button',
										    'id' => 'button_id',
										    'type' => 'submit',
										    'class' => 'btn btn-default',
										    'content' => 'Actualizar'
										);
										echo form_button($data);
									?>
								</div>
							</div>
							<div class="col-md-4"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>