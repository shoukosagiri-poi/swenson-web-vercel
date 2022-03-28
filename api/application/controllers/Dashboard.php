<?php

class Dashboard extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Swenson - Dashboard Page';
        $this->load->view('templates/sidebar', $data);
		$this->load->view('admin/index');
        $this->load->view('templates/footerbar');

	}
}
