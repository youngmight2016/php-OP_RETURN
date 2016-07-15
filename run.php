<?php
require 'OP_RETURN.php';
$OP_RETURN = OP_RETURN_send('LQQMsnLvyK63urH2dUPrjwSSndWi5Wn6R1',0.01,"hello" );
array('txid' => '[send txid]');
$op_return_txid = $OP_RETURN[txid];
echo $op_return_txid;
?>
