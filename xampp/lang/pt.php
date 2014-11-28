<?php
// ---------------------------------------------------------------------
// GLOBAL
// ---------------------------------------------------------------------

$TEXT['global-xampp']="XAMPP para Linux";
$TEXT['global-showcode']="Mostrar c�digo fonte";
$TEXT['global-sourcecode']="C�digo fonte";

// ---------------------------------------------------------------------
// NAVIGATION
// ---------------------------------------------------------------------

$TEXT['navi-xampp']="XAMPP";
$TEXT['navi-welcome']="Bem Vindo";
$TEXT['navi-status']="Status";
$TEXT['navi-security']="Seguran�a";
$TEXT['navi-doc']="Documenta��o";
$TEXT['navi-components']="Componentes";
$TEXT['navi-about']="Sobre o XAMPP";

$TEXT['navi-demos']="Demos";
$TEXT['navi-cdcol']="Cole��o de CD";
$TEXT['navi-bio']="Bior�timo";
$TEXT['navi-guest']="Livro de Visitas";
$TEXT['navi-iart']="Arte Instant�nea";
$TEXT['navi-iart2']="Arte Flash";
$TEXT['navi-phonebook']="Agenda de Telefones";

$TEXT['navi-tools']="Ferramentas";
$TEXT['navi-phpmyadmin']="phpMyAdmin";
$TEXT['navi-webalizer']="Webalizer";
$TEXT['navi-phpsqliteadmin']="phpSQLiteAdmin";
                                                                                                                        
$TEXT['navi-languages']="Idiomas";

// ---------------------------------------------------------------------
// STATUS
// ---------------------------------------------------------------------

$TEXT['status-head']="XAMPP Status";
$TEXT['status-text1']="Esta p�gina lhe oferece uma visualiza��o de todas as informa��es sobre o que est� rodando e funcionando como tamb�m o que n�o est�.";
$TEXT['status-text2']="Algumas vezes as altera��es feitas nos arquivos de configura��o poder�o causar um status negativo. Com SSL (https://localhost) todos os relat�rios n�o funcionar�o!";

$TEXT['status-mysql']="Banco de dados MySQL";
$TEXT['status-php']="PHP";
$TEXT['status-perl']="Perl";
$TEXT['status-cgi']="Common Gateway Interface (CGI)";
$TEXT['status-ssi']="Server Side Includes (SSI)";
$TEXT['status-mmcache']="Extens�o PHP �eAccelerator�";
$TEXT['status-mmcache-url']="http://www.apachefriends.org/faq-lampp-en.html#mmcache";
$TEXT['status-oci8']="Extens�o PHP �OCI8/Oracle�";
$TEXT['status-oci8-url']="http://www.apachefriends.org/faq-lampp-en.html#oci8";

$TEXT['status-lookfaq']="ver FAQ";
$TEXT['status-ok']="ATIVADO";
$TEXT['status-nok']="DESATIVADO";

$TEXT['status-tab1']="Componente";
$TEXT['status-tab2']="Status";
$TEXT['status-tab3']="Sugest�o";

// ---------------------------------------------------------------------
// SECURITY
// ---------------------------------------------------------------------

$TEXT['security-head']="SEGURAN�A XAMPP";
$TEXT['security-text1']="Esta p�gina lhe d� uma vis�o geral r�pida sobre o status da seguran�a de sua instala��o de XAMPP. (Por favor, continue lendo ap�s a tabela.)";
$TEXT['security-text2']="Os pontos marcados em verde s�o seguros; os pontos marcados em vermelho s�o definitivamente inseguros e os pontos marcados em amarelo n�o foram poss�veis de serem verificados (Por exemplo: O sofware que deseja verificar n�o est� funcionando).<p>Para corrigir ou fechar todos simplesmente execute<p><b>/opt/lampp/lampp security</b><p>Isto ir� iniciar o programa interativo.";

$TEXT['security-ok']="SEGURO";
$TEXT['security-nok']="INSEGURO";
$TEXT['security-noidea']="DESCONHECIDO";

$TEXT['security-tab1']="Assunto";
$TEXT['security-tab2']="Status";

