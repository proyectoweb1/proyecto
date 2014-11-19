<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="col-md-4"></div>
				<div class="col-md-4">
				<h4>Modifique la carrera.</h4>
					<?php
						echo form_open('Carrera/update');
					?>
					<div class="form-group">
						<?php
							$id = array(
				              'name'        => 'id',
				              'id'          => 'id',
				              'maxlength'   => '100',
				              'placeholder' => 'id',
				              'class'		=> 'form-control',
				              'type'		=> 'hidden',
				              'value'	=> $carreras->id
				            );
				            echo form_input($id);
			            ?>
					</div>
					<div class="form-group">
						<?php
							$codigo = array(
				              'name'        => 'nombre',
				              'id'          => 'nombre_id',
				              'maxlength'   => '100',
				              'placeholder' => 'Nombre',
				              'class'		=> 'form-control',
				              'value'	=> $carreras->codigo,
				            );
				            echo form_input($codigo);
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
				              'value'	=> $carreras->nombre,
				            );
				            echo form_input($nombre);
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