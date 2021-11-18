<?php

class tablacuerpo{


public static function usuarios($a,$link)
                {
                    echo '<table  class="table table-bordered">';
                    echo "<thead class='thead-dark'> <tr>";
                    echo "<th scope='col' style='display:none;' >"; 
                    echo"</th>";

                foreach($a[0] as $key=>$value){
                            echo'<th>' . ($key) . '</th>';
                        }

                        if($link!=0){
           
                            echo "<th align='center'>Editar</th>";
                            echo "<th align='center'>Eliminar</th>";
                        }
                            echo "</thead>";
                            echo '<tbody>';
                            foreach ( $a as $r ) {
                                    echo '<tr>';
                                    foreach ( $r as $v ) {
                                            echo '<td>'.$v.'</td>';
                        }
                        
        if($link!=0){
            echo "<td align='center'><a class='btn btn-info' href='?controlador=empleados&accion=editar&ID=".$r->ID." '>Editar</a></td>";
            echo "<td align='center'><a class='btn btn-danger' href='?controlador=login&accion=eliminar&ID=".$r->ID." '>Borrar</a></td>";
        }
    }
                    echo "</tr>";
                    echo '</tbody></table>';
                 }


public static function clientes($a,$link)
                {
                    echo '<table  class="table table-bordered">';
                    echo "<thead class='thead-dark'> <tr>";
                    echo "<th scope='col' style='display:none;' >"; 
                    echo"</th>";

                foreach($a[0] as $key=>$value){
                            echo'<th>' . ($key) . '</th>';
                        }

                        if($link!=0){
           
                            echo "<th align='center'>Editar</th>";
                            echo "<th align='center'>Eliminar</th>";
                        }
                            echo "</thead>";
                            echo '<tbody>';
                            foreach ( $a as $r ) {
                                    echo '<tr>';
                                    foreach ( $r as $v ) {
                                            echo '<td>'.$v.'</td>';
                        }
                        
        if($link!=0){
            echo "<td align='center'><a class='btn btn-info' href='?controlador=clientes&accion=buscar&ID=".$r->ID." '>Editar</a></td>";
            echo "<td align='center'><a class='btn btn-danger' href='?controlador=clientes&accion=eliminar&ID=".$r->ID." '>Borrar</a></td>";
        }
    }
                    echo "</tr>";
                    echo '</tbody></table>';
                 }


    public static function producto($a,$link)
                {
                    echo '<table  class="table table-bordered">';
                    echo "<thead class='thead-dark'> <tr>";
                    echo "<th scope='col' style='display:none;' >"; 
                    echo"</th>";

                foreach($a[0] as $key=>$value){
                            echo'<th>' . ($key) . '</th>';
                        }

                        if($link!=0){
           
                            echo "<th align='center'>Editar</th>";
                            echo "<th align='center'>Eliminar</th>";
                        }
                            echo "</thead>";
                            echo '<tbody>';
                            foreach ( $a as $r ) {
                                    echo '<tr>';
                                    foreach ( $r as $v ) {
                                            echo '<td>'.$v.'</td>';
                        }
                        
        if($link!=0){
            echo "<td align='center'><a class='btn btn-info' href='?controlador=producto&accion=buscar&ID=".$r->ID." '>Editar</a></td>";
            echo "<td align='center'><a class='btn btn-danger' href='?controlador=producto&accion=eliminar&ID=".$r->ID." '>Borrar</a></td>";
        }
    }
                    echo "</tr>";
                    echo '</tbody></table>';
                 }
                
                 

    public static function hardware($a,$link)
                 {
                     echo '<table  class="table table-bordered">';
                     echo "<thead class='thead-dark'> <tr>";
                     echo "<th scope='col' style='display:none;' >"; 
                     echo"</th>";
 
                 foreach($a[0] as $key=>$value){
                             echo'<th>' . ($key) . '</th>';
                         }
 
                         if($link!=0){
                             echo "<th align='center'>Editar</th>";
                             echo "<th align='center'>Eliminar</th>";
                         }
                             echo "</thead>";
                             echo '<tbody>';
                             foreach ( $a as $r ) {
                                     echo '<tr>';
                                     foreach ( $r as $v ) {
                                             echo '<td>'.$v.'</td>';
                         }
                         
         if($link!=0){
             echo "<td align='center' width='10px'  ><a class='btn btn-info' href='?controlador=hardware&accion=buscar&ID=".$r->ID." '>Editar</a></td>";
             echo "<td align='center' width='10px'><a class='btn btn-danger' href='?controlador=hardware&accion=eliminar&ID=".$r->ID." '>Borrar</a></td>";
         }
     }
                     echo "</tr>";
                     echo '</tbody></table>';
                  }


                  
    public static function marca($a,$link)
                  {
                      echo '<table  class="table table-bordered">';
                      echo "<thead class='thead-dark'> <tr>";
                      echo "<th scope='col' style='display:none;' >"; 
                      echo"</th>";
  
                  foreach($a[0] as $key=>$value){
                              echo'<th>' . ($key) . '</th>';
                          }
  
                          if($link!=0){
                              echo "<th align='center'>Editar</th>";
                              echo "<th align='center'>Eliminar</th>";
                          }
                              echo "</thead>";
                              echo '<tbody>';
                              foreach ( $a as $r ) {
                                      echo '<tr>';
                                      foreach ( $r as $v ) {
                                              echo '<td>'.$v.'</td>';
                          }
                          
          if($link!=0){
              echo "<td align='center' width='10px'  ><a class='btn btn-info' href='?controlador=marca&accion=buscar&ID=".$r->ID." '>Editar</a></td>";
              echo "<td align='center' width='10px'><a class='btn btn-danger' href='?controlador=marca&accion=eliminar&ID=".$r->ID." '>Borrar</a></td>";
          }
      }
                      echo "</tr>";
                      echo '</tbody></table>';
                   }


