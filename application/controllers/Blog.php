<?php

class Blog extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model');
        // $data['blog'] = $this->Blog_model->getALLBlog();

    }

	public function index()
    {
        $data['title'] = 'Swenson - Blog Page';
        $data['blog'] = $this->Blog_model->getALLBlog();
        $this->load->view('templates/header-home', $data);
		$this->load->view('blog/index');
        $this->load->view('templates/footer');
        
	}   
	public function ayang_beb(){
        $data['title'] = 'Swenson - Do You Know What I Was Thinking To Be Her Wife Right Now?';
        $data['blog'] = $this->Blog_model->getALLBlog();
        $this->load->view('templates/header-home', $data);
		$this->load->view('blog/ayang-beb/index');
        $this->load->view('templates/footer');
        
	}   
}
