<?php

/**
 * 
 * TODO: 1. Crie três variáveis para armazenar o seu nome, idade e esporte predileto.
 * 
 * TODO: 2. Crie um array com três tecnologias que você pretende aprender.
 * 
 * TODO: 3. Converta a variável com a idade para string e mostre com var_dump o valor dela antes e depois da conversão.
 * 
 * TODO: 4. Imprima na tela os valores de nome, idade e esporte predileto criados no escopo global por meio de uma função.
 * 
 */

 $nome = "Henrique Guerra";
 $idade = 40;
 $esporte = "Sakate";

 $tecnologias = ["PHP", "JS", "PHYTON"];
 
 echo "<br/>";
 echo $nome . " " . $idade . " " . $esporte;
 echo "<br/><br/>";
 var_dump($tecnologias);
 echo "<br/><br/>";
 var_dump($idade);
 $idade = (string) $idade;
 echo "<br/><br/>";
 var_dump($idade);