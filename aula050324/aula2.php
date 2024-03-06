<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>
<body>
    <?php
        /*
            1 - Variáveis sempre começam com o símbolo $;
            2 - Variáveis aceitam caracteres acentuados á, õ, ç, etc;
            3 - A linguagem é case sensitive em relação aos nomes.
            4 - Algumas palavras possuem uso reservado (&this por eexmplo);
            5 - Tente atribuir nomes claros e de fácil identificação as variáveis;
            6 - Evite nomes muito curtos ou muito longos.
        */

        echo "Hello, World! <br>";
        print "Hello, World! <br>";

        echo "Hello, World! <br>";
        $varPrint = print "Hello, World! <br>";

        //echo utiliza menos processamento do servidor, em um projeto de pequeno porte não faz muita diferença.
        //Por padrão o print é sempre 1, que dentro do php significa verdadeiro.

        //echo $varPrint;

        // $%var01 = "Errada"; (ERRADA)
        //$1var = "Errada"; (ERRADA)

        //$var_01 = "Correta";
        //echo $var_01;

        //$_var_01 = "Correta";
        //echo $_var_01;
    ?>

    <br>
    <?php
        $varInt = 666;
        echo gettype($varInt);

    ?>
    <br><br>        

    <?php
        $varDouble = 1000.52;
        echo gettype($varDouble);   
    ?>
    <br><br>
    <?php

        $varBoolean = true;
        echo gettype($varBoolean);
    ?>

    <br><br>
    <?php

        $varVetor = array(1, 2, 3, 4, 5, 6);
        echo gettype($varVetor);
    ?>

    <br><br>
    <?php
        $nome = "Thayris";
        $sobrenome = "Souza";

        echo "Muito prazer, $nome $sobrenome";
    ?>
    <br><br>
    <?php
        $nome = "Toirdes"; //sobrescreve o nome anterior, não é possivel "guardar" dois nomes ao mesmo tempo em uma variável simples.
        echo "Muito prazer, $nome $sobrenome";
    ?>

    <br><br>
    <?php
        $var_00 = "Evoluindo: ";
        $var_01 = $var_00."no reconhecimento de variáveis. <br>";

        echo $var_01; //CONCATENANDO VARIAVEIS SEMPRE UTILIZAR " . " NA PROXIMA VARIAVEL2 = VARIAVEL1 . 
    ?>
    <br><br>

    <?php
        $var03 = 2;
        $var04 = 7;
        $var05 = "11.32";
        
        echo ($var03 + $var04); // mostra 2+7 = 9 //Operadores aritméticos. (ADIÇÃO)

    ?>
    <br><br>

    <?php
        echo($var04 ** $var03);//EXPONENCIAÇÃO 1
    ?>

    <br><br>
    <?php
        echo pow($var04, $var03); //EXPONENCIAÇÃO 2 UTILIZANDO POW
    ?>

    <br><br>
    <?php
        echo($var04%$var03); //MODULO 
    ?>

    <br><br>
    <?php
        echo ($var05 - $var03); // PHP faz a subtração de uma string mas não é o correto a se fazer!
    ?>

    <br><br>

    <?php

    //Operadores de Atribuição.

    echo ($var03 += $var04); // += Mesma coisa que somar uma variavel a outra.
    ?> 

    <br>
    <?php
        //echo $pessoaNome;
        //$pessoaNome = "Thayris zoka da silva"; // Atribui um valor a variável.
        //$pessoaNome . $pessoaSobrenome;
    ?>

    <br>
    <?php
        $var03 = 2;
        $var04 = 7;
        $var05 = "11.32";

        echo "<br>".gettype($var03);
    ?>

    <br>
    <?php
        echo "<br>".gettype($var05);

    ?>

    <br>
    <?php

    $var06 = (float)$var05;
    echo "<br>".gettype($var06);

    $varTeste_01 = 33;
    echo "<br>";
    var_dump($varTeste_01);

    ?>

    <br>
    <?php

    $vetorTeste = array("Java", "Python", "JavaScript", "PHP");
    echo "<br>";
    var_dump($vetorTeste);

    ?>

    <br><br>
    <?php
    $linguagens = array(
        array("PHP", "PHP: HyperText PreProcessor"), 
        array("SQL","SQL: Struct Query Language")
    );

    var_dump($linguagens[1][1]);
    ?>


</body>
</html>