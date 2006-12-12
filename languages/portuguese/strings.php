<?php

	// Portuguese Language Translation(s)

	// (c) 2004 Nuno Cardoso, nuno.cardoso@tugamail.com (0.3.7)
	// (c) 2006 Artur Correia, ac@paradigma.pt (0.4.8.1)

	function sb_language( $page ) {

		global $language, $html_charset, $php_charset, $lang_string;

			

		// Language: English

		$lang_string['language'] = 'Portuguese';

		

		$lang_string[ 'locale' ] = array('pt_PT');

		$lang_string['rss_locale'] = 'pt-PT'; // New 0.4.8

		

		// ISO Charset: ISO-8859-1

		$lang_string['html_charset'] = 'ISO8859-1';

		$lang_string['php_charset'] = 'ISO8859-1';

		

		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7

		

		// Some Global Strings

		

		// Menu

		$lang_string['menu_links'] = "Links";

		$lang_string['menu_home'] = "Página Inicial";

		$lang_string['menu_contact'] = "Contacte-nos"; // <-- New 0.3.8

		$lang_string['menu_stats'] = "Stats"; // <-- New 0.3.7r

		$lang_string['menu_calendar'] = "Calendário"; // New for 0.4.8

		$lang_string['menu_archive'] = "Arquivo"; 

		$lang_string['menu_viewarchives'] = "Ver Arquivos"; // New in 0.4.7

		$lang_string['menu_menu'] = "Menu";

		$lang_string['menu_add'] = "Adicionar Notícias";

		$lang_string['menu_add_static'] = "Criar página estática";

		$lang_string['menu_upload'] = "Importar imagem";

		$lang_string['menu_setup'] = "Configuracão";

		$lang_string['menu_categories'] = "Secções"; // 0.3.7q

		$lang_string['menu_info'] = "Informação"; // <-- New 0.3.7

		$lang_string['menu_options'] = "Opções";

		$lang_string['menu_themes'] = "Temas";

		$lang_string['menu_colors'] = "Cores";

		$lang_string['menu_change_login'] = "Adicionar utilizador/senha";

		$lang_string['menu_logout'] = "Sair";

		$lang_string['menu_login'] = "Entrar";

		$lang_string['menu_most_recent'] = "Comentários mais recentes";

		$lang_string['menu_most_recent_entries'] = "Artigos Mais Recentes";

		$lang_string['menu_most_recent_trackback'] = "Trackbacks Mais Recentes"; // <-- New 0.3.8

		$lang_string['menu_add_block'] = "Blocos";

		$lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7

		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7

		

		// Counter

		$lang_string['counter_today'] = "Hoje:"; // New for 0.4.8

		$lang_string['counter_yesterday'] = "Ontem:"; // New for 0.4.8

		$lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8

		$lang_string['counter_title'] = "Totais Gerais"; // New for 0.4.8

		

		// Other

		$lang_string['home'] = "Página Principal";

		$lang_string['nav_next'] = 'Seguinte'; // <-- New 0.3.7

		$lang_string['nav_back'] = 'Anterior'; // <-- New 0.3.7

		$lang_string['search_title'] = 'Procurar:'; // <-- New 0.3.7

		$lang_string['search_go'] = 'OK'; // <-- New 0.3.7

		$lang_string['page_generated_in'] = 'Página gerada em %s segundos'; // <-- New 0.3.7

		$lang_string['counter_total'] = 'Número de Visitas: '; // New in 0.4.8

		$lang_string['read_more'] = 'Leia Mais ...'; // New in 0.4.8

		

		// SB Functions

		$lang_string['sb_months'] = array( 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' );

		$lang_string['sb_default_title'] = 'Sem Título';

		$lang_string['sb_default_author'] = 'Sem Autor';

		$lang_string['sb_default_footer'] = 'Rodapé da Página';

		

		$lang_string['sb_edit'] = 'Editar';

		$lang_string['sb_delete'] = 'Apagar';

		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8

		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8

		$lang_string['sb_relatedlink'] = 'link relacionado'; // <-- New in 0.4.6

		

		$lang_string['sb_add_comment_btn'] = 'Adicionar comentário';

		$lang_string['sb_comment_btn_number_first'] = true;

		$lang_string['sb_comment_btn'] = 'comentário';

		$lang_string['sb_comments_plural_btn_number_first'] = true;

		$lang_string['sb_comments_plural_btn'] = 'comentários';

		

		// ( 1 view )

		$lang_string['sb_view_counter_pre'] = '( ';

		$lang_string['sb_view_counter_post'] = ' vista )';

		// ( 2 views )

		$lang_string['sb_view_counter_plural_pre'] = '( ';

		$lang_string['sb_view_counter_plural_post'] = ' vistas )';

		

		$lang_string['sb_add_link_btn'] = '+ link';

		

		$lang_string['sb_rate_entry_btn'] = 'Prima para Classificar o Artigo';

		

		// Entry Text Editor

		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {

				$lang_string['label_subject'] = "Título:";

				$lang_string['label_insert'] = "Extras (Negrito / Itálico / URL / Imagem):";

				$lang_string['btn_bold'] = " N ";

				$lang_string['btn_italic'] = " I ";

				$lang_string['btn_image'] = "IMG";

				$lang_string['btn_url'] = "URL";

			$lang_string['btn_readmore'] = "leia mais"; // 0.4.8

				$lang_string['view_images'] = "Ver imagens importadas";

				$lang_string['label_entry'] = "Texto:";

				$lang_string['btn_preview'] = "&nbsp;Pré-visualizar&nbsp;";

				$lang_string['btn_post'] = "&nbsp;Publicar&nbsp;";

				$lang_string['file_name'] = "Nome de Ficheiro Estático: (sem espaços ou extensões)"; // <-- New 0.3.8

				// Javascript Strings

				$lang_string['insert_styles'] = "Insira o texto";

				$lang_string['insert_image'] = "Insira o URL da imagem";

				$lang_string['insert_url1'] = "Insira o texto a ser mostrado com o link (opcional)";

				$lang_string['insert_url2'] = "Insira o URL completo do link";

				$lang_string['insert_url3'] = "Abrir o URL numa nova janela (Opcional):"; // <-- New 0.3.6

				$lang_string['form_error'] = "Por favor preencha os campos Título e Texto.";

				// More Javascript Strings <-- New 0.3.6

				$lang_string['insert_image_optional'] = 'Opcional:';

				$lang_string['insert_image_width'] = 'Largura (Opcional):';

				$lang_string['insert_image_height'] = 'Altura (Opcional):';

				$lang_string['insert_image_popup'] = 'Ver em tamanho real numa janela pop-up quando premido (Opcional):';

				$lang_string['insert_image_float'] = 'Flutuante (Opcional):';

		

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

				$lang_string['title'] = "Adicionar Artigo";

				$lang_string['instructions'] = "Para publicar um artigo preencha os campos seguintes. Pode pré-visualizar o artigo de publicá-lo.";

				$lang_string['title_ad'] = "Confirmar Trackback Pings"; // <-- New 0.3.8

				$lang_string['instructions_ad'] = "Os URIs que vai pingar foram encontrados automaticamente. Se não pretende pingar um determinado URI não seleccione a caixa seguinte. Prima 'OK' para pingar os URIs seleccionados ou prima 'Cancel' para não pingar nada."; // <-- New 0.3.8

				$lang_string['label_tb_ping'] = "Trackback ping(s) a enviar (separados por vírgulas)"; // <-- New 0.3.8

				$lang_string['label_tb_autodiscovery'] = "autobusca"; // <-- New 0.3.8

				$lang_string['label_relatedlink'] = "Link Relacionado"; // New for 0.4.6

				$lang_string['label_categories'] = "Lista de Categorias";

				// Preview / Edit Entry

				$lang_string['title_preview'] = "Pré-visualizar / Editar artigo";

				$lang_string['instructions_preview'] = "É assim que verá o seu artigo.";

				$lang_string['title_update'] = "Actualizar artigo";

				$lang_string['instructions_update'] = "Pode modificar o seu artigo utilizando o formulário seguinte:";

				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8

				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8

				// Error Response

				$lang_string['error'] = "<h2>Isto não correu bem!</h2>Não consegui gravar o artigo.<br /><br />A resposta do servidor foi:<br />";

				break;

			case 'add_static':

				// Add Entry

				$lang_string['title'] = "Adicionar Página Estática";

				$lang_string['instructions'] = "Preencha o formulário seguinte para criar uma Página Estática. Ao contrário de uma entrada normal de um Blog, as Entradas Estáticas aparecem como links no menu da direita. São para páginas que quer sempre disponíveis como por exemplo: Sobre Mim, Contacte-nos, Serviços, etc. Clique em 'Pré-visualizar' para ver como a entrada ficou, ou clique em 'Adicionar' para gravar a entrada.";

				// Preview / Edit Entry

				$lang_string['title_preview'] = "Pré-visualizar / Editar Página Estática";

				$lang_string['instructions_preview'] = "A sua Página Estática será vista assim. Se está a usar texto com estilo ou a incluir imagens, lembre-se de 'fechar' todas as 'tags'.";

				$lang_string['title_update'] = "Actualizar Página Estática";

				$lang_string['instructions_update'] = "Você pode mudar a sua entrada usando o formulário seguinte. Prima 'Pré-visualizar' ou 'Adicionar' quando acabar.";

				$lang_string['form_error'] = "Por favor preencha os campos Assunto, Artigo e Nome de Ficheiro.";	

				// Error Response

				$lang_string['error'] = "<h2>Isto não correu bem!</h2>Não consegui gravar o artigo. Encontrei um problema quando guardava o seu artigo.<br /><br />A resposta do servidor foi:<br />";

				break;

			case 'add_block':

				// Add / Manage Blocks

				$lang_string['title'] = "Adicionar / Organizar Links";

				$lang_string['instructions'] = "Adicionar Blocos Personalizados";

				$lang_string['up'] = "Acima";

				$lang_string['down'] = "Abaixo";

				$lang_string['edit'] = "editar";

				$lang_string['delete'] = "apagar";

				$lang_string['block_name'] = "Nome do Bloco:";

				$lang_string['block_content'] = "Conteúdo do Bloco:";

				$lang_string['instructions_edit'] = "Está a editar o bloco:";

				$lang_string['instructions_modify'] = "Prima para modificar um bloco:";

				$lang_string['submit_btn_edit'] = "Editar Bloco";

				$lang_string['submit_btn_add'] = "Adicionar Bloco";

				$lang_string['form_error'] = "Por favor preencha o campo Nome.";

				break;

			case 'add_link':

				$lang_string['static_pages'] = "Páginas Estáticas:";

				// Add / Manage Links

				$lang_string['title'] = "Adicionar / Organizar Links";

				$lang_string['instructions'] = "Organiza os links para outros sítios. Prima os botões Para Cima e Para Baixo para modificar a ordem dos links.";

				$lang_string['up'] = "Para Cima";

				$lang_string['down'] = "Para Baixo";

				$lang_string['edit'] = "Editar";

				$lang_string['delete'] = "Apagar";

				$lang_string['link_name'] = "Nome do link:";

				$lang_string['link_url'] = "URL:";

				$lang_string['instructions_edit'] = "Está a editar o link:";

				$lang_string['instructions_modify'] = "Prima para modificar o link:";

				$lang_string['submit_btn_edit'] = "Editar link";

				$lang_string['submit_btn_add'] = "Organizar link";

				$lang_string['form_error'] = "Por favor preencha os campos Nome e URL.";

				break;

			case 'categories':

				// Add / Manage Links

				$lang_string['title'] = "Adicionar / Organizar Categorias";

				$lang_string['instructions'] = "Utilize o formulário seguinte para adicionar e editar as suas categorias. A definição de cada categoria deverá respeitar o seguinte formato 'nome de categoria (número id)'. A indentação de elementos faz-se com espaços.<br /><br /><b>Por exemplo:</b><br />Geral (1)<br />Notícias (3)<br />&nbsp;&nbsp;Anúncios (6)<br />&nbsp;&nbsp;Eventos (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Diversos (7)<br />Tecnologia (2)<br />";

				$lang_string['error'] = "Erro";

				$lang_string['current_categories'] = "Categorias Actuais";

				$lang_string['no_categories_found'] = "Não foram encontradas Categorias";

				$lang_string['category_list'] = "Lista de Categorias:";

				$lang_string['validate'] = "Validar";

				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";

				break;

			case 'colors':

				// Change Colors

				$lang_string['title'] = "Mudar cores";

				$lang_string['instructions'] = "Pode mudar as cores do texto e do fundo do artigo.";

				$lang_string['bg_color'] = "Fundo da página";

				$lang_string['main_bg_color'] = "Fundo da página principal";

				$lang_string['border_color'] = "Margem da página";

				$lang_string['inner_border_color'] = "Margem Interna";

				$lang_string['header_bg_color'] = "Fundo do cabeçalho";

				$lang_string['header_txt_color'] = "Texto do cabeçalho";

				$lang_string['menu_bg_color'] = "Fundo da área do menu";

				$lang_string['footer_bg_color'] = "Fundo do rodapé da página";

				$lang_string['txt_color'] = "Texto principal";

				$lang_string['headline_txt_color'] = "Texto do cabeçalho";

				$lang_string['date_txt_color'] = "Texto da data";

				$lang_string['footer_txt_color'] = "Texto do rodapé";

				$lang_string['link_reg_color'] = "Link normal";

				$lang_string['link_hi_color'] = "Link activo";

				$lang_string['link_down_color'] = "Link visitado";

				// More Colors

				$lang_string['entry_bg'] = "Fundo da Entrada";

				$lang_string['entry_title_bg'] = "Fundo do Título da Entrada";

				$lang_string['entry_border'] = "Margem da Entrada";

				$lang_string['entry_title_text'] = "Texto do título da Entrada";

				$lang_string['entry_text'] = "Texto da Entrada";

				$lang_string['menu_bg'] = "Fundo do Menu";

				$lang_string['menu_title_bg'] = "Fundo do Titulo do Menu";

				$lang_string['menu_border'] = "Margem do Menu";

				$lang_string['menu_title_text'] = "Texto do Titulo do Menu";

				$lang_string['menu_text'] = "Texto do Menu";

				$lang_string['menu_link_reg_color'] = "Menu Link Normal";

				$lang_string['menu_link_hi_color'] = "Menu Link Por Cima";

				$lang_string['menu_link_down_color'] = "Menu Link Activo";

				// Submit

				$lang_string['color_preset'] = "Esquema de Cores:"; // 0.3.7q

				$lang_string['scheme_name'] = "Digite um nome para um esquema personalizado:"; // 0.3.7q

				$lang_string['scheme_file'] = "Digite o nome de ficheiro para o esquema: (sem espaços ou extensões)"; // 0.3.7q

				$lang_string['save_btn'] = "&nbsp;Gravar&nbsp;"; // 0.3.7q

				$lang_string['form_error'] = "Por favor, escolha um nome para o seu esquema personalizado."; // 0.3.7q

				$lang_string['submit_btn'] = "&nbsp;Ver&nbsp;";

				$lang_string['theme_doesnt_allow_colors'] = 'O tema em uso não permite cores personalizadas.';

				// Error Response

				$lang_string['error'] = "<h2>Isto não correu bem!</h2>Informação não guardada. Encontrei um problema enquando guardava a sua informação.<br /><br />A resposta do servidor foi:<br />";

				break;

			case 'comments':

				// Comments

				$lang_string['name'] = "Nome:"; //New in 0.4.6.2

				$lang_string['email'] = "Email:"; //New in 0.4.6.2

				$lang_string['homepage'] = "Homepage:"; //New in 0.4.6.2

				$lang_string['comment'] = "Comentário:"; //New in 0.4.6.2

				$lang_string['IPAddress'] = "Endereço IP:";  // New for 0.4.6.2

				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2

				$lang_string['wrote'] = "<i>Em %s, %s escreveu:</i><br />\n<br />\n%s"; // New for 0.4.6.2

				$lang_string['commentposted'] = "Foi feito um novo comentário em: ";  // New for 0.4.6.2

				$lang_string['comment_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2

				$lang_string['title'] = "Comentários";

				$lang_string['header'] = "Organizar comentários";

				$lang_string['instructions'] = "Preencha o formulário seguinte para comentar o artigo.";

				$lang_string['comment_name'] = "O seu nome:";

				$lang_string['comment_email'] = "Email:"; // 0.3.8

				$lang_string['comment_url'] = "URL:"; // 0.3.8

				$lang_string['comment_remember'] = "Lembra-te de mim:"; // 0.3.8

				$lang_string['comment_text'] = "Comentário:";

				$lang_string['post_btn'] = "&nbsp;Publicar comentário&nbsp;";

				$lang_string['delete_btn'] = "Apagar";

				$lang_string['expired_comment1'] = "Desculpe, mas não são permitidos comentários novos passados mais de "; // New for 0.4.8

				$lang_string['expired_comment2'] = " dias após o artigo inicial."; // New for 0.4.8

				

				$lang_string['blacklisted'] = "O seu endereço IP foi bloqueado. Não poderá fazer comentário."; // New for 0.4.8

				// Error Response

				$lang_string['error_add'] = "<h2>Isto não correu bem!</h2>Não consegui gravar o seu comentário.<br />A resposta do servidor foi:<br />";

				$lang_string['error_delete'] = "<h2>Isto não correu bem!</h2>Não consegui apagar o comentário.<br />A resposta do servidor foi:<br />";

				$lang_string['form_error'] = "Por favor preencha os campos Nome e Comentário."; // <-- Need Translation

				break;

			case 'delete':

				$lang_string['title'] = "Apagar artigo";

				$lang_string['instructions'] = "Está prestes a apagar um artigo. Assegure-se de que pretende efectivamente apagá-lo, pois não há forma de o recuperar.";

				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";

				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Isto não correu bem!</h2>Não consegui apagar o artigo.<br /><br />A resposta do servidor foi:<br />";

				break;

			case 'delete_static':

				$lang_string['title'] = "Apagar uma Página Estática";

				$lang_string['instructions'] = "Está prestes a apagar esta Página estática. Assegure-se que pretende efectivamente apagá-la, pois não há forma de a recuperar.";

				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";

				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Isto não correu bem!</h2>Não consegui apagar o artigo.<br /><br />A resposta do servidor foi:<br />";

				break;

			case 'image_list':

				$lang_string['title'] = "Lista de imagens";

				$lang_string['instructions'] = "Carregue no link para ver a imagem.<br><br>Para associar uma imagem ao seu artigo:<br>1) Prima control + clique num link e seleccione 'Copiar para a Área de Transferência'.<br>2) Regresse ao editor do artigo.<br>3) Carregue no botão Imagem e cole o link na janela.";

				break;

			case 'info': // New 0.3.7

				$lang_string['title'] = "Informação Meta-Data";

				$lang_string['instructions'] = "A informação que se segue é utilizada em &quot;meta-data&quot;, o que ajuda a que o seu site seja encontrado e correctamente classificado pelos vários motores de busca. Esta informação poderá também ser utilizada em RSS.";

				$lang_string['info_keywords'] = "Palavras Chave: (Lista de palavras chaves separadas por vírgulas.)";

				$lang_string['info_description'] = "Descrição: (Uma descrição em texto livre do seu site.)";

				$lang_string['info_copyright'] = "Direitos de Autor: (Informação sobre direitos de autor da sua página, ou link para documento que contenha essa informação.)";

				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Isto não correu bem!</h2>Não consegui gravar essa informação.<br /><br />A resposta do servidor foi:<br />";

				$lang_string['form_error'] = "Por favor preencha os campos Título e Autor.";

				break;

			case 'index':

				// Index

				break;

			case 'static':

				// Index

				break;

			case 'rating': // New 0.3.8

				$lang_string['error'] = "<h2>Isto não correu bem!</h2>Não consegui gravar essa informação.<br /><br />A resposta do servidor foi:<br />";

				break;

			case 'login':

				$lang_string['upgrade'] = "<h2>Actualizar</h2>"; // New 0.3.8

				$lang_string['upgrade_count'] = "%n ficheiros de comentários precisam de actualização:"; // New 0.3.8

				$lang_string['upgrade_url'] = "Actualizar Comentários"; // New 0.3.8

				$lang_string['title'] = "Autenticação";

				$lang_string['instructions'] = "Para administrar o seu site precisa de autenticar-se com Utilizador e Password";

				$lang_string['username'] = "Utilizador:";

				$lang_string['password'] = "Password:";

				$lang_string['submit_btn'] = "&nbsp;Autenticar&nbsp;";

				// Success

				$lang_string['success'] = "<h2>Bemvindo!</h2>A sua autenticação foi validada!<p />";

				// Wrong Password

				$lang_string['wrong_password'] = "<h2>Isto não correu bem!</h2>Não consegui validar os seus dados de autenticação. Certifique-se que se autenticou com Utilizador e Password correctos e tente novamente.<p />";

				$lang_string['form_error'] = "Por favor preencha os campos Utilizador e Password."; // <-- Need Translation

				break;

			case 'logout':

				$lang_string['title'] = "Terminar sessão de Administração";

				$lang_string['instructions'] = "<h2>Isto não correu bem!</h2>Não consegui terminar a sua sessão. Não foi possível apagar o cookie.<p />";

				break;

			case 'forms':

				$lang_string['title'] = "";

				$lang_string['instructions'] = "";

				// Error Response

				$lang_string['error'] = "<h2>Isto não correu bem!</h2>Não consegui gravar a informação.<br /><br />A resposta do servidor foi:<br />";

				break;

			case 'set_login':

				$lang_string['title'] = "Mudar utilizador &amp; Password";

				$lang_string['instructions'] = "Utilize o formulário seguinte para alterar o seu nome de utilizador e/ou password. Escolha novos dados para Utilizador e Password.";

				$lang_string['username'] = "Utilizador:";

				$lang_string['password'] = "Senha:";

				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";

				// Success

				$lang_string['success'] = "<h2>Boa!</h2>O seu Utilizador e/ou Senha foram correctamente alterados. Bom blogging!<p />";

				// Wrong Password

				$lang_string['wrong_password'] = "<h2>Isto não correu bem!</h2>Não consegui gravar essa alteração.<br /><br />A resposta do servidor foi:<br />";

				$lang_string['form_error'] = "Por favor preencha os campos Utilizador e Password.";

				$lang_string['explanation'] = "A nossa estrutura de passwords foi modificada em versões mais recebtes do SPB. Deixou de haver maneira de actualizar passwords

					e/ou utilizadores através do código do blog. Para alterar esses dadosdeverá apagra o ficheiro /config/password.php assegurando-se que os ficheiros install*.php

					continuam a existir no servidor. Após ter apagado o ficheiro actualize esta página (ou faça logout). Será remetido para uma página

					destinada a gerar uma nova password, da mesma forma que quando configurou o seu site.";  // New for 0.4.6

				break;

			case 'install00':

				$lang_string['title'] = "Benvindo";

				$lang_string['instructions'] = "

				Obrigado por escolher Simple PHP Blog!";

				$lang_string['blog_choose_language'] = "Escolha o seu Idioma:";

				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";

				break;

			case 'install01':

				$lang_string['title'] = "Benvindo";

				$lang_string['instructions'] = "

				Obrigado por escolher Simple PHP Blog!<br /><br />Simple PHP Blog é um sistema de blogs simples. Requer PHP 4.1 ou superior, e permissões de escrita no servidor. Toda a informação é guardada em ficheiros de texto simples, não sendo necessária qualquer base de dados.<br /><br />				Para começar, Simple PHP Blog precisa de criar três pastas ('config', 'content', e 'images') onde será gravada toda a sua informação.<br /><br />				<b>Prima o link seguinte para começar a configuração:</b>";

				

				

				$lang_string['begin'] = "[ Iniciar Configuração ]";

				break;

			case 'install02':

				$lang_string['title'] = "Configuração";

				$lang_string['instructions'] = "Estou a tentar criar as pastas 'config', 'content', e 'images':";

				$lang_string['folder_exists'] = "Ok! A pasta já existe. Não efectuei nenhuma alteração ...";

				$lang_string['folder_failed'] = "Isto não correu bem! Não consegui criar as pastas ...";

				$lang_string['folder_success'] = "Boa! As pastas foram criadas...";

				// Help

				$lang_string['help'] = "

				<h2>Isto não correu bem!</h2>

				Não consegui criar uma ou mais pastas! Isso deve-se provavelmente a:<br>

				<i>1) <b>Permissões de escrita:</b> não estão definidas para permitir acesso <b>Read/Write</b>.<br>

				<i>2) O <b>UID</b> (user ID's) de todos os ficheiros e pastas têm de ser o mesmo.</i><p />

				

				Siga as instruções de resolução de problemas e por favor tente novamente:<p />

				1) Crie manualmente as seguintes pastas: <b>config</b>, <b>content</b>, e <b>images</b>.<p />

				2) Dê <b>Permissões de escrita</b> às pastas. No seu programa FTP, Owner, User, e World devem ter acesso <b>Read</b> e <b>Write</b>. <i>(Poderá ter de contactar o seu ISP para fazer essa alteração ...)</i><p />				3) Certifique-se que o UID de todos os ficheiros e pastas são os mesmos. <i>(Poderá ter de contactar o seu ISP para fazer essa alteração ...)</i>";

				

				$lang_string['try_again'] = "[ Tente novamente ]";

				// Success

				$lang_string['success'] = "<h2>Boa!</h2>Pastas criadas com sucesso!<p /><b>Prima o link seguinte para prosseguir:</b>";

				$lang_string['continue'] = "[ Continuar ]";

				break;

			case 'install03':

				$lang_string['supported'] = "<b>O seu servidor suporta as seguintes formas de encriptação:</b>";

				$lang_string['standard'] = "Encriptação DES Standard: ";

				$lang_string['extended'] = "Encriptação DES Extended: ";

				$lang_string['MD5'] = "Encriptação MD5: ";

				$lang_string['blowfish'] = "Encriptação Blowfish: ";

				$lang_string['enabled'] = "activado";

				$lang_string['disabled'] = "desactivado";

				$lang_string['using_standard'] = "<b>Utilizando Encriptação DES Standard ...</b>";

				$lang_string['using_extended'] = "<b>Utilizando Encriptação DES Extended ...</b>";

				$lang_string['using_MD5'] = "<b style=\"color: green;\">Utilizando Encriptação MD5 ...</b>";

				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Utilizando Encriptação  Blowfish ...</b>";

				$lang_string['using_unknown'] = "<b>Utilizando Encriptação não Especificada ...</b>";

				$lang_string['salt_length'] = " <i>(Tamanho de Salt = %string)</i><br />";

				$lang_string['title'] = "Criar Utilizador e Password";

				$lang_string['instructions'] = "Utilize o formulário seguinte para criar um Utilizador e uma Password.";

				$lang_string['username'] = "Utilizador:";

				$lang_string['password'] = "Password:";

				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";

				// Success

				$lang_string['success'] = "<h2>Parabéns!</h2>Você está autenticado. Clique no link seguinte para visitar a página de Configuração, onde pode dar o nome ao seu blog. Bom blogging!<p />";

				$lang_string['btn_setup'] = "[ Configuração ]";

				// Wrong Password

				$lang_string['wrong_password'] = "<h2>Isto não correu bem!</h2>Não consegui gravar o Utilizador e a Password.<br /><br />A resposta do servidor foi:<br />";

				$lang_string['form_error'] = "Por favor preencha os campos Utilizador e Password.";

				break;

			case 'install04':

				$lang_string['title'] = "criação do ficheiro de Password";

				$lang_string['instructions'] = "OK, isto vai exigir algum trabalho:<br />

				<ol>

				<li>Abra um editor de texto qualquer. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>

				<li>Crie um novo documento de texto.</li>

				<li>Copie o código seguinte e cole-o no documento que acabou de criar.</li>

				<li>Grave o novo documento com o nome <b>password.php</b> <i>(Assegure-se que o mesmo fica mesmo gravado no formato <b>texto</b> ou <b>texto simples</b>.)</i></li>

				<li>Abra a sua aplicação de FTP.</li>

				<li>Coloque o seu ficheiro <b>password.php</b> nas pasta <b>config</b> do seu servidor.</li>

				<li>Apague o ficheiro <b>password.php</b> do seu computador.</li>

				</ol>

				";

				$lang_string['information'] = "<i>Nota: Se por qualquer motivo desejar modificar o seu Utilizador e Password, apague o ficheiro <b>password.php</b> da pasta <b>config</b> no seu servidor. Visite imediatamente o seu site para criar um novo Utilizador e Password (não deixe o servidor sem esse ficheiro, pois poderá comprometer a segurança dos seus dados)</i>";

				$lang_string['code'] = "Código para o ficheiro <b>password.php</b>:";

				$lang_string['continue'] = "[ Continuar ]";

				break;

			case 'install05':

			case 'install06':

				$lang_string['title'] = "Autenticação";

				$lang_string['instructions'] = "Por favor introduza o seu Utilizador e Password";

				$lang_string['username'] = "Utilizador:";

				$lang_string['password'] = "Password:";

				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";

				// Success

				$lang_string['success'] = "<h2>Parabéns!</h2>Está autenticado como administrador.<p />

				Clique o link seguinte para avançar para a página de <b>Configuração</b>, onde poderá personalizar o seu novo blog.<p />

				<i>Nota: O processo de instalação está concluído. Recomendamos que apague os ficheiros <b>installXX.php</b> do seu site. (i.e. install00.php até install06.php)</i><p />";

				// Wrong Password

				$lang_string['wrong_password'] = "<h2>Isto não correu bem!</h2>Não consegui autenticá-lo. Por favor verifique se introduziu correctamente o Utilizador e Password e tente novamente.<p />";

				$lang_string['form_error'] = "Por favor preencha os campos Utilizador e Password fields.";

				// Success

				$lang_string['btn_setup'] = "[ Configuração ]";

				$lang_string['btn_try_again'] = "[ Tentar Novamente ]";

				break;

			case 'setup':

				$lang_string['title'] = "Configuração";

				$lang_string['instructions'] = "Pode mudar o nome do seu blog e a sua informação pessoal.";

				$lang_string['blog_title'] = "Nome do Blog:";

				$lang_string['blog_author'] = "Autor:";

				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7

				$lang_string['blog_avatar'] = "Avatar URL: (Deixe em branco se inexistente)."; // <-- New 0.4.7

				$lang_string['blog_footer'] = "Rodapé de página:";

				$lang_string['blog_choose_language'] = "Escolha o idioma:";

				$lang_string['blog_enable_comments'] = "Permitir Comentários de Utilizadores"; // <-- New 0.3.6

				$lang_string['blog_comments_popup'] = "Abrir comentários em Janelas Pop-up"; // <-- New 0.3.6

				$lang_string['blog_enable_voting'] = "Permitir Classificação de Entradas por Utilizadores"; // <-- New 0.3.8

				$lang_string['blog_enable_cache'] = "Utilizar cache para artigos do blog (poderá aumentar a velocidade nalguns servidores)"; // New for 0.4.6

				$lang_string['blog_email_notification'] = "Enviar uma notificação por email sempre que um utilizador comentar os seus artigos"; // <-- New 0.3.7

				$lang_string['blog_send_pings'] = "Enviar &quot;pings&quot; a weblogs"; // <-- New 0.3.7

				$lang_string['blog_ping_urls'] = "Indique o URL completo (i.e. http://rpc.weblogs.com/RPC2) do serviço a &quot;pingar&quot;.<br />(Pode especificar mais que um URL, separados por vírgulas.)"; // <-- New 0.3.7

				$lang_string['blog_trackback_about'] = "O Trackback é um método de notificação entre blogs. Permite que outro

					blog saiba que se lhe está a ligar através do envio de um trackback ping. Saiba quem se está a ligar ao  

					seu blog recebendo trackback pings.<br />

				   Tanto pode especificar manualmente os URIs a pingar, como poderá tentar fazê-lo automaticamente através da 

				   Auto-Pesquisa."; // <-- New 0.3.8

				$lang_string['blog_trackback_enabled'] = "Activar o trackback no meu blog"; // <-- New 0.3.8

				$lang_string['blog_trackback_auto_discovery'] = "Activar a Auto-Pesquisa sempre que seja publicado um novo artigo que contenha URLs"; // <-- New 0.?.?

				$lang_string['blog_max_entries'] = "Número máximo de artigos a exibir:"; // <-- New 0.3.6

				$lang_string['blog_comment_tags'] = "Permitir as seguintes Tags nos comentários:"; // <-- New 0.3.6

				$lang_string['blog_gzip_about'] = "

					Desde a versão 4.0.4 que o PHP tem a capacidade de ler e escrever ficheiros no formato de compressão gzip (.gz),

					o que permite poupar espaço em disco. Também pode comprimir de forma transparente páginas que são enviadas para browsers

					que suportem a compressão gzip, o que permite poupar largura de banda.<br />

					<br />

					O suporte para Zlib no PHP não está activada por omissão. Se as caixas de verificação estiverem desactivadas isso significa 

					que a instalação de PHP do seu servidor não suporta a extensão Zlib."; // <-- New 0.3.7

				$lang_string['blog_enable_gzip_txt'] = "Activar a Compressão GZIP para ficheiros de base de dados"; // <-- New 0.3.7

				$lang_string['blog_enable_gzip_output'] = "Activar a Compressão GZIP para conteúdos HTTP"; // <-- New 0.3.7

				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Isto não correu bem!</h2>Não consegui gravar esses dados.<br /><br />A resposta do servidor foi:<br />";

				$lang_string['form_error'] = "Por favor preencha os campos Título e Autor.";

				$lang_string['label_entry_order'] = "Ordem dos Artigos:";

				$lang_string['select_new_to_old'] = "Mostrar Mais Recentes em Primeiro Lugar";

				$lang_string['select_old_to_new'] = "Mostrar Mais Antigas em Primeiro Lugar";

				$lang_string['label_comment_order'] = "Ordem dos Comentários:";

								$lang_string['cal_sunday'] = "Domingo"; // New for 0.4.6

				$lang_string['cal_monday'] = "Segunda-Feira"; // New for 0.4.6

				$lang_string['label_calendar_start'] = "Início da Semana no Dia"; // New for 0.4.6

				$lang_string['blog_enable_calendar'] = "Activar Calendário / Bloco de Arquivos"; // New for 0.4.6

				$lang_string['blog_enable_archives'] = "Activar o Bloco de Arquivos"; // New for 0.4.8

				$lang_string['blog_enable_counter'] = "Activar o Contador na Barra Lateral"; // New for 0.4.8

				$lang_string['blog_counter_hours'] = "Tempo de espera até cada hit voltar a contar para as estatísticas (baseado num IP específico):"; // New for 0.4.8

				$lang_string['blog_enable_login'] = "Activar Link para Administrar (Por favor faça o bookmark da página \"login.php\" antes de desactivar ...)"; // New for 0.4.8

				$lang_string['blog_enable_title'] = "Activar o Título do Blog em Texto Simples (Limpe a caixa de selecção do nome do blog estar no gráfico do seu logótipo)"; // New for 0.4.6

				$lang_string['blog_enable_permalink'] = "Activar Permalink para Artigos do Blog"; // New for 0.4.6

				$lang_string['blog_enable_capcha'] = "Activar Anti-Spam"; // New for 0.4.8

				$lang_string['blog_footer_counter'] = "Activar Contador no Rodapé"; // New for 0.4.8

				$lang_string['blog_enable_capcha_image'] = "Imagens Anti-Spam Images (apenas biblioteca GD) / Campo de Texto Anti-Spam"; // New for 0.4.8

				$lang_string['blog_enable_stats'] = "Activar Opção de Estatísticas no Menu"; // New for 0.4.7

				$lang_string['blog_enable_lastcomments'] = "Activar Listagem de Comentários Mais Recentes"; // New for 0.4.7

				$lang_string['blog_enable_lastentries'] = "Activar Listagem de Artigos Mais Recentes"; // New for 0.4.7

				$lang_string['title_sidebar'] = "Barra Lateral"; // New in 0.4.7

				$lang_string['title_comments'] = "Comentários"; // New in 0.4.7

				$lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7

				$lang_string['title_compression'] = "Compressão"; // New in 0.4.7

				$lang_string['title_entries'] = "Artigos"; // New in 0.4.7

				$lang_string['title_general'] = "Geral"; // New in 0.4.7

				$lang_string['title_language'] = "Idioma"; // New in 0.4.7

				$lang_string['blog_comment_days_expiry'] = "Permitir comentários após o artigo original durante quantos dias? (0 significa que o artigo não expira)"; // New in 0.4.8

				break;

			case 'trackbacks':  // <-- New 0.3.8

				// Trackbacks

				$lang_string['title'] = "Trackbacks";

				$lang_string['header'] = "Fazer Trackback do URL para este artigo:";

				$lang_string['delete_btn'] = "apagar";

				// Error Response

				$lang_string['error_add'] = "Erro ao gravar dados do trackback.";

				break;

			case 'options':

				$lang_string['title'] = "Opções";

				$lang_string['instructions'] = "Use o formulário seguinte para personalizar o formato de data e de tempo para artigos do blog e para comentários. As áreas de <b>Pré-visualização</b> actualizam automaticamente para mostrar-lhe como o formato que escolheu será exibido.";

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

				$lang_string['s_mon'] = "Mês Abreviado";

				$lang_string['s_day'] = "Dia";

				$lang_string['s_year'] = "Ano";

				$lang_string['zero_day'] = "Utilizar Zero à esquerda no dia";

				$lang_string['show_century'] = "Mostrar século";

				// Time

				$lang_string['time_title'] = "Formato de tempo:";

				$lang_string['12hour'] = "12-horas";

				$lang_string['24hour'] = "24-horas";

				$lang_string['before_noon'] = "Antes do Meio-Dia";

				$lang_string['after_noon'] = "Depois do Meio-Dia";

				// Date

				$lang_string['date_title'] = "Formato da Data:";

				$lang_string['long_date'] = "Data Completa";

				$lang_string['short_date'] = "Data Abreviada";

				$lang_string['time'] = "Tempo";

				// Menu

				$lang_string['menu_title'] = "Formato de Exibição de Menu de Data:";

				$lang_string['long_date'] = "Data Completa";

				$lang_string['short_date'] = "Data Abreviada";

				// Used in multiple places

				$lang_string['zero_day'] = "Zero à esquerda no dia";

				$lang_string['zero_month'] = "Zero à esquerda no mês";

				$lang_string['zero_hour'] = "Zero à esquerda na hora";

				$lang_string['separator'] = "Separador:";

				$lang_string['preview'] = "Pré-visualizar:";

				$lang_string['server_offset'] = "Desvio do Servidor:";

				// Buttons

				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Isto não correu bem!</h2>Não consegui gravar esses dados.  <br /><br />A resposta do servidor foi:<br />";

				break;

			case 'themes':

				$lang_string['title'] = "Temas";

				$lang_string['instructions'] = "Use o menu para utilizar um tema diferente.";

				// Themes

				$lang_string['choose_theme'] = "Temas:";

				// Buttons

				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Isto não correu bem!</h2>Não consegui gravar essa informação.<br /><br /> A resposta do servidor foi:<br />";

				break;

			case 'upload_img':

				$lang_string['title'] = "Importar Imagem";

				$lang_string['instructions'] = "Prima o link seguinte para importar uma imagem.";

				$lang_string['select_file'] = "Escolher a Imagem:";

				$lang_string['upload_btn'] = "Importar";

				// Error Response

				$lang_string['error'] = "<h2>Isto não correu bem!</h2>Não consegui importar a imagem que escolheu. <br /><br />A resposta do servidor foi:<br />";

				break;

			case 'search': // <-- New 0.3.7

				$lang_string['title'] = "Resultados da Pesquisa";

				$lang_string['instructions'] = "Os resultados da pesquisa para a expressão <b>%string</b> são os seguintes:";

				$lang_string['not_found'] = "Os critérios da sua pesquisa não produziram quaisquer resultados.";

				break;

			case 'contact': // <-- New 0.3.8

				$lang_string['title'] = "Contacte-nos";

				$lang_string['instructions'] = "Preencha o formulário:";

				$lang_string['form_error'] = "Por favor preencha os campos Assunto e Comentário.";

				$lang_string['name'] = "Nome:";

				$lang_string['email'] = "Email:";

				$lang_string['subject'] = "Assunto:";

				$lang_string['comment'] = "Comentário:";

				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";

				$lang_string['success'] = "<h2>Obrigado!</h2>A sua mensagem foi enviada.<p />";

				$lang_string['failure'] = "<h2>Houve um Erro!</h2>Não consegui enviar a sua mensagem. O mais provável é não ter introduzido correctamente os dados Anti-Spam.<p />";

				$lang_string['contact_capcha'] = "Anti-Spam: Introduza <b>%s</b>"; // 0.4.2	

				$lang_string['contactsent'] = "Contacto enviado através: ";  // New for 0.4.6

				$lang_string['IPAddress'] = "Endereço IP:";  // New for 0.4.6

				$lang_string['useragent'] = "Agente:";  // New for 0.4.6

				$lang_string['wrote'] = "<i>Em %s, %s escreveu:</i><br />\n<br />\n%s"; // New for 0.4.6.2

				break;

			case 'stats':

				$lang_string['title'] = "Estatística";

				$lang_string['general'] = "Geral";

				$lang_string['entry_info'] = "<b>%s</b> artigos utilizando <b>%s</b> palavras que ocupam <b>%s</b> bytes";

				$lang_string['comment_info'] = "<b>%s</b> comentários utilizando <b>%s</b> palavras que ocupam <b>%s</b> bytes";

				$lang_string['trackback_info'] = "<b>%s</b> trackbacks que ocupam <b>%s</b> bytes";

				$lang_string['static_info'] = "<b>%s</b> páginas estáticas utilizando <b>%s</b> palavras que ocupam <b>%s</b> bytes";

				$lang_string['most_viewed_entries'] = "10 Artigos mais vistos";

				$lang_string['most_commented_entries'] = "10 Artigos mais comentados";

				$lang_string['most_trackbacked_entries'] = "10 Artigos com mais trackbacks";

				$lang_string['vote_info'] = "<b>%s</b> votos que ocupam <b>%s</b> bytes"; // 0.4.1

				$lang_string["most_voted_entries"] = "10 Artigos mais votados"; // 0.4.1

				$lang_string["most_rated_entries"] = "10 Artigos melhor classificados"; // 0.4.1

				break;

			case 'errorpage-nocookies':  // New for 0.4.6

				$lang_string["title"] = 'HTTP Error 403.8 - O acesso a esta Página/Função foi-lhe negado';

				$lang_string["errorline1"] = 'A página ou função que tentou executar exige a utilização de cookies.';

				$lang_string["errorline2"] = 'Active a utilização de cookies no seu browser ou anti-virues/firewall e tente novamente.';

				$lang_string["clientid"] = 'Client ID: ';

				break;

			case 'errorpage':  // New for 0.4.6

				$lang_string["403.8"] = 'HTTP Error 403.8 - O acesso a esta Página/Função foi-lhe negado';

				$lang_string["404"] = 'HTTP Error 404 - Esta Página/Função não existe';

				$lang_string["error_404"] = 'A página ou função que tentou executar não existe.';

				$lang_string["error_javascript"] = 'A página ou função que tentou utilizar requer javascript para funcionar correctamente.';

				$lang_string["error_emailnotsent"] = 'Não consegui enviar a sua mensagem.';

				$lang_string["error_emailnotsentcapcha"] = 'A sua mensagem não foi enviada porque o campo de Anti-Spam ou não estava preenchido ou não foi preenchido correctamente.';

				$lang_string["clientid"] = 'Client ID: ';

				break;

			case 'emoticons':  // New for 0.4.7

				$lang_string['title'] = "Organizar Emoticons";

				$lang_string['instructions'] = "

					Escolha os emoticons que deseja utilizar. Escreva na caixa as Tags que pretende 

					que sejam substituídas pela imagem. Pode utilizar várias Tags, desde que as 

					separe com espaços.<br /><br />

		

					Por exemplo:<br />

					:) :-) :SMILE: :HAPPY:<br /><br />

					

					<i>(Se utilizar Tags com menos de dois caracteres, 

					podem ocorrer substituições incorrectas.)</i>";

				$lang_string["upload_instructions"] = 'Faça o Upload de um Novo Emoticon:';

				$lang_string["upload_success"] = 'Boa! O Upload da imagem foi feito correctamente!';

				$lang_string["upload_error"] = 'Erro! Não consegui fazer o Upload da Imagem.';

				$lang_string["upload_invalid"] = 'Erro! Ficheiro de imagem inválido. Deverá estar no formato png, jpg, ou gif.';

				$lang_string["save_success"] = 'Configuração dos Emoticons gravadas com sucesso!';

				$lang_string["save_error"] = 'Erro! Não consegui gravar a configuração dos Emoticons.';

				$lang_string["save_button"] = 'Gravar Emoticons';

				break;

			default:

				break;

		}

	}

		

?>

 	  	 
