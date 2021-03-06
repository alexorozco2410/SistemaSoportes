<link rel="stylesheet" href="<?php echo CSS; ?>/solicitud.css">
  <script src="<?php echo JS; ?>/login.js" onload="buscarEquipos()">

  </script>
  <script src="<?php echo JS; ?>/solicitud.js" onload="obtenerSemestre()">

  </script>
<div class="container-fluid">
  <div class="row">
    <!--parte izquierda de la pagina correspondiente a las opciones de equipos a disposicion-->
    <div class="col-md-3 col-sm-3 col-xs-12 ss bg-lp">
      <div class="row">
        <div class="col-12 col-sol-1">
          <h4 class="tit-equipos">Mis Equipos</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="l-equipos list-group mb-4" id="listaEquipos">
            <button type="button" class="btn list-group-item btn-equipo" onclick="vaciarDatos()">QUITAR INFORMACION</button>

          </div>
        </div>
      </div>
    </div>
    <!--Parte derecha de la pagina correspondiente al formulario-->
    <div class="col-md-9 col-sm-9 col-xs-12 ss">
      <div class="col-sol-2">
        <h3 class="header">Solicitud de Soporte</h3>
        <form class="sol-soporte" id="FormularioEquipo">
          <div class="row">
            <div class="col-md-4 mb-4">
              <label for="Nombre">Nombre</label>
              <input id="Nombre" class="form-control" type="text" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="col-md-4 mb-4">
              <label for="ApellidoPat">Appellido paterno</label>
              <input id="ApellidoPat" class="form-control" type="text" name="ApPat" placeholder="Apellido Paterno"  required>
            </div>
            <div class="col-md-4 mb-4">
              <label for="ApellidoMat">Apellido materno</label>
              <input id="ApellidoMat" class="form-control" type="text" name="ApMat" placeholder="Apellido Materno" >
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-4">
              <label for="Departamento">Departamento</label>
              <!--<input id="Departamento" class="form-control" type="text" name="Dep" placeholder="Departamento">-->
              <select id="Departamento" class="form-control custom-select d-block w-100" name="departamento" required>
                <option value="">Selecciona departamento</option>
              <!--<option value="hidraulica">Hidraulica</option>-->
              </select>
            </div>
            <div class="col-md-3 mb-4">
              <label for="Cubiculo">Cubículo</label>
              <input id="Cubiculo" class="form-control" type="text" name="cubiculo" placeholder="RX-XX" required>
            </div>
            <div class="col-md-3 mb-4">
              <label for="Tel">Teléfono</label>
              <input id="Tel" class="form-control" type="tel" name="telefono" placeholder="Teléfono">
            </div>
            <div class="col-md-2 mb-4">
              <label for="Ext">Ext</label>
              <input id="Ext" class="form-control" type="tel" name="ext" placeholder="Extensión">
            </div>
          </div>
          <!--Informacion del equipo!-->
          <div class="row">
            <div class="col-md-3 mb-4">
              <label for="TipoEquipo">Equipo</label>
              <select id="TipoEquipo" class="form-control custom-select d-block w-100" name="tipoE" required>
                <option value="">Selecciona el tipo</option>
                <option value="pc">PC</option>
                <option value="laptop">Laptop</option>
                <option value="impresora">Impresora</option>
                <option value="celular">Celular</option>
              </select>
            </div>
            <div class="col-md-2 mb-4">
              <label for="Marca">Marca</label>
              <input id="Marca" class="form-control" type="text" name="marca" placeholder="Marca">
            </div>
            <div class="col-md-3 mb-4">
              <label for="Marca">Modelo</label>
              <input id="Modelo" class="form-control" type="text" name="modelo" placeholder="Modelo">
            </div>
            <div class="col-md-2 mb-4">
              <label for="NumSerie">No. Serie</label>
              <input id="NumSerie" class="form-control" type="text" name="numSerie" placeholder="Serie">
            </div>
            <div class="col-md-2 mb-4">
              <label for="NumInventario">No. Inventario</label>
              <input id="NumInventario" class="form-control" type="text" name="numInventario" placeholder="Inventario">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-4">
              <label for="MACAddress">MAC Address</label>
              <input id="MACAddress" class="form-control" type="text" name="mac" placeholder="FF-FF-FF-FF-FF-FF">
            </div>
            <div class="col-md-2 mb-4">
              <label for="HOST">HOST</label>
              <input id="HOST" class="form-control" type="text" name="host" placeholder="HOST">
            </div>
            <div class="col-md-2mb-4">
              <label for="E-S">¿Dispositivo E/S?</label><br>
              <input id="E-S" class="sol-btns" type="radio" name="e-s" value="Si">Sí
              <input id="E-S" class="sol-btns" type="radio" name="e-s" value="No">No
            </div>
            <!--<div class="col-md-2 mb-4">
              <label for="Urgente">¿Es urgente?</label><br>
              <input id="Urgente" class="sol-btns" type="radio" name="urgente" value="Sí">Sí
              <input id="Urgente" class="sol-btns" type="radio" name="urgente" value="No">No
            </div>-->
            <div class="col-md-4">
              <div class="row" style="padding-left:5%;">
                <label for="fecha_agen">Fecha y hora para atender el problema</label>
                <div class="col-md-6" style="padding:0;">
                  <input class="form-control" type="date" id="picker"  name="fecha" style="padding:0;">
                </div>
                <div class="col-md-5">
                      <input id="Hora" class="form-control" type="time" name="hora">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mb-4">
              <label for="Problema">¿Cuál es el problema?</label>
              <textarea id="Problema" class="form-control" rows="3" name="problema" placeholder="Describe el problema que tienes..." requiered></textarea>
            </div>
          </div>
          <div class="row my-btn-success mb-4">
            <button type="button" class="btn btn-primary bg-success"  onclick="enviarFormulario()">Solicitar</button>
          </div>
          <div>
            <input id="idE" class="form-control" type="text" name="idE" style="display:none;">
            <input id="semestre" class="form-control" type="text" name="semestre" style="display:none;">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
