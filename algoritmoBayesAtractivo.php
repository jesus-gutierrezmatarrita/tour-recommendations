<?PhP include("conexion.php");?>

<?PhP
//Kevin Picado Quesada
 
$mayor="";
 if(isset($_POST['atractivo'])) {
       $precio=$_POST["precio"];
       $tipoTurista=$_POST["tipoTurista"];
       $tipoClima=$_POST["tipoClima"];
       $señalInternet=$_POST["señalInternet"];
       $lugar=$_POST["lugar"];
        echo $tipoTurista;
      //Cantidad de clases-montaña,playa,ciudad
        $M=5;
      //valores turista
        $P_turista=1/2;
      //valores precio
         $P_precio=1/3;
       //valores clima
        $P_clima=1/3;
        //valores internet
        $P_internet=1/2;
        //valores internet
        $P_lugar=1/7;

      
//precio tipo_turista internet
           //clases montaña,playa,ciudad
          //se realiza la consulta a BD para conocer los n y los nc de cada clase
                //montaña
                $consulta_N_montaña = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'M'");
                $consulta_NC_precio_montaña = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'M' AND precio = $precio");
                $consulta_NC_tipoTurista_montaña = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'M' AND tipo_turista = $tipoTurista");
                $consulta_NC_tipoClima_montaña = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'M' AND tipo_clima = $tipoClima");
                $consulta_NC_señalInternet_montaña = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'M' AND internet = $señalInternet");
                $consulta_NC_lugar_montaña = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'M' AND provincia = $lugar");
               
                $consulta_N_playa = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'P'");
                $consulta_NC_precio_playa = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'P' AND precio = $precio");
                $consulta_NC_tipoTurista_playa = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'P' AND tipo_turista = $tipoTurista");
                $consulta_NC_tipoClima_playa = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'P' AND  tipo_clima = $tipoClima");
                $consulta_NC_señalInternet_playa = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'P' AND internet = $señalInternet");
                $consulta_NC_lugar_playa = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'P' AND provincia = $lugar");

                $consulta_N_ciudad= mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'C'");
                $consulta_NC_precio_ciudad= mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'C' AND precio = $precio");
                $consulta_NC_tipoTurista_ciudad = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'C' AND tipo_turista=$tipoTurista");
                $consulta_NC_tipoClima_ciudad = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'C' AND tipo_clima = $tipoClima");
                $consulta_NC_señalInternet_ciudad = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'C' AND internet = $señalInternet");
                $consulta_NC_lugar_ciudad = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico WHERE tipo_actividad = 'C' AND provincia = $lugar");
                
                //En esta ya se obtiene el valor numerico de n y nc de cada clase  que tiene la consulta en la columna total
                //Clase Montaña
                $row_N_montaña = mysqli_fetch_assoc($consulta_N_montaña);
                $N_montaña= $row_N_montaña["total"];

                $row_NC_precio_montaña = mysqli_fetch_assoc($consulta_NC_precio_montaña);
                $NC_precio_montaña = $row_NC_precio_montaña["total"];

                $row_NC_tipoTurista_montaña = mysqli_fetch_assoc($consulta_NC_tipoTurista_montaña);
                $NC_tipoTurista_montaña = $row_NC_tipoTurista_montaña["total"];

                $row_NC_tipoClima_montaña = mysqli_fetch_assoc($consulta_NC_tipoClima_montaña);
                $NC_tipoClima_montaña = $row_NC_tipoClima_montaña["total"];

                $row_NC_señalInternet_montaña = mysqli_fetch_assoc($consulta_NC_señalInternet_montaña);
                $NC_señalInternet_montaña = $row_NC_señalInternet_montaña["total"];

                $row_NC_lugar_montaña = mysqli_fetch_assoc($consulta_NC_lugar_montaña);
                $NC_lugar_montaña = $row_NC_lugar_montaña["total"];

                //Clase playa
                $row_N_playa = mysqli_fetch_assoc($consulta_N_playa);
                $N_playa = $row_N_playa["total"];

                $row_NC_precio_playa = mysqli_fetch_assoc($consulta_NC_precio_playa);
                $NC_precio_playa = $row_NC_precio_playa["total"];

                $row_NC_tipoTurista_playa = mysqli_fetch_assoc($consulta_NC_tipoTurista_playa);
                $NC_tipoTurista_playa = $row_NC_tipoTurista_playa["total"];

                $row_NC_tipoClima_playa = mysqli_fetch_assoc($consulta_NC_tipoClima_playa);
                $NC_tipoClima_playa = $row_NC_tipoClima_playa["total"];

                $row_NC_señalInternet_playa = mysqli_fetch_assoc($consulta_NC_señalInternet_playa);
                $NC_señalInternet_playa = $row_NC_señalInternet_playa["total"];

                $row_NC_lugar_playa = mysqli_fetch_assoc($consulta_NC_lugar_playa);
                $NC_lugar_playa = $row_NC_lugar_playa["total"];

                //Clase Ciudad
                $row_N_ciudad = mysqli_fetch_assoc($consulta_N_ciudad);
                $N_ciudad = $row_N_ciudad["total"];

                $row_NC_precio_ciudad = mysqli_fetch_assoc($consulta_NC_precio_ciudad);
                $NC_precio_ciudad = $row_NC_precio_ciudad["total"];

                $row_NC_tipoTurista_ciudad = mysqli_fetch_assoc($consulta_NC_tipoTurista_ciudad);
                $NC_tipoTurista_ciudad = $row_NC_tipoTurista_ciudad["total"];

                $row_NC_tipoClima_ciudad = mysqli_fetch_assoc($consulta_NC_tipoClima_ciudad);
                $NC_tipoClima_ciudad = $row_NC_tipoClima_ciudad["total"];

                $row_NC_señalInternet_ciudad = mysqli_fetch_assoc($consulta_NC_señalInternet_ciudad);
                $NC_señalInternet_ciudad = $row_NC_señalInternet_ciudad["total"];

                $row_NC_lugar_ciudad = mysqli_fetch_assoc($consulta_NC_lugar_ciudad);
                $NC_lugar_ciudad = $row_NC_lugar_ciudad["total"];

               
                // se aplica la formula para cada clase P = (nc + mP) / (n + M) / 
                //Para clase montaña
                $P_precio_montaña = ($NC_precio_montaña + $M * $P_precio) / ($N_montaña + $M);
                $P_tipoTurista_montaña = ($NC_tipoTurista_montaña + $M * $P_turista) / ($N_montaña + $M);
                $P_tipoClima_montaña = ($NC_tipoClima_montaña + $M * $P_clima) / ($N_montaña + $M);
                $P_señalInternet_montaña = ($NC_señalInternet_montaña + $M * $P_internet) / ($N_montaña + $M);
                $P_lugar_montaña = ($NC_lugar_montaña + $M * $P_lugar) / ($N_montaña + $M);

                // Para clase playa
                $P_precio_playa = ($NC_precio_playa + $M * $P_precio) / ($N_playa + $M);
                $P_tipoTurista_playa = ($NC_tipoTurista_playa + $M * $P_turista) / ($N_playa + $M);
                $P_tipoClima_playa = ($NC_tipoClima_playa + $M * $P_clima) / ($N_playa + $M);
                $P_señalInternet_playa = ($NC_señalInternet_playa + $M * $P_internet) / ($N_playa + $M);
                $P_lugar_playa = ($NC_lugar_playa + $M * $P_lugar) / ($N_playa + $M);

                // Para clase ciudad
                $P_precio_ciudad = ($NC_precio_ciudad + $M * $P_precio) / ($N_ciudad + $M);
                $P_tipoTurista_ciudad = ($NC_tipoTurista_ciudad + $M * $P_turista) / ($N_ciudad + $M);
                $P_tipoClima_ciudad = ($NC_tipoClima_ciudad + $M * $P_clima) / ($N_ciudad + $M);
                $P_señalInternet_ciudad = ($NC_señalInternet_ciudad + $M * $P_internet) / ($N_ciudad + $M);
                $P_lugar_ciudad = ($NC_lugar_ciudad + $M * $P_lugar) / ($N_ciudad + $M);

               

                 //se realiza la consulta a base de datos para obtener el total de los registros y con esto se divide entre la n ya calculada de cada clase /
                
                $consulta_total_registros = mysqli_query($conexion, "SELECT COUNT(id) as total FROM atractivo_Turistico");
                $row_total_registros = mysqli_fetch_assoc($consulta_total_registros);
                $total_registros = $row_total_registros["total"];

                $P_montaña = $N_montaña / $total_registros;
                $P_playa = $N_playa / $total_registros;
                $P_ciudad = $N_ciudad / $total_registros;
                

                //Se multiplica cada clase segun la fórmula de Bayes.
                $resultado_montaña = $P_montaña * $P_precio_montaña * $P_tipoTurista_montaña * $P_tipoClima_montaña * $P_señalInternet_montaña * $P_lugar_montaña;
                $resultado_playa = $P_playa * $P_precio_playa * $P_tipoTurista_playa * $P_tipoClima_playa * $P_señalInternet_playa * $P_lugar_playa;
                $resultado_ciudad = $P_ciudad * $P_precio_ciudad * $P_tipoTurista_ciudad * $P_tipoClima_ciudad * $P_señalInternet_ciudad * $P_lugar_ciudad;
               
                
               

               //Los resusltados obtenidos se guardan en un arregloElMayor ,para obtener el mayor se utiliza la funcion MAX()
               
                $arregloElMayor = array(3); 
                $arregloElMayor[0] = $resultado_montaña;
                $arregloElMayor[1] = $resultado_playa;
                $arregloElMayor[2] = $resultado_ciudad;
               
                $max = max($arregloElMayor);
                $TemporalMayor="";
                //aqui se verifica cual de los estilos es el mayor
                foreach($arregloElMayor as $TemporalMayor => $val) {
                        if ($val == $max) {
                          if ($TemporalMayor == 0) {
                            $mayor = "Montaña";
                          } else if ($TemporalMayor == 1) {
                            $mayor = "Playa";
                          } else if ($TemporalMayor == 2) {
                            $mayor = "Ciudad";
                          } 
                        }
                      }
                      echo $mayor;
                
 }          

       


?>