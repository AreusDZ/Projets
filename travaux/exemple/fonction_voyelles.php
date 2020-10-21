<?php

	

	function nbr_voyelle($mot){
		    $voyelles=["a","A","e","E","i","I","O","o","u","U"];
            $nombre_voyelle=0; 
           
			foreach($voyelles as $element){
               
                        $nombre_voyelle+=substr_count($mot,$element);
                    }
                    echo $nombre_voyelle;
                }
           
					
	
    $mot=readline("Entre un mot ");
    echo nbr_voyelle($mot);
	
