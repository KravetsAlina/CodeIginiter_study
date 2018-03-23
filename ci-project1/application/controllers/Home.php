<?php

class Home extends CI_Controller {

	public function main() {
			$data['title'] = 'Main web page';
			$data['header'] = 'Список студентов';
			$data['students'] = array('Иванов', 'Петров', 'Сидоров');
			$this->load->view('home/main', $data);
	}

	public function about() {
			$this->load->view('home/about');
	}

	public function contacts() {
			$this->load->view('home/contacts');
	}
}