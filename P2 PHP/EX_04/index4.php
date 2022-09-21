<?php
$array = array("abc", "bcd", "jko", "lop", "ted", "ji", "tr");

$max=max($array);
$min=min($array);
echo "<p>El valor máximo es: ".$max;
echo "<br>El valor minimo es: ".$min."<p>";
for($i=0;$i<count($array);$i++)
{
    if($array[$i]==$max)
        echo "<br>Máximo: Se encuentra en la posición ".$i;
    if($array[$i]==$min)
        echo "<br>Minimo: Se encuentra en la posición ".$i;
}









?>
