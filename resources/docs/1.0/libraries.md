# Extras

---

- [Bibliotecas e Recursos Utilizados](#section-1)

<a name="section-1"></a>
## Bibliotecas e Recursos Utilizados


### LARAVEL
<larecipe-card shadow>
    Utilização do framework Laravel 7.x. Para mais informações acessar <a href="https://laravel.com/docs/7.x/releases" target="_blank">aqui</a>.
</larecipe-card>
COMANDOS UTILIZADOS:

```php
composer create-project laravel/laravel desafio
php artisan key:generate
composer dump-autoload
composer install
php artisan make:middleware AuthToken
php artisan serve --port=8080
```


### MIGRATIONS
<larecipe-card shadow>
    Pra facilitar o controle de versão do seu banco de dados, permitindo que sua equipe modifique e compartilhe o esquema do banco de dados do projeto. Para mais informações acessar <a href="https://laravel.com/docs/7.x/migrations" target="_blank">aqui</a>.
</larecipe-card>
COMANDOS UTILIZADOS:

```php
php artisan make:migration create_users_table --create=users
php artisan make:migration create_documents_table --create=documents
php artisan migrate:refresh --seed
```


### GuzzleHttp
<larecipe-card shadow>
	O Laravel fornece uma API mínima e expressiva em torno do cliente HTTP Guzzle, permitindo que você faça solicitações HTTP de saída rapidamente para se comunicar com outros aplicativos da web. O wrapper do Laravel em torno do Guzzle se concentra nos casos de uso mais comuns e em uma experiência maravilhosa do desenvolvedor. Para mais informações acessar <a href="http://docs.guzzlephp.org/en/stable/request-options.html" target="_blank">aqui</a>.
</larecipe-card>

### LARECIPE
<larecipe-card shadow>    
A documentação utiliada foi proporcionada pela biblioteca chamada LaRecipe. O LaRecipe é simplesmente um pacote orientado a código que fornece uma maneira fácil de criar uma documentação bonita para seu projeto dentro do aplicativo Laravel. Para mais informações acessar <a href="https://larecipe.binarytorch.com.my/docs/2.2/overview" target="_blank">aqui</a>.
</larecipe-card>
COMANDOS UTILIZADOS:

```php
	composer require binarytorch/larecipe
	php artisan larecipe:install
```


### L5-SWAGGER
<larecipe-card shadow>
    Pacote que facilita a documentação das APIS criadas no projeto. Para mais informações acessar <a href="https://github.com/DarkaOnLine/L5-Swagger/" target="_blank">aqui</a>.
</larecipe-card>
COMANDOS UTILIZADOS:

```php
composer require "darkaonline/l5-swagger"
php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
php artisan l5-swagger:generate
```

### PLUGINS FRONT-END
| Tecla  | 			Ação			    |
|   :-   |  :  							|
|   Jquery    |  <a href="https://api.jquery.com/" target="_blank">Documentation</a>	|
|   DataTables 	 |  <a href="https://datatables.net/manual/" target="_blank">Documentation</a> |
|   SweetAlert    |  <a href="https://sweetalert.js.org/docs/" target="_blank">Documentation</a>			|
|   FontAwesome  	 | <a href="https://fontawesome.com/" target="_blank">Documentation</a>		|
|   Bootstrap  	 |  <a href="https://getbootstrap.com/docs/4.1/getting-started/introduction/" target="_blank">Documentation</a> 		|


