
<?php
 $parcial1=$_POST['parcial1'];
	 $parcial2=$_POST['parcial2'];
	 $parcial3=$_POST['parcial3'];
	 $examenFinal=$_POST['examenFinal'];
	 $trabajoFinal=$_POST['trabajoFinal'];
	 $promedioParciales= ($parcial1 + $parcial2 + $parcial3)/3;
	echo "Nota del parcial 1 :".$parcial1."<br>";
		  echo "Nota del parcial 2 :".$parcial2."<br>";
		  echo "Nota del parcial 3 :".$parcial3."<br>";
		  echo "Nota examen final es:".$examenFinal."<br>";
		  echo "Nota trabajo final es:".$trabajoFinal."<br>";
	 $porcentajeParciales= $promedioParciales*0.35;
	 $porcentajeExamen=$examenFinal*0.35;
	 $porcentajeTrabajo=$trabajoFinal*0.30;
	 $notaFinal=$porcentajeParciales+$porcentajeExamen+$porcentajeTrabajo;
	 
	 	  echo "La nota final es: ".$notaFinal."<br>";
	 
	 if($notaFinal<3){
	      echo "Estudiante reprobado";
	  	}
	 
	 else{
	    echo "Estudiante aprobado";
	  }
?>