<?php
/**
 * Clase que representa la simulacion
 */
class Simulacion
{

  private $iCantPers;
  private $iCantPersAllegadas;
  private $iEstatusSocioEcon;
  private $iHabilidades;
  private $iActiviDiarias;
  private $iCantDiscap;
  private $iCantGraduados;
  private $iCantPersonal;
  private $iExperiencia;
  private $sUniversidad;
  private $sCarrera;
  private $sTipoInstitucion;
  private $iIndicativoSalud;
  private $iNivelEducativoBasico;
  private $iNivelNecesidadCog;
  private $iNivelNecesidadMent;
  private $iNivelNecesidadFis;
  private $iNivelNecesidadMat;
  private $iEficienciaMetodos;
  private $iNivelInfraestructura;
  private $iTiempo;
  private $aDefaults = array();
  private $iEstadoOcupacional;

  public function __construct()
  {
    $this->aDefaults = $this->getADefaults();
    $this->iCantPers = $this->aDefaults["iCantPers"];
    $this->iCantPersAllegadas = $this->aDefaults["iCantPersAllegadas"];
    $this->iEstatusSocioEcon = $this->aDefaults["iEstatusSocioEcon"];
    $this->iHabilidades = $this->aDefaults["iHabilidades"];
    $this->iActiviDiarias = $this->aDefaults["iActiviDiarias"];
    $this->iCantDiscap = $this->aDefaults["iCantDiscap"];
    $this->iCantGraduados = $this->aDefaults["iCantGraduados"];
    $this->iCantPersonal = $this->aDefaults["iCantPersonal"];
    $this->iExperiencia = $this->aDefaults["iExperiencia"];
    $this->sUniversidad = $this->aDefaults["sUniversidad"];
    $this->sCarrera = $this->aDefaults["sCarrera"];
    $this->sTipoInstitucion = $this->aDefaults["sTipoInstitucion"];
    $this->iIndicativoSalud = $this->aDefaults["iIndicativoSalud"];
    $this->iNivelEducativoBasico = $this->aDefaults["iNivelEducativoBasico"];
    $this->iNivelNecesidadCog = $this->aDefaults["iNivelNecesidadCog"];
    $this->iNivelNecesidadMent = $this->aDefaults["iNivelNecesidadMent"];
    $this->iNivelNecesidadFis = $this->aDefaults["iNivelNecesidadFis"];
    $this->iNivelNecesidadMat = $this->aDefaults["iNivelNecesidadMat"];
    $this->iEficienciaMetodos = $this->aDefaults["iEficienciaMetodos"];
    $this->iNivelInfraestructura = $this->aDefaults["iNivelInfraestructura"];
    $this->iEstadoOcupacional = $this->aDefaults["iEstadoOcupacional"];
    $this->iTiempo = $this->aDefaults["iTiempo"];
  }

  public function getADefaults() {
    $aDefaults = array();
    $aDefaults["iCantPers"] = 100;
    $aDefaults["iCantPersAllegadas"] = 7;
    $aDefaults["iEstatusSocioEcon"] = 1;
    $aDefaults["iHabilidades"] = 1;
    $aDefaults["iActiviDiarias"] = 1;
    $aDefaults["iCantDiscap"] = 50;
    $aDefaults["iCantGraduados"] = 1;
    $aDefaults["iCantPersonal"] = 1;
    $aDefaults["iExperiencia"] = 1;
    $aDefaults["sUniversidad"] = '';
    $aDefaults["sCarrera"] = '';
    $aDefaults["sTipoInstitucion"] = '';
    $aDefaults["iIndicativoSalud"] = 1;
    $aDefaults["iNivelEducativoBasico"] = 1;
    $aDefaults["iNivelNecesidadCog"] = 1;
    $aDefaults["iNivelNecesidadMent"] = 1;
    $aDefaults["iNivelNecesidadFis"] = 1;
    $aDefaults["iNivelNecesidadMat"] = 1;
    $aDefaults["iEficienciaMetodos"] = 1;
    $aDefaults["iNivelInfraestructura"] = 1;
    $aDefaults["iEstadoOcupacional"] = 1;
    $aDefaults["iTiempo"] = 3;
    return $aDefaults;
  }

  public function getICantPers() {
      return $this->iCantPers;
  }

  public function getICantPersAllegadas() {
      return $this->iCantPersAllegadas;
  }

  public function getIEstatusSocioEcon() {
      return $this->iEstatusSocioEcon;
  }

  public function getIHabilidades() {
      return $this->iHabilidades;
  }

  public function getIActiviDiarias() {
      return $this->iActiviDiarias;
  }

  public function getICantDiscap() {
      return $this->iCantDiscap;
  }

