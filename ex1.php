<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
</head>
<body>
    <h2>EXERCICIOS EM PHP</h2>
    
    <h4>Atividade 1</h4>
    <p>Desenvolva um código onde seja exibido na tela, de maneira clara para o usuário, o valor de todas as variáveis abaixo após a execução do programa</p>
    <?php
    $a = (float)'2';
    $b = 4;
    $c = 6;
    $m = (($c + $b) / 2) ** (--$c);
    $t = --$c ** ($b + $a);
    $x = --$c + $b;
    $y = $b++ + $a;
    $z = $a - $b--;


    echo "Valor de \$a: $a <br>";
    echo "Valor de \$b: $b <br>";
    echo "Valor de \$c: $c <br>";
    echo "Valor de \$m: $m <br>";
    echo "Valor de \$t: $t <br>";
    echo "Valor de \$x: $x <br>";
    echo "Valor de \$y: $y <br>";
    echo "Valor de \$z: $z <br>";

    $a = (float)$a;
    var_dump($a);
    echo "<br>";
    $b = (double)$b;
    var_dump("$b");
    echo "<br>";
    $c = (string)$c;
    var_dump("$c");
    echo "<br>";
    ?>

    <h4>Atividade 2</h4>

    <?php

    $raio = 6;

    $raio = (float)$raio;

    $perimetro = 2 * M_PI * $raio;

    $area = M_PI * $raio * $raio;

    echo "Raio do perimetro: $raio <br>";
    echo "Perímetro do círculo: $perimetro <br>";
    echo "Área do círculo: $area <br>";

    echo "Tipo do raio:  ". gettype($perimetro) . "<br>";
    echo "Tipo do perimetro:  ". gettype($perimetro) . "<br>";
    echo "Tipo da area: " . gettype($area) . " <br>";

    ?>
    <h4>Atividade 3</h4>
    <?php
    
    $numero1 = 10;
    $numero2 = 2;

    $soma = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;
    $multiplicacao = $numero1 * $numero2;
    $divisao = $numero1 / $numero2;
    $modulo = abs($numero1 - $numero2);
    $resto = $numero1 % $numero2;
    $exponenciacao = $numero1 ** $numero2;
    $media = ($numero1 + $numero2) / 2;
    $raiz = sqrt($soma);

    echo "O primeiro numero eh: $numero1 <br>";
    echo "O primeiro numero eh: $numero2 <br>";

    echo "A Soma eh: $soma <br>";
    echo "A Subtração eh: $subtracao <br>";
    echo "A Multiplicação eh: $multiplicacao <br>";
    echo "A Divisão eh: $divisao <br>";
    echo "O Módulo do sinal da subtração eh: $modulo <br>";
    echo "O Resto da divisão eh: $resto <br>";
    echo "A Exponenciação eh: $exponenciacao <br>";
    echo "A Média eh: $media <br>";
    echo "A Raiz quadrada da soma eh: $raiz <br>";
    
    ?>


    <h4>Atividade 4</h4>

    <?php

    $x=3;

    $parte1 = (2 * ($x ** 2));
    echo "primeira equacao: $parte1 <br>"; // primeira equacao: 18
    $parte2 = (3 * ($x**($x +1))); // segunda equacao: 243
    echo "segunda equacao: $parte2 <br>"; // segunda equacao: 243

    $div1 = ($parte1 - $parte2) / (2 * $x);
    echo "primeira divisao: $div1 <br>"; // primeira divisao: -37.5

    $div2 = (sqrt($x + 1)) / 4;
    echo "segunda divisao: $div2 <br>"; // segunda divisao: 0.5

    $numerador= $div1 + $div2;
    echo "Resultado do numerador: $numerador<br>"; // Resultado do numerador: -37
    
    $denominador = sqrt((4 * $x)+ (2** $x));
    echo "O denominador da equacao eh: $denominador<br>"; // O denominador da equacao eh: 4.4721359549996

    $z = $numerador / $denominador;
    echo "O valor de Z é: $z <br>"; // O valor de Z é: -8.2734515167492
    ?>

    <h4>Atividade 5</h4>
    <?php
    $a = 3;
    $b = 6;
    $c = 9;

    $r = ($a + $b)**2;    
    $s = ($b + $c)**2;

    $d = ($r + $s) / 2;

    echo "O numero eh: $d";
    ?>

</body>
</html>
