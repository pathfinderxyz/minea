<h3>Cambiar un Número de Expediente</h3><hr>
  <div class="row">
	<div class="col-md-4">
		
                       <div class="well">
                           <h5><strong>N# de Expediente</strong></h5>
                           <form  method="post" action="?page=camexp"> 
                             <div class="input-group">
                               <input type="text" class="form-control" name="exped" autofocus placeholder="Buscar">

                                  <span class="input-group-btn">
                                     <button class="btn btn-primary" type="submit">
                                       <span class="glyphicon glyphicon-search"></span>
                                     </button>
                                 </span>
                             </div>
                           </form>  
                       </div>
               </div>
                  
       <?php 
             //include ("../errores/mostrar_errores.php");
             include 'coneccion/coneccion.php';

             $n=0;
             $exp=$_POST['exped'];
             $primer=substr($exp,0,1);


             if ($exp == "" or $primer==" ") {
                 echo 
                    "";
                  }
             else {


             $result = pg_query("SELECT * FROM tramite WHERE n_expediente = '$exp' ");

             while ($row=pg_fetch_assoc($result)) {
                $n++;
                $nexp=$row['n_expediente'];
				        $propietario=$row['nombre_solicitante'];
				        $proyecto=$row['tramite'];
            echo 
                "
                 <div class='container'> 
                   <div class='row'>
                     <div class='col-md-6'>
                       <div class='well'>
                         <h3><strong>$nexp</strong><h4></h3><br>
                            <ul class='list-unstyled'>
                                <li><h4><strong>Solicitante: </strong><span class='text-primary'><strong> $propietario </strong></span><h4></li>
                                <li><h4><strong>Trámite: </strong><span class='text-primary'><strong>$proyecto</strong></span><h4></li> 
                             <br>
                                <a href='?page=editexp&numexp=$nexp' class='btn btn-primary' >Editar</a>     
                            </ul> 
                       </div>
                     </div>
                    </div>                
                 </div>
                 
                 
                 
     </div>
   </div>" ;
     
     

              
           }
     if ($n==0) { 
        echo 
              "<div class='container'>
                     <div class='row'>
                         <div class='col-md-4'>
                           <div class='alert alert-danger'>
                              <strong>No se ha encontrado ningun resultado para el expediente '$cedula' </strong>
                           </div>
                         </div>
                     </div> 
               </div>";
        }
          pg_free_result($result);
     }
     ?>       </div>