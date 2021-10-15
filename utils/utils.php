<?php
function esOpcionMenuActiva($option){
    if($_SERVER["REQUEST_URI"] == $option){
        return true;
    }else{
        return false;
    }
}
