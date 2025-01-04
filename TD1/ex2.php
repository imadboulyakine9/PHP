<?php
$notes = array(    
    "said" => 13,
    "badr" => 16,
    "najat" => 15, 
);


function afficher_notes($table){
    echo "<table>";
foreach ($table as $name => $grade) { // Use more descriptive variable names
    echo "<tr>";
    echo "<td>";
    echo $name;
    echo "</td>";
    echo "<td>";
    echo $grade;
    echo "</td>";
    echo "</tr>";
}
    echo "</table>";
}

afficher_notes($notes);

$notes["karim"] = 10;
unset($notes["said"]);
afficher_notes($notes);
echo max($notes);
echo min($notes);
ksort($notes);
afficher_notes($notes);
arsort($notes);
afficher_notes($notes);
echo array_sum($notes)/count($notes);
?>