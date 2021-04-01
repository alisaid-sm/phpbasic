<?php 
function ratarata($mtk, $bindo, $bing, $ipa) {
    if(is_numeric($mtk) && is_numeric($bindo) && is_numeric($bing) && is_numeric($ipa)){
        $rr = ($mtk + $bindo + $bing + $ipa)/4;
        $grd;
        if ($rr >= 90 && $rr <= 100) {
            $grd = 'A';
        } else if ($rr >= 80 && $rr <= 89){
            $grd = 'B';
        } else if ($rr >= 70 && $rr <= 79){
            $grd = 'C';
        } else if ($rr >= 60 && $rr <= 69){
            $grd = 'D';
        } else if ($rr >= 0 && $rr <= 59){
            $grd = 'E';
        }
        echo "Rata-Rata = $rr </br>";
        echo "Grade = $grd";
    } else {
        return 'input harus berupa angka';
    }
};

ratarata('90', 90, 90, 90);