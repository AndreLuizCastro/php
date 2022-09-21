<?php
$idade=0;
$c=12;
$a=18;
$i=65;

 if($idade < $c)
{
	echo "criança";
}
else if($idade >= $c && $idade < $a )
{
	echo "adolecente";
}

else if($idade > $a && $idade < $i )
{
	echo "adulto";
}
else
{
	echo "idosos";
}

?>
