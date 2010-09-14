<?php
  // Spanish Language File
  // (c) 2008 Cristian Olate, cristian <dot> olate <at> gmail <dot> com

  // Simple PHP Version: 0.5.0.1
  // Language Version:   0.5.0.1

  function sb_language( $page ) {
    global $language, $html_charset, $php_charset, $lang_string;

    // Language: Spanish
    $lang_string['language'] = 'español';
    $lang_string['locale'] = array('es_ES', 'es');
    $lang_string['rss_locale'] = 'es-ES'; // New 0.4.8

    // ISO Charset: ISO-8859-1
    $lang_string['html_charset'] = 'ISO-8859-1';
    $lang_string['php_charset'] = 'ISO-8859-1';
    setlocale( LC_TIME, $lang_string['locale'] );

    // Global Strings

    // Menu
    $lang_string['menu_links'] = "Enlaces";
    $lang_string['menu_home'] = "Inicio";
    $lang_string['menu_contact'] = "Contácteme";
    $lang_string['menu_stats'] = "Estadísticas";
    $lang_string['menu_calendar'] = "Calendario"; // New for 0.4.8
    $lang_string['menu_archive'] = "Archivos";
    $lang_string['menu_viewarchives'] = "Ver Archivos";
    $lang_string['menu_menu'] = "Menú";
    $lang_string['menu_add'] = "Crear Entrada";
    $lang_string['menu_add_static'] = "Crear Página Estática";
    $lang_string['menu_upload'] = "Subir Imagen";
    $lang_string['menu_setup'] = "Preferencias";
    $lang_string['menu_categories'] = "Categorías";
    $lang_string['menu_info'] = "Meta Tags";
    $lang_string['manage_users'] = "Administrador de Usuarios";
    $lang_string['manage_php_config'] = "Ver Configuración de PHP"; // New in 0.5.0.1
    $lang_string['menu_options'] = "Fecha y Hora";
    $lang_string['menu_themes'] = "Temas";
    $lang_string['menu_colors'] = "Colores";
    $lang_string['menu_change_login'] = "Cambiar Nombre de Usuario";
    $lang_string['menu_logout'] = "Salir";
    $lang_string['menu_login'] = "Entrar";
    $lang_string['menu_most_recent'] = "Comentarios Recientes";
    $lang_string['menu_most_recent_entries'] = "Entradas Recientes";
    $lang_string['menu_most_recent_trackback'] = "Trackbacks Recientes";
    $lang_string['menu_add_block'] = "Bloques";
    $lang_string['menu_emoticons'] = "Emoticones"; // New for 0.4.7
    $lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
    $lang_string['menu_moderation'] = "Moderación Palabras/IP"; // New for 0.4.9
    $lang_string['menu_commentmoderation'] = "Comentarios Sin Moderar"; // New for 0.5.0
	$lang_string['menu_random_entry'] = "Entrada Aleatoria"; // New for 0.5.2
	$lang_string['menu_plugins'] = "Plugins"; // New for 0.5.2
    $lang_string['notice_moderator1'] = "Usted tiene ";
    $lang_string['notice_moderator2'] = " comentario(s) que requieren aprobación.";
    $lang_string['notice_loggedin'] = "Usted está actualmente conectado.";
    

    // Counter
    $lang_string['counter_today'] = "Hoy:"; // New for 0.4.8
    $lang_string['counter_yesterday'] = "Ayer:"; // New for 0.4.8
    $lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
    $lang_string['counter_title'] = "Contador de Totales"; // New for 0.4.8

    // Other
    $lang_string['home'] = 'Volver al Inicio';
    $lang_string['nav_next'] = 'Siguiente';
    $lang_string['nav_back'] = 'Volver';
    $lang_string['nav_first'] = 'Primero'; // New in 0.5.0.1
    $lang_string['nav_last'] = 'Último'; // New in 0.5.0.1
    $lang_string['search_title'] = 'Buscar';
    $lang_string['search_go'] = 'Ir';
    $lang_string['page_generated_in'] = 'Página generada en %s segundos';
    $lang_string['counter_total'] = 'Visitas: '; // New in 0.4.8
    $lang_string['read_more'] = 'Leer Más...'; // New in 0.4.8
    $lang_String['randomentry'] = 'Entrada Aleatoria'; // New in 0.5.0.1
    $lang_string['randomquote'] = 'Cita Aleatoria'; // New in 0.5.0.1

    // SB Functions
    $lang_string['sb_months'] = array( 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' );
    $lang_string['sb_default_title'] = 'Sin Título';
    $lang_string['sb_default_author'] = 'Sin Autor';
    $lang_string['sb_default_footer'] = 'Sin Pie de Página';

    $lang_string['sb_edit'] = 'editar';
    $lang_string['sb_delete'] = 'borrar';
    $lang_string['sb_permalink'] = 'enlace permanente';
    $lang_string['sb_trackback'] = 'trackbacks';
    $lang_string['sb_postedby'] = 'Escrito por'; // 0.5.0
    $lang_string['sb_admin'] = 'Administrador'; // 0.5.0
    $lang_string['sb_relatedlink'] = 'enlace relacionado'; // <-- New in 0.4.6

    $lang_string['sb_add_comment_btn'] = 'agregar comentario';
    $lang_string['sb_read_entry_btn'] = 'ver entrada'; // 0.5.0
    $lang_string['sb_comment_btn_number_first'] = true;
    $lang_string['sb_comment_btn'] = 'comentario';
    $lang_string['sb_comment_view'] = 'ver'; // 0.5.0
    $lang_string['sb_comments_plural_btn_number_first'] = true;
    $lang_string['sb_comments_plural_btn'] = 'comentarios';
    $lang_string['sb_comments_plural_view'] = 'ver'; // 0.5.0

    // ( 1 view )
    $lang_string['sb_view_counter_pre'] = 'leído ';
    $lang_string['sb_view_counter_post'] = ' vez';

    // ( 2 views )
    $lang_string['sb_view_counter_plural_pre'] = 'leído ';
    $lang_string['sb_view_counter_plural_post'] = ' veces';

    $lang_string['sb_add_link_btn'] = '+ enlace';
    $lang_string['sb_rate_entry_btn'] = 'Pinche para Evaluar la Entrada';

    // Entry Text Editor
    if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
      $lang_string['label_subject'] = "Asunto:";
      $lang_string['label_insert'] = "Tags permitidos:";
      $lang_string['btn_bold'] = " b ";
      $lang_string['btn_italic'] = " i ";
      $lang_string['btn_image'] = "img";
      $lang_string['btn_url'] = "url";
      $lang_string['btn_readmore'] = "leer más"; // 0.4.8
      $lang_string['view_images'] = "Ver Imágenes Subidas";
      $lang_string['label_entry'] = "Entrada:";
      $lang_string['btn_preview'] = "&nbsp;Vista Previa&nbsp;";
      $lang_string['btn_post'] = "&nbsp;Publicar&nbsp;";
      $lang_string['chk_visiblemenu'] = "Visible (Mostrar en el menú)";
      $lang_string['file_name'] = "Nombre de Archivo Estático: (sin espacios ni extensiones de archivo)";

      // Javascript Strings
      $lang_string['insert_styles'] = "Ingrese el texto a formatear:";
      $lang_string['insert_image'] = "Ingrese la URL para la imagen:";
      $lang_string['insert_url1'] = "Ingrese el texto a desplegar para el enlace (Opcional):";
      $lang_string['insert_url2'] = "Ingrese la URL completa para el enlace:";
      $lang_string['insert_url3'] = "Abrir la URL en una ventana nueva (Opcional):";
      $lang_string['form_error'] = "Por favor complete los campos de Asunto y Entrada.";

      // More Javascript Strings
      $lang_string['insert_image_optional'] = 'Opcional:';
      $lang_string['insert_image_width'] = 'Ancho (Opcional):';
      $lang_string['insert_image_height'] = 'Alto (Opcional):';
      $lang_string['insert_image_popup'] = 'Ver tamaño completo en una ventana emergente al pinchar (Opcional):';
      $lang_string['insert_image_float'] = 'Flotar (Opcional):';

      $lang_string['day'] = 'Día';
      $lang_string['month'] = 'Mes';
      $lang_string['year'] = 'Año';
      $lang_string['hour'] = 'Hora';
      $lang_string['minute'] = 'Minuto';
      $lang_string['second'] = 'Segundo';
    }

    switch ($page) {
      case 'add':
        // Add Entry
        $lang_string['title'] = "Agregar Entrada";
        $lang_string['instructions'] = "¿Está listo para bloguear?. Complete el siguiente formulario y pinche en 'Vista Previa' para ver cómo se verá su entrada, o pinche en 'Publicar' para guardarla.";
        $lang_string['title_ad'] = "Confirmar Pings de Trackback";
        $lang_string['instructions_ad'] = "Estas son las URIs Auto-Descubiertas a las que se harán Pings. Si Usted no desea hacer ping a una URI específica, quite la marca de selección. Luego presione el botón 'OK' para hacer ping a las URIs seleccionadas o presione 'Cancelar' para no hacer ping a ninguna.";
        $lang_string['label_tb_ping'] = "Ping(s) de Trackback a enviar (separados por coma)";
        $lang_string['label_tb_autodiscovery'] = "autodescubrir";
        $lang_string['label_relatedlink'] = "Enlace Relacionado";
        $lang_string['label_categories'] = "Lista de Categorías";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Previsualizar / Editar Entrada";
        $lang_string['instructions_preview'] = "Así es como su entrada se ve. Si está usando texto formateado o inluyendo imágenes, recuerde cerrar todos sus tags.";
        $lang_string['title_update'] = "Actualizar Entrada";
        $lang_string['instructions_update'] = "Puede cambiar su entrada usando el siguiente formulario. Pinche en 'Vista Previa' o en 'Publicar' una vez que haya terminado.";
        $lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";

        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>No se guardó la entrada. Tuve un problema mientras guardaba su entrada.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['success'] = "<h2>¡Entrada Guardada!</h2>Su entrada fue guardada exitósamente."; // 0.4.8.1
        break;

      case 'add_static':
        // Add Entry
        $lang_string['title'] = "Agregar Página Estática";
        $lang_string['instructions'] = "Complete el siguiente formulario para crear una entrada del tipo Página Estática. Al contrario de una Entrada normal en el Blog, las Páginas Estáticas aparecen en el menú Enlaces. Son para aquellas entradas que Usted desee tener siempre disponibles, tales como: Acerca de Mí, Contáctenos, Agenda, etc. Pinche en 'Vista Previa' para ver cómo se verá su Entrada, o pinche en 'Publicar' para guardarla.";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Previsualizar / Editar Página Estática";
        $lang_string['instructions_preview'] = "Así es como su Página Estática se ve. Si está usando texto formateado o inluyendo imágenes, recuerde cerrar todos sus tags.";
        $lang_string['title_update'] = "Actualizar Página Estática";
        $lang_string['instructions_update'] = "Puede cambiar su entrada usando el siguiente formulario. Pinche en 'Vista Previa' o en 'Publicar' una vez que haya terminado.";
        $lang_string['form_error'] = "Por favor complete los campos de Asunto, Entrada y Nombre de Archivo.";

        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>No se guardó la entrada. Tuve un problema mientras guardaba su entrada.<br /><br />El Servidor reportó lo siguiente:<br />";
        break;

      case 'add_block':
        // Add / Manage Blocks
        $lang_string['title'] = "Crear / Administrar Bloques";
        $lang_string['instructions'] = "Utilice el siguiente formulario para agregar los 'Bloques' personalizados que aparecen en el menú de la barra lateral.";
        $lang_string['up'] = "subir";
        $lang_string['down'] = "bajar";
        $lang_string['edit'] = "editar";
        $lang_string['delete'] = "borrar";
        $lang_string['block_name'] = "Nombre del Bloque:";
        $lang_string['block_content'] = "Contenido del Bloque:";
        $lang_string['instructions_edit'] = "Usted está editando un Bloque.";
        $lang_string['instructions_modify'] = "Utilice el siguiente formulario para crear o modificar los 'Bloques' que aparecen en el menú de la barra lateral.";
        $lang_string['submit_btn_edit'] = "Editar Bloque";
        $lang_string['submit_btn_add'] = "Crear Bloque";
        $lang_string['form_error'] = "Por favor complete el campo de Nombre.";
        break;

      case 'add_link':
        $lang_string['static_pages'] = "Páginas Estáticas:";

        // Add / Manage Links
        $lang_string['title'] = "Crear / Administrar Enlaces";
        $lang_string['instructions'] = "Cree enlaces personalizados a otros sitios. Complete el siguiente formulario y pinche en 'Crear Enlace' para crear un enlace. Pinche los botones de subir y bajar para cambiar el orden de los enlaces. Pinche el botón editar para modificar un enlace. Pinche el botón borrar para eliminar un enlace";
        $lang_string['up'] = "subir";
        $lang_string['down'] = "bajar";
        $lang_string['edit'] = "editar";
        $lang_string['delete'] = "borrar";
        $lang_string['link_name'] = "Nombre del Enlace:";
        $lang_string['link_url'] = "URL del Enlace: (Opcional. Deje en blanco para crear un separador.)";
        $lang_string['instructions_edit'] = "Usted está editando el enlace:";
        $lang_string['instructions_modify'] = "Pinche aquí para modificar el enlace:";
        $lang_string['submit_btn_edit'] = "Editar Enlace";
        $lang_string['submit_btn_add'] = "Crear Enlace";
        $lang_string['form_error'] = "Por favor complete el campo Nombre.";
        break;

      case 'categories':

        // Add / Manage Links
        $lang_string['title'] = "Crear / Administrar Categorías";
        $lang_string['instructions'] = "Utilice el siguiente formulario para crear y modificar sus categorías. Cada ítem de categoría debe tener el siguiente formato: 'nombre de categoría (id categoría)'. Indente los ítemes con espacios para crear jerarquías.<br /><br /><b>Ejemplo:</b><br />General (1)<br />Noticias (3)<br />&nbsp;&nbsp;Anuncios (6)<br />&nbsp;&nbsp;Eventos (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misceláneos (7)<br />Technología (2)<br />";
        $lang_string['error'] = "Error";
        $lang_string['current_categories'] = "Categorías Actuales";
        $lang_string['no_categories_found'] = "No se encontraron Categorías";
        $lang_string['category_list'] = "Lista de Categorías:";
        $lang_string['validate'] = "Validar";
        $lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
        break;

      case 'colors':
        // Change Colors
        $lang_string['title'] = "Cambiar Colores";
        $lang_string['instructions'] = "Puede cambiar los colores del texto y fondo para su blog. Seleccione primero uno de los campos, y luego utilice el seleccionador de colores para mezclar su color. El Valor cambia automáticamente.";
        $lang_string['bg_color'] = "Fondo de la Página";
        $lang_string['main_bg_color'] = "Fondo Página Principal";
        $lang_string['border_color'] = "Borde de Página";
        $lang_string['inner_border_color'] = "Borde Interior";
        $lang_string['header_bg_color'] = "Fondo del Encabezado";
        $lang_string['header_txt_color'] = "Texto del Encabezado";
        $lang_string['menu_bg_color'] = "Fondo del Menú";
        $lang_string['footer_bg_color'] = "Fondo Pie de Página";
        $lang_string['txt_color'] = "Texto Principal";
        $lang_string['headline_txt_color'] = "Texto Cabecera";
        $lang_string['date_txt_color'] = "Texto Fecha";
        $lang_string['footer_txt_color'] = "Texto Pie de Página";
        $lang_string['link_reg_color'] = "Enlace";
        $lang_string['link_hi_color'] = "Enlace Hover";
        $lang_string['link_down_color'] = "Enlace Activo";

        // More Colors
        $lang_string['entry_bg'] = "Fondo Entrada";
        $lang_string['entry_title_bg'] = "Fondo Título Entrada";
        $lang_string['entry_border'] = "Borde Entrada";
        $lang_string['entry_title_text'] = "Título Entrada";
        $lang_string['entry_text'] = "Texto Entrada";

        $lang_string['static_bg'] = "Fondo Página Estática"; // 0.5.0
        $lang_string['static_title_bg'] = "Fondo Título Pág. Estática"; // 0.5.0
        $lang_string['static_border'] = "Borde Página Estática"; // 0.5.0
        $lang_string['static_title_text'] = "Título Página Estática"; // 0.5.0
        $lang_string['static_text'] = "Texto Página Estática"; // 0.5.0

        $lang_string['comment_bg'] = "Fondo Comentarios"; // 0.5.0
        $lang_string['comment_title_bg'] = "Fondo Título Comentarios"; // 0.5.0
        $lang_string['comment_border'] = "Borde Comentarios"; // 0.5.0
        $lang_string['comment_title_text'] = "Título Comentarios"; // 0.5.0
        $lang_string['comment_text'] = "Texto Comentarios"; // 0.5.0

        $lang_string['menu_bg'] = "Fondo Menú";
        $lang_string['menu_title_bg'] = "Fondo Título Menú";
        $lang_string['menu_border'] = "Borde Menú";
        $lang_string['menu_title_text'] = "Título Menú";
        $lang_string['menu_text'] = "Texto Menú";
        $lang_string['menu_link_reg_color'] = "Enlace Menú";
        $lang_string['menu_link_hi_color'] = "Enlace Hover Menú";
        $lang_string['menu_link_down_color'] = "Enlace Activo Menú";

        // Submit
        $lang_string['color_preset'] = "Esquemas de Colores:";
        $lang_string['scheme_name'] = "Ingrese un nombre para el esquema de colores personalizado:";
        $lang_string['scheme_file'] = "Ingrese el nombre del esquema de colores: (sin espacios ni extensión de archivo)";
        $lang_string['save_btn'] = "&nbsp;Guardar&nbsp;";
        $lang_string['form_error'] = "Por favor ingrese un nombre para su esquema de colores personalizado.";
        $lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
        $lang_string['theme_doesnt_allow_colors'] = 'El tema actualmente seleccionado no permite colores personalizados.';

        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>Información sin guardar. Tuve un problema mientras guardaba su entrada.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['success'] = "<h2>¡Colores Guardados!</h2>La Información ha sido guardada exitósamente."; // New for 0.4.8.1
        break;

      case 'comments':
        // Comments
        $lang_string['name'] = "Nombre:"; //New in 0.4.6.2
        $lang_string['email'] = "Correo Electrónico:"; //New in 0.4.6.2
        $lang_string['homepage'] = "Sitio Web:"; //New in 0.4.6.2
        $lang_string['comment'] = "Comentario:"; //New in 0.4.6.2
        $lang_string['IPAddress'] = "Dirección IP:";  // New for 0.4.6.2
        $lang_string['useragent'] = "Navegador:";  // New for 0.4.6.2
        $lang_string['wrote'] = "<i>Con fecha %s, %s escribió:</i><br />\n<br />\n%s"; // New for 0.4.6.2

        $lang_string['comment_capcha'] = "Anti-Spam: Ingresar <b>%s</b>"; // 0.4.2
        $lang_string['title'] = "Comentarios";
        $lang_string['header'] = "Agregar Comentario";
        $lang_string['instructions'] = "Complete el siguiente formulario para dejar sus comentarios.";
        $lang_string['comment_name'] = "Su Nombre:";
        $lang_string['comment_email'] = "Correo Electrónico:";
        $lang_string['comment_url'] = "Sitio Web:";
        $lang_string['commentposted'] = "Nuevo comentario publicado a las: ";  // New for 0.4.6.2
        $lang_string['comment_remember'] = "Recuérdame:";
        $lang_string['comment_text'] = "Comentario:";
        $lang_string['post_btn'] = "&nbsp;Publicar Comentario&nbsp;";
        $lang_string['delete_btn'] = "borrar";
        $lang_string['ban_btn'] = "prohibir ip"; // New for 0.4.8
        $lang_string['expired_comment1'] = "Lo sentimos. No se permiten comentarios después de "; // New for 0.4.8
        $lang_string['expired_comment2'] = " días."; // New for 0.4.8

        $lang_string['blacklisted'] = "Lo sentimos, su dirección IP ha sido prohibida. No se permiten comentarios."; // New for 0.4.8
        $lang_string['bannedword'] = "Su comentario, sitio web, nombre o correo electrónico contienen palabras prohibidas por el administrador. Su comentario NO se publicará."; // New for 0.4.8
        $lang_string['nocomments'] = "Los comentarios no están disponibles para esta entrada."; // New for 0.4.9
        $lang_string['email_moderator'] = "Los comentarios están actualmente bajo moderación. Este comentario necesita ser aprobado antes de ser visto por el público."; // New for 0.5.0
        $lang_string['user_notice_mod'] = "La moderación está activada para este blog. Su comentario requiere la aprobación de los administradores antes de ser visible."; // new for 0.5.0

        $lang_string['return_to_comments'] = 'Regresar a los Comentarios';

        // Error Response
        $lang_string['error_add'] = "<h2>¡Ups!</h2>Comentario no guardado. Tuve un problema mientras guardaba su comentario.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['error_delete'] = "<h2>¡Ups!</h2>Comentario no eliminado. Tuve un problema mientras borraba su comentario.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['error_ban'] = "<h2>¡Ups!</h2>IP no agregada a la lista de IPs prohibidas.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['success_add'] = "<h2>¡Comentario Agregado!</h2>Su comentario ha sido guardado exitósamente."; // New for 0.4.8.1
        $lang_string['success_delete'] = "<h2>¡Comentario Eliminado!</h2>El comentario ha sido eliminado."; // New for 0.4.8.1
        $lang_string['success_ban1'] = "<h2>¡IP Prohibida!";
        $lang_string['success_ban2'] = "</h2>Para remover esta prohibición en el futuro, utilice la opción Moderación en el menú preferencias."; // New for 0.4.8.1
        $lang_string['form_error'] = "Por favor complete los campos de Nombre, Comentario y Anti-Spam.";
        $lang_string['error_noip'] = "No se entregaron IPs para la Lista Negra.";

        $lang_string[ 'error_comments_disabled' ] = '<h2>¡Error!</h2>¡Ey! Los comentarios están deshabilitados en este blog. ¿Eres un robot de spam?'; // New 0.5.0
        $lang_string[ 'error_no_match' ] = "<h2>¡Error!</h2>Su dirección IP no concuerda con aquella publicada. ¿Eres un robot de spam?"; // New 0.5.0
        $lang_string[ 'error_fields_missing' ] = '<h2>¡Error!</h2>Faltan los siguientes campos: '; // New 0.5.0
        $lang_string[ 'error_spambot' ] = '<h2>¡Error!</h2>Faltan los datos Anti-Spam. ¿Eres un robot de spam?'; // New 0.5.0
        $lang_string[ 'error_capcha' ] = '<h2>¡Error!</h2>El código Anti-Spam es incorrecto.'; // New 0.5.0
        $lang_string[ 'error_bad_data' ] = '<h2>¡Error!</h2>Post data no válida. ¿Eres un hacker?'; // New 0.5.0
        $lang_string[ 'error_entry_missing' ] = '<h2>¡Error!</h2>Está intentando comentar en una entrada inexistente'; // New 0.5.0
        $lang_string[ 'error_empty_text' ] = '<h2>¡Error!</h2>No ingresó ningún comentario o su nombre.'; // New 0.5.0
        break;

      case 'delete':
        $lang_string['title'] = "Borrar Entrada";
        $lang_string['instructions'] = "Esta es la entrada que está a punto de eliminar. Por favor asegúrese de que realmente quiere seguir, pues no hay vuelta atrás...";
        $lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>No se pudo borra la entrada.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['success'] = "<h2>¡Entrada Eliminada!</h2>La entrada ha sido eliminado."; // New for 0.4.8.1
        break;

      case 'delete_static':
        $lang_string['title'] = "Eliminar Página Estática";
        $lang_string['instructions'] = "Esta es la página estática que está a punto de eliminar. Por favor asegúrese de que realmente quiere seguir, pues no hay vuelta atrás...";
        $lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>No se pudo eliminar la entrada.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['success'] = "<h2>¡Página Estática Eliminada!</h2>La página estática ha sido eliminado."; // New for 0.4.8.1
        break;

      case 'image_list':
        $lang_string['title'] = "Lista de Imágenes";
        $lang_string['instructions'] = "Pinche en los siguientes enlaces para ver las imágenes.<br /><br />Para agregar una imagen a su entrada:<br />1) Con el botón derecho del mouse sobre un enlace elija 'Copiar Enlace al Portapapeles'.<br />2) Vuelva a la página para Crear Entrada o Editar Entrada.<br />3) Pinche el botón 'img' y pegue la dirección dentro de la ventana.";
        break;

      case 'info':
        $lang_string['title'] = "Meta-Datos";
        $lang_string['instructions'] = "La siguiente información es usada para los &quot;meta-datos&quot;, los cuales son últiles para que los motores de búsqueda encuentren e identifiquen correctamente su sitio. La información también puede ser usada para las feeds RSS.";
        $lang_string['info_keywords'] = "Palabras Clave: (Lista de palabras clave separadas por coma.)";
        $lang_string['info_description'] = "Descripción: (Extracto o una descripción libre de su sitio.)";
        $lang_string['info_copyright'] = "Licencia: (Declaración de Derechos de Autor, o enlace a un documento conteniendo la información.)";
        $lang_string['tracking_code'] = "Código Externo de Seguimiento: (Código HTML que necesita ejecutarse en la página principal -en el encabezado por mayor seguridad- cada vez que un usuario entra al sitio, i.e.: Google Analytics)";
        $lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>Información sin guardar. Tuve un problema mientras guardaba la información.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['success'] = "<h2>¡Meta-Datos Guardados!</h2>La Información ha sido guardada exitósamente."; // New for 0.4.8.1
        $lang_string['form_error'] = "Por favor complete los campos de Título y Autor.";
        break;

      case 'index':
        // Index
        break;

      case 'static':
        // Index
        break;

      case 'rating':
        $lang_string['error'] = "<h2>¡Ups!</h2>Información sin guardar. Tuve un problema mientras guardaba la información.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['success'] = "<h2>¡Voto Guardado!</h2>Su voto fue exitósamente guardado."; // New for 0.4.8.1
        break;

      case 'login':
        $lang_string['upgrade'] = "<h2>Actualizaciones</h2>"; // New 0.3.8
        $lang_string['upgrade_count'] = "%n archivos de comentarios necesitan ser actualizados:"; // New 0.3.8
        $lang_string['upgrade_url'] = "Actualizar Comentarios"; // New 0.3.8
        $lang_string['title'] = "Conectarse";
        $lang_string['instructions'] = "Por favor ingrese su Nombre de Usuario y Contraseña";
        $lang_string['username'] = "Nombre de Usuario:";
        $lang_string['password'] = "Contraseña";
        $lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
        // Success
        $lang_string['success'] = "<h2>¡Éxito!</h2>Usted se ha conectado. ¡Feliz blogueo!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>¡Ups!</h2>No está conectado. Por favor verifique que ha escrito bien su Nombre de Usuario y Contraseña e inténtelo nuevamente.<p />";
        $lang_string['inactive_account'] = "<h2>¡Ups!</h2>No está conectado. Su cuenta ha sido deshabilitada por el administrador por alguna razón.<p />";
        $lang_string['form_error'] = "Por favor complete los campos de Nombre de Usuario y Contraseña.";
        break;

      case 'logout':
        $lang_string['title'] = "Salir";
        $lang_string['error'] = "<h2>¡Adiós!</h2>Usted está desconectado. (¡Nunca se había conectado de todos modos!)<p />";
        $lang_string['error_no_cookie'] = "<h2>¡Adiós!</h2>Usted está desconectado. (No se encontraron cookies. ¡Nunca se había conectado de todos modos!)<p />"; // New 0.5.0
        $lang_string['success'] = "<h2>¡Adiós!</h2>Usted está desconectado.<p />(Redirigiendo al Inicio en 5 segundos.)<p />";
        break;

      case 'forms':
        $lang_string['title'] = "";
        $lang_string['instructions'] = "";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>Información sin guardar. Tuve un problema mientras guardaba la información.<br /><br />El Servidor reportó lo siguiente:<br />";
        break;

      case 'set_login':
        $lang_string['title'] = "Cambiar Nombre de Usuario y Contraseña";
        $lang_string['instructions'] = "Utilice el siguiente formulario para cambiar su Nombre de Usuario y/o Contraseña. Ingrese el Nombre de Usuario y Contraseña que desea usar.";
        $lang_string['username'] = "Nombre de Usuario:";
        $lang_string['password'] = "Contraseña:";
        $lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
        // Success
        $lang_string['success'] = "<h2>¡Éxito!</h2>Su Nombre de Usuario y/o Contraseña están activos. ¡Feliz blogueo!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>¡Ups!</h2>Información sin guardar. Tuve un problema mientras guardaba el Nombre de Usuario y/o Contraseña.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['form_error'] = "Por favor complete los campos de Nombre de Usuario y Contraseña.";
        $lang_string['explanation'] = "En versiones recientes, la estructura de la contraseña ha cambiado. 
		Ya no hay más necesidad de actualizar las contraseñas y/o nombres de usuario desde el código del blog. 
		Para cambiar su contraseña, elimine el archivo /config/password.php y asegúrese que los archivos install*.php 
		se encuentren en el servidor. Una vez hecho esto, recargue esta página (o desconéctese). Se le presentará el 
		mismo script para generar su contraseña tal como lo hizo cuando creó este blog.";  // New for 0.4.6
        break;

      case 'install00':
        $lang_string['title'] = "Bienvenido";
        $lang_string['instructions'] = "¡Gracias por elegir Simple PHP Blog!";
        $lang_string['blog_choose_language'] = "Elija Idioma:";
        $lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
        break;

      case 'install01':
        $lang_string['title'] = "Bienvenido";
        $lang_string['instructions'] = "
        ¡Gracias por elegir Simple PHP Blog!<br /><br />Simple PHP Blog es un liviano sistema para blogs. Requiere PHP 4.1 o superior, y permisos de escritura en el servidor. Toda la información es almacenada en archivos planos, por lo tanto no se requiere base de datos alguna.<br /><br />
        Para comenzar, Simple PHP Blog necesita crear tres directrios (<b>config</b>, <b>content</b>, y <b>images</b>) en los cuales se almacenará su información. Después de esto, cree una contraseña y luego puede comenzar a bloguear.<br /><br />
        <b>Pinche aquí para comenzar la instalación:</b>";
        $lang_string['begin'] = "[ Comenzar Instalación ]";
        break;

      case 'install02':
        $lang_string['title'] = "Instalación";
        $lang_string['instructions'] = "Intentando crear directorios <b>config</b>, <b>content</b>, y <b>images</b>:";
        $lang_string['folder_exists'] = "¡OK! Los directorios ya existen. No se hicieron cambios...";
        $lang_string['folder_failed'] = "¡Ups! No se pueden crear los directorios...";
        $lang_string['folder_success'] = "¡Éxito! Directorio creado...";
        // Help
        $lang_string['help'] = "
        <h2>¡Ups!</h2>
        No se pudo crear uno o más directorios<br /><br />Esto se debe probablemente porque:<br />
        <ol>
        <li>No tiene <b>Permisos</b> para acceso de <b>Lectura/Escritura</b>.</li>
        <li>Los <b>UID</b>'s (ID's de usuario) de los archivos y directorios debe ser el mismo.</li>
        </ol>
        Siga las siguientes instrucciones de emergencia y pinche en <b>Reintentar</b>:<br />
        <ol>
        <li>Cree los siguientes directorios manualmente: <b>config</b>, <b>content</b>, y <b>images</b>.</li>
        <li>Habilite los <b>Permisos de Escritura</b> en los directorios: En su cliente FTP, el Propietario, Usuario y Público deben tener acceso para <b>Lectura</b> y <b>Escritura</b>. <i>(Quizás deba contactar al proveedor de su sitio para hacer estos cambios...)</i></li>
        <li>Asegúrese de que los UID's de todos sus archivos y directorios es el mismo. <i>(Quizás deba contactar al proveedor de su sitio para hacer estos cambios...)</i></li>
        </ol>";
        $lang_string['try_again'] = "[ Reintentar ]";
        // Success
        $lang_string['success'] = "<h2>¡Éxito!</h2>¡Directorios creados exitósamente!<p /><b>Pinche el siguiente enlace para continuar:</b>";
        $lang_string['continue'] = "[ Continuar ]";
        break;

      case 'install03':
        $lang_string['supported'] = "<b>Su servidor web soporta los siguientes esquemas de cifrado:</b>";
        $lang_string['standard'] = "DES Estándar: ";
        $lang_string['extended'] = "DES Extendido: ";
        $lang_string['MD5'] = "MD5: ";
        $lang_string['blowfish'] = "Blowfish: ";
        $lang_string['enabled'] = "habilitado";
        $lang_string['disabled'] = "deshabilitado";
        $lang_string['using_standard'] = "<b>Utilizando DES Estándar...</b>";
        $lang_string['using_extended'] = "<b>Utilizando DES Extendido..</b>";
        $lang_string['using_MD5'] = "<b style=\"color: green;\">Utilizando MD5...</b>";
        $lang_string['using_blowfish'] = "<b style=\"color: green;\">Utilizando Blowfish...</b>";
        $lang_string['using_unknown'] = "<b>Utilizando Cifrado Desconocido...</b>";
        $lang_string['salt_length'] = " <i>(Largo de la Sal = %string)</i><br />";
        $lang_string['title'] = "Crear Nombre de Usuario y Contraseña";
        $lang_string['instructions'] = "Utilice el siguiente formulario para crear Nombre de Usuario y Contraseña.";
        $lang_string['username'] = "Nombre de usuario:";
        $lang_string['password'] = "Contraseña:";
        $lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
        // Success
        $lang_string['success'] = "<h2>¡Felicitaciones!</h2>Ahora está conectado. Pinche en el siguiente enlace para visitar la página de Configuración, donde podrá darle un nombre a su blog. ¡Feliz blogueo!<p />";
        $lang_string['btn_setup'] = "[ Configurar ]";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>¡Ups!</h2>Información sin guardar. Tuve un problema mientras guardaba el Nombre de Usuario y/o Contraseña.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['form_error'] = "Por favor complete los campos de Nombre de Usuario y Contraseña.";
        break;

      case 'install04':
        $lang_string['title'] = "Crear Archivo de Contraseña";
        $lang_string['instructions'] = "He aquí la parte truculenta:<br />
        <ol>
        <li>Abra un Editor de Texto. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
        <li>Cree un nuevo Documento de Texto.</li>
        <li>Copie y pegue el código desde el siguiente cuadro de texto en su documento.</li>
        <li>Guarde su documento como <b>password.php</b> <i>(Asegúrese de guardarlo en formato de <b>texto</b> o <b>texto plano</b>.)</i></li>
        <li>Abra un cliente FTP.</li>
        <li>Suba su nuevo archivo <b>password.php</b> al directorio <b>config</b> en su sitio.</li>
        <li>Elimine luego el archivo <b>password.php</b> de su disco duro.</li>
        </ol>
        ";
        $lang_string['information'] = "<i>Nota: Si desea cambiar su nombre de usuario y contraseña (probablemente porque los olvidó), elimine el archivo <b>password.php</b> desde el directorio <b>config</b> en su sitio. La próxima vez que visite su sitio, lo llevará a través del proceso de instalación nuevamente...</i>";
        $lang_string['code'] = "Código para el archivo <b>password.php</b>:";
        $lang_string['continue'] = "[ Continuar ]";
        break;

      case 'install05':
      case 'install06':
        $lang_string['title'] = "Conectarse";
        $lang_string['instructions'] = "Por favor ingrese su Nombre de Usuario y Contraseña";
        $lang_string['username'] = "Nombre de Usuario:";
        $lang_string['password'] = "Contrasaeña";
        $lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
        // Success
        $lang_string['success'] = "<h2>¡Felicitaciones!</h2>Ahora está conectado.<p />
        Pinche el siguiente enlace para ir a la página de <b>Configuración</b>, donde podrá personalizar su blog.<p />
        <i>Nota: Ahora que ha completado el proceso de instalación, es recomendable que elimine los archivos <b>installXX.php</b> 
		de su sitio. (i.e.: del install00.php al install06.php)</i><p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>¡Ups!</h2>No está conectado. Por favor verifique que ha escrito correctamente su Nombre de Usuario y Contraseña e inténtelo nuevamente.<p />";
        $lang_string['form_error'] = "Por favor complete los campos de Nombre de Usuario y Contraseña.";
        // Success
        $lang_string['btn_setup'] = "[ Configuración ]";
        $lang_string['btn_try_again'] = "[ Reintentar ]";
        break;

      case 'setup':
        $lang_string['title'] = "Preferencias";
        $lang_string['instructions'] = "Usted puede cambiar el nombre de su blog, y su información personal a continuación.";
        $lang_string['blog_title'] = "Nombre del Blog:";
        $lang_string['blog_header'] = "URL de la Imagen de Cabecera: images/blogheader.jpg (Dejar en blanco para usar la imagen por defecto del tema).";
        $lang_string['blog_author'] = "Autor:";
        $lang_string['blog_email'] = "Correo Electrónico: (Direcciones de correo electrónico diferentes deben separarse por una coma -dejar en blanco deshabilita la opción Contácteme)"; // Updated 0.4.7
        $lang_string['blog_avatar'] = "URL del Avatar: images/avatar.jpg (Dejar en blanco para ninguno)."; // <-- New 0.4.7
        $lang_string['blog_footer'] = "Pie de Página:";
        $lang_string['blog_choose_language'] = "Elija Idioma:";
        $lang_string['blog_enable_comments'] = "Habilitar Comentarios de Usuarios";
        $lang_string['blog_comments_popup'] = "Abrir Comentarios en una Ventana Emergente";
		$lang_string['blog_enable_start_category'] = "Utilizar categoría específica para las entradas de la portada: "; // Now for 0.5.1
        $lang_string['blog_search_top'] = "Mostrar Búsqueda en Entradas (en lugar de la barra lateral)"; // New for 0.5.0
        $lang_string['blog_enable_static_block'] = "Mostrar un bloque definido como primera entrada del blog: "; // New for 0.5.0
        $lang_string['static_block_border'] = 'Mostrar Borde'; // New for 0.5.0
        $lang_string['static_block_noborder'] = 'Sin Borde'; // New for 0.5.0
        $lang_string['blog_enable_voting'] = "Habilitar a usuarios para Valorar Entradas";
        $lang_string['blog_enable_cache'] = "Habilitar Caché para Entradas del Blog (puede incrementar velocidad en algunos servidores)"; // New for 0.4.6
        $lang_string['blog_enable_calendar'] = "Habilitar Calendario"; // New for 0.4.6
        $lang_string['blog_enable_archives'] = "Habilitar Bloque Archivos"; // New for 0.4.8
        $lang_string['blog_enable_counter'] = "Habilitar Contador en la Barra Lateral"; // New for 0.4.8
        $lang_string['blog_counter_hours'] = "Número de horas de desfase antes que las visitas se vuelven a contar (basado en una dirección ip específica):"; // New for 0.4.8
        $lang_string['blog_enable_login'] = "Habilitar Enlace Conectarse (Agregue \"login.php\" a sus favoritos primero...)"; // New for 0.4.8
        $lang_string['blog_enable_title'] = "Habilitar Boque de Título en Texto Plano (Desmarque el recuadro si el título está en la imagen de la cabecera)"; // New for 0.4.6
        $lang_string['blog_enable_permalink'] = "Habilitar Enlaces Permanentes en las Entradas del Blog"; // New for 0.4.6
        $lang_string['blog_enable_capcha'] = "Habilitar Anti-Spam"; // New for 0.4.8
        $lang_string['blog_footer_counter'] = "Habilitar Contador en el Pie de Página"; // New for 0.4.8
        $lang_string['blog_enable_capcha_image'] = "Imágenes Anti-Spam (sólo con librerías GD) / Campo de Texto Anti-Spam"; // New for 0.4.8
        $lang_string['blog_enable_stats'] = "Habilitar Opción Estadísticas en el Menú"; // New for 0.4.7
        $lang_string['blog_enable_lastcomments'] = "Habilitar Listado de Comentarios Más Recientes"; // New for 0.4.7
        $lang_string['blog_enable_lastentries'] = "Habilitar Listado de Entradas Más Recientes"; // New for 0.4.7
        $lang_string['blog_email_notification'] = "Enviar correo electrónico de notificación cuando los comentarios son publicados";
        $lang_string['blog_send_pings'] = "Enviar weblog &quot;pings&quot;";
        $lang_string['blog_ping_urls'] = "Ingrese URL completa (i.e.: http://rpc.weblogs.com/RPC2) del servicio para hacer &quot;ping&quot;.<br />(Puede ingresar más de una dirección separando con comas.)";
        $lang_string['blog_trackback_about'] = "Trackback provee de un método de notificación entre blogs. Permita que
          otro blog sepa que usted está enlazando a él enviando un trackback ping. Vea quién está enlazando a su blog
          recibiendo trackback pings.<br />
           Puede tanto ingresar las URIs para hacer ping manualmente, como puede intentar hacerlo automáticamente a través de
		   Auto-Descubrir.";
        $lang_string['blog_trackback_enabled'] = "Habilitar trackback en mi blog";
        $lang_string['blog_trackback_auto_discovery'] = "Habilitar Auto-Discovery cuando se publiquen entradas que contengan URLs";
        $lang_string['blog_max_entries'] = "Máximo de Entradas a Desplegar:";
        $lang_string['blog_comment_tags'] = "Tags permitidos en Comentarios:";
        $lang_string['blog_gzip_about'] = "
		  A partir de PHP 4.0.4, PHP tiene la habilidad de leer y escribir archivos comprimidos con gzip (.gz) 
		  para así ahorrar espacio en disco. También puede, de manera transparente al usuario, comprimir páginas enviadas 
		  a los navegadores que soportan compresión gzip, para así ahorrar ancho de banda.<br />
          <br />
          El soporte para Zlib en PHP no está habilitada por defecto. Si el recuadro de verificación está deshabilitado, entonces 
		  su instalación de PHP no soporta la extensión Zlib.";
        $lang_string['blog_enable_gzip_txt'] = "Habilitar Compresión GZIP para Base de Datos de Archivos";
        $lang_string['blog_enable_gzip_output'] = "Habilitar Compresión GZIP para Salida HTTP";
        $lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>Información sin guardar. Tuve un problema mientras guardaba la información.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['success'] = "<h2>¡Preferencias Guardadas!</h2>La Información ha sido guardada exitósamente."; // New for 0.4.8.1
        $lang_string['form_error'] = "Por favor complete los campos de Título y Autor.";
        $lang_string['label_entry_order'] = "Orden de las Entradas:";
        $lang_string['select_new_to_old'] = "Más Nuevas Primero";
        $lang_string['select_old_to_new'] = "Más Antiguas Primero";
        $lang_string['label_comment_order'] = "Orden de los Comentarios:";
        $lang_string['cal_sunday'] = "Domingo";
        $lang_string['cal_monday'] = "Lunes";
        $lang_string['label_calendar_start'] = "Día de Inicio de la Semana en Calendario";
        $lang_string['title_sidebar'] = "Barra Lateral"; // New in 0.4.7
        $lang_string['title_comments'] = "Comentarios"; // New in 0.4.7
        $lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
        $lang_string['title_compression'] = "Compresión"; // New in 0.4.7
        $lang_string['title_entries'] = "Entradas"; // New in 0.4.7
        $lang_string['title_general'] = "General"; // New in 0.4.7
        $lang_string['title_language'] = "Idioma"; // New in 0.4.7
        $lang_string['blog_comment_days_expiry'] = "¿Comentarios permitidos por cuántos días? (0 significa por siempre)"; // New in 0.4.8
        $lang_string['blog_comments_moderation'] = "Requerir aprobación de usuario conectado antes de publicar comentarios
          (siempre visible para usuario conectado)"; // New in 0.5.0
        $lang_string['comment_moderation'] = "Opciones de Moderación"; // New in 0.5.0
        break;
      case 'comment_moderation':
        $lang_string['title'] = "Comentarios Sin Moderar";
        $lang_string['instructions'] = "Esta es una lista de todos los comentarios no disponibles a usuarios conectados en el blog
		 porque no han sido aprobados por un moderador.";
        $lang_string['header'] = "Lista de Moderación";
        $lang_string['enteredby'] = "Ingresado por: ";
        $lang_string['entrydate'] = "Fecha de la Entrada: ";
        $lang_string['blogentrytitle'] = "Título de la Entrada del Blog: ";
        $lang_string['enteredcontent'] = "Contenido: ";
        $lang_string['totalunmodded'] = " ítem(es) en total esperando por actualización del moderador.";
        $lang_string['mod_approve'] = "[Aprobar] ";
        $lang_string['mod_delete'] = "[Borrar]";
        break;
      case 'moderation':
        $lang_string['title'] = "Preferencias de Moderación";
        $lang_string['instructions'] = "Puede modificar las listas de automoderación aquí.";
        $lang_string['submit_btn'] = "&nbsp;Guardar Preferencias de Moderación&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>Información sin guardar. Tuve un problema mientras guardaba la información.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['success'] = "<h2>¡Preferencias Guardadas!</h2>La Información ha sido guardada exitósamente."; // New for 0.4.8.1
        $lang_string['banned_address_list_title'] = "<h2>Direcciones IP Prohibidas</h2>";
        $lang_string['banned_address_list'] = "La siguiente es una lista de direcciones ip numéricas a las que se les ha prohibido ingresar comentarios. Cada ip debe ir en una línea separada y debe consistir en números (no nombres de DNS). Cuando estén conectadas, las IP's pueden ser prohibidas directamente desde la vista de comentarios.";
        $lang_string['banned_word_list_title'] = "<h2>Palabras Prohibidas</h2>";
        $lang_string['banned_word_list'] = "La siguiente es una lista de las palabras que no están permitidas en la url o el texto. Cada palabra o grupo de palabas debe ir en una línea separada. Se intentará buscar la coincidencia exacta de cada línea en los comentarios para realizar la prohibición.";
        break;
		
      case 'trackbacks':
        // Trackbacks
        $lang_string['title'] = "Trackbacks";
        $lang_string['header'] = "URL de Trackback paa esta Entrada:";
        $lang_string['delete_btn'] = "borrar";
        // Error Response
        $lang_string['error_add'] = "Error guardando información de trackback.";
        $lang_string['error_delete'] = "<h2>¡Ups!</h2>Trackback no eliminado. Tuve un problema mientras eliminaba el trackback.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['success_delete'] = "<h2>¡Trackback Eliminado!</h2>El enlace de Trackback ha sido eliminado."; // New for 0.4.8.1
        break;

      case 'options':
        $lang_string['title'] = "Opciones";
        $lang_string['instructions'] = "Utilice el siguiente formulario para personalizar el despliegue de fecha y hora para las entradas y comentarios de su blog. Puede seleccionar relojes de 24 o 12 horas. Formatos de fecha corta o larga. Y las áreas de <b>Vista Previa</b> se refrescan automáticamente para mostrarle cómo aparecerá su formateo.";
        // Long Date
        $lang_string['ldate_title'] = "Formato de Fecha Larga:";
        $lang_string['weekday'] = "Día de la Semana";
        $lang_string['month'] = "Mes";
        $lang_string['day'] = "Día";
        $lang_string['year'] = "Año";
        $lang_string['none'] = "Ninguno";
        // Short Date
        $lang_string['sdate_title'] = "Formato de Fecha Larga:";
        $lang_string['s_month'] = "Mes";
        $lang_string['s_mon'] = "MMM";
        $lang_string['s_day'] = "Día";
        $lang_string['s_year'] = "Año";
        $lang_string['zero_day'] = "Cero inicial para el día";
        $lang_string['show_century'] = "Mostrar centenas";
        // Time
        $lang_string['time_title'] = "Formato de Hora:";
        $lang_string['12hour'] = "reloj de 12 horas";
        $lang_string['24hour'] = "reloj de 24 horas";
        $lang_string['before_noon'] = "A.M.";
        $lang_string['after_noon'] = "P.M.";
        // Date
        $lang_string['date_title'] = "Formato de Fecha:";
        $lang_string['long_date'] = "Fecha Larga";
        $lang_string['short_date'] = "Fecha Corta";
        $lang_string['time'] = "Hora";
        // Menu
        $lang_string['menu_title'] = "Formato de Fecha en Menú:";
        $lang_string['long_date'] = "Fecha Larga";
        $lang_string['short_date'] = "Fecha Corta";
        // Used in multiple places
        $lang_string['zero_day'] = "Cero inicial para el Día";
        $lang_string['zero_month'] = "Cero inicial para el Mes";
        $lang_string['zero_hour'] = "Cero inicial para la Hora";
        $lang_string['separator'] = "Separador:";
        $lang_string['preview'] = "Vista Previa:";
        $lang_string['server_offset'] = "Offset del Servidor:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>Información sin guardar. Tuve un problema mientras guardaba la información.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['success'] = "<h2>¡Opciones Guardadas!</h2>La Información ha sido guardada exitósamente."; // New for 0.4.8.1
        break;

      case 'themes':
        $lang_string['title'] = "Temas";
        $lang_string['instructions'] = "Utilice la lista desplegable para seleccionar un tema diferente.";
        // Themes
        $lang_string['choose_theme'] = "Temas:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>Información sin guardar. Tuve un problema mientras guardaba la información.<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['success'] = "<h2>¡Tema Seleccionado!</h2>La Información ha sido guardada exitósamente."; // New for 0.4.8.1
        break;

      case 'upload_img':
        $lang_string['title'] = "Subir Imagen";
        $lang_string['instructions'] = "Pinche el siguiente botón para seleccionar un archivo a subir.";
        $lang_string['select_file'] = "Seleccionar archivo:";
        $lang_string['upload_btn'] = "Subir";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>No se pudo subir la imagen. He aquí más información:<br /><br />El Servidor reportó lo siguiente:<br />";
        $lang_string['success'] = "<h2>¡Imagen Subida!</h2>La Imagen ha sido guardada exitósamente."; // New for 0.4.8.1
        break;

      case 'search':
        $lang_string['title'] = "Resultados de Búsqueda";
        $lang_string['instructions'] = "Resultados de búsqueda para <b>%string</b>:";
        $lang_string['not_found'] = "No hay resultados";
        break;

      case 'contact':
        $lang_string['contact_capcha'] = "Anti-Spam: Ingrese "; // 0.4.2
        $lang_string['title'] = "Contácteme";
        $lang_string['instructions'] = "Complete el formulario:";
        $lang_string['form_error'] = "Por favor complete los campos de Asunto y Comentario.";
        $lang_string['name'] = "Nombre:";
        $lang_string['email'] = "Correo Electrónico:";
        $lang_string['subject'] = "Asunto:";
        $lang_string['comment'] = "Comentario:";
        $lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
        $lang_string['success'] = "<h2>¡Éxito!</h2>Su mensaje ha sido enviado.<p />";
        $lang_string['failure'] = "<h2>¡Error!</h2>Su mensaje no ha sido enviado. Probablemente el texto Anti-Spam no fue ingresado correctamente.<p />";
        $lang_string['contactsent'] = "Contacto enviado a través de: ";  // New for 0.4.6
        $lang_string['IPAddress'] = "Dirección IP:";  // New for 0.4.6
        $lang_string['useragent'] = "Navegador:";  // New for 0.4.6
        $lang_string['wrote'] = "<i>Con fecha %s, %s escribió:</i><br />\n<br />\n%s"; // New for 0.4.6.2
        break;

      case 'stats':
        $lang_string["title"] = "Estadísticas";
        $lang_string["general"] = "General";
        $lang_string["entry_info"] = "<b>%s</b> entradas usando <b>%s</b> palabras almacenadas en <b>%s</b> bytes";
        $lang_string["comment_info"] = "<b>%s</b> comentarios usando <b>%s</b> palabras almacenadas en <b>%s</b> bytes";
        $lang_string["trackback_info"] = "<b>%s</b> trackbacks almacenados en <b>%s</b> bytes";
        $lang_string["static_info"] = "<b>%s</b> páginas estáticas usando <b>%s</b> palabras almacenadas en <b>%s</b> bytes";
        $lang_string["most_viewed_entries"] = "10 Entradas más vistas";
        $lang_string["most_commented_entries"] = "10 Entradas más comentadas";
        $lang_string["most_trackbacked_entries"] = "10 Entradas con más trackbacks";
        $lang_string['vote_info'] = "<b>%s</b> votos almacenados en <b>%s</b> bytes"; // 0.4.1
        $lang_string["most_voted_entries"] = "10 Entradas más votadas"; // 0.4.1
        $lang_string["most_rated_entries"] = "10 Entradas más valoradas"; // 0.4.1
        break;

      case 'errorpage-nocookies':  // New for 0.4.6
        $lang_string["title"] = 'HTTP Error 403.8 - Acceso Denegado a Página/Función';
        $lang_string["errorline1"] = 'La página o función que intenta procesar requiere el uso de cookies.';
        $lang_string["errorline2"] = 'Restaure la funcionalidad para almacenar cookies desde su navegador o software de protección e intente nuevamente.';
        $lang_string["clientid"] = 'ID Cliente: ';
        break;

      case 'errorpage':  // New for 0.4.6
        $lang_string["403.8"] = 'HTTP Error 403.8 - Acceso Denegado a Página/Función';
        $lang_string["404"] = 'HTTP Error 404 - No Existe la Página/Función';
        $lang_string["error_404"] = 'La página o función que intenta procesar no existe.';
        $lang_string["error_javascript"] = 'La página o función que intenta procesar requiere habilitar javascript para su correcto funcionamiento.';
        $lang_string["error_emailnotsent"] = 'El mensaje que intenta enviar ha fallado.';
        $lang_string["error_emailnotsentcapcha"] = 'El mensaje que intenta enviar ha fallado porque el texto Anti-Spam es incorrecto o no ha sido ingresado.';
        $lang_string["clientid"] = 'ID Cliente: ';
        break;

      case 'emoticons':  // New for 0.4.7
        $lang_string['title'] = "Administrar Emoticones";
        $lang_string['instructions'] = "
		  Seleccione los emoticones que quiere utilizar. Escriba en el recuadro los Tags que 
		  quiere remplazar por la imagen. Pueden utilizarse múltiples tags, sólo sepárelos con 
		  espacios.<br /><br />

          Por ejemplo:<br />
          :) :-) :RISA: :FELIZ:<br /><br />

          <i>(Es áltamente recomendable que haga los Tags de largo mayor a 2 caracteres,
          de otro modo pueden ocurrir substituciones inesperadas.)</i>";
        $lang_string["upload_instructions"] = 'Subir Nuevo Emoticon:';
        $lang_string["upload_success"] = '¡Éxito! ¡Imagen subida exitósamente!';
        $lang_string["upload_error"] = '¡Error! La Imagen no ha sido subida.';
        $lang_string["upload_invalid"] = '¡Error! Archivo de imagen no válido. La imagen debe ser un png, jpg, o gif.';
        $lang_string["save_success"] = '¡Preferencias para Emoticones guardadas exitósamente!';
        $lang_string["save_error"] = '¡Error! Preferencias para Emoticones sin guardar.';
        $lang_string["save_button"] = 'Guardar Emoticones';
        break;

      case 'archives': // New for 0.4.8
        $lang_string['title'] = "Archivos";
        $lang_string['showall'] = "Mostrar Todos";
        break;

      case 'manage_users':
        $lang_string['title'] = "Administrar Usuarios";
        $lang_string['instructions'] = "Cree, Modifique, o Elimine usuarios que no son administradores pero que tienen la capacidad de crear entradas para el blog y/o moderar los comentarios.";
        $lang_string['fulladminerror'] = "¡Debe ser un superadministrador para hacer esto!";
        $lang_string['header_user'] = "Usuario: ";
        $lang_string['header_property'] = "Propiedad";
        $lang_string['header_value'] = "Valor";
        $lang_string['prop_username'] = "Nombre de Usuario:";
        $lang_string['prop_fullname'] = "Nombre Visible:";
        $lang_string['prop_password'] = "Contraseña:";
        $lang_string['prop_email'] = "Correo Electrónico:";
        $lang_string['prop_avatar'] = "URL del Avatar:";
        $lang_string['prop_state'] = "¿Activo?";
        $lang_string['prop_sec_Moderate'] = "¿Moderar Comentarios?";
        $lang_string['prop_sec_Delete'] = "¿Borrar Entradas del Blog?";
        $lang_string['prop_sec_Edit'] = "¿Editar Cualquier Entrada?";
        $lang_string['btn_SaveChanges'] = "Guardar Cambios";
        $lang_string['btn_CreateUser'] = "Crear Usuario";
        $lang_string['btn_Cancel'] = "Cancelar";  
        $lang_string['grid_header'] = "Listado de Usuarios";
        $lang_string['grid_login'] = 'Usuario';
        $lang_string['grid_email'] = 'Correo Electrónico';
        $lang_string['grid_avatar'] = 'Avatar';
        $lang_string['grid_state'] = '¿Activo?';
        $lang_string['btn_modify'] = 'Modificar';
        $lang_string['btn_delete'] = 'Eliminar';
        $lang_string['create_user'] = 'Crear Nuevo Usuario';
        break;

      default:
        break;
    }
  }
?>
