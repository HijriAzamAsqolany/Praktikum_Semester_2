<?php
function kelulusan($_nilai){
    if ($_nilai > 55 ){
        return 'Anda Lulus';
    }else{
        return 'Anda Tidak lulus, im so sorry'
    }
}
function grade($_nilai){
    if ($_nilai >= 85){
        return "A";
    }elseif($_nilai >= 70){
        return "B";
    }
}
?>