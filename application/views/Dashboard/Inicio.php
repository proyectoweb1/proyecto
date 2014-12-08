<!DOCTYPE html>
<html>

<head>
</head>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<!-- www.TuTiempo.net - Ancho:454px - Alto:91px -->
<div id="TT_RiJ11kEkkddB18IAKAuDjjjzjWlAMh2lLt1t1ZiIK1zomo35G"><a href="http://www.tutiempo.net">El tiempo 15 días</a></div>
<script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_RiJ11kEkkddB18IAKAuDjjjzjWlAMh2lLt1t1ZiIK1zomo35G"></script>
  <div id="barragoogle">
<center>
<FORM method=GET action="http://www.google.com/search">
<TABLE bgcolor="#FFFFFF"><tr><td>
<A HREF="http://www.google.com/">
<IMG SRC="http://www.google.com/logos/Logo_40wht.gif" border="0" ALT="Google" align="absmiddle"></A>
<INPUT TYPE=text name=q size=31 maxlength=255 value="">
<INPUT TYPE=hidden name=hl value=es>
<INPUT type=submit name=btnG VALUE="Buscar">
</td></tr></TABLE>
</FORM>
</center>
</div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
function drawChart() {

  var data = google.visualization.arrayToDataTable([
    ['carrera', 'cantidad'],
<?php
foreach ($carrera as $data) {
?> 
    ['<?php echo $data->nombre?>',  1000],
<?php
 }?> ]);

  var options = {
    title: 'Estudiantes por Carrera',
    hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));

  chart.draw(data, options);

}
    </script>
      <div class="ver_estudiante">     
    <div class="col-md-9">
        <h4>Estudiantes.</h4>
          <?php
          $table = "<table id=\"table\" class=\"table table-bordered\"><tr><th>Nombre</th><th>Apellidos</th><th>Ver</th></tr>";
            foreach ($estudiantes as $data) {
              $table.= "<tr><td>".$data->nombre."</td>";
              $table.= "<td>".$data->primerapellido."</td>";
              $table.="<td><button type=\"button\" data-id=\"$data->id\" class=\"ver btn btn-default\">Ver</button></td></tr>";
            }
            $table.="</table>";
          echo $table;
          ?>
        </div>
          </div>
      <script type="text/javascript">

    $( ".ver" ).click(function() {
        var id = $(this).data('id');
      window.location.href = "index.php/verestudiante/toupdate/?id=" + id;
    });
    </script>
 <body>
 	<div id="piechart"style="width: 500px; height: 200px;"></div>
</body>
</html>

