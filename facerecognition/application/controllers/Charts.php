<?php

	class Charts extends CI_Controller{

		public function dashboard(){
			$this->load->view('templates/header');
			$this->load->view('pages/charts');
			$this->load->view('templates/footer');
		}
	}