$TEXT['security-checkapache-nok']="Estas p�ginas do XAMPP est�o acess�veis a qualquer pessoa na rede";
$TEXT['security-checkapache-ok']="Estas p�ginas do XAMPP n�o est�o acess�veis por qualquer pessoa na rede";
$TEXT['security-checkapache-text']="Qualquer p�gina de demostra��o do XAMPP que voc� estiver visualizando est� acess�vel por qualquer pessoa da rede. Qualquer um que conhe�a o endere�o de IP poder� v�-las.";

$TEXT['security-checkmysqlport-nok']="O MySQL est� aces�vel na rede";
$TEXT['security-checkmysqlport-ok']="O MySQL n�o est� aces�vel na rede";
$TEXT['security-checkmysqlport-text']="Este � um potencial ou ao menos uma falha te�rica de seguran�a. E se voc� for louco sobre a seguran�a voc� deve desativar a interface de rede do MySQL.";

$TEXT['security-checkpmamysqluser-nok']="O usu�rio principal do phpMyAdmin n�o possue uma senha";
$TEXT['security-checkpmamysqluser-ok']="O usu�rio principal do phpMyAdmin possui uma senha";
$TEXT['security-checkpmamysqluser-text']="phpMyAdmin armazena suas informa��es em um banco de dados MySQL extra. Para acessar as informa��es do phpMyAdmin utilize-se do usu�rio especial pma. Este usu�rio n�o possui na instala��o padr�o uma senha definida e por raz�es de seguran�a � necess�rio que voc� defina uma senha para ele.";

$TEXT['security-checkmysql-nok']="O usu�rio administrador do MySQL N�O possui uma senha";
$TEXT['security-checkmysql-ok']="O usu�rio administrador do MySQL possui uma senha";
$TEXT['security-checkmysql-text']="Qualquer usu�rio local poder� acessar o banco de dados MySQL com privil�gios de Administrador. Voc� deve definir uma senha.";

$TEXT['security-checkftppassword-nok']="A senha do servidor de FTP FileZilla permanece ainda como 'wampp'";
$TEXT['security-checkftppassword-ok']="A senha do servidor de FTP FileZilla foi alterada";
$TEXT['security-checkftppassword-out']="O servidor FTP n�o est� rodando ou est� sendo bloqueado pelo firewall!";
$TEXT['security-checkftppassword-text']="O servidor de FTP FileZilla foi iniciado, o usu�rio padr�o 'newuser' com senha 'wampp' pode enviar arquivos que poder�o alterar seu servidor XAMPP. Caso voc� ative o servidor FileZilla FTP voc� dever� definir uma nova senha para o usu�rio 'newuser'.";

// ---------------------------------------------------------------------
// START
// ---------------------------------------------------------------------

$TEXT['start-head']="Bem vindo ao XAMPP para Linux";

$TEXT['start-subhead']="Congratula��es:<br>Voc� instalou corretamente o XAMPP em seu sistema!";

$TEXT['start-text1']="Voc� pode agora iniciar a utiliza��o do Apache e outros aplicativos. Primeiramente tente verificar o �Status�  no menu lateral para ter certeza que tudo est� funcionando corretamente.";

$TEXT['start-text2']="Antes de efetuar este teste, voc� poder� visualizar os exemplos abaixo do link de teste.";

$TEXT['start-text3']="Caso deseje iniciar programando PHP ou Perl (ou qualquer outro r ;) por favor, d� uma olhada no <a target=extern href=http://www.apachefriends.org/lampp-en.html>Manual do XAMPP</a> primeiro para obter melhores informa��es sobre a intala��o de seu XAMPP.";

$TEXT['start-text4']="Boa sorte,<br>Kai \"Oswald\" Seidler + Kay Vogelgesang";

// ---------------------------------------------------------------------
// MANUALS
// ---------------------------------------------------------------------

$TEXT['manuals-head']="Documenta��o Online";

$TEXT['manuals-text1']="XAMPP combina muitos diferentes softwares em um s� pacote. Voc� encontrar� a lista padr�o e documenta��o de refer�ncia dos mais importantes pacotes.";


