<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Prova Técnica BDR - Questão 1
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <a class="navbar-brand" href="">Teste de Conhecimentos – BDR Desenvolvimento Organizacional</a>
                </div>

            </div>
        </nav>


        <div class="jumbotron">
            <div class="container">
                <h1> Questão 1</h1>

                <p>Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima “Fizz” em vez do número
                    e para múltiplos de 5 imprima “Buzz”. Para números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.</p>

                <p>

                <form action="" method="post">
                    <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Executar"/>
                </form>
            </div>
        </div>

        <div class="container buzz">
            <?php
            $submit = filter_input(INPUT_POST, 'submit');
            if (!empty($submit) && isset($submit)) {
                for ($index = 1; $index < 101; $index++) {

                    if (($index % 3 == 0) && ($index % 5 == 0)) {
                        echo "FizzBuzz";
                    } else if (($index % 3) == 0) {
                        echo "Fizz";
                    } else if (($index % 5) == 0) {
                        echo "Buzz";
                    } else {
                        echo $index;
                    }
                    echo "<br/>";
                }
            }

            ?>
        </div>
        <footer class="footer">
            <div class="container">
                <p class="text-muted">
                    Desenvolvido por Lucas Ivan Seidenfus (
                    <a href="mailto:lucas.seidenfus@gmail.com?Subject=Teste BDR - Questão 1" target="_blank">lucas.seidenfus@gmail.com</a> /
                    <a href="http://github.com/lucasseid" target="_blank">http://github.com/lucasseid</a>
                    )</p>
            </div>
        </footer>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>