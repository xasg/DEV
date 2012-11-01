<?php  class MySQL{

  private $conexion; 
  private $total_consultas;

  public function MySQL(){ 
    if(!isset($this->conexion)){
      $this->conexion = (@mysql_connect("localhost","fese"))
        or die(mysql_error());
      mysql_select_db("TEST",$this->conexion) or die(mysql_error());
	  mysql_query("SET NAMES 'utf8'");
    }
  }

  public function consulta($consulta){ 
    $this->total_consultas++; 
    $resultado = @mysql_query($consulta,$this->conexion);
    if(!$resultado){ 
      echo 'MySQL Error: ' . @mysql_error();
      exit;
    }
	@mysql_query("SET NAMES 'utf8'",$resultado);
    return $resultado;
  }

  public function fetch_array($consulta){
   return @mysql_fetch_array($consulta);
  }

  public function num_rows($consulta){
   return mysql_num_rows($consulta);
  }

  public function getTotalConsultas(){
   return $this->total_consultas; 
  }
  
  public function cerrar($conexion){
  mysql_close($conexion);
  }
}

?>
