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