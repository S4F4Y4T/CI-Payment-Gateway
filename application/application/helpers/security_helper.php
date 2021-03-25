<?php

if (!function_exists('csrf_token')) {

    function csrf_token($id)
    {
        $id = md5($id);
        return sha1(time() . $id);
    }

}

if (!function_exists('filter')) {

    function filter($data)
    {
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        $data = htmlentities($data);
        return $data;
    }

}

if (!function_exists('valid_url')) {

    function valid_url($string)
    {
        if (!filter_var($string, FILTER_VALIDATE_URL) === FALSE) {
            return TRUE;
        }
    }

}