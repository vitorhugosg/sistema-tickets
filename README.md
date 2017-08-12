<h1># TESTE taller</h1>




<h2>Segue modo de instalação:</h2><br>
<h3>
	PASSO 1
</h3>


<p>
	Primeiramente vamos baixar os arquivos que estão aqui no projeto para sua pasta:
</p>

<ul>
	<li>Exemplo 1:</li>
	<p>
		$ git clone https://github.com/vitorhugosg/sistema-tickets.git
	</p>
	<li>Exemplo 2</li>
	<p>
		Download do arquivo no botão Clone Or Download, fazer download do arquivo ZIP.
	</p>
</ul>

<h3>PASSO 2</h3>
<br>
- .HTACCESS:<br>
<br>
RewriteEngine On<br>
RewriteCond %{REQUEST_FILENAME} !-f<br>
RewriteCond %{REQUEST_FILENAME} !-d<br>
RewriteRule ^(.*)$ *DIRETORIO DO SEU PROJETO*/index.php?q=$1 [QSA,L]<br>
<br>
<p>
	Mudar DIRETORIO DO SEU PROJETO para a pasta em que está seu projeto.
</p>

<ul>
	<li>
		Exemplo <i>Localhost</i>
	</li>
	<p>
		RewriteEngine On<br>
		RewriteCond %{REQUEST_FILENAME} !-f<br>
		RewriteCond %{REQUEST_FILENAME} !-d<br>
		RewriteRule ^(.*)$ /teste/index.php?q=$1 [QSA,L]<br>
	</p>

	<li>Exemplo <i>http://teste.io</i></li>
	<p></p>
	<p>
		RewriteEngine On<br>
		RewriteCond %{REQUEST_FILENAME} !-f<br>
		RewriteCond %{REQUEST_FILENAME} !-d<br>
		RewriteRule ^(.*)$ /index.php?q=$1 [QSA,L]<br>
	</p>
</ul>
<h4>PASSO 3</h4>
- ALTERAR CONFIG.PHP

<p>Fazer conexão com seu banco de dados. </p>

<ul>
	<li>Exemplo:</li>
	<p>
		if(ENVIRONMENT == 'development') {<br>
			$config['dbname'] = 'teste';<br>
			$config['host'] = 'localhost';<br>
			$config['dbuser'] = 'root';<br>
			$config['dbpass'] = 'root';<br>
		} else {<br>
			$config['dbname'] = 'teste';<br>
			$config['host'] = 'localhost';<br>
			$config['dbuser'] = 'root';<br>
			$config['dbpass'] = 'root';<br>
		}<br>
	</p>
</ul>

<p>Definir BASE_URL com valor padrão da sua URL.</p>

<ul>
	<li>Exemplo:</li>
	<p>
		define( BASE_URL , 'http://SUAURL.IO/');
	</p>
	<li>Exemplo Localhost</li>
	<p>
		define( BASE_URL , 'http://localhost/teste');
	</p>
</ul>

<h4>PASSO 4</h4>
<br>
- MySQL<br>
<br>
Importe o arquivo teste.sql para seu banco de dados.<br>
<br>

<h4>Informações adicionais</h4>

- PHP 5.3 >= *<br>
MySQL<br>

<br>
Sistema de tickets, ainda sendo implementada algumas alterações
Cadastro sendo feito ainda somento de Usuarios.<br>
<br>

Senha de admin:<br>
admin@admin.com<br>
teste<br>
<br>
Explicação:<br>
<br>
Esse sistema de ticket serve para o usuario fazer um pedido de suporte e o mesmo receber resposta do ADMIN do sistema.<br>

Implementando 
<br>
Em desenvolvimento...<br>
<br>
Código livre para adptar e estudar.<br>

