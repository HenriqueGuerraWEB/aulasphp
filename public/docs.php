<?php 
echo "<code>";
/**
 * better comments - plugin vscode
 * !atenção
 * TODO: faz ai compass
 * ? mostrar duvidas
 * @param teste Meu teste
*/

/*
    Solamente para varias linhas
    e documentação
    
*/

// Variaveis nunca comecam com numero, sempre letra ou underline

$oi = 'Oi Caralho';
$qualquerMerda = 'FODA-SE';

$completoTexto = $oi . " " . $qualquerMerda . " Entre aspas duplas escrevo como texto";

echo $completoTexto;

echo "<br><br>";

var_dump($qualquerMerda); // valor de string os acentos contam 2 por nao serem um caracter padrao

/**
 * ! Constants - bom para informacoes regionais, salvar em constantes para chamadas tipo nome de user senha.
 * ? define
 */

  define("CURSO", "PHP 8");

  /**
   * 
   * ! TIPOS DE DADOS 10 tipos -  são os valores guardados nas variáveis ou nas funções
   * 
   * ? Tipos Escalares 
   * Boolean(boll)
   * Interger(int)
   * Float(float) *tambem conhecido por double
   * String(string) texto comum
   * 
   * ? Tipos Compostos
   * Array(array)
   * Object(object)
   * Callable(callable)
   * Iterable(iterable)
   *  
   * ? Tipos Especiais
   * Resouce(resource)
   * Null(NULL)
   * 
   * ? Tipos Pseudos
   * Mixed(mixed)
   * Void(void)
   * 
   * ? Funcoes Internas
   * gettype()
   * is_ = is_boll / is_array
   * get_debug_type()
   * 
   */

    $sobre = "Nombre";
    $nome1 = "Glaumo $sobre";
    $nome2 = 'Glaumo $sobre'; // aspas simples nao escreve a variavel vira texto string
    $idade = 50; // mostrando numero int etc sem aspas
    $idadeFloat = 50.5; // float
    $vip = false; // bool
    $aereas = ["GOL", "Latam", "Azul"]; // array
    echo "<br/><br/>";
    echo "$nome1";
    echo "<br/>";
    echo "$nome2";
    echo "<br/><br/>";
    echo gettype($nome1);
    echo "<br/>";
    echo gettype($nome2);
    echo "<br/>";
    echo get_debug_type($nome2);  
    echo "<br/>";
    echo gettype($idade);
    echo "<br/>";
    echo get_debug_type($idade);   
    echo "<br/>";
    echo get_debug_type($idadeFloat);    
    echo "<br/>";
    echo gettype($vip);
    echo "<br/>";
    echo get_debug_type($vip);   
    echo "<br/>";
    echo $aereas[1]; // comeca em zero
    echo "<br/>";
    echo gettype($aereas);
    echo "<br/>";
    echo get_debug_type($aereas);     
     

// Exemplo de classe com o construct

class Cliente {
    public function __construct(public string $nome) {
        echo "<br/><br/>";
        echo $this->nome;
    }
}

$joao = new Cliente("Glaumo Rangel");
echo "<br/>";
echo gettype($joao);
echo "<br/>";
echo get_debug_type($joao); // display nome da classe

/** @param funcao itarable */ 

$linhasAereas = function():iterable { // dois ponto marcam que o resultado da funcao e iterable
    return ["GOL", "Latam", "Azul"];
}; // passando a variavel o bloco da funcao precisa terminar com ponto e virgula 

echo "<br/><br/>";
echo gettype($linhasAereas);
echo "<br/>";
echo get_debug_type($linhasAereas); // display nome da classe
echo "<br/>";
var_dump (is_iterable($linhasAereas)); // pegando o tipo de dado
echo "<br/><br/>";
echo gettype($linhasAereas()); // chamando a funcao()
echo "<br/>";
echo get_debug_type($linhasAereas()); // display nome da classe chamando a funcao()
echo "<br/>";
var_dump (is_iterable($linhasAereas())); // pegando o tipo de dado chamando a funcao()


// CALLABLE

echo "<br/>";
var_dump (is_callable($linhasAereas)); // pegando o tipo de dado metodo is_callable ! posso chamar essa variavel !

