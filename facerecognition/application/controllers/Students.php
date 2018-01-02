<?php

	class Students extends CI_Controller{

		public function dashboard(){
			$this->load->view('templates/header');
			$this->load->view('pages/students');
			$this->load->view('templates/footer');
		}
	}