  public function getICantGraduados() {
      return $this->iCantGraduados;
  }

  public function getICantPersonal() {
      return $this->iCantPersonal;
  }

  public function getIExperiencia() {
      return $this->iExperiencia;
  }

  public function getSUniversidad() {
      return $this->sUniversidad;
  }

  public function getSCarrera() {
      return $this->sCarrera;
  }

  public function getSTipoInstitucion() {
      return $this->sTipoInstitucion;
  }

  public function getIIndicativoSalud() {
      return $this->iIndicativoSalud;
  }

  public function getINivelEducativoBasico() {
      return $this->iNivelEducativoBasico;
  }

  public function getINivelNecesidadCog() {
      return $this->iNivelNecesidadCog;
  }

  public function getINivelNecesidadMent() {
      return $this->iNivelNecesidadMent;
  }

  public function getINivelNecesidadFis() {
      return $this->iNivelNecesidadFis;
  }

  public function getINivelNecesidadMat() {
      return $this->iNivelNecesidadMat;
  }

  public function getITiempo() {
      return $this->iTiempo;
  }

  public function getIEficienciaMetodos() {
      return $this->iEficienciaMetodos;
  }

  public function setICantPers($iCantPers) {
      $this->iCantPers = $iCantPers;
  }

  public function setICantPersAllegadas($iCantPersAllegadas) {
      $this->iCantPersAllegadas = $iCantPersAllegadas;
  }

  public function setIEstatusSocioEcon($iEstatusSocioEcon) {
      $this->iEstatusSocioEcon = $iEstatusSocioEcon;
  }

  public function setIHabilidades($iHabilidades) {
      $this->iHabilidades = $iHabilidades;
  }

  public function setIActiviDiarias($iActiviDiarias) {
      $this->iActiviDiarias = $iActiviDiarias;
  }

  public function setICantDiscap($iCantDiscap) {
      $this->iCantDiscap = $iCantDiscap;
  }

  public function setICantGraduados($iCantGraduados) {
      $this->iCantGraduados = $iCantGraduados;
  }

  public function setICantPersonal($iCantPersonal) {
      $this->iCantPersonal = $iCantPersonal;
  }

  public function setIExperiencia($iExperiencia) {
      $this->iExperiencia = $iExperiencia;
  }

  public function setSUniversidad($sUniversidad) {
      $this->sUniversidad = $sUniversidad;
  }

  public function setSCarrera($sCarrera) {
      $this->sCarrera = $sCarrera;
  }

  public function setSTipoInstitucion($sTipoInstitucion) {
      $this->sTipoInstitucion = $sTipoInstitucion;
  }

  public function setIIndicativoSalud($iIndicativoSalud) {
      $this->iIndicativoSalud = $iIndicativoSalud;
  }

  public function setINivelEducativoBasico($iNivelEducativoBasico) {
      $this->iNivelEducativoBasico = $iNivelEducativoBasico;
  }

  public function setINivelNecesidadCog($iNivelNecesidadCog) {
      $this->iNivelNecesidadCog = $iNivelNecesidadCog;
  }

  public function setINivelNecesidadMent($iNivelNecesidadMent) {
      $this->iNivelNecesidadMent = $iNivelNecesidadMent;
  }

  public function setINivelNecesidadFis($iNivelNecesidadFis) {
      $this->iNivelNecesidadFis = $iNivelNecesidadFis;
  }

  public function setINivelNecesidadMat($iNivelNecesidadMat) {
      $this->iNivelNecesidadMat = $iNivelNecesidadMat;
  }

  public function setIEficienciaMetodos($iEficienciaMetodos) {
      $this->iEficienciaMetodos = $iEficienciaMetodos;
  }

  public function setITiempo($iTiempo) {
      $this->iTiempo = $iTiempo;
  }