// NULL E RESOURCE

$nulo = NULL;

echo "<br/><br/>";
echo gettype($nulo); // chamando a funcao()
echo "<br/>";
echo get_debug_type($nulo); // display nome da classe chamando a funcao()
echo "<br/>";
var_dump (is_iterable($nulo)); // pegando o tipo de dado chamando a funcao()

$arquivo = fopen("./home/henrique/Imagens/ajuda.png", "a+");

echo "<br/><br/>";
echo get_debug_type($arquivo); // display nome da classe chamando a funcao()
echo "<br/>";
var_dump (is_iterable($arquivo)); // pegando o tipo de dado chamando a funcao()

// MIXED -  qualquer tipo de dado

function executar(mixed $nome): void { // void executar subrotina somente retorno de nada
    
}

/**
 * ! Conversao de tipo de dados explicita ou inplicita
 */

$valorConversoesTipo = 1;
$valorConversoesTipoInt *= 2; // vezes *= operador tipo int
$valorConversoesTipoFloat *= 2.5; // vezes *= operador tipo float

echo "<br/><br/>";
var_dump(get_debug_type($valorConversoesTipoInt));
echo "<br/>";
var_dump(get_debug_type($valorConversoesTipoFloat));

$valorConverterTipo = (string) $valorConversoesTipoString; // Forcando aconvercao para variavel receber tipo string 

echo "<br/><br/>";
var_dump(get_debug_type($valorConverterTipo));

// definindo explicitamente um tipo de variavel setytype()

settype($valorConverterTipo, "float"); // convertendo o valor para float

echo "<br/><br/>";
var_dump(get_debug_type($valorConverterTipo));

/**
 * ! Referencias PHP 8
 * como fazer uma variavel ser referente a outro valor
 * Atribuicao
 * Passagem de parametro - funcoes
 * Retorno - funcoes
 */

 $a = 50;
 $b = &$a; // & colocar um apelido na variavel mas o valor sera sempre o mesmo
 $c = $a;
 echo "<br><br>";
 var_dump("a", $a);
 echo "<br>";
 var_dump("b", $b);
 echo "<br>";
 var_dump("b", $c); 
 
 $a = 250;

 echo "<br><br>";
 var_dump("a", $a);
 echo "<br>";
 var_dump("b", $b);
 echo "<br>";
 var_dump("b", $c);

 /**
 * ! Escopo de Variavel
 */

 $hg = "https://henriqueguerra.com.br";

 function exibir() {
    global $hg; // exibe a variavel no escopo global
    echo "<br/><br/>";
    echo $hg;
 }

 exibir();

 /**
 * ! Operadores
 * Atribuicao =,*=,+=,/=,_=,.=
 * Aritimeticos 
 * Precedencia de operadores / ordem sequencia precedencia implicita / parenteses precedencia explicita
 * Comparacao
 * Logicos
 * Bitwise
 * Contrele de erro
 * Execucao
 * Incremento Decremento
 * De String
 * De Array
 * De tipo usado para objetos qual a classe que ele originou
 */ 

 //atribuicao

 $total = 200.00;
 $valorA = $total;
 echo "<br/><br/>";
 echo "TOTAL: " . $total;
 $desconto = 33;
 $formula = $desconto / 100;
 $valorA *= $formula;
 $total -= $valorA;
 echo "<br/>";
 echo "Valor com desconto: " . $total; 
 
 //Aritimeticos
 
 $valor = "10.5"; // string
 $valor = +$valor;
 echo "<br/><br/>";
 var_dump(+$valor); // identidade converte para inteiro
 echo "<br/>";
 var_dump(-$valor); // negacao identidade converte para inteiro
 echo "<br/><br/>";
 var_dump(10 + 2); 
 var_dump(10 - 2);
 var_dump(10 * 2);
 var_dump(10 / 2);
 var_dump(10 % 2);
 var_dump(10 ** 2);     

 // precedencia

 echo "<br/><br/>";
 echo 3 + 5 * 3; // multiplicacao tem prioridade em cima da soma
 echo "<br/>";
 echo (3 + 5) * 3; // soma tem prioridade adicionando os ()

 // Comparacao

 $valorA = 10;
 $valorB = 10.0;
 $valorC = NULL;
 echo "<br/><br/>";
 var_dump($valorA >= $valorB); // true
 echo "<br/>";
 var_dump($valorC ?? "Não ha valor");

