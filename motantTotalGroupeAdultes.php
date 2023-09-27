<?php 

    define( "TARIF_TICKET" , 17);
    
    echo " Saisir le nombre d'adute : " ;
    
    $nbAdulte = fgets ( STDIN ) ;
    
    $Tarif = TARIF_TICKET * $nbAdulte  ;
    
    echo  "Le prix total :"  , $Tarif  , " €\n" ;
    
?>
