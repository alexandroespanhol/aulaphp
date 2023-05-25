<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sitaxe.php</title>
</head>
<body>
    <?php
echo "Olá";
echo "<h1>PHP - Estudando</h1>";
print("<h3>Aula 02</h3>");
print_r("Vamos estudar!!!");

echo "<h3>Mensagem</h3>";
echo 9.99;

$nome = "alexandro"; //texto =
$idade = "46";//numerico inteiro =
$altura = "1.80";//numerico decimal = 
$fumante = "falso";//booleano =
echo gettype($nome);
echo gettype($nome) . "<br>";
echo gettype($idade) . "<br>";
echo gettype($altura) . "<br>";
echo gettype($fumante) . "<br>";

echo $nome;
echo "<br>";
Echo $nome . $idade;
echo "<br>";
echo $nome . ".". $idade . "<br>";
echo "nome" . $nome . "<br>";
echo "nome: $nome <br>";
echo 'nome: $nome <br>';

echo "<h1>Operaçoes</h1>";
$n1 = 10;
$n2 = 2;
echo $n1+$n2;
echo "<br>";
echo "$n1 + $n2 =" . $n1+$n2 . "<br>";
echo $n1 - $n2 . "<br>";
echo $n1 * $n2 . "<br>";
echo $n1 / $n2 . "<br>";
echo $n1 % $n2 . "<br>";
echo $n1 ** $n2 . "<br>"; 
?>
</body>
</html>