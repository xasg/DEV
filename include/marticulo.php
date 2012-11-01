<?php
include 'mysql.php';
$db = new MySQL();
$consulta = $db->consulta("SELECT * FROM noticia WHERE tp_noticia=0 ORDER BY utc DESC LIMIT 5");
?>

<div id="noticias">
	<h2 class="noticias-titulo">NOTICIAS</h2>
	<div class="noticias-contenedor">
		<?php
		$count=0;
		$a=1;
		while($count<=1){
			if($count==0){
				$fila = $db->fetch_array($consulta);
					echo "
						<div class=\"noticias-principal\">
							<h2>".$fila['titulo']."</h2>
							
							<p>".$fila['texto']."</p>
							<br>
							<img src=\"../images/noticias/".$fila['imagen'].".png\" />
							<p><a href=\"".$fila['urlArticulo']."\" title=\"Ver más>>>\" target=\"_blank\">Ver más</a></p>
							
						</div>
						
					";
					$count++;
					
			}else{
					echo "
						<h2 class=\"defasado\">MÁS NOTICIAS</h2>
						<div class=\"noticias-adicionales\" >
							<ul>
					";
					
					while ( $fila = $db->fetch_array($consulta)){
						echo "
							
							<li><a href=\"".$fila['urlArticulo']."\" title=\"Ver más\" target=\"_blank\">".$fila['titulo']."</a></li>
						";
					}
					echo "
						</ul>
						</div>
					";
					$count++;
				
			}
		}
		?>
	<br class="clearfloat">
	</div>
</div>
<div id="eventos">
<?php
$consulta = $db->consulta("SELECT * FROM noticia WHERE tp_noticia=1 ORDER BY utc DESC LIMIT 5");
?>
	<h2 class="eventos-titulo">EVENTOS</h2>
	<div class="noticias-contenedor">
		<?php
		$count=0;
		$a=1;
		while($count<=1){
			if($count==0){
				$fila = $db->fetch_array($consulta);
					echo "
						<div class=\"noticias-principal\">
							<h2>".$fila['titulo']."</h2>
							
							<p>".$fila['texto']."</p>
							<br>
							<img src=\"../images/noticias/".$fila['imagen'].".png\" />
							<p><a href=\"".$fila['urlArticulo']."\" title=\"Ver más\" target=\"_blank\">Ver más</a></p>
							
						</div>
						
					";
					$count++;
					
			}else{
					echo "
						<h2 class=\"defasado\">MÁS EVENTOS</h2>
						<div class=\"noticias-adicionales\" >
							<ul>
					";
					
					while ( $fila = $db->fetch_array($consulta)){
						echo "
							
							<li><a href=\"".$fila['urlArticulo']."\" title=\"Ver más\" target=\"_blank\">".$fila['titulo']."</a></li>
						";
					}
					echo "
						</ul>
						</div>
					";
					$count++;
				
			}
		}
		?>
	<br class="clearfloat">
	</div>
</div>