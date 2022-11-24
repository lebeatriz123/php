<?php
//O maia adora vender figurinhas de pokemon 
//ele tem 420 figurinhas repetidas
// ele está vendendo cada figurinhas por r$ 2 cada
// quanto eu vai ganhar se vender 305 figurinhas?
// quanto ele ainda pode lucrar com elas?

$totalfigurinhas = 420;

$vendidas= 305;

$lucro = $vendidas * 2;

$sobraram = ($totalfigurinhas - $vendidas) * 2;



echo 'Quanto ele vai ganhar se vender 305 figurinhas? R$' . $lucro;

echo '<br>';

echo 'Quanto ele ainda pode lucrar com elas? R$' . $sobraram;

?>