  public function getProceso() {
    $aTiempoXPersona = array();
    if($this->getITiempo() >= $this->getICantPers()) {
      for ($i=0; $i < $this->getITiempo()-1; $i++) {
        array_push($aTiempoXPersona, 1);
      }
    } else{
      $iAux = $this->getICantPers();
      $i = 0;
      while ($iAux > 0) {
        if(($this->getITiempo()-1) < $i) {
          $i = 0;
        }
        if($iAux > 0) {
          $iRest = 1;
          if(empty($aTiempoXPersona[$i])){
            $aTiempoXPersona[$i] = $iRest;
          } else{
            $iRest = rand(1, $iAux);
            $aTiempoXPersona[$i] = $aTiempoXPersona[$i] + $iRest;
          }
          $iAux = $iAux - $iRest;
        } else{
          break;
        }
        $i++;
      }
    }
    $aFinalResult = array();
    for ($i=0; $i < $this->getITiempo(); $i++) {
      $aResul = array();
      for ($j=0; $j < $aTiempoXPersona[$i]; $j++) {
        $fResult = 0;
        switch (rand(1, 3)) {
          case '1':
            $iTipoDiscapacidad = 1;
            break;
          case '2':
            $iTipoDiscapacidad = 5;
            break;
          case '3':
            $iTipoDiscapacidad = 3;
            break;
        }
        $iUniversidad = 0;
        switch ($this->sUniversidad) {
          case 'alta':
            $iUniversidad = 5;
            break;
          case 'media':
            $iUniversidad = 3;
            break;
          case 'baja':
            $iUniversidad = 1;
            break;
        }
        $iCarrera = 0;
        switch ($this->sCarrera) {
          case 'alta':
            $iCarrera = 5;
            break;
          case 'media':
            $iCarrera = 3;
            break;
          case 'baja':
            $iCarrera = 1;
            break;
        }
        $iTipoInstitucion = 0;
        switch ($this->sTipoInstitucion) {
          case 'privada':
            $iTipoInstitucion = 1;
            break;
          case 'semipublico':
            $iTipoInstitucion = 3;
            break;
          case 'publico':
            $iTipoInstitucion = 5;
            break;
        }
        $iNivelInfraestructura = ($iUniversidad + $iCarrera) / $iTipoInstitucion;
        $iEficienciaMetodos = $this->iEficienciaMetodos * ($this->iTiempo * $this->iCantPersonal * $this->iExperiencia * $iNivelInfraestructura + $this->iCantGraduados + $this->iCantDiscap) / $iTipoDiscapacidad;
        $iIndicativoSalud = $this->iIndicativoSalud * (($this->iCantPers + $iTipoDiscapacidad)/3);
        $iNivelNecesidadCog = $this->iNivelNecesidadCog * $iIndicativoSalud;
        $iNivelNecesidadMent = $this->iNivelNecesidadMent * $iIndicativoSalud * 5;
        $iNivelNecesidadFis = $this->iNivelNecesidadFis * $iIndicativoSalud * 3;
        $iNivelNecesidadSoc = $iTipoDiscapacidad + $iIndicativoSalud;
        $iNivelEducativoBasico = ($this->iHabilidades + $this->iActiviDiarias) / $iTipoDiscapacidad;
        $iStatusEconomico = $this->iEstatusSocioEcon/$this->iEstadoOcupacional;
        $iNivelEducativoBasico = ($this->iHabilidades * $this->iNivelEducativoBasico * rand(17, 34)) / $this->iCantPers;
        $iIndicativoAceptacion = (($this->iCantPers + $this->iCantPersAllegadas) * $iStatusEconomico)/($this->iEstadoOcupacional+$iNivelNecesidadSoc + $iNivelEducativoBasico);
        $iNivelNecesidadDesarrollo = $iNivelEducativoBasico / $iNivelEducativoBasico;
        $iNivelGeneralAcceso = ($iIndicativoSalud + $iNivelEducativoBasico + $iNivelNecesidadDesarrollo + $this->iCantDiscap + $this->iCantGraduados) * $iEficienciaMetodos /(($iNivelNecesidadCog +$iNivelNecesidadMent+$iNivelNecesidadFis)*$this->iNivelNecesidadMat);
        $fResult = $iNivelGeneralAcceso * ($i+1) * (rand(0, 10) / 10);
        array_push($aResul, $fResult);
      }
      array_push($aFinalResult, array_sum($aResul)/$aTiempoXPersona[$i] * ($i+1));
    }
    $aAjustado = array();
    $fecha = date('Y-m-j');
    for ($i=0; $i < count($aFinalResult); $i++) {
      if($i == 0) {
        $dNewFecha = $fecha;
      }
      $nuevafecha = strtotime ( '+1 year' , strtotime ( $dNewFecha ) ) ;
      $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
      $dNewFecha = $nuevafecha;
      $aAjustado[] = array($dNewFecha, $aFinalResult[$i]);
    }
    return json_encode($aAjustado);
  }

}

