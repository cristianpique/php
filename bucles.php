<?php
     $tabla=$_REQUEST["tabla"];	

     for($i=1;$i<=10;$i++){
				$resultado=$i*$tabla;			        

				echo $tabla."x".$i."=".$resultado."</p>";
			   }
?>
