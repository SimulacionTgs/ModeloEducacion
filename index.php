<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Simulación</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row mt-4">
      <div class="col-8">
        <div class="card">
          <h3 class="card-header">Simulación</h3>
          <div class="card-block">
            <div id="tabs">
              <ul>
                <li><a href="#tabs-1">Grafica</a></li>
                <li><a href="#tabs-2">Tabla</a></li>
              </ul>
              <div id="tabs-1">
                <form action="">
                  <div class="form-group row">
                    <label for="sltEscala">Escala</label>
                    <select class="form-control" id="sltEscala" name="sltEscala">
                      <option>Meses</option>
                      <option>Años</option>
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="inpTiempo">Tiempo</label>
                    <input type="number" class="form-control" id="inpTiempo" min="1" max="100" placeholder="Cantidad de tiempo">
                  </div>
                  <input type="reset" class="btn btn-warning pull-right" value="Limpiar">
                </form>
                <div id="chart_div"></div>
              </div>
              <div id="tabs-2">
                <div class="row clsTable">
                  <table id="tblVariables" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Tiempo</th>
                            <th>Escala</th>
                            <th>Variable</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <h3 class="card-header">Variables</h3>
          <div class="card-block">
            <div class="container">
              <form>
                <div class="form-group">
                  <label for="inpCantPersonas">Cantidad de personas</label>
                  <input type="number" class="form-control" name="inpCantPersonas" id="inpCantPersonas" min="1" placeholder="Cantidad de personas">
                </div>
                <div class="form-group">
                  <label for="inpCantPersonasAllegadas">Cantidad de personas allegadas</label>
                  <input type="number" class="form-control" name="inpCantPersonasAllegadas" id="inpCantPersonasAllegadas" min="1" placeholder="Cantidad de personas allegadas">
                </div>
                <div class="form-group">
                  <label for="sltEstatusSocioeconomico">Estatus socioeconomico</label>
                  <select class="form-control form-control-sm" id="sltEstatusSocioeconomico" name="sltEstatusSocioeconomico">
                    <?php for ($i = 1; $i < 7; $i++): ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="sltHabilidades">Habilidades</label>
                  <select class="form-control form-control-sm" id="sltHabilidades" name="sltHabilidades">
                    <?php for ($i = 1; $i < 6; $i++): ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="sltActividadesDiarias">Nivel Actividades diarias</label>
                  <select class="form-control form-control-sm" id="sltActividadesDiarias" name="sltActividadesDiarias">
                    <?php for ($i = 1; $i < 6; $i++): ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inpDiscapacitados">Discapacitados universitario</label>
                  <input type="number" class="form-control" name="inpDiscapacitados" id="inpDiscapacitados" min="1" placeholder="Cantidad de discapacitados">
                </div>
                <div class="form-group">
                  <label for="inpGraduados">Universitarios graduados</label>
                  <input type="number" class="form-control" name="inpGraduados" id="inpGraduados" min="1" placeholder="Universitarios graduados">
                </div>
                <div class="form-group">
                  <label for="inpPersonal">Personal</label>
                  <input type="number" class="form-control" name="inpPersonal" id="inpPersonal" min="1" placeholder="Cantidad de personal">
                </div>
                <div class="form-group">
                  <label for="sltExperiencia">Experiencia</label>
                  <select class="form-control form-control-sm" id="sltExperiencia" name="sltExperiencia">
                    <?php for ($i = 1; $i < 6; $i++): ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="sltUniversidad">Universidad</label>
                  <select class="form-control form-control-sm" id="sltUniversidad" name="sltUniversidad">
                    <option value="alta">Alta</option>
                    <option value="media">Media</option>
                    <option value="baja">Baja</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="sltCarrera">Carrera</label>
                  <select class="form-control form-control-sm" id="sltCarrera" name="sltCarrera">
                    <option value="alta">Alta</option>
                    <option value="media">Media</option>
                    <option value="baja">Baja</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="sltTipoInstitucion">Tipo de institución</label>
                  <select class="form-control form-control-sm" id="sltTipoInstitucion" name="sltTipoInstitucion">
                    <option value="publico">Publico</option>
                    <option value="semipublico">SemiPublico</option>
                    <option value="privada">Privada</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inpIndicativoSalud">Indicativo de salud</label>
                  <input type="number" step="0.01" class="form-control" name="inpIndicativoSalud" id="inpIndicativoSalud" min="1" placeholder="Indicativo de salud">
                </div>
                <div class="form-group">
                  <label for="inpNivelEducativoBasico">Nivel educativo basico</label>
                  <input type="number" step="0.01" class="form-control" name="inpNivelEducativoBasico" id="inpNivelEducativoBasico" min="1" placeholder="Nivel educativo basico">
                </div>
                <div class="form-group">
                  <label for="inpNivelNecesidadCog">Nivel necesidad cognitiva</label>
                  <input type="number" step="0.01" class="form-control" name="inpNivelNecesidadCog" id="inpNivelNecesidadCog" min="1" placeholder="Nivel necesidad cognitiva">
                </div>
                <div class="form-group">
                  <label for="inpNivelNecesidadMent">Nivel necesidad mental</label>
                  <input type="number" step="0.01" class="form-control" name="inpNivelNecesidadMent" id="inpNivelNecesidadMent" min="1" placeholder="Nivel necesidad mental">
                </div>
                <div class="form-group">
                  <label for="inpNivelNecesidadFis">Nivel necesidad fisica</label>
                  <input type="number" step="0.01" class="form-control" name="inpNivelNecesidadFis" id="inpNivelNecesidadFis" min="1" placeholder="Nivel necesidad fisica">
                </div>
                <div class="form-group">
                  <label for="inpNivelNecesidadMat">Nivel necesidad material</label>
                  <input type="number" step="0.01" class="form-control" name="inpNivelNecesidadMat" id="inpNivelNecesidadMat" min="1" placeholder="Nivel necesidad material">
                </div>
                <div class="form-group">
                  <label for="inpEficienciaMetodos">Eficiencia en los metodos</label>
                  <input type="number" step="0.01" class="form-control" name="inpEficienciaMetodos" id="inpEficienciaMetodos" min="1" placeholder="Eficiencia en los metodos">
                </div>
                <button type="submit" class="btn btn-primary">Calcular</button>
                <input type="reset" class="btn btn-warning" value="Limpiar">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<footer>
  <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="libs/JQuery/jquery-ui.structure.min.css">
  <link rel="stylesheet" type="text/css" href="libs/JQuery/jquery-ui.theme.min.css">
  <link rel="stylesheet" type="text/css" href="libs/DataTables/css/jquery.dataTables.css"/>
  <link rel="stylesheet" type="text/css" href="libs/DataTables/css/responsive.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="view/css/index.css">
  <!-- JQuery -->
  <script type="text/javascript" src="libs/JQuery/jquery.min.js"></script>
  <script type="text/javascript" src="libs/JQuery/jquery-ui.min.js"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="libs/DataTables/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="libs/DataTables/js/dataTables.responsive.min.js"></script>
  <script type="text/javascript" src="libs/DataTables/js/responsive.bootstrap.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="view/js/index.js"></script>
</footer>
</html>
