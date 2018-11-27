<!DOCTYPE html>
<html>
   <head>
      <script>
         $('body').on('hidden.bs.modal', '.modal', function () {
         			$(this).removeData('bs.modal').find(".modal-content").html("");
         		});
         		
         		
      </script>
   </head>
   <body>
      <b>	<!-- Modal -->
      <div class="modal fade bs-example-modal-lg" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            </div>
         </div>
      </div>
      <?php
         include "menupesquisa.php";
         include "conecta.php";
         
         @session_start();
         $nivel= $_SESSION['nivel']; 
         
         
         if ($nivel=='0') {
             $situacao ='disabled';
         }
             
                 if ($nivel=='1'){
                     $situacao ='enabled';
                 }
         
         ?>
      <section class="content">
         <!-- Basic Examples -->
         <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="card">
                  <div class="header">
                     <div class="panel panel-info">
                        <div class="panel-heading">
                           <center>
                              <h3>
                                 Pesquisa de Estados Cadastrados
                              </h3>
                           </center>
                        </div>
                     </div>
                  </div>
                  <div class="body">
                     <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                           <thead>
                              <tr>
                                 <th>Codigo</th>
                                 <th>Estado</th>
                                 <th>Uf</th>
                                 <th>Opções</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 $sql = "select * from estado order by idestado ASC";
                                 
                                 $editar = mysqli_query($con,$sql);
                                 while ($l = mysqli_fetch_array($editar)){
                                 $Vcodigo = $l['idestado'];  
                                 $Vestado= $l['nome'];
                                 $Vuf= $l['uf'];
                                 
                                 
                                 
                                 
                                 echo "
                                 <tr>
                                 <td> $Vcodigo </td> 
                                 <td align=right> $Vestado</td>
                                 <td align=right> $Vuf</td>
                                 <center>  
                                 <td align=center> <a href =../edita/editaestado?codigo=$Vcodigo data-toggle=modal data-target=#myModal>
                                 <button type='button' class='btn btn-primary btn-xs'$situacao>Visualizar Cadastro</button> </td>  
                                 </a> 
                                 
                                 </tr>
                                 </a>                                   
                                 </tr>
                                 ";
                                 }
                                 ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- #END# Basic Examples -->
         <!-- Exportable Table -->
      </section>
   </body>
</html>