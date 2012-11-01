<?php
class leftmenu{
	/*var $texto;*/
	/**
         *Constructor de la clase tipo menú, se utiliza para inicializarla clase 
         */
	public function leftmenu(){
	}
        /**
         *Función para ingresar el tipo de elemento generico que se desea desplegar, 
         * exixsten los siguentes tipos: search, copyright, content,user, media y admin
         * @param $texto type string 
         */
	public function tipomenu($texto){
		switch ($texto){
			case "search":
				echo "<form class=\"quick_search\">
				<input type=\"text\" value=\"Quick Search\" onfocus=\"if(!this._haschanged){this.value=''};this._haschanged=true;\">
				</form>";
				break;
			case "copyright":
				echo "<footer>
				<hr />
				<p><strong>Copyright &copy; 2012 Website FESE</strong></p>
				
				</footer>";
				break;
			case "content":
				echo "<h3>content</h3>
				<ul class=\"toggle\">
				<li class=\"icn_new_article\"><a href=\"#\">New Article</a></li>
				<li class=\"icn_edit_article\"><a href=\"#\">Edit Articles</a></li>
				<li class=\"icn_categories\"><a href=\"#\">Categories</a></li>
				<li class=\"icn_tags\"><a href=\"#\">Tags</a></li>
				</ul>";
				break;
			case "user":
				echo "<h3>users</h3>
				<ul class=\"toggle\">
				<li class=\"icn_add_user\"><a href=\"#\">Add New User</a></li>
				<li class=\"icn_view_users\"><a href=\"#\">View Users</a></li>
				<li class=\"icn_profile\"><a href=\"#\">Your Profile</a></li>
				</ul>";
				break;
			case "media":
				echo "<h3>media</h3>
				<ul class=\"toggle\">
				<li class=\"icn_folder\"><a href=\"#\">File Manager</a></li>
				<li class=\"icn_photo\"><a href=\"#\">Gallery</a></li>
				<li class=\"icn_audio\"><a href=\"#\">Audio</a></li>
				<li class=\"icn_video\"><a href=\"#\">Video</a></li>
				</ul>";
				break;
			case "admin":
				echo "<h3>admin</h3>
				<ul class=\"toggle\">
				<li class=\"icn_settings\"><a href=\"#\">Options</a></li>
				<li class=\"icn_security\"><a href=\"#\">Security</a></li>
				<li class=\"icn_jump_back\"><a href=\"#\">Logout</a></li>
				</ul>";
				break;
			case "cat":
				echo "<h3>Catálogos</h3>
				<ul class=\"toggle\">
				<li class=\"icn_folder\"><a href=\"empresas.php\">Empresas</a></li>
                                <li class=\"icn_view_users\"><a href=\"beneficiariosExp2012.php\">Beneficiarios Experimenta</a></li>
                                <li class=\"icn_view_users\"><a href=\"beneficiariosEmp2012.php\">Beneficiarios Empleate </a></li>
				
				
				</ul>";
				break;
			default; echo "no existe, opciones:search,copyright,content,user,media,admin";
			break;
		}
	}
	
}

?>
