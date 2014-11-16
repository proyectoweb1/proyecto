<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="col-md-4"></div>
				<div class="col-md-4">
				<h4>Modifique el proyecto.</h4>
					<?php
						echo form_open('Proyecto/update');
					?>
					<div class="form-group">
						<?php
							$id = array(
				              'name'        => 'id',
				              'id'          => 'id',
				              'maxlength'   => '100',
				              'placeholder' => 'id del curso',
				              'class'		=> 'form-control',
				              'type'		=> 'hidden',
				              'value'		=> $proyecto->id
				            );
				            echo form_input($id);
			            ?>
					</div>
					<div class="form-group">
						<?php
						$dropdown_Cursos = "<select class=\"btn btn-default dropdown-toggle\" name=\"cursos\">";
							foreach ($curso as $cur) {
								$dropdown_Cursos.="<option value=\"$cur->id\">$cur->nombre</option>";
							}
							$dropdown_Cursos.="</select>";
						echo $dropdown_Cursos;
						?>
					</div>
					<div class="form-group">
						<?php
							$duracion = array(
				              'name'        => 'duracion',
				              'id'          => 'duracion_id',
				              'maxlength'   => '100',
				              'placeholder' => 'Duracion',
				              'class'		=> 'form-control',
				              'type'		=> 'time',
				              'value'		=> $proyecto->duracion
				            );
				            echo form_input($duracion);
			            ?>
					</div>
					<div class="form-group">
						<?php
							$descripcion = array(
				              'name'        => 'descripcion',
				              'id'          => 'descripcion_id',
				              'maxlength'   => '100',
				              'placeholder' => 'Descripcion del proyecto',
				              'class'		=> 'form-control',
				              'rows'		=>'4',
				              'value'		=> $proyecto->descripcion
				            );
				            echo form_textarea($descripcion);
			            ?>
					</div>
					<div class="form-group">
						<?php
							$fecha = array(
				              'name'        => 'fecha',
				              'id'          => 'fecha_id',
				              'maxlength'   => '100',
				              'placeholder' => 'Fecha',
				              'class'		=> 'form-control',
				              'type'		=> 'date',
				              'value'		=> $proyecto->fecha
				            );
				            echo form_input($fecha);
			            ?>
					</div>
					<div class="form-group">
						<?php
							$calificacion = array(
				              'name'        => 'calificacion',
				              'id'          => 'calificacion_id',
				              'maxlength'   => '100',
				              'placeholder' => 'Calificacion',
				              'class'		=> 'form-control',
				              'type'		=> 'number',
				              'value'		=> $proyecto->calificacion
				            );
				            echo form_input($calificacion);
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
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>
</body>