<?php

function set_service_text($key_value, $title="") {
    $display = $key_value=='' ? 'none' : 'initial';
    return '<p class="card-text" style="display:' . $display . '">
                <small class="text-muted">' . $title . $key_value . '</small>
            </p>';

}