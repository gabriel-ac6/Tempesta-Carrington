
<?php

   $servidor="localhost";
   $usuario="root";
   $senha="";
   $NomeBD="nasa2";
   
   $conn=mysqli_connect($servidor, $usuario, $senha, $NomeBD);
   
   mysqli_set_charset($conn,$NomeBD);

?>