//  Logicos

 $aa = 10;
 $bb = 20;
 $cc = 30;
 echo "<br/><br/>";
 var_dump($aa > $bb && $aa > $cc); // falso
 var_dump($aa < $bb || $aa > $cc); // true operador || ou
 var_dump(!($aa < $bb)); // true mas !(---) Inverte a logica entao false


 // Bitwise
 $bitA = 32;
 $bitB = 96;
 $bitQTY = 1;

//  $bitA = $bitA << $bitQTY;
 echo "<br/><br/>";
 echo $bitA;

 echo "<br/><br/>";
 var_dump($bitA & $bitB);

/**
 * "logica soma de bits
 */

// 128 64 32 16 8 4 2 1
//  0  0  1  0  0 0 0 0

// 0010 0000 = 32; bits

// 128 64 32 16 8 4 2 1
//  0  1  1  0  0 0 0 0

// 0010 0000 = 96; bits

// 128 64 32 16 8 4 2 1
//  0  0  1  0  0 0 0 0

// 0010 0000 = 32; bits

// Controle de erro @
//  echo "<br/><br/>";
//  $erroResultado = file("teste") or die ("Erro, Não deu!"); // se nao acontecer mostrar a mensagem


// Execucao
/**
$exeShell = `ls -al`; // comando executado no shell do linux
 $shell = sapi_windows_cp_get(""); // nao sei a do linux
 $exeShell = sapi_windows_cp_conv(
    $sehll, // linux
    65001, // UTF8
    $exeShell
 );
 echo "<br/><br/>";
 echo "<pre>$exeShell</pre>";
 */

// Incremento / Decremento 
 $incre = 10;
 echo "<br/><br/>";
 echo ++$incre * 2; // pos incremento somou mais dois

// string

 $primeiroNome = "João";
 $ultimoNome = "Rangel";
 $nomeCompletoString = $primeiroNome . " " . $ultimoNome;
 
 echo "<br/><br/>";
 var_dump($nomeCompletoString);
 echo "<br/><br/>";
 $txtString = "Lorem ipsum dolor sit amet consectetur adipisicing elit." ;
 $txtString .= "Inventore iste recusandae veritatis optio cum incidunt dolorum illum quia ipsum. Aut nemo laborum magni illum ipsa neque iusto accusamus sequi id."; // nowdoc

 echo $txtString .  "<br/>";

 $txtString2 = <<<HG
 <p>
 $nomeCompletoString
 Lorem ipsum dolor sit amet consectetur adipisicing elit. 
 Quam sed optio dolore est minima natus nihil ut quas, debitis beatae provident! Voluptatem itaque facere iure fugiat reprehenderit odio excepturi dolorem.
 </p>

HG; // qualquer palavra eredoc

 echo $txtString2;

// Array

 $Aa = ["Gol", "Latam", "Azul"];
 $Bb = ["Delta", "Britsh", "American", "Qatar", "Emirates"];

 $Cc = $Aa + $Bb;
 echo "<br/><br/>";
 var_dump($Cc);

 $Dd = [200,50,35];
 $Ee = [2 => 35, 0 => 200, 1 => "50"];
 echo "<br/><br/>";
 var_dump($Dd == $Ee);
 var_dump($Dd === $e);

 // TIPO

 class Carro {

 }

 class Moto {

 }

 $fusca = new Carro();
 
 echo "<br/><br/>";
 var_dump($fusca instanceof Carro);
 var_dump($fusca instanceof Moto);

