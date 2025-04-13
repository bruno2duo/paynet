# Docker
[Como iniciar - Linux]
-- url
Projeto público
Entrar no diretório da pasta onde foi baixado todo o conteúdo do projeto no git
Executar o comando: docker-compose up --build

[Utilização das imagens nginx e MailHog]
- nginx - servidor web, necessário para rodar o framework Laravel;
    - Redirecionamento da porta 9000 para 80 #Interface Web

- MailHog - servidor de e-mail, necessário para realizar teste de envio de e-mail.
    - Redirecionamento da porta 8025 para 8025 #Interface Web
    - Redirecionamento da porta 1025 para 1025 #SMTP

# Acesso
Através do navegador

Laravel: http://localhost:9000 [usuário: admin@teste.com / senha: admin000]
MailHog: http://localhost:8025

# Rotas
[Acesso as rotas]
Para as rotas de API foi implementado o Sanctum para tokenizar o acesso

Para acessar:

POST http://localhost:9000/api/gettoken

Payload
{
    "email" : :email,
    "password" : :senha
}

*RETORNO ESPERADO*
{
    "user": {
        "id": :user_id,
        "name": :name,
        "email": :email,
        "email_verified_at": :email_verified_at,
        "created_at": :created_at,
        "updated_at": :updated_at
    },
    "token": :token
}

Acessar a rota de /user ( Protegida pelo Sanctum )

GET http://localhost:9000/api/user

Passando no header o token retornado na api /gettoken

Authorization Bearer :token

*RETORNO ESPERADO*
{
    "id": :user_id,
    "name": :name,
    "email": :email,
    "email_verified_at": :email_verified_at,
    "created_at": :created_at,
    "updated_at": :updated_at
}