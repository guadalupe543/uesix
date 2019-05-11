<?php 
session_start();
class UbiGeo
  {
    public function __construct()
      {
        //Es el acceso al desarrollo local...
        $cn = mysql_connect("localhost","root","");
        mysql_select_db("umb");
        mysql_query("SET NAMES 'UTF8'");
      } 

    public function backup_tables()
      {                     
            $tables = '*';        
          //get all of the tables
          if($tables == '*')
          {
              $tables = array('alumno');  
          }

          
    }     

    


/**********************************************AREA********************************************************/
    public function b_aGlobal($uno) 
      {       
               $buscar = mysql_query("SELECT * FROM alumnos
                             ORDER BY alumno_nombre ASC");
                $cont = 1;
                echo "<label>LISTADO DE ALUMNOS</label><br>";
                while ($reg = mysql_fetch_array($buscar)){
                  echo "<label>$cont.-".$reg['alumno_id']." ".$reg['alumno_matricula']." ".$reg['alumno_nombre']."</label><br>";
                  $cont++;
                }
                
      }           

    
      }
/****************************************************************************************/      

$obUbigeo = new UbiGeo();

  switch ($_GET['accion']) {
    
    
    case 'mostalumnoglobal':
      $obUbigeo->b_aGlobal($_GET['uno']);   
      break;
              
}
?>
