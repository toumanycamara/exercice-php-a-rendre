<?php 
do{
    echo"\n";
    echo"\n";
    echo"\n";
echo "1: Afficher tous les livres 
        2:Afficher uniquement les livres disponibles
            3:Compter le nombre total de livres 
                 4: Ajouter un nouveau livre au tableau
                    5:Quitter \n";


     $livres = [
["titre" => "Solution", "Auteur" =>"Ousmane Sonko", "disponible" => true   ],
["titre" => "Une Si Longue Lettre", "Auteur" =>"Mariama Ba", "disponible" => true   ],
["titre" => "Sous L'orage", "Auteur" =>"Seydou Badian", "disponible" => false   ],
["titre" => "Pagne noir", "Auteur" =>"Bernard Dadie", "disponible" => true   ],
["titre" => "L'etranger'", "Auteur" =>"Albert Camus", "disponible" => false   ],
["titre" => "Une vie de Boy", "Auteur" =>"Ferdinand Oyono", "disponible" => true   ]

    ];
     $choix = readline("veuillez choisir : \n");
     switch($choix){
        case 1: echo " Tous les livres :\n";
                foreach ($livres as $value){
                
                echo $value["titre"]." de ". $value ["Auteur"] ."\n" ;
            
                }
                break;
        

                case 2: echo "Les livres diponibles :\n";
                foreach ($livres as $book){
                    if ($book['disponible']== true){
                        echo $book["titre"] . " de " .$book["Auteur"] ;
                        echo "\n";
                    }
                }
                break;

                case 3: echo "Le nombre total de livres : ";
                     echo count($livres);
                     break;

                case 4: echo "Apre ajouts de  livre : ";
                $livres[]=["titre" => "L'enfant Noir", "Auteur" =>"Camara Laye", "disponible" => true ];
                echo count($livres)." livres disponibles \n";
                break;

                case 5: 
                    echo "Au Revoir !\n";
                break;
                default : 
                echo " Choix non disponible ! \n";

     }
     





} while ($choix != 5);

echo "Bibliotheque ferme pour une prochaine fois \n";









?>