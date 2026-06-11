<?php 


$etudiants = [
["nom" => "Aliou", "note" =>15   ],
["nom" => "Fatou", "note" =>8   ],
["nom" => "Awa", "note" =>16   ],
["nom" => "Modou", "note" =>5   ],
["nom" => "Saliou", "note" =>18   ],
    ];


echo" Les notes des etudiants : \n";
foreach ($etudiants as $student){
    
    echo "Nom :".$student["nom"] .  " - " ." Note :".$student["note"] ;
    echo "\n";

}




    $somme = 0;
foreach ($etudiants as $student){
    $somme = $somme + $student['note'];
}
$moyenne = $somme / 5;

    echo"La moyenne de la classe :$moyenne \n";
    
    
 

 
     
    
    $maxnote = $etudiants[0];
foreach ($etudiants as $student){
    if ($student['note']> $maxnote['note']){
         $maxnote = $student;

    }
}
echo "La note la plus eleve est ".$maxnote['note']."\n ";
    



echo "Les eleves quion une note superieur ou egale a 10 sont :";
   
foreach ($etudiants as $student){
    if ($student['note'] >= 10){

        echo  $student ["nom"] ." : ".$student['note'];
        echo"\n";
    }

}

    
    


?>