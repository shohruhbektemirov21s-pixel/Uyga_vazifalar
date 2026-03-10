<?php 
$uqivchi1 = "Ali"; 
$uqivchi1bahosi = 5; 
$uqivchi1bahosi1 = 3; 
$uqivchibahosi2 = 4; 

$uqivchi2 = "Vali";   
$uqivchi2bahosi = 3;
$uqivchi2bahosi1 = 5;   
$uqivchi2bahosi2 = 4;

$uqivchi3 = "G'ani";    
$uqivchi3bahosi = 4;    
$uqivchi3bahosi1 = 5;    
$uqivchi3bahosi2 = 3;

echo "
<table style='border:1px solid black; border-collapse:collapse; text-align:center;'> 

<tr> 
<th style='border:1px solid black; padding:5px;'>Uqivchi</th> 
<th style='border:1px solid black; padding:5px;'>Bahosi</th> 
<th style='border:1px solid black; padding:5px;'>Bahosi1</th>
<th style='border:1px solid black; padding:5px;'>Bahosi2</th>
</tr>

<tr>
<td>".$uqivchi1."</td> 
<td>".$uqivchi1bahosi."</td> 
<td>".$uqivchi1bahosi1."</td> 
<td>".$uqivchibahosi2."</td>
</tr>

<tr>
<td>".$uqivchi2."</td> 
<td>".$uqivchi2bahosi."</td> 
<td>".$uqivchi2bahosi1."</td>
<td>".$uqivchi2bahosi2."</td>
</tr>

<tr>
<td>".$uqivchi3."</td> 
<td>".$uqivchi3bahosi."</td> 
<td>".$uqivchi3bahosi1."</td> 
<td>".$uqivchi3bahosi2."</td> 
</tr>

</table>
";
?>