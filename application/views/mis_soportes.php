<link rel="stylesheet" href="<?php echo CSS; ?>/mis_soportes.css">
<script src="<?php echo JS; ?>/mis_soportes.js" onload="obtenerMisSoportes()">

</script>

<div class="container-fluid cont-style page-container">
  <div class="row justify-content-center">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <h3 class="titulo-hms mb-5">Historial personal</h3>
      <div class="table-responsive">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th class="atributo-sht atrib-stl">#</th>
              <th class="atributo atrib-stl">Equipo</th>
              <th class="atributo atrib-stl">#Inventario</th>
              <th class="atributo atrib-stl">Avance</th>
              <th class="atributo atrib-stl">Fecha</th>
              <th class="atributo atrib-stl">Hora</th>
              <th class="atributo-ext atrib-stl">Problema</th>
            </tr>
          </thead>
          <tbody id="misSoportes">
            
          </tbody>


        </table>
      </div>
    </div>
  </div>
</div>
