<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	
	public function index()
	{
		$data['bgcolor'] = '';
		$this->load->view('user/userHeader',$data);
		$this->load->view('user/home');
		$this->load->view('user/userFooter');
	}

	public function loadpage()
	{
		$data['bgcolor'] = 'bg-white';
		$page='user/'.$this->uri->segment('1');
		// echo $page;exit();
        $data['page_title']=$this->uri->segment('1');
		$this->load->view('user/userHeader',$data);
		$this->load->view('user/include/breadCrumb',$data);
		$this->load->view($page);
		$this->load->view('user/userFooter');
	}

	
	// public function shop()
	// {
	// 	$this->load->view('user/userHeader');
	// 	$this->load->view('user/shop');
	// 	$this->load->view('user/userFooter');
	// }

	
	// public function productDetails()
	// {
	// 	$this->load->view('user/userHeader');
	// 	$this->load->view('user/productDetails');
	// 	$this->load->view('user/userFooter');
	// }
}
