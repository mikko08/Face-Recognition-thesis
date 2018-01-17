<?php

	class Instructor extends CI_Controller{

		public function charts(){
			$this->load->view('templates/header');
			$this->load->view('pages/instructor');
			$this->load->view('templates/footer');
		}
	}