/**
 * ! if, else, elseif
 */
 $AAa = 10;
 $BBb = --$a;
 if($AAa > $BBb){
    echo "<br/><br/>sim";
 } elseif (!$BBb % 2 === 0) {
    echo "<br/>B não é par";
 } else {
    echo "<br/>Não";
 }
 echo "<br/>";
 echo $AAa > $BBb ? "Sim" : "Não"; // ternario if de uma linha
 echo "<br/>";

 /**
  * ! Switch - Estrutura de controle
  */

 $sNome = "Henrique";

 switch($sNome) {
    case "Teste":
        echo "<br/><br/>";
        echo "Opcao 01 $sNome";
    break;
    case "Henrique":
        echo "<br/><br/>";
        echo "Opcao 02 $sNome";
    break;
    // ultimo da linha nao precisa do break sendo default
    default:
        echo "<br/><br/>";
        echo "....";
 }

 /**
  * ! Match - similar ao switch avalia a identidade
  */

 $msgMatch = "400";

 $retornoMatch = match($msgMatch) {
    200 => "Sucesso", // separado por , ele valida a identidade precisa ser igual o padrao
    "300" => "Redireciona",
    "400" => "Erro",
    default => "Padrao"
 }; // precisa por o ; pq nao é uma funcao
 echo "<br/><br/>";
 var_dump($retornoMatch);

 /**
  * ! While - Loop Laço de repetição
  */

 $valorW = 0; 
 echo "<br/><br/>";

 while((int)date("s") % 2 === 0 ) { // mostrar os segundos do pc // checando se é par
    $valorW++;
 }

 var_dump ($valorW); // quantas vezes o php roda quando virar impar para

 /**
  * ! do-while
  */
 
  do {
     $valorW++;
  } while((int)date("s") % 2 === 0 );
  echo "<br/><br/>";
  var_dump ($valorW); // quantas vezes o php roda o while quando virar impar para

/**
 * ! for - repeticao, condicao para repetir, o que e feito para repetir.
 */

  for ($contF = 0; $contF <= 10; $contF++) {
    echo "<br/><br/>";
    var_dump($contF);
  }

/**
 * ! foreach - For especifico para manipular arrays
 */
  $arrayAereas = ["a" => "Gol","b" => "Latam","c" => "Azul"];
 foreach($arrayAereas as $chave => $arrayAerea) {
    echo "<br/><br/>";
    var_dump($chave, $arrayAerea);
 } 

 foreach($arrayAereas as $arrayAerea) {
    echo "<br/><br/>";
    var_dump(strlen($arrayAerea)); // checar a quantidade de palavras
 } 
 echo "<br/><br/>";
 foreach($_SERVER as $valor) { // $_SERVER colecao interna do php    
    var_dump($valor);
 }
 echo "<br/><br/>";

 /**
  * ! break - finaliza o loop for,foreach,while,do-while,switch
  */
  echo "<br/><br/>";
  $leitura = 20;
  $eof = 250;
  while($leitura <= $eof) {
    if($leitura == 80) {
        echo "<br/>Saindo do loop";
        break;
    }
    $leitura += 20;
    echo $leitura . "<br/>";
  }

  echo "<br/><br/>Fora do While";
  
/**
 * ! Continue
 */
  echo "<br/><br/>";
  for($contContador = 0; $contContador <= 250; $contContador++) {
    if($contContador >= 118 && $contContador <= 240) { // nao mostrar de 118 a 240 pular a regra
        continue;
    }
    echo $contContador . " - ";
  }

/**
 * ! return
 */
 echo "<br/><br/>";
 $AAA = 10;
 echo $AAA;

 function somar() {
    return 99; // para a execucao da funcao
    echo "OK";
 }

 echo somar();

 /** 
  * ! require = faz a inclusao de outro arquivo e executa
  * ! require_once = nao inclue duas vezes e ignorado
  */

 echo "<br/><br/> Comeco require <br/>";
 echo "A";

 require_once "exercicio-01.php"; // chama uma unica vez
 require "exercicio-01.php";
 echo "<br/> Final require <br/>";
 echo "B";

/** 
 * ! include  = 
 * ! include_once = 
 */
 echo "<br/><br/>include include_once<br/>";
 include_once "exercicio-01.php";
 include "exercicio-01.php";

/**
 * ! goto 
*/

//  echo "<br/><br/>GOTO<br/>";
//  var_dump("inicio");
//  goto destino;
//  conteudo:
//  var_dump("Conteúdo");
//  return;
//  destino:
//  var_dump("Teminou");
//  goto conteudo;

/** 
 * ! Sintaxe alternativa = endif;,endwhile; etc
 */

 $valorSint = 100;

 if ($valorSint > 50) : // para abrir
    echo "<br/><br/> A é maior que <strong>50</strong><br/><br/>"; 
 endif; // endif se tivesse HTML

