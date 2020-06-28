<?php

$contador = 1;

// loop com 'while'.
echo "loop com while." . PHP_EOL;
while($contador <= 15) {
    echo "#$contador" . PHP_EOL;
    $contador += 1;
}

//loop com 'for'.
echo "loop com for." . PHP_EOL;
for($contador = 1; $contador <= 15; $contador++) {
    echo "#$contador" . PHP_EOL;
}

//loop com 'do-while'.
$contador = 1;
echo "loop com do-While." . PHP_EOL;
do {
    echo "#$contador" . PHP_EOL;
    $contador += 1;

} while ($contador <= 15);

//loop com 'continue'.
echo "loop com *continue*." . PHP_EOL;
for($contador = 1; $contador <= 15; $contador++) {
    if($contador == 11) { 
        continue;
    }
    echo "#$contador" . PHP_EOL;
}

//loop com 'break'.
echo "loop com *break*." . PHP_EOL;
for($contador = 1; $contador <= 15; $contador++) {
    if($contador == 11) { 
        break;
    }
    echo "#$contador" . PHP_EOL;
}

?>