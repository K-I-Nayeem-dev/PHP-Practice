<?php

$marks = [
    "A" => [
        "Bangla" => 62,
        "English" => 39,
        "Math" => 40,
    ],
    
    "B" => [
        "Bangla" => 65,
        "English" => 32,
        "Math" => 55,
    ],
    "C" => [
        "Bangla" => 55,
        "English" => 98,
        "Math" => 79,
    ]
    ];

    echo "<table border = 2px solid black; cellspacing = 0;  cellpadding = 10px; >
    <tr>
    <th>Name</th>
    <th>Bangla</th>
    <th>English</th>
    <th>math</th>
    </tr>";

    foreach ($marks as $key => $valueOne){
        echo "<tr>
        <td>$key</td>";

        // print_r($valueOne) ;

        foreach ($valueOne as  $valueTwo) {
            echo "<td>$valueTwo</td>";
        }

        
        "</tr>";
    }

   "</table>";

   echo"<Pre>";
   print_r($marks);
   echo"</Pre>";
    
  
?>