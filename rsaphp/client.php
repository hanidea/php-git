<?php
$public = '-----BEGIN PUBLIC KEY-----
MIIBITANBgkqhkiG9w0BAQEFAAOCAQ4AMIIBCQKCAQBnTj4S97mYkJePENDd1SR6
sFjFFCdPQ1KTa+fPsv1VRP4+9FtDwj4Oz5MQeaw0I0hOFIjEy2wVNds5dXbY3njK
KVSw13CcQ7AtsoEy5i/gGhwEiaZewC8Of2FsHGBc5Agw99Pbbbgj+nXlPGfax4x1
+3uB3xIWc9ivnWKvTC3eV2bjvXj46d7Cz0Vn9Y0xAFY8hiY2F+jV2iJO9cNuyPWP
icIEHCfDv3WnXNU3WvwdaxVXTrGsOMIVjL4w9yhdoSFLigmUKvY0pQOaakSQaR4a
GvkznndEzVyjaQqmIAZHeoaUeGAdKyyk4GTFJyHz+QeW2S4vdatSwHoQX/yunLDV
AgMBAAE=
-----END PUBLIC KEY-----';

$appKey = 'fdjdcpcoododpddd';
$secretKey = 'ferg84ergg8gdg8v34v35dv5d';

$url = 'http://phptest.com//server.php?';

$params['appKey'] = $appKey;
$params['orderId'] = 1;
$params['name']     ='Darren';
$params['password'] = '123321';
$params['time']     = time();

$queryString = http_build_query($params);

$sign = getSign($params,$secretKey);
$queryString .="&sign=" .$sign;
//$url .= $queryString;

$encrypt = '';
openssl_public_encrypt($queryString,$encrypt,$public);
$encrypt = urlencode($encrypt);
$url .='q=' . $encrypt;
var_dump($url);

function getSign($params,$secretKey)
{
    ksort($params);
    $q = http_build_query($params);

    $q.=$secretKey;
    return md5($q);
}