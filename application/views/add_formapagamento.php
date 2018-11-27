<?php

include 'conecta.php';
 
$nomeformapagamento =$_POST["nomeformapagamento"];


$sql = "insert into formapagamento(nomeformapagamento) 
values('$nomeformapagamento')";



if(mysqli_query($con, $sql)){
      redirect('cadastros/cadastroformapagamento?resposta=1');
    } else {
redirect('cadastros/cadastroformapagamento?resposta=2');     
    }
                   
?>
