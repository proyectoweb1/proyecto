<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-3">
				<h4>Ingrese un curso.</h4>
					<?php
						echo form_open('Proyecto/Create');
					?>
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
				              'class'		=> 'form-control'
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
				              'rows'		=>'4'
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
				              'type'		=> 'date'
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
				              'type'		=> 'number'
				            );
				            echo form_input($calificacion);
			            ?>
					</div>
					<div class="form-group">
						<?php
							$tecnologias="";
							foreach ($tecnologia as $tecno) {
								$tecnologias .="<input type=\"checkbox\"  id=\"$tecno->id\" name=\"tecnologia[]\" value=\"$tecno->id\" />$tecno->nombre";
							}
							echo $tecnologias;
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
				<h4>Cursos actuales.</h4>
					<?php
					$table = "<table id=\"table\" class=\"table table-bordered\"><tr><th>Curso</th><th>Duracion</th><th>Descripcion</th><th>Fecha</th><th>Calificacion</th><th>Editar</th><th>Eliminar</th></tr>";
						foreach ($proyecto as $data) {
							$table.= "<tr><td>".$data->curso_id."</td><td>".$data->duracion."</td><td>".$data->descripcion."</td><td>".$data->fecha."</td><td>".$data->calificacion."</td>";
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
					url:'<?php echo base_url("index.php/Proyecto/delete");?>',
					async: true,
					data: { id : id },
					complete:function () {
						window.location.href = "<?php echo base_url('index.php/Proyecto/index');?>";

                        }, error:function (error) {
                        	alert("Error al eliminar"+id);
                        }

            });
		});
	</script>
</body>