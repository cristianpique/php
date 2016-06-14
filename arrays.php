<?php
     $carro=array("llibres"=>10.30,"cd"=>7.50,"roba"=>18.20,"menjar"=>23.52,"instruments"=>30.44);

     $carro["camara"]=25.20;

     echo count($carro)."</p>";

     $totalcomanda=0;
     
     foreach($carro as $producte=>$preu ) {					

		 			echo $producte. "=".$preu. "</p>";

					$totalcomanda+=$preu;
					
					unset($item);
			 	   }

				   echo "Preu Comanda: ".round($totalcomanda,2)."</p>";
				   
				   echo "IVA(21%): ".round(($totalcomanda*0.21),2)."</p>";

				   echo "Total Comanda: ".round(($totalcomanda*1.21),2);
?>
