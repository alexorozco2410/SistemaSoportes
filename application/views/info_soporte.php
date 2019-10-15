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
  <div class="row mb-2">
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
            <button name="btn-asignar" type="submit" class="btn btn-primary bg-primary">Asignar</button>
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
  <!--seccion para la indicar la solucion y terminar el soporte -->
  <div class="row">
    <div class="col-md-12 col-sm-12 col-sx-12">
      <form class="soporte-ter" action="info_soportes_controller" method="post"><!--cuando el soporte termine y se agregue la solución-->
        <label for="Solucion-Soporte">Solución:</label>
        <textarea id="Solucion Soporte" class="form-control sol-ovfw" name="solucion-soporte" rows="4" placeholder="Describe cómo solucionaste el problema" required></textarea>
      </form>
    </div>
  </div>
  <!--boton para indicar que se terminó el soporte-->
  <div class="row btn-end-sop mt-2">
    <div class="cool-md-12 col-sm-12 col-sx-12">
      <button name="end-soporte" type="submit" class="btn btn-primary bg-success">Terminar</button>
    </div>
  </div>
<!--informacion del equipo-->
  <div class="row justify-content-left">
    <div class="col-md-12 col-sm-12 col-sx-12">
      <div class="panel-group">
        <div class="panel panel-default">
          <button class="btn btn-info mb-2" data-toggle="collapse" href="#collapse1">Informacion del equipo</button>
          <div id="collapse1" class="collapse">
            <div class=" card box-info-equipo">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-sx-12">
                  <h5 class="subtit tit-info-equipo">Información</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                </div>
                <div class="col-3">
                  <p>Responsable del Equipo</p>
                  <p class="form-control">ING. Alexis Orozco Hernandez</p>
                </div>
                <div class="col-2">
                  <p>Departamento</p>
                  <p class="form-control">iMAGENOLOGIA</p>
                </div>
                <div class="col-2">
                  <p>Cubículo/Salón</p>
                  <p class="form-control">R1-06</p>
                </div>
                <div class="col-2">
                  <p>Teléfono</p>
                  <p class="form-control">5546361540</p>
                </div>
                <div class="col-1">
                  <p>Ext.</p>
                  <p class="form-control"></p>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                </div>
                <div class="col-md-2">
                  <p>Tipo de Equipo</p>
                  <p class="form-control">Laptop</p>
                </div>
                <div class="col-md-2">
                  <p>Marca</p>
                  <p class="form-control">hcbahai</p>
                </div>
                <div class="col-md-2">
                  <p>Modelo</p>
                  <p class="form-control">hjhjiy</p>
                </div>
                <div class="col-md-2">
                  <p>No. de Serie</p>
                  <p class="form-control">54324523554334</p>
                </div>
                <div class="col-md-2">
                  <p>No. de Inventario</p>
                  <p class="form-control">4326543765474</p>
                </div>
                <div class="col-1">
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                </div>
                <div class="col-md-2">
                  <p>Sistema Operativo</p>
                  <p class="form-control">Windows 10</p>
                </div>
                <div class="col-md-2">
                  <p>Procesador</p>
                  <p class="form-control">Intel i7-543636</p>
                </div>
                <div class="col-md-2">
                  <p>MAC-Addres</p>
                  <p class="form-control">FF:FF:FF:FF</p>
                </div>
                <div class="col-md-2">
                  <p>HOST</p>
                  <p class="form-control"></p>
                </div>
                <div class="col-1">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!--titulo de la seccion que muestra las soluciones a soportes anteriores-->
  <div class="row justify-content-left">
    <div class="col-md-12 col-sm-12 col-sx-12">
      <h5 class="mb-3 subtit">Soportes Anteriores</h5>
    </div>
  </div>
<!--Historial de problemas y soluciones dadas-->
  <div class="row justify-content-left box-hist card">
    <!--informacion de quien y cuando se hizo el soporte-->
    <div class="card-body">
      <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <h6>Integrante(s) UC</h6>
          <p class="form-control sol-ovfw">Alexis Orozco</p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <h6>Fecha</h6>
          <p class="form-control">12/09/2020</p>
        </div>
        <!--Problema reportado-->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <h6>Problema reportado</h6>
          <p class="form-control sol-ovfw">La computadora no prende</p>
        </div>
        <!--Solucion dada-->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h6>Solución</h6>
          <p class="form-control reg-sol card-text">
            g <br>
            g <br>
            b <br>
            g <br>
            hola <br>
            xd <br>
            lul <br>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!--termina un registro-->
  <!--Historial de problemas y soluciones dadas-->
    <div class="row justify-content-left box-hist card">
      <!--informacion de quien y cuando se hizo el soporte-->
      <div class="card-body">
        <div class="row">
          <div class="col-md-2 col-sm-2 col-xs-12">
            <h6>Integrante(s) UC</h6>
            <p class="form-control sol-ovfw">Alexis Orozco</p>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-12">
            <h6>Fecha</h6>
            <p class="form-control">12/09/2020</p>
          </div>
          <!--Problema reportado-->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <h6>Problema reportado</h6>
            <p class="form-control sol-ovfw">La computadora no prende</p>
          </div>
          <!--Solucion dada-->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <h6>Solución</h6>
            <p class="form-control reg-sol card-text">
              g <br>
              g <br>
              b <br>
              g <br>
              hola <br>
              xd <br>
              lul <br>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!--termina un registro-->

</div>