/** 
 * ! Funcoes
 * - Parametros e Argumentos
 * - Return
 * - Recursivas
 * - Variaveis
 * - Funcoes internas
 * - Anonimas
 * - Arrow functions
 * - Funcao geradora
*/

 $num00 = 50;
 function somaFuncao(&$num01, float $num02 = 10) {
    $num01 += $num02;
    echo "<br/>" . $num01;
 }

 somaFuncao($num00, "5.5");
 echo "<br/>";
 somaFuncao( // chamar por nome de parametro
    num02: 30,
    num01: $num00
 );

 echo "<br>Agora fora da funcao: $num00";

 

// return


 function someReturn(float $vlr01, float $vlr02): int { // convertendo para int
   return $vlr01 + $vlr02;
 }

 $resultReturn = someReturn(10, 20);
 echo "<br/><br/>";
 var_dump($resultReturn);
 echo "<br/>"; 

 // Recursiva

 function recursivo($A_a) {
   if($A_a < 100) {
      echo $A_a . " ";
      recursivo(++$A_a);
   }
 }
 echo "<br/><br/>";
 recursivo(0);

// Funcao Variavel

 function someAI($_a, $_b) {
   return $_a + $_b;
 }

   $nomeFuncao = "someAI"; // armazena a funcao em uma variavel
   echo "<br/><br/>";
   echo $nomeFuncao(1, 2);

   // BuiltIn funcoes internas
   echo "<br/><br/>";
   function_exists("strlen");
   echo strlen("HG");

// Anonimas

 $empresa = function($site, $tel) {
   return "https://$site<br>Tel: $tel";
 };
 echo "<br/><br/>";
 echo $empresa("henriqueguerra.com.br", "8196450490");

 function someAnonima($_aa, $_bb, $callback) {
   $callback($_a + $_b);
 }
 $fn = function($resultAnoni){
   echo "<br/><br/>";
   var_dump($resultAnoni);
 };

 someAnonima(5,6, $fn);

// Arrow functions abreavicao para funcoes anonimas
 
 $valR = 10;

 $somaR = fn($abc, $cba) => $abc + $cba * $valR;
 echo "<br/><br/>";
 echo $somaR(10, 25);

// Funcoes geradoras

 function fila() {
   yield "Antonio";
   yield "Djalma";
   yield "Glaumo";
   yield "João";
   yield "Ronaldo";
 }

 echo "<br/><br/>";
 $fila = fila();
 var_dump($fila->current());
 var_dump($fila->next());

/**
 * ! Constantes pre-definidas de erro
 * - Erro reporting
 * - Display Erro
 * - Set Erro Handler
 * - set_exception_handler
 * - try, throw, catch, finally
 */

//  echo "<br/><br/>";
//  var_dump(E_ALL);
//  var_dump(E_STRICT);
//  var_dump(E_NOTICE);
//  var_dump(E_ERROR);

 // erro_reporting()

//  error_reporting(E_ERROR | E_WARNING | E_PARSE); // mostrar erros em nivel de documento 

 // display_erros() ini_set() - funcao para corregir php.ini

//  ini_set("display_errors", 1);
//  echo "<br/><br/>Depois do Erro";

 // Set error handler trigger_error()

 function tratarError() {

 }

//  set_error_handler("tratarError");
// function manipuladorError($errono, $errostr, $errofile, $erroline) {
//    var_dump("Número: " , $errono);
//    var_dump("Mensagem: " , $errostr);
//    var_dump("Arquivo: " , $errofile);
//    var_dump("Linha: " , $erroline);
//  }

//  set_error_handler("manipuladorError");
//  echo "<br/><br/>Depois do Erro 02";

 // set_exception_handler()

//  function manipuladorException($exception) {
//    // var_dump($exception);
//    echo $exception->getMessage()."<br/>";
//    echo $exception->getFile()."<br/>";
//    echo $exception->getLine()."<br/>";
//    echo $exception->getTraceAsString()."<br/>";
//  }

//  set_exception_handler("manipuladorException");
//  echo "<br/><br/>";

