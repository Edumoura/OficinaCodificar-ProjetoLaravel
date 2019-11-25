Projeto Codificar
 Desafio de cadastro de orçamento refeito, com a linguagem de programação PHP, o framework Laravel. Foi desenvolvido  na arquitetura MVC, utilizei o Banco de dados mySql, para rodar o programa utilisei o XAMP.

Etapas da criação do projeto

 1 - Criando o prjeto =  composer create-project --prefer-dist "laravel/laravel" codificaroficina  

 2 - baixar dependecias = npm install

 3 Cria arquivo de css e js = npm run dev

 4 - Cria o modelo e a migration = php artisan make:model Orcamento -m

 5 - Cria as tabelas no banco = php artisan migrate

 6 - Cria os controladores = php artisan make:controller ControladorOrcamento --resource

Instruções
 Baixar o programa, criar o banco com nome que esta no arquivo .env(DB_DATABASE=oficinacodificar), Cria as tabelas no banco com php artisan migrate e colacar para rodar no xampp ou php artisan serve do prórprio Laravel no Prompt de comando.