<?php

//Função sem parâmetro e sem retorno
function saudacao() {
    echo "<h1> Bem Vindo(a)!</h1>";
}

//Função com parâmetro e sem retorno
function saudacaoV2($nome, $adj){
  echo "<h2>Olá $nome</h2>";
  echo "<h2>Você é muito $adj</h2>";
  echo "<hr>";
}


saudacao(); //chamndo a função
saudacaoV2("Larissa", "Bonita");
saudacaoV2("Ana jú", "gostosa");
saudacaoV2("Leticia", "incrivel");

//Função sem parâmetro e com retorno
function dataAtual(){
    return date("d/m/Y");
}

echo dataAtual();

//Função com parâmetro e com retorno
function hipotenusa(int|float $c1, int|float $c2):float{
  //hip² = $c1² + $c2²
    return sqrt(pow($c1,2)+ pow($c2,2));
}
echo "<br>";
echo hipotenusa("3",4);

//Arrow Functions(Funções de Setas)
$hipotenusaV2 = fn($c1, $c2) =>
sqrt(pow($c1,2)+ pow($c2, 2));

echo "<h1> A hipotenusa é"
.$hipotenusaV2(8,22)."<h1>";