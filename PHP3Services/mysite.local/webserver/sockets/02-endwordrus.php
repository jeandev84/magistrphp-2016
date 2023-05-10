<?php
// https://gist.github.com/d1i1m1o1n/0d060f76a3fd2e869252
function getNumEnding($number, $endingArray) {
    $number = $number % 100;
    if ($number>=11 && $number<=19) {
        $ending=$endingArray[2];
    } else  {
        $i = $number % 10;
        switch ($i) {
            case (1): $ending = $endingArray[0]; break;
            case (2): case (3): case (4): $ending = $endingArray[1]; break;
            default: $ending=$endingArray[2];
        }
    }
    return $ending;
}
?>

<?=$num?> <?=getNumEnding($num, Array("товар", "товара", "товаров"))?>