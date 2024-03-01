<?php

function set_psmall ($title="",$key_value="") {
    $display = $key_value=='' || $key_value==0 ? 'none' : 'initial';
    $br = $display !== 'none'? '<br>':'';

    return '<p class="card-text" style="display:' . $display . ';">
                <small class="text-muted">' . $title . $key_value . '</small>
            </p>'.$br.'';
}

function set_simple_p ($title="", $keyval="",$id="",$class="") {
    $ini_display = $id == 'servDesc' ? '-webkit-box' : 'initial';
    $display = $keyval == '' ? 'none' : $ini_display;
    $br = $display !== 'none'? '<br>':'';
    return '<p id='.$id.' class='.$class.' style="display:'.$display.';">'.$title.$keyval.'</p> '.$br.'';
}