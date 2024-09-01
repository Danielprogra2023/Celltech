Documentação da API CellTechVisão GeralA API da CellTech permite que você acesse e gerencie dados relacionados aos produtos de telefonia móvel da loja, assim como realizar operações administrativas e obter informações gerais da loja.URL Basehttps://api.celltech.com/v1Rotas da API1. ADMRota para operações administrativas como gerenciamento de usuários, inventário e configurações.POST /adm/loginDescrição: Autentica um administrador e retorna um token de acesso.Parâmetros:Body:username (string, obrigatório): Nome de usuário do administrador.password (string, obrigatório): Senha do administrador.Exemplo de Requisição:{
  "username": "admin",
  "password": "1234"
}Exemplo de Resposta:{
  "token": "eyJhbGciOiJIUzI1NiIsInR5..."
}Códigos de Status HTTP:200 OK: Sucesso, token retornado.401 Unauthorized: Credenciais inválidas.GET /adm/usersDescrição: Retorna a lista de usuários administradores.Cabeçalho:Authorization (string, obrigatório): Token de acesso.Exemplo de Requisição:GET /adm/users
Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5...Exemplo de Resposta:[
  {
    "id": 1,
    "username": "admin1",
    "email": "admin1@celltech.com"
  },
  ...
]Códigos de Status HTTP:200 OK: Sucesso.401 Unauthorized: Token inválido ou não fornecido.2. OverviewRota para obter informações gerais sobre a loja e suas operações.GET /overview/storeDescrição: Retorna informações gerais da loja.Exemplo de Requisição:GET /overview/storeExemplo de Resposta:{
  "name": "CellTech",
  "location": "Av. Principal, 123, São Paulo, SP",
  "contact": "+55 11 1234-5678",
  "working_hours": "9:00 AM - 7:00 PM"
}Códigos de Status HTTP:200 OK: Sucesso.GET /overview/salesDescrição: Retorna um resumo das vendas realizadas.Cabeçalho:Authorization (string, obrigatório): Token de acesso.Exemplo de Requisição:GET /overview/sales
Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5...Exemplo de Resposta:{
  "total_sales": 150000,
  "monthly_sales": 12000,
  "best_selling_product": "iPhone 14"
}Códigos de Status HTTP:200 OK: Sucesso.401 Unauthorized: Token inválido ou não fornecido.3. ProductRota para gerenciar e acessar informações dos produtos.GET /product/{id}Descrição: Retorna as informações de um produto específico.Parâmetros:Path:id (inteiro, obrigatório): ID do produto.Exemplo de Requisição:GET /product/5Exemplo de Resposta:{
  "id": 5,
  "name": "iPhone 14",
  "brand": "Apple",
  "price": 6999.99,
  "stock": 25
}Códigos de Status HTTP:200 OK: Sucesso.404 Not Found: Produto não encontrado.POST /productDescrição: Adiciona um novo produto ao inventário.Cabeçalho:Authorization (string, obrigatório): Token de acesso.Parâmetros:Body:name (string, obrigatório): Nome do produto.brand (string, obrigatório): Marca do produto.price (número, obrigatório): Preço do produto.stock (inteiro, obrigatório): Quantidade em estoque.Exemplo de Requisição:{
  "name": "Samsung Galaxy S23",
  "brand": "Samsung",
  "price": 4999.99,
  "stock": 30
}Exemplo de Resposta:{
  "id": 6,
  "name": "Samsung Galaxy S23",
  "brand": "Samsung",
  "price": 4999.99,
  "stock": 30
}Códigos de Status HTTP:201 Created: Produto criado com sucesso.400 Bad Request: Parâmetros inválidos ou ausentes.401 Unauthorized: Token inválido ou não fornecido.