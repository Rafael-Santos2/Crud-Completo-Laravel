# 🚀 CRUD Completo com Laravel

Este projeto é um **CRUD completo em Laravel** com sistema de autenticação e cadastro de usuários. Ele foi desenvolvido para estudos e prática com o framework, mas pode ser utilizado como base para outros sistemas.

---

## 📌 Funcionalidades

- Cadastro de usuários (aberto ao público)  
- Login e Logout  
- Recuperação de senha  
- Listagem de usuários  
- Edição de dados  
- Exclusão de usuários  
- Proteção de rotas com middleware `auth`  

---

## 🛠️ Tecnologias Utilizadas

- Laravel 10  
- PHP 8+  
- MySQL  
- Bootstrap 5 para o front-end  

---

## ⚙️ Como Rodar o Projeto

1. Clone o repositório:  
   git clone (https://github.com/Rafael-Santos2/Crud-Completo-Laravel)  
   cd nome-do-repo  

2. Instale as dependências:  
   composer install  
   npm install && npm run dev  

3. Configure o arquivo `.env`:  
   cp .env.example .env  

   Ajuste as variáveis de banco de dados conforme sua configuração local:  
   DB_CONNECTION=mysql  
   DB_HOST=127.0.0.1  
   DB_PORT=3306  
   DB_DATABASE=crud_laravel  
   DB_USERNAME=root  
   DB_PASSWORD=  

4. Gere a chave da aplicação:  
   php artisan key:generate  

5. Rode as migrations:  
   php artisan migrate  

6. Inicie o servidor:  
   php artisan serve  

7. Acesse em:  
   http://127.0.0.1:8000  

---

## 👨‍💻 Estrutura de Telas

- **Página inicial**: login e botão para cadastro  
- **Cadastro de usuário**: formulário em 2 colunas com 3 linhas  
- **Área autenticada**: CRUD de usuários (listar, editar e excluir)  

---

## 📸 Prints

## Página Inicial
<img width="1919" height="874" alt="image" src="https://github.com/user-attachments/assets/fca7bcd6-f961-437b-b3b9-457435cf0437" />

## Página de Login
<img width="1919" height="876" alt="image" src="https://github.com/user-attachments/assets/61e91ea6-7305-4371-9a29-4462a79c18e0" />

## Página de Confirmação de Login
<img width="1919" height="877" alt="image" src="https://github.com/user-attachments/assets/11aaedc0-9a29-4c46-961a-d08d5fd212a9" />

## Página de Cadastro
<img width="1919" height="879" alt="image" src="https://github.com/user-attachments/assets/6fbd0435-e3aa-4a2c-b673-3c7487677bb7" />

## Redefinir Senha
<img width="1919" height="875" alt="image" src="https://github.com/user-attachments/assets/5915d8b8-fd01-460e-ba8f-3013ff295776" />





---

## 📄 Licença

Este projeto é open-source e está sob a licença de [Rafael Araujo Santos](LICENSE).
