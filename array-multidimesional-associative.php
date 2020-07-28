<?php 

$marks = [

   "Krishna" => ["Physics" =>85,"Maths" =>78,"Camistry" =>89],
   "Salman" => ["Physics" =>68,"Maths" =>73,"Camistry" =>79],
   "mohan" => ["Physics" =>62,"Maths" =>67,"Camistry" =>92]
   
];
echo "<table border= '2px' cellpading= '5px' cellspacing= '0px' >

<tr>
     <th>Student Name</th>
     <th>Physics</th>
     <th>Maths</th>
     <th>Camistry</th>

</tr>

";
foreach ($marks as $key => $v1) {
    
    echo "<tr>
    
              <td> $key </td>"; 
              
    foreach ($v1 as $v2) {
        
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";
?>