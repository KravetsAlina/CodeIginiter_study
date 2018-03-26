<?php

class Home extends CI_Controller {

	public function main() {
			//собирает представл главн табл
		//загруж хед футер
				$this->load->view('shaired/header');
				$this->load->view('home/main');
				$this->load->view('shaired/footer');

	}

	public function about() {
			$this->load->view('home/about');
	}

	public function contacts() {
			$this->load->view('home/contacts');
	}
}