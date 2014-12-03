<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-3">
					<?php
						echo form_open('Role/Create');
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
				<div class="col-md-9">
					<?php
					$table = "<table id=\"table\" class=\"table table-bordered\"><tr><th>Nombre</th><th>Editar</th><th>Eliminar</th></tr>";
						foreach ($name as $nom) {
							$table.= "<tr><td>".$nom->nombre."</td>";
							$table.="<td><button type=\"button\" data-id=\"$nom->id\" class=\"editar btn btn-default\">Editar</button></td><td><button type=\"button\" data-id=\"$nom->id\" class=\"eliminar btn btn-default\">Eliminar</button></td></tr>";
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
			    url: "<?php echo site_url('Role/delete'); ?>",
			    type: 'POST',
			    data: (id),
			    success: function(response) {
			    	alert("success"+id);
			    }
			});
		});
	</script>
</body>