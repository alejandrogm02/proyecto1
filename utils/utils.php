<?php
function esOpcionMenuActiva($option){
    if (strpos($_SERVER["REQUEST_URI"], "/". $option) === 0 ){
        return true;
    }elseif ("/" === $_SERVER["REQUEST_URI"] && ("index" == $option)){
        return true;
    }else   
        return false;
}
function  existeOpcionMenuActivaEnArray($options){
    foreach ($options as $option){
        if (esOpcionMenuActiva($option)) {
            return true;
        }
    }
    return false;
}