<?php
     /*$edad=16;*/
     $edad=$_REQUEST["edad"];
     
     if(($edad>=18)||($edad<=16)) {
		     echo "Puedes entrar";
		    }
     else {
		echo "No puedes entrar";
	   }
?>
