<link rel="stylesheet" href="<?php echo CSS; ?>/mis_soportes.css">
<link rel="stylesheet" href="<?php echo CSS; ?>/historial.css">

<div class="container-fluid page-container tabh-style">
  <!--Titulo de la pagina-->
  <div class="row justify-content-center">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <h3 class="titulo-h mb-3">Soportes</h3>
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
    <div class="col-4">

    </div>
    <div class=" col-2 col-w justify-content-right">
      <select class="form-control custom-select d-block select-semestre" name="semestre-soportes">
        <option value="">2020-1</option>
        <option value="">2020-2</option>
      </select>
    </div>
  </div>
  <!--Tabla de historial de soportes-->
  <div class="row">
    <div class="col-md-12 col-sm-12 col-sx-12">
      <div class="table-responsive">
        <table class="table ">
          <thead class="thead-dark">
            <tr class="atr-hist">
              <th class="atr-lg">Folio</th>
              <th class="atr-s">Equipo</th>
              <th class="atr-lg">Usuario</th>
              <th class="atr-s">Cubículo/Salón</th>
              <th class="atr-lg">Integrante UC</th>
              <th class="atr-s">Fecha Inicio</th>
              <th class="atr-s">Fecha Final</th>
              <th class="atr-m">Avance</th>
            </tr>
          </thead>
          <tbody>
            <tr onclick="location='informacion_soportes'">
              <td>SP/UC/168/2020-1</td>
              <td>Laptop</td>
              <td>xxx. Alexis Orozco</td>
              <td>r2-30</td>
              <td>Alexis Orozco</td>
              <td>10/09/2019</td>
              <td>10/09/2019</td>
              <td>Por Asignar</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
