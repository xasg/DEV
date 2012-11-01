<?php
/**
 *@author Adrian Soto Giron
 *@copyright Copyright (c) 2012, FESE
 * @
 */
class alerta{
    var $mensaje;
    
    
    
    
    
    public function alerta(){
        $this->mensaje="Introduce el texto a desplegar";
    }
    
    public function exito($texto){
        $mensaje="<h4 class=\"alert_success\">".$texto."</h4>";
        return $mensaje;
    }
    
    public function advertencia($texto){
        $mensaje="<h4 class=\"alert_warning\">".$texto."</h4>";
        return $mensaje;
    }
    public function error($texto){
        $mensaje = "<h4 class=\"alert_error\">".$texto."</h4>";
        return $mensaje;
    }
    
    public function informacion($texto){
        $mensaje = "<h4 class=\"alert_info\">".$texto."</h4>";
        return $mensaje;
    }
    
    public function seleccion($tipo, $texto){
        switch ($tipo){
        case 0:
            $this->error($texto);
            break;
        case 1:
            $this->exito($texto);
            break;
        case 2:
            $this->advertencia($texto);
            break;
        case 3:
            $this->informacion($texto);
            break;
        default :
            return $mensaje;
            break;
        }
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
