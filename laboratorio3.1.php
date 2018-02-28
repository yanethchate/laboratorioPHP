
<?php
 
 $nombre=$_POST['nombre'];
 $peso=$_POST['peso'];
 $estatura=$_POST['estatura'];
 
 echo "El nombre del paciente es: ".$nombre."<br>";
  echo "El peso del paciente en kilogramos es: ".$peso."<br>";
  echo "La estatura del paciente en metros es:".$estatura."<br>";
 
 $IMC=$peso/($estatura*$estatura);
 echo "El indice de masa corporal del paciente es: ".$IMC."<br>";

 if($IMC<18.5){
  echo "El paciente esta por debajo del peso";
 }
 else{
  if($IMC<24.9){
   echo "El paciente esta saludable";
  }
  else{
   if($IMC<29.9){
    echo "El paciente esta con sobrepeso";
   }
   else{
    if($IMC<39.9){
     echo "El paciente es obeso";
    }
    else{
     echo "El paciente tiene obesidad morbida";
    }
   }
  }
 } 
 
?>