<link rel="stylesheet" href="../assets/css/info_soporte.css">
<link rel="stylesheet" href="../assets/css/mis_soportes.css">
<link rel="stylesheet" href="../assets/css/historial.css">

<div class="container-fluid page-container info-style">
<!--titulo para indicar de que equipo se esta viendo el historial-->
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <h3 class="titulo-h mb-0">Historial</h3>
      <h6 class="titulo-h mb-4">xEquipox</h6>
    </div>
  </div>
<!--Integrante(s) de UC asignados-->
  <div class="row">
    <div class="col-md-3 col-sm-3 col-sx-12">
      <h5>Integrante(s) asignado(s)</h5>
    </div>
    <div class="col-md-8 col-sm-8 col-sx-12">
      <form class="asig-IUC" action="info_soportes_controller" method="post"><!--se ejecutara una funcion para agregar al integrante-->
        <div class="row">
          <div class="col-md-4 col-sm-4 col-sx-12">
            <input class="form-control" type="text" name="nombre-IUC" placeholder="Nombre integrante">
          </div>
          <div class="col-md-3 col-sm-3 col-sx-12">
            <button name="btn-asignar" type="submit" class="btn btn-primary bg-success">Asignar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--para mostrar todos lo integrantes involucrados en el soporte -->
  <div class="row justify-content-center">
    <div class="col-md-12 col-sm-12 col-sx-12">
      <p class="form-control">Nombre del integrante</p>
    </div>
  </div>
<!--informacion del equipo-->
  <div class="row justify-content-center">

  </div>
<!--Historial de problemas y soluciones dadas-->
  <div class="row justify-content-center">
    <!--informacion de quien y cuando se hizo el soporte-->
    <div class="col-md-2 col-sm-2 col-xs-12">
      <h6>Integrante(s) UC</h6>
      <p class="form-control"></p>
    </div>
    <div class="col-md-1.5 col-sm-1.5 col-xs-12">
      <h6>Fecha</h6>
      <p class=" form-control">12/09/2020</p>
    </div>
    <!--Problema reportado-->
    <div class="col-md-3 col-sm-3 col-xs-12">
      <h6>Problema reportado</h6>
      <p class="form-control"></p>
    </div>
    <!--Descripción de la solucion-->
    <div class="col-md-5 col-sm-5 col-xs-12">
      <h6>Solución</h6>
      <p class="form-control reg-prob">
        gg <br>
        hh <br>
        g <br>
        lk <br>
        gg <br>
        gg <br>
        l <br>
      </p>
    </div>
  </div>
</div>
