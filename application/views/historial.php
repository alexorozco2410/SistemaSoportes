<link rel="stylesheet" href="../assets/css/mis_soportes.css">
<link rel="stylesheet" href="../assets/css/historial.css">

<div class="container-fluid page-container tabh-style">
  <!--Titulo de la pagina-->
  <div class="row justify-content-center">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <h3 class="titulo-h mb-4">Historial</h3>
    </div>
  </div>
  <!--para filtrar por estado de soporte-->
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <label for="" class="mb-0">
        <div class="btn-group">
          <button type="button" class="btn btn-primary">Todos</button>
          <button type="button" class="btn btn-primary">Terminado</button>
          <button type="button" class="btn btn-primary">Pendiente</button>
          <button type="button" class="btn btn-primary">En Proceso</button>
        </div>
      </label>
    </div>
  </div>
  <!--Tabla de historial de soportes-->
  <div class="row">
    <div class="col-md-12 col-sm-12 col-sx-12">
      <div class="table-responsive">
        <table class="table ">
          <thead class="thead-dark">
            <tr>
              <th class="atr-hist">Folio</th>
              <th class="atr-hist">Equipo</th>
              <th class="atr-hist">Usuario</th>
              <th class="atr-hist">Cubículo/Salón</th>
              <th class="atr-hist">Integrante UC</th>
              <th class="atr-hist">Fecha y Hora Inicio</th>
              <th class="atr-hist">Fecha Y Hora Final</th>
              <th class="atr-hist">Avance</th>
            </tr>
          </thead>
          <tbody>
            <tr onclick="location='solicitud_controller'">
              <td>44444</td>
              <td>44444</td>
              <td>44444</td>
              <td>44444</td>
              <td>44444</td>
              <td>44444</td>
              <td>44444</td>
              <td>44444</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
