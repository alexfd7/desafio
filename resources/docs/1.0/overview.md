# Visão Geral

---

- [Introdução](#section-1)
- [Versionamento](#section-2)
- [Telas e Funcionalidade](#section-3)
- [Padrões e Organização](#section-4)



<a name="section-1"></a>
## Introdução

O projeto foi desenvolvido utilizando a tecnologia `Laravel`, banco `MySQL` , servidor `Apache` e `PHP 7.3`.
Como IDE o `VSCODE` foi adotado.

<a name="section-2"></a>
## Versionamento

Todo o código do projeto foi versionado utilizando a tecnologia `GIT`. O projeto esta disponivel no seguinte repositorio 
<a href="https://github.com/alexfd7/desafio" target="_blank">GitHub</a>


<a name="section-4"></a>
## Telas

Ao abrir o projeto, exibirá a tela principal onde serão listadas todas as notas fiscais que foram importadas. 
Na parte inferior centralizada terá o link de toda a documentação do projeto.
Para atualizar e importar as notas fiscais clique no botão `Atualizar`, o botão está localizado na parte superior esquerda da tela.
![image](/images/tela1.png)

<br>

Após clicar em `Atualizar`, mostrará uma mensagem de confirmação.
![image](/images/tela2.jpg)

<a name="section-4"></a>
## Padrões e Organização

A documentação da regra de negócio foi proporcionada pela biblioteca chamada `LaRecipe` . O `LaRecipe` é simplesmente um pacote orientado a código que fornece uma maneira fácil de criar uma documentação bonita para seu projeto dentro do aplicativo `Laravel`. A documentação da API foi utilizado o `L5-Swagger`,  para ver a documentação completa veja <a href="/api/documentation" target="_blank">Api Documentation</a>.


##BANCO 
Para armazenar as notas ficais e sua informaçoes foi criado uma tabela chamada `documents`
```php
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('access_key');
            $table->longText('xml_base64');
            $table->longText('xml_decode');
            $table->integer('num_nf');  
            $table->decimal('val_nf', 8, 2);
            $table->longText('key_nf');
            $table->timestamps();
        });
```


##PADRÕES e CLASSES 
O projeto foi desenvolvido utilizando padrão MVC nativo do `Laravel`.  Todo o banco e códigos foram adotados o inglês, apenas textos na interface e documentação foi aplicado o português. Uma camada de Repositório com implementação de Interfaces foi implementado deixando o `Controller` mais limpo e permitindo um melhor desacoplamento.
Para a tabela documents foram criados as seguintes entidades:  `Models/Document.php`, `Repositories/DocumentInterface.php` e `Respositories/DocumentRepository.php`

<br>
Para isso foi necessário registrar ao repositório no `Provider/AppServiceProvider.php`:

```php
    public function register()
    {
        $this->app->bind('App\Repositories\DocumentInterface', 'App\Repositories\DocumentRepository');        
    }
```

<br>
Duas classes foram criadas para auxílio nos seguintes aspectos:
     1. RestApi => classe `Helpers/RestApi.php`
     2. Formato Xml => classe `Helpers/XmlNfe.php`

<br>
## ROTAS
Duas rotas foram criadas, `listAll` que direciona para a página principal onde são listadas as notas fiscais importadas e a rota `sincronizeAll` responsável por limpar e importar todas as notas da api para o banco de dados.

```php
Route::get('/', 'DocumentController@listAll')->name('listAll');
Route::get('/sincronizeAll', 'DocumentController@sincronizeAll')->name('sincronizeAll');
```

<br>


## ROTAS APIs
Duas rotas de api, `getDocumentByKey`  que retorna a nota fiscal com todas informaçoes e  `getValueByKey`  que retorna apenas o valor da respectiva nota fiscal. Para ver a documentação completa da API clique <a href="/api/documentation" target="_blank">Api Documentation</a>

```php
Route::get('getDocumentByKey/{key}', 'DocumentController@getDocumentByKey');
Route::get('getValueByKey/{key}', 'DocumentController@getValueByKey');
```

<br>

Por fim um middleware foi criado para criar mecanismos de autenticação simples das APIs. É utilizado uma autenticação simples da API, onde é necessário adicionar um token chamado `AUTH-TOKEN` com o valor definido `uZbZBDSYazUrzarNSxQQ35VIPI5daFJmY3u4jWM47lwwlhcxhdpkU1skp5zX`. Para relizar testes veja <a href="/api/documentation" target="_blank">Api Documentation</a>.

```php
    public function handle($request, Closure $next)
    {
        $token = $request->header('AUTH-TOKEN');
                
        if($token != 'uZbZBDSYazUrzarNSxQQ35VIPI5daFJmY3u4jWM47lwwlhcxhdpkU1skp5zX'){
            return response()->json(['message' => 'Token incorrect or not found!'],401);
        }

        return $next($request);
    }
```