$TEXT['manuals-list1']="
<ul>
<li><a href=http://httpd.apache.org/docs-2.0/en/>Documenta��o do Apache 2</a>
<li><a href=http://www.php.net/manual/pt_BR/>PHP <b>Manual de Refer�ncia</b></a>
<li><a href=http://www.perldoc.com/perl5.8.0/pod/perl.html>Documenta��o do Perl</a>
<li><a href=http://dev.mysql.com/doc/mysql/en/index.html>Documenta��o do MySQL</a>
<li><a href=http://proftpd.linux.co.uk/localsite/Userguide/linked/userguide.html>Manual do usu�rio do ProFTPD</a>
<li><a href=http://www.ros.co.nz/pdf/readme.pdf>Documenta��o da Classe pdf</a>
</ul>";

$TEXT['manuals-text2']="Como tamb�m uma pequena lista de tutoriais e documenta��o do Apache Friends:";

$TEXT['manuals-list2']="
<ul>
<li><a href=http://www.apachefriends.org/en/faq-xampp.html>Documenta��o Apache Friends</a>
<li><a href=http://www.freewebmasterhelp.com/tutorials/php/>Tutorial PHP</a> por David Gowans
<li><a href=http://www.davesite.com/webstation/html/>HTML - Tutorial Interativo para Iniciantes</a> por Dave Kristula
<li><a href=http://www.comp.leeds.ac.uk/Perl/start.html>Tutorial Perl</a> por Nik Silver
</ul>";

$TEXT['manuals-text3']="Boa sorte e divirta-se! :)";

// ---------------------------------------------------------------------
// COMPONENTS
// ---------------------------------------------------------------------

$TEXT['components-head']="Componentes do XAMPP";

$TEXT['components-text1']="O XAMPP combina diferentes softwares em um s� pacotes. Aqui est� as informa��es dos pacotes utilizados.";

$TEXT['components-text2']="Agradecemos aos desenvolvedores destes programas.";

$TEXT['components-text3']="No diret�rio <b>/opt/lampp/licenses</b> voc� ir� encontrar todas as licen�as e arquivos README destes programas.";

// ---------------------------------------------------------------------
// CD COLLECTION DEMO
// ---------------------------------------------------------------------

$TEXT['cds-head']="Cole��o de CD (Exemplo com PHP MySQL e Classe PDF)";
$TEXT['cds-head-fpdf']="Cole��o de CD (Exemplo com PHP MySQL e FPDF)";

$TEXT['cds-text1']="Um programa muito simples para colet�nea de CD's.";

$TEXT['cds-text2']="Lista de CD's como um <a href='$PHP_SELF?action=getpdf'>Arquivo PDF</a>.";

$TEXT['cds-error']="N�o foi poss�vel conectar ao banco de dados!<br>O servidor MySQL est� rodando ou voc� alterou a senha?";
$TEXT['cds-head1']="Meus CD's";
$TEXT['cds-attrib1']="Artista";
$TEXT['cds-attrib2']="T�tulo";
$TEXT['cds-attrib3']="Ano";
$TEXT['cds-attrib4']="Comando";
$TEXT['cds-sure']="Certeza?";
$TEXT['cds-head2']="Adicionar um CD";
$TEXT['cds-button1']="APAGAR CD";
$TEXT['cds-button2']="ADICIONAR CD";

// ---------------------------------------------------------------------
// BIORHYTHM DEMO
// ---------------------------------------------------------------------

$TEXT['bio-head']="Bior�timo (Exemplo com PHP e GD)";

$TEXT['bio-by']="por";
$TEXT['bio-ask']="Por favor, entre com a data de seu anivers�rio";
$TEXT['bio-ok']="OK";
$TEXT['bio-error1']="Data";
$TEXT['bio-error2']="� invalido(a)";

$TEXT['bio-birthday']="Anivers�rio";
$TEXT['bio-today']="Hoje";
$TEXT['bio-intellectual']="Intelectual";
$TEXT['bio-emotional']="Emocional";
$TEXT['bio-physical']="F�sico";

// ---------------------------------------------------------------------
// INSTANT ART DEMO
// ---------------------------------------------------------------------

$TEXT['iart-head']="Arte Instant�nea (Exemplo com PHP GD e FreeType)";
$TEXT['iart-text1']="Fonte �AnkeCalligraph� por <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['iart-ok']="OK";

// ---------------------------------------------------------------------
// FLASH ART DEMO
// ---------------------------------------------------------------------

