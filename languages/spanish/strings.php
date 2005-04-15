<?php
	// Spanish Language File
	// (c) 2004 Javier Gutiérrez Chamorro (Guti), guti <at> ya <dot> com
	// Reviewed by Ridgarou, ridgarou <at> gmail <dot> com
	//
	// Simple PHP Version: 0.4.4
	// Language Version:   0.4.4.1
	
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Spanish
		$lang_string['locale'] = 'es_ES';
		$lang_string['language'] = 'spanish';
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-1';
		$lang_string['php_charset'] = 'ISO-8859-1';
		
		setlocale( LC_TIME, $lang_string['locale' ] );
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Enlaces";
		$lang_string['menu_home'] = "Principal";
		$lang_string['menu_contact'] = "Contacta Conmigo"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Estadísticas"; // <-- New 0.3.7r
		$lang_string['menu_archive'] = "Archivo";
		$lang_string['menu_menu'] = "Menú";
		$lang_string['menu_add'] = "Agregar Entrada";
		$lang_string['menu_add_static'] = "Agregar Página Estática";
		$lang_string['menu_upload'] = "Subir Imagen";
		$lang_string['menu_setup'] = "Configuración";
		$lang_string['menu_categories'] = "Categorías";
		$lang_string['menu_info'] = "Información"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Opciones";
		$lang_string['menu_themes'] = "Temas";
		$lang_string['menu_colors'] = "Colores";
		$lang_string['menu_change_login'] = "Cambiar usuario/contraseña";
		$lang_string['menu_logout'] = "Salir";
		$lang_string['menu_login'] = "Entrar";
		$lang_string['menu_most_recent'] = "Últimos Comentarios";
		$lang_string['menu_most_recent_entries'] = "Últimos Artículos";
		$lang_string['menu_most_recent_trackback'] = "Últimos Trackbacks"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "Bloques";

		// Other
		$lang_string['home'] = 'Página Principal';
		$lang_string['nav_next'] = 'Siguiente'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Anterior'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Búsqueda'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Enviar'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Página generada en %s segundos'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' );
		$lang_string['sb_default_title'] = 'Sin título';
		$lang_string['sb_default_author'] = 'Sin autor';
		$lang_string['sb_default_footer'] = 'Pie de Página';
		
		$lang_string['sb_edit'] = 'editar';
		$lang_string['sb_delete'] = 'borrar';
		$lang_string['sb_permalink'] = 'enlace permanente'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		
		$lang_string['sb_add_comment_btn'] = 'añadir comentario';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'comentario';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'comentarios';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' visualización';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' visualizaciones';
		
		$lang_string['sb_add_link_btn'] = 'Añadir Enlaces';
		
		$lang_string['sb_rate_entry_btn'] = 'Haga clic para valorar la entrada';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Título:";
				$lang_string['label_insert'] = "Extras (Negrita / Cursiva / URL / Imagen):";
				$lang_string['btn_bold'] = " N ";
				$lang_string['btn_italic'] = " I ";
				$lang_string['btn_image'] = "IMG";
				$lang_string['btn_url'] = "URL";
				$lang_string['view_images'] = "Ver imágenes cargadas";
				$lang_string['label_entry'] = "Texto:";
				$lang_string['btn_preview'] = "&nbsp;Previsualizar&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Publicar&nbsp;";
				$lang_string['file_name'] = "Nombre de fichero estático: (sin espacios ni extensiones de fichero)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "Introduzca el texto";
				$lang_string['insert_image'] = "Introduzca la dirección URL para la imagen";
				$lang_string['insert_url1'] = "Introduzca el texto a ser mostrado con el enlace (opcional)";
				$lang_string['insert_url2'] = "Introduzca la dirección web completa para el enlace";
				$lang_string['insert_url3'] = "Abrir URL en una nueva ventana (Opcional):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Por favor rellene los campos Título y Texto.";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Opcional:';
				$lang_string['insert_image_width'] = 'Ancho (Opcional):';
				$lang_string['insert_image_height'] = 'Alto (Opcional):';
				$lang_string['insert_image_popup'] = 'Ver en una ventana emergente al hacer clic (Opcional):';
				$lang_string['insert_image_float'] = 'Flotar (Opcional):';
				$lang_string['insert_image_align'] = 'Alineación horizontal (Opcional):';	//0.4.4
				$lang_string['insert_image_valign'] = 'Alineación vertical (Opcional):';	//0.4.4
				$lang_string['insert_image_alt'] = 'Texto alternativo (Opcional):';	//0.4.4
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Añadir Entrada";
				$lang_string['instructions'] = "Para colocar una entrada llene los campos que se encuentran debajo, puede previsualizar la entrada antes de publicarla.";
				$lang_string['title_ad'] = "Confirm Trackback Pings"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "Éstos son los Auto-Discovered URIs sobre los que hará ping. Si no quiere hacer ping a un cierto URI, deschequee. Entonces pulse 'OK' para hacer ping sobre las URIs chequeadas o pulse 'Cancel' para no realizar ningun ping."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) a enviar (separados por comas)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Previsualizar / Editar entrada";
				$lang_string['instructions_preview'] = "Así es como se ve su entrada";
				$lang_string['title_update'] = "Actualizar entrada";
				$lang_string['instructions_update'] = "Puede cambiar su entrada utilizando el formulario que se encuentra debajo.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La entrada no pudo ser guardada. Se encontró un problema mientras se almacenaba la entrada.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Añadir Página Estática";
				$lang_string['instructions'] = "Rellena el formulario que se encuentra debajo para crear una página estática. A diferencia de una entrada ordinaria a la bitácora, las entradas estáticas aparecen como enlaces en el menú de la derecha. Podrían usarse para páginas que desees que esten disponibles siempre, tales como: Sobre mí, Contáctenos, Agenda, etc. Presione 'Previsualizar' para mirar como lucirá la página, o presione 'Publicar' para guardar la página";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Previsualizar / Editar Página Estática";
				$lang_string['instructions_preview'] = "Así es como su página estática lucirá. Si esta usando estilos de texto o ha incluido imágenes, recuerde 'cerrar' todas las 'etiquetas'.";
				$lang_string['title_update'] = "Actualizar Página Estática";
				$lang_string['instructions_update'] = "Puedes cambiar la entrada usando el formulario que se encuentra debajo. Presiona 'Previsualizar' o 'Publicar' cuando estes listo.";
				$lang_string['form_error'] = "Por favor complete los campos Título, Texto y Nombre.";	
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La entrada no pudo ser guardada. Se encontró un problema mientras se almacenaba la entrada.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Agregar / Administrar Bloques";
				$lang_string['instructions'] = "Agregar Bloque Personalizado para mostrar en el Menú Lateral";
				$lang_string['up'] = "Arriba";
				$lang_string['down'] = "Abajo";
				$lang_string['edit'] = "Editar";
				$lang_string['delete'] = "Borrar";
				$lang_string['enable'] = "Habilitar";  // <-- New 0.4.4
				$lang_string['disable'] = "Deshabilitar"; // <-- New 0.4.4
				$lang_string['block_name'] = "Nombre del Bloque:";
				$lang_string['block_content'] = "Contenido del Bloque:";
				
				$lang_string[ 'enable' ] = "enable";   // <-- New 0.4.4
				$lang_string[ 'disable' ] = "disable"; // <-- New 0.4.4
				
				$lang_string[ 'block_scope_pri' ] = "Private"; // <-- New 0.4.4
				$lang_string[ 'block_scope_pub' ] = "Public";  // <-- New 0.4.4	
				
				$lang_string[ 'block_status_ena' ] = "Enabled";	 // <-- New 0.4.4
				$lang_string[ 'block_status_dis' ] = "Disabled"; // <-- New 0.4.4	 
				
				$lang_string[ 'block_position' ] = "Position ";	     // <-- New 0.4.4
				$lang_string[ 'block_position_top' ] = "Top";	    // <-- New 0.4.4
				$lang_string[ 'block_position_left' ] = "Left";	    // <-- New 0.4.4
				$lang_string[ 'block_position_center' ] = "Center"; // <-- New 0.4.4
				$lang_string[ 'block_position_right' ] = "Right";   // <-- New 0.4.4
				$lang_string[ 'block_position_botton' ] = "Botton"; // <-- New 0.4.4				
				   
				
				$lang_string['block_scope_pri'] = "Privado"; // <-- New 0.4.4
				$lang_string['block_scope_pub'] = "Público"; // <-- New 0.4.4
				
				$lang_string['block_status_ena'] = "Habilitado";	// <-- New 0.4.4
				$lang_string['block_status_dis'] = "Deshabilitado";	// <-- New 0.4.4
				
				$lang_string[ 'block_position' ] = "Posición ";	     // <-- New 0.4.4
				$lang_string[ 'block_position_top' ] = "Arriba";	 // <-- New 0.4.4
				$lang_string[ 'block_position_left' ] = "Izquierda"; // <-- New 0.4.4
				$lang_string[ 'block_position_center' ] = "Centro";  // <-- New 0.4.4
				$lang_string[ 'block_position_right' ] = "Derecha";  // <-- New 0.4.4
				$lang_string[ 'block_position_botton' ] = "Abajo";   // <-- New 0.4.4				

				$lang_string['instructions_edit'] = "Estás editando un Bloque:";
				$lang_string['instructions_modify'] = "Haga clic debajo en <b>Editar</b> para modificar el Bloque:";
				$lang_string['submit_btn_edit'] = "Editar Bloque";
				$lang_string['submit_btn_add'] = "Agregar Bloque";
				$lang_string['form_error'] = "Por favor rellene el campo Nombre."; 
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Páginas Estáticas:";
				// Add / Manage Links
				$lang_string['title'] = "Agregar / Administrar Enlaces";
				$lang_string['instructions'] = "Agregar enlaces a otros sitios web. Presione los botones Arriba y Abajo para cambiar el orden de los enlaces.";
				$lang_string['up'] = "Arriba";
				$lang_string['down'] = "Abajo";
				$lang_string['edit'] = "Editar";
				$lang_string['delete'] = "Borrar";
				$lang_string['link_name'] = "Nombre del Enlace:";
				$lang_string['link_url'] = "URL (Dirección Web):";
				$lang_string['instructions_edit'] = "Estás editando un enlace:";
				$lang_string['instructions_modify'] = "Haga clic debajo en <b>Editar</b> para modificar el enlace:"; // <-- New
				$lang_string['submit_btn_edit'] = "Editar enlace";
				$lang_string['submit_btn_add'] = "Agregar enlace";
				$lang_string['form_error'] = "Por favor rellene los campos Nombre y URL.";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "Agregar / Administrar Categorias";
				$lang_string['instructions'] = "Rellena el formulario que se encuentra debajo para crear una categoria. Each category item should be in this format 'category name (id number)'. Indent items with spaces to create heirarchies.<br /><br /><b>Example:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technology (2)<br />";
				$lang_string['error'] = "Error";
				$lang_string['current_categories'] = "Categorias Actuales";
				$lang_string['no_categories_found'] = "No se encontraron Categorias";
				$lang_string['category_list'] = "Lista de Categorias:";
				$lang_string['validate'] = "Validar";
				$lang_string['submit_btn'] = "&nbsp;Aceptar&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Cambiar colores";
				$lang_string['instructions'] = "Puede cambiar los colores del texto y del fondo de la entrada.";
				$lang_string['bg_color'] = "Fondo de página";
				$lang_string['main_bg_color'] = "Fondo de la página principal";
				$lang_string['border_color'] = "Borde de página";
				$lang_string['inner_border_color'] = "Borde Interior";
				$lang_string['header_bg_color'] = "Fondo del encabezado";
				$lang_string['header_txt_color'] = "Texto del encabezado";
				$lang_string['menu_bg_color'] = "Fondo del menú";
				$lang_string['footer_bg_color'] = "Fondo del pie de página";
				$lang_string['txt_color'] = "Texto principal";
				$lang_string['headline_txt_color'] = "Texto del encabezado";
				$lang_string['date_txt_color'] = "Texto de la fecha";
				$lang_string['footer_txt_color'] = "Texto del pie de página";
				$lang_string['link_reg_color'] = "Enlace normal";
				$lang_string['link_hi_color'] = "Enlace resaltado";
				$lang_string['link_down_color'] = "Enlace visitado";
				// More Colors
				$lang_string['entry_bg'] = "Fondo de la entrada";
				$lang_string['entry_title_bg'] = "Fondo del título de la entrada";
				$lang_string['entry_border'] = "Borde de la entrada";
				$lang_string['entry_title_text'] = "Texto del título de la entrada";
				$lang_string['entry_text'] = "Texto de la entrada";
				$lang_string['menu_bg'] = "Fondo del menú";
				$lang_string['menu_title_bg'] = "Fondo del título del menú";
				$lang_string['menu_border'] = "Borde del menú";
				$lang_string['menu_title_text'] = "Texto del título del menú";
				$lang_string['menu_text'] = "Texto del menú";
				$lang_string['menu_link_reg_color'] = "Enlace normal en el menú";
				$lang_string['menu_link_hi_color'] = "Enlace resaltado en el menú";
				$lang_string['menu_link_down_color'] = "Enlace visitado en el menú";
				// Submit
				$lang_string['color_preset'] = "Esquemas de Color:";
				$lang_string['scheme_name'] = "Introduzca un nombre para el Esquema de Color Personalizado:";
				$lang_string['scheme_file'] = "Introduzca el nombre del fichero del Esquema: (sin espacio ni extensiones)";
				$lang_string['form_error'] = "Por favor, introduzca un nombre para suEsquema de Color Personalizado.";
				$lang_string['save_btn'] = "&nbsp;Guardar&nbsp;";
				$lang_string['submit_btn'] = "&nbsp;Aceptar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La información no pudo ser guardada. Se encontró un problema mientras se almacenaba su información.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['title'] = "Comentarios";
				$lang_string['header'] = "Agregar comentario";
				$lang_string['instructions'] = "Rellene los campos de abajo para dejar su comentario.";
				$lang_string['comment_name'] = "Nombre:";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "Web:"; // 0.3.8
				$lang_string['comment_capcha'] = "Anti-Spam: Introduzca <b>%s</b>"; // 0.4.2
				$lang_string['form_error'] = "Por favor rellene los campos Nombre , Comentario y el campo Anti-Spam."; //0.4.2
				$lang_string['comment_remember'] = "Recordar mi información personal:"; // 0.3.8
				$lang_string['comment_text'] = "Comentario:";
				$lang_string['post_btn'] = "&nbsp;Publicar comentario&nbsp;";
				$lang_string['delete_btn'] = "Borrar";
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Comentario no grabado. Ocurrió un problema mientras se guardaba su comentario.<br /><br />Respuesta del servidor:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Comentario no borrado. Ocurrió un problema mientras se borraba su comentario.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'delete':
				$lang_string['title'] = "Borrar entrada";
				$lang_string['instructions'] = "Está a punto de borrar una entrada, asegúrese de querer borrarla porque no hay forma de deshacer el cambio...";
				$lang_string['ok_btn'] = "&nbsp;Borrar&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>No se pudo borrar la entrada.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Borrar Página Estática";
				$lang_string['instructions'] = "Está a punto de borrar una página estática, asegúrese de querer borrarla porque no hay forma de deshacer el cambio...";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>No se pudo borrar la entrada.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Lista de imágenes";
				$lang_string['instructions'] = "Haga clic en los enlaces que estan debajo para ver la imagen.<br><br>Para agregar una imagen a su entrada:<br>1) Haga clic derecho en un enlace y seleccione 'Copiar en el portapapeles'.<br>2) Regrese a la página de agregar o editar entrada.<br>3) Haga clic en el botón Imagen y pegue el enlace en la ventana.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Información de Meta-datos";
				$lang_string['instructions'] = "Esta información se usa para los &quot;meta-datos&quot;, que ayudan a los buscadores a indexar su web. También se usan para generar los feeds RSS.";
				$lang_string['info_keywords'] = "Palabras clave: (Lista de palabras clave separadas por comas.)";
				$lang_string['info_description'] = "Descripción: (Un resumen o texto libre sobre tu sitio.)";
				$lang_string['info_copyright'] = "Derechos: (Información de copyright o un enlace a la página que la contiene.)";
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La información no pudo ser guardada. Se encontró un problema mientras se almacenaba su información.<br /><br />Respuesta del servidor:<br />";
				$lang_string['form_error'] = "Por favor rellene los campos Título y Autor.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>¡Ups!</h2>La información no pudo ser guardada. Se encontró un problema mientras se almacenaba su información.<br /><br />Respuesta del servidor:<br />";
				break;			
			case 'login':
				$lang_string['upgrade'] = "<h2>Actualización</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n ficheros de comentarios necesitan ser actualizados:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Actualizar Comentarios"; // New 0.3.8
				$lang_string['title'] = "Login";
				$lang_string['instructions'] = "Introduzca su nombre de usuario y contraseña";
				$lang_string['username'] = "Usuario:";
				$lang_string['password'] = "Contraseña";
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>¡Bienvenido!</h2>¡Se ha coenctado con éxito!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>¡Ups!</h2>No puede ingresar. Verifique su nombre de usuario y contraseña e inténtelo de nuevo.<p />";
				$lang_string['form_error'] = "Por favor rellene los campos Usuario y Contraseña."; // <-- Need Translation
				break;
			case 'logout':
				$lang_string['title'] = "Salir";
				$lang_string['instructions'] = "<h2>¡Ups!</h2>Error intentando salir. No se pudo borrar la cookie. ¿Por que sigue conectado?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La información no pudo ser guardada. Se encontró un problema mientras se almacenaba su información.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Cambiar Usuario y Contraseña";
				$lang_string['instructions'] = "Use el formulario inferior para cambiar su nombre de usuario y contraseña. Inserta el nombre de usuario y la contraseña que quieras usar.";
				$lang_string['username'] = "Usuario:";
				$lang_string['password'] = "Contraseña:";
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>¡Listo!</h2>Su nuevo nombre de usuario y/o contraseña esta activo desde ahora.<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>¡Ups!</h2>Información no guardada. Hubo un error mientras se guardaba su nombre de usuario y contraseña .<br /><br />Respuesta del servidor:<br />";
				$lang_string['form_error'] = "Por favor complete los campos Usuario y Contraseña.";
				break;
			case 'install00':
				$lang_string['title'] = "Bienvenido";
				$lang_string['instructions'] = "¡Gracias por elegir Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Selección de Idioma:";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Bienvenido";
				$lang_string['instructions'] = "¡Gracias por elegir Simple PHP Blog!<br /><br />Simple PHP Blog es un sistema de blogging de peso ligero. Requiere PHP is 4.1 o superior y permisos de escritura en el servidor. Toda la información es guardada en archivos de texto plano por lo que no requiere una base de datos para funcionar.<br /><br />
				Para comenzar, Simple PHP Blog necesita crear tres carpetas ('config', 'content', e 'images') en la cuales guardará su información.<br /><br />
				<b>Haga clic debajo para comenzar la instalación:</b>";

				$lang_string['begin'] = "[ Comenzar Instalación ]";
				break;
			case 'install02':
				$lang_string['title'] = "Instalación";
				$lang_string['instructions'] = "Intentando crear las carpetas 'config', 'content', e 'images':";
				$lang_string['folder_exists'] = "¡Listo! Las carpetas ya existían. No se hicieron cambios...";
				$lang_string['folder_failed'] = "¡Ups! No se pudieron crear las carpetas...";
				$lang_string['folder_success'] = "¡Listo! Carpetas creadas...";
				// Help
				$lang_string['help'] = "
				<h2>¡Ups!</h2>¡No se pudieron crear una o más de las carpetas! Esto sucede usualmente debido a:<br>
				<i>1) <b>Permisos de escritura</b> no estan configurados para permitir acceso de  <b>Escritura/Lectura</b>.</i><br>
				<i>2) Las <b>UID</b>'s (user ID's) de todos los archivos y carpetas deben corresponder.</i><p />
				Siga las instrucciones siguientes para resolver el problema y luego intente de nuevo:<p />				
				1) Cree manualmente las siguientes carpetas: <b>config</b>, <b>content</b>, e <b>images</b>.<p />
				2) Habilite <b>Permisos de escritura</b> a las carpetas. En su cliente FTP; Owner, User, y World deben tener acceso de <b>Read</b> y <b>Write</b>. <i>(Podría necesitar contactar a su proveedor de servicios para cambiar esto...)</i><p />
				3) Asegúrese de que las UID's de todos sus archivos y carpetas son los mismos. <i>(Podría necesitar contactar a su proveedor de servicios para cambiar esto...)</i>";

				$lang_string['try_again'] = "[ Reintentar ]";
				// Success
				$lang_string['success'] = "<h2>¡Listo!</h2>¡Carpetas creadas exitosamente!<p /><b>Haga clic debajo para continuar:</b>";
				$lang_string['continue'] = "[ Continuar ]";
				break;
			case 'install03':
				$lang_string['title'] = "Crear Usuario y Contraseña";
				$lang_string['instructions'] = "Use el formulario inferior para crear un Usuario y una Contraseña.";
				$lang_string['username'] = "Usuario:";
				$lang_string['password'] = "Contraseña:";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>¡Felicitaciones!</h2>Esta ahora conectado. Haga clic debajo para visitar la página de configuración y cambiar las opciones de su bitácora.<p />";
				$lang_string['btn_setup'] = "[ Configuración ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>¡Ups!</h2>Información no guardada. Hubo un error mientras se guardaba su nombre de usuario y contraseña .<br /><br />Respuesta del servidor:<br />";
				$lang_string['form_error'] = "Por favor, rellene los campos Usuario y Contraseña";
				break;
			case 'setup':
				$lang_string['title'] = "Configuración";
				$lang_string['instructions'] = "Puede cambiar el nombre de su bitácora y su información personal debajo.";
				$lang_string['blog_title'] = "Nombre de la Bitácora:";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "Correo Electrónico:"; // <-- New 0.3.7
				$lang_string['blog_footer'] = "Pie de página:";
				$lang_string['blog_choose_language'] = "Elegir Idioma:";
				$lang_string['blog_enable_comments'] = "Permitir Comentarios de Usuarios"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Abrir comentarios en Ventanas Emergentes"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "Permitir a los Usuarios Votar Artículos"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Enviar email cuando se publique un comentario"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Enviar &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "URL completa (ej: http://rpc.weblogs.com/RPC2) del servicio de &quot;ping&quot;.<br />(Puedes introducir más de una separándolas por comas.)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Enable trackback in my blog"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "Máximas Entradas a Mostrar:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Etiquetas permitidas en los Comentarios:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					A partir de la versión 4.0.4, PHP puede leer y escribir archivos comprimidos gzip (.gz), lo cual ahorra espacio en disco. Por otra parte, es posible comprimir las páginas que se envían a un navegador que soporte gzip, ahorrando así ancho de banda.<br />
					<br />El soporte de Zlib no viene activado por defecto en el PHP. Si las casillas de verificación están desactivadas significa que su PHP no soporta la extensión Zlib."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Activar compresión GZIP para archivos datos"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Activar compresión GZIP para la salida HTTP"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La información no pudo ser guardada. Se encontró un problema mientras se almacenaba su información.<br /><br />Respuesta del servidor:<br />";
				$lang_string['form_error'] = "Por favor complete los campos Título y Autor.";
				$lang_string['label_entry_order'] = "Orden de Artículos:";
				$lang_string['select_new_to_old'] = "Primero los Nuevos";
				$lang_string['select_old_to_new'] = "Primero los Antiguos";
				$lang_string['label_comment_order'] = "Orden de Comentarios:";
				break;
			case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "Trackback URL para esta entrada:";
				$lang_string['delete_btn'] = "Borrar";
				// Error Response
				$lang_string['error_add'] = "Se produjo un error guardando los datos del trackback.";
				break;
			case 'options':
				$lang_string['title'] = "Opciones";
				$lang_string['instructions'] = "Use el formulario de debajo para personalizar el formato en que se presentará la fecha y hora en la bitácora y en los comentarios. Puedes seleccionar el formato de 12 o de 24 horas. Formato corto o largo. Las areas de <b>Previsualización</b> le muestran automáticamente como se verá su formato.";
				// Long Date
				$lang_string['ldate_title'] = "Formato de Fecha Larga:";
				$lang_string['weekday'] = "Día de la Semana";
				$lang_string['month'] = "Mes";
				$lang_string['day'] = "Día";
				$lang_string['year'] = "Año";
				$lang_string['none'] = "Ninguno";
				// Short Date
				$lang_string['sdate_title'] = "Formato de Fecha Corta:";
				$lang_string['s_month'] = "Mes";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Día";
				$lang_string['s_year'] = "Año";
				$lang_string['zero_day'] = "Cero inicial para el Día";
				$lang_string['show_century'] = "Mostrar siglo";
				// Time
				$lang_string['time_title'] = "Formato de Hora:";
				$lang_string['12hour'] = "Reloj de 12 horas";
				$lang_string['24hour'] = "Reloj de 24 horas";
				$lang_string['before_noon'] = "Before Noon";
				$lang_string['after_noon'] = "After Noon";
				// Date
				$lang_string['date_title'] = "Formato de Visualización de Fecha:";
				$lang_string['long_date'] = "Fecha Larga";
				$lang_string['short_date'] = "Fecha Corta";
				$lang_string['time'] = "Hora";
				// Menu
				$lang_string['menu_title'] = "Formato de Visualización en el Menú Fecha:";
				$lang_string['long_date'] = "Fecha Larga";
				$lang_string['short_date'] = "Fecha Corta";
				// Used in multiple places
				$lang_string['zero_day'] = "Cero inicial para el Día";
				$lang_string['zero_month'] = "Cero inicial para el Mes";
				$lang_string['zero_hour'] = "Cero inicial para la Hora";
				$lang_string['separator'] = "Separador:";
				$lang_string['preview'] = "Previsualización:";
				$lang_string['server_offset'] = "Offset del Servidor:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La información no pudo ser guardada. Se encontró un problema mientras se almacenaba su información.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Temas";
				$lang_string['instructions'] = "Use la lista de opciones para seleccionar un tema distinto.";
				// Themes
				$lang_string['choose_theme'] = "Temas:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La información no pudo ser guardada. Se encontró un problema mientras se almacenaba su información.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Subir imagen";
				$lang_string['instructions'] = "Haga clic debajo para subir una imagen.";
				$lang_string['select_file'] = "Seleccionar archivo:";
				$lang_string['stats']="Actualmente tienes subidos <b>%s</b> archivo(s) usando <b>%s</b> bytes.";		//0.4.4
				$lang_string['upload_btn'] = "Subir";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>Fue imposible subir la imagen. Aquí hay mas información:<br /><br />Respuesta del servidor:<br />";
				break;
			case 'search':
				$lang_string['title'] = "Resultados de la búsqueda";
				$lang_string['instructions'] = "Resultados de la búsqueda para la cadena <b>'%string'</b>:";
				$lang_string['not_found'] = "No se encontraron resultados";
				break;
			case 'contact': // <-- New 0.3.8
				$lang_string['title'] = "Contacta Conmigo";
				$lang_string['instructions'] = "Rellena el formulario:";
				$lang_string['form_error'] = "Por favor, completa los campos Asunto, Comentario y Anti-Spam.";
				$lang_string['name'] = "Nombre:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Asunto:";
				$lang_string['comment'] = "Comentario:";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				$lang_string['success'] = "<h2>¡Listo!</h2>Su mensaje ha sido enviado.<p />";
				$lang_string['error'] = "<h2>¡Ups!</h2>El email no pudo ser enviado.<p />"; //0.4.4
				$lang_string['capcha'] = "Anti-Spam: Introduzca <b>%s</b>"; // 0.4.4
				break;
			case 'stats':
				$lang_string['title'] = "<h2>Estadísticas</h2>";
				$lang_string['general'] = "<h3>General</h3>";
				$lang_string['entry_info'] = "<b>%s</b> artículos usando <b>%s</b> palabras ocupando <b>%s</b> bytes";
				$lang_string['upload_info']="<b>%s</b> archivos subidos ocupando <b>%s</b> bytes";		//0.4.4
				$lang_string['comment_info'] = "<b>%s</b> comentarios usando <b>%s</b> palabras ocupando <b>%s</b> bytes";
				$lang_string['trackback_info'] = "<b>%s</b> trackbacks ocupando <b>%s</b> bytes";
				$lang_string['static_info'] = "<b>%s</b> páginas estáticas usando <b>%s</b> palabras ocupando <b>%s</b> bytes";
				$lang_string['most_viewed_entries'] = "<h3>10 Artículos más vistos</h3>";
				$lang_string['most_commented_entries'] = "<h3>10 Artículos más comentados</h3>";
				$lang_string['most_trackbacked_entries'] = "<h3>10 Artículos con más trackbacks</h3>";
				$lang_string['vote_info'] = "<b>%s</b> votos ocupando <b>%s</b> bytes"; // 0.4.1
				$lang_string['most_voted_entries'] = "<h3>10 Artículos más votados</h3>"; //0.4.1
				$lang_string['most_rated_entries'] = "<h3>10 Artículos mejor valorados</h3>"; //0.4.1
				break;
			default:
				break;
		}

	}

?>