//  throw new Exception("Essa e minha excecao!");


 // try, throw, catch, finally
/*
 class SenhaException extends Exception{};

 $nomeTest = "Glaumo";
 $senhaTest = "1234578";

 try {

   if(!$nomeTest) {
      throw new Exception("Preencha seu nome.", 400);
   }
   if(strlen($senhaTest) < 6) {
      throw new SenhaException("Senha fraca.", 400);
   }
   
 } catch(SenhaException $e) { // nao precisa passar a variavel se nao for usar
   echo "Problema na sua senha: " . $e->getMessage();
 } catch(Exception $e) { // nao precisa passar a variavel se nao for usar
   echo $e->getMessage();
 } finally {
   var_dump("Final");
 }

 $exibeErro = fn($error) => throw new Exception($error);

 echo $exibeErro("<br/><br/>Deu erro aqui!");

 echo "<br/><br/>Depois da excecao Final!";
*/

 /**
  * ! Variaveis pre-definidas
  * - Globals
  * - Server
  * - Get
  * - Post
  * - Files
  * - Session
  * - Env
  * - Cokkie
  * - Http response header
  * - argc
  * - argv
  */ 

//   echo "<br/><br/>";
//   var_dump($GLOBALS);

//   echo "<br/><br/>";
//   print_r($SERVER);

   if(isset($_GET["nome"])) {
      echo $_GET["nome"] . "<br/>";
   }

   echo isset($_GET["empresa"]) ? $_GET["empresa"] : "";

   $get = fn($key) => isset($_GET["$key"]) ? $_GET["$key"] : "";

   $idT = ((int)$get("idT") + 1);

   echo "<br/><br/>";
   echo '<a href="?id=' . $idT . '">Próximo</a>'; // captura o click e soma mais um

   echo "<br/><br/>";
   var_dump($_POST["nome"]);
   var_dump($_FILES["arquivo"]);

   echo "<br/><br/>";
   var_dump($_REQUEST);

   echo "<br/><br/>";
   echo "Criando variavel de sessao";

   session_start();
   $_SESSION["empresa"] = "TOTALDESK";

   echo "<br/><br/>";
   echo "<b>Env Variavel</b><br/><br/>";   
   var_dump($_ENV["HOSTNAME"]);

   echo "<br/><br/>";
   echo "<b>Cookie Variavel</b><br/><br/>"; 
   var_dump($_SESSION["empresa"]);
   // descobrir o nome do parametro
   /*
   $f = new ReflectionFunction("setcookie");
   var_dump($f->getParameters());
   exit;
   */
   
   setcookie(
      name: "HGTeste",
      value: "",
      expires_or_options: time()+86400
   );
   var_dump($_COOKIE);   // cookie de sessao

// http_response_header

   echo "<br/><br/>";
   echo "<b>Http response header</b><br/><br/>";    
   file_get_contents("https://www.hcode.com.br/"); // puxando o site
   var_dump($http_response_header);

// argc - captura argv - visualiza | para terminal

   echo "<br/><br/>";
   echo "<b>argc | argv</b><br/><br/>";   
   var_dump($argv);
   if($argc > 1 && $argv[1]=== "--totaldesk"){
      echo "Criando um temas php8<br/>";
   }

/**
 * ! Funcoes para String
 * - echo - funcao
 * - explode - diratamente com string | implode - array
 * - html
 * - trin
 * - number format - vai tratar inteiro para string
 * - print
 * - similar_text
 * - soundex metafone
 * - str_contains
 * - start with / end with
 * - str_pad
 * - str_repeat
 * - str_replace
 * - str_shuffle
 * - str_word_count e strlen
 * - strip_tags
 * - str_pos str_ipos
 * - lowers  - case sensitive
 * - substr
 */

   $msg = 'caixa d\'água';
   echo "<br/><br/>";
   echo addslashes($msg); // adciona slash
   echo "<br/><br/>";
   echo stripslashes($msg); // remove slash

   $msg = "one|two|three";
   echo "<br/><br/>";
   var_dump(explode("|", $msg, -1)); // remove o pipe - exclui o ultimo registro do array
   $msg = ["one", "two","three"];
   echo "<br/><br/>";   
   var_dump(implode("|", $msg)); // adciona o pipe

