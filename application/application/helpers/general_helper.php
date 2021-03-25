<?php

if (!function_exists('generateStyleMarkup')) {

    function generateStyleMarkup($url)
    {
        return '<link href="' . $url . '" rel="stylesheet" type="text/css" />';
    }

}

if (!function_exists('generateScriptMarkup')) {

    function generateScriptMarkup($url)
    {
        return '<script src="' . $url . '"></script>';
    }

}

if (!function_exists('ipToLocation')) {

    function ipToLocation()
    {
        $lquery = @unserialize(file_get_contents('http://pro.ip-api.com/php/' . $_SERVER['REMOTE_ADDR']));
        if ($lquery && $lquery['status'] == 'success') {
            return $lquery['city'] . ", " . $lquery['country'];
        }
    }

}

if (!function_exists('generate_date_string')) {

    function generate_date_string($date)
    {
        $datearr = explode("-", $date);
        $mnum = $datearr[1];
        if ($mnum == "01") {
            $m = "January";
        } elseif ($mnum == "02") {
            $m = "February";
        } elseif ($mnum == "03") {
            $m = "March";
        } elseif ($mnum == "04") {
            $m = "April";
        } elseif ($mnum == "05") {
            $m = "May";
        } elseif ($mnum == "06") {
            $m = "June";
        } elseif ($mnum == "07") {
            $m = "July";
        } elseif ($mnum == "08") {
            $m = "August";
        } elseif ($mnum == "09") {
            $m = "September";
        } elseif ($mnum == "10") {
            $m = "October";
        } elseif ($mnum == "11") {
            $m = "November";
        } elseif ($mnum == "12") {
            $m = "December";
        }
        return $m . ' ' . $datearr[2] . ', ' . $datearr[0];
    }

    //Returns global stylesheet array
    if (!function_exists('generateGlobalStyleSheet')) {

        function generateGlobalStyleSheet($theme, $extra_styles = array())
        {
            $stylesheetList = array(
                site_url() . 'assets/' . $theme . '/dist/assets/plugins/global/plugins.bundle.css',
                site_url() . 'assets/' . $theme . '/dist/assets/plugins/custom/prismjs/prismjs.bundle.css',
                site_url() . 'assets/' . $theme . '/dist/assets/css/style.bundle.css',
                site_url() . 'assets/' . $theme . '/dist/assets/css/themes/layout/header/base/light.css',
                site_url() . 'assets/' . $theme . '/dist/assets/css/themes/layout/header/menu/light.css',
                site_url() . 'assets/' . $theme . '/dist/assets/css/themes/layout/brand/light.css',
                site_url() . 'assets/' . $theme . '/dist/assets/css/themes/layout/aside/light.css',

            );

            return array_merge($stylesheetList, $extra_styles);
        }
    }

    //Returns global stylesheet array
    if (!function_exists('generateGlobalScripts')) {

        function generateGlobalScripts($theme, $extra_scripts = array())
        {
            $page_scripts = array(
                site_url() . 'assets/' . $theme . '/dist/assets/plugins/global/plugins.bundle.js',
                site_url() . 'assets/' . $theme . '/dist/assets/plugins/custom/prismjs/prismjs.bundle.js',
                site_url() . 'assets/' . $theme . '/dist/assets/js/scripts.bundle.js',
            );

            return array_merge($page_scripts, $extra_scripts);
        }
    }


}