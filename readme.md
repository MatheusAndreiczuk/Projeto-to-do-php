# To-do-list (Lista de afazeres)

Este é um projeto simples de lista de afazeres construído com **HTML**, **CSS**, **JQuery** e **PHP+PDO**, o qual utiliza uma interface simples e intuitiva para:

- Permitir o cadastro e inclusão das tarefas numa lista ordenada por ID, fornecido pelo banco de dados
- Visualização em lista das tarefas, com opções de marcar como concluída, editar a tarefa e excluí-la

---

## Funcionalidades

- Criação de tarefas
- Armazenamento em banco de dados postgreSQL, com ID, descrição e status (tarefa concluída ou não)
- Edição e exclusão das tarefas

---

## Detalhes

- Foram utilizados detalhes feitos em CSS para uma interface intuitiva e agradável, como a descrição da tarefa tachada ao marcar como concluída, scrollbar combinando com o tema e edição de tarefa a partir da descrição atual (sem aparecer um campo vazio para digitar a nova descrição de uma tarefa a ser editada), além de uma imagem de fundo temática

---

## Limitações / futuras correções

- Por vezes é exibido um alert no navegador, devido a um alerta do navegador -> "[Violation] 'load' handler took", o qual indica que uma função de tratamento de eventos (handler) associada ao evento "load" (carregamento da página) levou um tempo excessivo para ser executada.

---

##  Tecnologias utilizadas

- HTML5
- CSS3 
- PHP + PDO
- JQuery e Ajax
- Banco de dados postgreSQL

---

-Interface do projeto:
<img src="https://i.postimg.cc/qMnFX26W/to-do-image.png" alt="Interface">
