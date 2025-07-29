<?php
//QUI主题自定义函数,文件有待加密
$QUI_url = "https://zy.51qux.com";
$QUI_code = "/api/codes";
$codes;
$newvision = "1.0";
function HttpGet($query)
{
    global $QUI_url, $QUI_code;
    $url = $QUI_url . $QUI_code . '?' . $query;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 500);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_URL, $url);
    $res = curl_exec($curl);
    curl_close($curl);
    return $res;
}
// 验证激活码,和域名有效性
function get_code_status()
{
    global $newvision;
    $reslut = "0";
    $local_code = get_option("theme_code");
    $local_time = get_option("theme_time");
    $todaytime = time();
    if ($local_time) {
        $diff_seconds = intval($todaytime) - intval($local_time);
        $diff_days = floor($diff_seconds / 86400);
        if ($diff_days < "30") {
            return "1";
        } else {
            if ($local_code && strlen($local_code) == 19) {
                $query = "code=" . $local_code;
                $res1 = HttpGet($query);
                $res1 = json_decode($res1);
                $localdomain = $_SERVER['HTTP_HOST'];
                $resdata = false;
                foreach ($res1 as $key => $value) {
                    if ($key == 'status') {
                        $status = $value;
                    }
                    if ($key == 'data') {
                        $resdata = $value;
                    }
                }
                if ($resdata && is_object($resdata)) {
                    foreach ($resdata as $key => $value) {
                        if ($key == 'domain') {
                            $domain = $value;
                        }
                        if ($key == 'domain_01') {
                            $domain1 = $value;
                        }
                        if ($key == 'domain_02') {
                            $domain2 = $value;
                        }
                        if ($key == 'version') {
                            $newvision = $value;
                        }
                    }
                    if ($localdomain == $domain || $localdomain == $domain1 || $localdomain == $domain2) {
                        $reslut = "1";
                        update_option("theme_time", $todaytime);
                    }
                }
                return $reslut;
            } else {
                return $reslut;
            }
        }
    } else {
        if ($local_code && strlen($local_code) == 19) {
            $query = "code=" . $local_code;
            $res1 = HttpGet($query);
            $res1 = json_decode($res1);
            $localdomain = $_SERVER['HTTP_HOST'];
            $resdata = false;
            foreach ($res1 as $key => $value) {
                if ($key == 'status') {
                    $status = $value;
                }
                if ($key == 'data') {
                    $resdata = $value;
                }
            }
            if ($resdata && is_object($resdata)) {
                foreach ($resdata as $key => $value) {
                    if ($key == 'domain') {
                        $domain = $value;
                    }
                    if ($key == 'domain_01') {
                        $domain1 = $value;
                    }
                    if ($key == 'domain_02') {
                        $domain2 = $value;
                    }
                    if ($key == 'version') {
                        $newvision = $value;
                    }
                }
                if ($localdomain == $domain || $localdomain == $domain1 || $localdomain == $domain2) {
                    $reslut = "1";
                    update_option("theme_time", $todaytime);
                }
            }
            return $reslut;
        } else {
            return $reslut;
        }
    }
}
