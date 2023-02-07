<?php

namespace Foropay;

class Utils {
    public static function get_url_prefix($env) {
        return $env == 'prod' ? '' : 'test-';
    }
    
    public static function get_api_url($env) {
        return 'https://' . self::get_url_prefix($env) .'api.foropay.eu/v1/';
    }
    
    public static function is_valid_signature($private_key, $data, $signature) {
        $body = is_string($data) ? $data : json_encode($data);
        $key = str_replace('pr_', '', $private_key);
        return hash_hmac('sha256', $str_data, $key) == $signature;
    }
}
