<?php
  // English Language File
  // (c) 2004 Alexander Palmo, apalmo <at> bigevilbrain <dot> com
  // Edits: 2007 Rogelio A. Cortez Medina, Javier Tapia Juarez

  // Simple PHP Version: 0.5.0.1
  // Language Version:   0.5.0.1

  function sb_language( $page ) {
    global $language, $html_charset, $php_charset, $lang_string;

     // Language: Spanish
    $lang_string['locale'] = 'es_ES';
    $lang_string['language'] = 'spanish';

    // ISO Charset: ISO-8859-1
    $lang_string['html_charset'] = 'ISO-8859-1';
    $lang_string['php_charset'] = 'ISO-8859-1';

    setlocale( LC_TIME, $lang_string['locale'] );

    // Global Strings

    // Menu
    $lang_string['menu_links'] = "Enlaces";
    $lang_string['menu_home'] = "Pagina Principal";
    $lang_string['menu_contact'] = "Contactanos";
    $lang_string['menu_stats'] = "Estadisticas";
    $lang_string['menu_calendar'] = "Calendario"; // New for 0.4.8
    $lang_string['menu_archive'] = "Notas";
    $lang_string['menu_viewarchives'] = "Visualizar Notas";
    $lang_string['menu_menu'] = "Menu";
    $lang_string['menu_add'] = "Agregar Nota";
    $lang_string['menu_add_static'] = "Agregar Pagina Estatica";
    $lang_string['menu_upload'] = "Subir Imagen";
    $lang_string['menu_setup'] = "Preferencias";
    $lang_string['menu_categories'] = "Categorias";
    $lang_string['menu_info'] = "Informacion";
    $lang_string['manage_users'] = "Administracion de Usuarios";
    $lang_string['manage_php_config'] = "Ver Configuracion de PHP"; // New in 0.5.0.1
    $lang_string['menu_options'] = "Fecha &amp; Hora";
    $lang_string['menu_themes'] = "Temas";
    $lang_string['menu_colors'] = "Colores";
    $lang_string['menu_change_login'] = "Cambio de Usuario";
    $lang_string['menu_logout'] = "Salir";
    $lang_string['menu_login'] = "Entrar";
    $lang_string['menu_most_recent'] = "Comentarios Recientes";
    $lang_string['menu_most_recent_entries'] = "Notas Recientes";
    $lang_string['menu_most_recent_trackback'] = "Notas Posteriores Mas Recientes";
    $lang_string['menu_add_block'] = "Bloques";
    $lang_string['menu_emoticons'] = "Emoticonos"; // New for 0.4.7
    $lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
    $lang_string['menu_moderation'] = "Word/IP Moderation"; // New for 0.4.9
    $lang_string['menu_commentmoderation'] = "Unmodded Comments"; // New for 0.5.0
	$lang_string['menu_random_entry'] = "Entradas Aleatorias"; // New for 0.5.2
	$lang_string['menu_plugins'] = "Plugins"; // New for 0.5.2
    $lang_string['notice_moderator1'] = "Tu tienes ";
    $lang_string['notice_moderator2'] = " comentario(s) que requieren aprobacion.";
    $lang_string['notice_loggedin'] = "Conectado como:";
    

    // Counter
    $lang_string['counter_today'] = "Hoy:"; // New for 0.4.8
    $lang_string['counter_yesterday'] = "Ayer:"; // New for 0.4.8
    $lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
    $lang_string['counter_title'] = "Contador de Totales"; // New for 0.4.8

    // Other
    $lang_string['home'] = 'Regresar a Pagina Principal';
    $lang_string['nav_next'] = 'Siguiente';
    $lang_string['nav_back'] = 'Atras';
    $lang_string['nav_first'] = 'Primero'; // New in 0.5.0.1
    $lang_string['nav_last'] = 'Ultima'; // New in 0.5.0.1
    $lang_string['search_title'] = 'Buscar';
    $lang_string['search_go'] = 'Ir';
    $lang_string['page_generated_in'] = 'Pagina generada en %s segundos';
    $lang_string['counter_total'] = 'Visitas al Sitio: '; // New in 0.4.8
    $lang_string['read_more'] = 'Leer mas...'; // New in 0.4.8
    $lang_String['randomentry'] = 'Entrada Aleatoria'; // New in 0.5.0.1
    $lang_string['randomquote'] = 'Random Quote'; // New in 0.5.0.1

    // SB Functions
    $lang_string['sb_months'] = array( 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' );
    $lang_string['sb_default_title'] = 'Sin Titulo';
    $lang_string['sb_default_author'] = 'Sin Autor';
    $lang_string['sb_default_footer'] = 'Sin Pie de Pagina';

    $lang_string['sb_edit'] = 'editar';
    $lang_string['sb_delete'] = 'eliminar';
    $lang_string['sb_permalink'] = 'Enlace permanente';
    $lang_string['sb_trackback'] = 'Trackback';
    $lang_string['sb_postedby'] = 'Enviado por'; // 0.5.0
    $lang_string['sb_admin'] = 'Administrador'; // 0.5.0
    $lang_string['sb_relatedlink'] = 'Enlace relacionado'; // <-- New in 0.4.6

    $lang_string['sb_add_comment_btn'] = 'agregar comentario';
    $lang_string['sb_read_entry_btn'] = 'view entry'; // 0.5.0
    $lang_string['sb_comment_btn_number_first'] = true;
    $lang_string['sb_comment_btn'] = 'comentario';
    $lang_string['sb_comment_view'] = 'vista'; // 0.5.0
    $lang_string['sb_comments_plural_btn_number_first'] = true;
    $lang_string['sb_comments_plural_btn'] = 'comentario';
    $lang_string['sb_comments_plural_view'] = 'opciones'; // 0.5.0

    // ( 1 view )
    $lang_string['sb_view_counter_pre'] = '';
    $lang_string['sb_view_counter_post'] = ' vista';

    // ( 2 views )
    $lang_string['sb_view_counter_plural_pre'] = '';
    $lang_string['sb_view_counter_plural_post'] = ' opciones';

    $lang_string['sb_add_link_btn'] = '+ enlaces';
    $lang_string['sb_rate_entry_btn'] = 'Haga click para Entrar';

    // Entry Text Editor
    if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
      $lang_string['label_subject'] = "Asunto:";
      $lang_string['label_insert'] = "Insertado Especial:";
      $lang_string['btn_bold'] = " b ";
      $lang_string['btn_italic'] = " i ";
      $lang_string['btn_image'] = "img";
      $lang_string['btn_url'] = "url";
      $lang_string['btn_readmore'] = "Leer mas de"; // 0.4.8
      $lang_string['view_images'] = "Ver las imagenes cargadas";
      $lang_string['label_entry'] = "Entrar:";
      $lang_string['btn_preview'] = "&nbsp;Vista Previa&nbsp;";
      $lang_string['btn_post'] = "&nbspPublicar;&nbsp;";
      $lang_string['chk_visiblemenu'] = "Visible (Mostrar en el menu)";
      $lang_string['file_name'] = "Nombre del Fichero Estatico: (Sin espacios ni extensiones de archivo)";

      // Javascript Strings
      $lang_string['insert_styles'] = "Escriba el texto a ser formateado:";
      $lang_string['insert_image'] = "Introduzca la URL de la imagen:";
      $lang_string['insert_url1'] = "Escriba el texto que se mostrara para el enlace (Opcional):";
      $lang_string['insert_url2'] = "Escriba la URL completa de la relacion:";
      $lang_string['insert_url3'] = "Abrir URL en una nueva ventana (Opcional):";
      $lang_string['form_error'] = "Por favor, complete el campo Asunto y entrada .";

      // More Javascript Strings
      $lang_string['insert_image_optional'] = 'Opcional:';
      $lang_string['insert_image_width'] = 'Ancho (Opcional):';
      $lang_string['insert_image_height'] = 'Altura (Opcional):';
      $lang_string['insert_image_popup'] = 'Ver en una ventana emergente al hacer clic (Opcional):';
      $lang_string['insert_image_float'] = 'Float (Optional):';

      $lang_string['day'] = 'Dia';
      $lang_string['month'] = 'Mes';
      $lang_string['year'] = 'Ano';
      $lang_string['hour'] = 'Hora';
      $lang_string['minute'] = 'Minuto';
      $lang_string['second'] = 'Segundo';
    }

    switch ($page) {
      case 'add':
        // Add Entry
        $lang_string['title'] = "Agregar Entrada";
        $lang_string['instructions'] = "Esta preparado para el blog? Rellene el siguiente formulario y haga clic en Vistaprevia para ver como sera si entrada, o haga click en Publicar para guardar la entrada.";
        $lang_string['title_ad'] = "Confirmar Pings de Trackback";
        $lang_string['instructions_ad'] = "Estas son las Auto-Discovered  URIs sobre las que hara ping. Si no desea hacer ping a una determinada URI, quite la marca de seleccion. A continuacion pulse el boton 'OK' para hacer ping a la URIs verificada o presione 'Cancelar' para no hacer ping a todos.";
        $lang_string['label_tb_ping'] = "Trackback ping(s) a enviar (separados por comas)";
        $lang_string['label_tb_autodiscovery'] = "autodiscovery";
        $lang_string['label_relatedlink'] = "Enlace de Conexion";
        $lang_string['label_categories'] = "Lista de Categorias";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "VistaPrevia / Editar Entrada";
        $lang_string['instructions_preview'] = "A continuacion muestra como se ve tu entrada. Si esta usando estilos de texto o incluyendo imagenes, recuerda 'cerrar' todas sus 'etiquetas'.";
        $lang_string['title_update'] = "Actualizar Entrada";
        $lang_string['instructions_update'] = "Puede cambiar su entrada mediante el siguiente formulario. Haga clic en 'VistaPrevia' o 'Siguiente' cuando haya terminado.";
        $lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;";

        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>La Entrada no fue guardada. Se encontro un problema al guardarla.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Entrada Salvada!</h2>Su entrada a sido guardada satisfactoriamente."; // 0.4.8.1
        break;

      case 'add_static':
        // Add Entry
        $lang_string['title'] = "Agregar Pagina Estatica";
        $lang_string['instructions'] = "Rellene el siguiente formulario para crear un Pagina Estatica. A diferencia de un Blog ordinario de Entrada, un una Pagina Estatica las entradas aparecen en el menu de Enlaces. Se trata de una pagina que usted desee siempre que esten disponibles, como: Sobre mi, Contactos, Calendario, etc. Haga clic en VistaPrevia para ver como sera su entrada, o haga click en Publicar para guardar la entrada.";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "VistaPrevia / Editar Pagina Estatica";
        $lang_string['instructions_preview'] = "He aqui como su Pagina Estatica se vera. Si esta usando estilos de texto o incluyendo imagenes, recuerda cerrar todas sus etiquetas.";
        $lang_string['title_update'] = "Actualizar Pagina Estatica";
        $lang_string['instructions_update'] = "Puede cambiar su entrada mediante el siguiente formulario. Haga clic en 'VistaPrevia' o 'Siguiente' cuando haya terminado.";
        $lang_string['form_error'] = "Por favor, complete el campo Asunto, de entrada, y los campos Nombre del archivo.";

        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>La Entrada no fue guardada. Se encontro un problema al guardarla.<br /><br />Server Reported:<br />";
        break;

      case 'add_block':
        // Add / Manage Blocks
        $lang_string['title'] = "Agregrar / Administrar Bloques";
        $lang_string['instructions'] = "Use el formulario siguiente para agregar de forma personalizada 'Bloques', que aparecera el menu de la barra lateral.";
        $lang_string['up'] = "arriba";
        $lang_string['down'] = "abajo";
        $lang_string['edit'] = "editar";
        $lang_string['delete'] = "eliminar";
        $lang_string['block_name'] = "Nombre del Bloque:";
        $lang_string['block_content'] = "Contenido del Bloque:";
        $lang_string['instructions_edit'] = "Actualmente esta editando un Bloque.";
        $lang_string['instructions_modify'] = "Utilice el siguiente formulario para agregar o modificar las costumbres de los 'Bloques', que aparecera el menu de la barra lateral.";
        $lang_string['submit_btn_edit'] = "Editar Bloque";
        $lang_string['submit_btn_add'] = "Agregar Bloque";
        $lang_string['form_error'] = "Por favor, complete el campo Nombre.";
        break;

      case 'add_link':
        $lang_string['static_pages'] = "Pagina Estatica:";

        // Add / Manage Links
        $lang_string['title'] = "Agregra / Administrador de Enlaces";
        $lang_string['instructions'] = "Agregar enlaces a otros sitios. Rellene el siguiente formulario y haga clic en Agregar Enlace 'para agregar un enlace. Haga clic en los botones de arriba o hacia abajo para cambiar el orden de los enlaces. Haga clic en el boton de edicion para modificar un enlace. Haga clic en el boton para eliminar un enlace";
        $lang_string['up'] = "arriba";
        $lang_string['down'] = "abajo";
        $lang_string['edit'] = "editar";
        $lang_string['delete'] = "eliminar";
        $lang_string['link_name'] = "Nombre del Enlace:";
        $lang_string['link_url'] = "URL del Enlace: (Opcional. Dejar vacio para crear un separador.)";
        $lang_string['instructions_edit'] = "Actualmente se esta editando el enlace:";
        $lang_string['instructions_modify'] = "Haga click abajo para modificar un vinculo:";
        $lang_string['submit_btn_edit'] = "Editar Enlace";
        $lang_string['submit_btn_add'] = "Agregar Enlace";
        $lang_string['form_error'] = "Por favor, complete el campo Nombre.";
        break;

      case 'categories':

        // Add / Manage Links
        $lang_string['title'] = "Agregar / Administrar Categorias";
        $lang_string['instructions'] = "Use el formulario siguiente para agregar y editar sus categorias. Cada categoria debera ser tema en este formato 'nombre de categoria (numero de identificacion)'. Identificacion de los temas con espacios para crear jerarquias.<br /><br /><b>Ejemplo:</b><br />General (1)<br />Nuevos (3)<br />&nbsp;&nbsp;Anuncios (6)<br />&nbsp;&nbsp;Eventos (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Tecnologia (2)<br />";
        $lang_string['error'] = "Error";
        $lang_string['current_categories'] = "Categorias Recientes";
        $lang_string['no_categories_found'] = "Categorias sin Encontrar";
        $lang_string['category_list'] = "Lista Categoras:";
        $lang_string['validate'] = "Validar";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        break;

      case 'colors':
        // Change Colors
        $lang_string['title'] = "Cambio de Colores";
        $lang_string['instructions'] = "Puede cambiar el texto y los colores de fondo de su blog. En primer lugar, seleccione el campo a continuacion utilice el seleccionador de color a la mezcla de colores. El Valor cambioa automaticamente.";
        $lang_string['bg_color'] = "BG Pagina";
        $lang_string['main_bg_color'] = "BG Pagina Principal";
        $lang_string['border_color'] = "Borde de la Pagina";
        $lang_string['inner_border_color'] = "Fronteras Interiores";
        $lang_string['header_bg_color'] = "BG Encabezados";
        $lang_string['header_txt_color'] = "Texto del Encabezado";
        $lang_string['menu_bg_color'] = "BG Menu";
        $lang_string['footer_bg_color'] = "BG Pie de Pagina";
        $lang_string['txt_color'] = "Texto Principal";
        $lang_string['headline_txt_color'] = "Texto de la Cabezera";
        $lang_string['date_txt_color'] = "Texto de la Fecha";
        $lang_string['footer_txt_color'] = "Texto del Pie de Pagina";
        $lang_string['link_reg_color'] = "Enlace por Defecto";
        $lang_string['link_hi_color'] = "Link Hover";
        $lang_string['link_down_color'] = "Enlace Activo";

        // More Colors
        $lang_string['entry_bg'] = "Entrada BG";
        $lang_string['entry_title_bg'] = "Titulo de Entrada BG";
        $lang_string['entry_border'] = "Borde de Entrada";
        $lang_string['entry_title_text'] = "Texto del Titulo de Entrada";
        $lang_string['entry_text'] = "Texto de Entrada";

        $lang_string['static_bg'] = "Estatico BG"; // 0.5.0
        $lang_string['static_title_bg'] = "Titulo Estatico BG"; // 0.5.0
        $lang_string['static_border'] = "Borde Estatico"; // 0.5.0
        $lang_string['static_title_text'] = "Texto del Titulo Estatico"; // 0.5.0
        $lang_string['static_text'] = "Texto Estatico"; // 0.5.0

        $lang_string['comment_bg'] = "Comentario BG"; // 0.5.0
        $lang_string['comment_title_bg'] = "Titulo del Comentario BG"; // 0.5.0
        $lang_string['comment_border'] = "Borde del Comentario"; // 0.5.0
        $lang_string['comment_title_text'] = "Texto del Titulo del Comentario"; // 0.5.0
        $lang_string['comment_text'] = "Texto del Comentario"; // 0.5.0

        $lang_string['menu_bg'] = "Menu BG";
        $lang_string['menu_title_bg'] = "Titulo del Menu BG";
        $lang_string['menu_border'] = "Borde del Menu";
        $lang_string['menu_title_text'] = "Texto del Titulo del Menu";
        $lang_string['menu_text'] = "Texto del Menu";
        $lang_string['menu_link_reg_color'] = "Menu del Enlace por Defecto";
        $lang_string['menu_link_hi_color'] = "Menu del Enlace Flotante";
        $lang_string['menu_link_down_color'] = "Menu del Enlace Activo";

        // Submit
        $lang_string['color_preset'] = "Esquemas de Color:";
        $lang_string['scheme_name'] = "Introduzca un nombre personalizado al esquema de color:";
	$lang_string['scheme_file'] = "Introduzca un esquema al nombre de archivo: (sin espacios ni extensiones de archivo)";
        $lang_string['save_btn'] = "&nbsp;Salvar&nbsp;";
        $lang_string['form_error'] = "Por favor, introduzca un nombre para el esquema de colores personalizado.";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        $lang_string['theme_doesnt_allow_colors'] = 'El tema seleccionado actualmente no permite colores.';

        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>La informacion no fue guardada. Se encontro un problema al guardar su entrada.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Colores Guardados!</h2>La informacion se ha guardado con exito."; // New for 0.4.8.1
        break;

      case 'comments':
        // Comments
        $lang_string['name'] = "Nombre:"; //New in 0.4.6.2
        $lang_string['email'] = "Correo Electronico:"; //New in 0.4.6.2
        $lang_string['homepage'] = "Pagina de Inicio:"; //New in 0.4.6.2
        $lang_string['comment'] = "Comentarios:"; //New in 0.4.6.2
        $lang_string['IPAddress'] = "Direccion IP:";  // New for 0.4.6.2
        $lang_string['useragent'] = "Agente del Usuario:";  // New for 0.4.6.2
        $lang_string['wrote'] = "<i>On %s, %s escribio:</i><br />\n<br />\n%s"; // New for 0.4.6.2

        $lang_string['comment_capcha'] = "Anti-Spam: Introduzca <b>%s</b>"; // 0.4.2
        $lang_string['title'] = "Comentarios";
        $lang_string['header'] = "Agregar Comentarios";
        $lang_string['instructions'] = "Rellene el siguiente formulario para agregar sus propios comentarios.";
        $lang_string['comment_name'] = "Su Nombre:";
        $lang_string['comment_email'] = "Correo Electronico:";
        $lang_string['comment_url'] = "URL:";
        $lang_string['commentposted'] = "Nuevo comentario publicado en: ";  // New for 0.4.6.2
        $lang_string['comment_remember'] = "Recordarme:";
        $lang_string['comment_text'] = "Comentario:";
        $lang_string['post_btn'] = "&nbsp;Enviar Comentario&nbsp;";
        $lang_string['delete_btn'] = "eliminar";
        $lang_string['ban_btn'] = "prohibicion de  ip"; // New for 0.4.8
        $lang_string['expired_comment1'] = "Lo sentimos. Nuevos comentarios no se permite despues de "; // New for 0.4.8
        $lang_string['expired_comment2'] = " dias."; // New for 0.4.8

        $lang_string['blacklisted'] = "Lo sentimos, su direccion IP ha sido denegada. Comentarios no permitidos."; // New for 0.4.8
        $lang_string['bannedword'] = "Su comentario, URL, nombre o direccion de correo electronico que figura palabra (s) que han sido denegadas  por el administrador. Su comentario no se ha publicado."; // New for 0.4.8
        $lang_string['nocomments'] = "No se dispone de comentarios para esta entrada."; // New for 0.4.9
        $lang_string['email_moderator'] = "Los comentarios son moderados actualmente. Este comentario necesita aprobacion antes de ser vistos por el publico"; // New for 0.5.0
	$lang_string['user_notice_mod'] = "La moderacion esta activada para este blog. Tu comentario sera necesario que los administradores lo aprueben antes de que sea visible."; // new for 0.5.0

        $lang_string['return_to_comments'] = 'Volver a Comentarios';

        // Error Response
        $lang_string['error_add'] = "<h2>Whoops!</h2>Comentario no guardado. Se encontro un problema al guardar su comentario.<br /><br />Server Reported:<br />";
        $lang_string['error_delete'] = "<h2>Whoops!</h2>Comentario no eliminadodo. Se encontro un problema al eliminar su comentario.<br /><br />Server Reported:<br />";
        $lang_string['error_ban'] = "<h2>Whoops!</h2>La IP no se agrega a la lista de IP prohibidas.<br /><br />Server Reported:<br />";
        $lang_string['success_add'] = "<h2>Comentario Agregado!</h2>Tu comentario ha sido guardado con exito."; // New for 0.4.8.1
        $lang_string['success_delete'] = "<h2>Comentario Eliminado!</h2>El comentario ha sido borrado."; // New for 0.4.8.1
        $lang_string['success_ban1'] = "<h2>IP Prohibida!";
        $lang_string['success_ban2'] = "</h2>Para eliminar esta prohibicion en el futuro, use la opcion de Moderacion en el menu de preferencias."; // New for 0.4.8.1
	$lang_string['form_error'] = "Por favor, complete los campos de nombre, comentario y Anti-Spam.";
        $lang_string['error_noip'] = "IP no Prevista para Solicitud en Lista Negra.";

        $lang_string[ 'error_comments_disabled' ] = '<h2>Error!</h2>Hey! Sus Comentarios estan inhabilitados en este blog. Es usted un spambot?'; // New 0.5.0
        $lang_string[ 'error_no_match' ] = "<h2>Error!</h2>Su direccion IP no funciona. Es usted un spambot?"; // New 0.5.0
        $lang_string[ 'error_fields_missing' ] = '<h2>Error!</h2>Desaparecidos los siguientes campos: '; // New 0.5.0
        $lang_string[ 'error_spambot' ] = '<h2>Error!</h2>Capcha de datos esta desaperecido. Es usted un spambot?'; // New 0.5.0
        $lang_string[ 'error_capcha' ] = '<h2>Error!</h2>The capcha you entered is incorrect.'; // New 0.5.0
        $lang_string[ 'error_bad_data' ] = '<h2>Error!</h2>La Carta de datos no es valido. Es usted un hacker?'; // New 0.5.0
        $lang_string[ 'error_entry_missing' ] = '<h2>Error!</h2>Usted esta tratando de hacer comentarios sobre una entrada que no existe'; // New 0.5.0
        $lang_string[ 'error_empty_text' ] = '<h2>Error!</h2>No ha introducido cualquier comentario o su nombre.'; // New 0.5.0
        break;

      case 'delete':
        $lang_string['title'] = "Eliminar Entrada";
        $lang_string['instructions'] = "Esta es la entrada que esta a punto de borrar. Por favor, asegurese de que realmente quiere eliminar esto, no es deshacer...";
        $lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>No se ha podido eliminar la entrada.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Entrada Eliminada!</h2>La entrada ha sido borrada."; // New for 0.4.8.1
        break;

      case 'delete_static':
        $lang_string['title'] = "Eliminar Pagina Estatica";
        $lang_string['instructions'] = "Esta es la pagina estatica que se dispone a borrar. Por favor, asegurese de que realmente quiere eliminar esto, no es deshacer...";
        $lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>No se ha podido eliminar la entrada.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Pagina Estatica Eliminda!</h2>La pagina estatica ha sido borrada."; // New for 0.4.8.1
        break;

      case 'image_list':
        $lang_string['title'] = "Lista de Imagenes";
        $lang_string['instructions'] = "Haga clic en los siguientes enlaces para ver las imagenes.<br /><br />Para agregar una imagen a su entrada:<br />1) Control - Haga clic en un enlace y seleccione 'Copiar Enlace en el Portapapeles'.<br />2) Volver a la pagina Agregar Entrada o Editar Entrada.<br />3) Haga clic en el boton 'img' y pega la URL en la ventana.";
        break;

      case 'info':
        $lang_string['title'] = "Meta Datos de la Informacion";
        $lang_string['instructions'] = "La informacion que aparece a continuacion se utiliza para la &quot;meta-data&quot;, que ayuda a los motores de busqueda a encontrar e identificar correctamente su sitio. La informacion puede tambien ser utilizado en canales RSS.";
        $lang_string['info_keywords'] = "Palabras clave: (Lista de palabras clave separadas por comas.)";
        $lang_string['info_description'] = "Descripcion: (Un resumen o texto libre describiendo su sitio.)";
        $lang_string['info_copyright'] = "Derechos: (Derechos de declaracion, o de enlace con el documento que contiene la informacion.)";
        $lang_string['tracking_code'] = "External Tracking Code: (codigo HTML que necesita ejecutarse en la pagina principal (en la cabecera de las etiquetas de seguridad) solo para cada usuario que entra a la pagina de Google Analytics es decir)";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>La informacion no fue guardada. Se encontro un problema al guardar su informacion.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Meta Datos Guardados!</h2>La informacion se ha guardado con exito."; // New for 0.4.8.1
        $lang_string['form_error'] = "Por favor, rellene los campos Titulo y Autor.";
        break;

      case 'index':
        // Index
        break;

      case 'static':
        // Index
        break;

      case 'rating':
	$lang_string['error'] = "<h2>Whoops!</h2>La informacion no fue guardada. Se encontro un problema al guardar su informacion.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Voto Salvado!</h2>Su valoracion se ha guardado."; // New for 0.4.8.1
        break;

      case 'login':
        $lang_string['upgrade'] = "<h2>Actualizacion</h2>"; // New 0.3.8
        $lang_string['upgrade_count'] = "%n Los comentario necesitan ser actualizados:"; // New 0.3.8
        $lang_string['upgrade_url'] = "Actualizacion de Comentarios"; // New 0.3.8
        $lang_string['title'] = "Entrar";
        $lang_string['instructions'] = "Por favor, introduzca a continuacion su nombre de usuario y la contrasena:";
        $lang_string['username'] = "Nombre de Usuario:";
        $lang_string['password'] = "Contrasena";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Ha Tenido Exito!</h2>Ahora usted esta conectado. Feliz inicio de su Blog!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Whoops!</h2>Usted no se ha podido conectar. Por favor, compruebe que ha escrito su nombre de usuario y la contrasena correctamente y vuelva a intentarlo.<p />";
        $lang_string['inactive_account'] = "<h2>Whoops!</h2>Usted no se ha podico conectar. Su cuenta ha sido desactivada por el administrador, por alguna razon.<p />";
        $lang_string['form_error'] = "Por favor, complete los campos de nombre de usuario y contrasena.";
        break;

      case 'logout':
        $lang_string['title'] = "Cerrar Sesion";
        $lang_string['error'] = "<h2>Adios!</h2>Ha cerrado la sesion (Usted no fue registrado en cualquier caso!)<p />";
        $lang_string['error_no_cookie'] = "<h2>Adios!</h2>Ha cerrado la sesion (No se encuentran las cookie. Usted no fue registrado en cualquier caso!)<p />"; // New 0.5.0
	$lang_string['success'] = "<h2>Adios!</h2>Ha cerrado la sesion.<p />(Redirigiendo a la pagina principal en 5 segundos.)<p />";
        break;

      case 'forms':
        $lang_string['title'] = "";
        $lang_string['instructions'] = "";
	
	// Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>La informacion no fue guardada. Se encontro un problema al guardar su entrada.<br /><br />Server Reported:<br />";
        break;

      case 'set_login':
	$lang_string['title'] = "Cambiar el nombre de usuario &amp; Contrasena";
        $lang_string['instructions'] = "Use el formulario siguiente para cambiar su nombre de usuario y / o contrasena. Introduzca el nombre de usuario y la contrasena que desee utilizar.";
        $lang_string['username'] = "Nombre de Usuario:";
        $lang_string['password'] = "Contrasena:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Ha Tenido Exito!</h2>Su nombre de usuario y / o contrasena esta activa. Feliz inicio de su Blog !<p />";
        // Wrong Password
	$lang_string['wrong_password'] = "<h2>Whoops!</h2>La informacion no fue guardada. Se encontro un problema al guardar su nombre de usuario y / o contrasena.<br /><br />Server Reported:<br />";
        $lang_string['form_error'] = "Por favor, complete los campos de nombre de usuario y contrasena.";
        $lang_string['explanation'] = "En las ultimas versiones, nuestra estructura de la contrasena ha cambiado. Ya no hay una manera de actualizar las contrasenas
	  y / o de acceso desde el interior del codigo del blog.  Con el fin de cambiar su contrasena, elimine el directorio /config/password.php y asegurese de que el archivo install*.php
          existe en el servidor local. Una vez hecho esto, actualiza esta pagina (o cierra sesion).  Se le presentara con la misma secuencia de comandos 
          para generar su contrasena tal y como hizo cuando originalmente creo su sitio de blog.";  // New for 0.4.6
        break;

      case 'install00':
        $lang_string['title'] = "Bienvenido";
        $lang_string['instructions'] = "Gracias por elegir Simple PHP Blog!";
        $lang_string['blog_choose_language'] = "Elija el Idioma:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        break;

      case 'install01':
        $lang_string['title'] = "Bienvenido";
        $lang_string['instructions'] = "
        Gracias por elegir Simple PHP Blog!<br /><br />Simple PHP Blog es un ligero sistema de blogs. Requiere de  PHP 4.1 o mayor, y los permisos de escritura en el servidor. Toda la informacion se almacena en archivos planos, de modo que no se requiere de bases de datos.<br /><br />
        Para empezar, Simple PHP Blog es necesario crear tres carpetas (<b>config</b>, <b>content</b>, e <b>images</b>) En el que almacenara su informacion. Despues de eso, usted creara su contrasena entonces usted podra comenzar con su Blog.<br /><br />
        <b>Haga click abajo para comenzar la instalacion:</b>";
        $lang_string['begin'] = "[ Inicie la Instalacion ]";
        break;

      case 'install02':
        $lang_string['title'] = "Instalacion";
        $lang_string['instructions'] = "Tratando de crear <b>config</b>, <b>content</b>, e <b>images</b> folders:";
        $lang_string['folder_exists'] = "Ok! Los Folder ya existen. No realize ningun cambio...";
        $lang_string['folder_failed'] = "Whoops! No es posible crear los folders...";
        $lang_string['folder_success'] = "Ha Tenido Exito! Los Folders se han creado...";
        // Help
        $lang_string['Ayuda'] = "
        <h2>Whoops!</h2>
        No es posible crear uno o mas folders!<br /><br />Esto es probablemente porque:<br />
        <ol>
        <li><b>Los Permisos de Escritura</b> no estan establecidos para permitir <b>Leer/Escribir</b> de forma accesada.</li>
        <li>Lo <b>UID</b>s (Identificadores de usuario) de todos los archivos y carpetas debe coincidir.</li>
        </ol>
        Siga las instrucciones sobre como solucionar problemas y haga clic en la parte de abajo <b>Intentelo de nuevo</b>:<br />
        <ol>
        <li>Crear manualmente los siguientes folders: <b>config</b>, <b>content</b>, e <b>images</b>.</li>
        <li>Activado <b>Permiso de Escritura</b> en los folders: En tu programa de FTP, Propietario, Usuario, y Mundial deberia tener <b>Lectura</b> y <b>Escritura</b> de forma accesada. <i>(Es posible que necesite ponerse en contacto con su proveedor de servicio para cambiar estos permisos...)</i></li>
        <li>Asegurese de que los UID's de todos sus archivos y carpetas son los mismos. <i>Es posible que necesite ponerse en contacto con su proveedor de servicio para cambiar estas...)</i></li>
        </ol>";
        $lang_string['try_again'] = "[ Intentelo de Nuevo ]";
        // Success
        $lang_string['success'] = "<h2>Ha Tenido Exito!</h2>Folders creados con exito!<p /><b>Haga clic abajo para contuniar:</b>";
        $lang_string['continue'] = "[ Continuar ]";
        break;

      case 'install03':
        $lang_string['supported'] = "<b>Su servidor web apoya los siguientes sistemas de encriptado :</b>";
        $lang_string['standard'] = "Estandar de Encrptado DES: ";
        $lang_string['extended'] = "Extencion de Encriptado DES: ";
        $lang_string['MD5'] = "Encriptado MD5: ";
        $lang_string['blowfish'] = "Encritado Blowfish: ";
        $lang_string['enabled'] = "Habilitado";
        $lang_string['disabled'] = "Deshabilitado";
        $lang_string['using_standard'] = "<b>Uso Estandar de Encriptado DES...</b>";
        $lang_string['using_extended'] = "<b>Uso Extendido de Encriptado DES...</b>";
        $lang_string['using_MD5'] = "<b style=\"color: green;\">Uso Encriptado MD5...</b>";
        $lang_string['using_blowfish'] = "<b style=\"color: green;\">Uso Encriptado Blowfish...</b>";
        $lang_string['using_unknown'] = "<b>Uso de Encriptado Desconosido...</b>";
        $lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
        $lang_string['title'] = "Crear Nombre de Usuario &amp; Contrasena";
        $lang_string['instructions'] = "Use el formulario siguiente para crear un Nombre de Usuario y Contrasena.";
        $lang_string['username'] = "Nombre de Usuario:";
        $lang_string['password'] = "Contrasena:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Felicitaciones!</h2>Ahora ha iniciado sesion. Haga click abajo para visitar la pagina de configuracion donde puede nombrar su blog. Feliz inicio de su Blog.!<p />";
        $lang_string['btn_setup'] = "[ Instalacion ]";
        // Wrong Password
        $lang_string['wronog_password'] = "<h2>Whoops!</h2>La informacion no fue guardada. Se encontro con un problema al guardar su nombre de usuario y / o contrasena.<br /><br />Server Reported:<br />";
        $lang_string['form_error'] = "Por favor, complete los campos de nombre de usuario y contrasena.";
        break;

      case 'install04':
        $lang_string['title'] = "Crear Archivo de Contrasenas.";
        $lang_string['instructions'] = "Aqui esta la parte dificil:<br />
        <ol>
        <li>Abra una aplicacion de Editores de Texto. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
        <li>Crear un nuevo documento de texto.</li>
        <li>Copiar y pegar el codigo en el cuadro siguiente de tu documento.</li>
        <li>Guarde el archivo y nombralo <b>password.php</b> <i>(Asegurese de guardarlo en formato modo <b>texto</b> o <b>texto plano</b>.)</i></li>
        <li>Abra una aplicacion FTP.</li>
        <li>Sube tu nuevo archivo <b>password.php</b> en la <b>carpeta</b> de configuracion de tu sitio web.</li>
        <li>Eliminar el archivo <b>password.php</b> de la unidad de disco duro.</li>
        </ol>
        ";
        $lang_string['information'] = "<i>Nota: Si desea restablecer su nombre de usuario y contrasena probablemente porque se ha olvidado de ella), suprimir el archivo <b>password.php</b> de la <b>carpeta</b> de configuracion de su sitio web. La proxima vez que visite su sitio, le guiara de nuevo a travez de este proceso de instalacion..</i>";
        $lang_string['code'] = "Codigo del archivo <b>password.php</b>:";
        $lang_string['continue'] = "[ Continuar ]";
        break;

      case 'install05':
      case 'install06':
        $lang_string['title'] = "Entrar";
        $lang_string['instructions'] = "Por favor, a continuacion introduzca su nombre de usuario y contrasena";
        $lang_string['username'] = "Nombre de Usuario:";
        $lang_string['password'] = "Contrasena";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Felicitaciones!</h2>Ahora esta conectado.<p />
        Haga click abajo para visitar la pagina de <b>Instalacion</b> donde usted puede personalizar su nuevo blog.<p />
	<i>Nota: Ahora que ha concluido el proceso de instalacion se recomienda que elimine los archivos <b>installXX.php</b> desde su pagina web. (Es decir install00.php hasta install06.php)</i><p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Whoops!</h2>Usted no se ha podido conectar. Por favor, compruebe que ha escrito su nombre de usuario y la contrasena correctamente y vuelva a intentarlo.<p />";
        $lang_string['form_error'] = "Por favor, complete los campos nombre de usuario y contrasena.";
        // Success
        $lang_string['btn_setup'] = "[ Instalacion ]";
        $lang_string['btn_try_again'] = "[ Intentelo de nuevo ]";
        break;

      case 'setup':
        $lang_string['title'] = "Preferencias";
        $lang_string['instructions'] = "Puede usted a continuacion cambiar el nombre de su blog, y su informacion personal.";
        $lang_string['blog_title'] = "Nombre del Blog:";
        $lang_string['blog_header'] = "Encabezado Grafico URL: imagenes/blogdecabecera.jpg (Deja en blanco para el tema grafico por defecto).";
        $lang_string['blog_author'] = "Autor:";
        $lang_string['blog_email'] = "Correo Electronico: (Separe la direccion de correo electronico mediante una, coma o espacio en blanco desactivara la opcion Contactame)"; // Updated 0.4.7
        $lang_string['blog_avatar'] = "Avatar URL: images/avatar.jpg (Leave blank for none)."; // <-- New 0.4.7
        $lang_string['blog_footer'] = "Pie de pagina:";
        $lang_string['blog_choose_language'] = "Elija el Idioma:";
        $lang_string['blog_enable_comments'] = "Habilitar Comentarios de Usuarios";
        $lang_string['blog_comments_popup'] = "Abrir Comentarios en Ventana Emergente";
				$lang_string['blog_enable_start_category'] = "Use categorias especifias para las entradas de la pagina principal: "; // Now for 0.5.1
	$lang_string['blog_search_top'] = "Mostrar la Busqueda en las Entradas (En vez de en la barra lateral)"; // New for 0.5.0
        $lang_string['blog_enable_static_block'] = "Mostrar un bloque definido por la primera entrada del blog: "; // New for 0.5.0
        $lang_string['static_block_border'] = 'Mostrar Fronteras'; // New for 0.5.0
        $lang_string['static_block_noborder'] = 'No Mostrar Fronteras'; // New for 0.5.0
        $lang_string['blog_enable_voting'] = "Permiten a los usuarios desplazar las entradas ";
        $lang_string['blog_enable_cache'] = " Habilitar Memoria Cache en Entradas del Blog (puede proporcionar aumento de la velocidad en algunos de los servidores)"; // New for 0.4.6
        $lang_string['blog_enable_calendar'] = "Habilitar Calendario"; // New for 0.4.6
        $lang_string['blog_enable_archives'] = "Habilitar Bloque de Archivos"; // New for 0.4.8
        $lang_string['blog_enable_counter'] = "Habilitar Contador en la Barra Lateral"; // New for 0.4.8
        $lang_string['blog_counter_hours'] = "Numero de horas de retraso antes de contar de nuevo cada visita (basado en la direccion IP especifica):"; // New for 0.4.8
        $lang_string['blog_enable_login'] = "Habilitar Enlace de Entrada (Por favor, primero marque \"login.php \" ...)"; // New for 0.4.8
        $lang_string['blog_enable_title'] = "Habilitar el Bloque Titulo en Texto Plano (Borrar casilla si el titulo esta en la cabecera grafica)"; // New for 0.4.6
        $lang_string['blog_enable_permalink'] = "Habilitar Enlace Permanente sobre las Entradas del Blog"; // New for 0.4.6
        $lang_string['blog_enable_capcha'] = "Habilitar Anti-Spam"; // New for 0.4.8
        $lang_string['blog_footer_counter'] = "Habilitar Contador en el Pie de Pagina"; // New for 0.4.8
        $lang_string['blog_enable_capcha_image'] = "Imagenes Anti-Spam (solo biblioteca GD) / Texto Movil Anti-Spam "; // New for 0.4.8
        $lang_string['blog_enable_stats'] = "Habilitar la Opcion Estadisticas en el Menu"; // New for 0.4.7
        $lang_string['blog_enable_lastcomments'] = "Habilitar Listado de Comentarios mas Recientes"; // New for 0.4.7
        $lang_string['blog_enable_lastentries'] = "Habilitar Listado de Entradas mas Recientes"; // New for 0.4.7
        $lang_string['blog_email_notification'] = "Enviar notificacion por correo electronico cuando se publiquen comentarios";
        $lang_string['blog_send_pings'] = "Enviar Nuestro Blog &quot;pings&quot;";
        $lang_string['blog_ping_urls'] = "Introduzca de forma Completa su URL (es decir http://rpc.weblogs.com/RPC2) de servicio a un &quot;ping&quot;.<br />(Puede escribir mas de una direccion separadas por comas.)";
        $lang_string['blog_trackback_about'] = "Trackback proporciona un metodo de notificacion entre los blogs. Que otro
          blog de saber que usted esta vinculando a los mismos mediante el envio de un trackback. Ver quien esta vinculado a
          su blog por recibir trackbacks.<br />
           Puede entrar a la URI manualmente, o tratar de hacerlo automaticamente a traves de
           Auto-Descubrimiento.";
        $lang_string['blog_trackback_enabled'] = "Habilitar trackback en mi blog";
        $lang_string['blog_trackback_auto_discovery'] = "Habilitar Auto-Descubrimiento cuando la presentacion de una entrada contenga URLs";
        $lang_string['blog_max_entries'] = "Maximas Entradas para Mostrar:";
        $lang_string['blog_comment_tags'] = "Etiquetas para Permitir Comentarios:";
        $lang_string['blog_gzip_about'] = "
          A partir de PHP 4.0.4, PHP ha tenido la capacidad de leer y escribir con gzip (.gz) archivos comprimidos,
          ahorrando asi espacio en disco. Tambien puede comprimir de forma transparente las paginas que se envian a los navegadores
          por lo tanto daremos soporte a la compresion gzip, ahorrando ancho de banda.<br />
          <br />
          El soporte Zlib en PHP no esta habilitado por defecto. Si las casillas estan deshabilitadas, entonces su 
	  instalacion de PHP no soportara la extension Zlib.";
        $lang_string['blog_enable_gzip_txt'] = "Habilitar la Compresion GZIP para los Archivos de Base de Datos";
        $lang_string['blog_enable_gzip_output'] = "Habilitar la compresion GZIP para las salidas HTTP";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>La informacion no fue guardada. Se encontro un problema al guardarla.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Guardado Correcto!</h2>La informacion se ha guardado con exito."; // New for 0.4.8.1
	$lang_string['form_error'] = "Por favor, rellene los campos Titulo y Autor.";
        $lang_string['label_entry_order'] = "Orden de Entrada:";
        $lang_string['select_new_to_old'] = "Listado de los mas Recientes";
        $lang_string['select_old_to_new'] = "Listado de los mas Antiguos";
        $lang_string['label_comment_order'] = "Orden de Comentarios:";
        $lang_string['cal_sunday'] = "Domingo";
        $lang_string['cal_monday'] = "Lunes";
        $lang_string['label_calendar_start'] = "Calendarizar la Semana en su Dia de Inicio";
        $lang_string['title_sidebar'] = "Barra del Costado"; // New in 0.4.7
        $lang_string['title_comments'] = "Comentarios"; // New in 0.4.7
        $lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
        $lang_string['title_compression'] = "Compresion"; // New in 0.4.7
        $lang_string['title_entries'] = "Entradas"; // New in 0.4.7
        $lang_string['title_general'] = "General"; // New in 0.4.7
        $lang_string['title_language'] = "Lenguajes"; // New in 0.4.7
        $lang_string['blog_comment_days_expiry'] = "Como permitir comentarios por varios dias? (0 significa que no hay vencimiento) "; // New in 0.4.8
        $lang_string['blog_comments_moderation'] = "Se requiere aprobar los comentarios antes de ser publicados por el usuario en sesion 
          (siempre visible para el usuario en sesion)"; // New in 0.5.0
        $lang_string['comment_moderation'] = "Opciones de Moderacion"; // New in 0.5.0
        break;
      case 'comment_moderation':
        $lang_string['title'] = "Comentarios Unmodded";
	$lang_string['instructions'] = "Esta es una lista de todos los comentarios no disponibles para los usuarios que no se han identificado en el 
          blog porque no han sido aprobados por un moderador.";
        $lang_string['header'] = "Listado de Moderacion";
        $lang_string['enteredby'] = "Entro Por: ";
        $lang_string['entrydate'] = "Fecha de Entrada: ";
        $lang_string['blogentrytitle'] = "Titulo de Entrada del Blog: ";
        $lang_string['enteredcontent'] = "Contenido: ";
        $lang_string['totalunmodded'] = " Total de tema(s) de espera para actualizar el moderador.";
        $lang_string['mod_approve'] = "[Aprovar] ";
        $lang_string['mod_delete'] = "[Eliminar]";
        break;
      case 'moderation':
        $lang_string['title'] = "Preferencias de Moderacion";
        $lang_string['instructions'] = "Puede modificar la lista de moderacion automatica.";
        $lang_string['submit_btn'] = "&nbsp;Guardar la Configuracion de la Moderacion&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>La informacion no fue guardada. Se encontro un problema al guardarla.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Guardado Correcto!</h2>La informacion se ha guardado con exito."; // New for 0.4.8.1
        $lang_string['banned_address_list_title'] = "<h2>Direcciones IP Prohibidas</h2>";
        $lang_string['banned_address_list'] = "Debajo hay una lista de direcciones IP que se les ha prohibido la entrada a los comentarios. Cada IP esta en una linea distinta y debe ser de forma numerica (no nombres de DNS). Cuando se ha conectado, la IP puede prohibida y se ve directamente en la opinion de comentarios.";
        $lang_string['banned_word_list_title'] = "<h2>Palabras Prohibidas</h2>";
        $lang_string['banned_word_list'] = "A continuacion se muestra una lista de palabras que no se les permite estar en la URL o en el texto. Cada palabra o grupo de palabras esta en una linea separada. Se intentara hacer coincidir cada letra exactamente en los comentarios con el fin de prohibir las malas palabras";
        break;
      case 'trackbacks':
        // Trackbacks
        $lang_string['title'] = "Trackbacks";
        $lang_string['header'] = "Trackback URL para esta entrada:";
        $lang_string['delete_btn'] = "eliminar";
        // Error Response
        $lang_string['error_add'] = "Error de almacenamiento de datos trackback.";
        $lang_string['error_delete'] = "<h2>Whoops!</h2>El trackback no se ha eliminado. Se encontro un problema al eliminarlo.<br /><br />Server Reported:<br />";
        $lang_string['success_delete'] = "<h2>Trackback Eliminado!</h2>El enlace trackback ha sido eliminado."; // New for 0.4.8.1
        break;

      case 'options':
        $lang_string['title'] = "Opciones";
        $lang_string['instructions'] = "Use el formulario siguiente para personalizar la fecha y la hora a mostrar en su blog y comentarlo. Puede seleccionar el formato de 12 o 24 horas. Formato de fecha corto o largo. Y la zona <b>Previa</b> se actualiza automaticamemte para mostrarle a usted la apariencia de su formato.";
        // Long Date
        $lang_string['ldate_title'] = "Fecha en Formato Largo:";
        $lang_string['weekday'] = "Dia de la Semana";
        $lang_string['month'] = "Mes";
        $lang_string['day'] = "Dia";
        $lang_string['year'] = "Ano";
        $lang_string['none'] = "Ninguno";
        // Short Date
        $lang_string['sdate_title'] = "Fecha en Formato Corto:";
        $lang_string['s_month'] = "Mes";
        $lang_string['s_mon'] = "MMM";
        $lang_string['s_day'] = "Dia";
        $lang_string['s_year'] = "Ano";
        $lang_string['zero_day'] = "Cero Inicial para el Dia";
        $lang_string['show_century'] = "Mostrar Siglo";
        // Time
        $lang_string['time_title'] = "Rormato de Hora:";
        $lang_string['12hour'] = "Reloj de 12-horas";
        $lang_string['24hour'] = "Reloj de 24-horas";
        $lang_string['before_noon'] = "Before Noon";
        $lang_string['after_noon'] = "Antes de Medio Dia";
        // Date
        $lang_string['date_title'] = "Formato para Mostrar Fecha:";
        $lang_string['long_date'] = "Fecha Larga";
        $lang_string['short_date'] = "Fecha Corta";
        $lang_string['time'] = "Hora";
        // Menu
        $lang_string['menu_title'] = "Formato para Mostrar en el Menu Fecha:";
        $lang_string['long_date'] = "Fecha Larga";
        $lang_string['short_date'] = "Fecha Corta";
        // Used in multiple places
        $lang_string['zero_day'] = "Cero Inicial para el Dia";
        $lang_string['zero_month'] = "Cero Inicial para el Mes";
        $lang_string['zero_hour'] = "Cero Inicial para la Hora";
        $lang_string['separator'] = "Separador:";
        $lang_string['preview'] = "Vista Previa:";
        $lang_string['server_offset'] = "Servidor Offset:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>La informacion no fue guardada. Se encontro con un problema al guardarla.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Opcion Guardada!</h2>La informacion se ha guardado con exito."; // New for 0.4.8.1
        break;

      case 'themes':
        $lang_string['title'] = "Temas";
        $lang_string['instructions'] = "Use el menu desplegable para seleccionar un tema diferente.";
        // Themes
        $lang_string['choose_theme'] = "Temas:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>La informacion no fue guardada. Se encontro con un problema al guardarla.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Tema Seleccionado!</h2>La informacion se ha guardado con exito."; // New for 0.4.8.1
        break;

      case 'upload_img':
        $lang_string['title'] = "Subir Imagen";
        $lang_string['instructions'] = "Haga clic en el boton de abajo para seleccionar una imagen a subir.";
        $lang_string['select_file'] = "Selecciona el archivo:";
        $lang_string['upload_btn'] = "Subir";
        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>No se ha podido cargar la imagen. Aqui tiene mas informacion:<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Imagen Lista!</h2>La imagen ha sido guardada con exito."; // New for 0.4.8.1
        break;

      case 'search':
        $lang_string['title'] = "Resultados de la Busqueda";
        $lang_string['instructions'] = "Resultado de la Busqueda para la <b>%cadena</b>:";
        $lang_string['not_found'] = "No se han encontrado resultados";
        break;

      case 'contact':
        $lang_string['contact_capcha'] = "Anti-Spam: Introduzca "; // 0.4.2
        $lang_string['title'] = "Contactame";
        $lang_string['instructions'] = "Rellene el formulario:";
        $lang_string['form_error'] = "Por favor, complete el campo Asunto y Comentario.";
        $lang_string['name'] = "Nombre:";
        $lang_string['email'] = "Correo Electronico:";
        $lang_string['subject'] = "Asunto:";
        $lang_string['comment'] = "Comentario:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        $lang_string['success'] = "<h2>Ha Tenido Exito!</h2>Su mensaje ha sido enviado.<p />";
        $lang_string['failure'] = "<h2>Error!</h2>Su mensaje no se ha enviado. Lo mas probable es que el Anti-Spam no entro correctamente.<p />";
        $lang_string['contactsent'] = "Contacto enviado a travez de: ";  // New for 0.4.6
        $lang_string['IPAddress'] = "Direccion IP:";  // New for 0.4.6
        $lang_string['useragent'] = "Agente de Usuario:";  // New for 0.4.6
        $lang_string['wrote'] = "<i>El %s, %s escribio:</i><br />\n<br />\n%s"; // New for 0.4.6.2
        break;

      case 'stats':
        $lang_string["title"] = "Estadisticas";
        $lang_string["general"] = "General";
        $lang_string["entry_info"] = "<b>%s</b> entradas usando <b>%s</b> palabras almacenadas en <b>%s</b> bytes";
        $lang_string["comment_info"] = "<b>%s</b> comentarios usando <b>%s</b> palabras almacenadas en <b>%s</b> bytes";
        $lang_string["trackback_info"] = "<b>%s</b> trackbacks almacenados en <b>%s</b> bytes";
        $lang_string["static_info"] = "<b>%s</b> paginas estaticas utilizando <b>%s</b> palabras almacenadas en <b>%s</b> bytes";
        $lang_string["most_viewed_entries"] = "10 Entradas mas vistas";
        $lang_string["most_commented_entries"] = "10 Entradas mas comentadas";
        $lang_string["most_trackbacked_entries"] = "10 Entradas con mas trackbacked";
        $lang_string['vote_info'] = "<b>%s</b> votos almacenados en <b>%s</b> bytes"; // 0.4.1
        $lang_string["most_voted_entries"] = "10 Entradas con mayor votos"; // 0.4.1
        $lang_string["most_rated_entries"] = "10 Entradas con mayor valiracion"; // 0.4.1
        break;

      case 'errorpage-nocookies':  // New for 0.4.6
        $lang_string["title"] = 'HTTP Error 403.8 - Acceso Denegado a Pagina o Funcion';
        $lang_string["errorline1"] = 'La pagina o funcion que intenta accesar requiere la utilizacion de cookies.';
        $lang_string["errorline2"] = 'Restaurar la funcionalidad de cookies en su navegador o software de proteccion e intentar enviar su solicitud de nuevo.';
        $lang_string["clientid"] = 'ID del Cliente: ';
        break;

      case 'errorpage':  // New for 0.4.6
        $lang_string["403.8"] = 'HTTP Error 403.8 - Acceso Denegado a Pagina o Funcion';
        $lang_string["404"] = 'HTTP Error 404 - No existe la Pagina o Fuincion';
        $lang_string["error_404"] = 'La pagina o funcion que intenta accesar no existe.';
        $lang_string["error_javascript"] = 'La pagina o funcion que intento accesar requiere de javascript para funcionar correctamente.';
        $lang_string["error_emailnotsent"] = 'El mensaje que trato de enviar ha fracasado.';
        $lang_string["error_emailnotsentcapcha"] = 'El mensaje que usted ha tratado de enviar ha fracasado, dado que la entrada del anti-spam es incorrecto o falta.';
        $lang_string["clientid"] = 'ID del Cliente: ';
        break;

      case 'emoticons':  // New for 0.4.7
        $lang_string['title'] = "Administracion de los  Emoticonos";
        $lang_string['instructions'] = "
          Cheque los emoticonos que desea utilizar. Escriba en la casilla la Etiqueta que desea
          ser sustituida por la imagen. Las etiquetas multiples pueden ser utilizadas, solo separalas
          por espacios.<br /><br />

          For instance:<br />
          :) :-) :SMILE: :HAPPY:<br /><br />

          <i>(Es altamente recomendable que haga de las Etiquetas con mas de 2 caracteres,
          de otro modo puede ocurrir sustituciones inesperadas.)</i>";
        $lang_string["upload_instructions"] = 'Cargar Nuevo Emoticono:';
        $lang_string["upload_success"] = 'Ha Tenido Exito! Su imagen se ingreso correctamente!';
        $lang_string["upload_error"] = 'Error! La imagen no se introdujo.';
        $lang_string["upload_invalid"] = 'Error! El archivo de la imagen no es valido. Utilize imagenes con extencion png, jpg, or gif.';
        $lang_string["save_success"] = 'Guardado orrecto de las preferencias de los emoticonos!';
        $lang_string["save_error"] = 'Error! Las preferencias de los emoticonos no se guardaron.';
        $lang_string["save_button"] = 'Emoticono Guardado';
        break;

      case 'archives': // New for 0.4.8
        $lang_string['title'] = "Archives";
        $lang_string['showall'] = "Show All";
        break;

      case 'manage_users':
        $lang_string['title'] = "Administrar las Ediciones de los Usuarios";
        $lang_string['instructions'] = "Agregar, Modificar o Eliminar usuarios que no son administradores, sino de la posibilidad de crear entradas de blog y/o moderar los comentarios.";
        $lang_string['fulladminerror'] = "Usted debe ser un administrador para hacer esto!";
        $lang_string['header_user'] = "Usuario: ";
        $lang_string['header_property'] = "Propiedad";
        $lang_string['header_value'] = "Valor";
        $lang_string['prop_username'] = "Nombre de Usuario:";
        $lang_string['prop_fullname'] = "Mostrar Nombre:";
        $lang_string['prop_password'] = "Contrasena:";
        $lang_string['prop_email'] = "Correo Electronico:";
        $lang_string['prop_avatar'] = "Avatar URL:";
        $lang_string['prop_state'] = "Activar?";
        $lang_string['prop_sec_Moderate'] = "Moderar Comentarios?";
        $lang_string['prop_sec_Delete'] = "Eliminar Entradas del Blog?";
        $lang_string['prop_sec_Edit'] = "Editar Cualquier Entrada?";
        $lang_string['btn_SaveChanges'] = "Salvar Cambios";
        $lang_string['btn_CreateUser'] = "Crear Usuario";
        $lang_string['btn_Cancel'] = "Cancelar";  
        $lang_string['grid_header'] = "Listado de Usuarios";
        $lang_string['grid_login'] = 'Entrar';
        $lang_string['grid_email'] = 'Correo Electronico';
        $lang_string['grid_avatar'] = 'Avatar';
        $lang_string['grid_state'] = 'Activar?';
        $lang_string['btn_modify'] = 'Modificar';
        $lang_string['btn_delete'] = 'Eliminar';
        $lang_string['create_user'] = 'Crear Nuevo Usuario';
        break;

      default:
        break;
    }
  }
?>
