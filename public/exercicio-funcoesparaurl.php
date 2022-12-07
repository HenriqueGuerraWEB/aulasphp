<?php
/**
 * Exercicio funcao para url
 * TODO: Crie uma variavel $q e armazene uma string que sera usada para realizar uma busca. ex: "Curso de PHP 8"
 * TODO: Crie uma arrow function chamada $busca que receberá um parâmetro de busca, e retornara um kink para buscar no Google. $busca($q) deve retornar:
 */ 

$q = "Curso de PHP 8";

$site = "https://google.com.br/search?";

 echo '<a href=" '. $site .''. urlencode($q) .'">Link</a>';

 echo "<br/><br/>";
 echo http_build_query($fields, '-');
