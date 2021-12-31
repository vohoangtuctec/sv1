<?php

// Đang ở học kỳ 1 năm học 2020-2021
// Tích luỹ hk1 – 2019-2020
// Tich luỹ hk2-2019-2020
// Tích luỹ hk1-2020-2021

function getTBTLTheoHKNK($idsv,$hk,$nienkhoa){return 1;}
//Giả sử có hàm: getTBTLTheoHKNK($idsv,$hk,$nienkhoa)
$hk=1;
$nienkhoa="2019-2020";
$idsv = 123;
$namBatDau = 2019;
$namNiennKhoa = substr($nienkhoa,5,4); //right(nienkhoa,4)
echo "Tính TB Tích luỹ khi đang ở HK: ".$hk." - Niên khoá: ".$nienkhoa."<br>";
echo "<p>Các học kỳ cần tính tích luỹ:</p>";
$tongTBTL = 0;
for($i=$namBatDau;$i<$namNiennKhoa;$i++){
    $nk = $i."-".($i+1);
    if($nk!==$nienkhoa){
        echo "1-".$nk. "<br>";
        $tongTBTL = $tongTBTL + getTBTLTheoHKNK($idsv,1,$nk);
        echo "2-".$nk. "<br>";
        $tongTBTL = $tongTBTL + getTBTLTheoHKNK($idsv,2,$nk);
    }else{
        if($hk==1){
            echo $hk."-".$nk. "<br>";
            $tongTBTL = $tongTBTL + getTBTLTheoHKNK($idsv,1,$nk);
        }elseif($hk==2){
            echo ($hk-1)."-".$nk. "<br>";
            $tongTBTL = $tongTBTL + getTBTLTheoHKNK($idsv,1,$nk);
            echo $hk."-".$nk. "<br>";
            $tongTBTL = $tongTBTL + getTBTLTheoHKNK($idsv,2,$nk);
        }  
    }   
}

?>

