# Apolo
Projeto para criação de modulo de registro treinamentos para empresa.


## Tecnologias utilizadas neste projeto
* [PHP](https://www.php.net/)
* [Bootstrap](https://getbootstrap.com/) - HTML5 + CSS3 + JavaScript
* [MySQL](https://www.mysql.com/)

## Requisitos funcionais
 * CRUD
    * Create
    * Read
    * Update
    * Delete
 * MVC
    * Model
    * View
    * Controller


## Historias dos usuarios

* Personas/Colaborador
  * Treinador
      * Colaborador responsavel por executar o treinamento.
  * Participante
      * Colaborador que participou de uma turma sobre um treinamento.
  * Auditor
      * Colaborador do time de RH, responsavel por auditar o processar.
  
* Tem que ter area logada e protegida
  * Treinador
  * Auditor
  
### Ações
* Tenho que salvar algum tipo de logs sobre as alterações.
* O sistema tem que notificar o participante sobre a participacao no treinamento e coletar a confirmacao de presenca dele.
* O sistema devera possibilitar a avaliacao da turma pro parte do participante.
* O sistema devera possibiltiar a avaliacao do participante por parte do treinador.
* A interface tem que ser **mobile first**.
* A interface deve permitir escolher entre tema branco e tema escuro.
* Todas as entidades deverao ser acessiveis via ENDPOINT HTTP (**API**)
  
## Entidades
### Treinamentos
* Possibilitar que o treinador crie novos treinamentos.
* Possibilitar que o treinador modifique treinamentos.
* Possibilitar que o treinador visualize os treinamentos.
* Possibilitar que o treinador delete treinamentos.

### Colaboradores
* Possibilitar criação de colaboradores.
* Possibilitar modificação de colaboradores.
* Possibilitar visualização de colaboradores.
* Possibilitar exclusão de colaboradores.

### Turma
* Possibilitar criação de um turma.
* Possibilitar modificação de um turma.
* Possibilitar visualização de um turma.
* Possibilitar exclusão de um turma.


