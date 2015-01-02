<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4"></div>
				<div class="col-md-4">
				<h4>Perfil de Estudiante.</h4>
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
						<h5>Nombre</h5>
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
						<h5>Apellido 1</h5>
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
						<h5>Apellido 2</h5>
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
						<h5>Cedula</h5>
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
						<h5>Carrera</h5>
						<?php
							$nombrecarrera = array(
				              'name'        => 'segundoapellido',
				              'id'          => 'segundoapellido_id',
				              'maxlength'   => '100',
				              'placeholder' => 'apellido2',
				              'class'		=> 'form-control',
				              'value'		=> $carreras->nombre
				            );
				            echo form_input($nombrecarrera);
			            ?>
					 </div>
					 <div class="form-group">
					 	<h5>Ingles</h5>
						<?php
							$ingles = array(
				              'name'        => 'nivelingles',
				              'id'          => 'nivelingles_id',
				              'maxlength'   => '100',
				              'placeholder' => 'ingles',
				              'class'		=> 'form-control',
				              'value'		=> $estudiante->nivelingles
				            );
				            echo form_input($ingles);
			            ?>
					 </div>
					     <div class="ver_perfil">
					    <div class="ver_cualidades">     
                       <div class="col-md-9">
                      <h4>Cualidades</h4>
                        <?php
                         $table = "<table id=\"table\" class=\"table table-bordered\"><tr><th>Cualidad</th></tr>";
                      foreach ($cualidad as $data) {
                       $table.= "<tr><td>".$data->nombre."</td>";
                      }
                    $table.="</table>";
                   echo $table;
                  ?>
                   </div>
                     </div>
						<div class="ver_proyectos">     
                       <div class="col-md-9">
                      <h4>Proyectos</h4>
                        <?php
                         $table = "<table id=\"table\" class=\"table table-bordered\"><tr><th>Descripcion</th></tr>";
                      foreach ($proyectos as $data) {
                       $table.= "<tr><td>".$data->descripcion."</td>";
                      }
                    $table.="</table>";
                   echo $table;
                  ?>
                   </div>
                     </div>
			    	</div>
			    	</div>
				</div>
			</div>
		</div>
	</div>
</body>