<?php
use Illuminate\Support\Carbon;


function conversion($number) {
    $digit = new NumberFormatter("fr", NumberFormatter::SPELLOUT);
    return $digit->format($number);
}

function moispayer($dt){
    $now=Carbon::now();
    $d=Carbon::parse($dt);
    $now->gt($d)?$signe="-":$signe="+";
    $diff=$now->diffInMonths($dt);

    return $signe.$diff;
}
