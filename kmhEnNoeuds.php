<?php 
    
    
    echo" Saisir la vitesse en km/h : " ;
    $vitesseNoeuds = fgets ( STDIN ) ;
    
    $vitesseNoeuds =  $vitesseNoeuds / 1.852 ;
    
    echo " Résultat de la convrsion : " , $vitesseNoeuds , " Noeuds\n" ;
    
?>
    
   
