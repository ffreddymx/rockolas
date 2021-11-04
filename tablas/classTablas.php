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


                 
}

?>