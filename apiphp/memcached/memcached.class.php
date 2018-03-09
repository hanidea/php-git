<?php
class Mem
{
    private $type = 'Memcached';
    private $m;
    private $time = 0;
    private $error;
    private $debug ='true';
    public function __construct(){
        if(!class_exists($this->type)){
            $this->error = 'No'.$this->type;
            return false;
        }else{
            $this->m = new $this->type;
        }
    }
    public function addServers($arr)
    {
        $this->m->addServers($arr);
        if($this->m->getResultCode()!=0){
            return false;
        }
    }
    public function s($key,$value='',$time = NULL)
    {
        $number = func_num_args();
        if($number==1)
        {
            //get
            return $this->getw($key);
        }else if($number>=2)
        {
           if($value === NULL){
              //delete
              $this->delete($key);
           }else{
              //set
              $this->setw($key,$value,$time);      
           }
        }
    }
    private function setw($key,$value,$time = NULL)
    {
        if($time === NULL)
        {
            $time = $this->time;
        }
        $this->m->set($key,$value,$time);
        if($this->m->getResultCode()!=0){
         return false;
        }
        if($this->debug){
            if($this->m->getResultCode()!=0){
                return false;
            }
        }
        
    }
    private function getw($key)
    {
        $ret=$this->m->get($key);
        //echo $this->m->getResultCode();
        if($this->m->getResultCode()!=0){
            return false;
        }else{
            return $ret;
        }
        if($this->debug){
            if($this->m->getResultCode()!=0){
                return false;
            }else{
                return $return;
            }
        }else{
            return $return;
        }
    }
    private function delete($key)
    {
        $this->m->delete($key);
    }
    public function getError()
    {
        if($this->error){
            return $this->error;
        }else{
            return $this->m->getResultMessage();
        }
    }

}