$TEXT['flash-head']="Arte Flash (Exemplo com PHP e MING)";
$TEXT['flash-text1']="O Projeto MING para win32 n�o existe mais e n�o est� completo.<br>Por favor, leia isso: <a class=blue target=extern href=\"http://www.opaque.net/wiki/index.php?Ming\">Ming - uma biblioteca de sa�da SWF e M�dulo PHP</a>";
$TEXT['flash-ok']="OK";

// ---------------------------------------------------------------------
// PHONE BOOK DEMO
// ---------------------------------------------------------------------

$TEXT['phonebook-head']="Agenda de Telefones (Exemplo com PHP e SQLite)";

$TEXT['phonebook-text1']="Um script simples para Agenda de Telefones. Implementado com um tecnologia moderna e atual: SQLite, o banco de dados SQL sem servidor.";

$TEXT['phonebook-error']="N�o foi poss�vel abrir o banco de dados!";
$TEXT['phonebook-head1']="Meus telefones";
$TEXT['phonebook-attrib1']="Sobrenome";
$TEXT['phonebook-attrib2']="Nome";
$TEXT['phonebook-attrib3']="Telefone";
$TEXT['phonebook-attrib4']="Comando";
$TEXT['phonebook-sure']="Certeza?";
$TEXT['phonebook-head2']="Adicionar dados";
$TEXT['phonebook-button1']="APAGAR";
$TEXT['phonebook-button2']="ADICIONAR";

// ---------------------------------------------------------------------
// ABOUT
// ---------------------------------------------------------------------

$TEXT['about-head']="Sobre o XAMPP";

$TEXT['about-subhead1']="Id�ias e Realiza��es";

$TEXT['about-subhead2']="Design";

$TEXT['about-subhead3']="Colabora��o";

