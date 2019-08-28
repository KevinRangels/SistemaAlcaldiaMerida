<div class="row">
                        <div class="col-md-12">
                            <div class="container">
                             <h3>Documentos</h3>
                            </div>
                        </div>
                    </div>

                     <div class="row">
                    <br>
                    <!-- CEDULA -->
                    <div class="col-md-3 text-center">
                      
                    <div class="card " style="width: 100%; ">
                    <h4 class="card-title">CEDULA</h4>
                    <?php while($doc1=mysqli_fetch_row($documento1)): ?>

                        <img src="../archivos/cedulas/<?php echo $doc1[1]; ?>" style="width:100%; alt="...">
                         <div class="card-body">
                            <a href="../archivos/cedulas/<?php echo $doc1[1]; ?>" class="btn btn-primary">Ver </a>
                            <a class="btn btn-danger" href="?delete_id=<?php echo $doc1[0]; ?>" title="click for delete" onclick="return confirm('sure to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a>
                            <a href="eliminar.php?id=<?php echo $doc1[2];?>">Eliminar
                         </div>
                    </div>
                    <?php endwhile; ?>

                    <!-- PARTIDA DE NACIMIENTO -->

                      
                    <div class="card " style="width: 100%; ">
                    <h4 class="card-title">PARTIDA DE NACIMIENTO</h4>
                    <?php while($doc2=mysqli_fetch_row($documento2)): ?>

                        <img src="../archivos/partidasNacimiento/<?php echo $doc2[1]; ?>" style="width:100%; alt="...">
                         <div class="card-body">
                            <a href="../archivos/partidasNacimiento/<?php echo $doc2[1]; ?>" class="btn btn-primary">Ver </a>
                         </div>
                    </div>
                    <?php endwhile; ?>
                    </div>

                    <div class="col-md-3 text-center">
                    <!-- ACTA DE MATRIMONIO -->
                      
                    <div class="card " style="width: 100%; ">
                    <h4 class="card-title">ACTA MATRIMONIO</h4>
                    <?php while($doc3=mysqli_fetch_row($documento3)): ?>

                        <img src="../archivos/actasMatrimonio/<?php echo $doc3[1]; ?>" style="width:100%; alt="...">
                         <div class="card-body">
                            <a href="../archivos/actasMatrimonio/<?php echo $doc3[1]; ?>" class="btn btn-primary">Ver </a>
                         </div>
                    </div>
                    <?php endwhile; ?>

                    <!-- CEDULA DE INDENTIDAD DE LOS HIJOS -->
                      
                    <div class="card " style="width: 100%; ">
                    <h4 class="card-title">CEDULA DE HIJOS</h4>
                    <?php while($doc4=mysqli_fetch_row($documento4)): ?>

                        <img src="../archivos/cedulaHijo/<?php echo $doc4[1]; ?>" style="width:100%; alt="...">
                         <div class="card-body">
                            <a href="../archivos/cedulaHijo/<?php echo $doc4[1]; ?>" class="btn btn-primary">Ver </a>
                         </div>
                    </div>
                    <?php endwhile; ?>
                    </div>
                    <div class="col-md-3 text-center">
                    <!-- CONSTANCIA DE ESTUDIO -->
                      
                    <div class="card " style="width: 100%; ">
                    <h4 class="card-title">CONSTANCIA DE ESTUDIO</h4>
                    <?php while($doc5=mysqli_fetch_row($documento5)): ?>

                        <img src="../archivos/constanciaEstudio/<?php echo $doc5[1]; ?>" style="width:100%; alt="...">
                         <div class="card-body">
                            <a href="../archivos/constanciaEstudio/<?php echo $doc5[1]; ?>" class="btn btn-primary">Ver </a>
                         </div>
                    </div>
                    <?php endwhile; ?>
                    <!-- CONSTANCIA DE SOLTERIA -->
                      
                      <div class="card " style="width: 100%; ">
                      <h4 class="card-title">CONSTANCIA DE SOLTERIA</h4>
                      <?php while($doc6=mysqli_fetch_row($documento6)): ?>

                          <img src="../archivos/constanciaSoltero/<?php echo $doc6[1]; ?>" style="width:100%; alt="...">
                           <div class="card-body">
                              <a href="../archivos/constanciaSoltero/<?php echo $doc6[1]; ?>" class="btn btn-primary">Ver </a>
                           </div>
                      </div>
                      <?php endwhile; ?>
                    </div>
                    <div class="col-md-3 text-center">
                    <!-- CURRICULUM VITAE -->
                      
                      <div class="card " style="width: 100%; ">
                      <h4 class="card-title">CURRICULUM VITAE</h4>
                      <?php while($doc7=mysqli_fetch_row($documento7)): ?>

                          <img src="../archivos/curriculo/<?php echo $doc7[1]; ?>" style="width:100%; alt="...">
                           <div class="card-body">
                              <a href="../archivos/curriculo/<?php echo $doc7[1]; ?>" class="btn btn-primary">Ver </a>
                           </div>
                      </div>
                      <?php endwhile; ?>

                      <!-- FONDO NEGRO -->
                      
                      <div class="card " style="width: 100%; ">

                      <h4 class="card-title">FONDO NEGRO</h4>
                      <?php while($doc8=mysqli_fetch_row($documento8)): ?>

                          <img src="../archivos/fondoNegro/<?php echo $doc8[1]; ?>" style="width:100%; alt="...">
                           <div class="card-body">
                              <a href="../archivos/fondoNegro/<?php echo $doc8[1]; ?>" class="btn btn-primary">Ver </a>
                           </div>
                      </div>
                      <?php endwhile; ?>

                    </div>