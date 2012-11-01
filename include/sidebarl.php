<?php 
	include 'leftmenu.php';
	$myleftmenu= new leftmenu();
?>
	<aside id="sidebar" class="column">
		
	<?php 
		$myleftmenu->tipomenu("cat");
		$myleftmenu->tipomenu("copyright");
                
	?>		
	</aside><!-- end of sidebar -->
