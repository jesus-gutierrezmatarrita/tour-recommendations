
<?php
class base
{
   public static function conexionn()
   {
      //Carga las credenciales
      //$servername = "163.178.107.10";
      $servername = "remotemysql.com";
      //$username = "Laboratorios";
      $username = "P1D6wYNLRm";
      //$password = "Uy&)&nfC7QqQau.%278UQ24/=%";
      $password = "xcfihNvRKJ";
      //$db = "if7103_tarea2_b65412";
      $db = "P1D6wYNLRm";
      // Create connection
      $conexionn = mysqli_connect($servername, $username, $password, $db);
      // Check connection
      if (!$conexionn) {
         die("Connection failed: " . mysqli_connect_error());
      }
      return $conexionn;
   }
}

?>