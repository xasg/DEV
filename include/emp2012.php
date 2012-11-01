<?php
/**
 *@author Adrian Soto Giron
 *@version 0.1  09/07/2012
 */

include 'mysql.php';
$db = new MySQL();

?>
<section id="main" class="column">
    
    <article class="module width_full">
		<header><h3 class="tabs_involved">BENEFICIARIOS EMPLEATE 2012</h3>
		<ul class="tabs">
                        <li><a href="#tab1">ACTIVOS</a></li>
                        <li><a href="#tab2">BAJAS</a></li>
   			<!--<li><a href="#tab2">EMPLEATE</a></li>                        
            <li><a href="#tab3">VINCULACIÓN</a></li>       
            <li><a href="#tab4">CAMBIOS</a></li>   -->                                     
		</ul>
		</header>
<?php
                       
$consulta = $db->consulta("
SELECT LPAD(ID_ALUMNO,4,0) AS 'FOLIO', ID_CVECURP AS 'CURP', 
NB_NOMAPATERNO AS 'APATERNO', NB_NOMAMATERNO AS 'AMATERNO',
NB_NOMNOMBRE1 AS 'NOMBRE1', NB_NOMNOMBRE2 AS 'NOMBRE2',
(SELECT ID_NMBNOMBRE FROM CAT_IES WHERE ID_IES=FK_ID_IES ) AS 'IES'
FROM TEST.001_CANDIDATO WHERE ID_ALUMNO>2500 AND ID_ALUMNO<3500 AND TP_STATUS=1;
");
?>                        
                        <div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
                                    <th>FOLIO</th> 
                                    <th>CURP</th>
                                    <th>APELLIDO PATERNO</th>
                                    <th>APELLIDO MATERNO</th>
                                    <th>NOMBRE(S)</th>
                                    <th>IES</th> 
                                    <th>EMPRESA</th> 
                                    
                                </tr> 
			</thead> 
			<tbody> 
			<?php
				while ($fila = $db->fetch_array($consulta)) {
                                    
                                    //modificar para agregar el expediente digital (opcional)
					/*echo "
					<tr> 
						<td>".$fila['FOLIO']."</td> ";
                                        if($fila['VCEDULA']==TRUE){
                                            echo "
                                                    <td><a href=docs/rfc/".$fila['CEDULA'].".pdf target='_blank'>".$fila['RFC']."</a></td>
                                                 ";
                                        }else {echo "
                                            <td>".$fila['RFC']."</td>
                                                ";}
                                         * */
                                         
                                        echo "
                                        <tr>
						<td>".$fila['FOLIO']."</td>
						<td>".$fila['CURP']."</td>
						<td>".$fila['APATERNO']."</td>
						<td>".$fila['AMATERNO']."</td>
                                                <td>".$fila['NOMBRE1']." ".$fila['NOMBRE2']."</td>
                                                <td>".$fila['IES']."</td>
                                                <td> - </td>
                                                
					</tr>";
				}
			?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
                        
<?php
$consulta = $db->consulta("
SELECT LPAD(ID_ALUMNO,4,0) AS 'FOLIO', ID_CVECURP AS 'CURP', 
NB_NOMAPATERNO AS 'APATERNO', NB_NOMAMATERNO AS 'AMATERNO',
NB_NOMNOMBRE1 AS 'NOMBRE1', NB_NOMNOMBRE2 AS 'NOMBRE2',
(SELECT ID_NMBNOMBRE FROM CAT_IES WHERE ID_IES=FK_ID_IES ) AS 'IES'
FROM TEST.001_CANDIDATO WHERE ID_ALUMNO>2500 AND ID_ALUMNO<3500 AND TP_STATUS=0;
");
?>
		<div class="tab_container">
			<div id="tab2" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
                                    <th>FOLIO</th> 
                                    <th>CURP</th>
                                    <th>APELLIDO PATERNO</th>
                                    <th>APELLIDO MATERNO</th>
                                    <th>NOMBRE(S)</th>
                                    <th>IES</th> 
                                    <th>EMPRESA</th>   
                                    <th>COMENTARIOS</th> 
                                    
                                </tr> 
			</thead> 
			<tbody> 
			<?php
				while ($fila = $db->fetch_array($consulta)) {
					   echo "
                                        <tr>
						<td>".$fila['FOLIO']."</td>
						<td>".$fila['CURP']."</td>
						<td>".$fila['APATERNO']."</td>
						<td>".$fila['AMATERNO']."</td>
                                                <td>".$fila['NOMBRE1']." ".$fila['NOMBRE2']."</td>
                                                <td>".$fila['IES']."</td>
                                                <td> - </td>
                                                <td> - </td>
					</tr>";
				}
			?>
			</tbody> 
			</table>
			</div><!-- end of #tab2 -->

		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
    
    
    
</section>