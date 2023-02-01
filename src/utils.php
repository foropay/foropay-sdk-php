<?php

function get_foropay_url_prefix($env) {
    return $env == 'prod' ? '' : 'test-';
}

function get_foropay_api_url($env) {
    return 'https://' . get_foropay_url_prefix($env) .'api.foropay.eu/v1/';
}