$oSimulacion = new Simulacion();
$oSimulacion->setITiempo(empty($_POST["inpTiempo"]) ? $oSimulacion->getITiempo() : filter_input(INPUT_POST, "inpTiempo", FILTER_SANITIZE_NUMBER_INT));
$oSimulacion->setICantPers(empty($_POST["inpCantPersonas"]) ? $oSimulacion->getICantPers() : filter_input(INPUT_POST, "inpCantPersonas", FILTER_SANITIZE_NUMBER_INT));
$oSimulacion->setICantPersAllegadas(empty($_POST["inpCantPersonasAllegadas"]) ? $oSimulacion->getICantPersAllegadas() : filter_input(INPUT_POST, "inpCantPersonasAllegadas", FILTER_SANITIZE_NUMBER_INT));
$oSimulacion->setIEstatusSocioEcon(empty($_POST["sltEstatusSocioeconomico"]) ? $oSimulacion->getIEstatusSocioEcon() : filter_input(INPUT_POST, "sltEstatusSocioeconomico", FILTER_SANITIZE_NUMBER_INT));
$oSimulacion->setIHabilidades(empty($_POST["sltHabilidades"]) ? $oSimulacion->getIHabilidades() : filter_input(INPUT_POST, "sltHabilidades", FILTER_SANITIZE_NUMBER_INT));
$oSimulacion->setIActiviDiarias(empty($_POST["sltActividadesDiarias"]) ? $oSimulacion->getIActiviDiarias() : filter_input(INPUT_POST, "sltActividadesDiarias", FILTER_SANITIZE_NUMBER_INT));
$oSimulacion->setICantDiscap(empty($_POST["inpDiscapacitados"]) ? $oSimulacion->getICantDiscap() : filter_input(INPUT_POST, "inpDiscapacitados", FILTER_SANITIZE_NUMBER_INT));
$oSimulacion->setICantGraduados(empty($_POST["inpGraduados"]) ? $oSimulacion->getICantGraduados() : filter_input(INPUT_POST, "inpGraduados", FILTER_SANITIZE_NUMBER_INT));
$oSimulacion->setICantPersonal(empty($_POST["inpPersonal"]) ? $oSimulacion->getICantPersonal() : filter_input(INPUT_POST, "inpPersonal", FILTER_SANITIZE_NUMBER_INT));
$oSimulacion->setIExperiencia(empty($_POST["sltExperiencia"]) ? $oSimulacion->getIExperiencia() : filter_input(INPUT_POST, "sltExperiencia", FILTER_SANITIZE_NUMBER_INT));
$oSimulacion->setSUniversidad(empty($_POST["sltUniversidad"]) ? $oSimulacion->getSUniversidad() : filter_input(INPUT_POST, "sltUniversidad", FILTER_SANITIZE_STRING));
$oSimulacion->setSCarrera(empty($_POST["sltCarrera"]) ? $oSimulacion->getSCarrera() : filter_input(INPUT_POST, "sltCarrera", FILTER_SANITIZE_STRING));
$oSimulacion->setSTipoInstitucion(empty($_POST["sltTipoInstitucion"]) ? $oSimulacion->getSTipoInstitucion() : filter_input(INPUT_POST, "sltTipoInstitucion", FILTER_SANITIZE_STRING));
$oSimulacion->setIIndicativoSalud(empty($_POST["inpIndicativoSalud"]) ? $oSimulacion->getIIndicativoSalud() : filter_input(INPUT_POST, "inpIndicativoSalud", FILTER_SANITIZE_NUMBER_FLOAT));
$oSimulacion->setINivelEducativoBasico(empty($_POST["inpNivelEducativoBasico"]) ? $oSimulacion->getINivelEducativoBasico() : filter_input(INPUT_POST, "inpNivelEducativoBasico", FILTER_SANITIZE_NUMBER_FLOAT));
$oSimulacion->setINivelNecesidadCog(empty($_POST["inpNivelNecesidadCog"]) ? $oSimulacion->getINivelNecesidadCog() : filter_input(INPUT_POST, "inpNivelNecesidadCog", FILTER_SANITIZE_NUMBER_FLOAT));
$oSimulacion->setINivelNecesidadMent(empty($_POST["inpNivelNecesidadMent"]) ? $oSimulacion->getINivelNecesidadMent() : filter_input(INPUT_POST, "inpNivelNecesidadMent", FILTER_SANITIZE_NUMBER_FLOAT));
$oSimulacion->setINivelNecesidadFis(empty($_POST["inpNivelNecesidadFis"]) ? $oSimulacion->getINivelNecesidadFis() : filter_input(INPUT_POST, "inpNivelNecesidadFis", FILTER_SANITIZE_NUMBER_FLOAT));
$oSimulacion->setINivelNecesidadMat(empty($_POST["inpNivelNecesidadMat"]) ? $oSimulacion->getINivelNecesidadMat() : filter_input(INPUT_POST, "inpNivelNecesidadMat", FILTER_SANITIZE_NUMBER_FLOAT));
$oSimulacion->setIEficienciaMetodos(empty($_POST["inpEficienciaMetodos"]) ? $oSimulacion->getIEficienciaMetodos() : filter_input(INPUT_POST, "inpEficienciaMetodos", FILTER_SANITIZE_NUMBER_FLOAT));
echo $oSimulacion->getProceso();
die();