                   public static function color($a,$link)
                   {
                       echo '<table  class="table table-bordered">';
                       echo "<thead class='thead-dark'> <tr>";
                       echo "<th scope='col' style='display:none;' >"; 
                       echo"</th>";
   
                   foreach($a[0] as $key=>$value){
                               echo'<th>' . ($key) . '</th>';
                           }
   
                           if($link!=0){
                               echo "<th align='center'>Editar</th>";
                               echo "<th align='center'>Eliminar</th>";
                           }
                               echo "</thead>";
                               echo '<tbody>';
                               foreach ( $a as $r ) {
                                       echo '<tr>';
                                       foreach ( $r as $v ) {
                                               echo '<td>'.$v.'</td>';
                           }
                           
           if($link!=0){
               echo "<td align='center' width='10px'  ><a class='btn btn-info' href='?controlador=color&accion=buscar&ID=".$r->ID." '>Editar</a></td>";
               echo "<td align='center' width='10px'><a class='btn btn-danger' href='?controlador=color&accion=eliminar&ID=".$r->ID." '>Borrar</a></td>";
           }
       }
                       echo "</tr>";
                       echo '</tbody></table>';
                    }
 



                    public static function rockola($a,$link)
                    {
                        echo '<table  class="table table-bordered">';
                        echo "<thead class='thead-dark'> <tr>";
                        echo "<th scope='col' style='display:none;' >"; 
                        echo"</th>";
    
                    foreach($a[0] as $key=>$value){
                                echo'<th>' . ($key) . '</th>';
                            }
    
                            if($link!=0){
                                echo "<th align='center'>Editar</th>";
                                echo "<th align='center'>Eliminar</th>";
                            }
                                echo "</thead>";
                                echo '<tbody>';
                                foreach ( $a as $r ) {
                                        echo '<tr>';
                                        foreach ( $r as $v ) {
                                                echo '<td>'.$v.'</td>';
                            }
                            
            if($link!=0){
                echo "<td align='center' width='10px'  ><a class='btn btn-info' href='?controlador=rockola&accion=buscar&ID=".$r->ID." '>Editar</a></td>";
                echo "<td align='center' width='10px'><a class='btn btn-danger' href='?controlador=rockola&accion=eliminar&ID=".$r->ID." '>Borrar</a></td>";
            }
        }
                        echo "</tr>";
                        echo '</tbody></table>';
                     }



     public static function renta($a,$link)
                     {
                         
                         echo '<table  class="table table-bordered">';
                         echo "<thead class='thead-dark'> <tr>";
                         echo "<th scope='col' style='display:none;' >"; 
                         echo"</th>";
     
                     foreach($a[0] as $key=>$value){
                                 echo'<th>' . ($key) . '</th>';
                             }
     
                             if($link!=0){
                                 echo "<th align='center'>Editar</th>";
                                 echo "<th align='center'>Eliminar</th>";
                             }
                                 echo "</thead>";
                                 echo '<tbody>';
                                 foreach ( $a as $r ) {
                                         echo '<tr>';
                                         foreach ( $r as $v ) {
                                                 echo '<td>'.$v.'</td>';
                             }
                             
             if($link!=0){
                 echo "<td align='center' width='10px'  ><a class='btn btn-info' href='?controlador=renta&accion=buscar&ID=".$r->ID." '>Editar</a></td>";
                 echo "<td align='center' width='10px'><a class='btn btn-danger' href='?controlador=renta&accion=eliminar&ID=".$r->ID." '>Borrar</a></td>";
             }
         }

                         echo "</tr>";
                         echo '</tbody></table>';
                      }








}

?>