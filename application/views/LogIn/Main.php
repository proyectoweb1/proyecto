<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Ingrese Sus Datos!</h3>
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
					              			'placeholder' => 'User Name',
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
					              			'placeholder' => 'Password',
					              			'class'		=> 'form-control',
											);
										echo form_input($pass);
									?>
								</div>
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