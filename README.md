# Sistema Administrativo - TPI2

**Aluno:** Luiz Vinícius Gazarra Wilsen  
**Trabalho:** Tecnologias para Internet II - Momento I  
**Modalidade:** Individual

## Tema
Sistema Administrativo de Controle de Estoque e Vendas.

## Entidades
1. Usuários
2. Categorias
3. Fornecedores
4. Produtos
5. Clientes
6. Pedidos
7. Itens do Pedido

O banco de dados não é criado neste momento, conforme o enunciado. As páginas já foram planejadas considerando as sete entidades.

## Como executar
1. Instale XAMPP ou outro servidor com PHP.
2. Copie a pasta para `htdocs`.
3. Inicie Apache.
4. Acesse `http://localhost/TPI2_Sistema_Administrativo_Luiz_Vinicius/`.
5. Os formulários enviam dados via `fetch()` para os arquivos PHP e recebem respostas JSON.

## Regras implementadas
- Validação de campos obrigatórios no JavaScript e PHP.
- Validação de e-mail.
- Validação de valores numéricos.
- Cálculo automático do total do pedido.
- Cálculo do estoque após entrada/saída.
- Navegação entre todas as páginas.
- Menu centralizado na página inicial.
- Tag customizada `<tpi2>` dentro dos formulários.
- Tag customizada `<menutpi2>` envolvendo o menu.
