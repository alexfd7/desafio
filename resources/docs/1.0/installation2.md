# Instalação LaraDock

---



- [Linux](#section-3)



<a name="section-3"></a>
##Linux

Uma solução de instalação do projeto utilizando `containers` é o `Laradock`. Que é um ambiente de desenvolvimento PHP completo para o Docker. Para mais informações acessar <a href="https://laradock.io/getting-started/" target="_blank">aqui</a>. Utilizando está solução será instalado um `containers` contendo todos os recursos necessários para o projeto `MySql`, `Nginx` e `PHP`. 



De início crie uma pasta (por exemplo) em `home/` com nome de `desafio`, e baixe o código do projeto

```php
git clone https://github.com/alexfd7/desafio.git 
```
<br>

Entre na pasta raiz do projeto e baixe os códigos do `Laradock`, será adicionado uma nova pasta `/laradock` ao projeto

```php
git clone https://github.com/laradock/laradock.git
```
<br>

Em seguida entre dentro da pasta `/laradock` e copie o arquivo `env-example` para um novo arquivo chamado `.env`

```php
cp env-example .env
```
<br>

Neste arquivo encontrará todas as possíveis opções de configurações do `containers`, as quais o mesmo irá instalar no seu ambiente. Nele encontrará as configurações necessárias ja habilitadas como por exemplo: 
```php
PHP_VERSION=7.3
PHP_FPM_INSTALL_MYSQLI=true
```
<br>

Prestar atenção nas configurações do banco `Laradock`, será usado para configurar o `.env` do projeto `Laradock`.

```php
MYSQL_DATABASE=default
MYSQL_USER=default
MYSQL_PASSWORD=secret
MYSQL_PORT=3306
MYSQL_ROOT_PASSWORD=root
```
<br>

O próximo passo será enviado o comando para a instalação do `container`  e suas configurações mencionadas
```php
docker-compose up -d
```

<br>
Após concluído você conseguirá acessar a pasta raiz do projeto em `Laravel`  da seguinte forma

```php
docker-compose exec workspace bash
```
<br>

Agora precisamos configurar nosso projeto `Laravel`. Altere o `.env` do projeto para configurar as credenciais de acesso do banco de dados `MYSQL`. Citados anteriormente. Use de exemplo o `.env.example`
Após isso vamos instalar as bibliotecas (`vendors`) utilizados no nosso projeto.
```php
composer install
```
<br>

Rode o próximo comando para garantir que todas as classses dentro de nosso projeto estáo carregadas
```php
composer dump-autoload
```
<br>


E por fim rode o `migrations` e seus `seeders` (caso haja) para que as tabelas do banco sejam criadas e populadas. 

```php
php artisan migrate:refresh --seed
```
<br>


 > {info} Acesse o navegador e veja se o projeto foi executado corretamente.



















