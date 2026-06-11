<?php 

$etudiants =[
    "Ali", "Fatou ","Moussa", "Awa"
];
?>

<table>
    <th>Nom</th>
    <?php 
    foreach($etudiants as $value){
        echo"<tr>
                    <td> $value </td>
                
                </tr>";
    }
    
    ?>
</table>