<?php
namespace App\common\Auth;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Parser;
use Lcobucci\JWT\ValidationData;
use Lcobucci\JWT\Signer\Hmac\Sha256;
/**
 * 单例 一次请求中所有出现使用jwt都是一个用户
 */
class JwtAuth

{
    /**
     * token
     */
    private $token;
    private $iss = 'laravelapi.com:8888';
    private $aud = 'laravelapi';
    private $uid;
    private $secrect = 'swfsff#W#2r3efewefss';
    private $decodeToken;
    private static $instance;

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct(){

    }
    private function __clone(){

    }
    /**
     * 获取token文件
     */
    public function getToken(){
        return (string)$this->token;
    }

    public function setToken($token){
        $this->token = $token;
        return $this;
    }

    /**
     * Uid
     */
    public function setUid($uid){
        $this->uid = $uid;
        return $this;
    }

    public function encode(){
        $time = time();
        $this->token = (new Builder())->setHeader('alg','HS256')
             ->setIssuer($this->iss)
             ->setAudience('$this->aud')
             ->setIssuedAt($time)
             ->setExpiration($time + 3600)
             ->set('uid',$this->uid)
             ->sign(new Sha256(),$this->secrect)
             ->getToken();
        return $this;
    }

    public function decode(){
        if(!$this->decodeToken){
            $this->decodeToken = (new Parser())->parse((string)$this->token);
            $this->uid = $this->decodeToken->getClaim('uid');
        }
        return $this->decodeToken;
    }

    public function verify(){
        $result = $this->decode()->verify(new Sha256(),$this->secret);
        return $result;
    }

    public function validate()
    {
        $data = new ValidationData();
        $data->setIssuer($this->iss);
        $data->setAudience($this->aud);

        return $this->decode()->validate($data);
    }


        
}