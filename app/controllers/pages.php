<?php
class Pages extends CI_Controller {
	public function view($page='home') {
		if (! file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			//codeigniter to load 404
			show_404();
		}

		//begin with capical
		$data['title'] = ucfirst($page);

		//$this->load->view('layouts/main', $data);
		$this->load->view('pages/'.$page, $data);
	}
}