<body>
<div class="col-md-12">&nbsp;</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<?php
					echo form_open('LogIn/autenticar');
				?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Ingrese Sus Datos</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Usuario</label>
									<?php
										$user = array(
											'name' => 'user',
											'id'	=> 'user_id',
											'maxlength'   => '100',
					              			'placeholder' => 'Usuario',
					              			'class'		=> 'form-control',
											);
										echo form_input($user);
									?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Contraseña</label>
									<?php
										$pass = array(
											'name' => 'pass',
											'id'	=> 'pass_id',
											'maxlength'   => '100',
					              			'placeholder' => 'Contraseña',
					              			'type'		=> 'password',
					              			'class'		=> 'form-control',
											);
										echo form_input($pass);
									?>
								</div>
							</div>
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
											    'content' => 'Validar'
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
			<div class="col-md-4"></div>
		</div>
	</div>
</div>
</body>
</html>