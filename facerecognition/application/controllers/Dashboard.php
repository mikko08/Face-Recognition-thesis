<?php

	class Dashboard extends CI_Controller{

		public function dashboard(){
			$this->load->view('templates/header');
			$this->load->view('pages/dashboard');
			$this->load->view('templates/footer');
		}
	}

