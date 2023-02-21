<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos em PHP</title>
</head>

<body>
  <h1>Teste de números primitivos</h1>
  <h3>Existem três tipos dentre os primitivos: <b>Escalares</b>, <b>Compostos</b> e <b>Especiais.</b> </h3>
  <?php 
  // 0x = hexadecimal 0b = binário 0 = Octal;
  $num = 300;
  echo "O valor da váriavel é: $num";
  var_dump($num);

  echo "<br>";

  $num2 = (float) "700"; // Coerção(cast) para mudar o tipo da váriavel;
  var_dump($num2);

  echo "<br>";

  $casado = true; // No PHP para imprimir na tela o tipo booleano, se for true Aparece 1 e se for false é Vazio;
  // var_dump($casado);
  // Print ou echo a mesma coisa;
  print "O valor de casado é $casado";

  echo "<br>";

  // Tipo primitivo Array;
  $vetor = [2, 4.4, false, "Saviola", true];
  var_dump($vetor);

  echo "<br>";

  // Tipo primitivo Object;
  class Pessoa {
    private string $nome;
  }

  $p = new Pessoa;
  var_dump($p)

  ?>
</body>

</html>