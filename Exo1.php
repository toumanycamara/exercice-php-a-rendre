<?php 
$produits = ["Ordinateur ","Telephone", "Imprimante","Clavier"];
?>
<ul>
    
        <?php foreach ($produits as $value){
            echo "<li> $value </li><br>";
           
        }
         ?>
    
</ul>
 <?php 
 echo " le nombre total de produits est : ".count($produits);
 
 ?>