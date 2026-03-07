<?php 
$uqivchi1 = "Ali";
$uqivchi1bahosi = 5;
$uqivchi1bahosi1 = 5;
$uqivchibahosi2 = 5;

$uqivchi2 = "Vali";   
$uqivchi2bahosi = 4;
$uqivchi2bahosi1 = 4;   
$uqivchi2bahosi2 = 4;

$uqivchi3 = "G'ani";    
$uqivchi3bahosi = 3;    
$uqivchi3bahosi1 = 3;    
$uqivchi3bahosi2 = 3;

echo "
<table style='border:1px solid black; border-collapse:collapse; text-align:center;'> #jadval yaratish

<tr> #Jadvalning birinchi qatori
<th style='border:1px solid black; padding:5px;'>Uqivchi</th> #Jadvalning birinchi qatorining birinchi ustuni
<th style='border:1px solid black; padding:5px;'>Bahosi</th> #Jadvalning birinchi qatorining ikkinchi ustuni
<th style='border:1px solid black; padding:5px;'>Bahosi1</th> #Jadvalning birinchi qatorining uchinchi ustuni
<th style='border:1px solid black; padding:5px;'>Bahosi2</th> #Jadvalning birinchi qatorining to'rtinchi ustuni
</tr>

<tr>
<td>".$uqivchi1."</td>#Jadvalning ikkinchi qatori, birinchi ustuni uqivchi1 ni yozish
<td>".$uqivchi1bahosi."</td>#Jadvalning ikkinchi qatori, ikkinchi ustuni uqivchi1bahosi ni yozish 
<td>".$uqivchi1bahosi1."</td> #Jadvalning ikkinchi qatori, uchinchi ustuni uqivchi1bahosi1 ni yozish
<td>".$uqivchibahosi2."</td> #Jadvalning ikkinchi qatori, to'rtinchi ustuni uqivchi1bahosi2 ni yozish
</tr>

<tr>
<td>".$uqivchi2."</td>#Jadvalning uchinchi qatori, birinchi ustuni uqivchi2 ni yozish
<td>".$uqivchi2bahosi."</td>#Jadvalning uchinchi qatori, ikkinchi ustuni uqivchi2bahosi ni yozish
<td>".$uqivchi2bahosi1."</td>#Jadvalning uchinchi qatori, uchinchi ustuni uqivchi2bahosi1 ni yozish
<td>".$uqivchi2bahosi2."</td>#Jadvalning uchinchi qatori, to'rtinchi ustuni uqivchi2bahosi2 ni yozish
</tr>

<tr>
<td>".$uqivchi3."</td>#Jadvalning to'rtinchi qatori, birinchi ustuni uqivchi3 ni yozish
<td>".$uqivchi3bahosi."</td>#Jadvalning to'rtinchi qatori, ikkinchi ustuni uqivchi3bahosi ni yozish
<td>".$uqivchi3bahosi1."</td>#Jadvalning to'rtinchi qatori, uchinchi ustuni uqivchi3bahosi1 ni yozish
<td>".$uqivchi3bahosi2."</td>#Jadvalning to'rtinchi qatori, to'rtinchi ustuni uqivchi3bahosi2 ni yozish
</tr>

</table>
";
?>