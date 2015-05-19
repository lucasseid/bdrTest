# bdrTest

## Questão 1 - Pasta "question1"

Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima
“Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos
de ambos (3 e 5), imprima “FizzBuzz”.

### Solução: 

Função simples com calculo de módulo de 3 e 5.
Layout bootstrap para exibição.

### Instalação
Não há a necessidade de nenhuma dependência.

Apenas coloque a pasta "question1" em um servidor apache funcional com PHP instalado e acesse o arquivo "question1.php".
Siga as instruções na tela.

## Questão 2 - Pasta "question2"

Refatore o código abaixo, fazendo as alterações que julgar necessário.
```php
<?
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
} elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
}
```

### Solução: 

- Função criada para o redirecionamento
- Adequada às regras da psr-2

### Instalação

O código é apenas parcial. O mesmo deve ser aberto em um editor de texto e avaliado.

## Questão 3 - Pasta "question3"

Refatore o código abaixo, fazendo as alterações que julgar necessário.
```php
<?php

class MyUserClass
{
    public function getUserList()
    {
        $dbconn = new DatabaseConnection('localhost','user','password');
        $results = $dbconn->query('select name from user');

        sort($results);

        return $results;
    }
}
```

### Solução: 

- Nova classe criada para armazenar os dados de banco e fazer a criação da instância
- Adequada às regras da psr-2

### Instalação

O código é apenas parcial. O mesmo deve ser aberto em um editor de texto e avaliado.

## Questão 4 - Pasta "question4"

Desenvolva uma API Rest para um sistema gerenciador de tarefas
(inclusão/alteração/exclusão). As tarefas consistem em título e descrição, ordenadas por
prioridade.

Desenvolver utilizando:
    - Linguagem PHP (ou framework CakePHP);
    - Banco de dados MySQL;
Diferenciais:
    - Criação de interface para visualização da lista de tarefas; (Implementado)
    - Interface com drag and drop;
    - Interface responsiva (desktop e mobile); (Implementado)

### Solução: 

- Rest API que suporta operações de List, View, Add, Update e Delete
- Interface para gerênciamento das tarefas
- Interface para teste das requisições JSON na Rest API
- Adequada às regras da psr-2

Desenvolvido em CakePHP 2.6, respeitando o requisito da versão PHP 5.3.

### Requisitos
* HTTP Server. Por exemplo: Apache. Mod_rewrite ativado.
* PHP 5.3 ou superior.
* MySQL

### Instalação

* Colocar a pasta "question4" no servidor
* Importar o arquivo "question4/dbase/bdr_question_4.sql" no PhpMyAdmin ou diretamente no console mysql
* Reconfigurar os dados de acesso a banco no arquivo "question4/app/Config/database.php" adequando "host", "username" e "password"