// HTML string
   $html = '<a href="">Acesse</a>';

   var_dump(htmlentities($html)); // redefine a url omo texto string
   echo "<br/><br/>";  
   echo htmlentities($html, ENT_NOQUOTES); // redefine a url string
   echo "<br/>"; 
// echo $html;

   $db = "&lt;a href=&quot;&quot;&gt;Acesse&lt;/a&gt;";

   echo "<br/>";
   echo html_entity_decode($db); // recupera url

// trin - remove esapacos do texto

   echo "<br/><br/>";
   echo "<b>trin</b><br/><br/>";
   $msg = "         HG          ";
   $msgT = "         
      HG          ";

   var_dump(ltrim($msg)); // remove a esquerda
   echo "<br/>";
   var_dump(rtrim($msg)); // remove a direita
   echo "<br/>";
   var_dump(trim($msg)); // remove tudo
   echo "<br/>";
   var_dump(trim($msgT, " \t\n\r")); // remove tudo espaco tabulacao quebra de linha

// number_format
   echo "<br/><br/>";
   echo "<b>number_format</b><br/><br/>";
   echo number_format(5000.79, 1, ",", "."); // formatando padrao br

// print
   echo "<br/><br/>";
   echo "<b>print</b><br/><br/>";

   print "Mostra na tela printar";

   $formato = "Existem %f animais no %s";
   
   echo "<br/><br/>";
   printf($formato, 50000, "Brasil"); // procura % caracter coringa

// similar_text
   echo "<br/><br/>";
   echo "<b>similar</b><br/><br/>";

   echo similar_text("HG SOLA", "HG LAB", $porcentagem);

   var_dump($porcentagem);

// Soundex e metafone

   echo "<br/><br/>";
   echo "<b>soundex e metafone</b><br/><br/>";

   $original = "Michael";   
   $search = "Maicael";

   var_dump(soundex($original) == soundex($search)); // verifica se a pronuncia é parecida
   echo "<br/>";
   var_dump(metaphone($original) == metaphone($search)); // verifica mais precisa a pronuncia

// str_contains

   echo "<br/><br/>";
   echo "<b>str_contains</b><br/><br/>";   

   $msg = "HG TESTES";
   
   var_dump(str_contains($msg, "TE")); // procura se tem parte do texto

// start with /  end with

   echo "<br/><br/>";
   echo "<b>start with / end with</b><br/><br/>";

   $msg = "Prof Henrique Guerra";

   var_dump(str_starts_with($msg, "Prof")); // busca semelhante 
   echo "<br/>";
   var_dump(str_ends_with($msg, "rra")); // busca semelhante

// str_pad

   echo "<br/><br/>";
   echo "<b>str_pad</b><br/><br/>";

   $nome = "Jorge";
   $email = "teste@teste.com";
   $idade = 30;

   echo str_pad($nome, 30, ".", STR_PAD_BOTH) . "<br/>";
   echo str_pad($email, 30, ".", STR_PAD_BOTH) . "<br/>";
   echo str_pad($idade, 30, ".", STR_PAD_BOTH) . "<br/>";

// str_repeat

   echo "<br/><br/>";
   echo "<b>str_repeat</b><br/><br/>";

   echo str_repeat("Henrique ", 15);

// str_replace

   echo "<br/><br/>";
   echo "<b>str_replace</b><br/><br/>";

   $msg = "https://henriqueguerra.com.br/blog";

   echo str_replace("/blog", "/cursos", $msg, $total); // substitui uma parte do texto

   echo "<br/>";
   echo $total . " afetados!";

// str_shuffle

   echo "<br/><br/>";
   echo "<b>str_shuffle</b><br/><br/>";   

   $msg = "Henrique";

   echo str_shuffle($msg); // embaralha as letras

// str_word_count e strlen

   echo "<br/><br/>";
   echo "<b>str_word_count e strlen</b><br/><br/>"; 

   $msgW = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta, possimus cum earum aut necessitatibus voluptates pariatur ipsam itaque consequuntur. Adipisci consequatur molestiae vel dolorem totam placeat! Aspernatur, commodi consequatur!";

   echo $msgW;
   echo "<br/><br/>";
   echo strlen($msgW) . " Caracteres.";
   echo "<br/>";
   echo str_word_count($msgW) . " Palavras.";

