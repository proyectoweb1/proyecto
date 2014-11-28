<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-3">
				<h4>Ingrese un Estudiante.</h4>
					<?php
						echo form_open('Estudiantes/create');
					?>
					<div class="form-group">
						<?php
							$nombre = array(
				              'name'        => 'nombre',
				              'id'          => 'nombre_id',
				              'maxlength'   => '100',
				              'placeholder' => 'Nombre',
				              'class'		=> 'form-control',
				            );
				            echo form_input($nombre);
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
				            );
				            echo form_input($ingles);
			            ?>
					</div>
					<div class="form-group">
					<div class="col-md-12">
						<div class="row">
							<label>Cualidades</label>
						</div>
					</div>
						<?php
							$cualidades="";
							foreach ($cualidad as $cuali) {
								$cualidades .="<input type=\"checkbox\"  id=\"$cuali->id\" name=\"cualidad[]\" value=\"$cuali->id\" />$cuali->nombre";
							}
							echo $cualidades;
						?>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<div class="row">
								<label>Proyectos</label>
							</div>
						</div>
						<?php
							$proyecto="";
							foreach ($proyectos as $pro) {
								$proyecto .="<input type=\"checkbox\"  id=\"$pro->id\" name=\"proyecto[]\" value=\"$pro->id\" />$pro->descripcion";
							}
							echo $proyecto;
						?>
					</div>
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
										    'content' => 'Guardar'
										);
										echo form_button($data);
									?>
								</div>
							</div>
							<div class="col-md-4"></div>
						</div>
					</div>
				</div>
				<div class="col-md-9">
				<h4>Estudiantes actuales.</h4>
					<?php
					$table = "<table id=\"table\" class=\"table table-bordered\"><tr><th>Nombre Estudiante</th><th>Editar</th><th>Eliminar</th></tr>";
						foreach ($estudiantes as $data) {
							$table.= "<tr><td>".$data->nombre."</td>";
							$table.="<td><button type=\"button\" data-id=\"$data->id\" class=\"editar btn btn-default\">Editar</button></td><td><button type=\"button\" data-id=\"$data->id\" class=\"eliminar btn btn-default\">Eliminar</button></td></tr>";
						}
						$table.="</table>";
					echo $table;
					?>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">

		$( ".editar" ).click(function() {
	    	var id = $(this).data('id');
			window.location.href = "toupdate/?uid=" + id;
		});

		$(".eliminar").click(function(){
			var id = $(this).data('id');
			$.ajax({
					type:'POST',
					url:'<?php echo base_url("index.php/Estudiantes/delete");?>',
					async: true,
					data: { id : id },
					complete:function () {
						window.location.href = '<?php echo base_url("index.php/Estudiantes/index");?>';
                        }, error:function (error) {
                        	alert("Error al eliminar"+id);
                        }

            });
		});
	</script>
</body>