<?php
echo'Olá barnabé.... o ano está acabando......';
echo'<br>';
echo'<h1>Letícia beatriz</h1>';
/*
http://localhost/php/php/index.php
*/

print('<h2> Quinta-feira</h2>');
print('<h2> sexta-feira</h2>');

/* comando que exibe mensagem na tela:

echo
print
print_r

*/

$nome='Letícia';  // tipo variável: text 
$idade=18;   // tipo variável: number
$altura=1.58; // tipo variável: number
$fumante=false;    // tipo variável: boolean
//true - verdadeiro
// false - falso

echo'<br>';
echo $nome . '<br>';
echo $idade .'<br>';
echo $altura .'<br>';
echo $fumante .'<br>';
echo 'Olá ' .  $nome  . ' você tem ' . $idade . ' anos';

echo '<br>';
echo gettype($nome) . '<br>';
echo gettype($idade) . '<br>';
echo gettype($altura) . '<br>';
echo gettype($fumante) . '<br>';

// comando gettype mostra o tipo de dados usado na variável.

echo'<br>';
echo '<h1> Operações</h1>';

$n1= 10;
$n2= 2;

echo $n1 + $n2 . '<br>';
echo $n1 - $n2 . '<br>';
echo $n1 * $n2 . '<br>';
echo $n1 / $n2 . '<br>';
echo $n1 % $n2 . '<br>'; // sobra de valor
echo $n1 ** $n2 . '<br>'; // exponensiação















?>