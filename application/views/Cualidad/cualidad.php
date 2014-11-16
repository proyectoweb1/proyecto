<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-3">
				<h4>Ingrese una cualidad.</h4>
					<?php
						echo form_open('Cualidad/Create');
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
				<h4>Cualidades actuales.</h4>
					<?php
					$table = "<table id=\"table\" class=\"table table-bordered\"><tr><th>Nombre Cualidad</th><th>Editar</th><th>Eliminar</th></tr>";
						foreach ($cualidad as $data) {
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
					url:'http://localhost:81/proyecto/index.php/Cualidad/delete',
					async: true,
					data: { id : id },
					complete:function () {
						window.location.href = "http://localhost:81/proyecto/index.php/Cualidad/";
						
                        }, error:function (error) {
                        	alert("Error al eliminar"+id);
                        }

            });
		});
	</script>
</body>