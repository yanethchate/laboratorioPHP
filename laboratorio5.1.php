<?php
 
 $nombre=$_POST['nombre'];
 $clave=$_POST['clave'];
 $precio=$_POST['precio'];
  
 echo "Nombre del articulo: ".$nombre."<br>";
 echo "Clave de descuento: ".$clave."<br>";
 echo "Precio original del articulo: ".$precio."<br>";
   
 if($clave==1){
  $total=$precio-($precio*0.1);
  echo "Precio con descuento: ".$total."<br>";
 }
 else{
  if($clave==2){
   $total=$precio-($precio*0.2);
   echo "Precio con descuento: ".$total."<br>";
  }
  else{
   echo "La clave No existe..!";
  }
 }

?>