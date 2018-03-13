<?php
class Angular_test extends CI_Controller {
	public function index() {
		//$this->load->helper('url');
		$data['title'] = 'Angular Test';
		$this->load->view('pages/angular_test', $data);
	}

	public function ajax_load_data() {
		$data = array(
			array('id' => '1', 'name' => 'Ben', 'city' => 'St. Catharines'),
			array('id' => '2', 'name' => 'Angela', 'city' => 'St. Catharines'),
			array('id' => '3', 'name' => 'Jaime', 'city' => 'St. Catharines'),
		);
		echo json_encode($data);
	}
}