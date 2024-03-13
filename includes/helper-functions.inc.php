<?php

function get_display($row,$visible='initial') {
    $display = $row != '' ? $visible : 'none';
    return $display;
}