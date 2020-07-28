<?php 

$emp = [
    [1,"Krishna","Manager",50000],
    [2,"Salman","Salesman",20000],
    [3,"Mohan","Computer Operator",12000],
    [4,"Amir","Driver",5000]
];
echo "<table border = '2px' cellpadding= '5px' cellspacing= '0px'>";
echo "<tr>
    <th>Emp Id.</th>
    <th>Name.</th>
    <th>Designation.</th>
    <th>Salary.</th>
</tr>";

foreach ($emp as $v1) {
    echo "<tr>";
    foreach ($v1 as $v2) {
        
        echo "<td> $v2 </td>";
    }
echo "</tr>";
}

echo "</table>";
?>