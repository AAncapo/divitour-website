<?php

function set_psmall ($title="",$key_value="") {
    $display = $key_value=='' ? 'none' : 'initial';
    return '<p class="card-text" style="display:' . $display . ';">
                <small class="text-muted">' . $title . $key_value . '</small>
            </p>';
}

function set_simple_p ($title="", $keyval="", $id="", $class = "") {
    $ini_display = $id=='servDesc'? '-webkit-box':'initial';
    $display = $keyval=='' ? 'none' : $ini_display;
    
    return '<p id='.$id.' class='.$class.' style="display:'.$display.';">'.$title.$keyval.'</p>';
}