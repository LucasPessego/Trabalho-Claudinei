<?php
include "conecta.php";
$Vcodigo =$_POST["idformapagamento"];
$Vnome =$_POST["nomeformapagamento"];

$update= mysqli_query($con,"update formapagamento
 set idformapagamento='$Vcodigo', 
 nomeformapagamento='$Vnome'
where idformapagamento='$Vcodigo'")
 or die ("ERRO");
if ($update != ''){
echo "<script>alert('Forma de pagamento atualizada com Sucesso');</script>";
echo "<script>window.location ='../pesquisas/pesquisaforma';</script>"; 
         
            }					
else{

echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='../pesquisas/pesquisaforma';</script>"; 
            		
				}
?>
