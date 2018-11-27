<?php

include 'conecta.php';
 
$modelo =$_POST["modelo"];
$ano =$_POST["ano"];
$placa =$_POST["placa"];
$cliente =$_POST["cliente"];



$sql = "insert into veiculo(modelo,ano,placa,idcliente) 
values('$modelo','$ano','$placa','$cliente')";


   if(mysqli_query($con, $sql)){
        redirect('cadastros/cadastroveiculo?resposta=1');
    } else {
    redirect('cadastros/cadastroveiculo?resposta=2');   
    }  
?>




