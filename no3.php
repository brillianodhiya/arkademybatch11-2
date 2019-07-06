<?php
$n = 12;
echo $n."->";
if($n % 2 == 0){
    while($n = $n / 2) {
        echo $n."->";
        if($n % 2 == 1){
            break;
        }
    }
    while($n = 3*$n+1){
        echo $n."->";
        if($n % 2 == 0){
            break;
        }
    }
    while($n = $n / 2) {
        echo $n."->";
        if($n % 2 == 1){
            break;
        }
    }
    while($n = 3*$n+1){
        echo $n."->";
        if($n % 2 == 0){
            break;
        }
    }
    while($n = $n / 2) {
        echo $n."->";
        if($n % 2 == 1){
            break;
        }
    }
} else {
    while($n = 3*$n+1){
        echo $n."->";
         if($n % 2 == 0){
            break;
        }
    }
    while($n = $n / 2) {
        echo $n."->";
        if($n % 2 == 1){
            break;
        }
    }
    while($n = 3*$n+1){
        echo $n."->";
        if($n % 2 == 0){
                break;
            }
        }
    while($n = $n / 2) {
        echo $n."->";
        if($n % 2 == 1){
            break;
            }
        }
}
?>