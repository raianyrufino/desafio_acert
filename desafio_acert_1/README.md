# API do desafio 1 

Repositório da Api do desafio Grupo Acert.

## Instalação 

Clonagem do diretório:
```
git clone https://github.com/raianyrufino/desafio_acert
```

Entre na pasta do projeto:
```
cd desafio_acert/desafio_acert_1
```

Baixe as dependências do projeto via composer:
```
composer update
```

## Configuração
Criação do arquivo de configuração local:
```
cp .env.example .env
```
## Padrão de Projeto

controller -> service

## Etapas de aplicação

Foram criados o UserController e o serviceController. No UserController há o método getUser, onde é passado o nome do usuário a ser pesquisado com parâmetro, este método chama o método get do serviceController, onde estará a lógica da funcionalidade.

Foi criada a view users, nela há um campo para o usuário preencher o nome que deseja buscar, caso exista, será exibido logo abaixo as informações do usuário, caso contrário informará "User not found!".

Foram criadas 2 rotas, uma para a página inicial '/' e outra para buscar o usuário nome informando '/users'. 

Os detalhes informados serão:

Login:
Name:
Url: 
Location: 
Bio: 
Location:
Followers: 
Following:
Public Repositories: 





