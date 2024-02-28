
# Horizon - Bateria de Surf API

API desenvolvida para desafio técnico da Horizon, com o objetivo de fornecer resultados de competições de surf, onde foi solicitado a criação das seguintes funcionalidades:

   - Inserir surfistas
   - Obter todos os surfistas cadastrados
   - Criar novas baterias
   - Obter o vencedor de uma bateria
   - Cadastrar novas ondas em uma bateria
   - Cadastrar novas notas em uma onda
   
E seguindo as seguintes regras de negócios:

   - Uma Nota consiste na média aritmética das 3 notas parciais que a compõem
   - O vencedor de uma Bateria é o Surfista cuja soma das duas maiores Notas for superior à do outro


## Tecnologias utilizadas

![](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
  

![](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white) 
 
 
![](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)  


## Instalação e Deploy Local

#### Clonar o Projeto

```bash
git clone https://github.com/lorenzom89/BateriaSurfAPI_Horizon.git
```

#### Variáveis de Ambiente

Após clonar o projeto, você vai precisar criar o arquivo .env na pasta raiz seguindo o arquivo .env.example, e preencher as seguintes variáveis de acordo com as suas configurações de banco de dados:

`DB_CONNECTION`,
`DB_HOST`,
`DB_PORT`,
`DB_DATABASE`,
`DB_USERNAME`,
`DB_PASSWORD`



#### Os testes de API normalmente são feitos utilizando ferramentas como [POSTMAN](https://www.postman.com/downloads/) ou [INSOMNIA](https://insomnia.rest/download), entretanto, para a documentação, visualização e testes da API, foi utilizado o Swagger. É possivel acessa-lo, após iniciar o servidor, através do link: [http://localhost:8000/api/doc](http://localhost:8000/api/doc)

Após criar e preencher as variáveis de ambiente conforme descrito no passo anterior, será necessário realizar os seguintes comandos na raiz do projeto:

(Obs: É necessário ter o [PHP](https://www.php.net/manual/pt_BR/install.php) e o [Composer](https://getcomposer.org/download/) instalados na sua máquina, o tutorial para instalação está linkado)

#### Instalar as dependencias
```bash
   composer install
```
#### Gerar a chave da aplicação
```bash
   php artisan key:generate
```
#### Criar as tabelas no banco de dados
```bash
   php artisan migrate
```

#### Popular as tabelas com alguns exemplos para teste
```bash
   php artisan db:seed
```

#### Iniciando o servidor
```bash
   php artisan serve
```




