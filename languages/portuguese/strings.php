<?php
	// Portuguese Language File
	// (c) 2005 Alfredo Abambres, alfredo@segundocriativo.com
	// (c) 2004 Nuno Cardoso, nuno.cardoso@tugamail.com
	//
	// Simple PHP Version: 0.3.7
	// Language Version:   0.3.7.1
	

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: English
		$lang_string['language'] = 'Portuguese';
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO8859-1';
		$lang_string['php_charset'] = 'ISO8859-1';
		
		$lang_string['locale'] = 'pt_PT'; // <-- New 0.3.7
		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Ligações";
		$lang_string['menu_home'] = "Página Inicial";
		$lang_string['menu_contact'] = "Contacte-nos"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Estatísticas"; // <-- New 0.3.7r
		$lang_string['menu_archive'] = "Arquivos"; 
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Adicionar Notícias";
		$lang_string['menu_add_static'] = "Criar Página Estática";
		$lang_string['menu_upload'] = "Importar imagem";
		$lang_string['menu_setup'] = "Configuracão";
		$lang_string['menu_categories'] = "Categorias"; // 0.3.7q
		$lang_string['menu_info'] = "Informação"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Opções";
		$lang_string['menu_themes'] = "Temas";
		$lang_string['menu_colors'] = "Cores";
		$lang_string['menu_change_login'] = "Modificar utilizador/senha";
		$lang_string['menu_logout'] = "Sair";
		$lang_string['menu_login'] = "Entrar";
		$lang_string['menu_most_recent'] = "Comentários mais recentes";
		$lang_string['menu_most_recent_entries'] = "Entradas mais recentes";
		$lang_string['menu_most_recent_trackback'] = "Trackbacks mais recentes"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "Blocos";
		
		// Other
		$lang_string['home'] = "Página Principal";
		$lang_string['nav_next'] = 'Seguinte'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Anterior'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Procurar:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'OK'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Página gerada em %s segundos'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' );
		$lang_string['sb_default_title'] = 'Sem Título';
		$lang_string['sb_default_author'] = 'Sem Autor';
		$lang_string['sb_default_footer'] = 'Rodapé da Página';
		
		$lang_string['sb_edit'] = 'Editar';
		$lang_string['sb_delete'] = 'Apagar';
		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		
		$lang_string['sb_add_comment_btn'] = 'Adicionar comentário';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'Comentário';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'Comentários';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '( ';
		$lang_string['sb_view_counter_post'] = ' vista )';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '( ';
		$lang_string['sb_view_counter_plural_post'] = ' vistas )';
		
		$lang_string['sb_add_link_btn'] = '+ páginas';
		
		$lang_string['sb_rate_entry_btn'] = 'Clique para Avaliar a Entrada';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Título:";
				$lang_string['label_insert'] = "Extras (Negrito / Itálico / URL / Imagem):";
				$lang_string['btn_bold'] = " N ";
				$lang_string['btn_italic'] = " I ";
				$lang_string['btn_image'] = "IMG";
				$lang_string['btn_url'] = "URL";
				$lang_string['view_images'] = "Ver imagens importadas";
				$lang_string['label_entry'] = "Texto:";
				$lang_string['btn_preview'] = "&nbsp;Pré-visualizar&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Publicar&nbsp;";
				$lang_string['file_name'] = "Nome do Ficheiro Estático: (sem espaços ou extensões do ficheiro)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "Insira o texto";
				$lang_string['insert_image'] = "Insira a direcção URL para a imagem";
				$lang_string['insert_url1'] = "Insira o texto a ser mostrado com o link (opcional)";
				$lang_string['insert_url2'] = "Insira a direcção web completa para o link";
				$lang_string['insert_url3'] = "Abrir URL numa nova janela (Opcional):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Por favor complete o campo título e o campo texto.";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Opcional:';
				$lang_string['insert_image_width'] = 'Largura (Opcional):';
				$lang_string['insert_image_height'] = 'Altura (Opcional):';
				$lang_string['insert_image_popup'] = 'Ver Maximizado numa Janela "Pop-UP" quando clicar (Opcional):';
				$lang_string['insert_image_float'] = 'Flutuar no Écran (Opcional):';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Adicionar Notícia";
				$lang_string['instructions'] = "Para colocar uma notícia preencha os campos que se encontram abaixo, pode pré-visualizar a notícia antes de publicá-la.";
				$lang_string['title_ad'] = "Confirmar Trackback Pings"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "Estes são os URIs Auto-Identificados que está pronto para executar o comando 'ping'. Se não quiser fazer 'ping' de um determinado URI, remova-o da selecção. Clique no butão 'OK' para fazer 'ping' aos URIs seleccionados ou clique 'Cancelar'."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) para enviar (separados por aspas)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "Auto Identificação"; // <-- New 0.3.8
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Pré-visualizar / Editar entrada";
				$lang_string['instructions_preview'] = "É assim como se vê a sua notícia.";
				$lang_string['title_update'] = "Actualizar notícia";
				$lang_string['instructions_update'] = "Pode alterar a sua notícia utilizando o formulário que se encontra debaixo.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Notícia não gravada.<br /><br />Diga isso ao Servidor:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Adicionar Página Estática";
				$lang_string['instructions'] = "Preencha o formulário debaixo para criar uma Página Estática. Ao contrário de uma entrada Blog normal, Entradas Estáticas aparecem como links no menu da direita. São para páginas que quer sempre disponíveis como por exemplo: Sobre Mim, Contacte-nos, Serviços, etc. Clique em 'Prévisualizar' para ver como a entrada ficou, ou clique em 'Adicionar' para gravar a entrada.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Pré-visualizare / Editar Página Estática";
				$lang_string['instructions_preview'] = "Aqui está como a sua Página Estática aparece. Se está a usar texto com estilo ou a incluir imagens, lembre-se de 'fechar' todas as 'tags'.";
				$lang_string['title_update'] = "Actualizar Página Estática";
				$lang_string['instructions_update'] = "Você pode mudar a sua entrada usando o formulário debaixo. Clique 'Pré-visualizar' ou 'Adicionar' quando acabar.";
				$lang_string['form_error'] = "Por favor preencha os campos: Assunto, Entrada e Nome do Ficheiro.";	
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Entrada não guardada. Encontrei um problema quando guardava a sua entrada.<br /><br />O Servidor reportou:<br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Adicionar / Gerir Ligações";
				$lang_string['instructions'] = "Adicionar Blocos Personalizados";
				$lang_string['up'] = "para cima";
				$lang_string['down'] = "para baixo";
				$lang_string['edit'] = "editar";
				$lang_string['delete'] = "apagar";
				$lang_string['block_name'] = "Nome do Bloco:";
				$lang_string['block_content'] = "Conteúdo do Bloco:";
				$lang_string['instructions_edit'] = "Está a editar o Bloco:";
				$lang_string['instructions_modify'] = "Clique em baixo para modificar o Bloco:";
				$lang_string['submit_btn_edit'] = "Editar o Bloco";
				$lang_string['submit_btn_add'] = "Adicionar um Bloco";
				$lang_string['form_error'] = "Por favor preencha o campo: Nome.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Páginas Estáticas:";
				// Add / Manage Links
				$lang_string['title'] = "Adicionar / Gerir Ligações";
				$lang_string['instructions'] = "Gere ligações para outros sítios web. Pressione os botões Cima e Baixo para mudar a ordem das ligações.";
				$lang_string['up'] = "Cima";
				$lang_string['down'] = "Baixo";
				$lang_string['edit'] = "Editar";
				$lang_string['delete'] = "Apagar";
				$lang_string['link_name'] = "Nome da ligação:";
				$lang_string['link_url'] = "Direcção web:";
				$lang_string['instructions_edit'] = "Está a editar uma ligação:";
				$lang_string['instructions_modify'] = "Clique em baixo para modificar a Ligação:";
				$lang_string['submit_btn_edit'] = "Editar ligação";
				$lang_string['submit_btn_add'] = "Gerir ligação";
				$lang_string['form_error'] = "Por favor complete os campos nome e URL.";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "Adicionar / Gerir Categorias";
				$lang_string['instructions'] = "Utilize o Formulário em baixo para adicionar e editar as categorias. Cada item da categoria deverá ter este formato 'nome da categoria (número de identificação)'. Utilize os espaçamentos para criar hierarquias.<br /><br /><b>Exemplo:</b><br />Geral (1)<br />Notícias (3)<br />&nbsp;&nbsp;Novidades (6)<br />&nbsp;&nbsp;Eventos (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Outros (7)<br />Tecnologia (2)<br />";
				$lang_string['error'] = "Erro";
				$lang_string['current_categories'] = "Categorias Actuais";
				$lang_string['no_categories_found'] = "Não encontramos Categorias";
				$lang_string['category_list'] = "Lista de Categorias:";
				$lang_string['validate'] = "Validar";
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Mudar cores";
				$lang_string['instructions'] = "Pode mudar as cores do texto e do fundo da notícia.";
				$lang_string['bg_color'] = "Fundo da página";
				$lang_string['main_bg_color'] = "Fundo da página principal";
				$lang_string['border_color'] = "Borda da página";
				$lang_string['inner_border_color'] = "Borda Interna";
				$lang_string['header_bg_color'] = "Fundo do cabeçalho";
				$lang_string['header_txt_color'] = "Texto do cabeçalho";
				$lang_string['menu_bg_color'] = "Fundo da área do menu";
				$lang_string['footer_bg_color'] = "Fundo do rodapé da página";
				$lang_string['txt_color'] = "Texto principal";
				$lang_string['headline_txt_color'] = "Texto do cabeçalho";
				$lang_string['date_txt_color'] = "Texto da data";
				$lang_string['footer_txt_color'] = "Texto do rodapé";
				$lang_string['link_reg_color'] = "Ligação normal";
				$lang_string['link_hi_color'] = "Ligação activa";
				$lang_string['link_down_color'] = "Ligação visitada";
				// More Colors
				$lang_string['entry_bg'] = "Fundo da Entrada";
				$lang_string['entry_title_bg'] = "Fundo do Título da Entrada";
				$lang_string['entry_border'] = "Borda da Entrada";
				$lang_string['entry_title_text'] = "Texto do título da Entrada";
				$lang_string['entry_text'] = "Texto da Entrada";
				$lang_string['menu_bg'] = "Fundo do Menu";
				$lang_string['menu_title_bg'] = "Fundo do Titulo do Menu";
				$lang_string['menu_border'] = "Borda do Menu";
				$lang_string['menu_title_text'] = "Texto do Titulo do Menu";
				$lang_string['menu_text'] = "Texto do Menu";
				$lang_string['menu_link_reg_color'] = "Menu Ligação Normal";
				$lang_string['menu_link_hi_color'] = "Menu Ligação Por Cima";
				$lang_string['menu_link_down_color'] = "Menu Ligação Activo";
				// Submit
				$lang_string['color_preset'] = "Esquemas de Cor:"; // 0.3.7q
				$lang_string['scheme_name'] = "Insira um nome para o Esquema de Cor personalizado:"; // 0.3.7q
				$lang_string['scheme_file'] = "Insira o nome do ficheiro do Esquema: (sem espaços e sem extensões)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Gravar&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Por favor, insira um nome para o Esquema de Cor personalizado."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informação não guardada. Encontrei um problema enquando guardava a sua entrada.<br /><br />O Servidor reportou:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['title'] = "Comentários";
				$lang_string['header'] = "Gerir comentário";
				$lang_string['instructions'] = "Preencha os campos abaixo para deixar o seu comentário.";
				$lang_string['comment_name'] = "O seu nome:";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "Endereço da Internet:"; // 0.3.8
				$lang_string['comment_remember'] = "Lembrar-se de mim:"; // 0.3.8
				$lang_string['comment_text'] = "Comentário:";
				$lang_string['post_btn'] = "&nbsp;Publicar comentário&nbsp;";
				$lang_string['delete_btn'] = "Apagar";
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Comentário não guardado. Encontrei um problema enquanto gravava o comentário.<br /><br />O Servidor reportou:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Comentário não apagado. Encontrei um problema enquanto apagava o teu comentário.<br /><br />O Servidor Reportou:<br />";
				$lang_string['form_error'] = "Por favor complete os campos Nome e Comentário."; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "Apagar entrada";
				$lang_string['instructions'] = "Está prestes a apagar uma notícia, assegure-se de que quer mesmo apagá-la porque não há forma de desfazer a acção";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Impossível apagar a entrada.<br /><br />O Servidor Reportou:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Apagando Página Estática";
				$lang_string['instructions'] = "Isto é a página estática que está prestes a apagar. Por favor assegure-se de que é isto mesmo que quer, pois não há maneira de desfazer...";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Não consegui apagar a entrada.<br /><br />O Servidor Reportou:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Lista de imagens";
				$lang_string['instructions'] = "Clique debaixo para ver a imagem.<br><br>Para associar uma imagem à sua notícia:<br>1) Faça control + clique num link e seleccione 'Copiar para a Área de Transferência'.<br>2) Regresse ao editor da entrada.<br>3) Faça clique no botão Imagem e cole a ligação na janela.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Informação Meta-Data";
				$lang_string['instructions'] = "A Informação abaixo descrita é utilizada para &quot;meta-data&quot;, que ajuda os Motores de Busca a encontrar e identificar o seu sítio na Internet. A Informação poderá também ser utilizada nos 'RSS Feeds'.";
				$lang_string['info_keywords'] = "Keywords: (Listas de palavras chaves separadas por vírgulas.)";
				$lang_string['info_description'] = "Description: (Uma breve descrição / apresentação do seu Sítio na Internet.)";
				$lang_string['info_copyright'] = "Rights: (Declaração de Direitos de Autor ou Propriedade, ou Ligação para documento contendo a respectiva informação.)";
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informação não gravada. Encontrei um problema enquanto gravava a informação.<br /><br />O servidor reportou:<br />";
				$lang_string['form_error'] = "Por favor, complete os campos: Título e Autor.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>Whoops!</h2>Informação não guardada. Encontrei um problema enquanto gravava a informação.<br /><br />O servidor reportou:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Actualizar</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n ficheiros de comentário precisam de ser actualizados:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Comentários de Actualização"; // New 0.3.8
				$lang_string['title'] = "Inserir";
				$lang_string['instructions'] = "Insira o seu nome de utilizador e senha";
				$lang_string['username'] = "Utilizador:";
				$lang_string['password'] = "Senha";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Bem vindo!</h2>Entrou com sucesso!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Erro na autenticação. Verifique o seu nome de utilizador e senha e tente de novo.<p />";
				$lang_string['form_error'] = "Por favor complete os campos Utilizador e Senha."; // <-- Need Translation
				break;
			case 'logout':
				$lang_string['title'] = "Sair";
				$lang_string['instructions'] = "<h2>Whoops!</h2>Erro ao tentar sair. Impossível apagar a 'cookie'. Por que continua conectado?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informação não gravada.<br /><br />O Relatório do servidor:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Mudar Utilizador &amp; Senha";
				$lang_string['instructions'] = "Use o formulário abaixo para mudar o seu nome de utilizador e/ou senha. Insira o Utilizador e a Senha que pretende utilizar.";
				$lang_string['username'] = "Utilizador:";
				$lang_string['password'] = "Senha:";
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Sucesso!</h2>O seu Utilizador e/ou Senha estão activos. Boa navegação!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Informação não gravada. Encontrei um problema enquanto gravava o Utilizador e a Senha.<br /><br />Relatório do Servidor:<br />";
				$lang_string['form_error'] = "Por favor complete os campos Utilizador e Senha.";
				break;
			case 'install00':
				$lang_string['title'] = "Bem vindo";
				$lang_string['instructions'] = "
				Obrigado por escolher Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Escolha a Linguagem:";
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Bem vindo";
				$lang_string['instructions'] = "
				Obrigado por escolher Simple PHP Blog!<br /><br />Simple PHP Blog é um sistema de blogs simples. Requer PHP 4.1 ou maior, e permissões de escrita no servidor. Toda a informação é guardada em ficheiros-corridos, portanto não é necessário base de dados.<br /><br />				Para começar, Simple PHP Blog precisa de criar três pastas ('config', 'content', e 'images') onde guardará toda a sua informação.<br /><br />				<b>Clique em baixo para começar a configuração:</b>";
				
				
				$lang_string['begin'] = "[ Começar configuração ]";
				break;
			case 'install02':
				$lang_string['title'] = "Configuração";
				$lang_string['instructions'] = "Tentando criar as pastas 'config', 'content', e 'images':";
				$lang_string['folder_exists'] = "Ok! Pasta já existe. Nenhuma alteração efectuada...";
				$lang_string['folder_failed'] = "Whoops! Não consegui criar as pastas...";
				$lang_string['folder_success'] = "Sucesso! Pastas criadas...";
				// Help
				$lang_string['help'] = "
				<h2>Whoops!</h2>
				Não consegui criar uma ou mais pastas! Isto deve-se provavelmente a:<br>
				<i>1) <b>Permissões de escrita</b> não estão definidas para permitir acesso <b>Read (Leitura) / Write (Escrita)</b>.<br>
				<i>2) O <b>UID</b> (user ID's) de todos os ficheiros e pastas têm de ser o mesmo.</i><p />
				
				Siga as instruções de resolução de problemas e por favor tente novamente:<p />
				1) Crie manualmente as seguintes pastas: <b>config</b>, <b>content</b>, e <b>images</b>.<p />
				2) Atribua <b>Permissões de escrita</b> às Pastas. No seu programa FTP, Owner, User, e World devem ter acesso <b>Read</b> e <b>Write</b>. <i>(Você pode ter de contactar o seu ISP para mudar isso...)</i><p />				3) Certifique-se que o UID de todos os ficheiros e pastas são os mesmos. <i>(Você pode ter de contactar o seu ISP para mudar isso...)</i>";
				
				$lang_string['try_again'] = "[ Tente novamente ]";
				// Success
				$lang_string['success'] = "<h2>Sucesso!</h2>Pastas criadas com sucesso!<p /><b>Clique em baixo para continuar:</b>";
				$lang_string['continue'] = "[ Continuar ]";
				break;
			case 'install03':
				$lang_string['title'] = "Criar Utilizador e Senha";
				$lang_string['instructions'] = "Use o formulário em baixo para criar um Utilizador e uma Senha.";
				$lang_string['username'] = "Utilizador:";
				$lang_string['password'] = "Senha:";
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Parabéns!</h2>Você está ligado. Clique em baixo para visitar a página de Configuração, onde pode dar o nome ao seu Sítio na Internet. Boa Navegação!<p />";
				$lang_string['btn_setup'] = "[ Configuração ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Informação não guardada. Encontrei um problema enquanto gravava o Utilizador e a Senha.<br /><br />Relatório do Servidor:<br />";
				$lang_string['form_error'] = "Por favor complete os campos Utilizador e Senha.";
				break;
			case 'setup':
				$lang_string['title'] = "Configuração";
				$lang_string['instructions'] = "Pode mudar o nome do seu Site e a sua informação pessoal.";
				$lang_string['blog_title'] = "Nome do Site:";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "Correio Electrónico (Email):"; // <-- New 0.3.7
				$lang_string['blog_footer'] = "Rodapé de página:";
				$lang_string['blog_choose_language'] = "Escolha a linguagem:";
				$lang_string['blog_enable_comments'] = "Possibilitar Comentários dos Utilizadores"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Abrir os comentários numa Janela POP-UP"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "Possibilitar a Avaliação das Entradas por parte dos Utilizadores"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Enviar aviso por Correio Electrónico quando forem submetidos comentários"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Enviar weblog &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "Insira o Endereço completo do Site (URL) (i.e. http://rpc.weblogs.com/RPC2) para efectuar o serviço de &quot;ping&quot;.<br />(Pode inserir mais do que um endereço, separados por vírgulas.)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback possibilita a troca de avisos/notificações entre blogs/sites. Deixe que outro
					blog/site saiba que está a tentar ligar, enviando-o um 'trackback ping'. Veja também quem está a tentar ligar 
					ao seu blog/site através da recepção de 'trackback pings'.<br />
				   Pode tentar inserir URIs manualmente para efectuar 'ping', or tentar fazê-lo automanticamente com o
				   Auto-Discovery."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Possibilitar trackback"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Possibilitar Auto-Discovery (auto identificação) quando enviando comentários contendo URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "N.º máximo de Entradas a mostrar:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Tags (etiquetas) permitidos nos Comentários:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					Desde a versão PHP 4.0.4, que a linguagem de programação PHP tem a possibilidade de ler e escrever no formato de ficheiros de compressão gzip (.gz), 
					logo poupando espaço. Também é possível comprimir de forma silenciosa ficheiros enviados para browsers 
					que suportem a compressão gzip, logo poupando largura de banda.<br />
					<br />
					O suporte PHP para Zlib não está activada por defeito. Se as caixas de verificação estiverem desactivadas, então a sua 
					instalação PHP não suporta a extensão Zlib."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Possibilitar compressão GZIP para ficheiros de Base de Dados"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Possibilitar compressão GZIP para resultados HTTP"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informação não guardada.<br /><br />Relatório do servidor:<br />";
				$lang_string['form_error'] = "Por favor complete os campos Título e Autor.";
				$lang_string['label_entry_order'] = "Ordem de Entrada:";
				$lang_string['select_new_to_old'] = "Listar Novas Primeiro";
				$lang_string['select_old_to_new'] = "Listar Velhas Primeiro";
				$lang_string['label_comment_order'] = "Ordem de Comentários:";
				break;
			case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "Trackback URL para esta entrada:";
				$lang_string['delete_btn'] = "apagar";
				// Error Response
				$lang_string['error_add'] = "Arquivar erros de trackback.";
				break;
			case 'options':
				$lang_string['title'] = "Opções";
				$lang_string['instructions'] = "Use o formulário em baixo para personalizar a data e tempo para entradas de blog/site e comentários. Você pode seleccionar 12 ou 24 horas de relógio. Formato de data longo ou pequeno. E as áreas de <b>Pré-visualização</b> actualizam automaticamente para mostrar-lhe como o seu formato irá aparecer.";
				// Long Date
				$lang_string['ldate_title'] = "Formato de data longo:";
				$lang_string['weekday'] = "Dia da Semana";
				$lang_string['month'] = "Mês";
				$lang_string['day'] = "Dia";
				$lang_string['year'] = "Ano";
				$lang_string['none'] = "Nada";
				// Short Date
				$lang_string['sdate_title'] = "Formato de data pequeno:";
				$lang_string['s_month'] = "Mês";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Dia";
				$lang_string['s_year'] = "Ano";
				$lang_string['zero_day'] = "Zero à esquerda para dia";
				$lang_string['show_century'] = "Mostrar século";
				// Time
				$lang_string['time_title'] = "Formato de tempo:";
				$lang_string['12hour'] = "12-horas";
				$lang_string['24hour'] = "24-horas";
				$lang_string['before_noon'] = "Antes do Meio-Dia";
				$lang_string['after_noon'] = "Depois do Meio-Dia";
				// Date
				$lang_string['date_title'] = "Formato de Exibição de Data:";
				$lang_string['long_date'] = "Data Longa";
				$lang_string['short_date'] = "Data Pequena";
				$lang_string['time'] = "Tempo";
				// Menu
				$lang_string['menu_title'] = "Formato de Exibição de Menu de Data:";
				$lang_string['long_date'] = "Data Longa";
				$lang_string['short_date'] = "Data Pequena";
				// Used in multiple places
				$lang_string['zero_day'] = "Zero à esquerda para dia";
				$lang_string['zero_month'] = "Zero à esquerda para mês";
				$lang_string['zero_hour'] = "Zero à esquerda para hora";
				$lang_string['separator'] = "Separador:";
				$lang_string['preview'] = "Pré-visualizar:";
				$lang_string['server_offset'] = "Desvio do Servidor:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informação não guardada. Encontrei um problema enquanto gravava a informação. <br /><br />Relatório do Servidor:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Temas";
				$lang_string['instructions'] = "Use o menu para seleccionar um tema diferente.";
				// Themes
				$lang_string['choose_theme'] = "Temas:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informação não gravada. Encontrei um problema enquanto gravava a tua informação.<br /><br />Relatório do Servidor:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Carregar imagem";
				$lang_string['instructions'] = "faça clique em baixo para importar uma imagem.";
				$lang_string['select_file'] = "Seleccionar arquivo:";
				$lang_string['upload_btn'] = "Importar";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Impossível carregar a imagem. <br /><br />Relatório do servidor:<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "Resultados da Pesquisa";
				$lang_string['instructions'] = "Procurar resultados para <b>%string</b>:";
				$lang_string['not_found'] = "Nenhum resultado encontrado";
				break;
			case 'contact': // <-- New 0.3.8
				$lang_string['title'] = "Contacte-nos";
				$lang_string['instructions'] = "Preencha o Formulário:";
				$lang_string['form_error'] = "Por favor complete os campos Assuntos e Comentários.";
				$lang_string['name'] = "Nome:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Assunto:";
				$lang_string['comment'] = "Comentário:";
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				$lang_string['success'] = "<h2>Sucesso!</h2>A sua mensagem foi enviada.<p />";
				break;
			case 'stats':
				$lang_string['title'] = "<h2>Estatísticas</h2>";
				$lang_string['general'] = "<h3>Geral</h3>";
				$lang_string['entry_info'] = "<b>%s</b> entradas usando <b>%s</b> palavras armazenadas em <b>%s</b> bytes";
				$lang_string['comment_info'] = "<b>%s</b> comentários usando <b>%s</b> palavras armazenadas em <b>%s</b> bytes";
				$lang_string['trackback_info'] = "<b>%s</b> trackbacks armazenados em <b>%s</b> bytes";
				$lang_string['static_info'] = "<b>%s</b> páginas estáticas usando <b>%s</b> palavras armazenadas em <b>%s</b> bytes";
				$lang_string['most_viewed_entries'] = "<h3>10 Entradas mais vistas</h3>";
				$lang_string['most_commented_entries'] = "<h3>10 Entradas mais comentadas</h3>";
				$lang_string['most_trackbacked_entries'] = "<h3>10 Entradas mais trashbacks</h3>";
				break;
			default:
				break;
		}

	}
		
?>