$TEXT['about-subhead4']="Contatos pessoais";

	// ---------------------------------------------------------------------
	// MERCURY
	// ---------------------------------------------------------------------

	$TEXT['mail-head'] = "Mala-direta com o servidor SMTP e POP3 Mercury Mail";
	$TEXT['mail-hinweise'] = "Algumas notas importantes para utilizar o Mercury!";
	$TEXT['mail-adress'] = "Remetente:";
	$TEXT['mail-adressat'] = "Destinat�rio:";
	$TEXT['mail-cc'] = "CC:";
	$TEXT['mail-subject'] = "Assunto:";
	$TEXT['mail-message'] = "Mensagem:";
	$TEXT['mail-sendnow'] = "Esta mensagem ser agora enviada ...";
	$TEXT['mail-sendok'] = "Esta mensagem foi enviada com sucesso!";
	$TEXT['mail-sendnotok'] = "Erro! A mensagem nor pode ser enviada!";
	$TEXT['mail-help1'] = "Notes da utiliza��o do Mercury:<br><br>";
	$TEXT['mail-help2'] = "<ul>
	<li>O servidor Mercury necessita uma conex�o externa na inicializa��o;</li>
	<li>Ao iniciar, o Mercury define o Domain Name Service (DNS) automaticamente como sendo o nome do servidor de seu provedor;</li>
	<li>Para todos os usu�rios de gateway: Por favor, configure seu DNS via TCP/IP (ex. via InterNic com um n�mero de IP 198.41.0.4);</li>
	<li>O arquivo de configura��o do Mercury � denominado MERCURY.INI;</li>
	<li>Por favor, envie uma mensagem para postmaster@localhost ou admin@localhost para testar e verifique o resultado nas pastas: xampp.../mailserver/MAIL/postmaster ou (...)/admin;</li>
	<li>Exixte um usu�rio teste denominado \"newuser\" (newuser@localhost) e com a Senha = wampp;</li>
	<li>Spam e outras obcenidades s�o totalmente proibidas com o Mercury!;</li>
	</ul>";
	$TEXT['mail-url'] = "<a href=\"http://www.pmail.com/overviews/ovw_mercury.htm\" target=\"_top\">http://www.pmail.com/overviews/ovw_mercury.htm</a>";
	$TEXT['mail-note-important'] = "IMPORTANT";
	$TEXT['mail-note-text1'] = "There are three variants for sending emails with PHP. One of these three possibilities have to be activated in the xampp\php\php.ini file.";
	$TEXT['mail-note-text2'] = "<b>mailToDisk</b> (<i>Default</i>) - All emails are written in the xampp\mailoutput folder on local disk. XAMPP mailToDisk is the default and you have nothing to do in the php.ini.";
	$TEXT['mail-note-text3'] = "<b>fakemail</b> - With fakemail (sendmail.exe)) all emails are forwarding to your mailbox. Please edit the xampp\sendmail\sendmail.ini first with your mailbox credentials. And do not forget to activate fakemail (senmail.exe)) in the xampp\php\php.ini.";	
	$TEXT['mail-note-text4'] = "<b>Mercury Mail Server</b> or some other Mail Socket Server on localhost. This option have to be activated in the php.ini also.";

	// ---------------------------------------------------------------------
	// FileZilla FTP
	// ---------------------------------------------------------------------

	$TEXT['filezilla-head'] = "Servidor FTP FileZilla";
	$TEXT['filezilla-install'] = "O Apache <U>n�o</U> � um servidor de FTP ... mas o FTP FileZilla �. Por favor, considere as seguintes refer�ncias.";
	$TEXT['filezilla-install2'] = "No diret�rio principal do xampp, rodar o arquivo de lote \"filezilla_setup.bat\" para configurar. Aten��o: Para o Windows NT, 2000 e XP Profissional, o FileZilla necessita ser instalado como um servi�o.";
	$TEXT['filezilla-install3'] = "Configure o servidor de FTP \"FileZilla\". Utilize-se da interface do FileZilla para configur�-lo, que poder ser acessada pelo arquivo \"FileZilla Server Interface.exe\". Existem dois usu�rios neste exemplo:<br><br>
	A: O usu�rio padr�o \"newuser\" com senha \"wampp\". O diret�rio principal dele � xampp\htdocs.<br>
	B: Um usu�rio an�nimo \"anonymous\" sem senha definida. O diret�rio principal dele � xampp\anonymous.<br><br>
	A interface padr�o � no endere�o de loopback com IP 127.0.0.1.";
	$TEXT['filezilla-install4'] = "O servidor FTP ser� finaliza com o arquivo lote \"FileZillaFTP_stop.bat\". Para o servidor FTP FileZilla sendo utilizado como um servi�o do Windows, por favor se utilize diretamente do arquivo \"FileZillaServer.exe\". Com ele voc� pode configurar todas as op��es de inicializa��o.";
	$TEXT['filezilla-url'] = "<br><br><a href=\"http://filezilla.sourceforge.net\" target=\"_top\">http://filezilla.sourceforge.net</a>";


	// ---------------------------------------------------------------------
	// NAVI SPECIALS SECTION
	// ---------------------------------------------------------------------
	
	$TEXT['navi-specials'] = "Specials";
	
	// ---------------------------------------------------------------------
	// PS AND PARADOX EXAMPLE
	// ---------------------------------------------------------------------

    $TEXT['navi-ps'] = "PHP PostScript";
	$TEXT['ps-head'] = "PostScript Module Example";
	$TEXT['ps-text1'] = "PostScript Module �php_ps� by <a class=blue target=extern href=\"mailto:steinm@php.net\">Uwe Steinmann</a>";
	$TEXT['ps-text2'] = "Tip: To convert PS files to PDF files on win32, you can use <a href=\"http://www.shbox.de/\" target=\"_new\">FreePDF</a> with <a href=\"http://www.ghostscript.com/awki/\" target=\"_new\">GhostScript</a>.";
	
	$TEXT['navi-paradox'] = "PHP Paradox";
	$TEXT['paradox-head'] = "Paradox Module Example";
	$TEXT['paradox-text1'] = "Paradox Module �php_paradox� by <a class=blue target=extern href=\"mailto:steinm@php.net\">Uwe Steinmann</a>";
	$TEXT['paradox-text2'] = "<h2>Reading and writing a paradox database</h2>";
	$TEXT['paradox-text3'] = "More examples you can find in the directory ";
	$TEXT['paradox-text4'] = "Further information to Paradox databases in <a href=\"http://en.wikipedia.org/wiki/Paradox\" target=\"_new\">WikiPedia</a>.";

?>