// strip_tags

   echo "<br/><br/>";
   echo "<b>strip_tags</b><br/><br/>"; 

   $comentario = '<strong><a href="#">Lorem ipsum</a>, dolor sit amet consectetur adipisicing elit. Dolorem, odit? Esse voluptates voluptatem velit, mollitia excepturi similique perspiciatis suscipit obcaecati dolorum tenetur eum deserunt aliquid officia aperiam amet nemo laborum.</strong>';

   echo strip_tags($comentario, "<strong>"); // remover formatacao do texto, entre aspas o que vc quer manter no texto

// str_pos

   echo "<br/><br/>";
   echo "<b>str_pos</b><br/><br/>";

   $msg = "TEstes pos";
   echo strpos($msg, "es", 2);
   echo stripos($msg, "te");

// lower

   echo "<br/><br/>";
   echo "<b>Lower</b><br/><br/>";

   $nome = "HENRique Lindão";
   $Nome = "João;Nobre;SOUZa";

   $formatCSV = fn($string, $delemiter = ";") => str_replace($delemiter," ", ucwords(strtolower($string), $delemiter));

   echo strtolower($nome);
   echo "<br/>";
   echo strtoupper($nome);
   echo "<br/>";
   echo mb_strtoupper($nome); // converte caracteres especiais
   echo "<br/>";
   echo ucfirst(strtolower($nome)) . "\n"; // primeira maiuscula todas minusculas
   echo "<br/>";
   echo $formatCSV($Nome) . "\n"; // usando como funcao

// substr

   echo "<br/><br/>";
   echo "<b>substr</b><br/><br/>";

   $string = "https://henriqueguerra.com.br/blog";
   $inicio = strpos($string, "://")+3;

   $dominio = substr($string, $inicio, strlen($string));

   echo substr($dominio, 0, strpos($dominio, "/"));

   function getDomain($url) {

      $inicioF = strpos($url, "://")+3;

      $dominioF = substr($url, $inicioF, strlen($url));
   
      echo substr($dominioF, 0, strpos($dominioF, "/"));

   }
   echo "<br/><br/>";
   echo getDomain("https://henriqueLindao.com.br");


/**
 * ! Funcoes para URL
 * - base64 
 * - get headers
 * - get tags
 * - http build query
 * - parse_url
 */   

// Base 64

   echo "<br/>";
   echo "<b>Base64</b><br/><br/>";

   $msg = 'HGtestes';
   echo "<br/><br/>";
   echo strlen($msg) . "\n";
   echo base64_encode($msg) . "\n";
   echo strlen(base64_encode($msg)) . "\n";
   echo base64_decode("SEd0ZXN0ZXM=");

// get headers

   echo "<br/><br/>";
   echo "<b>get_headers</b><br/><br/>";

   $link = "https://henriqueguerra.com.br";

   print_r(get_headers($link, 1, ));

// get tags

   echo "<br/><br/>";
   echo "<b>get_tags</b><br/><br/>";

   $tags = "https://henriqueguerra.com.br";

   print_r(get_meta_tags($link));


// http build query

   echo "<br/><br/>";
   echo "<b>http build query</b><br/><br/>";   

   $fields = [
      "nome" => "Antonio",
      "sobrenome" => "Abestado"
   ];

   echo '<a href="?'.http_build_query($fields).'">Link</a>';

   echo "<br/><br/>";
   echo http_build_query($fields, '-');

// parse_url

   $url = "https://henrique:123654@henriqueguerra.com.br:5000/blog?extra=abc#home";
   echo "<br/><br/>";
   print_r(parse_url($url));
   echo "<br/>";
   print_r(parse_url($url, PHP_URL_HOST));

// rawurldecode e rawurlencode

   $msg = "Henrique Guerra Araújo";
   echo "<br/><br/>";
   echo rawurlencode($msg);
   echo "<br/>";
   echo rawurldecode($msg);

// urldecode e urlencode - molher prática

   $msg = "Henrique Guerra Araújo";
   echo "<br/><br/>";
   echo urlencode($msg);
   echo "<br/>";
   echo urldecode($msg);

// 

   