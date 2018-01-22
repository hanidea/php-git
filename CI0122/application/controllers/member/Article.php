<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article extends CI_Controller {

	public function index()
	{
		
		//echo "CItest";
		//$this->load->view('article/article_detail');
		//$this->load->view('article/header');
		$this->data = '欢迎到CI';
		$view = $this->load->view('article/body',$this,true);
		$this->load->view('article/footer');
		$view = 'CItest'.$view;
		echo $view;
		
	}
	public function detail()
	{
		//加载模型
		//autoload.php
		//$this->load->model('article_model');
		//调用模型中的方法
		$result=$this->article_model->detail(2);
		echo "<pre>";
		print_r($result);
	}
}
