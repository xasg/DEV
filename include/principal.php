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
		<header><h3 class="tabs_involved">EMPRESAS PARTICIPANTES</h3>
		<ul class="tabs">
                        <li><a href="#tab1">2012</a></li>
   			<li><a href="#tab2">2011</a></li>                        
		</ul>
		</header>
<?php                        
$consulta = $db->consulta("
SELECT LPAD(empresa.id_EMPRESA,4,0) AS 'FOLIO', 
empresa.id_cveRFC AS 'RFC',
IF (empresa.tp_perJuridica=0, \"MORAL\",IF (empresa.tp_perJuridica=1, \"FISICA\", \"\")) AS 'PERSONALIDAD' ,
empresa.id_nomFiscal AS 'NOMBRE FISCAL',
empresa.nb_nomComercial AS 'NOMBRE COMERCIAL',  
UCASE((SELECT cat_entidad.nb_nomEnt FROM test.cat_entidad WHERE cat_entidad.id_cveEnt = empresa.ENTIDAD_id_cveEnt)) AS 'ENTIDAD',
empresa.gt_revFacturacion AS 'VCEDULA',
empresa.gt_urlRFC AS 'CEDULA'
FROM test.empresa WHERE tp_status=1;
");
?>                        
                        <div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
                                    <th>FOLIO</th> 
                                    <th>RFC</th>
                                    <th>PERSONALIDAD</th>
                                    <th>NOMBRE FISCAL</th>
                                    <th>NOMBRE COMERCIAL</th>
                                    <th>ENTIDAD</th> 
                                    <th>EXP</th>
                                    <th>EMP</th>
                                    <th>VIN</th>
                                    <th>LCAP</th>
                                </tr> 
			</thead> 
			<tbody> 
			<?php
				while ($fila = $db->fetch_array($consulta)) {
					echo "
					<tr> 
						<td>".$fila['FOLIO']."</td> ";
                                        if($fila['VCEDULA']==TRUE){
                                            echo "
                                                    <td><a href=docs/rfc/".$fila['CEDULA'].".pdf target='_blank'>".$fila['RFC']."</a></td>
                                                 ";
                                        }else {echo "
                                            <td>".$fila['RFC']."</td>
                                                ";}
                                        echo "
						<td>".$fila['PERSONALIDAD']."</td>
						<td>".$fila['NOMBRE FISCAL']."</td>
						<td>".$fila['NOMBRE COMERCIAL']."</td>
						<td>".$fila['ENTIDAD']."</td>
                                                <td> - </td>    
                                                <td> - </td>
                                                <td> - </td>
                                                <td> - </td>
					</tr>";
				}
			?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
                        
<?php
$consulta = $db->consulta("
SELECT LPAD(empresa.id_EMPRESA,4,0) AS 'FOLIO', 
empresa.id_cveRFC AS 'RFC',
IF (empresa.tp_perJuridica=0, \"MORAL\",IF (empresa.tp_perJuridica=1, \"FISICA\", \"\")) AS 'PERSONALIDAD' ,
empresa.id_nomFiscal AS 'NOMBRE FISCAL',
empresa.nb_nomComercial AS 'NOMBRE COMERCIAL',  
(SELECT cat_entidad.nb_nomEnt FROM test.cat_entidad WHERE cat_entidad.id_cveEnt = empresa.ENTIDAD_id_cveEnt) AS 'ENTIDAD',
empresa.gt_revFacturacion AS 'VCEDULA',
empresa.gt_urlRFC AS 'CEDULA'
FROM test.empresa WHERE id_EMPRESA<1000;
");
?>
		<div class="tab_container">
			<div id="tab2" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
                                    <th>FOLIO</th> 
                                    <th>RFC</th>
                                    <th>PERSONALIDAD</th>
                                    <th>NOMBRE FISCAL</th>
                                    <th>NOMBRE COMERCIAL</th>
                                    <th>ENTIDAD</th> 
                                    <th>EMPLEATE</th>
                                    <th>EXPERIMENTA</th>
				</tr> 
			</thead> 
			<tbody> 
			<?php
				while ($fila = $db->fetch_array($consulta)) {
					echo "
					<tr> 
						<td>".$fila['FOLIO']."</td> ";
                                        if($fila['VCEDULA']==TRUE){
                                            echo "
                                                    <td><a href=docs/rfc/".$fila['CEDULA'].".pdf target='_blank'>".$fila['RFC']."</a></td>
                                                 ";
                                        }else {echo "
                                            <td>".$fila['RFC']."</td>
                                                ";}
                                        echo "
                                        
						
						<td>".$fila['PERSONALIDAD']."</td>
						<td>".$fila['NOMBRE FISCAL']."</td>
						<td>".$fila['NOMBRE COMERCIAL']."</td>
						<td>".$fila['ENTIDAD']."</td>
                                                <td> <a href=#> - </a> </td>    
                                                <td> <a href=#> - </a> </td>    			
					</tr>";
				}
			?>
			</tbody> 
			</table>
			</div><!-- end of #tab2 -->

		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
    
    
    
</section>