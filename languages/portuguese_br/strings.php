<?php
  // English Language File
  // (c) 2004 Alexander Palmo, apalmo <at> bigevilbrain <dot> com
  // Edits: 2007 Bill Bateman, Alexander Palmo

  // Simple PHP Version: 0.5.0.1
  // Language Version:   0.5.0.1

  function sb_language( $page ) {
    global $language, $html_charset, $php_charset, $lang_string;

    // Language: English
    $lang_string['language'] = 'english';
    $lang_string['locale'] = array('pt_BR', 'br');
    $lang_string['rss_locale'] = 'pt-BR'; // New 0.4.8

    // ISO Charset: ISO-8859-1
    $lang_string['html_charset'] = 'ISO-8859-1';
    $lang_string['php_charset'] = 'ISO-8859-1';
    setlocale( LC_TIME, $lang_string['locale'] );

    // Global Strings

    // Menu
    $lang_string['menu_links'] = "Links";
    $lang_string['menu_home'] = "Início";
    $lang_string['menu_contact'] = "Contato";
    $lang_string['menu_stats'] = "Estatisticas";
    $lang_string['menu_calendar'] = "Calendário"; // New for 0.4.8
    $lang_string['menu_archive'] = "Arquivo";
    $lang_string['menu_viewarchives'] = "Ver Arquivos";
    $lang_string['menu_menu'] = "Menu";
    $lang_string['menu_add'] = "Criar Post";
    $lang_string['menu_add_static'] = "Criar Página Fixa";
    $lang_string['menu_upload'] = "Carregar Imagem";
    $lang_string['menu_setup'] = "Preferências";
    $lang_string['menu_categories'] = "Categorias";
    $lang_string['menu_info'] = "Meta Tags";
    $lang_string['manage_users'] = "Gerenciados de Usuários";
    $lang_string['manage_php_config'] = "Ver Config. do PHP"; // New in 0.5.0.1
    $lang_string['menu_options'] = "Data &amp; Hora";
    $lang_string['menu_themes'] = "Temas";
    $lang_string['menu_colors'] = "Cores";
    $lang_string['menu_change_login'] = "Mudar Login";
    $lang_string['menu_logout'] = "Sair";
    $lang_string['menu_login'] = "Entrar";
    $lang_string['menu_most_recent'] = "Comentários Recentes";
    $lang_string['menu_most_recent_entries'] = "Posts Recentes";
    $lang_string['menu_most_recent_trackback'] = "Trackbacks Recentes";
    $lang_string['menu_add_block'] = "Bloqueios";
    $lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
    $lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
    $lang_string['menu_moderation'] = "Moderação IP/Palavras"; // New for 0.4.9
    $lang_string['menu_commentmoderation'] = "Comentários não moderados"; // New for 0.5.0
    $lang_string['menu_random_entry'] = "Posts Aleatórios"; // New for 0.5.2
    $lang_string['menu_plugins'] = "Plugins"; // New for 0.5.2
    $lang_string['notice_moderator1'] = "Você tem ";
    $lang_string['notice_moderator2'] = " comentários que precisam ser aprovados.";
    $lang_string['notice_loggedin'] = "Atualmente você está logado.";
    

    // Counter
    $lang_string['counter_today'] = "Hoje:"; // New for 0.4.8
    $lang_string['counter_yesterday'] = "Ontem:"; // New for 0.4.8
    $lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
    $lang_string['counter_title'] = "Contador Acumulado"; // New for 0.4.8

    // Other
    $lang_string['home'] = 'Voltar para o Início';
    $lang_string['nav_next'] = 'Próximo';
    $lang_string['nav_back'] = 'Anterior';
    $lang_string['nav_first'] = 'Primeiro'; // New in 0.5.0.1
    $lang_string['nav_last'] = 'Último'; // New in 0.5.0.1
    $lang_string['search_title'] = 'Procurar';
    $lang_string['search_go'] = 'Ir';
    $lang_string['page_generated_in'] = 'Página gerada em %s segundos';
    $lang_string['counter_total'] = 'Visitas a Sites: '; // New in 0.4.8
    $lang_string['read_more'] = 'Leia Mais...'; // New in 0.4.8
    $lang_String['randomentry'] = 'Posts Aleatórios'; // New in 0.5.0.1
    $lang_string['randomquote'] = 'Comentários Aleatórios'; // New in 0.5.0.1

    // SB Functions
    $lang_string['sb_months'] = array( 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' );
    $lang_string['sb_default_title'] = 'Sem título';
    $lang_string['sb_default_author'] = 'Sem autor';
    $lang_string['sb_default_footer'] = 'Sem rodapé';

    $lang_string['sb_edit'] = 'alterar';
    $lang_string['sb_delete'] = 'excluir';
    $lang_string['sb_permalink'] = 'permalink';
    $lang_string['sb_trackback'] = 'trackbacks';
    $lang_string['sb_postedby'] = 'Publicado por'; // 0.5.0
    $lang_string['sb_admin'] = 'Administrador'; // 0.5.0
    $lang_string['sb_relatedlink'] = 'link relacionado'; // <-- New in 0.4.6

    $lang_string['sb_add_comment_btn'] = 'incluir comentário';
    $lang_string['sb_read_entry_btn'] = 'ver post'; // 0.5.0
    $lang_string['sb_comment_btn_number_first'] = true;
    $lang_string['sb_comment_btn'] = 'comentário';
    $lang_string['sb_comment_view'] = 'visita'; // 0.5.0
    $lang_string['sb_comments_plural_btn_number_first'] = true;
    $lang_string['sb_comments_plural_btn'] = 'comentários';
    $lang_string['sb_comments_plural_view'] = 'visitas'; // 0.5.0

    // ( 1 view )
    $lang_string['sb_view_counter_pre'] = '';
    $lang_string['sb_view_counter_post'] = ' visita';

    // ( 2 views )
    $lang_string['sb_view_counter_plural_pre'] = '';
    $lang_string['sb_view_counter_plural_post'] = ' visitas';

    $lang_string['sb_add_link_btn'] = '+ link';
    $lang_string['sb_rate_entry_btn'] = 'Clique para avaliar este Post';

    // Entry Text Editor
    if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
      $lang_string['label_subject'] = "Assunto:";
      $lang_string['label_insert'] = "Inclusão Especial:";
      $lang_string['btn_bold'] = " b ";
      $lang_string['btn_italic'] = " i ";
      $lang_string['btn_image'] = "img";
      $lang_string['btn_url'] = "url";
      $lang_string['btn_readmore'] = "leia mais"; // 0.4.8
      $lang_string['view_images'] = "Ver Imagens Carregadas";
      $lang_string['label_entry'] = "Post:";
      $lang_string['btn_preview'] = "&nbsp;Pré-Visualizar&nbsp;";
      $lang_string['btn_post'] = "&nbsp;Enviar&nbsp;";
      $lang_string['chk_visiblemenu'] = "Visível (Mostrar no menu)";
      $lang_string['file_name'] = "Nome do Arquivo: (sem espaços nem extensões)";

      // Javascript Strings
      $lang_string['insert_styles'] = "Informe o texto a ser formatado:";
      $lang_string['insert_image'] = "Informe a URL para a imagem:";
      $lang_string['insert_url1'] = "Informe o texto que será exibido no link (Opcional):";
      $lang_string['insert_url2'] = "Informe a URL completa do link:";
      $lang_string['insert_url3'] = "Abrir URL em uma nova janela (Opcional):";
      $lang_string['form_error'] = "Favor informar os campos Assunto e Post.";

      // More Javascript Strings
      $lang_string['insert_image_optional'] = 'Opcional:';
      $lang_string['insert_image_width'] = 'Largura (Opcional):';
      $lang_string['insert_image_height'] = 'Altura (Opcional):';
      $lang_string['insert_image_popup'] = 'Ver o pop-up em tamanho completo (Opcional):';
      $lang_string['insert_image_float'] = 'Suspenso (Opcional):';

      $lang_string['day'] = 'Dia';
      $lang_string['month'] = 'Mês';
      $lang_string['year'] = 'Ano';
      $lang_string['hour'] = 'Hora';
      $lang_string['minute'] = 'Minuto';
      $lang_string['second'] = 'Segundo';
    }

    switch ($page) {
      case 'add':
        // Add Entry
        $lang_string['title'] = "Incluir Post";
        $lang_string['instructions'] = "Preencha o formulário abaixo e clique em 'Pré-Visualizar' para ver como ficará, ou clique em 'Enviar' para salvar seu Post.";
        $lang_string['title_ad'] = "Confirme o Trackback Pings";
        $lang_string['instructions_ad'] = "Estas são as URIs Auto-detectadas que você está para pingar. Se você não quer pingar uma determinada URI, desmarque-a abaixo. Então pressione o botão 'Ok' para pingar as URIs marcadas ou pressione 'Cancelar' para não pingar nada.";
        $lang_string['label_tb_ping'] = "Trackback ping(s) a serem enviados (separado por vírgula)";
        $lang_string['label_tb_autodiscovery'] = "auto-detectar";
        $lang_string['label_relatedlink'] = "Links Relacionados";
        $lang_string['label_categories'] = "Lista de Categorias";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Pré-Visualizar / Alterar Post";
        $lang_string['instructions_preview'] = "Aqui mostra como seu post ficará. Se estiver usando 'text styles' ou incluindo imagens, lembre-se de 'fechar' todas as suas 'tags'.";
        $lang_string['title_update'] = "Alterar Post";
        $lang_string['instructions_update'] = "Você pode mudar seu post usando o formulário abaixo. Clique em 'Pré-Visualizar' ou 'Enviar' quando tiver terminado.";
        $lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";

        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>O post não foi salvo. Ocorreu um erro enquanto as informações eram salvas.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Post Salvo!</h2>Seu post foi salvo com sucesso."; // 0.4.8.1
        break;

      case 'add_static':
        // Add Entry
        $lang_string['title'] = "Incluir Página Fixa";
        $lang_string['instructions'] = "Preencha o formulário abaixo para criar uma Página Fixa. Ao contrário dos Posts normais, as Páginas Fixas aparecem no menu de links. São páginas que você quer sempre deixar visíveis, como: Sobre, Contato, Agenda, etc. Clique 'Pré-Visualizar' para ver como ficará, ou clique em 'Enviar' para salvar sua página.";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Pré-Visualizar / Alterar Página Fixa";
        $lang_string['instructions_preview'] = "Aqui mostra como sua Página Fixa ficará. Se estiver usando 'text styles' ou incluindo imagens, lembre-se de 'fechar' todas as suas 'tags'.";
        $lang_string['title_update'] = "Alterar Página Fixa";
        $lang_string['instructions_update'] = "Você pode mudar sua página usando o formulário abaixo. Clique em 'Pré-Visualizar' ou 'Enviar' quando tiver terminado.";
        $lang_string['form_error'] = "Favor preencher os campos Assunto, Conteúdo e Nome do Arquivo.";

        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>A página não foi salva. Ocorreu um erro enquanto as informações eram salvas.<br /><br />Resposta do Servidor:<br />";
        break;

      case 'add_block':
        // Add / Manage Blocks
        $lang_string['title'] = "Incluir / Gerenciar Blocos";
        $lang_string['instructions'] = "Use o formulário abaixo para incluir um Bloco customizado que aparecerá no menu lateral.";
        $lang_string['up'] = "sobe";
        $lang_string['down'] = "desce";
        $lang_string['edit'] = "alterar";
        $lang_string['delete'] = "excluir";
        $lang_string['block_name'] = "Nome do Bloco:";
        $lang_string['block_content'] = "Conteúdo do Bloco:";
        $lang_string['instructions_edit'] = "Você está alterando um bloco.";
        $lang_string['instructions_modify'] = "Use o formulário abaixo para incluir ou alterar um Bloco customizado que aparecerá no menu lateral.";
        $lang_string['submit_btn_edit'] = "Alterar Bloco";
        $lang_string['submit_btn_add'] = "Incluir Bloco";
        $lang_string['form_error'] = "Favor preencher o campo Nome do Bloco.";
        break;

      case 'add_link':
        $lang_string['static_pages'] = "Páginas Fixas:";

        // Add / Manage Links
        $lang_string['title'] = "Incluir / Gerenciar Links";
        $lang_string['instructions'] = "Inclui links customizados para outros sites. Preencha o formulário abaixo e clique em 'Incluir Link' para criar um link. Clique nos botões 'sobe' ou 'desce' para mudar a ordem dos links. Clique no botão 'alterar' para modificar um link. Clique no botão 'excluir' para remover um link";
        $lang_string['up'] = "sobe";
        $lang_string['down'] = "desce";
        $lang_string['edit'] = "alterar";
        $lang_string['delete'] = "excluir";
        $lang_string['link_name'] = "Nome do Link:";
        $lang_string['link_url'] = "URL do Link: (Opcional. Deixe em branco para criar um separador.)";
        $lang_string['instructions_edit'] = "Você está alterando um link:";
        $lang_string['instructions_modify'] = "Clique abaixo para modificar um link:";
        $lang_string['submit_btn_edit'] = "Alterar Link";
        $lang_string['submit_btn_add'] = "Incluir Link";
        $lang_string['form_error'] = "Favor preencher o campo Nome do Link.";
        break;

      case 'categories':

        // Add / Manage Links
        $lang_string['title'] = "Incluir / Gerenciar Categorias";
        $lang_string['instructions'] = "Use o formulário abaixo para incluir e alterar suas categorias. Cada item de categoria pode estar neste formato 'nome da categora (número do id)'. Indente os itens com spaces para criar hierarquias.<br /><br /><b>Exemplo:</b><br />Geral (1)<br />Notícias (3)<br />&nbsp;&nbsp;Anúncios (6)<br />&nbsp;&nbsp;Eventos (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misto (7)<br />Tecnologias (2)<br />";
        $lang_string['error'] = "Erro";
        $lang_string['current_categories'] = "Categorias atuais";
        $lang_string['no_categories_found'] = "Nenhuma Categoria Encontrada";
        $lang_string['category_list'] = "Lista de Categoria:";
        $lang_string['validate'] = "Validar";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        break;

      case 'colors':
        // Change Colors
        $lang_string['title'] = "Mudar Cores";
        $lang_string['instructions'] = "Você pode mudar as cores de texto e fundo do seu blog. Primeiro selecione o campo, então use o selecionador de cores. O campo Valor mudará automaticamente.";
        $lang_string['bg_color'] = "Fundo Página";
        $lang_string['main_bg_color'] = "Fundo Página Principal";
        $lang_string['border_color'] = "Borda da Página";
        $lang_string['inner_border_color'] = "Mouse sobre a borda";
        $lang_string['header_bg_color'] = "Fundo do Cabeçalho";
        $lang_string['header_txt_color'] = "Texto do Cabeçalho";
        $lang_string['menu_bg_color'] = "Fundo do Menu";
        $lang_string['footer_bg_color'] = "Fundo do Rodapé";
        $lang_string['txt_color'] = "Texto Principal";
        $lang_string['headline_txt_color'] = "Linha de cabeçalho";
        $lang_string['date_txt_color'] = "Texto da Data";
        $lang_string['footer_txt_color'] = "Texto do Rodapé";
        $lang_string['link_reg_color'] = "Link Padrão";
        $lang_string['link_hi_color'] = "Mouse sobre o Link";
        $lang_string['link_down_color'] = "Link Ativo";

        // More Colors
        $lang_string['entry_bg'] = "Fundo do Post";
        $lang_string['entry_title_bg'] = "Fundo do Título do Post";
        $lang_string['entry_border'] = "Borda do Post";
        $lang_string['entry_title_text'] = "Texto do Título do Post";
        $lang_string['entry_text'] = "Texto do Post";

        $lang_string['static_bg'] = "Fundo da Pág Fixa"; // 0.5.0
        $lang_string['static_title_bg'] = "Fundo do Título da Pág Fixa"; // 0.5.0
        $lang_string['static_border'] = "Borda da Pág Fixa"; // 0.5.0
        $lang_string['static_title_text'] = "Texto do Título da Pág Fixa"; // 0.5.0
        $lang_string['static_text'] = "Texto da Pág Fixa"; // 0.5.0

        $lang_string['comment_bg'] = "Fundo do Coment"; // 0.5.0
        $lang_string['comment_title_bg'] = "Fundo do Título do Coment"; // 0.5.0
        $lang_string['comment_border'] = "Borda do Coment"; // 0.5.0
        $lang_string['comment_title_text'] = "Texto do Título do Coment"; // 0.5.0
        $lang_string['comment_text'] = "Texto do Coment"; // 0.5.0

        $lang_string['menu_bg'] = "Fundo do Menu";
        $lang_string['menu_title_bg'] = "Fundo do Título do Menu";
        $lang_string['menu_border'] = "Borda do Menu";
        $lang_string['menu_title_text'] = "Texto do Título do Menu";
        $lang_string['menu_text'] = "Texto do Menu";
        $lang_string['menu_link_reg_color'] = "Link do Menu Padrão";
        $lang_string['menu_link_hi_color'] = "Mouse sobre o Link do Menu";
        $lang_string['menu_link_down_color'] = "Link do Menu Ativo";

        // Submit
        $lang_string['color_preset'] = "Esquema de Cor:";
        $lang_string['scheme_name'] = "Digite um nome para o esquema de cor customizado:";
        $lang_string['scheme_file'] = "Digite um nome de arquivo do esquema: (sem espaço ou extensão de arquivo)";
        $lang_string['save_btn'] = "&nbsp;Salvar&nbsp;";
        $lang_string['form_error'] = "Favor digitar um nome para o esquema de cor customizado.";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        $lang_string['theme_doesnt_allow_colors'] = 'O tema selecionado não permite o uso de cores customizadas.';

        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>Informações não salvas. Ocorreu um problema enquanto seus dados eram salvos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Cores Salvas!</h2>As informações foram salvas com sucesso."; // New for 0.4.8.1
        break;

      case 'comments':
        // comments
        $lang_string['name'] = "Nome:"; //New in 0.4.6.2
        $lang_string['email'] = "Email:"; //New in 0.4.6.2
        $lang_string['homepage'] = "Homepage:"; //New in 0.4.6.2
        $lang_string['comment'] = "Comentário:"; //New in 0.4.6.2
        $lang_string['IPAddress'] = "Endereço IP:";  // New for 0.4.6.2
        $lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2
        $lang_string['wrote'] = "<i>%s, %s escreveu:</i><br />\n<br />\n%s"; // New for 0.4.6.2

        $lang_string['comment_capcha'] = "Anti-Spam: Digite <b>%s</b>"; // 0.4.2
        $lang_string['title'] = "Comentários";
        $lang_string['header'] = "Incluir Comentário";
        $lang_string['instructions'] = "Preencha o formulário abaixo para incluir seus próprios comentários.";
        $lang_string['comment_name'] = "Seu nome:";
        $lang_string['comment_email'] = "Email:";
        $lang_string['comment_url'] = "URL:";
        $lang_string['commentposted'] = "Novo comentário feito às: ";  // New for 0.4.6.2
        $lang_string['comment_remember'] = "Lembre-me:";
        $lang_string['comment_text'] = "Comentário:";
        $lang_string['post_btn'] = "&nbsp;Enviar&nbsp;";
        $lang_string['delete_btn'] = "excluir";
        $lang_string['ban_btn'] = "banir ip"; // New for 0.4.8
        $lang_string['expired_comment1'] = "Desculpe. Novos comentários não são permitidos depois de "; // New for 0.4.8
        $lang_string['expired_comment2'] = " dias."; // New for 0.4.8

        $lang_string['blacklisted'] = "Desculpe, seu endereço de IP foi banido. Comentários não permitidos."; // New for 0.4.8
        $lang_string['bannedword'] = "Seu comentário, url, nome oo email contém palavra(s) que foram banidas pelo administrador. Seu comentário NÃO foi enviado."; // New for 0.4.8
        $lang_string['nocomments'] = "Comentarios não estão disponíveis para este post."; // New for 0.4.9
        $lang_string['email_moderator'] = "Comentários são moderados neste blog. Este comentário precisa de aprovação para se tornar público."; // New for 0.5.0
        $lang_string['user_notice_mod'] = "Moderação está ativa para este blog. Seu comentário precisa ser aprovado pelo adminitrador antes de se tornar visível."; // new for 0.5.0

        $lang_string['return_to_comments'] = 'Voltar aos comentários';

        // Error Response
        $lang_string['error_add'] = "<h2>Ops!</h2>O comentário não foi salvo. Ocorreu um problema enquanto seu comentário era salvo.<br /><br />Resposta do Servidor:<br />";
        $lang_string['error_delete'] = "<h2>Ops!</h2>O comentário não foi excluído. Ocorreu um problema enquanto excluia seu comentário.<br /><br />Resposta do Servidor:<br />";
        $lang_string['error_ban'] = "<h2>Ops!</h2>IP não incluído na lista de IPs banidos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success_add'] = "<h2>Comentário Incluído!</h2>Seu comentário foi salvo com sucesso."; // New for 0.4.8.1
        $lang_string['success_delete'] = "<h2>Comentário Excluído!</h2>Seu comentário foi excluído."; // New for 0.4.8.1
        $lang_string['success_ban1'] = "<h2>IP Banido!";
        $lang_string['success_ban2'] = "</h2>Para remover esta restrição no futuro, use a opção Moderação no menu Preferências."; // New for 0.4.8.1
        $lang_string['form_error'] = "Favor preencher o campo Nome, Comentário e Anti-Spam.";
        $lang_string['error_noip'] = "Nenhum IP foi informado para a função Blacklist.";

        $lang_string[ 'error_comments_disabled' ] = '<h2>Erro!</h2>Opa! Comentários estão desabilitados para este blog. Você é um spambot?'; // New 0.5.0
        $lang_string[ 'error_no_match' ] = "<h2>Erro!</h2>Seu endereço IP não confere com o endereço IP capturado. Você é um spambot?"; // New 0.5.0
        $lang_string[ 'error_fields_missing' ] = '<h2>Erro!</h2>Estão faltando os seguintes campos: '; // New 0.5.0
        $lang_string[ 'error_spambot' ] = '<h2>Erro!</h2>Os dados de Capcha estão faltando. Você é um spambot?'; // New 0.5.0
        $lang_string[ 'error_capcha' ] = '<h2>Erro!</h2>Dados de capcha não conferem.'; // New 0.5.0
        $lang_string[ 'error_bad_data' ] = '<h2>Erro!</h2>Dados de envio inválidos. Você é um hacker?'; // New 0.5.0
        $lang_string[ 'error_entry_missing' ] = '<h2>Erro!</h2>Você está tentando comentar um post que não existe.'; // New 0.5.0
        $lang_string[ 'error_empty_text' ] = '<h2>Erro!</h2>Você não digitou nenhum comentário ou seu nome.'; // New 0.5.0
        break;

      case 'delete':
        $lang_string['title'] = "Excluir Post";
        $lang_string['instructions'] = "Este é o post que você quer excluir? Certifique-se de que você realmente quer fazer isso, essa ação não tem volta...";
        $lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>Não foi possível excluir o post.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Post Excluído!</h2>O post foi excluído."; // New for 0.4.8.1
        break;

      case 'delete_static':
        $lang_string['title'] = "Excluir Página Fixa";
        $lang_string['instructions'] = "Esta é a página fixa que você quer excluir? Certifique-se de que você realmente quer fazer isso, essa ação não tem volta...";
        $lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>Não foi possível excluir a página fixa.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Página Fixa Excluída!</h2>A página fixa foi excluída."; // New for 0.4.8.1
        break;

      case 'image_list':
        $lang_string['title'] = "Lista de Imagens";
        $lang_string['instructions'] = "Clique nos links abaixo para ver as imagens.<br /><br />Para inserir uma imagem no seu post:<br />1) Clique com o botão direito do mouse sobre um link e escolha 'Copiar Link' ou 'Copiar Atalho'.<br />2) Volte para a página de inclusão ou alteração de post.<br />3) Clique no botão 'img' e cole a URL dentro da janela.";
        break;

      case 'info':
        $lang_string['title'] = "Informações Meta-Data";
        $lang_string['instructions'] = "As informações abaixo são usadas para qualificar um conteúdo, o que ajuda as ferramentas de pesquisa a acharem e identificarem corretamente seu site. Essas informações também podem ser usadas em sistemas RSS.";
        $lang_string['info_keywords'] = "Palavras-chave: (Lista das palavras-chaves separadas por virgulas.)";
        $lang_string['info_description'] = "Descrição: (Um texto livre abstrato que descreve o seu site.)";
        $lang_string['info_copyright'] = "Direitos: (Direito-de-uso, ou o link para um documento contendo o mesmo.)";
        $lang_string['tracking_code'] = "Código de Tracking Externo: (Código HTML necessário na página principal (nas tags de cabeçalho por motivo de segurança) somente para os usuários que entram na página, ex: Google Analytics)";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>As informações não foram salvas. Ocorreu um problema enquanto seus dados eram salvos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Meta-Data salva!</h2>As informações foram salvas com sucesso."; // New for 0.4.8.1
        $lang_string['form_error'] = "Favor preencher os campo Título e Autor.";
        break;

      case 'index':
        // Index
        break;

      case 'static':
        // Index
        break;

      case 'rating':
        $lang_string['error'] = "<h2>Ops!</h2>As informações não foram salvas. Ocorreu um problema enquanto seus dados eram salvos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Voto Salvo!</h2>Sua avaliação foi salva com sucesso."; // New for 0.4.8.1
        break;

      case 'login':
        $lang_string['upgrade'] = "<h2>Atualização</h2>"; // New 0.3.8
        $lang_string['upgrade_count'] = "%n arquivos de comentários precisam de atualizados:"; // New 0.3.8
        $lang_string['upgrade_url'] = "Atualizar Comentários"; // New 0.3.8
        $lang_string['title'] = "Entrar";
        $lang_string['instructions'] = "Preencha o Nome de Usuário e a Senha abaixo";
        $lang_string['username'] = "Nome de Usuário:";
        $lang_string['password'] = "Senha";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Sucesso!</h2>Você está logado. Boa navegação!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Ops!</h2>Você não entrou. Verifique se você digitou o Nome de Usuário e Senha corretamente e tente novamente.<p />";
        $lang_string['inactive_account'] = "<h2>Ops!</h2>Você não entrou. Por algum motivo sua conta foi desabilitada pelo administrador.<p />";
        $lang_string['form_error'] = "Preencha os campos Nome de Usuário e Senha.";
        break;

      case 'logout':
        $lang_string['title'] = "Sair";
        $lang_string['error'] = "<h2>Até mais!</h2>Você não está logado. (Já não estava antes da mesma forma!)<p />";
        $lang_string['error_no_cookie'] = "<h2>Até mais!</h2>Você não está logado. (Nenhum cookie foi encontrado. Já não estava antes da mesma forma!)<p />"; // New 0.5.0
        $lang_string['success'] = "<h2>Até mais!</h2>Você saiu do blog.<p />(Redirecionando para o Início em 5 segundos.)<p />";
        break;

      case 'forms':
        $lang_string['title'] = "";
        $lang_string['instructions'] = "";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>As informações não foram salvas. Ocorreu um problema enquanto seus dados eram salvos your entry.<br /><br />Resposta do Servidor:<br />";
        break;

      case 'set_login':
        $lang_string['title'] = "Alterar Nome de Usuário &amp; Senha";
        $lang_string['instructions'] = "Use o formulário abaixo para alterar seu Nome de Usuário e/ou Senha. Digite o Nome de Usuário e Senha que você quer usar.";
        $lang_string['username'] = "Nome de Usuário:";
        $lang_string['password'] = "Senha:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Sucesso!</h2>Seu Nome de Usuário e/ou Senha estão ativos. Boa navegação!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Ops!</h2>As informações não foram salvas. Ocorreu um problema enquanto seus dados eram salvos your Username and/or Password.<br /><br />Resposta do Servidor:<br />";
        $lang_string['form_error'] = "Favor preencher os campos Nome de Usuário  e Senha.";
        $lang_string['explanation'] = "Em versões recentes, sua estrutura de senha foi alterada.  Não existe mais forma de atualizar senhas
          e/ou logins dentro do código do blog.  Para alterar sua senha, exclua o arquivo /config/password.php e certifique-se que os arquivos
          install*.php existem no seu servidor.  Uma vez feito isso, atualize esta página (ou saia).  Aparecerá para você o mesmo script
          que gera sua senha, da mesma forma que aconteceu quando o blog foi criado.";  // New for 0.4.6
        break;

      case 'install00':
        $lang_string['title'] = "Bem-vindo";
        $lang_string['instructions'] = "Obrigado por escolher o Simple PHP Blog!";
        $lang_string['blog_choose_language'] = "Escolha a lingua:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        break;

      case 'install01':
        $lang_string['title'] = "Bem-vindo";
        $lang_string['instructions'] = "
        Obrigado por escolher o Simple PHP Blog!<br /><br />Simple PHP Blog é um sistema de blog rápido e leve. Ele requer o PHP 4.1 ou posterior, e permissões de escrita no seu servidor. Todas as informações são salvas em arquivos simples, dessa forma, nenhum banco de dados se faz necessário.<br /><br />
        Para começar, o Simple PHP Blog precisa criar três pastas (<b>config</b>, <b>content</b>, e <b>images</b>) as quais guardarão suas informações. Depois disso, você criará sua senha e já poderá então usar o sistema.<br /><br />
        <b>Clique abaixo para iniciar a instalação:</b>";
        $lang_string['begin'] = "[ Iniciar Instalação ]";
        break;

      case 'install02':
        $lang_string['title'] = "Instalação";
        $lang_string['instructions'] = "Tentando criar as pastas <b>config</b>, <b>content</b>, e <b>images</b>:";
        $lang_string['folder_exists'] = "Ok! As pastas já existem. Nenhuma alteração foi feita...";
        $lang_string['folder_failed'] = "Ops! Não foi possível criar as pastas...";
        $lang_string['folder_success'] = "Sucesso! Pastas criadas...";
        // Help
        $lang_string['help'] = "
        <h2>Ops!</h2>
        Não foi possível criar uma ou mais pastas!<br /><br />Isto pode ter ocorrido pelos seguintes motivos:<br />
        <ol>
        <li><b>Permissões</b> não deixam tem o acesso de leitura e/ou gravação.</li>
        <li>Os <b>UID</b>'s (ID's dos usuários) de todos os arquivos e pastas não conferem.</li>
        </ol>
        Siga as instruções de reparo abaixo e clique em <b>Tentar Novamente</b>:<br />
        <ol>
        <li>Crie manualmente as segunties pastas: <b>config</b>, <b>content</b>, e <b>images</b>.</li>
        <li>Habilite as <b>Permissões de Escrita</b> nas pastas: No seu programa de FTP, Dono, Usuário, e Todos deve haver os acessos de <b>Leitura</b> e <b>Escrita</b>. <i>(Talvez você tenha que entrar em contato com seu provedor para alterar isso...)</i></li>
        <li>Certifique-se de que os UID's de todos seus arquivos e pastas são iguais. <i>(Talvez você tenha que entrar em contato com seu provedor para alterar isso...)</i></li>
        </ol>";
        $lang_string['try_again'] = "[ Tentar Novamente ]";
        // Success
        $lang_string['success'] = "<h2>Sucesso!</h2>Pastas criadas com sucesso!<p /><b>Clique abaixo para continuar:</b>";
        $lang_string['continue'] = "[ Continuar ]";
        break;

      case 'install03':
        $lang_string['supported'] = "<b>Seu web-server suporta os seguintes esquemas de encriptação:</b>";
        $lang_string['standard'] = "Encriptação DES Padrão: ";
        $lang_string['extended'] = "Encriptação DES Extendida: ";
        $lang_string['MD5'] = "Encriptação MD5: ";
        $lang_string['blowfish'] = "Encriptação Blowfish: ";
        $lang_string['enabled'] = "habilitado";
        $lang_string['disabled'] = "desabilitado";
        $lang_string['using_standard'] = "<b>Usando Encriptação DES Padrão...</b>";
        $lang_string['using_extended'] = "<b>Usando Encriptação DES Extendida...</b>";
        $lang_string['using_MD5'] = "<b style=\"color: green;\">Usando Encriptação MD5...</b>";
        $lang_string['using_blowfish'] = "<b style=\"color: green;\">Usando Encriptação Blowfish...</b>";
        $lang_string['using_unknown'] = "<b>Usando Encriptação Desconhecida...</b>";
        $lang_string['salt_length'] = " <i>(Tamanho do salto = %string)</i><br />";
        $lang_string['title'] = "Criar Nome de Usuário &amp; Senha";
        $lang_string['instructions'] = "Use o formulário abaixo para criar o Nome de Usuário e a Senha.";
        $lang_string['username'] = "Nome de Usuário:";
        $lang_string['password'] = "Senha:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Parabéns!</h2>VocÊ está logado. Clique abaixo para entrar na página de configuração, onde você dará um nome para o seu Blog. Boa Navegação!<p />";
        $lang_string['btn_setup'] = "[ Configurar ]";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Ops!</h2>As informações não foram salvas. Ocorreu um problema enquanto seus dados eram salvos your Username and/or Password.<br /><br />Resposta do Servidor:<br />";
        $lang_string['form_error'] = "Favor preencher os campos Nome de Usuário e Senha.";
        break;

      case 'install04':
        $lang_string['title'] = "Criar arquivo de senha";
        $lang_string['instructions'] = "Essa é a parte manual:<br />
        <ol>
        <li>Abra um editor de texto. <i>(Bloco de Notas, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
        <li>Cria um novo arquivo de texto.</li>
        <li>Copia e cole o código da caixa abaixo no seu arquivo.</li>
        <li>Salve seu arquivo com o nome de <b>password.php</b> <i>(Certifique-se de salvá-lo no modo <b>texto</b>.)</i></li>
        <li>Abra seu aplicativo FTP.</li>
        <li>Envie seu novo arquivo <b>password.php</b> na pasta <b>config</b> do seu web site.</li>
        <li>Exclua o arquivo <b>password.php</b> do seu disco rígido.</li>
        </ol>
        ";
        $lang_string['information'] = "<i>Nota: Se você precisar zerar seu usuário e senha (provavelmente por esquecê-los), exclua o arquivo <b>password.php</b> da pasta <b>config</b> no seu website. Na próxima vez que entrar no seu site, vocÊ será conduzido pelo processo de criação de senha novamente...</i>";
        $lang_string['code'] = "Código para o arquivo <b>password.php</b>:";
        $lang_string['continue'] = "[ Continuar ]";
        break;

      case 'install05':
      case 'install06':
        $lang_string['title'] = "Login";
        $lang_string['instructions'] = "Favor digitar seu Nome de Usuário e Senha abaixo";
        $lang_string['username'] = "Nome de usuário:";
        $lang_string['password'] = "Senha:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Parabéns!</h2>Você está logado.<p />
        Clique abaixo para visitar a página de <b>Configurações</b>, onde você poderá personalizar seu novo Blog.<p />
        <i>Nota: Agora que você completou o processo de instalação, é recomendável que você exclua os arquivos <b>installXX.php</b> do seu web site. (ex. install00.php até install06.php)</i><p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Ops!</h2>Você não está logado. Por favor, verifique se vocÊ digitou corretamente o Nome de Usuário e Senha e tente novamente.<p />";
        $lang_string['form_error'] = "Favor preencher os campos Nome de Usuário e Senha.";
        // Success
        $lang_string['btn_setup'] = "[ Configurações ]";
        $lang_string['btn_try_again'] = "[ Tentar novamente ]";
        break;

      case 'setup':
        $lang_string['title'] = "Preferencias";
        $lang_string['instructions'] = "Você pode mudar o nome do seu blog, e suas informações pessoais abaixo.";
        $lang_string['blog_title'] = "Nome do Blog:";
        $lang_string['blog_header'] = "URL da Imagem do Cabeçalho: images/blogheader.jpg (Deixe em branco para usar o padrão).";
        $lang_string['blog_author'] = "Autor:";
        $lang_string['blog_email'] = "Email: (Para mais de um email separe por vírgula - em branco desabilita a opção Contato)"; // Updated 0.4.7
        $lang_string['blog_avatar'] = "URL do Avatar: images/avatar.jpg (Deixe em branco para nenhum)."; // <-- New 0.4.7
        $lang_string['blog_footer'] = "Rodapé:";
        $lang_string['blog_choose_language'] = "Escolha uma lingua:";
        $lang_string['blog_enable_comments'] = "Habilitar Comentários";
        $lang_string['blog_comments_popup'] = "Abrir Comentários em Popup";
        $lang_string['blog_enable_start_category'] = "Usar categoria específica para a primeira página dos posts: "; // Now for 0.5.1
        $lang_string['blog_search_top'] = "Mostrar Pesquisa nos Posts (ao invés da barra lateral)"; // New for 0.5.0
        $lang_string['blog_enable_static_block'] = "Mostrar um bloco definido como o primeiro Post do Blog: "; // New for 0.5.0
        $lang_string['static_block_border'] = 'Mostrar bordas'; // New for 0.5.0
        $lang_string['static_block_noborder'] = 'Sem bordas'; // New for 0.5.0
        $lang_string['blog_enable_voting'] = "Permitir que os usuários avaliem os Posts";
        $lang_string['blog_enable_cache'] = "Habilitar Cache nos Posts (pode melhorar a velocidade em alguns servidores)"; // New for 0.4.6
        $lang_string['blog_enable_calendar'] = "Habilitar Calendário"; // New for 0.4.6
        $lang_string['blog_enable_archives'] = "Habilitar Bloqueador de Arquivos"; // New for 0.4.8
        $lang_string['blog_enable_counter'] = "Habilitar Contador na Barra Lateral"; // New for 0.4.8
        $lang_string['blog_counter_hours'] = "Número de horas de atraso antes das contagens iniciarem novamente (baseado em um ip específico):"; // New for 0.4.8
        $lang_string['blog_enable_login'] = "Habilitar o Link de Login (Favor adicionar \"login.php\" aos favoritos primeiro...)"; // New for 0.4.8
        $lang_string['blog_enable_title'] = "Habilitar o título em texto do cabeçalho (Remova caso o título já estaja escrito no gráfico do cabeçalho)"; // New for 0.4.6
        $lang_string['blog_enable_permalink'] = "Habilitar Permalink nos Posts"; // New for 0.4.6
        $lang_string['blog_enable_capcha'] = "Habilitar Anti-Spam"; // New for 0.4.8
        $lang_string['blog_footer_counter'] = "Habilitar Contador no Rodapé"; // New for 0.4.8
        $lang_string['blog_enable_capcha_image'] = "Imagens Anti-Spam (Somente bibliotecas GD) / Campo Texto Anti-Spam"; // New for 0.4.8
        $lang_string['blog_enable_stats'] = "Habilitar a Opção Estatísticas ao Menu"; // New for 0.4.7
        $lang_string['blog_enable_lastcomments'] = "Habilitar Listagem Dos Comentários Mais Recentes"; // New for 0.4.7
        $lang_string['blog_enable_lastentries'] = "Habilitar Listagem Dos Posts Mais Recentes"; // New for 0.4.7
        $lang_string['blog_email_notification'] = "Enviar notificação via email quando algum comentário for feito";
        $lang_string['blog_send_pings'] = "Enviar weblog &quot;pings&quot;";
        $lang_string['blog_ping_urls'] = "URL Completa (ex. http://rpc.weblogs.com/RPC2) do serviço a ser feito o &quot;ping&quot;.<br />(Você pode insrir mais de um endereço separados por virgulas.)";
        $lang_string['blog_trackback_about'] = "Trackback provêm um método de notificação entre blogs. Permita outro
          blog saber que você está mantendo um link deles enviando a eles um ping trackback. Veja quem mantém um link
          do seu blog recebendo pings trackback deles.<br />
           Ou você pode inserir as URIs para ping manualmente, ou tentar fazer isso automaticamente através do
           método de reconhecimento automático.";
        $lang_string['blog_trackback_enabled'] = "Habilitar trackbacks no meu blog";
        $lang_string['blog_trackback_auto_discovery'] = "Habilitar método de reconhecimento automático quando criar um Post contendo URLs";
        $lang_string['blog_max_entries'] = "Máximo de Posts a serem exibidos:";
        $lang_string['blog_comment_tags'] = "???Tags to Allow in Comments:";
        $lang_string['blog_gzip_about'] = "
          Desde o PHP 4.0.4, o PHP tem o recurso de ler e escrever arquivos compactados gzip (.gz),
          para economizar espaço em disco. Também possível compactar a saída de HTTP para os browsers
          que suportem compactação gzip, salvando então tráfego de banda.<br />
          <br />
          Suporte ao Zlib no PHP não é habilitado por padrão. Se as opções estiverem desabilitadas,
          então sua instalação de PHP não suporta extensão Zlib.";
        $lang_string['blog_enable_gzip_txt'] = "Habilitar Compactação GZIP Para os Arquivos de Base de Dados";
        $lang_string['blog_enable_gzip_output'] = "Habilitar Compactação GZIP para a Saída HTTP";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>As informações não foram salvas. Ocorreu um problema enquanto seus dados eram salvos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Preferencias Salvas!</h2>As Informações foram salvas com sucesso."; // New for 0.4.8.1
        $lang_string['form_error'] = "Favor preencher os Campos Título e Autor.";
        $lang_string['label_entry_order'] = "Ordem dos Posts:";
        $lang_string['select_new_to_old'] = "Listar os Mais Novos Antes";
        $lang_string['select_old_to_new'] = "Listar os Mais Antigos Antes";
        $lang_string['label_comment_order'] = "Ordem do Comentário:";
        $lang_string['cal_sunday'] = "Domingo";
        $lang_string['cal_monday'] = "Segunda-feira";
        $lang_string['label_calendar_start'] = "Dia de Início da Semana no Calendário";
        $lang_string['title_sidebar'] = "Barra Lateral"; // New in 0.4.7
        $lang_string['title_comments'] = "Comentários"; // New in 0.4.7
        $lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
        $lang_string['title_compression'] = "Compactação"; // New in 0.4.7
        $lang_string['title_entries'] = "Posts"; // New in 0.4.7
        $lang_string['title_general'] = "Geral"; // New in 0.4.7
        $lang_string['title_language'] = "Língua"; // New in 0.4.7
        $lang_string['blog_comment_days_expiry'] = "Comentários Permitidos por Quantos Dias? (0 para não expirar)"; // New in 0.4.8
        $lang_string['blog_comments_moderation'] = "Comentários nos Posts precisam ser aprovados por um usuário logado antes de se
          tornar público (sempre visível para um usuário logado)"; // New in 0.5.0
        $lang_string['comment_moderation'] = "Opções de Moderação"; // New in 0.5.0
        break;
      case 'comment_moderation':
        $lang_string['title'] = "Comentários não moderados";
        $lang_string['instructions'] = "Esta é uma lista de todos os comentários não disponíveis para usuários que não estão
          logados por não teram sido aprovados pelo moderados.";
        $lang_string['header'] = "Listagem de Moderação";
        $lang_string['enteredby'] = "Inserido Por: ";
        $lang_string['entrydate'] = "Data do Post: ";
        $lang_string['blogentrytitle'] = "Título do Post: ";
        $lang_string['enteredcontent'] = "Conteúdo: ";
        $lang_string['totalunmodded'] = " item(s) esperando por atuação do moderados.";
        $lang_string['mod_approve'] = "[ Aprovar ] ";
        $lang_string['mod_delete'] = "[ Excluir ]";
        break;
      case 'moderation':
        $lang_string['title'] = "Preferências de Moderação";
        $lang_string['instructions'] = "Você pode alterar as listas de auto-moderação aqui.";
        $lang_string['submit_btn'] = "&nbsp;Salvar Configurações de Moderação&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>As informações não foram salvas. Ocorreu um problema enquanto seus dados eram salvos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Preferencias Salvas!</h2>As informações foram salvas com sucesso."; // New for 0.4.8.1
        $lang_string['banned_address_list_title'] = "<h2>Endereços de IP Banidos</h2>";
        $lang_string['banned_address_list'] = "Abaixo segue a lista de endereços IPs que foram banidos de incluir comentários. Cada ip está em linhas separadas e precisam ser números (sem nomes DNS). Quando logado, IPs podem ser banidos diretamente na visualização dos comentários.";
        $lang_string['banned_word_list_title'] = "<h2>Plavras Banidas</h2>";
        $lang_string['banned_word_list'] = "Abaixo segue a lista de palavras que não são permitidas no texto ou na url. Cada palavra ou grupo de palavras deve estar em linhas separadas. ???The comments will attempt to match each line exactly in order to enact the ban.";
        break;
      case 'trackbacks':
        // Trackbacks
        $lang_string['title'] = "Trackbacks";
        $lang_string['header'] = "URL de Trackback para este post:";
        $lang_string['delete_btn'] = "excluir";
        // Error Response
        $lang_string['error_add'] = "Erro salvando os dados de trackback.";
        $lang_string['error_delete'] = "<h2>Ops!</h2>O trackback não foi excluído. Ocorreu um problema enquanto excluia o trackback.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success_delete'] = "<h2>Trackback Excluído!</h2>O link de trackback foi excluído."; // New for 0.4.8.1
        break;

      case 'options':
        $lang_string['title'] = "Opções";
        $lang_string['instructions'] = "Use o formulário abaixo para customizar a disposição de data e hora para os comentários do blog e dos posts. Você pode selecionar a opção de 12 ou 24 horas. Formato de data curta ou longa. E as áreas de <b>Pré-Visualização</b> são atualizadas automaticamente para mostrar para você como esta formatação ficará.";
        // Long Date
        $lang_string['ldate_title'] = "Formato de Data Longa:";
        $lang_string['weekday'] = "Dia da Semana";
        $lang_string['month'] = "Mês";
        $lang_string['day'] = "Dia";
        $lang_string['year'] = "Ano";
        $lang_string['none'] = "Nenhum";
        // Short Date
        $lang_string['sdate_title'] = "Formato de Data Curta:";
        $lang_string['s_month'] = "Mês";
        $lang_string['s_mon'] = "MMM";
        $lang_string['s_day'] = "Day";
        $lang_string['s_year'] = "Year";
        $lang_string['zero_day'] = "Começar dia com zero";
        $lang_string['show_century'] = "Ano com quatro dígitos";
        // Time
        $lang_string['time_title'] = "Formato de Hora:";
        $lang_string['12hour'] = "12-horas";
        $lang_string['24hour'] = "24-horas";
        $lang_string['before_noon'] = "Antes do meio-dia";
        $lang_string['after_noon'] = "Depois do meio-dia";
        // Date
        $lang_string['date_title'] = "Formato da Data:";
        $lang_string['long_date'] = "Data Longa";
        $lang_string['short_date'] = "Data Curta";
        $lang_string['time'] = "Hora";
        // Menu
        $lang_string['menu_title'] = "Formato da Data do Menu:";
        $lang_string['long_date'] = "Data Longa";
        $lang_string['short_date'] = "Data Curta";
        // Used in multiple places
        $lang_string['zero_day'] = "Começar dia com zero";
        $lang_string['zero_month'] = "Começar mês com zero";
        $lang_string['zero_hour'] = "Começar hora com zero";
        $lang_string['separator'] = "Separador:";
        $lang_string['preview'] = "Pré-visualização:";
        $lang_string['server_offset'] = "Diferença no Servidor:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>As informações não foram salvas. Ocorreu um problema enquanto seus dados eram salvos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Opções Salvas!</h2>As informações foram salvas com sucesso."; // New for 0.4.8.1
        break;

      case 'themes':
        $lang_string['title'] = "Temas";
        $lang_string['instructions'] = "Use a caixa de opções para selecionar um tema diferente.";
        // Themes
        $lang_string['choose_theme'] = "Temas:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>As informações não foram salvas. Ocorreu um problema enquanto seus dados eram salvos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Tema selecionado!</h2>As informações foram salvas com sucesso."; // New for 0.4.8.1
        break;

      case 'upload_img':
        $lang_string['title'] = "Carregar Imagem";
        $lang_string['instructions'] = "Clique no botão abaixo para selecionar um arquivo para carregar.";
        $lang_string['select_file'] = "Selecione o arquivo:";
        $lang_string['upload_btn'] = "Carregar";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>Não foi possível carregar a imagem. Mais informações:<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Imagem Carregada!</h2>A imagem foi salva com sucesso."; // New for 0.4.8.1
        break;

      case 'search':
        $lang_string['title'] = "Resultado(s) da pesquisa";
        $lang_string['instructions'] = "Resultador da pesquisa por <b>%string</b>:";
        $lang_string['not_found'] = "Nenhum resultado encontrado";
        break;

      case 'contact':
        $lang_string['contact_capcha'] = "Anti-Spam: Digite "; // 0.4.2
        $lang_string['title'] = "Contato";
        $lang_string['instructions'] = "Preencha o formulário:";
        $lang_string['form_error'] = "Favor preencher os campos Assunto e Comentário.";
        $lang_string['name'] = "Nome:";
        $lang_string['email'] = "Email:";
        $lang_string['subject'] = "Assunto:";
        $lang_string['comment'] = "Comentário:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        $lang_string['success'] = "<h2>Sucesso!</h2>Sua mensagem foi enviada corretamente.<p />";
        $lang_string['failure'] = "<h2>Erro!</h2>Sua mensagem não foi enviada. Provávelmente o Anti Spam não foi digitado corretamente.<p />";
        $lang_string['contactsent'] = "Contato enviado por: ";  // New for 0.4.6
        $lang_string['IPAddress'] = "Endereço IP:";  // New for 0.4.6
        $lang_string['useragent'] = "User Agent:";  // New for 0.4.6
        $lang_string['wrote'] = "<i>%s, %s escreveu:</i><br />\n<br />\n%s"; // New for 0.4.6.2
        break;

      case 'stats':
        $lang_string["title"] = "Estatísticas";
        $lang_string["general"] = "Gerais";
        $lang_string["entry_info"] = "<b>%s</b> posts usando <b>%s</b> palavras armazenados em <b>%s</b> bytes";
        $lang_string["comment_info"] = "<b>%s</b> comentários usando <b>%s</b> palavras armazenados em <b>%s</b> bytes";
        $lang_string["trackback_info"] = "<b>%s</b> trackbacks armazenados em <b>%s</b> bytes";
        $lang_string["static_info"] = "<b>%s</b> páginas fixas usando <b>%s</b> palavras armazenadas em <b>%s</b> bytes";
        $lang_string["most_viewed_entries"] = "10 posts mais visualizados";
        $lang_string["most_commented_entries"] = "10 posts mais comentados";
        $lang_string["most_trackbacked_entries"] = "10 posts com mais vinculos externos de trackbacks";
        $lang_string['vote_info'] = "<b>%s</b> votos armazenados em <b>%s</b> bytes"; // 0.4.1
        $lang_string["most_voted_entries"] = "10 posts mais votados"; // 0.4.1
        $lang_string["most_rated_entries"] = "10 posts mais avaliados"; // 0.4.1
        break;

      case 'errorpage-nocookies':  // New for 0.4.6
        $lang_string["title"] = 'Erro de HTTP 403.8 - Acesso Negado à Página/Função';
        $lang_string["errorline1"] = 'A página ou função que você está tentando processar requer o uso de cookies.';
        $lang_string["errorline2"] = 'Restaure a funcionalidade de cookies do seu browser ou software de proteção e repita o procedimento.';
        $lang_string["clientid"] = 'ID do Cliente: ';
        break;

      case 'errorpage':  // New for 0.4.6
        $lang_string["403.8"] = 'HTTP Error 403.8 - Acesso Negado à Página/Função';
        $lang_string["404"] = 'HTTP Error 404 - Page/Função Não Existe';
        $lang_string["error_404"] = 'A página ou função que você está chamando não existe.';
        $lang_string["error_javascript"] = 'A página ou função que você enviou requer javascript para funcionar corretamente.';
        $lang_string["error_emailnotsent"] = 'A mensagem que você tentou enviar falhou.';
        $lang_string["error_emailnotsentcapcha"] = 'A mensagem que você tentou enviar falhou porque os dados de anti-spam estão incorretos ou faltando.';
        $lang_string["clientid"] = 'ID do Cliente: ';
        break;

      case 'emoticons':  // New for 0.4.7
        $lang_string['title'] = "Gerenciar Emoticons";
        $lang_string['instructions'] = "
          Veja os emoticons que você quer usar. Escreva no campo as Tags que você
          quer que seja subtituído pela imagem. Multiplas tags podem ser usadas,
          somente separe-as por espaços.<br /><br />

          Por exemplo:<br />
          :) :-) :SMILE: :HAPPY:<br /><br />

          <i>(É altamente recomendado que você crie Tags maiores que 2 caracteres,
          ou então substituições inesperadas podem acontecer.)</i>";
        $lang_string["upload_instructions"] = 'Carregar novo emoticon:';
        $lang_string["upload_success"] = 'Sucesso! Imagem carregada com sucesso!';
        $lang_string["upload_error"] = 'Erro! Imagem não foi carregada.';
        $lang_string["upload_invalid"] = 'Erro! Arquivo de imagem inválido. A imagem precisa ser png, jpg, ou gif.';
        $lang_string["save_success"] = 'Preferências sobre Emoticons salvas com sucesso!';
        $lang_string["save_error"] = 'Erro! Preferência sobre Emoticons não foram salvas.';
        $lang_string["save_button"] = 'Salvar Emoticons';
        break;

      case 'archives': // New for 0.4.8
        $lang_string['title'] = "Arquivos";
        $lang_string['showall'] = "Mostrar Tudo";
        break;

      case 'manage_users':
        $lang_string['title'] = "Gerencias Usuários Alteráveis";
        $lang_string['instructions'] = "Incluir, Alterar, ou Excluir usuários que não são administradores mas tem permissão para criar posts e/ou moderar comentários.";
        $lang_string['fulladminerror'] = "Você precisa ser o administrador geral para fazer isso!";
        $lang_string['header_user'] = "Usuário: ";
        $lang_string['header_property'] = "Propriedade";
        $lang_string['header_value'] = "Valor";
        $lang_string['prop_username'] = "Usuário:";
        $lang_string['prop_fullname'] = "Nome Público:";
        $lang_string['prop_password'] = "Senha:";
        $lang_string['prop_email'] = "Email:";
        $lang_string['prop_avatar'] = "URL do Avatar:";
        $lang_string['prop_state'] = "Ativo?";
        $lang_string['prop_sec_Moderate'] = "Modera Comentários?";
        $lang_string['prop_sec_Delete'] = "Exclui Posts do Blog?";
        $lang_string['prop_sec_Edit'] = "Altera Qualquer Post?";
        $lang_string['btn_SaveChanges'] = "Salvar Mudanças";
        $lang_string['btn_CreateUser'] = "Criar Usuário";
        $lang_string['btn_Cancel'] = "Cancelar";  
        $lang_string['grid_header'] = "Lista de Usuários";
        $lang_string['grid_login'] = 'Login';
        $lang_string['grid_email'] = 'Email';
        $lang_string['grid_avatar'] = 'Avatar';
        $lang_string['grid_state'] = 'Ativo?';
        $lang_string['btn_modify'] = 'Alterar';
        $lang_string['btn_delete'] = 'Excluir';
        $lang_string['create_user'] = 'Criar Novo Usuário';
        break;

      default:
        break;
    }
  }
?>

 	  	 
