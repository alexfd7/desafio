# Instalação Manual

---

- [Linux](#section-1)
- [Windows](#section-2)



<a name="section-2"></a>
## Linux

## Instalação

Como pré-requisito é necessário instalar os seguintes recursos `Mysql`, `Apache`, e a versão `PHP7.3`, assim como `Git` e `Composer`. Utilize o comando `apt-get install < nome-pacote >` para baixar os pacotes necessários. Para o funcionamento do projeto deve estar instalado os seguintes pacotes tambem na versão do `PHP7.3`


```php
sudo apt-get install php7.3-cli libapache2-mod-php7.3 php7.3-mysql php7.3-curl php-memcached php7.3-dev  php7.3-pgsql php7.3-sqlite3 php7.3-mbstring php7.3-gd php7.3-json php7.3-xmlrpc php7.3-xml php7.3-zip php7.3-bcmath php7.3-soap php7.3-intl php7.3-readline
```
<br>
Verifique se no arquivo de configuração do `Apache` usualmente localizado em `/etc/apache2/apache2.conf` , se o mesmo está habilitado com a opção `AllowOverride All`. Com isso as regras dos arquivos `.htaccess` serão aceitas.

```php
...
<Directory /var/www/>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
</Directory>
...
```
<br>

Reinicie o apache caso tenha feito alguma alteração na configuração do `Apache`
```php
/etc/init.d/apache2 restart

sudo a2enmod rewrite
```
<br>

Após configurações anteriores acesse o caminho `xampp/htdocs` e baixe o projeto do `GIT` 

```php
sudo  git clone https://github.com/alexfd7/desafio.git .
```
<br>


Para garantir que todas as pastas e subspastas tenham permissão necessária, execute o comando
```php
sudo chmod -R 777 .
```

<br>

Agora precisamos configurar nosso projeto `Laravel`. Dentro da pasta `/desafio` onde se encontra o projeto instalado, altere o `.env` do projeto para configurar as credenciais de acesso do banco de dados `MYSQL`. Use de exemplo o `.env.example` que se encontra na mesma pasta.


```php
cp .env.example .env
```
<br>

Ainda na pasta raiz do projeto instale as bibliotecas (`vendors`)  que é utilizado no projeto.
```php
sudo  composer install
```
<br>

Após concluído rode o próximo comando para garantir que todas as classes dentro de nosso projeto estão carregadas
```php
sudo  composer dump-autoload
```
<br>


Lembre-se de criar o banco com o mesmo nome que foi colocado no .env, rode o `migrations` e seus `seeders` (caso haja) para que as tabelas do banco sejam criadas e populadas. 

```php
sudo  php artisan migrate:refresh --seed
```
<br>


> {info} Acesse o navegador e veja se o projeto foi executado corretamente.



<a name="section-3"></a>
##Windows

##Instalação
Para o `Windows` será indicado o `XAMPP` (<a href="https://www.apachefriends.org/pt_br/index.html" target="_blank">Download</a>) um pacote que comtempla vários recursos entre eles o `Mysql`, `Apache`, e `PHP`. Será necessário a instação do TortoiseGit ou outro (<a href="https://tortoisegit.org/download/" target="_blank">Download</a> ) e também a instalação do `Composer` (<a href="https://getcomposer.org/download/" target="_blank">Download</a>) baixe o executável e faça sua instalação. Baixe o XAMPP com a versão PHP 7.3 com isso vai garantir que serão instaladas todas as bibliotecas para rodar o projeto. 
<br>

> {warning} Durante o processo de instalação sempre abra o `Cmd` no modo administrador.

Após instalação do `XAMPP` acesse o caminho `xampp/htdocs` e baixe o projeto do `GIT` 

```php
git clone https://github.com/alexfd7/desafio.git
```
<br>

Agora precisamos configurar nosso projeto `Laravel`. Dentro da pasta `/desafio` onde se encontra o projeto instalado, altere o `.env` do projeto para configurar as credenciais de acesso do banco de dados `MYSQL`. Use de exemplo o `.env.example` que se econtra na mesma pasta.
<br>

Abre o `Cmd` navegue até a mesma pasta, e instale as bibliotecas (`vendors`)  que é utilizado no projeto.
```php
composer install
```
<br>

Após concluído rode o próximo comando para garantir que todas as classes dentro de nosso projeto estão carregadas
```php
composer dump-autoload
```
<br>

Lembre-se de criar o banco com o mesmo nome que foi colocado no .env, rode o `migrations` e seus `seeders` (caso haja) para que as tabelas do banco sejam criadas e populadas. 

```php
php artisan migrate:refresh --seed
```
<br>


Por fim no windows existem 2 alternativas, ou inicie o Apache pelo XAMP e acesse o navegador ou suba a aplicação usando o ARTISAN

```php
php artisan serve --port=8080
```


> {info} Acesse o navegador e veja se o projeto foi executado corretamente.
















