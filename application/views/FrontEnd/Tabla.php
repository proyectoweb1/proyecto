<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/bootstrap.css");?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("js/bootstrap.js");?>"></script>
</head>
<body>
	<div>
		<div class="col-md-2"></div>
	<div class="col-md-4">
				<h4>Busqueda por cualidadesccccc.</h4>
					<?php
						echo form_open('FrontEnd/find');
					?>
					<div class="form-group">
						<div class="col-md-12">
								<?php
							$cualidades="";
							foreach ($cualidad as $cuali) {
								$cualidades .="<input type=\"checkbox\"  id=\"$cuali->id\" name=\"cualidad[]\" value=\"$cuali->id\" />$cuali->nombre<br>";
							}
							echo $cualidades;
							?><br>
						</div>
					</div>
					<br>
					<h4>Busqueda por Tecnologias.</h4>
					<div>
						<div class="form-group">
							<div class="col-md-12">
						<?php
							$tecnologias="";
							foreach ($tecnologia as $tecno) {
								$tecnologias .="<input type=\"checkbox\"  id=\"$tecno->id\" name=\"tecnologia[]\" value=\"$tecno->id\" />$tecno->nombre<br>";
							}
							echo $tecnologias;
							?><br>
							</div>
						</div>
					</div>	
					<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<?php
										$data = array(
										    'name' => 'button',
										    'id' => 'button_id',
										    'type' => 'submit',
										    'class' => 'btn btn-default',
										    'content' => 'buscar'
										);
										echo form_button($data);
									?>
								</div>
							</div>							
						</div>
						<div class="ver_estudiante">     
							    <div class="col-md-9">
							        <h4>Estudiantes.</h4>
							        <?php
							          $table = "<table id=\"table\" class=\"table table-bordered\"><tr><th>Nombre</th><th>Apellidos</th><th>Ver</th></tr>";
							            foreach ($FrontEnd as $data) {
							              $table.= "<tr><td>".$data->nombre."</td>";
							              $table.= "<td>".$data->primerapellido."</td>";
							              $table.="<td><button type=\"button\" data-id=\"$data->id\" class=\"ver btn btn-default\">Ver</button></td></tr>";
							            }
							            $table.="</table>";
							          echo $table;
							        ?>
							    </div>
							   </div>
					</div>
				</div>
	</div>
</body>
</html>