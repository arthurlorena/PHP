<?php
ini_set('display_erros', 1);

//Declaração de um array
$nomes = array("Bento","Breno","Jão P");
$nomesv2 = ["Luana","Henry","Gustavo"];

//Exibe o array inteiro(somente p/ teste)
var_dump($nomes);
echo "<br><br>";

//Exibe o valor que está salvo na posição 2
echo $nomes[2];
echo "<br><br>";

$nomes[] = "Zuanazzi"; //na próxima posição disponível
$nomes[5] = "André"; //em uma posição específica
$nomes[] = "Grou"; //será adicionado na 6º posição
$nomes[4] = "Leticia"; //em uma posição específica

var_dump($nomes);
echo "<br><br>";

//editar um valor do array
$nomes[3] = "Alexandre";

var_dump($nomes);
echo "<br><br>";

//excluir um valor do array
unset($nomes[1]); //excluir a posição 1
//unset($nomes); excluir um array inteiro
var_dump($nomes);
echo "<br><br>";

//Array  com posições personalizadas (apelido)
//"chave" = "valor"
$pessoa = ["Analice", 1.69, 16, false];
echo $pessoa2[
    "nome" = "Larissa",
    "Altura" = 1.63,
    "Idade"= 16,
    "online"= true,
];
echo $pessoa[0];
echo "<br><br>";