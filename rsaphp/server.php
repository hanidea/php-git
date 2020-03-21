<?php


$private = '-----BEGIN RSA PRIVATE KEY-----
MIIEoQIBAAKCAQBnTj4S97mYkJePENDd1SR6sFjFFCdPQ1KTa+fPsv1VRP4+9FtD
wj4Oz5MQeaw0I0hOFIjEy2wVNds5dXbY3njKKVSw13CcQ7AtsoEy5i/gGhwEiaZe
wC8Of2FsHGBc5Agw99Pbbbgj+nXlPGfax4x1+3uB3xIWc9ivnWKvTC3eV2bjvXj4
6d7Cz0Vn9Y0xAFY8hiY2F+jV2iJO9cNuyPWPicIEHCfDv3WnXNU3WvwdaxVXTrGs
OMIVjL4w9yhdoSFLigmUKvY0pQOaakSQaR4aGvkznndEzVyjaQqmIAZHeoaUeGAd
Kyyk4GTFJyHz+QeW2S4vdatSwHoQX/yunLDVAgMBAAECggEAQ9pqfz7jUsg2JCwh
ZHNpIITP6bKRF0ja5iXL/upL50QH0wXhJCJjbIr+x6WDbEN4bICkTM5oUY4sThNP
WqbVo8N98yGuv5TeFUXYArya2ZGMsZZQBpAo2FbmgIIq8Rh+INvG9auddVQ/N7Bz
bon/QkdKGkWQtdqlisPPW+CniA/+rSYpmXB4ygeGq/gp8n1BBQy8b4PlftVyQ2Gt
texbuBNr4a8PQ5DztkUdNArV4jzkeOkvk6lZmq8RWCwSWzo2QLuYS4ZfRvhcCwV4
x7E5mNBNLPGhY+ZK0U8i0L3zyBBnBhKLS6vCOpdJrXEUUrc2eGxZBIPemxGB3Okd
bPbTyQKBgQCoR5+oaeAd4bAFEF7kOJhisgky9a2lzJAfgEX7lX06lzulWnnlLUs5
qf1tG61e56NoF8SFweLqXJ50V/ZqTEtJgrTgPsnjesJefEfqbHQ+Pcxr9ZOhpTC3
w7+NDavQ3oK+qBYX7hLgofIo/T8nSZvvpVrnvdwKjb58v05FVxzI4wKBgQCdKAkU
G8tUvumOd3LAdSVVpJjwwJjz4zjOK53lqH5Idh2hmR53VcKJ2qkMEEJsbOSxywB7
FBctHGwYA+iwatMFZ72j8dgYGzHCcNNvV0rHautmu7ZS5YQsXQ0zCwbWfmmB4BNw
UFtbeM42bJPdSbOqLGaPtQwRXetrq0gC7eak5wKBgFroNmv4pkX+QeS6b0jC+i93
FlkdN222ELWzyhqbK0eXo3U0Z11TFqxUFL/4j7QRVslI7bWEhF0vI7qeOlQ6WwGf
Rq9NvCrTimUYppERfcqR//jidZqBbswXR0ef9w2i5uawTx8mUbRgSD20cYV70m2n
2nAOtOxOnnUts87pvHcZAoGAUWqMSX6cuCqvlL8NE+ecj+HV2ePtWWw94ZF3G6NO
yPtoHm/U+L3VKtW8/iLuRn2jfPhOJ3UhDJ3M4iQkSEEPUZ2NAYIpEVQFU1ZgMy5l
7ynVCkP1EL0W3GTYkbkEsdqLjl0ntOfsbFcJfeiCMgIcseyOtaR1vAmMDRuPEvVs
p8ECgYB/GnGM1HAShL1ruS/Gu8JbZN671PsG83/xMMadB6eAicS+HAnWA+BEaJ9G
/XK+r2wk+mO8WQdoEl7Z9z7ga/02WuMIGwNSR4FjY/ZtK3ei/Dd4x3a/Iv/Mb1eo
z50zvSHGS1icNS0ESJlG0UdDNefohsex8Ylfd9pPr+4fwPxcJQ==
-----END RSA PRIVATE KEY-----';

//接收q参数的
//解析编码
$q = $_GET['q'];
//解密
//将数据赋值给param
$value = '';
openssl_private_decrypt($q,$value,$private);
$params = [];
parse_str($value,$params);
//$params = $_GET;
$sign = getSign($params);
if ($sign !=$params['sign']){
    echo 'error';die;
}

$list =[
   "function"=>"aes",
   "key"=>"aaaaaa",
];
print_r(
    $list
);

//echo 'success';


function getSign($params)
{
    $conf = [
        'fdjdcpcoododpddd' => 'ferg84ergg8gdg8v34v35dv5d',
    ];
    var_dump(abs($params['time']-time()));
    if (abs($params['time']-time())>=600){      
        echo '连接超时!';die;
    }
    unset($params['sign']);

    ksort($params);

    $q = http_build_query($params);
    return md5($q.$conf[$params['appKey']]);
}