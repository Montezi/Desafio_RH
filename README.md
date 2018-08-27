# Desafio_RH
Este desafio consistia em criar um CRUD ( utilizando o framework cakephp 3.6 ou 3.5 + mysql ) para o seguinte cenário:

Uma consultoria de rh deseja cadastrar as vagas de seus clientes.

Cada funcionário da consultoria ficará responsavel por trabalhar em uma ou mais vagas, 
podendo cada vaga ter 1 ou mais funcionários responsaveis
O cadastro de funcionario deverá conter os seguintes campos: nome do funcionario, data de nascimento, cpf.

O cadastro de vagas deverá conter os seguintes campos: titulo, nome do cliente(texto), data de criação e prazo de fechamento em dias.
A tela de cadastrar vaga deverá conter a opção de vincular 1 ou mais funcionarios da consultoria que serão responsaveis por aquela vaga que
está sendo criada.

OBJETOS - Funcionarios, Vagas
NÃO É NECESSÁRIO FAZER A OPÇÃO DE EDITAR DE NENHUM DOS OBJETOS.

### Pré requisitos

* PHP 5.6.0 ou superior(devem ser instaladas as seguintes bibliotecas do PHP: php-mysql,php-intl,php-pdo,php-mbstring e libapache2-mod-php)
* Apache 2.4
* Banco de dados MySQL
* Framework CakePHP 3.6

## Instalação

  * Maiores informações sobre a instalação e configuração do CakePHP: https://book.cakephp.org/3.0/pt/installation.html   
  *  Crie o banco de dados rh e importe e restaure o arquivo rh.sql
  * Para editar a conexão do Banco de Dados acesse o arquivo /rh_desafio/config/app.php e
    edite as seguintes linhas :     

```
   'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => 'localhost',
            /*
             * CakePHP will use the default DB port based on the driver selected
             * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
             * the following line and set the port accordingly
             */
            //'port' => 'non_standard_port_number',
            'username' => 'seu usuário bd',
            'password' => 'sua senha bd',
            'database' => 'rh',
            /*
             * You do not need to set this flag to use full utf-8 encoding (internal default since CakePHP 3.6).
             */
            //'encoding' => 'utf8mb4',
            'timezone' => 'UTC',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,


```
### Testando a aplicação
 * Para testar a aplicação no ambiente de desenvolvimento você pode executar o comando:
 ```
   bin/cake server
 
 ```
  
 * Para acessar a aplicação digite o endereço: http://localhost:8765.
 * Realize o cadastro de alguns funcionários clicando no botão "Novo Funcionário".
 * Após a inserção dos dados, será possível visualizar os dados do Funcionário ou excluir.
 * Para realizar o cadastro das vagas clique no menu acima em "Vagas" e em seguida no botão "Nova Vaga". É necesário que alguns funcionários tenham sido incluídos anteriormente.
 * Após a inclusão das vagas, assim funcionário, será possível visualizar e excluir os dados da vaga.  
 
 ## Licença

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
