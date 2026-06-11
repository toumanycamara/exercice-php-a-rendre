<?php 

$personnes =[
    [ "nom" => "Ali", "age" => 20 ],
    [ "nom" => "Fatou", "age" => 22],
    [ "nom" => "Moussa", "age" => 30 ],
    
    ];
    echo "Les noms de toutes les personnes:\n";
    foreach ($personnes as $p) {
    echo $p["nom"] ;
    echo "\n";
  }
echo "La personnes la plus agee est :";
$max = $personnes[0];
foreach ($personnes as $p){
    if ($p["age"] > $max["age"]){
        $max = $p;
    }
}




echo $max["nom"]." ( ".$max["age"]." ans )" ;
echo"\n";
echo "Le nombre de personnes :".count($personnes)." personnes";







?>