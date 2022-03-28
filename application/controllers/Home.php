<?php

class Home extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Swenson - Home Page';
        $this->load->view('templates/header', $data);
		$this->load->view('home/index');
        $this->load->view('templates/footer');

	}
}
